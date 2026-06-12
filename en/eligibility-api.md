#  - CMS ACCESS Model API v0.9.12

## 

### How to Use the API

The ACCESS Eligibility API uses an asynchronous pattern for checking patient eligibility for the CMS ACCESS Model. The pattern uses two operations to support a submit-and-poll workflow:

1. **$check-eligibility**: Submits an eligibility check request
1. **$submission-status**: Polls for the status of a submitted request

#### Asynchronous Interaction Pattern

The Eligibility API uses an asynchronous request-response pattern to accommodate the processing time required for eligibility determination. This pattern allows clients to submit eligibility check requests and subsequently poll for results without maintaining a persistent connection.

These operations can take some time to complete, making a synchronous request-response pattern impractical for real-world implementations.

#### Detailed Interaction Sequence

The following sequence diagram illustrates the complete interaction pattern:

```
sequenceDiagram
    participant Client as ACCESS Participant
    participant Server as Eligibility API
    participant Backend as Processing System

    Client->>Server: POST [base]/access/Patient/$check-eligibility
    Note over Client,Server: Request includes:<br/>- ParticipantID<br/>- PayerID<br/>- Patient (Patient)<br/>- Track<br />- Conditions (optional)
    
    Server->>Backend: Queue eligibility check
    Backend-->>Server: Submission queued
    
    alt Still Processing
        Server-->>Client: 202 Accepted
        Note over Server,Client: Content-Location header<br/>(no response body)
    else Processing Complete - Error
        API-->>Client: 4xx or 5xx
        Note over Server,Client: OperationOutcome<br/>with error details
    end       
    
    loop Polling until complete
        Client->>Server: GET [base]/access/Patient/$submission-status/<SubmissionID>
        
        alt Still processing
            Server-->>Client: 202 Accepted
            Note over Server,Client: Still processing<br/>(no response body)
            Note over Client: Wait before next poll<br/>(recommended: 5-30 seconds)
        else Processing complete
            Server->>Backend: Retrieve results
            Backend-->>Server: Eligibility determination
            Server-->>Client: 200 OK with result
            Note over Server,Client: Parameters with<br/>eligibility result code
            Note over Server,Client: optional OperationOutcome<br/>with issue details
        else Error occurred
            Server-->>Client: 4xx or 5xx
            Note over Server,Client: OperationOutcome<br/>with error details
        end
    end

```

#### Operation Details

##### $check-eligibility Operation

The `$check-eligibility` operation initiates an asynchronous eligibility determination request.

**Endpoint**: `POST [base]/access/Patient/$check-eligibility?entityId=[participantID]`

**Query Parameters**:

* `entityId` (required): ACCESS participant identifier. Must follow the pattern `ACCES#####`.

**Request Parameters Profile**: [ACCESS Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md)

**Input Parameters**:

* `participantID` (Identifier, required): The ACCESS ID for the submitting participant
* `payerID` (Identifier, required): The payer ID for the patient. Uses the X12 EDI Payer ID standard (`urn:oid:2.16.840.1.113883.3.221.5`) with [CARIN Blue Button identifier typing](http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType). EDI Payer IDs are 5-character alphanumeric codes widely used in healthcare transactions (e.g., eligibility checks, claims, remittance).
* `patient` (Patient Resource, required): Patient information conforming to US Core Patient Profile. **SHOULD** contain the Medicare Beneficiary Identifier (MBI). To be eligible and align to a CMS ACCESS participant, a patient must be a Medicare beneficiary.
* `track` (CodeableConcept, required): The ACCESS Model track to check for eligibility
* `conditions` (Condition Resources, optional): Zero or more Condition resources conforming to [ACCESS Condition Profile](StructureDefinition-access-condition.md) describing the patient's health concerns. Implementers **SHOULD** use track-specific profiles ([ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md), [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md), [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md), [ACCESSBHCondition](StructureDefinition-access-bh-condition.md)) when submitting conditions for a known track. A condition, or diagnosis code, does not need to be included in the eligibility check for it to process. But, if the code is included, it should be an expected code for the track the patient is being considered for.

**NOTE**: The IG will accept any patient identifier and payer identifier so that this IG can be used by other payers looking to align with the ACCESS Model. However, for a patient to be eligible for the CMS ACCESS Model, they need to have Medicare fee-for-service as their primary insurance and you must submit a valid MBI as the patient identifier.

**Expected Response**:

* **Status Code**: 202 Accepted
* **HTTP Headers**: `Content-Location` header containing the URL to check submission status
* **Response Body**: Empty (no body while processing)

