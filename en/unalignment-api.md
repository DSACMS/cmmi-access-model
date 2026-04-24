#  - CMS ACCESS Model API v0.9.6

## 

### How to Use the API

The ACCESS Unalignment API uses an asynchronous pattern for processing manual unalignment requests for patients in the ACCESS Model. The pattern uses two operations to support a submit-and-poll workflow:

1. **$unalign**: Submits an unalignment request
1. **$submission-status**: Polls for the status of a submitted request

#### Asynchronous Interaction Pattern

The Unalignment API uses an asynchronous request-response pattern to accommodate the processing time required for unalignment determination. This pattern allows clients to submit unalignment requests and subsequently poll for results without maintaining a persistent connection.

These operations can take some time to complete, making a synchronous request-response pattern impractical for real-world implementations.

#### Detailed Interaction Sequence

The following sequence diagram illustrates the complete interaction pattern:

```
sequenceDiagram
    participant Client as ACCESS Participant
    participant Server as Unalignment API
    participant Backend as Processing System

    Client->>Server: POST [base]/access/Patient/$unalign
    Note over Client,Server: Request includes:<br/>- ParticipantID<br/>- PayerID<br/>- Patient (Patient)<br/>- Track<br/>- Reason<br/>- Conditions (optional)
    
    Server->>Backend: Queue unalignment request
    Backend-->>Server: Submission queued
    
    alt Still processing
        Server-->>Client: 202 Accepted
        Note over Server,Client: Content-Location header<br/>(no response body)
    else Error occurred
        Server-->>Client: 4xx or 5xx
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
            Backend-->>Server: Unalignment determination
            Server-->>Client: 200 OK with result
            Note over Server,Client: Parameters with<br/>unalignment result code
        else Error occurred
            Server-->>Client: 4xx or 5xx
            Note over Server,Client: OperationOutcome<br/>with error details
        end
    end

```

#### Operation Details

##### $unalign Operation

The `$unalign` operation initiates an asynchronous manual unalignment request.

**Endpoint**: `POST [base]/access/Patient/$unalign?entityId=[participantID]`

**Query Parameters**:

* `entityId` (required): ACCESS participant identifier. Must follow the pattern `ACCES#####`.

**Request Parameters Profile**: [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)

**Input Parameters**:

* `participantID` (Identifier, required): The ACCESS ID for the submitting participant
* `payerID` (Identifier, required): The payer ID for the patient. Uses the X12 EDI Payer ID standard (`urn:oid:2.16.840.1.113883.3.221.5`) with [CARIN Blue Button identifier typing](http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType). EDI Payer IDs are 5-character alphanumeric codes widely used in healthcare transactions (e.g., eligibility checks, claims, remittance).
* `patient` (Patient Resource, required): Patient information conforming to US Core Patient Profile. **SHOULD** contain the Medicare Beneficiary Identifier (MBI)
* `track` (Identifier, required): The track from which the patient should be unaligned
* `reason` (CodeableConcept, required): The reason for the manual unalignment request. Value from **ACCESSUnalignmentReasonVS** value set
* `conditions` (Condition Resources, conditional): Zero or more Condition resources conforming to [ACCESS Condition Profile](StructureDefinition-access-condition.md) describing the patient's health concerns. **NOTE: This parameter is required** when `reason` is `no-longer-clinically-eligible` to document the disqualifying diagnosis (enforced by invariant `access-unalign-condition-required`)

**Expected Response**:

* **Status Code**: 202 Accepted
* **HTTP Headers**: `Content-Location` header containing the URL to check submission status
* **Response Body**: Empty (no body while processing)

**Example Request**:

