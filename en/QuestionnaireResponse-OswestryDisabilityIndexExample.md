# Oswestry Disability Index QuestionnaireResponse Example - CMS ACCESS Model API v0.9.6

## Example QuestionnaireResponse: Oswestry Disability Index QuestionnaireResponse Example

Oswestry Disability Index QuestionnaireResponse for John Doe. Score: 36.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "OswestryDisabilityIndexExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "language" : "en",
  "questionnaire" : "http://example.org/Questionnaire/OswestryDisabilityIndexQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "odi-1",
    "text" : "Pain intensity",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "odi-2",
    "text" : "Personal care (washing, dressing, etc.)",
    "answer" : [{
      "valueDecimal" : 1
    }]
  },
  {
    "linkId" : "odi-3",
    "text" : "Lifting",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "odi-4",
    "text" : "Walking",
    "answer" : [{
      "valueDecimal" : 1
    }]
  },
  {
    "linkId" : "odi-5",
    "text" : "Sitting",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "odi-6",
    "text" : "Standing",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "odi-7",
    "text" : "Sleeping",
    "answer" : [{
      "valueDecimal" : 1
    }]
  },
  {
    "linkId" : "odi-8",
    "text" : "Sex life (if applicable)",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "odi-9",
    "text" : "Social life",
    "answer" : [{
      "valueDecimal" : 3
    }]
  },
  {
    "linkId" : "odi-10",
    "text" : "Traveling",
    "answer" : [{
      "valueDecimal" : 2
    }]
  },
  {
    "linkId" : "score",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
          "valueDecimal" : 36
        }],
        "system" : "http://loinc.org",
        "code" : "97909-6",
        "display" : "Oswestry disability index score ODI"
      }
    }]
  }]
}

```
