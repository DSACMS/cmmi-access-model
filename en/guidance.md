#  - CMS ACCESS Model API v0.9.8

## 

This Operations Manual provides general implementation guidance applicable to all ACCESS Model APIs.

### Common Patterns

All ACCESS Model APIs follow consistent asynchronous processing and parameter patterns for ease of implementation. The Alignment API uses an asynchronous request-response pattern to accommodate the processing time required for backend logic. This pattern allows clients to submit requests and subsequently poll for results without maintaining a persistent connection. The pattern uses two sets of operations to support a submit-and-poll workflow:

1. **$check-eligibility, $align, $unalign, $report-data**: Submits a request to the API
1. **$submission-status**: Polls for the status of a submitted request

##### Why Asynchronous?

ACCESS operations can take some time to complete making a synchronous request-response pattern impractical for real-world implementations.

Processing these operations may require:

* Conducting additional data validation specific to the ACCESS Model
* Processing complex composition structures with nested sections
* Integrating with multiple backend systems to evaluate ACCESS Model requirements
* Applying control group randomization algorithms

#### Workflow Overview

The typical workflow consists of the following steps:

1. **Submission**: The client submits a`$check-eligibility`,`$align`,`$unalign`,`$report-data`operation
1. **Acknowledgment**: The server returns`HTTP 202 Accepted`with a`Content-Location`header containing the URL for retrieving submission status
1. **Polling**: The client periodically polls using the`$submission-status`operation through the submission status URL provided
1. **Completion**: When processing completes, the submission status returns`HTTP 200 OK`with the final result

**Interaction Pattern:**

The following sequence diagram illustrates the general asynchronous pattern used by all ACCESS APIs:

```
sequenceDiagram
    participant Client as ACCESS Participant System
    participant API as ACCESS API
    participant Backend as Backend Processing

    Client->>API: POST [base]/access/Patient/$operation
    Note over Client,API: Submit request with required parameters
    
    API->>Backend: Queue request for processing
    Backend-->>API: Request queued
    
    alt Still Processing
        API-->>Client: 202 Accepted
        Note over API,Client: Content-Location header with status URL<br/>(no response body)
    else Processing Complete - Error
        API-->>Client: 4xx or 5xx
        Note over API,Client: OperationOutcome<br/>with error details
    end       
    
    loop Status Polling
        Client->>API: GET [base]/access/Patient/$submission-status/<submissionID>
        
        alt Still Processing
            API-->>Client: 202 Accepted
            Note over API,Client: No response body<br/>Continue polling
            Note over Client: Wait 5-30 seconds
        else Processing Complete - Success
            API->>Backend: Retrieve result
            Backend-->>API: Operation result
            API-->>Client: 200 OK
            Note over API,Client: Parameters resource<br/>with result code
            Note over API,Client: optional OperationOutcome<br/>with issue details
        else Processing Complete - Error
            API-->>Client: 4xx or 5xx
            Note over API,Client: OperationOutcome<br/>with error details
        end
    end

```

#### Required Query Parameters

All primary operations ($check-eligibility, $align, $unalign, $report-data) require an `entityId` query parameter:

* `entityId` (required): ACCESS participant identifier. Must follow the pattern `ACCES#####`.

#### Required Operation Parameters

All primary operations ($check-eligibility, $align, $unalign, $report-data) require these common parameters:

* **participantID** - ACCESS participant identifier. This identifier is supplied to the ACCESS participant during the Request for Application (RFA) process and takes the form of “ACCES<5-digit number>” (ACCES00001, ACCES12345).
* **payerID** - The payer ID for the patient. Uses the X12 EDI Payer ID standard (`urn:oid:2.16.840.1.113883.3.221.5`) with [CARIN Blue Button identifier typing](http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType). EDI Payer IDs are 5-character alphanumeric codes widely used in healthcare transactions (e.g., eligibility checks, claims, remittance).
* **patientID, name, gender** - Patient ID, name, and gender. This information with the US Core Patient Profile.
* **track** - One of the ACCESS Model tracks (eCKM, CKM, MSK, BH).

Some operations may require additional parameters. Please consult the documentation in this guide for information about each specific API.

##### $submission-status Operation

The `$submission-status` operation retrieves the current status of a previously submitted request. This is a **read-only operation** that uses the HTTP GET method. The URL used to retrieve the submission status is returned by the primary operation (extracted from the `Content-Location` URL).

**Submission Status URL**: `GET <submission status URL>`

**Output Parameters** (when complete):

* `result` (CodeableConcept, required): Result code with descriptive text indicating the status. Actual values depend on the API in use.
* `issues` (OperationOutcome, optional): This parameter **MAY** be included to provide more detail about the context of the result code.