```
POST https://[base]/access/Patient/$unalign?entityId=ACCES12345
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "participantID",
      "valueIdentifier": {
        "system": "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value": "ACCES12345"
      }
    },
    {
      "name": "payerID",
      "valueIdentifier": {
        "type": {
          "coding": [{
            "system": "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
            "code": "payerid",
            "display": "Payer ID"
          }]
        },
        "system": "urn:oid:2.16.840.1.113883.3.221.5",
        "value": "12345"
      }
    },
    {
      "name": "patient",
      "resource": {
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
            "value": "1234567890A"
          }
        ],
        "name": [
          {
            "family": "Doe",
            "given": ["John"]
          }
        ],
        "gender": "male",
        "birthDate": "1950-01-01"
      }
    },
    {
      "name": "track",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code": "CKM",
            "display": "Cardio-Kidney-Metabolic track"
          }
        ]
      }
    },
    {
      "name": "reason",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentReasonCS",
            "code": "loss-of-contact",
            "display": "Loss of contact"
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

**Example Request (No Longer Clinically Eligible)**:

This example demonstrates unalignment when a patient has developed a new condition that makes them ineligible for the ACCESS Model. In this case, the patient was aligned to the CKM (Cardio-kidney-metabolic) track for diabetes management, but has now developed end-stage renal disease (ESRD) requiring dialysis, which makes them ineligible for the ACCESS Model per program requirements.

```
POST https://[base]/access/Patient/$unalign?entityId=ACCES12345
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "participantID",
      "valueIdentifier": {
        "system": "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value": "ACCES12345"
      }
    },
    {
      "name": "payerID",
      "valueIdentifier": {
        "type": {
          "coding": [{
            "system": "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
            "code": "payerid",
            "display": "Payer ID"
          }]
        },
        "system": "urn:oid:2.16.840.1.113883.3.221.5",
        "value": "12345"
      }
    },
    {
      "name": "patient",
      "resource": {
        "resourceType": "Patient",
        "id": "example",
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
            "value": "9876543210B"
          }
        ],
        "name": [
          {
            "family": "Smith",
            "given": ["Jane"]
          }
        ],
        "gender": "female",
        "birthDate": "1955-06-15"
      }
    },
    {
      "name": "track",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code": "CKM",
            "display": "Cardio-Kidney-Metabolic track"
          }
        ]
      }
    },
    {
      "name": "reason",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentReasonCS",
            "code": "no-longer-clinically-eligible",
            "display": "No longer clinically eligible"
          }
        ],
        "text": "Patient has developed end-stage renal disease (ESRD) requiring dialysis, which makes them ineligible for the ACCESS Model."
      }
    },
    {
      "name" : "condition",
      "resource" : {
        "resourceType" : "Condition",
        "id" : "ESRDConditionExample",
        "meta" : {
          "profile" : [
            🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-clinical-exclusion-condition"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">End stage renal disease (ESRD)</div>"
        },
        "clinicalStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
              "code" : "active",
              "display" : "Active"
            }
          ]
        },
        "verificationStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
              "code" : "confirmed",
              "display" : "Confirmed"
            }
          ]
        },
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
                "code" : "problem-list-item",
                "display" : "Problem List Item"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/sid/icd-10-cm",
              "code" : "N18.6",
              "display" : "End stage renal disease"
            }
          ]
        },
        "subject" : {
          🔗 "reference" : "Patient/PatientESRDExample"
        },
        "onsetDateTime" : "2026-01-15"
      }
    }
  ]
}

```

**Example Response**:

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-789012

```

(No response body - processing asynchronously)

##### $submission-status Operation

The `$submission-status` operation retrieves the current status of a previously submitted unalignment request. This is a **read-only operation** that uses the HTTP GET method.

**Endpoint**: `GET [base]/access/Patient/$submission-status/<submission-id>`

**Response Parameters Profile**: [ACCESS Unalignment Response Parameters](StructureDefinition-access-unalign-out.md)

**Understanding Response Behavior**:

