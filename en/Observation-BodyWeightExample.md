# Body Weight Example - CMS ACCESS Model API v0.9.8

## Example Observation: Body Weight Example

Body Weight: 85 kg measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BodyWeightExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight|6.1.0"]
  },
  "language" : "en",
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "vital-signs",
      "display" : "Vital Signs"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "29463-7",
      "display" : "Body weight"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 85,
    "unit" : "kg",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  }
}

```
