# HbA1c Example - CMS ACCESS Model API v0.9.11

## Example Observation: HbA1c Example

Hemoglobin A1c: 6.5% measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "HbA1cExample",
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
      "code" : "4548-4",
      "display" : "Hemoglobin A1c/Hemoglobin.total in Blood"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 6.5,
    "unit" : "%",
    "system" : "http://unitsofmeasure.org",
    "code" : "%"
  }
}

```
