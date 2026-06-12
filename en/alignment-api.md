#  - CMS ACCESS Model API v0.9.12

## 

### How to Use the API

The ACCESS Alignment API uses an asynchronous pattern for aligning patients to a track and participant in the CMS ACCESS Model. The pattern uses two operations to support a submit-and-poll workflow:

1. **$align**: Submits an alignment request
1. **$submission-status**: Polls for the status of a submitted request

#### Asynchronous Interaction Pattern

The Alignment API uses an asynchronous request-response pattern to accommodate the processing time required for alignment determination. This pattern allows clients to submit alignment requests and subsequently poll for results without maintaining a persistent connection.

These operations can take some time to complete, making a synchronous request-response pattern impractical for real-world implementations.

#### Detailed Interaction Sequence

The following sequence diagram illustrates the complete interaction pattern:

```
sequenceDiagram
    participant Client as ACCESS Participant
    participant Server as Alignment API
    participant Backend as Processing System

    Client->>Server: POST [base]/access/Patient/$align
    Note over Client,Server: Request includes:<br/>- ParticipantID<br/>- PayerID<br/>- Patient (Patient)<br/>- Track<br/>- Conditions (required)<br/>- isProviderReferral (required)<br/>- SwitchConsentAttestation (optional)
    
    Server->>Backend: Queue alignment request
    Backend-->>Server: Submission queued
    
    alt Still Processing
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
            Note over Server,Client: optional OperationOutcome<br/>with issue details
        else Processing complete
            Server->>Backend: Retrieve results
            Backend-->>Server: Alignment determination
            Server-->>Client: 200 OK with result
            Note over Server,Client: Parameters with<br/>alignment result code
        else Error occurred
            Server-->>Client: 4xx or 5xx
            Note over Server,Client: OperationOutcome<br/>with error details
        end
    end

```

#### Operation Details

##### $align Operation

The `$align` operation initiates an asynchronous alignment request to align a patient to a specific track and participant.

**Endpoint**: `POST [base]/access/Patient/$align?entityId=[participantID]`

**Query Parameters**:

* `entityId` (required): ACCESS participant identifier. Must follow the pattern `ACCES#####`.

**Request Parameters Profile**: [ACCESS Alignment Request Parameters](StructureDefinition-access-align-in.md)

**Input Parameters**:

* `participantID` (Identifier, required): The ACCESS ID for the submitting participant
* `payerID` (Identifier, required): The payer ID for the patient. Uses the X12 EDI Payer ID standard (`urn:oid:2.16.840.1.113883.3.221.5`) with [CARIN Blue Button identifier typing](http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType). EDI Payer IDs are 5-character alphanumeric codes widely used in healthcare transactions (e.g., eligibility checks, claims, remittance).
* `patient` (Patient Resource, required): Patient information conforming to US Core Patient Profile. **SHOULD** contain the Medicare Beneficiary Identifier (MBI)
* `track` (Value set, required): The requested track to align the patient
* `condition` (Condition Resources, required): One or more Condition resources conforming to [ACCESS Condition Profile](StructureDefinition-access-condition.md) describing the patient's health concerns. Implementers **SHOULD** use track-specific profiles ([ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md), [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md), [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md), [ACCESSBHCondition](StructureDefinition-access-bh-condition.md)) when aligning to a specific track.
* `isProviderReferral` (boolean, required): Indicates whether the patient was referred to the ACCESS Model by a provider.
* `switchConsentAttestation` (boolean, optional): Boolean flag indicating that the patient has provided consent to switch from another ACCESS participant after the 90-day lock-in period. When `true`, this indicates the participant has obtained and documented the patient's consent to switch participants.

**Expected Response**:

* **Status Code**: 202 Accepted
* **HTTP Headers**: `Content-Location` header containing the URL to check submission status
* **Response Body**: Empty (no body while processing)

**Example Request**:

```
POST https://[base]/access/Patient/$align?entityId=ACCES12345
Content-Type: application/json

```