**Example Request**:

```
POST https://[base]/access/Patient/$check-eligibility?entityId=ACCES12345
Content-Type: application/json

```

```
{
  "resourceType" : "Parameters",
  "id" : "CheckEligibilityRequestExample",
  "meta" : {
    "profile" : [
      🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-in"
    ]
  },
  "language" : "en",
  "parameter" : [
    {
      "name" : "participantID",
      "valueIdentifier" : {
        "system" : "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value" : "ACCES12345"
      }
    },
    {
      "name" : "payerID",
      "valueIdentifier" : {
        "type" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
              "code" : "payerid",
              "display" : "Payer ID"
            }
          ]
        },
        "system" : "urn:oid:2.16.840.1.113883.3.221.5",
        "value" : "12345"
      }
    },
    {
      "name" : "patient",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "PatientExample",
        "meta" : {
          "profile" : [
            🔗 "http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"
          ]
        },
        "language" : "en",
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MC"
                }
              ]
            },
            "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
            "value" : "1EG4TE5MK73"
          }
        ],
        "name" : [
          {
            "family" : "Doe",
            "given" : [
              "John"
            ]
          }
        ],
        "gender" : "male",
        "birthDate" : "1950-01-01"
      }
    },
    {
      "name" : "track",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code" : "CKM",
            "display" : "Cardio-kidney-metabolic track"
          }
        ]
      }
    }
  ]
}

```

**Example Response**:

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

(No response body - processing asynchronously)

##### $submission-status Operation

The `$submission-status` operation retrieves the current status of a previously submitted eligibility check request. This is a **read-only operation** that uses the HTTP GET method.

**Response Parameters Profile**: [ACCESS Eligibility Response Parameters](StructureDefinition-access-check-eligibility-out.md)

**Understanding Response Behavior**:

* **`HTTP 202 Accepted`**: Request is still being processed. Response has **no body**. Continue polling.
* **`HTTP 200 OK`**: Processing is complete. Response **always** contains a Parameters resource with the `result` parameter indicating the outcome.
* **`HTTP 4xx/5xx`**: An error occurred. Response contains an OperationOutcome with error details (no Parameters resource).

**Eligibility Result Codes**:

When processing is complete (HTTP 200), the `result` parameter uses codes from the **ACCESSEligibilityResultVS** value set:

* **`eligible`**: Patient is eligible for services under the model. This response does not mean the patient has been aligned. It simply means the patient is eligible to be aligned.
* **`eligible-pending-diagnosis`**: Patient is provisionally eligible for services under the model depending on the diagnosis.
* **`eligible-switch-participants`**: Patient is eligible to switch participants. This code indicates that the patient is already aligned to another participant, but they are outside of the 90-day lock-in period with that participant.
* **`not-eligible-not-medicare`**: The patient either: (1) is not enrolled in Medicare Part A and Part B; (2) is not dual eligible for Medicare and Medicaid; or (3) they do not have Medicare as their primary insurance, so they are not eligible for services under the ACCESS Model.
* **`not-eligible-services`**: The patient is receiving services (including receiving hospice services or dialysis for end stage renal disease (ESRD)) making them ineligible to be part of the ACCESS Model. Patients who are part of the Program of All-Inclusive Care for the Elderly (PACE) Program are also not eligible for the ACCESS Model.
* **`not-eligible-diagnoses`**: The patient does not have a treating diagnosis that qualifies them for services in the track indicated and therefore cannot get services under the ACCESS Model.
* **`not-eligible-control-group`**: The patient is technically eligible for the ACCESS Model, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months.
* **`not-eligible-already-aligned`**: The patient is technically eligible, but has already aligned to another participant within the past 90 days and is receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track.

**Example Responses**:

**Response:**

```
HTTP/1.1 202 Accepted

```

(No response body - still processing)

**Example Status Check Request (Processing Complete - Eligible)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "eligible",
            "display": "Eligible"
          }
        ],
        "text": "Patient is eligible for services under the model. This response does not mean the patient has been aligned. It simply means the patient is eligible to be aligned."
      }
    }
  ]
}

```

**Example Status Check Request (Processing Complete - Not Eligible)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-control-group",
            "display": "Not eligible - assigned to Control Group"
          }
        ],
        "text": "The patient is technically eligible for the ACCESS Model, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months."
      }
    }
  ]
}

```

#### Example Complete Workflow

The following example demonstrates a complete eligibility check workflow:

