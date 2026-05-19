# CKM Report Data Bundle Example - CMS ACCESS Model API v0.9.8

## Example Bundle: CKM Report Data Bundle Example



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "CKMReportDataBundleExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle"]
  },
  "language" : "en",
  "identifier" : {
    "system" : "http://example.org/data-bundle-id",
    "value" : "bundle-ckm-001"
  },
  "type" : "document",
  "timestamp" : "2026-01-26T12:00:00Z",
  "entry" : [{
    "fullUrl" : "http://example.org/Composition/CKMReportDataCompositionExample",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "CKMReportDataCompositionExample",
      "meta" : {
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Composition_CKMReportDataCompositionExample\"> </a><h3>ACCESS CKM Track Data Report</h3><p>Patient: John Doe (MBI: 1EG4TE5MK73)</p><p>Report Date: 2026-01-26</p><p>Author: Jane Smith</p></div>"
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
      "title" : "ACCESS CKM Track Data Report",
      "custodian" : {
        "reference" : "Organization/OrganizationExample"
      },
      "section" : [{
        "title" : "Data reporting for CKM track",
        "code" : {
          "coding" : [{
            "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code" : "CKM"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><p>Comprehensive CKM Track Data Reporting including vital signs (blood pressure, body weight, waist circumference), and laboratory results (HbA1c, eGFR, uACR, lipid panel).</p></div>"
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
          "title" : "eGFR",
          "code" : {
            "coding" : [{
              "system" : "http://loinc.org",
              "code" : "98979-8"
            }]
          },
          "entry" : [{
            "reference" : "Observation/eGFRExample"
          }]
        },
        {
          "title" : "uACR",
          "code" : {
            "coding" : [{
              "system" : "http://loinc.org",
              "code" : "14959-1"
            }]
          },
          "entry" : [{
            "reference" : "Observation/uACRExample"
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
    "fullUrl" : "http://example.org/Observation/BloodPressureExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "BloodPressureExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_BloodPressureExample\"> </a>Blood Pressure: 138/88 mm[Hg] measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9",
          "display" : "Blood pressure panel with all children optional"
        }],
        "text" : "Blood Pressure"
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "component" : [{
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 138,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      },
      {
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 88,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/BloodPressureExample2",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "BloodPressureExample2",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_BloodPressureExample2\"> </a>Blood Pressure: 132/84 mm[Hg] measured on 2026-01-22</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9",
          "display" : "Blood pressure panel with all children optional"
        }],
        "text" : "Blood Pressure"
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-22T10:30:00Z",
      "component" : [{
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 132,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      },
      {
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 84,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/BloodPressureExample3",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "BloodPressureExample3",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_BloodPressureExample3\"> </a>Blood Pressure: 140/90 mm[Hg] measured on 2026-02-05</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9",
          "display" : "Blood pressure panel with all children optional"
        }],
        "text" : "Blood Pressure"
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-02-05T10:30:00Z",
      "component" : [{
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 140,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      },
      {
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }]
        },
        "valueQuantity" : {
          "value" : 90,
          "unit" : "mm[Hg]",
          "system" : "http://unitsofmeasure.org",
          "code" : "mm[Hg]"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/BodyWeightExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "BodyWeightExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_BodyWeightExample\"> </a>Body Weight: 85 kg measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "29463-7",
          "display" : "Body weight"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 85,
        "unit" : "kg",
        "system" : "http://unitsofmeasure.org",
        "code" : "kg"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/BMIExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "BMIExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-bmi|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_BMIExample\"> </a>BMI: 27.5 kg/m2 measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "39156-5",
          "display" : "Body mass index (BMI) [Ratio]"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 27.5,
        "unit" : "kg/m2",
        "system" : "http://unitsofmeasure.org",
        "code" : "kg/m2"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/WaistCircumferenceExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "WaistCircumferenceExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-simple-observation|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_WaistCircumferenceExample\"> </a>Waist Circumference: 95 cm measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "8280-0",
          "display" : "Waist Circumference at umbilicus by Tape measure"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 95,
        "unit" : "cm",
        "system" : "http://unitsofmeasure.org",
        "code" : "cm"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/HbA1cExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "HbA1cExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_HbA1cExample\"> </a>Hemoglobin A1c: 6.5% measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "4548-4",
          "display" : "Hemoglobin A1c/Hemoglobin.total in Blood"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 6.5,
        "unit" : "%",
        "system" : "http://unitsofmeasure.org",
        "code" : "%"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/eGFRExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "eGFRExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_eGFRExample\"> </a>eGFR: 75 mL/min/1.73m2 measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "98979-8",
          "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 75,
        "unit" : "mL/min/1.73_m2",
        "system" : "http://unitsofmeasure.org",
        "code" : "mL/min/{1.73_m2}"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/uACRExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "uACRExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_uACRExample\"> </a>Urine Albumin-Creatinine Ratio: 45 mg/g measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "14959-1",
          "display" : "Microalbumin/Creatinine [Mass Ratio] in Urine"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 45,
        "unit" : "mg/g",
        "system" : "http://unitsofmeasure.org",
        "code" : "mg/g"
      }
    }
  },
  {
    "fullUrl" : "http://example.org/Observation/LDLCholesterolExample",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "LDLCholesterolExample",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\"><a name=\"Observation_LDLCholesterolExample\"> </a>LDL Cholesterol: 140 mg/dL measured on 2026-01-15</div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18262-6",
          "display" : "Cholesterol in LDL [Mass/volume] in Serum or Plasma by Direct assay"
        }]
      },
      "subject" : {
        "reference" : "Patient/PatientExample"
      },
      "effectiveDateTime" : "2026-01-15T10:30:00Z",
      "valueQuantity" : {
        "value" : 140,
        "unit" : "mg/dL",
        "system" : "http://unitsofmeasure.org",
        "code" : "mg/dL"
      }
    }
  }]
}

```
