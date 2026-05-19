# PROMIS Pain Interference CAT QuestionnaireResponse Example - CMS ACCESS Model API v0.9.8

## Example QuestionnaireResponse: PROMIS Pain Interference CAT QuestionnaireResponse Example

PROMIS Pain Interference (CAT) QuestionnaireResponse for John Doe. T-score: 70.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "PROMISPainInterferenceCATExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "language" : "en",
  "questionnaire" : "http://example.org/Questionnaire/PROMISPainInterferenceCATQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "pi-cat-1",
    "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "system" : "http://loinc.org",
        "code" : "LA13902-4",
        "display" : "Quite a bit"
      }
    }]
  },
  {
    "linkId" : "pi-cat-2",
    "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "system" : "http://loinc.org",
        "code" : "LA13914-9",
        "display" : "Very much"
      }
    }]
  },
  {
    "linkId" : "pi-cat-3",
    "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "system" : "http://loinc.org",
        "code" : "LA13902-4",
        "display" : "Quite a bit"
      }
    }]
  },
  {
    "linkId" : "pi-cat-4",
    "text" : "In the past 7 days: How much did pain interfere with work around the home?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "system" : "http://loinc.org",
        "code" : "LA13914-9",
        "display" : "Very much"
      }
    }]
  },
  {
    "linkId" : "tscore",
    "answer" : [{
      "valueDecimal" : 70
    }]
  }]
}

```
