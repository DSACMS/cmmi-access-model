# PROMIS Pain Intensity NRS Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PROMIS Pain Intensity NRS QuestionnaireResponse for the MSK track](QuestionnaireResponse-PROMISNRSExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PROMISNRSQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PROMISNRSQuestionnaire",
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
  "code" : [{
    "system" : "http://loinc.org",
    "code" : "72514-3",
    "display" : "Pain severity - 0-10 verbal numeric rating [Score] - Reported"
  }],
  "item" : [{
    "linkId" : "nrs-1",
    "text" : "In the past 7 days, how would you rate your pain on average? (0-10)",
    "type" : "integer"
  }]
}

```
