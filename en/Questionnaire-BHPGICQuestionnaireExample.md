# BH PGIC Questionnaire - CMS ACCESS Model API v0.9.8

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example Patient Global Impression of Change for the BH track](QuestionnaireResponse-BHPGICExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "BHPGICQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/BHPGICQuestionnaire",
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
    "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
    "code" : "PGIC",
    "display" : "Patient Global Impression of Change [PGIC]"
  }],
  "item" : [{
    "linkId" : "pgic-1",
    "text" : "Since beginning treatment, how would you describe your overall change in activity limitations, symptoms, emotions, and quality of life?",
    "type" : "choice",
    "answerOption" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 1
      }],
      "valueCoding" : {
        "display" : "Very much improved"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 2
      }],
      "valueCoding" : {
        "display" : "Much improved"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 3
      }],
      "valueCoding" : {
        "display" : "Minimally improved"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 4
      }],
      "valueCoding" : {
        "display" : "No change"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 5
      }],
      "valueCoding" : {
        "display" : "Minimally worse"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 6
      }],
      "valueCoding" : {
        "display" : "Much worse"
      }
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
        "valueDecimal" : 7
      }],
      "valueCoding" : {
        "display" : "Very much worse"
      }
    }]
  }]
}

```
