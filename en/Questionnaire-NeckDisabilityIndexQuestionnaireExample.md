# Neck Disability Index Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example Neck Disability Index (NDI) QuestionnaireResponse for the MSK track](QuestionnaireResponse-NeckDisabilityIndexExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "NeckDisabilityIndexQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/NeckDisabilityIndexQuestionnaire",
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
    "code" : "82226-2",
    "display" : "Neck Disability Index [NDI]"
  }],
  "item" : [{
    "linkId" : "ndi-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82227-0"
    }],
    "text" : "Pain intensity",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3898-5"
  },
  {
    "linkId" : "ndi-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82228-8"
    }],
    "text" : "Personal care (washing, dressing, etc.)",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3899-3"
  },
  {
    "linkId" : "ndi-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82229-6"
    }],
    "text" : "Lifting",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3900-9"
  },
  {
    "linkId" : "ndi-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82230-4"
    }],
    "text" : "Reading",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3901-7"
  },
  {
    "linkId" : "ndi-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82231-2"
    }],
    "text" : "Headaches",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3902-5"
  },
  {
    "linkId" : "ndi-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82232-0"
    }],
    "text" : "Concentration",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3903-3"
  },
  {
    "linkId" : "ndi-7",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82233-8"
    }],
    "text" : "Work",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3904-1"
  },
  {
    "linkId" : "ndi-8",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82234-6"
    }],
    "text" : "Driving",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3905-8"
  },
  {
    "linkId" : "ndi-9",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82235-3"
    }],
    "text" : "Sleeping",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3906-6"
  },
  {
    "linkId" : "ndi-10",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82236-1"
    }],
    "text" : "Recreation",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL3907-4"
  },
  {
    "linkId" : "total-score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82237-9",
      "display" : "Total score [NDI]"
    }],
    "text" : "Total score [NDI]",
    "type" : "decimal"
  }]
}

```
