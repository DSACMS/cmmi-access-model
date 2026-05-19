# LDL-C DiagnosticReport Example - CMS ACCESS Model API v0.9.8

## Example DiagnosticReport: LDL-C DiagnosticReport Example

### Lipid Panel Report

Patient: John Doe

Date: 2026-01-15

Results: Total Cholesterol 219 mg/dL, LDL 140 mg/dL, HDL 42 mg/dL, Triglycerides 185 mg/dL



## Resource Content

```json
{
  "resourceType" : "DiagnosticReport",
  "id" : "LDLDiagnosticReportExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0"]
  },
  "language" : "en",
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0074",
      "code" : "LAB",
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
  "issued" : "2026-01-15T10:30:00Z",
  "result" : [{
    "reference" : "Observation/LDLCholesterolExample"
  }]
}

```