**Example Response from a Primary Operation**:

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

(No response body - processing asynchronously)

### Implementation Guidance

#### Base URL

All primary operations are invoked at the resource level:

```
POST https://[base]/access/[resource]/[$operation]?entityId=[participantID]

```

Where `[base]` is the FHIR server base URL provided during participant registration Where `[resource]` is Patient Where `[$operation]` is the primary dollar sign operation (e.g., $check-eligibility, $align, $unalign, $report-data) Where `[entityId]` is the participant ID (e.g., of the form `ACCES#####`)

#### Content Types

* **Request:** `application/fhir+json`
* **Response:** `application/fhir+json`

#### Patient Identification

##### Medicare Beneficiary Identifier (MBI)

All APIs require a `patientID`. Each API requires the patient's member ID (e.g., for CMS's ACCESS Model, the patient's MBI) in the Patient resource, whether it is a separate parameter or part of the Data Reporting bundle. FOR CMS's ACCESS Model only, a patient must be a Medicare beneficiary to be eligible and align to a CMS ACCESS participant:

```
{
  "resourceType": "Patient",
  "identifier": [
    {
      "type": {
        "coding": [
          {
            "system": "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code": "MC"
          }
        ]
      },
      "system": "http://terminology.hl7.org/NamingSystem/cmsMBI",
      "value": "1EG4TE5MK73"
    }
  ],
  "name": [
    {
      "family": "Doe",
      "given": ["John"]
    },
    "gender" : "male"
  ],
}

```

NOTE: The IG will accept any patient identifier and payer identifier so that this IG can be used by other payers looking to align with the ACCESS Model.

##### Using the Content-Location HTTP Header

ACCESS operations return a `Content-Location` HTTP header containing the URL to check the status of the submission. Clients should:

1. Extract the`Content-Location`header value from the HTTP response
1. Use this URL for subsequent`$submission-status`calls

**Example**:

```
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

##### Polling Strategy

Clients should implement an appropriate polling strategy to balance responsiveness with server load:

* **Initial Poll**: Wait 5-10 seconds after submission before the first status check
* **Subsequent Polls**: Poll every 10-30 seconds while receiving HTTP 202 Accepted
* **Maximum Duration**: Implement a timeout (recommended: 5 minutes) after which the client should stop polling and notify the user; the actual timeout duration should be configured based on operational requirements.
* **Exponential Backoff**: Consider implementing exponential backoff to reduce server load for long-running requests

**Polling Logic**:

```
1. Initiate the ACCESS operation (POST $<operation> with required parameters)
2. Receive HTTP 202 with Content-Location
3. Wait initial delay (5-10 seconds)
4. While (timeout not exceeded):
   a. Poll status (GET $submission-status)
   b. If HTTP 202: wait and continue loop
   c. If HTTP 200: process result and exit
   d. If HTTP 4xx/5xx: handle error and exit
5. If timeout exceeded: handle as error

```

##### Interpreting Responses

**HTTP 202 Accepted**: The request is being processed. No result is available yet. Continue polling.

**HTTP 200 OK**: Processing is complete. The response body contains a Parameters resource with the result. For example, here is a sample response from a successful request:

```
{
  "resourceType": "Parameters",
  "parameter": [{
    "name": "result",
    "valueCodeableConcept": {
      "coding": [{
        "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
        "code": "aligned",
        "display": "Aligned"
      }],
      "text": "Patient is eligible and has been aligned so the ACCESS participant can now begin providing services to the patient under the model."
    }
  }]
}

```

Clients should:

1. Extract`parameter[0].valueCodeableConcept`from the Parameters resource
1. Check`coding[0].code`against known alignment result codes
1. Display`text`element for user-friendly messaging
1. Take appropriate action based on the result code for the particular API. These actions are covered in the documentation for each API.

#### Error Handling

Clients should be prepared to handle the following conditions:

**HTTP Status Code Errors**:

* **400 Bad Request**: Malformed request - check Parameters structure and required fields
* **404 Not Found**: Submission ID not found - verify the submission ID is correct
* **500 Internal Server Error**: Server processing error - retry after delay or contact support
* **503 Service Unavailable**: Service temporarily unavailable - implement retry logic

**Client-Side Errors**:

* **Timeout**: No response received after maximum polling duration - log and notify user
* **Network Error**: Connection failure - implement retry logic with exponential backoff

**Best Practice**: Always check HTTP status codes before attempting to parse the response body. Only `HTTP 200` responses contain the result from the original request.

##### Security Considerations

* All API interactions **SHALL** use TLS 1.3
* Clients **SHALL** authenticate using approved OAuth 2.0
* Submission identifiers should be treated as sensitive information and protected accordingly
* Clients should implement appropriate audit logging for all requests
* The `Content-Location` HTTP header URL may contain sensitive identifiers and should be handled securely

##### Best Practices

1. **Idempotency**: Avoid submitting duplicate requests for the same patient
1. **Resource Validation**: Validate input resources against FHIR profiles before submission
1. **MBI Handling**: Ensure Medicare Beneficiary Identifiers (MBIs) are handled according to CMS data sharing policies
1. **Result Code Handling**: Implement robust parsing for all possible result codes
1. **Submission ID Management**: Store submission IDs securely and maintain their association with original requests

##### OperationOutcome

Errors are returned using FHIR OperationOutcome resources:

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invalid",
      "details": {
        "text": "Missing required parameter: participantID"
      }
    }
  ]
}

```

