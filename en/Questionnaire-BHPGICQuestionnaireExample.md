# BH PGIC Questionnaire - CMS ACCESS Model API v0.9.12

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
  "version" : "0.9.12",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-06-10T23:08:55-04:00",
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
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "Very much improved"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Much improved"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Minimally improved"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "No change"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Minimally worse"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 6
        }],
        "display" : "Much worse"
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 7
        }],
        "display" : "Very much worse"
      }
    }]
  }]
}

```
