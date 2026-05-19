# BH Report Data Composition Example - CMS ACCESS Model API v0.9.8

## Example Composition: BH Report Data Composition Example

### ACCESS BH Track Data Report

Patient: John Doe (MBI: 1EG4TE5MK73)

Report Date: 2026-01-26

Author: Jane Smith



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "BHReportDataCompositionExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition"]
  },
  "language" : "en",
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "74465-6",
      "display" : "Questionnaire response Document"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "date" : "2026-01-26T12:00:00Z",
  "author" : [{
    "reference" : "Practitioner/PractitionerExample"
  }],
  "title" : "ACCESS BH Track Data Report",
  "custodian" : {
    "reference" : "Organization/OrganizationExample"
  },
  "section" : [{
    "title" : "Data reporting for BH track",
    "code" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
        "code" : "BH"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><p>Behavioral Health Track Data Reporting including depression and anxiety assessments and patient-reported outcomes.</p></div>"
    },
    "section" : [{
      "title" : "Depression (PHQ-9)",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "44249-1"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/DepressionPHQ9Example"
      }]
    },
    {
      "title" : "Anxiety (GAD-7)",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "69737-5"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/AnxietyGAD7Example"
      }]
    },
    {
      "title" : "Overall Function (WHODAS 2.0)",
      "code" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "WHODAS"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/WHODASExample"
      }]
    },
    {
      "title" : "Patient's Global Impression of Change",
      "code" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "PGIC"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/BHPGICExample"
      }]
    }]
  }]
}

```
