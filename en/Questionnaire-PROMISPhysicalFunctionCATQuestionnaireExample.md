# PROMIS Physical Function CAT Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PROMIS Physical Function CAT QuestionnaireResponse for the MSK track](QuestionnaireResponse-PROMISPhysicalFunctionCATExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PROMISPhysicalFunctionCATQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PROMISPhysicalFunctionCATQuestionnaire",
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
    "system" : "http://loinc.org",
    "code" : "91722-9",
    "display" : "PROMIS item bank - physical function - version 2.0"
  }],
  "item" : [{
    "linkId" : "pf-cat-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61688-8"
    }],
    "text" : "Does your health now limit you in doing two hours of physical labor?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1021-6"
  },
  {
    "linkId" : "pf-cat-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61597-1"
    }],
    "text" : "Are you able to do chores such as vacuuming or yard work?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1022-4"
  },
  {
    "linkId" : "pf-cat-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61582-3"
    }],
    "text" : "To what extent are you able to carry out your everyday physical activities such as walking, climbing stairs, carrying groceries, or moving a chair?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1013-3"
  },
  {
    "linkId" : "pf-cat-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61697-9"
    }],
    "text" : "Does your health now limit you in walking more than a mile?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1021-6"
  },
  {
    "linkId" : "tscore",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "91721-1",
      "display" : "PROMIS physical function - version 2.0 T-score"
    }],
    "text" : "PROMIS physical function - version 2.0 T-score",
    "type" : "decimal"
  }]
}

```
