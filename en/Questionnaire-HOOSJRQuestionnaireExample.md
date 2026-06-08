# HOOS JR Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example Hip Dysfunction and Osteoarthritis Outcome Score for Joint Replacement (HOOS JR) QuestionnaireResponse for the MSK track](QuestionnaireResponse-HOOSJRExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "HOOSJRQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/HOOSJRQuestionnaire",
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
    "code" : "82316-1",
    "display" : "Hip dysfunction and osteoarthritis outcome score for joint replacement [HOOSJR]"
  }],
  "item" : [{
    "linkId" : "hoosjr-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82317-9"
    }],
    "text" : "Going up or down stairs",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "hoosjr-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82318-7"
    }],
    "text" : "Walking on an uneven surface",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "hoosjr-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82319-5"
    }],
    "text" : "Rising from sitting",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "hoosjr-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82320-3"
    }],
    "text" : "Bending to the floor/picking up an object",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "hoosjr-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82321-1"
    }],
    "text" : "Lying in bed",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "hoosjr-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82322-9"
    }],
    "text" : "Sitting",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "total-interval-score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82323-7",
      "display" : "Total interval score [HOOSJR]"
    }],
    "text" : "Total interval score [HOOSJR]",
    "type" : "decimal"
  }]
}

```