**Step 1: Submit Eligibility Check**

```
POST https://[base]/access/Patient/$check-eligibility?entityId=ACCES12345
Content-Type: application/json

```

```
{
  "resourceType" : "Parameters",
  "id" : "CheckEligibilityRequestExample",
  "meta" : {
    "profile" : [
      🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-in"
    ]
  },
  "language" : "en",
  "parameter" : [
    {
      "name" : "participantID",
      "valueIdentifier" : {
        "system" : "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value" : "ACCES12345"
      }
    },
    {
      "name" : "payerID",
      "valueIdentifier" : {
        "type" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
              "code" : "payerid",
              "display" : "Payer ID"
            }
          ]
        },
        "system" : "urn:oid:2.16.840.1.113883.3.221.5",
        "value" : "12345"
      }
    },
    {
      "name" : "patient",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "PatientExample",
        "meta" : {
          "profile" : [
            🔗 "http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"
          ]
        },
        "language" : "en",
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "MC"
                }
              ]
            },
            "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
            "value" : "1EG4TE5MK73"
          }
        ],
        "name" : [
          {
            "family" : "Doe",
            "given" : [
              "John"
            ]
          }
        ],
        "gender" : "male",
        "birthDate" : "1950-01-01"
      }
    },
    {
      "name" : "track",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code" : "CKM",
            "display" : "Cardio-kidney-metabolic track"
          }
        ]
      }
    }
  ]
}

```

**Response:**

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

**Step 2: Extract Submission URL and Wait**

* Extract submission URL from Content-Location header
* Wait 5 seconds before first poll

**Step 3: First Status Check** (after 5 seconds)

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 202 Accepted

```

(Still processing - no body)

**Step 4: Second Status Check** (after another 15 seconds)

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "eligible",
            "display": "Eligible"
          }
        ],
        "text": "Patient is eligible for services under the model. This response does not mean the patient has been aligned. It simply means the patient is eligible to be aligned."
      }
    }
  ]
}

```

**Step 5: Process Result**

* Parse the result code: `"eligible"`
* Display the text to the user
* Proceed with alignment workflow

#### API-Specific Response Scenarios

For general response handling guidance and common scenarios (missing parameters, invalid tokens, server errors, etc.), see the [Error Handling section in General Guidance](guidance.md#error-handling).

The following responses are specific to the Eligibility API and are returned as part of normal processing (HTTP 200 with specific result codes):

##### Not Eligible - Already Aligned

**Scenario**: Patient is already aligned to another provider in the same track.

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-already-aligned",
            "display": "Not eligible - already aligned to another participant in the track"
          }
        ],
        "text": "The patient is technically eligible, but is already aligned to another participant and receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track."
      }
    }
  ]
}

```

##### Not Eligible - Control Group

**Scenario**: Patient has been randomized into the control group.

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-control-group",
            "display": "Not eligible - assigned to Control Group"
          }
        ],
        "text": "The patient is technically eligible for the ACCESS Model, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months."
      }
    }
  ]
}

```

##### Not Eligible - No Qualifying Diagnosis

**Scenario**: Patient lacks the required diagnosis for the specified track.

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-diagnoses",
            "display": "Not eligible - no qualifying diagnosis"
          }
        ],
        "text": "The patient does not have a treating diagnosis that qualifies them for services in the track indicated and therefore cannot get services under the ACCESS Model."
      }
    }
  ]
}

```

##### Not Eligible - Receiving Exclusionary Services

**Scenario**: Patient is receiving services that prevent ACCESS participation.

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-services",
            "display": "Not eligible - receiving services that prevent eligibility"
          }
        ],
        "text": "The patient is receiving services (such as hospice, end stage renal disease (ESRD), etc.) making them ineligible to be part of the ACCESS Model."
      }
    }
  ]
}

```

##### Not Eligible - Not Medicare

**Scenario**: Patient is not receiving Medicare or Medicare is not primary insurance.

```
HTTP/1.1 200 OK
Content-Type: application/json

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
            "code": "not-eligible-not-medicare",
            "display": "Not eligible - not receiving Medicare"
          }
        ],
        "text": "The patient either is not enrolled in Medicare Part A and Part B or dual eligible for Medicare and Medicaid, or they do not have Medicare as their primary insurance, so they are not eligible for services under the ACCESS Model."
      }
    }
  ]
}

```

**Note**: These are successful responses (HTTP 200) that contain business logic results. All of these scenarios represent valid processing outcomes for eligibility checks.

