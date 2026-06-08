# PHQ-9 QuestionnaireResponse Example - CMS ACCESS Model API v0.9.11

## Example QuestionnaireResponse: PHQ-9 QuestionnaireResponse Example

PHQ-9 QuestionnaireResponse for John Doe. Total score: 7.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "DepressionPHQ9Example",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "questionnaire" : "http://example.org/Questionnaire/PHQ9Questionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "phq9-1",
    "text" : "Little interest or pleasure in doing things",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6569-3",
        "display" : "Several days"
      }
    }]
  },
  {
    "linkId" : "phq9-2",
    "text" : "Feeling down, depressed, or hopeless",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6569-3",
        "display" : "Several days"
      }
    }]
  },
  {
    "linkId" : "phq9-3",
    "text" : "Trouble falling or staying asleep, or sleeping too much",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA6570-1",
        "display" : "More than half the days"
      }
    }]
  },
  {
    "linkId" : "phq9-4",
    "text" : "Feeling tired or having little energy",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6569-3",
        "display" : "Several days"
      }
    }]
  },
  {
    "linkId" : "phq9-5",
    "text" : "Poor appetite or overeating",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "system" : "http://loinc.org",
        "code" : "LA6568-5",
        "display" : "Not at all"
      }
    }]
  },
  {
    "linkId" : "phq9-6",
    "text" : "Feeling bad about yourself — or that you are a failure or have let yourself or your family down",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6569-3",
        "display" : "Several days"
      }
    }]
  },
  {
    "linkId" : "phq9-7",
    "text" : "Trouble concentrating on things, such as reading the newspaper or watching television",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6569-3",
        "display" : "Several days"
      }
    }]
  },
  {
    "linkId" : "phq9-8",
    "text" : "Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "system" : "http://loinc.org",
        "code" : "LA6568-5",
        "display" : "Not at all"
      }
    }]
  },
  {
    "linkId" : "phq9-9",
    "text" : "Thoughts that you would be better off dead, or of hurting yourself in some way",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "system" : "http://loinc.org",
        "code" : "LA6568-5",
        "display" : "Not at all"
      }
    }]
  },
  {
    "linkId" : "phq9-10",
    "text" : "How difficult have these made it for you to do your work, take care of things at home, or get along with other people?",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA6573-5",
        "display" : "Somewhat difficult"
      }
    }]
  },
  {
    "linkId" : "total-score",
    "answer" : [{
      "valueDecimal" : 7
    }]
  }]
}

```