* **`HTTP 202 Accepted`**: Request is still being processed. Response has **no body**. Continue polling.
* **`HTTP 200 OK`**: Processing is complete. Response **always** contains a Parameters resource with the `result` parameter indicating the outcome.
* **`HTTP 4xx/5xx`**: An error occurred. Response contains an OperationOutcome with error details (no Parameters resource).

**Unalignment Result Codes**:

When processing is complete (HTTP 200), the `result` parameter uses codes from the **ACCESSUnalignmentResultVS** value set:

* **`unaligned`**: The request to unalign the patient has been accepted and the patient has been successfully unaligned.
* **`unalignment-pending`**: Additional review is needed and you will receive further information once the manual review of the unalignment request is complete.
* **`patient-not-aligned`**: Patient is not currently aligned to this participant in the specified track and therefore cannot be unaligned.
* **`cannot-unalign-during-lock-in`**: Patient is within the 90-day lock-in period and cannot be unaligned.

**Unalignment Reason Codes**:

The `Reason` parameter in the `$unalign` operation uses codes from the **ACCESSUnalignmentReasonVS** value set:

* **`geographic-relocated`**: Patient has relocated outside of the geographic area in which the aligned participant is licensed to provide services
* **`loss-of-contact`**: Despite good faith efforts (defined as making three or more outreach attempts over 30 or more days), contact with the patient has been lost and therefore no longer able to engage with them
* **`no-longer-clinically-eligible`**: Patient's conditions have changed such that they are no longer eligible for the ACCESS Model
* **`patient-initiated`**: Patient no longer wants to participate in the ACCESS Model after the initial 90-day lock-in period

**Parameter Encoding for GET**:

The submission ID is passed as part of the URL path:

* Path: `GET https://[base]/access/Patient/$submission-status/sub-123456`

**Example Status Check Request (Still Processing)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 202 Accepted

```

(No response body - still processing)

**Example Status Check Request (Processing Complete - Unaligned)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "unaligned",
            "display": "Unaligned"
          }
        ],
        "text": "The request to unalign the patient has been accepted and the patient has been successfully unaligned."
      }
    }
  ]
}

```

**Example Status Check Request (Pending Manual Review)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "unalignment-pending",
            "display": "Unalignment pending further review"
          }
        ],
        "text": "Additional review is needed and you will receive further information once the manual review of the unalignment request is complete."
      }
    }
  ]
}

```

**Example Status Check Request (Patient Not Aligned)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "patient-not-aligned",
            "display": "Patient not aligned"
          }
        ],
        "text": "Patient is not currently aligned to this participant in the specified track and therefore cannot be unaligned."
      }
    }
  ]
}

```

**Example Status Check Request (Cannot Unalign During Lock-in)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "cannot-unalign-during-lock-in",
            "display": "Cannot unalign during lock-in"
          }
        ],
        "text": "Patient is within the 90-day lock-in period and cannot be unaligned."
      }
    }
  ]
}

