# Report Data Response - Success Example - CMS ACCESS Model API v0.9.8

## Example Parameters: Report Data Response - Success Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ReportDataResponseSuccessExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out"]
  },
  "language" : "en",
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
        "code" : "success",
        "display" : "Success"
      }],
      "text" : "Data submission was successfully processed."
    }
  }]
}

```
