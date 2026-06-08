# PROMIS Pain Interference Short Form 6a Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PROMIS Pain Interference (PI) Short Form 6a QuestionnaireResponse for the MSK track](QuestionnaireResponse-PROMISPainInterferenceSFExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PROMISPainInterferenceSFQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PROMISPainInterferenceSFQuestionnaire",
  "version" : "0.9.11",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-06-04T22:54:52-04:00",
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
    "code" : "90973-9",
    "display" : "PROMIS short form - pain interference 6a - version 1.0"
  }],
  "item" : [{
    "linkId" : "pi6a-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61758-9"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi6a-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61769-6"
    }],
    "text" : "In the past 7 days: How much did pain interfere with work around the home?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi6a-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61773-8"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi6a-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61775-3"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your household chores?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi6a-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61761-3"
    }],
    "text" : "In the past 7 days: How much did pain interfere with the things you usually do for fun?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "pi6a-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61777-9"
    }],
    "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1017-4"
  },
  {
    "linkId" : "raw_score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "90974-7",
      "display" : "PROMIS short form - pain interference 6a - version 1.0 raw score"
    }],
    "text" : "PROMIS short form - pain interference 6a - version 1.0 raw score",
    "type" : "decimal"
  },
  {
    "linkId" : "tscore",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "77865-4",
      "display" : "PROMIS pain interference - version 1.0 Tscore"
    }],
    "text" : "PROMIS pain interference - version 1.0 Tscore",
    "type" : "decimal"
  }]
}

```
