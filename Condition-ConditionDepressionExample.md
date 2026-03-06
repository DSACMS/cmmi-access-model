# Condition Example - Major Depressive Disorder - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Condition Example - Major Depressive Disorder**

## Example Condition: Condition Example - Major Depressive Disorder

Major depressive disorder, single episode, unspecified



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionDepressionExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-bh-condition"]
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
      "code" : "F32.9",
      "display" : "Major depressive disorder, single episode, unspecified"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "onsetDateTime" : "2023-08-10"
}

```
