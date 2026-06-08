# eGFR Example - CMS ACCESS Model API v0.9.11

## Example Observation: eGFR Example

eGFR: 75 mL/min/1.73m2 measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "eGFRExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
  },
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "laboratory",
      "display" : "Laboratory"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "98979-8",
      "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 75,
    "unit" : "mL/min/1.73_m2",
    "system" : "http://unitsofmeasure.org",
    "code" : "mL/min/{1.73_m2}"
  }
}

```
