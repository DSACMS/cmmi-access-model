# Submission Status Response Example - CMS ACCESS Model API v0.9.11

## Example Parameters: Submission Status Response Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "SubmissionStatusResponseExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-submission-status-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
        "code" : "eligible",
        "display" : "Eligible"
      }],
      "text" : "Patient is eligible for the ACCESS Model."
    }
  }]
}

```
