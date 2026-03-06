# Condition Example - Osteoarthritis - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Condition Example - Osteoarthritis**

## Example Condition: Condition Example - Osteoarthritis

Unspecified osteoarthritis, unspecified site



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionOsteoarthritisExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-msk-condition"]
  },
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
      "code" : "active"
    }]
  },
  "verificationStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
      "code" : "confirmed"
    }]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
      "code" : "problem-list-item"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "code" : "M19.90",
      "display" : "Unspecified osteoarthritis, unspecified site"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "onsetDateTime" : "2021-11-05"
}

```
