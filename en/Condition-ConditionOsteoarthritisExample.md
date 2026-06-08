# Condition Example - Osteoarthritis - CMS ACCESS Model API v0.9.11

## Example Condition: Condition Example - Osteoarthritis

Unspecified osteoarthritis, unspecified site



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionOsteoarthritisExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-msk-condition"]
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
