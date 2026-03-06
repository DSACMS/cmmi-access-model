# Unalignment Request Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Unalignment Request Example**

## Example Parameters: Unalignment Request Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "UnalignmentRequestExample",
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
      "id" : "PatientExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
      },
      "identifier" : [{
        "type" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MC"
          }]
        },
        "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
        "value" : "1EG4TE5MK73"
      }],
      "name" : [{
        "family" : "Doe",
        "given" : ["John"]
      }],
      "gender" : "male",
      "birthDate" : "1950-01-01"
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
        "code" : "geographic-relocated",
        "display" : "Geographic relocated"
      }]
    }
  }]
}

```
