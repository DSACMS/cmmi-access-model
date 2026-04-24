# MSK Data Reporting Composition Example - CMS ACCESS Model API v0.9.6

## Example Composition: MSK Data Reporting Composition Example

### ACCESS MSK Track Data Report

Patient: John Doe (MBI: 1EG4TE5MK73)

Report Date: 2026-01-26

Author: Jane Smith



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "MSKReportDataCompositionExample",
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
  "title" : "ACCESS MSK Track Data Report",
  "custodian" : {
    "reference" : "Organization/OrganizationExample"
  },
  "section" : [{
    "title" : "Data reporting for MSK track",
    "code" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
        "code" : "MSK"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><p>Musculoskeletal Track Data Reporting including pain assessments and patient-reported outcomes.</p></div>"
    },
    "section" : [{
      "title" : "PROMIS Physical Function Short Form 6b",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "76804-4"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/PROMISPhysicalFunctionExample"
      }]
    },
    {
      "title" : "PROMIS Physical Function CAT",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "91722-9"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/PROMISCATExample"
      }]
    },
    {
      "title" : "PROMIS Pain Interference Short Form 6a",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "90973-9"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/PROMISPainInterferenceSFExample"
      }]
    },
    {
      "title" : "PROMIS Pain Interference CAT",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "89923-7"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/PROMISPainInterferenceCATExample"
      }]
    },
    {
      "title" : "Oswestry Disability Index",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "97908-8"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/OswestryDisabilityIndexExample"
      }]
    },
    {
      "title" : "Neck Disability Index",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82226-2"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/NeckDisabilityIndexExample"
      }]
    },
    {
      "title" : "QuickDASH",
      "code" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "QuickDASH"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/QuickDASHExample"
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
        "reference" : "QuestionnaireResponse/MSKPGICExample"
      }]
    },
    {
      "title" : "KOOS JR",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82324-5"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/KOOSJRExample"
      }]
    },
    {
      "title" : "HOOS JR",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82316-1"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/HOOSJRExample"
      }]
    },
    {
      "title" : "PROMIS Pain Intensity NRS",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "72514-3"
        }]
      },
      "entry" : [{
        "reference" : "QuestionnaireResponse/PROMISNRSExample"
      }]
    }]
  }]
}

```
