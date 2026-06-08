# Neck Disability Index QuestionnaireResponse Example - CMS ACCESS Model API v0.9.11

## Example QuestionnaireResponse: Neck Disability Index QuestionnaireResponse Example

Neck Disability Index QuestionnaireResponse for John Doe. Total score: 40.



## Resource Content

```json
{
  "resourceType" : "QuestionnaireResponse",
  "id" : "NeckDisabilityIndexExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
  },
  "questionnaire" : "http://example.org/Questionnaire/NeckDisabilityIndexQuestionnaire",
  "status" : "completed",
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "authored" : "2026-01-15T10:30:00Z",
  "author" : {
    "reference" : "Patient/PatientExample"
  },
  "item" : [{
    "linkId" : "ndi-1",
    "text" : "Pain intensity",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25855-0",
        "display" : "The pain is moderate at the moment."
      }
    }]
  },
  {
    "linkId" : "ndi-2",
    "text" : "Personal care (washing, dressing, etc.)",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "system" : "http://loinc.org",
        "code" : "LA25860-0",
        "display" : "I can look after myself normally but it causes extra pain."
      }
    }]
  },
  {
    "linkId" : "ndi-3",
    "text" : "Lifting",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25867-5",
        "display" : "Pain prevents me lifting heavy weights off the floor, but I can manage if they are conveniently placed, for example on a table."
      }
    }]
  },
  {
    "linkId" : "ndi-4",
    "text" : "Reading",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25873-3",
        "display" : "I can read as much as I want with moderate pain in my neck."
      }
    }]
  },
  {
    "linkId" : "ndi-5",
    "text" : "Headaches",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "system" : "http://loinc.org",
        "code" : "LA26367-5",
        "display" : "I have moderate headaches, which come frequently."
      }
    }]
  },
  {
    "linkId" : "ndi-6",
    "text" : "Concentration",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25880-8",
        "display" : "I have a fair degree of difficulty in concentrating when I want to."
      }
    }]
  },
  {
    "linkId" : "ndi-7",
    "text" : "Work",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25886-5",
        "display" : "I can do most of my usual work, but no more."
      }
    }]
  },
  {
    "linkId" : "ndi-8",
    "text" : "Driving",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25892-3",
        "display" : "I can drive my car as long as I want with moderate pain in my neck."
      }
    }]
  },
  {
    "linkId" : "ndi-9",
    "text" : "Sleeping",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25898-0",
        "display" : "My sleep is mildly disturbed (1-2 hrs sleepless)."
      }
    }]
  },
  {
    "linkId" : "ndi-10",
    "text" : "Recreation",
    "answer" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "system" : "http://loinc.org",
        "code" : "LA25904-6",
        "display" : "I am able to engage in most, but not all of my usual recreation activities because of pain in my neck."
      }
    }]
  },
  {
    "linkId" : "total-score",
    "answer" : [{
      "valueDecimal" : 40
    }]
  }]
}

```