```
{
  "resourceType" : "Parameters",
  "id" : "AlignmentRequestExample",
  "meta" : {
    "profile" : [
      🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-in"
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
    },
    {
      "name" : "condition",
      "resource" : {
        "resourceType" : "Condition",
        "id" : "ConditionDiabetesExample",
        "meta" : {
          "profile" : [
            🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-ckm-condition"
          ]
        },
        "language" : "en",
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">Type 2 diabetes mellitus without complications</div>"
        },
        "clinicalStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
              "code" : "active"
            }
          ]
        },
        "verificationStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
              "code" : "confirmed"
            }
          ]
        },
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
                "code" : "problem-list-item"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/sid/icd-10-cm",
              "code" : "E11.9",
              "display" : "Type 2 diabetes mellitus without complications"
            }
          ]
        },
        "subject" : {
          🔗 "reference" : "Patient/PatientExample"
        },
        "onsetDateTime" : "2020-01-15"
      }
    },
    {
      "name" : "isProviderReferral",
      "valueBoolean" : true
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

The `$submission-status` operation retrieves the current status of a previously submitted alignment request. This is a **read-only operation** that uses the HTTP GET method.

**Endpoint**: `GET [base]/access/Patient/$submission-status/<submission-id>`

**Response Parameters Profile**: [ACCESS Alignment Response Parameters](StructureDefinition-access-align-out.md)

**Understanding Response Behavior**:

* **`HTTP 202 Accepted`**: Request is still being processed. Response has **no body**. Continue polling.
* **`HTTP 200 OK`**: Processing is complete. Response **always** contains a Parameters resource with the `result` parameter indicating the outcome.
* **`HTTP 4xx/5xx`**: An error occurred. Response contains an OperationOutcome with error details (no Parameters resource).

**Alignment Result Codes**:

When processing is complete (HTTP 200), the `result` parameter uses codes from the **ACCESSAlignmentResultVS** value set:

* **`aligned`**: Patient is eligible and has been aligned so the participant can now begin providing services to the patient under the ACCESS Model.
* **`not-aligned-control-group`**: The patient is technically eligible, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months.
* **`not-aligned-already-aligned`**: The patient is technically eligible, but is already aligned to another participant and receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track. If a switch consent attestation is submitted, but the patient is still within the 90-day lock-in period, this response will be received.
* **`not-aligned-not-medicare`**: The patient either is not enrolled in Medicare Part A and Part B or dual eligible for Medicare and Medicaid, or they do not have Medicare as their primary insurance, so they are not eligible for services under the ACCESS Model.
* **`not-aligned-services`**: The patient is receiving services (including receiving hospice services or dialysis for end stage renal disease (ESRD)) making them ineligible to be part of the ACCESS Model. Patients who are part of the Program of All-Inclusive Care for the Elderly (PACE) Program are also not eligible for the ACCESS Model.
* **`not-aligned-diagnoses`**: The patient does not have a treating diagnosis that qualifies them for service in the track indicated and therefore cannot get services under the ACCESS Model.
* **`aligned-switch-approved`**: The request to switch the patient's alignment from a different participant after the 90-day lock in period is accepted and the patient is considered switched and now re-aligned.

**Parameter Encoding for GET**:

The submission ID is passed as part of the URL path:

* Path: `GET [base]/access/Patient/$submission-status/sub-123456`

**ℹ️ NOTE:**If the $align operation returns aligned or align-switch-approved, the submissionID from that request is used to provide context for push notifications (e.g., emails) related to the alignment, connecting the participant, patient, and track. That submissionID is provided in the Beneficiary Alignment Report for future reference.

**Example Status Check Request (Still Processing)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 202 Accepted

```

(No response body - still processing)

**Example Status Check Request (Processing Complete - Aligned)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "aligned",
            "display": "Aligned"
          }
        ],
        "text": "Patient is eligible and has been aligned so the participant can now begin providing services to the patient under the ACCESS Model."
      }
    }
  ]
}

```

**Example Status Check Request (Processing Complete - Not Aligned - No Qualifying Diagnosis)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "not-aligned-diagnoses",
            "display": "Not aligned - no qualifying diagnosis"
          }
        ],
        "text": "The patient does not have a treating diagnosis that qualifies them for service in the track indicated and therefore cannot get services under the ACCESS Model."
      }
    }
  ]
}

```

**Example Status Check Request (Processing Complete - Not Aligned - Control Group)**:

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "not-aligned-control-group",
            "display": "Not aligned - assigned to Control Group"
          }
        ],
        "text": "The patient is technically eligible, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months."
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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "aligned-switch-approved",
            "display": "Aligned and switch approved"
          }
        ],
        "text": "The request to switch the patient's alignment from a different provider after the 90-day lock in period is accepted and the patient is considered switched and now re-aligned."
      }
    }
  ]
}

