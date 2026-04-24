# Report Data Response - Patient Not Aligned Example - CMS ACCESS Model API v0.9.6

## Example Parameters: Report Data Response - Patient Not Aligned Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ReportDataResponsePatientNotAlignedExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out"]
  },
  "language" : "en",
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
        "code" : "patient-not-aligned",
        "display" : "Patient Not Aligned"
      }],
      "text" : "Patient is not currently aligned for the specified track. Data reporting is only accepted for aligned patients."
    }
  }]
}

```