##### Error Handling Flow Diagram

The following diagram illustrates the complete error handling flow for ACCESS API interactions:

```
flowchart TD
    Start([Submit Request]) --> Auth{Valid<br/>Token?}
    Auth -->|No| Err401[Return 401 Unauthorized]
    Auth -->|Yes| Validate{Valid<br/>Parameters?}
    
    Validate -->|No| CheckError{Error Type?}
    CheckError -->|Missing Parameter| Err400A[Return 400 Bad Request<br/>Missing required parameter]
    CheckError -->|Invalid Format| Err400B[Return 400 Bad Request<br/>Invalid format]
    CheckError -->|Invalid Value| Err400C[Return 400 Bad Request<br/>Invalid value]
    
    Validate -->|Yes| Queue[Queue for Processing]
    Queue --> Return202[Return 202 Accepted<br/>with Content-Location]
    
    Return202 --> Poll([Client Polls Status])
    Poll --> CheckStatus{Processing<br/>Status?}
    
    CheckStatus -->|Still Processing| Return202Poll[Return 202 Accepted<br/>No body]
    Return202Poll --> Wait[Client Waits]
    Wait --> Poll
    
    CheckStatus -->|Complete - Success| Return200[Return 200 OK<br/>with result]
    CheckStatus -->|Complete - Business Logic Error| Return200Error[Return 200 OK<br/>with error result code]
    
    CheckStatus -->|System Error| Err500[Return 500 Internal Error]
    CheckStatus -->|Not Found| Err404[Return 404 Not Found]

```

**Key Decision Points**:

1. **Authentication**: First check validates the OAuth token
1. **Parameter Validation**: Validates required parameters and their formats
1. **Asynchronous Processing**: Valid requests are queued and return HTTP 202 (Accepted)
1. **Status Polling**: Client repeatedly checks status until completion (returns something other than HTTP 202)
1. **Result Interpretation**:
* HTTP 200 with success result code = operation succeeded
* HTTP 200 with issue result code = business logic prevented operation (e.g., not-eligible, already-aligned)
* HTTP 4xx/5xx = technical error occurred

##### Common Error Scenarios

###### Submission Errors (400 Bad Request)

**Missing Required Parameter:**

```
POST https://[base]/access/Patient/$check-eligibility?entityId=ACCES12345

```

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": { "text": "Missing required parameter: patient" }
    }
  ]
}

```

**Invalid MBI Format:**

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invalid",
      "details": { "text": "Invalid Medicare Beneficiary Identifier (MBI) format" }
    }
  ]
}

```

**Invalid Track Code:**

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "code-invalid",
      "details": {
        "text": "Invalid track code. Must be one of: eCKM, CKM, MSK, BH"
      }
    }
  ]
}

```

**Malformed Parameters Resource:**

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "structure",
      "details": {
        "text": "Parameters resource structure is invalid"
      },
      "diagnostics": "Expected Parameters.parameter array but received malformed JSON"
    }
  ]
}

```

**Invalid Participant ID (400):**

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invalid",
      "details": {
        "text": "Participant ID is not valid"
      }
    }
  ]
}

```

**FHIR Validation Failure:**

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invalid",
      "details": { 
        "text": "FHIR validation failed: Patient.identifier.system is required when Patient.identifier.value is present" 
      },
      "diagnostics": "The Patient resource does not conform to the US Core Patient profile. MBI identifier must include both 'system' (http://terminology.hl7.org/NamingSystem/cmsMBI) and 'value' elements."
    }
  ]
}

```

###### Status Check Errors

**Submission ID Not Found (404):**

```
GET https://[base]/access/Patient/$submission-status/invalid-sub-id

```

```
HTTP/1.1 404 Not Found
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "not-found",
      "details": { "text": "Submission ID 'invalid-sub-id' not found" }
    }
  ]
}

```

###### Authentication and Authorization Errors