```

#### ACCESS Participant Switch Workflow

When a patient wishes to switch ACCESS participants after the 90-day lock-in period:

1. **Verify Eligibility to Switch**: First, use the Eligibility API to check if the patient is eligible to switch participants (result code`eligible-switch-participants`)
1. **Obtain Consent**: Obtain and document the patient's consent to switch participants
1. **Submit Switch Request**: Submit an alignment request with the`switchConsentAttestation`parameter set to`true`
1. **Process Result**: If approved, receive result code`aligned-switch-approved`

**Important Notes**:

* All requirements related to "switching" (switch consent, etc.) are only applicable to switching participants. For the MSK and BH tracks, this is switching participants within a track. For the eCKM and CKM tracks, this is switching participants within a track or switching participants and moving from eCKM to CKM.
* If a patient is switching participants and moving from the eCKM track to the CKM track, the switch can happen at any time - it is not restricted by the 90-day lock-in period.
* For the other tracks, patients must be aligned for at least 90 days before they can switch participants. If a switch request is submitted before the 90-day lock-in period expires, the result will be `not-aligned-already-aligned`.
* The switch consent attestation must be documented to indicate the patient's explicit consent to change participants.
* When a patient switches participants, the 12-month clock for the period of care restarts with the new alignment date - the date the switch was approved.
* If the patient is staying with the same participant, but moving from the eCKM track to the CKM track due to a change in health status, this will require the participant to first unalign the patient from the eCKM track noting a clinical exclusion. A second API call will then need to be submitted to realign the patient to the CKM track.
* If a participant attempts to submit an alignment request for a patient to the CKM track who is in the eCKM track without first unaligning the patient, they will receive a `not-aligned-already-aligned` response indicating the patient is already aligned.

**Example Switch Request with Consent Attestation**:

```
POST https://[base]/access/Patient/$align?entityId=ACCES12345
Content-Type: application/json

```

```
{
  "resourceType" : "Parameters",
  "id" : "AlignmentRequestWithSwitchConsentExample",
  "meta" : {
    "profile" : [
      🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-in"
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
    },
    {
      "name" : "condition",
      "resource" : {
        "resourceType" : "Condition",
        "id" : "ConditionDiabetesExample",
        "meta" : {
          "profile" : [
            🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-ckm-condition"
          ]
        },
        "language" : "en",
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">Type 2 diabetes mellitus without complications</div>"
        },
        "clinicalStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
              "code" : "active"
            }
          ]
        },
        "verificationStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
              "code" : "confirmed"
            }
          ]
        },
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
                "code" : "problem-list-item"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/sid/icd-10-cm",
              "code" : "E11.9",
              "display" : "Type 2 diabetes mellitus without complications"
            }
          ]
        },
        "subject" : {
          🔗 "reference" : "Patient/PatientExample"
        },
        "onsetDateTime" : "2020-01-15"
      }
    },
    {
      "name" : "isProviderReferral",
      "valueBoolean" : false
    },
    {
      "name" : "switchConsentAttestation",
      "valueBoolean" : true
    }
  ]
}

```

**Response if Switch Approved**:

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-789012

```

Then polling `$submission-status` would eventually return:

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

#### Automatic Push Notifications

When an alignment is successful (result codes `aligned` or `aligned-switch-approved`), the system automatically begins sending push notifications via email about important upcoming events and deadlines. This helps ACCESS participants stay informed about critical dates and required actions.

**Automatic Email Notifications are Sent for**:

1. **Aligned**- Notification when patient has been aligned to a participant and ACCESS Model track
1. **Provider Lock-In Period Ending**- Notifications before the 90-day lock-in period ends
1. **Control Group Period Ending**- Notifications before the 12-month control group period ends
1. **Alignment Renewal Due**- Notifications when alignment renewal is approaching when a follow-on year is allowed
1. **Baseline Data Reporting Due**- Notifications when the deadline for baseline data submission is approaching
1. **Quarterly Data Reporting Due**- Notifications when the deadline for quarterly data submission is approaching
1. **End-of-Year Data Reporting Due**- Notifications when the deadline for end-of-year data submission is approaching
1. **Unalignment**- Notification for when a patient has been unaligned from the participant and/or track

**What This Means for Implementers**:

* **Email Addresses Configured During Onboarding**: Email addresses for receiving notifications are set up during participant registration
* **Automatic Notifications**: Emails are automatically sent when events occur—no additional configuration needed
* **Monitor Email**: Ensure registered email addresses are monitored regularly for time-sensitive notifications
* **Take Timely Action**: Respond to notifications before deadlines to maintain compliance

For complete details on email notification content, event types, and implementation guidance, see the [Notifications](subscriptions.md) page.

##### Best Practices

1. **Track Validation**: Verify that the track corresponds to a valid ACCESS track before submission
1. **Diagnosis Validation**: Ensure submitted conditions are relevant to the requested track
1. **Eligibility Pre-Check**: Consider checking eligibility via the Eligibility API before submitting alignment requests

#### Example Complete Workflow

The following example demonstrates a complete alignment workflow:

