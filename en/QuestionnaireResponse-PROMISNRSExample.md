# PROMIS Pain Intensity NRS QuestionnaireResponse Example - CMS ACCESS Model API v0.9.11

## Example QuestionnaireResponse: PROMIS Pain Intensity NRS QuestionnaireResponse Example

PROMIS Pain Intensity NRS QuestionnaireResponse for John Doe. Average pain (0-10): 6.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "PROMISNRSExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "questionnaire" : "http://example.org/Questionnaire/PROMISNRSQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "nrs-1",
    "text" : "In the past 7 days, how would you rate your pain on average? (0-10)",
    "answer" : [{
      "valueInteger" : 6
    }]
  }]
}

```
