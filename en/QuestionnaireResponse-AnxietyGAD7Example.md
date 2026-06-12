# GAD-7 QuestionnaireResponse Example - CMS ACCESS Model API v0.9.12

## Example QuestionnaireResponse: GAD-7 QuestionnaireResponse Example

GAD-7 QuestionnaireResponse for John Doe. Total score: 6.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "AnxietyGAD7Example",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "questionnaire" : "http://example.org/Questionnaire/GAD7Questionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "gad7-1",
    "text" : "Feeling nervous, anxious, or on edge",
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
    "linkId" : "gad7-2",
    "text" : "Not being able to stop or control worrying",
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
    "linkId" : "gad7-3",
    "text" : "Worrying too much about different things",
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
    "linkId" : "gad7-4",
    "text" : "Trouble relaxing",
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
    "linkId" : "gad7-5",
    "text" : "Being so restless that it is hard to sit still",
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
    "linkId" : "gad7-6",
    "text" : "Becoming easily annoyed or irritable",
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
    "linkId" : "gad7-7",
    "text" : "Feeling afraid as if something awful might happen",
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
    "linkId" : "total-score",
    "answer" : [{
      "valueDecimal" : 6
    }]
  }]
}

```
