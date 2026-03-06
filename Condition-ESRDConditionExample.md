# End Stage Renal Disease Condition Example - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **End Stage Renal Disease Condition Example**

## Example Condition: End Stage Renal Disease Condition Example

End stage renal disease (ESRD)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ESRDConditionExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-condition"]
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

```
