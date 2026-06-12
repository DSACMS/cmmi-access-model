# PROMIS Pain Interference Short Form 6a QuestionnaireResponse Example - CMS ACCESS Model API v0.9.12

## Example QuestionnaireResponse: PROMIS Pain Interference Short Form 6a QuestionnaireResponse Example

PROMIS Pain Interference (Short Form 6a) QuestionnaireResponse for John Doe. T-score: 58.6.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "PROMISPainInterferenceSFExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "questionnaire" : "http://example.org/Questionnaire/PROMISPainInterferenceSFQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "pi6a-1",
    "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA13863-8",
        "display" : "A little bit"
      }
    }]
  },
  {
    "linkId" : "pi6a-2",
    "text" : "In the past 7 days: How much did pain interfere with work around the home?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA13863-8",
        "display" : "A little bit"
      }
    }]
  },
  {
    "linkId" : "pi6a-3",
    "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA13909-9",
        "display" : "Somewhat"
      }
    }]
  },
  {
    "linkId" : "pi6a-4",
    "text" : "In the past 7 days: How much did pain interfere with your household chores?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA13863-8",
        "display" : "A little bit"
      }
    }]
  },
  {
    "linkId" : "pi6a-5",
    "text" : "In the past 7 days: How much did pain interfere with the things you usually do for fun?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA13909-9",
        "display" : "Somewhat"
      }
    }]
  },
  {
    "linkId" : "pi6a-6",
    "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA13909-9",
        "display" : "Somewhat"
      }
    }]
  },
  {
    "linkId" : "raw_score",
    "answer" : [{
      "valueDecimal" : 15
    }]
  },
  {
    "linkId" : "tscore",
    "answer" : [{
      "valueDecimal" : 58.6
    }]
  }]
}

```
