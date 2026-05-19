# Waist Circumference Example - CMS ACCESS Model API v0.9.8

## Example Observation: Waist Circumference Example

Waist Circumference: 95 cm measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "WaistCircumferenceExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-simple-observation|6.1.0"]
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
      "code" : "8280-0",
      "display" : "Waist Circumference at umbilicus by Tape measure"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 95,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  }
}

```
