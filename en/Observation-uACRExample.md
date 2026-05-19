# uACR Example - CMS ACCESS Model API v0.9.8

## Example Observation: uACR Example

Urine Albumin-Creatinine Ratio: 45 mg/g measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "uACRExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
  },
  "language" : "en",
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
      "code" : "14959-1",
      "display" : "Microalbumin/Creatinine [Mass Ratio] in Urine"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 45,
    "unit" : "mg/g",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg/g"
  }
}

```
