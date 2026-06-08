# PROMIS Physical Function Short Form 6b Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PROMIS Physical Function (PF) Short Form 6b QuestionnaireResponse for the MSK track](QuestionnaireResponse-PROMISPhysicalFunctionExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PROMISPhysicalFunctionQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PROMISPhysicalFunctionQuestionnaire",
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
    "code" : "76804-4",
    "display" : "PROMIS short form - physical function 6b - version 1.2"
  }],
  "item" : [{
    "linkId" : "pf6b-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61597-1"
    }],
    "text" : "Are you able to do chores such as vacuuming or yard work?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1022-4"
  },
  {
    "linkId" : "pf6b-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61607-8"
    }],
    "text" : "Are you able to go up and down stairs at a normal pace?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1022-4"
  },
  {
    "linkId" : "pf6b-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61609-4"
    }],
    "text" : "Are you able to go for a walk of at least 15 minutes?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1022-4"
  },
  {
    "linkId" : "pf6b-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61635-9"
    }],
    "text" : "Are you able to run errands and shop?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1022-4"
  },
  {
    "linkId" : "pf6b-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61688-8"
    }],
    "text" : "Does your health now limit you in doing two hours of physical labor?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1021-6"
  },
  {
    "linkId" : "pf6b-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "61639-1"
    }],
    "text" : "Does your health now limit you in doing moderate work around the house like vacuuming, sweeping floors or carrying in groceries?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL1021-6"
  },
  {
    "linkId" : "raw_score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "77797-9",
      "display" : "PROMIS short form - physical function 6b - version 1.2 raw score"
    }],
    "text" : "PROMIS short form - physical function 6b - version 1.2 raw score",
    "type" : "decimal"
  },
  {
    "linkId" : "tscore",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "77866-2",
      "display" : "PROMIS physical function - version 1.0 Tscore"
    }],
    "text" : "PROMIS physical function - version 1.0 Tscore",
    "type" : "decimal"
  }]
}

```
