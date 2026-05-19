# Report Data Response - Reporting Period Closed Example - CMS ACCESS Model API v0.9.8

## Example Parameters: Report Data Response - Reporting Period Closed Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ReportDataResponseReportingPeriodClosedExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out"]
  },
  "language" : "en",
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
        "code" : "reporting-period-closed",
        "display" : "Reporting Period Closed"
      }],
      "text" : "The reporting period for this data has closed and no further submissions are accepted."
    }
  }]
}

```
