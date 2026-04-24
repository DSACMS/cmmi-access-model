# LDL Cholesterol Example - CMS ACCESS Model API v0.9.6

## Example Observation: LDL Cholesterol Example

LDL Cholesterol: 140 mg/dL measured on 2026-01-15



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "LDLCholesterolExample",
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
      "code" : "18262-6",
      "display" : "Cholesterol in LDL [Mass/volume] in Serum or Plasma by Direct assay"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectiveDateTime" : "2026-01-15T10:30:00Z",
  "valueQuantity" : {
    "value" : 140,
    "unit" : "mg/dL",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg/dL"
  }
}

```
