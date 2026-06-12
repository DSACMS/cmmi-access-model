# Report Data Response - Incomplete Data Example - CMS ACCESS Model API v0.9.12

## Example Parameters: Report Data Response - Incomplete Data Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ReportDataResponseIncompleteDataExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
        "code" : "incomplete-data",
        "display" : "Incomplete data"
      }],
      "text" : "Data submission is missing required observations or measurements for the specified track."
    }
  }]
}

```