**Missing or Invalid Token (401):**

```
HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer error="invalid_token"
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "security",
      "details": {
        "text": "Invalid or expired access token"
      }
    }
  ]
}

```

**Insufficient Scope (403):**

```
HTTP/1.1 403 Forbidden
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "forbidden",
      "details": {
        "text": "Insufficient scope for requested operation."
      }
    }
  ]
}

```

###### Server Errors

**Service Temporarily Unavailable (503):**

```
HTTP/1.1 503 Service Unavailable
Retry-After: 60
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "transient",
      "details": {
        "text": "Service temporarily unavailable. Please retry after 60 seconds."
      }
    }
  ]
}

```

**Internal Server Error (500):**

```
HTTP/1.1 500 Internal Server Error
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "exception",
      "details": {
        "text": "An unexpected error occurred processing your request. Please contact support with submission ID if this persists."
      }
    }
  ]
}

```

**Example Status Check Request (Processing Complete - Aligned and Switch Approved)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "aligned-switch-approved",
            "display": "Aligned and switch approved"
          }
        ],
        "text": "The request to switch the patient's alignment from a different participant after the 90-day lock in period is accepted and the patient is considered switched and now re-aligned."
      }
    }
  ]
}

```

There are other types of errors specific to each API that may be returned. Please see the API Guidance menu in this manual to get more information and examples for those errors.

### Standards Alignment

This asynchronous pattern aligns with:

* **FHIR Asynchronous Request Pattern**: Follows FHIR's general guidance for asynchronous operations using HTTP 202 Accepted
* **HTTP Standards**: Uses appropriate HTTP status codes (202 Accepted, 200 OK, 4xx/5xx for errors)
* **FHIR Parameters Resource**: Uses standardized Parameters resources for operation input and output
* **FHIR Operations Framework**: Implements custom operations with proper input/output handling
* **FHIR OperationOutcome**: Uses OperationOutcome for error responses following FHIR conventions
* **US Core Profiles**: Aligns with US Core Patient and Condition profiles for patient data

For additional information about FHIR patterns, see:

* [FHIR Asynchronous Request Pattern](https://hl7.org/fhir/R4/async.html)
* [FHIR Parameters Resource](https://hl7.org/fhir/R4/parameters.html)
* [FHIR Operations Framework](https://hl7.org/fhir/R4/operations.html)
* [FHIR OperationOutcome](https://hl7.org/fhir/R4/operationoutcome.html)
* [US Core Implementation Guide](https://hl7.org/fhir/us/core/STU6.1/)

### Implementation Notes and Edge Cases

#### Handling Network Interruptions

**Scenario**: Network failure occurs during polling

**Implementation Guidance**:

* Store submission IDs and associated request context before starting to poll
* Implement resume logic that can continue polling after network restoration
* Use exponential backoff when reconnecting after network failure
* Set reasonable timeout limits (5 minutes recommended) to avoid infinite polling loops

#### Duplicate Submission Prevention

**Scenario**: User clicks submit button multiple times or system retries unnecessarily

**Implementation Guidance**:

* Implement client-side button disabling after first click
* Store submission IDs locally to detect duplicates
* Check if a recent submission exists for the same patient/operation before submitting again
* Use idempotency tokens if retrying after uncertain failures

#### Token Expiration During Long Operations

**Scenario**: OAuth token expires while waiting for async operation to complete

**Implementation Guidance**:

* Refresh tokens proactively before expiration (5 minutes before recommended)
* Store token expiration time and check before each status poll
* Implement automatic token refresh in polling loop
* Handle HTTP 401 responses by refreshing token and retrying once

#### Multiple Diagnoses Across Tracks

**Scenario**: Patient has conditions qualifying for multiple tracks

**Implementation Guidance**:

* Patient can be aligned to multiple tracks simultaneously*
* Each track requires a separate alignment request
* Track alignments are independent - success/failure in one does not affect others
* Data reporting is track-specific - submit separate bundles for each track
* Patient can be aligned to different participants or the same participant in different tracks
* **The one exception** to this rule applies to the eCKM and CKM tracks. Patients cannot be enrolled in both tracks at the same time. If a patient is already aligned to the eCKM track and elects to enroll in the CKM track, or vice versa, they can change tracks immediately. In this case the 90-day lock-in period does not apply.

### Next Steps and support

* Review the [Authentication](authentication.md) guidance
* Consult API-specific guidance pages under the API Guidance menu
* Reference the [Artifacts](artifacts.md) in the ACCESS FHIR IG for technical specifications
* Contact the ACCESS Model support team if you have any questions ([ACCESSModelTeam@cms.hhs.gov](mailto:ACCESSModelTeam@cms.hhs.gov))

