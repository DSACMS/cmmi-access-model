# GAD-7 Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example GAD-7 anxiety assessment for the BH track](QuestionnaireResponse-AnxietyGAD7Example.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "GAD7QuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/GAD7Questionnaire",
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
    "code" : "69737-5",
    "display" : "Generalized anxiety disorder 7 item (GAD-7)"
  }],
  "item" : [{
    "linkId" : "gad7-1",
    "text" : "Feeling nervous, anxious, or on edge",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-2",
    "text" : "Not being able to stop or control worrying",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-3",
    "text" : "Worrying too much about different things",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-4",
    "text" : "Trouble relaxing",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-5",
    "text" : "Being so restless that it is hard to sit still",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-6",
    "text" : "Becoming easily annoyed or irritable",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "gad7-7",
    "text" : "Feeling afraid as if something awful might happen",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "total-score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "70274-6",
      "display" : "Generalized anxiety disorder 7 item (GAD-7) total score [Reported.PHQ]"
    }],
    "text" : "Generalized anxiety disorder 7 item (GAD-7) total score [Reported.PHQ]",
    "type" : "decimal"
  }]
}

```
