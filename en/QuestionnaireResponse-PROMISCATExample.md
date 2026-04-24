# PROMIS Physical Function CAT QuestionnaireResponse Example - CMS ACCESS Model API v0.9.6

## Example QuestionnaireResponse: PROMIS Physical Function CAT QuestionnaireResponse Example

PROMIS Physical Function (CAT) QuestionnaireResponse for John Doe. T-score: 38.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "PROMISCATExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "language" : "en",
  "questionnaire" : "http://example.org/Questionnaire/PROMISPhysicalFunctionCATQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "pf-cat-1",
    "text" : "Does your health now limit you in doing two hours of physical labor?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA11911-7",
        "display" : "Quite a lot"
      }
    }]
  },
  {
    "linkId" : "pf-cat-2",
    "text" : "Are you able to do chores such as vacuuming or yard work?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA13920-6",
        "display" : "With some difficulty"
      }
    }]
  },
  {
    "linkId" : "pf-cat-3",
    "text" : "To what extent are you able to carry out your everyday physical activities such as walking, climbing stairs, carrying groceries, or moving a chair?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA13939-6",
        "display" : "Moderately"
      }
    }]
  },
  {
    "linkId" : "pf-cat-4",
    "text" : "Does your health now limit you in walking more than a mile?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA11911-7",
        "display" : "Quite a lot"
      }
    }]
  },
  {
    "linkId" : "tscore",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 38
        }],
        "system" : "http://loinc.org",
        "code" : "91721-1",
        "display" : "PROMIS physical function - version 2.0 T-score"
      }
    }]
  }]
}

```
