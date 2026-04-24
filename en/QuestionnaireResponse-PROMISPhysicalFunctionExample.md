# PROMIS Physical Function Short Form 6b QuestionnaireResponse Example - CMS ACCESS Model API v0.9.6

## Example QuestionnaireResponse: PROMIS Physical Function Short Form 6b QuestionnaireResponse Example

PROMIS Physical Function (Short Form 6b) QuestionnaireResponse for John Doe. T-score: 36.8.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "PROMISPhysicalFunctionExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "language" : "en",
  "questionnaire" : "http://example.org/Questionnaire/PROMISPhysicalFunctionQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "pf6b-1",
    "text" : "Are you able to do chores such as vacuuming or yard work?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 4
        }],
        "system" : "http://loinc.org",
        "code" : "LA13918-0",
        "display" : "With a little difficulty"
      }
    }]
  },
  {
    "linkId" : "pf6b-2",
    "text" : "Are you able to go up and down stairs at a normal pace?",
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
    "linkId" : "pf6b-3",
    "text" : "Are you able to go for a walk of at least 15 minutes?",
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
    "linkId" : "pf6b-4",
    "text" : "Are you able to run errands and shop?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 4
        }],
        "system" : "http://loinc.org",
        "code" : "LA13918-0",
        "display" : "With a little difficulty"
      }
    }]
  },
  {
    "linkId" : "pf6b-5",
    "text" : "Does your health now limit you in doing two hours of physical labor?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA13912-3",
        "display" : "Unable to do"
      }
    }]
  },
  {
    "linkId" : "pf6b-6",
    "text" : "Does your health now limit you in doing moderate work around the house like vacuuming, sweeping floors or carrying in groceries?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA13919-8",
        "display" : "With much difficulty"
      }
    }]
  },
  {
    "linkId" : "raw_score",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 17
        }],
        "system" : "http://loinc.org",
        "code" : "77797-9",
        "display" : "PROMIS short form - physical function 6b - version 1.2 raw score"
      }
    }]
  },
  {
    "linkId" : "tscore",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 36.8
        }],
        "system" : "http://loinc.org",
        "code" : "77866-2",
        "display" : "PROMIS physical function - version 1.0 Tscore"
      }
    }]
  }]
}

```
