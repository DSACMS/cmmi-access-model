# eCKM Report Data Composition Example - CMS ACCESS Model API v0.9.8

## Example Composition: eCKM Report Data Composition Example

### ACCESS eCKM Track Data Report

Patient: John Doe (MBI: 1EG4TE5MK73)

Report Date: 2026-01-26

Author: Jane Smith



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "eCKMReportDataCompositionExample",
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
  "title" : "ACCESS eCKM Track Data Report",
  "custodian" : {
    "reference" : "Organization/OrganizationExample"
  },
  "section" : [{
    "title" : "Data reporting for eCKM track",
    "code" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
        "code" : "eCKM"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><p>Comprehensive eCKM Track Data Reporting including vital signs (blood pressure, body weight, waist circumference), and laboratory results (HbA1c, lipid panel).</p></div>"
    },
    "section" : [{
      "title" : "Blood Pressure",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9"
        }]
      },
      "entry" : [{
        "reference" : "Observation/BloodPressureExample"
      },
      {
        "reference" : "Observation/BloodPressureExample2"
      },
      {
        "reference" : "Observation/BloodPressureExample3"
      }]
    },
    {
      "title" : "Weight",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "29463-7"
        }]
      },
      "entry" : [{
        "reference" : "Observation/BodyWeightExample"
      }]
    },
    {
      "title" : "BMI",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "39156-5"
        }]
      },
      "entry" : [{
        "reference" : "Observation/BMIExample"
      }]
    },
    {
      "title" : "Waist Circumference",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "8280-0"
        }]
      },
      "entry" : [{
        "reference" : "Observation/WaistCircumferenceExample"
      }]
    },
    {
      "title" : "HbA1c",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "4548-4"
        }]
      },
      "entry" : [{
        "reference" : "Observation/HbA1cExample"
      }]
    },
    {
      "title" : "Lipids",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18262-6"
        }]
      },
      "entry" : [{
        "reference" : "Observation/LDLCholesterolExample"
      }]
    }]
  }]
}

```
