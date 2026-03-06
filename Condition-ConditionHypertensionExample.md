# Condition Example - Essential Hypertension - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Condition Example - Essential Hypertension**

## Example Condition: Condition Example - Essential Hypertension

Essential (primary) hypertension



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionHypertensionExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-eckm-condition"]
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
      "code" : "I10",
      "display" : "Essential (primary) hypertension"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "onsetDateTime" : "2019-03-22"
}

```
