# Condition Example - Type 2 Diabetes - CMS ACCESS Model API v0.9.11

## Example Condition: Condition Example - Type 2 Diabetes

Type 2 diabetes mellitus without complications



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionDiabetesExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-ckm-condition"]
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
      "code" : "E11.9",
      "display" : "Type 2 diabetes mellitus without complications"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "onsetDateTime" : "2020-01-15"
}

```