**Step 1: Submit Alignment Request**

```
POST https://[base]/access/Patient/$align?entityId=ACCES12345
Content-Type: application/json

```

```
{
  "resourceType" : "Parameters",
  "id" : "AlignmentRequestExample",
  "meta" : {
    "profile" : [
      🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-in"
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
    },
    {
      "name" : "condition",
      "resource" : {
        "resourceType" : "Condition",
        "id" : "ConditionDiabetesExample",
        "meta" : {
          "profile" : [
            🔗 "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-ckm-condition"
          ]
        },
        "language" : "en",
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">Type 2 diabetes mellitus without complications</div>"
        },
        "clinicalStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
              "code" : "active"
            }
          ]
        },
        "verificationStatus" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
              "code" : "confirmed"
            }
          ]
        },
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
                "code" : "problem-list-item"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://hl7.org/fhir/sid/icd-10-cm",
              "code" : "E11.9",
              "display" : "Type 2 diabetes mellitus without complications"
            }
          ]
        },
        "subject" : {
          🔗 "reference" : "Patient/PatientExample"
        },
        "onsetDateTime" : "2020-01-15"
      }
    },
    {
      "name" : "isProviderReferral",
      "valueBoolean" : true
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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "aligned",
            "display": "Aligned"
          }
        ],
        "text": "Patient is eligible and has been aligned so the participant can now begin providing services to the patient under the ACCESS Model."
      }
    }
  ]
}

```

**Step 5: Process Result**

* Parse the result code: "aligned"
* Display the text to the user
* Begin providing services to the patient under the ACCESS Model

#### API-Specific Response Scenarios

For general response handling guidance and common scenarios (missing parameters, invalid tokens, server errors, etc.), see the [Error Handling section in General Guidance](guidance.md#error-handling).

The following responses are specific to the Alignment API and are returned as part of normal processing:

##### Not Aligned - Already Aligned (Lock-In Period Active)

**Scenario**: Patient is already aligned to another provider and is still within the 90-day lock-in period.

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "not-aligned-already-aligned",
            "display": "Not aligned - already aligned to another participant in the track"
          }
        ],
        "text": "The patient is technically eligible, but is already aligned to another participant and receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track. If a switch consent attestation is submitted, but the patient is still within the 90-day lock-in period, this response will be received."
      }
    }
  ]
}

```

##### Not Aligned - Missing Required Consent for Switch

**Scenario**: Patient is attempting to switch providers after lock-in period but consent attestation is missing.

```
HTTP/1.1 400 Bad Request
Content-Type: application/json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": {
        "text": "Switch consent attestation is required when patient is switching participants after lock-in period"
      },
      "diagnostics": "Patient is eligible to switch participants but the 'switchConsentAttestation' parameter must be provided."
    }
  ]
}

```

##### Not Aligned - No Qualifying Diagnosis

**Scenario**: Patient does not have a diagnosis that qualifies for the requested track.

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
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
            "code": "not-aligned-diagnoses",
            "display": "Not aligned - no qualifying diagnosis"
          }
        ],
        "text": "The patient does not have a treating diagnosis that qualifies them for service in the track indicated and therefore cannot get services under the ACCESS Model."
      }
    }
  ]
}

```

##### Missing Required Conditions Parameter

**Scenario**: Alignment request submitted without required conditions.

```
POST https://[base]/access/Patient/$align?entityId=ACCES12345

```

```
HTTP/1.1 400 Bad Request
Content-Type: application/json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": {
        "text": "Missing required parameter: conditions"
      },
      "diagnostics": "At least one Condition resource must be provided for alignment requests. Conditions must conform to the US Core Condition profile and include ICD-10-CM codes."
    }
  ]
}

```

**Note**: These scenarios represent a mix of business logic results (HTTP 200 with specific result codes) and technical validation errors (HTTP 400). Always check the HTTP status code first to determine the type of response.

### Implementation Notes and Edge Cases

#### Patient Switches Between Participants

**Scenario**: Patient aligned to ACCESS Participant A wants to switch to Participant B

**Implementation Guidance**:

1. Participant B checks eligibility (may return`not-eligible-already-aligned`if within 90-day lock-in period)
1. Wait until 90-day lock-in period expires
1. Patient provides consent to switch and Participant documents the consent
1. Participant B submits alignment with`switchConsentAttestation`=`true`
1. If approved, patient is automatically unaligned from Participant A
1. Participant A receives unalignment notification automatically

**Important Notes**:

* Participant A does NOT need to manually unalign the patient
* Participant B handles the entire switch process
* System ensures only one active alignment per track
* Lock-in period prevents frequent participant switching

