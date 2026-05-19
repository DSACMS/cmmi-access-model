# Total Cholesterol Example - CMS ACCESS Model API v0.9.8

## Example Observation: Total Cholesterol Example

Total Cholesterol: 219 mg/dL measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "TotalCholesterolExample",
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
      "code" : "2093-3",
      "display" : "Cholesterol [Mass/volume] in Serum or Plasma"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 219,
    "unit" : "mg/dL",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg/dL"
  }
}

```
