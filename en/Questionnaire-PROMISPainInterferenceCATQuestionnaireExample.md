# PROMIS Pain Interference CAT Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PROMIS Pain Interference CAT QuestionnaireResponse for the MSK track](QuestionnaireResponse-PROMISPainInterferenceCATExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PROMISPainInterferenceCATQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PROMISPainInterferenceCATQuestionnaire",
  "version" : "0.9.11",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-06-04T23:05:21-04:00",
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
    "code" : "89923-7",
    "display" : "PROMIS item bank - pain interference - version 1.1"
  }],
  "item" : [{
    "linkId" : "pi-cat-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61758-9"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi-cat-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61773-8"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi-cat-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61777-9"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi-cat-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61769-6"
    }],
    "text" : "In the past 7 days: How much did pain interfere with work around the home?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "tscore",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "89924-5",
      "display" : "PROMIS pain interference - version 1.1 Tscore"
    }],
    "text" : "PROMIS pain interference - version 1.1 Tscore",
    "type" : "decimal"
  }]
}

```
