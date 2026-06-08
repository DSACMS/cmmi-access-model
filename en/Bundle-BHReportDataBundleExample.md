# BH Report Data Bundle Example - CMS ACCESS Model API v0.9.11

## Example Bundle: BH Report Data Bundle Example



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "BHReportDataBundleExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle"]
  },
  "identifier" : {
    "system" : "http://example.org/data-bundle-id",
    "value" : "bundle-bh-001"
  },
  "type" : "document",
  "timestamp" : "2026-01-26T12:00:00Z",
  "entry" : [{
    "fullUrl" : "http://example.org/Composition/BHReportDataCompositionExample",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "BHReportDataCompositionExample",
      "meta" : {
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Composition_BHReportDataCompositionExample\"> </a><h3>ACCESS BH Track Data Report</h3><p>Patient: John Doe (MBI: 1EG4TE5MK73)</p><p>Report Date: 2026-01-26</p><p>Author: Jane Smith</p></div>"
      },
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
  },
  {
    "fullUrl" : "http://example.org/Patient/PatientExample",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "PatientExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Patient_PatientExample\"> </a>Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
      },
      "identifier" : [{
        "type" : {
          "coding" : [{
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MC"
          }]
        },
        "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
        "value" : "1EG4TE5MK73"
      }],
      "name" : [{
        "family" : "Doe",
        "given" : ["John"]
      }],
      "gender" : "male",
      "birthDate" : "1950-01-01"
    }
  },
  {
    "fullUrl" : "http://example.org/Practitioner/PractitionerExample",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "PractitionerExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitioner|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Practitioner_PractitionerExample\"> </a>Practitioner Jane Smith, NPI: 1234567893</div>"
      },
      "identifier" : [{
        "system" : "http://hl7.org/fhir/sid/us-npi",
        "value" : "1234567893"
      }],
      "name" : [{
        "family" : "Smith",
        "given" : ["Jane"]
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/Organization/OrganizationExample",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "OrganizationExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Organization_OrganizationExample\"> </a>Example Healthcare Organization, ACCESS Participant ID: ACCES12345</div>"
      },
      "identifier" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value" : "ACCES12345"
      }],
      "active" : true,
      "name" : "Example Healthcare Organization"
    }
  },
  {
    "fullUrl" : "http://example.org/QuestionnaireResponse/DepressionPHQ9Example",
    "resource" : {
      "resourceType" : "QuestionnaireResponse",
      "id" : "DepressionPHQ9Example",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"QuestionnaireResponse_DepressionPHQ9Example\"> </a><p>PHQ-9 QuestionnaireResponse for John Doe. Total score: 7.</p></div>"
      },
      "questionnaire" : "http://example.org/Questionnaire/PHQ9Questionnaire",
      "status" : "completed",
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "authored" : "2026-01-15T10:30:00Z",
      "author" : {
        "reference" : "Patient/PatientExample"
      },
      "item" : [{
        "linkId" : "phq9-1",
        "text" : "Little interest or pleasure in doing things",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "phq9-2",
        "text" : "Feeling down, depressed, or hopeless",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "phq9-3",
        "text" : "Trouble falling or staying asleep, or sleeping too much",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "system" : "http://loinc.org",
            "code" : "LA6570-1",
            "display" : "More than half the days"
          }
        }]
      },
      {
        "linkId" : "phq9-4",
        "text" : "Feeling tired or having little energy",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "phq9-5",
        "text" : "Poor appetite or overeating",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 0
            }],
            "system" : "http://loinc.org",
            "code" : "LA6568-5",
            "display" : "Not at all"
          }
        }]
      },
      {
        "linkId" : "phq9-6",
        "text" : "Feeling bad about yourself — or that you are a failure or have let yourself or your family down",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "phq9-7",
        "text" : "Trouble concentrating on things, such as reading the newspaper or watching television",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "phq9-8",
        "text" : "Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 0
            }],
            "system" : "http://loinc.org",
            "code" : "LA6568-5",
            "display" : "Not at all"
          }
        }]
      },
      {
        "linkId" : "phq9-9",
        "text" : "Thoughts that you would be better off dead, or of hurting yourself in some way",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 0
            }],
            "system" : "http://loinc.org",
            "code" : "LA6568-5",
            "display" : "Not at all"
          }
        }]
      },
      {
        "linkId" : "phq9-10",
        "text" : "How difficult have these made it for you to do your work, take care of things at home, or get along with other people?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6573-5",
            "display" : "Somewhat difficult"
          }
        }]
      },
      {
        "linkId" : "total-score",
        "answer" : [{
          "valueDecimal" : 7
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/QuestionnaireResponse/AnxietyGAD7Example",
    "resource" : {
      "resourceType" : "QuestionnaireResponse",
      "id" : "AnxietyGAD7Example",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"QuestionnaireResponse_AnxietyGAD7Example\"> </a><p>GAD-7 QuestionnaireResponse for John Doe. Total score: 6.</p></div>"
      },
      "questionnaire" : "http://example.org/Questionnaire/GAD7Questionnaire",
      "status" : "completed",
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "authored" : "2026-01-15T10:30:00Z",
      "author" : {
        "reference" : "Patient/PatientExample"
      },
      "item" : [{
        "linkId" : "gad7-1",
        "text" : "Feeling nervous, anxious, or on edge",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "gad7-2",
        "text" : "Not being able to stop or control worrying",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "gad7-3",
        "text" : "Worrying too much about different things",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "gad7-4",
        "text" : "Trouble relaxing",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "gad7-5",
        "text" : "Being so restless that it is hard to sit still",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 0
            }],
            "system" : "http://loinc.org",
            "code" : "LA6568-5",
            "display" : "Not at all"
          }
        }]
      },
      {
        "linkId" : "gad7-6",
        "text" : "Becoming easily annoyed or irritable",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "gad7-7",
        "text" : "Feeling afraid as if something awful might happen",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "system" : "http://loinc.org",
            "code" : "LA6569-3",
            "display" : "Several days"
          }
        }]
      },
      {
        "linkId" : "total-score",
        "answer" : [{
          "valueDecimal" : 6
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/QuestionnaireResponse/WHODASExample",
    "resource" : {
      "resourceType" : "QuestionnaireResponse",
      "id" : "WHODASExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"QuestionnaireResponse_WHODASExample\"> </a><p>WHODAS 2.0 (12-item) QuestionnaireResponse for John Doe. Total score: 26.</p></div>"
      },
      "questionnaire" : "http://example.org/Questionnaire/WHODASQuestionnaire",
      "status" : "completed",
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "authored" : "2026-01-15T10:30:00Z",
      "author" : {
        "reference" : "Patient/PatientExample"
      },
      "item" : [{
        "linkId" : "whodas-s1",
        "text" : "Standing for long periods such as 30 minutes",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s2",
        "text" : "Taking care of household responsibilities",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 3
            }],
            "display" : "Moderate"
          }
        }]
      },
      {
        "linkId" : "whodas-s3",
        "text" : "Learning a new task, for example learning how to get to a new place",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s4",
        "text" : "How much of a problem did you have joining in community activities (for example, festivities, religious or other activities) in the same way as anyone else can?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s5",
        "text" : "How much of a problem did you have with being emotionally affected by your health problems?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 3
            }],
            "display" : "Moderate"
          }
        }]
      },
      {
        "linkId" : "whodas-s6",
        "text" : "Concentrating on doing something for ten minutes?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s7",
        "text" : "Walking a long distance such as a kilometer [or equivalent]?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 3
            }],
            "display" : "Moderate"
          }
        }]
      },
      {
        "linkId" : "whodas-s8",
        "text" : "Washing your whole body?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "display" : "None"
          }
        }]
      },
      {
        "linkId" : "whodas-s9",
        "text" : "Getting dressed?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "display" : "None"
          }
        }]
      },
      {
        "linkId" : "whodas-s10",
        "text" : "Dealing with people you do not know",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s11",
        "text" : "Maintaining a friendship",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 2
            }],
            "display" : "Mild"
          }
        }]
      },
      {
        "linkId" : "whodas-s12",
        "text" : "Your day-to-day work",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 3
            }],
            "display" : "Moderate"
          }
        }]
      },
      {
        "linkId" : "whodas-h1",
        "text" : "Overall, in the past 30 days, how many days were these difficulties present?",
        "answer" : [{
          "valueDecimal" : 3
        }]
      },
      {
        "linkId" : "whodas-h2",
        "text" : "In the past 30 days, for how many days were you totally unable to carry out your usual activities or work because of any health condition?",
        "answer" : [{
          "valueDecimal" : 3
        }]
      },
      {
        "linkId" : "whodas-h3",
        "text" : "In the past 30 days, not counting the days that you were totally unable, for how many days did you cut back or reduce your usual activities or work because of any health condition?",
        "answer" : [{
          "valueDecimal" : 3
        }]
      },
      {
        "linkId" : "total-score",
        "answer" : [{
          "valueDecimal" : 26
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/QuestionnaireResponse/BHPGICExample",
    "resource" : {
      "resourceType" : "QuestionnaireResponse",
      "id" : "BHPGICExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"QuestionnaireResponse_BHPGICExample\"> </a><p>PGIC QuestionnaireResponse for John Doe. Response: Very much improved.</p></div>"
      },
      "questionnaire" : "http://example.org/Questionnaire/BHPGICQuestionnaire",
      "status" : "completed",
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "authored" : "2026-01-15T10:30:00Z",
      "author" : {
        "reference" : "Patient/PatientExample"
      },
      "item" : [{
        "linkId" : "pgic-1",
        "text" : "Since beginning treatment, how would you describe your overall change in activity limitations, symptoms, emotions, and quality of life?",
        "answer" : [{
          "valueCoding" : {
            "extension" : [{
              "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
              "valueDecimal" : 1
            }],
            "display" : "Very much improved"
          }
        }]
      }]
    }
  }]
}

```