```

#### Automatic Notification Cleanup

When a patient is successfully unaligned (result code `unaligned`), the system automatically stops sending email notifications about that patient. This ensures participants only receive notifications for currently aligned patients.

**NOTE:** Subscriptions will be maintained until all model obligations are completed for the patient. Some obligations will occur post unalignment.

**Unalignment Notification Process**:

When the `$unalign` operation completes successfully, the following occurs automatically:

1. **Unalignment Email Sent**: The system sends an email notification to the participant informing them that the patient has been unaligned and the alignment relationship has ended.
1. **Future Notifications Stopped**: The system automatically stops sending future email notifications about events for that patient (e.g., reporting deadlines, renewal reminders) after all model obligations are complete for the patient.

**Important Notes**:

* **Automatic Process**: Both the unalignment notification delivery and stopping of future notifications happen automatically as part of the unalignment workflow. No additional action is required by the ACCESS participant.
* **Notification Sent First**: An unalignment notification email is sent to inform the participant of the alignment termination before future notifications are stopped.
* **Prevents Future Notifications**: Stopping notifications ensures that participants do not receive future emails about patients who are no longer aligned.
* **Pending Unalignments**: If the unalignment result is `unalignment-pending` (requiring manual review), email notifications continue and no unalignment notification is sent until the unalignment is finalized with an `unaligned` result. Additional information can also be found in the Beneficiary Alignment Report for these cases.
* **Other Patients Unaffected**: Participant will continue to receive notifications for all other aligned patients.

**Cross-Reference**:

For complete details on the email notifications that are sent during alignment, see the [Subscriptions](subscriptions.md) section and the [Alignment API](alignment-api.md#automatic-push-notifications) documentation.

#### Example Complete Workflow

The following example demonstrates a complete unalignment request workflow:

**Step 1: Submit Unalignment Request**

```
POST https://[base]/access/Patient/$unalign?entityId=ACCES12345
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "participantID",
      "valueIdentifier": {
        "system": "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value": "ACCES12345"
      }
    },
    {
      "name": "payerID",
      "valueIdentifier": {
        "type": {
          "coding": [{
            "system": "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
            "code": "payerid",
            "display": "Payer ID"
          }]
        },
        "system": "urn:oid:2.16.840.1.113883.3.221.5",
        "value": "12345"
      }
    },
    {
      "name": "patient",
      "resource": {
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
            "value": "1234567890A"
          }
        ],
        "name": [
          {
            "family": "Doe",
            "given": ["John"]
          }
        ],
        "gender": "male",
        "birthDate": "1950-01-01"
      }
    },
    {
      "name": "track",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code": "CKM",
            "display": "Cardio-Kidney-Metabolic track"
          }
        ]
      }
    },
    {
      "name": "reason",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentReasonCS",
            "code": "geographic-relocated",
            "display": "Geographic relocated"
          }
        ],
        "text": "Patient has relocated outside of the geographic area in which the aligned participant is licensed to provide services."
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

* Extract submission URL "sub-123456" from Content-Location header
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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "unaligned",
            "display": "Unaligned"
          }
        ],
        "text": "The request to unalign the patient has been accepted and the patient has been successfully unaligned."
      }
    }
  ]
}

```

**Step 5: Process Result**

* Parse the result code: "`unaligned`"
* Display the text to the user
* Complete unalignment workflow and update internal systems

#### API-Specific Response Scenarios

For general response handling guidance and common scenarios (missing parameters, invalid tokens, server errors, etc.), see the [Error Handling section in General Guidance](guidance.md#error-handling).

The following responses are specific to the Unalignment API:

##### Not Unaligned - Patient Not Currently Aligned

**Scenario**: Attempting to unalign a patient who is not currently aligned to this ACCESS participant.

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
            "code": "patient-not-aligned",
            "display": "Patient not aligned"
        ],
        "text": "Patient is not currently aligned to this participant in the specified track and therefore cannot be unaligned."
      }
    }
  ]
}

```

##### Invalid Unalignment Reason

**Scenario**: Unalignment reason code is not recognized or invalid for the situation.

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
        "text": "Invalid unalignment reason code"
      },
      "diagnostics": "The reason code 'invalid-reason' is not a valid value from the ACCESSUnalignmentReasonVS value set. Valid reasons include: geographic-relocated, loss-of-contact, no-longer-clinically-eligible."
      }
    }
  ]
}

```

##### Missing Required Reason Parameter

**Scenario**: Unalignment request submitted without the required reason parameter.

```
POST https://[base]/access/Patient/$unalign?entityId=ACCES12345

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
      "details": {
        "text": "Missing required parameter: reason"
      },
      "diagnostics": "The 'reason' parameter is required for all unalignment requests and must contain a CodeableConcept from the ACCESSUnalignmentReasonVS value set."
    }
  ]
}

```

**Note**: These scenarios represent a mix of business logic results (HTTP 200 with specific result codes) and technical validation errors (HTTP 400). Always check the HTTP status code first to determine the type of response.

