# PHQ-9 Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example PHQ-9 depression assessment for the BH track](QuestionnaireResponse-DepressionPHQ9Example.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "PHQ9QuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/PHQ9Questionnaire",
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
    "code" : "44249-1",
    "display" : "PHQ-9 quick depression assessment panel [Reported.PHQ]"
  }],
  "item" : [{
    "linkId" : "phq9-1",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44250-9"
    }],
    "text" : "Little interest or pleasure in doing things",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-2",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44255-8"
    }],
    "text" : "Feeling down, depressed, or hopeless",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-3",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44259-0"
    }],
    "text" : "Trouble falling or staying asleep, or sleeping too much",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-4",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44254-1"
    }],
    "text" : "Feeling tired or having little energy",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-5",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44251-7"
    }],
    "text" : "Poor appetite or overeating",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-6",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44258-2"
    }],
    "text" : "Feeling bad about yourself — or that you are a failure or have let yourself or your family down",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-7",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44252-5"
    }],
    "text" : "Trouble concentrating on things, such as reading the newspaper or watching television",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-8",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44253-3"
    }],
    "text" : "Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-9",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44260-8"
    }],
    "text" : "Thoughts that you would be better off dead, or of hurting yourself in some way",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL358-3"
  },
  {
    "linkId" : "phq9-10",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "69722-7"
    }],
    "text" : "How difficult have these made it for you to do your work, take care of things at home, or get along with other people?",
    "type" : "choice",
    "answerValueSet" : "http://loinc.org/vs/LL359-1"
  },
  {
    "linkId" : "total-score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "44261-6",
      "display" : "Patient Health Questionnaire 9 item (PHQ-9) total score [Reported]"
    }],
    "text" : "Patient Health Questionnaire 9 item (PHQ-9) total score [Reported]",
    "type" : "decimal"
  }]
}

```
