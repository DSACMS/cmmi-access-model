# QuickDASH Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example QuickDASH QuestionnaireResponse for the MSK track](QuestionnaireResponse-QuickDASHExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "QuickDASHQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/QuickDASHQuestionnaire",
  "version" : "0.9.8",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-05-18T15:59:44-04:00",
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
  "code" : [{
    "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
    "code" : "QuickDASH",
    "display" : "Quick Disabilities of the Arm, Shoulder and Hand [QuickDASH]"
  }],
  "item" : [{
    "linkId" : "qd-1",
    "text" : "Open a tight or new jar.",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-2",
    "text" : "Do heavy household chores (e.g., wash walls, wash floors).",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-3",
    "text" : "Carry a shopping bag or briefcase.",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-4",
    "text" : "Wash your back.",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-5",
    "text" : "Use a knife to cut food.",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-6",
    "text" : "Recreational activities in which you take some force or impact through your arm, shoulder, or hand (e.g., golf, hammering, tennis, etc.).",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-7",
    "text" : "During the past week, to what extent has your arm, shoulder, or hand problem interfered with your normal social activities with family, friends, neighbors, or groups?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "Not at all"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Slightly"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderately"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Quite a bit"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Extremely"
      }
    }]
  },
  {
    "linkId" : "qd-8",
    "text" : "During the past week, were you limited in your work or other regular daily activities as a result of your arm, shoulder, or hand problem?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "Not limted at all"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Slightly limited"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderately limited"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Very limited"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "qd-9",
    "text" : "Arm, shoulder, or hand pain",
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
        "display" : "Extreme"
      }
    }]
  },
  {
    "linkId" : "qd-10",
    "text" : "Tingling (pins and needles) in your arm, shoulder, or hand",
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
        "display" : "Extreme"
      }
    }]
  },
  {
    "linkId" : "qd-11",
    "text" : "During the past week, how much difficulty have you had sleeping because of the pain in your arm, shoulder, or hand?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "No difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Mild difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Moderate difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "Severe difficulty"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Unable"
      }
    }]
  },
  {
    "linkId" : "score",
    "text" : "QuickDASH Score",
    "type" : "decimal"
  }]
}

```
