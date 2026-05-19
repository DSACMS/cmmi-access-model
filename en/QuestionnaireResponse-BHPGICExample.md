# BH PGIC QuestionnaireResponse Example - CMS ACCESS Model API v0.9.8

## Example QuestionnaireResponse: BH PGIC QuestionnaireResponse Example

PGIC QuestionnaireResponse for John Doe. Response: Very much improved.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "BHPGICExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "language" : "en",
  "questionnaire" : "http://example.org/Questionnaire/BHPGICQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "pgic-1",
    "text" : "Since beginning treatment, how would you describe your overall change in activity limitations, symptoms, emotions, and quality of life?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "Very much improved"
      }
    }]
  }]
}

```
