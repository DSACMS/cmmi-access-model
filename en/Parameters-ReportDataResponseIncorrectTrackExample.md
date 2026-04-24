# Report Data Response - Incorrect Track Example - CMS ACCESS Model API v0.9.6

## Example Parameters: Report Data Response - Incorrect Track Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ReportDataResponseIncorrectTrackExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out"]
  },
  "language" : "en",
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
        "code" : "incorrect-track",
        "display" : "Incorrect Track"
      }],
      "text" : "The submitted data does not match the track the patient is aligned to."
    }
  }]
}

```
