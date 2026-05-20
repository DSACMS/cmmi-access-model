# KOOS JR Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example Knee Injury and Osteoarthritis Outcome Score for Joint Replacement (KOOS JR) QuestionnaireResponse for the MSK track](QuestionnaireResponse-KOOSJRExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "KOOSJRQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/KOOSJRQuestionnaire",
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
    "code" : "82324-5",
    "display" : "Knee injury and osteoarthritis outcome score for joint replacement [KOOSJR]"
  }],
  "item" : [{
    "linkId" : "koosjr-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82325-2"
    }],
    "text" : "How severe is your knee stiffness after first wakening in the morning?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82326-0"
    }],
    "text" : "Twisting/pivoting on your knee",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82327-8"
    }],
    "text" : "Straightening knee fully",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82328-6"
    }],
    "text" : "Going up or down stairs",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82329-4"
    }],
    "text" : "Standing upright",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82330-2"
    }],
    "text" : "Rising from sitting",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "koosjr-7",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82331-0"
    }],
    "text" : "Bending to floor/picking up an object",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL4051-0"
  },
  {
    "linkId" : "total-interval-score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "82332-8",
      "display" : "Total interval score [KOOSJR]"
    }],
    "text" : "Total interval score [KOOSJR]",
    "type" : "decimal"
  }]
}

```
