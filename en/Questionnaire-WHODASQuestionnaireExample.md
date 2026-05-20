# WHODAS 2.0 12-item Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example WHODAS 2.0 (12-item) QuestionnaireResponse for the BH track](QuestionnaireResponse-WHODASExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "WHODASQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/WHODASQuestionnaire",
  "version" : "0.9.8",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-05-20T09:30:43-04:00",
  "publisher" : "Global Alliant, Inc.",
  "contact" : [{
    "name" : "Global Alliant, Inc.",
    "telecom" : [{
      "system" : "url",
      "value" : "https://globalalliantinc.com"
    },
    {
      "system" : "email",
      "value" : "david.h@globalalliantinc.org"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "item" : [{
    "linkId" : "whodas-s1",
    "text" : "Standing for long periods such as 30 minutes",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s2",
    "text" : "Taking care of household responsibilities",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s3",
    "text" : "Learning a new task, for example learning how to get to a new place",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s4",
    "text" : "How much of a problem did you have joining in community activities (for example, festivities, religious or other activities) in the same way as anyone else can?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s5",
    "text" : "How much of a problem did you have with being emotionally affected by your health problems?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s6",
    "text" : "Concentrating on doing something for ten minutes?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s7",
    "text" : "Walking a long distance such as a kilometer [or equivalent]?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s8",
    "text" : "Washing your whole body?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s9",
    "text" : "Getting dressed?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s10",
    "text" : "Dealing with people you do not know",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s11",
    "text" : "Maintaining a friendship",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-s12",
    "text" : "Your day-to-day work",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "None"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extreme or cannot do"
      }
    }]
  },
  {
    "linkId" : "whodas-h1",
    "text" : "Overall, in the past 30 days, how many days were these difficulties present?",
    "type" : "decimal"
  },
  {
    "linkId" : "whodas-h2",
    "text" : "In the past 30 days, for how many days were you totally unable to carry out your usual activities or work because of any health condition?",
    "type" : "decimal"
  },
  {
    "linkId" : "whodas-h3",
    "text" : "In the past 30 days, not counting the days that you were totally unable, for how many days did you cut back or reduce your usual activities or work because of any health condition?",
    "type" : "decimal"
  },
  {
    "linkId" : "total-score",
    "text" : "WHODAS total score",
    "type" : "decimal"
  }]
}

```
