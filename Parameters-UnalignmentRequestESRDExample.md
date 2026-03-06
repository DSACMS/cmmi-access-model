# Unalignment Request - ESRD Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Unalignment Request - ESRD Example**

## Example Parameters: Unalignment Request - ESRD Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "UnalignmentRequestESRDExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-unalign-in"]
  },
  "parameter" : [{
    "name" : "participantID",
    "valueIdentifier" : {
      "system" : "https://globalalliantinc.com/access/participant-id",
      "value" : "ACCESS1234"
    }
  },
  {
    "name" : "payerID",
    "valueIdentifier" : {
      "type" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/us/carin-bb/CodeSystem/C4BBIdentifierType",
          "code" : "payerid",
          "display" : "Payer ID"
        }]
      },
      "system" : "urn:oid:2.16.840.1.113883.3.221.5",
      "value" : "12345"
    }
  },
  {
    "name" : "patient",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "PatientESRDExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Patient Jane Smith, female, born 1955-06-15, Medicare ID: 9876543210B</div>"
      },
      "identifier" : [{
        "type" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MC"
          }]
        },
        "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
        "value" : "9876543210B"
      }],
      "name" : [{
        "family" : "Smith",
        "given" : ["Jane"]
      }],
      "gender" : "female",
      "birthDate" : "1955-06-15"
    }
  },
  {
    "name" : "track",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSTrackCS",
        "code" : "CKM",
        "display" : "Cardio-kidney-metabolic track"
      }]
    }
  },
  {
    "name" : "reason",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentReasonCS",
        "code" : "no-longer-clinically-eligible",
        "display" : "No longer clinically eligible"
      }],
      "text" : "Patient has developed end-stage renal disease (ESRD) requiring dialysis, which makes them ineligible for the ACCESS Model."
    }
  },
  {
    "name" : "condition",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "ESRDConditionExample",
      "meta" : {
        "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-clinical-exclusion-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">End stage renal disease (ESRD)</div>"
      },
      "clinicalStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
          "code" : "active",
          "display" : "Active"
        }]
      },
      "verificationStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
          "code" : "confirmed",
          "display" : "Confirmed"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item",
          "display" : "Problem List Item"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/sid/icd-10-cm",
          "code" : "N18.6",
          "display" : "End stage renal disease"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientESRDExample"
      },
      "onsetDateTime" : "2026-01-15"
    }
  }]
}

```
