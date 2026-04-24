#  - CMS ACCESS Model API v0.9.6

## 

### How to Use the API

The ACCESS Data Reporting API uses an asynchronous pattern for submitting clinical data for patients enrolled in the CMS ACCESS Model. For more information about the data reporting requirements, please see the [ACCESS Model Payment Amounts and Performance Targets](https://www.cms.gov/priorities/innovation/files/access-payments-amts-perf-targets.pdf).

The pattern uses two operations to support a submit-and-poll workflow:

1. **$report-data**: Submits a data reporting bundle for an aligned patient
1. **$submission-status**: Polls for the status of a submitted data report

#### Asynchronous Interaction Pattern

The Data Reporting API uses an asynchronous request-response pattern to accommodate the processing time required for data validation and storage. This pattern allows clients to submit data reports and subsequently poll for results without maintaining a persistent connection.

These operations can take some time to complete, making a synchronous request-response pattern impractical for real-world implementations.

#### Detailed Interaction Sequence

The following sequence diagram illustrates the complete interaction pattern:

```
sequenceDiagram
    participant Client as ACCESS Participant
    participant Server as Data Reporting API
    participant Backend as Processing System

    Client->>Server: POST [base]/access/Patient/$report-data
    Note over Client,Server: Request includes:<br/>- ParticipantID<br/>- Track<br/>- ReportType<br/>- Data Bundle
    
    Server->>Backend: Queue data submission
    Backend-->>Server: Submission queued
    
    alt Still processing
        Server-->>Client: 202 Accepted
        Note over Server,Client: Content-Location header<br/>(no response body)
    else Error occurred
        Server-->>Client: 4xx or 5xx
        Note over Server,Client: OperationOutcome<br/>with error details
    end

    loop Polling until complete
        Client->>Server: GET [base]/access/Patient/$submission-status/<SubmissionID>
        
        alt Still processing
            Server-->>Client: 202 Accepted
            Note over Server,Client: Still processing<br/>(no response body)
            Note over Client: Wait before next poll<br/>(recommended: 5-30 seconds)
        else Processing complete
            Server->>Backend: Retrieve results
            Backend-->>Server: Validation and storage result
            Server-->>Client: 200 OK with result
            Note over Server,Client: Parameters with<br/>submission result code
        else Error occurred
            Server-->>Client: 4xx or 5xx
            Note over Server,Client: OperationOutcome<br/>with error details
        end
    end

```

#### Operation Details

##### $report-data Operation

The `$report-data` operation initiates an asynchronous data reporting submission for an aligned patient.

**Endpoint**: `POST [base]/access/Patient/$report-data?entityId=[participantID]`

**Query Parameters**:

* `entityId` (required): ACCESS participant identifier. Must follow the pattern `ACCES#####`.

**Request Parameters Profile**: [ACCESS Report Data Request Parameters](StructureDefinition-access-report-data-in.md)

**Input Parameters**:

* `participantID` (Identifier, required): The ACCESS ID for the submitting participant
* `track` (CodeableConcept, required): The ACCESS track for this submission (CKM, eCKM, MSK, or BH) describing the patient's current health concerns
* `reportType` (CodeableConcept, required): The type of report being submitted (baseline, quarterly, end-of-period)
* `dataBundle` (Bundle Resource, required): A document Bundle conforming to `ACCESSDataReportingBundle` profile containing the data reporting composition and all referenced resources

**Expected Response**:

* **Status Code**: 202 Accepted
* **HTTP Headers**: `Content-Location` header containing the URL to check submission status
* **Response Body**: Empty (no body while processing)

**Example Request**:

```
POST https://[base]/access/Patient/$report-data?entityId=ACCES12345
Content-Type: application/fhir+json

```

```
{
  "resourceType" : "Parameters",
  "id" : "ReportDataRequestExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in"]
  },
  "parameter" : [{
    "name" : "participantID",
    "valueIdentifier" : {
      "system" : "https://dsacms.github.io/cmmi-access-model/participant-id",
      "value" : "ACCES12345"
    }
  },
  {
    "name" : "track",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
        "code" : "CKM",
        "display" : "Cardio-Kidney-Metabolic track"
      }]
    }
  },
  {
    "name" : "reportType",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportTypeCS",
        "code" : "baseline",
        "display" : "Baseline Data Report"
      }]
    }
  },
  {
    "name" : "dataBundle",
    "resource" : {
      "resourceType" : "Bundle",
      "id" : "CKMReportDataBundleExample",
      "meta" : {
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle"]
      },
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><h3>ACCESS CKM Track Data Report</h3><p>Patient: John Doe (MBI: 1EG4TE5MK73)</p><p>Report Date: 2026-01-26</p><p>Author: Jane Smith</p></div>"
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
              "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Comprehensive CKM Track Data Reporting including vital signs (blood pressure, body weight, waist circumference), and laboratory results (HbA1c, eGFR, uACR, lipid panel).</p></div>"
            },
            "section" : [{
              "title" : "Blood Pressure",
              "code" : {
                "coding" : [{
                  "system" : "http://loinc.org",
                  "code" : "35094-2",
                  "display" : "Blood pressure panel"
                }]
              },
              "entry" : [{
                "reference" : "Observation/AverageBloodPressureExample"
              }]
            },
            {
              "title" : "Weight",
              "code" : {
                "coding" : [{
                  "system" : "http://loinc.org",
                  "code" : "29463-7",
                  "display" : "Body weight"
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
                  "code" : "39156-5",
                  "display" : "BMI"
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
                  "code" : "8280-0",
                  "display" : "Waist Circumference at umbilicus by Tape measure"
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
                  "code" : "4548-4",
                  "display" : "Hemoglobin A1c/Hemoglobin.total in Blood"
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
                  "code" : "98979-8",
                  "display" : "Glomerular filtration rate [Volume Rate/Area] in Serum, Plasma or Blood by Creatinine-based formula (CKD-EPI 2021)/1.73 sq M"
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
                  "code" : "14959-1",
                  "display" : "Microalbumin/Creatinine [Mass Ratio] in Urine"
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
                  "code" : "57698-3",
                  "display" : "Lipid panel with direct LDL - Serum or Plasma"
                }]
              },
              "entry" : [{
                "reference" : "DiagnosticReport/LipidPanelDiagnosticReportExample"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Practitioner Jane Smith, NPI: 1234567893</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Example Healthcare Organization, ACCESS Participant ID: ACCES12345</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Blood Pressure: 138/88 mm[Hg] measured on 2026-01-15</div>"
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
        "fullUrl" : "http://example.org/Observation/BodyWeightExample",
        "resource" : {
          "resourceType" : "Observation",
          "id" : "BodyWeightExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Body Weight: 85 kg measured on 2026-01-15</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">BMI: 27.5 kg/m2 measured on 2026-01-15</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Waist Circumference: 95 cm measured on 2026-01-15</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Hemoglobin A1c: 6.5% measured on 2026-01-15</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">eGFR: 75 mL/min/1.73m2 measured on 2026-01-15</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Urine Albumin-Creatinine Ratio: 45 mg/g measured on 2026-01-15</div>"
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
        "fullUrl" : "http://example.org/Observation/TotalCholesterolExample",
        "resource" : {
          "resourceType" : "Observation",
          "id" : "TotalCholesterolExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Total Cholesterol: 219 mg/dL measured on 2026-01-15</div>"
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
              "code" : "2093-3",
              "display" : "Cholesterol [Mass/volume] in Serum or Plasma"
            }]
          },
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "effectiveDateTime" : "2026-01-15T10:30:00Z",
          "valueQuantity" : {
            "value" : 219,
            "unit" : "mg/dL",
            "system" : "http://unitsofmeasure.org",
            "code" : "mg/dL"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">LDL Cholesterol: 140 mg/dL measured on 2026-01-15</div>"
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
      },
      {
        "fullUrl" : "http://example.org/Observation/HDLCholesterolExample",
        "resource" : {
          "resourceType" : "Observation",
          "id" : "HDLCholesterolExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">HDL Cholesterol: 42 mg/dL measured on 2026-01-15</div>"
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
              "code" : "2085-9",
              "display" : "Cholesterol in HDL [Mass/volume] in Serum or Plasma"
            }]
          },
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "effectiveDateTime" : "2026-01-15T10:30:00Z",
          "valueQuantity" : {
            "value" : 42,
            "unit" : "mg/dL",
            "system" : "http://unitsofmeasure.org",
            "code" : "mg/dL"
          }
        }
      },
      {
        "fullUrl" : "http://example.org/Observation/TriglyceridesExample",
        "resource" : {
          "resourceType" : "Observation",
          "id" : "TriglyceridesExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Triglycerides: 185 mg/dL measured on 2026-01-15</div>"
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
              "code" : "2571-8",
              "display" : "Triglyceride [Mass/volume] in Serum or Plasma"
            }]
          },
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "effectiveDateTime" : "2026-01-15T10:30:00Z",
          "valueQuantity" : {
            "value" : 185,
            "unit" : "mg/dL",
            "system" : "http://unitsofmeasure.org",
            "code" : "mg/dL"
          }
        }
      },
      {
        "fullUrl" : "http://example.org/DiagnosticReport/LipidPanelDiagnosticReportExample",
        "resource" : {
          "resourceType" : "DiagnosticReport",
          "id" : "LipidPanelDiagnosticReportExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><h3>Lipid Panel Report</h3><p>Patient: John Doe</p><p>Date: 2026-01-15</p><p>Results: Total Cholesterol 219 mg/dL, LDL 140 mg/dL, HDL 42 mg/dL, Triglycerides 185 mg/dL</p></div>"
          },
          "status" : "final",
          "category" : [{
            "coding" : [{
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0074",
              "code" : "LAB",
              "display" : "Laboratory"
            }]
          }],
          "code" : {
            "coding" : [{
              "system" : "http://loinc.org",
              "code" : "57698-3",
              "display" : "Lipid panel with direct LDL - Serum or Plasma"
            }]
          },
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "effectiveDateTime" : "2026-01-15T10:30:00Z",
          "issued" : "2026-01-15T10:30:00Z",
          "result" : [{
            "reference" : "Observation/TotalCholesterolExample"
          },
          {
            "reference" : "Observation/LDLCholesterolExample"
          },
          {
            "reference" : "Observation/HDLCholesterolExample"
          },
          {
            "reference" : "Observation/TriglyceridesExample"
          }]
        }
      }]
    }
  }]
}

```

**Example Response**:

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

(No response body - processing asynchronously)

##### $submission-status Operation

The `$submission-status` operation retrieves the current status of a previously submitted data report. This is a **read-only operation** that uses the HTTP GET method.

**Response Parameters Profile**: [ACCESS Submission Status Response Parameters](StructureDefinition-access-submission-status-out.md)

**Note**: The $submission-status operation uses the ACCESS Submission Status Response Parameters profile, which includes an optional `issues` parameter for providing additional information via OperationOutcome resources.

**Data Reporting Result Codes**:

When processing is complete (HTTP 200), the `result` parameter uses codes from the **ACCESSReportDataResultVS** value set:

* **`success`**: Data submission was successfully processed and recorded for ACCESS Model evaluation.
* **`validation-error`**: Data submission failed validation (see the 'issues' parameter for specific errors and details).
* **`duplicate`**: Data submission is a duplicate of a previously submitted report for this reporting period.
* **`patient-not-aligned`**: Patient is not currently aligned to this participant in the specified track. Data reporting is only accepted for aligned patients.
* **`reporting-period-closed`**: The reporting period for this data has closed and no further submissions are accepted.
* **`incomplete-data`**: Data submission is missing required observations or measurements for the specified track (see the 'issues' parameter for specific issues and details).
* **`incorrect-track`**: The submitted data does not match the track the patient is aligned to.

**Example Responses**:

**Example Status Check Request (Still Processing)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 202 Accepted

```

(No response body - still processing)

**Example Status Check Request (Processing Complete - Success)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "success",
            "display": "Success"
          }
        ],
        "text": "Data submission was successfully processed and recorded for ACCESS Model evaluation."
      }
    }
  ]
}

```

**Example Status Check Request (Incomplete Data with Detailed Issues)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "incomplete-data",
            "display": "Incomplete data"
          }
        ],
        "text": "Data submission is missing required observations or measurements for the specified track. When this result is returned, the response MAY include an 'issues' parameter containing an OperationOutcome resource with detailed, structured information about specific missing information and how to correct it."
      }
    },
    {
      "name": "issues",
      "resource": {
        "resourceType": "OperationOutcome",
        "issue": [
          {
            "severity": "warning",
            "code": "required",
            "details": {
              "text": "Missing required observation: Hemoglobin A1c (HbA1c) is required for CKM track quarterly reporting"
            },
            "expression": [
              "Bundle.entry[2].resource.section.where(code.coding.code='CKM').section.where(code.coding.code='4548-4')"
            ]
          }
        ]
      }
    }
  ]
}

```

**Example Status Check Request (Patient Not Aligned)**:

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "patient-not-aligned",
            "display": "Patient not aligned"
          }
        ],
        "text": "Patient is not currently aligned to this participant in the specified track. Data reporting is only accepted for aligned patients."
      }
    }
  ]
}

```

#### Implementation Guidance

##### Data Bundle Structure

The data bundle submitted via the `DataBundle` parameter must conform to the **ACCESSDataReportingBundle** profile, which requires:

1. **Bundle Type**: Must be "document"
1. **Composition Entry**: First entry must be an ACCESSDataReportingComposition
1. **Patient Entry**: Must include the patient resource referenced by the composition
1. **Clinical Data**: Must include all Observation and QuestionnaireResponse resources (and any other resources) referenced by the composition sections

**Track-Specific Sections**:

Each track has specific data requirements organized into composition sections:

**CKM (Cardio-Kidney-Metabolic) Track**:

* Blood Pressure observations
* Lipid panel results
* Body weight and BMI
* Waist circumference
* HbA1c results
* eGFR (estimated Glomerular Filtration Rate)
* uACR (urine Albumin-to-Creatinine Ratio)

Although eGFR and uACR are only required to be reported during baseline reporting for each period of care, if a patient will be immediately continuing for a follow-on period, it is recommended that eGFR and uACR data be included in the end-of-year reporting for the initial period as this end-of-year reporting can count as the baseline reporting for the follow-on period. Do make sure the clinical relevant dates align with the period of care.

* If eGFR and uACR are not included in end-of-year reporting for the initial period of care and the patient does continue with a follow-on period, all required CKM measures must be submitted within 60 days of the start of the follow-on period (up to 6 total measures depending on the patient's diagnosis). Please note that eGFR and uACR data cannot be submitted alone even if all other measures were submitted for the initial period end-of year reporting.

**eCKM (Early Cardio-Kidney-Metabolic) Track**:

* Blood Pressure observations
* Lipid panel results
* Body weight and BMI
* Waist circumference
* HbA1c results
* eGFR (estimated Glomerular Filtration Rate)
* uACR (urine Albumin-to-Creatinine Ratio)

**MSK (Musculoskeletal) Track**:

* All MSK data elements are reported as US Core QuestionnaireResponse resources (one per instrument)
* PROMIS Physical Function (PF) Short Form 6b (PROMIS-PF)
* PROMIS Pain Interference (PI) Short Form 6a (PROMIS-PI)
* Oswestry Disability Index (ODI)
* Neck Disability Index (NDI)
* QuickDASH (Quick Disabilities of the Arm, Shoulder and Hand)
* PROMIS Version 2.0 Computer Adaptive Test (CAT)
* Patient's Global Impression of Change (PGIC)
* Knee Injury and Osteoarthritis Outcome Score for Joint Replacement (KOOS JR)
* Hip Dysfunction and Osteoarthritis Outcome Score for Joint Replacement (HOOS JR)
* PROMIS Pain Intensity NRS v1.0 (NRS or PROMIS NRS)

**BH (Behavioral Health) Track**:

* All BH data elements are reported as US Core QuestionnaireResponse resources (one per instrument)
* Depression screening (PHQ-9) scores
* Anxiety screening (GAD-7) scores
* Overall function (WHODAS 2.0) scores
* Patient's Global Impression of Change (PGIC)

##### Including Additional Information

The **ACCESSDataReportingComposition** profile supports an optional **additional-information** section that allows participants to include supplementary resources beyond the required track-specific data elements. This section enables more comprehensive data reporting while maintaining a clear separation between required and optional data.

**IMPORTANT**: The `additional-information` section must appear after the required track section within the `ACCESSDataReportingComposition`.

**Section Details**:

* **Section Code**: `ACCESSReportDataCompositionSectionCS#additional-information`
* **Cardinality**: 0..1 (optional)
* **Entry References**: 0..* references to any FHIR Resource
* **Purpose**: Include supplemental information that provides additional context or detail about the data being reported

**Common Use Cases**:

1. **Supporting Documentation**: Include DiagnosticReport or DocumentReference resources that provide additional clinical context
1. **Care Plan Information**: Include CarePlan resources that describe the treatment approach for tracked conditions
1. **Supplementary Observations**: Include additional measurements or assessments not explicitly required by the track but relevant to patient care

**Important Considerations**:

* All resources referenced in the `additional-information` section must be included in the Bundle
* The section is optional - only use it when you have meaningful supplementary data to provide
* Validation focuses on required track-specific data; additional information is not validated against track requirements
* The section uses standard Composition.section pattern, making it familiar to FHIR implementers

##### Data Quality Requirements

To ensure successful data submission:

**Completeness**:

* Include all required data elements for the reporting period
* Ensure all referenced resources are included in the bundle
* Provide complete patient demographics including the patient ID

**Accuracy**:

* Verify clinical data reflects current patient status
* Use appropriate LOINC codes for observations
* Include proper units of measure (UCUM)

**Conformance**:

* Validate bundle against `ACCESSDataReportingBundle` profile
* Ensure composition conforms to the `ACCESSDataReportingComposition` profile
* Use US Core profiles for all clinical resources

**Timeliness**:

* Submit data within the required reporting windows
* Follow the reporting schedule in the participant agreement

##### Handling Incomplete Data

When an `incomplete-data` result is returned, the response includes an optional `issues` parameter containing an OperationOutcome resource with detailed, structured information about what information is missing. This allows implementers to programmatically identify and correct errors.

**Response Structure**:

The validation error response contains two parameters:

1. **`result`**: CodeableConcept with code "validation-error" and descriptive text
1. **`issues`**(optional): OperationOutcome resource with detailed error information

**Using the OperationOutcome**:

The OperationOutcome follows standard FHIR conventions and includes:

* **`issue[].severity`**: Error severity (error, warning, information)
* **`issue[].code`**: FHIR issue type code (e.g., required, value, structure)
* **`issue[].details.text`**: Human-readable description of the issue
* **`issue[].expression`**: FHIRPath expression pointing to the problematic element

**Processing Incomplete Data**:

1. **Check for the `issues` parameter**: When result code is "incomplete-data", look for the optional`issues`parameter
1. **Parse OperationOutcome**: Extract the`issue`array from the OperationOutcome resource
1. **Identify errors**: Review each issue with`severity`of "error"
1. **Locate problems**: Use the`expression`element to find the exact location in your Bundle
1. **Correct and resubmit**: Fix identified issues and submit the corrected data

##### Common Validation Errors:

* **Incorrect LOINC codes**: Observations use wrong LOINC codes for the data element
* **Invalid values**: Observation values outside valid ranges
* **Missing or invalid patient ID**: Patient resource missing Patient ID or other required identifiers
* **Bundle structure errors**: Bundle not conforming to ACCESSDataReportingBundle profile
* **Broken references**: Composition references resources not included in bundle
* **Profile violations**: Resources don't conform to required US Core or ACCESS profiles

**Best Practices**:

1. **Validate locally first**: Use a FHIR validator to check your bundle before submission
1. **Parse all issues**: Process all issues in the OperationOutcome, not just the first one
1. **Use expression paths**: The`expression`element helps locate problems in complex bundles
1. **Check warnings**: Review`warning`severity issues for optional improvements
1. **Maintain error logs**: Keep records of validation errors for quality improvement

#### Example Complete Workflows

##### MSK Track Workflow Example

The following example demonstrates a complete data reporting workflow for an MSK track patient:

**Step 1: Submit MSK Data Report**

```
POST https://[base]/access/Patient/$report-data?entityId=ACCES12345
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "participantID",
      "valueIdentifier": {
        "system": "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value": "ACCES12345"
      }
    },
    {
      "name": "track",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code": "MSK",
            "display": "Musculoskeletal track"
          }
        ]
      }
    },
    {
      "name": "reportType",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportTypeCS",
            "code": "quarterly"
            "display": "Quarterly Data Report"
          }
        ]
      }
    },
    {
      "resourceType" : "Bundle",
      "id" : "MSKReportDataBundleExample",
      "meta" : {
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle"]
      },
      "identifier" : {
        "system" : "http://example.org/data-bundle-id",
        "value" : "bundle-msk-001"
      },
      "type" : "document",
      "timestamp" : "2026-01-26T12:00:00Z",
      "entry" : [{
        "fullUrl" : "http://example.org/Composition/MSKReportDataCompositionExample",
        "resource" : {
          "resourceType" : "Composition",
          "id" : "MSKReportDataCompositionExample",
          "meta" : {
            "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Composition_MSKReportDataCompositionExample\"> </a><h3>ACCESS MSK Track Data Report</h3><p>Patient: John Doe (MBI: 1EG4TE5MK73)</p><p>Report Date: 2026-01-26</p><p>Author: Jane Smith</p></div>"
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
              "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Musculoskeletal Track Data Reporting including pain assessments and patient-reported outcomes.</p></div>"
            },
            "section" : [{
              "title" : "PROMIS Physical Function Short Form 6b",
              "code" : {
                "coding" : [{
                  "system" : "http://loinc.org",
                  "code" : "76804-4",
                  "display" : "PROMIS short form - physical function 6b - version 1.2"
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
                  "code" : "91722-9",
                  "display" : "PROMIS item bank - physical function - version 2.0"
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
                  "code" : "90973-9",
                  "display" : "PROMIS short form - pain interference 6a - version 1.0"
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
                  "code" : "89923-7",
                  "display" : "PROMIS item bank - pain interference - version 1.1"
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
                  "code" : "97908-8",
                  "display" : "Oswestry Disability Index"
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
                  "code" : "82226-2",
                  "display" : "Neck Disability Index [NDI]"
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
                  "code" : "QuickDASH",
                  "display" : "Quick Disabilities of the Arm, Shoulder and Hand [QuickDASH]"
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
                  "code" : "PGIC",
                  "display" : "Patient Global Impression of Change [PGIC]"
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
                  "code" : "82324-5",
                  "display" : "Knee injury and osteoarthritis outcome score for joint replacement [KOOSJR]"
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
                  "code" : "82316-1",
                  "display" : "Hip dysfunction and osteoarthritis outcome score for joint replacement [HOOSJR]"
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
                  "code" : "72514-3",
                  "display" : "Pain severity - 0-10 verbal numeric rating [Score] - Reported"
                }]
              },
              "entry" : [{
                "reference" : "QuestionnaireResponse/PROMISNRSExample"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_PatientExample\"> </a>Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_PractitionerExample\"> </a>Practitioner Jane Smith, NPI: 1234567893</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_OrganizationExample\"> </a>Example Healthcare Organization, ACCESS Participant ID: ACCES12345</div>"
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
        "fullUrl" : "http://example.org/QuestionnaireResponse/PROMISPhysicalFunctionExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "PROMISPhysicalFunctionExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PROMIS Physical Function Short Form 6b QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/PROMISPhysicalFunctionQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "pf6b-1",
            "text" : "Are you able to do chores such as vacuuming or yard work?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 4
                }],
                "system" : "http://loinc.org",
                "code" : "LA13918-0",
                "display" : "With a little difficulty"
              }
            }]
          },
          {
            "linkId" : "pf6b-2",
            "text" : "Are you able to go up and down stairs at a normal pace?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13920-6",
                "display" : "With some difficulty"
              }
            }]
          },
          {
            "linkId" : "pf6b-3",
            "text" : "Are you able to go for a walk of at least 15 minutes?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13920-6",
                "display" : "With some difficulty"
              }
            }]
          },
          {
            "linkId" : "pf6b-4",
            "text" : "Are you able to run errands and shop?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 4
                }],
                "system" : "http://loinc.org",
                "code" : "LA13918-0",
                "display" : "With a little difficulty"
              }
            }]
          },
          {
            "linkId" : "pf6b-5",
            "text" : "Does your health now limit you in doing two hours of physical labor?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 1
                }],
                "system" : "http://loinc.org",
                "code" : "LA13912-3",
                "display" : "Unable to do"
              }
            }]
          },
          {
            "linkId" : "pf6b-6",
            "text" : "Does your health now limit you in doing moderate work around the house like vacuuming, sweeping floors or carrying in groceries?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA13919-8",
                "display" : "With much difficulty"
              }
            }]
          },
          {
            "linkId" : "raw_score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 17
                }],
                "system" : "http://loinc.org",
                "code" : "77797-9",
                "display" : "PROMIS short form - physical function 6b - version 1.2 raw score"
              }
            }]
          },
          {
            "linkId" : "tscore",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 36.8
                }],
                "system" : "http://loinc.org",
                "code" : "77866-2",
                "display" : "PROMIS physical function - version 1.0 Tscore"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/PROMISCATExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "PROMISCATExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PROMIS Physical Function CAT QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/PROMISPhysicalFunctionCATQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "pf-cat-1",
            "text" : "Does your health now limit you in doing two hours of physical labor?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA11911-7",
                "display" : "Quite a lot"
              }
            }]
          },
          {
            "linkId" : "pf-cat-2",
            "text" : "Are you able to do chores such as vacuuming or yard work?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13920-6",
                "display" : "With some difficulty"
              }
            }]
          },
          {
            "linkId" : "pf-cat-3",
            "text" : "To what extent are you able to carry out your everyday physical activities such as walking, climbing stairs, carrying groceries, or moving a chair?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13939-6",
                "display" : "Moderately"
              }
            }]
          },
          {
            "linkId" : "pf-cat-4",
            "text" : "Does your health now limit you in walking more than a mile?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA11911-7",
                "display" : "Quite a lot"
              }
            }]
          },
          {
            "linkId" : "tscore",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 38
                }],
                "system" : "http://loinc.org",
                "code" : "91721-1",
                "display" : "PROMIS physical function - version 2.0 T-score"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/PROMISPainInterferenceSFExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "PROMISPainInterferenceSFExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PROMIS Pain Interference Short Form 6a QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/PROMISPainInterferenceSFQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "pi6a-1",
            "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA13863-8",
                "display" : "A little bit"
              }
            }]
          },
          {
            "linkId" : "pi6a-2",
            "text" : "In the past 7 days: How much did pain interfere with work around the home?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA13863-8",
                "display" : "A little bit"
              }
            }]
          },
          {
            "linkId" : "pi6a-3",
            "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13909-9",
                "display" : "Somewhat"
              }
            }]
          },
          {
            "linkId" : "pi6a-4",
            "text" : "In the past 7 days: How much did pain interfere with your household chores?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA13863-8",
                "display" : "A little bit"
              }
            }]
          },
          {
            "linkId" : "pi6a-5",
            "text" : "In the past 7 days: How much did pain interfere with the things you usually do for fun?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13909-9",
                "display" : "Somewhat"
              }
            }]
          },
          {
            "linkId" : "pi6a-6",
            "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA13909-9",
                "display" : "Somewhat"
              }
            }]
          },
          {
            "linkId" : "raw_score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 15
                }],
                "system" : "http://loinc.org",
                "code" : "90974-7",
                "display" : "PROMIS short form - pain interference 6a - version 1.0 raw score"
              }
            }]
          },
          {
            "linkId" : "tscore",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 58.6
                }],
                "system" : "http://loinc.org",
                "code" : "77865-4",
                "display" : "PROMIS pain interference - version 1.0 Tscore"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/PROMISPainInterferenceCATExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "PROMISPainInterferenceCATExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PROMIS Pain Interference CAT QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/PROMISPainInterferenceCATQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "pi-cat-1",
            "text" : "In the past 7 days: How much did pain interfere with your day to day activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 4
                }],
                "system" : "http://loinc.org",
                "code" : "LA13902-4",
                "display" : "Quite a bit"
              }
            }]
          },
          {
            "linkId" : "pi-cat-2",
            "text" : "In the past 7 days: How much did pain interfere with your ability to participate in social activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 5
                }],
                "system" : "http://loinc.org",
                "code" : "LA13914-9",
                "display" : "Very much"
              }
            }]
          },
          {
            "linkId" : "pi-cat-3",
            "text" : "In the past 7 days: How much did pain interfere with your enjoyment of social activities?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 4
                }],
                "system" : "http://loinc.org",
                "code" : "LA13902-4",
                "display" : "Quite a bit"
              }
            }]
          },
          {
            "linkId" : "pi-cat-4",
            "text" : "In the past 7 days: How much did pain interfere with work around the home?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 5
                }],
                "system" : "http://loinc.org",
                "code" : "LA13914-9",
                "display" : "Very much"
              }
            }]
          },
          {
            "linkId" : "tscore",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 70
                }],
                "system" : "http://loinc.org",
                "code" : "89924-5",
                "display" : "PROMIS pain interference - version 1.1 Tscore"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/OswestryDisabilityIndexExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "OswestryDisabilityIndexExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Oswestry Disability Index QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/OswestryDisabilityIndexQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "odi-1",
            "text" : "Pain intensity",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "odi-2",
            "text" : "Personal care (washing, dressing, etc.)",
            "answer" : [{
              "valueDecimal" : 1
            }]
          },
          {
            "linkId" : "odi-3",
            "text" : "Lifting",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "odi-4",
            "text" : "Walking",
            "answer" : [{
              "valueDecimal" : 1
            }]
          },
          {
            "linkId" : "odi-5",
            "text" : "Sitting",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "odi-6",
            "text" : "Standing",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "odi-7",
            "text" : "Sleeping",
            "answer" : [{
              "valueDecimal" : 1
            }]
          },
          {
            "linkId" : "odi-8",
            "text" : "Sex life (if applicable)",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "odi-9",
            "text" : "Social life",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "odi-10",
            "text" : "Traveling",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 36
                }],
                "system" : "http://loinc.org",
                "code" : "97909-6",
                "display" : "Oswestry disability index score ODI"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/NeckDisabilityIndexExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "NeckDisabilityIndexExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Neck Disability Index QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/NeckDisabilityIndexQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "ndi-1",
            "text" : "Pain intensity",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25855-0",
                "display" : "The pain is moderate at the moment."
              }
            }]
          },
          {
            "linkId" : "ndi-2",
            "text" : "Personal care (washing, dressing, etc.)",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 1
                }],
                "system" : "http://loinc.org",
                "code" : "LA25860-0",
                "display" : "I can look after myself normally but it causes extra pain."
              }
            }]
          },
          {
            "linkId" : "ndi-3",
            "text" : "Lifting",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25867-5",
                "display" : "Pain prevents me lifting heavy weights off the floor, but I can manage if they are conveniently placed, for example on a table."
              }
            }]
          },
          {
            "linkId" : "ndi-4",
            "text" : "Reading",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25873-3",
                "display" : "I can read as much as I want with moderate pain in my neck."
              }
            }]
          },
          {
            "linkId" : "ndi-5",
            "text" : "Headaches",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA26367-5",
                "display" : "I have moderate headaches, which come frequently."
              }
            }]
          },
          {
            "linkId" : "ndi-6",
            "text" : "Concentration",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25880-8",
                "display" : "I have a fair degree of difficulty in concentrating when I want to."
              }
            }]
          },
          {
            "linkId" : "ndi-7",
            "text" : "Work",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25886-5",
                "display" : "I can do most of my usual work, but no more."
              }
            }]
          },
          {
            "linkId" : "ndi-8",
            "text" : "Driving",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25892-3",
                "display" : "I can drive my car as long as I want with moderate pain in my neck."
              }
            }]
          },
          {
            "linkId" : "ndi-9",
            "text" : "Sleeping",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25898-0",
                "display" : "My sleep is mildly disturbed (1-2 hrs sleepless)."
              }
            }]
          },
          {
            "linkId" : "ndi-10",
            "text" : "Recreation",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA25904-6",
                "display" : "I am able to engage in most, but not all of my usual recreation activities because of pain in my neck."
              }
            }]
          },
          {
            "linkId" : "total-score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 40
                }],
                "system" : "http://loinc.org",
                "code" : "82237-9",
                "display" : "Total score [NDI]"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/QuickDASHExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "QuickDASHExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">QuickDASH QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/QuickDASHQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "qd-1",
            "text" : "Open a tight or new jar.",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "qd-2",
            "text" : "Do heavy household chores (e.g., wash walls, wash floors).",
            "answer" : [{
              "valueDecimal" : 4
            }]
          },
          {
            "linkId" : "qd-3",
            "text" : "Carry a shopping bag or briefcase.",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "qd-4",
            "text" : "Wash your back.",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "qd-5",
            "text" : "Use a knife to cut food.",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "qd-6",
            "text" : "Recreational activities in which you take some force or impact through your arm, shoulder, or hand (e.g., golf, hammering, tennis, etc.).",
            "answer" : [{
              "valueDecimal" : 4
            }]
          },
          {
            "linkId" : "qd-7",
            "text" : "During the past week, to what extent has your arm, shoulder, or hand problem interfered with your normal social activities with family, friends, neighbors, or groups?",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "qd-8",
            "text" : "During the past week, were you limited in your work or other regular daily activities as a result of your arm, shoulder, or hand problem?",
            "answer" : [{
              "valueDecimal" : 4
            }]
          },
          {
            "linkId" : "qd-9",
            "text" : "Arm, shoulder, or hand pain",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "qd-10",
            "text" : "Tingling (pins and needles) in your arm, shoulder, or hand",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "qd-11",
            "text" : "During the past week, how much difficulty have you had sleeping because of the pain in your arm, shoulder, or hand?",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "score",
            "answer" : [{
              "valueDecimal" : 50
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/MSKPGICExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "MSKPGICExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PGIC QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/MSKPGICQuestionnaire",
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
            "text" : "Since beginning treatment, how would you describe your overall change in pain, function, and quality of life?",
            "answer" : [{
              "valueDecimal" : 1
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/KOOSJRExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "KOOSJRExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">KOOSJR QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/KOOSJRQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "koosjr-1",
            "text" : "How severe is your knee stiffness after first wakening in the morning?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "koosjr-2",
            "text" : "Twisting/pivoting on your knee",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "koosjr-3",
            "text" : "Straightening knee fully",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 1
                }],
                "system" : "http://loinc.org",
                "code" : "LA6752-5",
                "display" : "Mild"
              }
            }]
          },
          {
            "linkId" : "koosjr-4",
            "text" : "Going up or down stairs",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA6750-9",
                "display" : "Severe"
              }
            }]
          },
          {
            "linkId" : "koosjr-5",
            "text" : "Standing upright",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "koosjr-6",
            "text" : "Rising from sitting",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "koosjr-7",
            "text" : "Bending to floor/picking up an object",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA6750-9",
                "display" : "Severe"
              }
            }]
          },
          {
            "linkId" : "total-interval-score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 50.012
                }],
                "system" : "http://loinc.org",
                "code" : "82332-8",
                "display" : "Total interval score [KOOSJR]"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/HOOSJRExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "HOOSJRExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">HOOSJR QuestionnaireResponse</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/HOOSJRQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "hoosjr-1",
            "text" : "Going up or down stairs",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "hoosjr-2",
            "text" : "Walking on an uneven surface",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "hoosjr-3",
            "text" : "Rising from sitting",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 2
                }],
                "system" : "http://loinc.org",
                "code" : "LA6751-7",
                "display" : "Moderate"
              }
            }]
          },
          {
            "linkId" : "hoosjr-4",
            "text" : "Bending to the floor/picking up an object",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 3
                }],
                "system" : "http://loinc.org",
                "code" : "LA6750-9",
                "display" : "Severe"
              }
            }]
          },
          {
            "linkId" : "hoosjr-5",
            "text" : "Lying in bed",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 1
                }],
                "system" : "http://loinc.org",
                "code" : "LA6752-5",
                "display" : "Mild"
              }
            }]
          },
          {
            "linkId" : "hoosjr-6",
            "text" : "Sitting",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 1
                }],
                "system" : "http://loinc.org",
                "code" : "LA6752-5",
                "display" : "Mild"
              }
            }]
          },
          {
            "linkId" : "total-interval-score",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 55.985
                }],
                "system" : "http://loinc.org",
                "code" : "82323-7",
                "display" : "Total interval score [HOOSJR]"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/PROMISNRSExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "PROMISNRSExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">...</div>"
          },
          "questionnaire" : "http://example.org/Questionnaire/PROMISNRSQuestionnaire",
          "status" : "completed",
          "subject" : {
            "reference" : "Patient/PatientExample"
          },
          "authored" : "2026-01-15T10:30:00Z",
          "author" : {
            "reference" : "Patient/PatientExample"
          },
          "item" : [{
            "linkId" : "nrs-1",
            "text" : "In the past 7 days, how would you rate your pain on average? (0-10)",
            "answer" : [{
              "valueInteger" : 6
            }]
          }]
        }
      }]
    }
  ]
}

```

**Response:**

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-123456

```

**Step 2: Extract Submission URL and Wait**

* Extract submission URL from Content-Location header
* Wait 5 seconds before first poll

**Step 3: First Status Check** (after 5 seconds)

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 202 Accepted

```

(Still processing - no body)

**Step 4: Second Status Check** (after another 15 seconds)

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "success",
            "display": "Success"
          }
        ],
        "text": "Data submission was successfully processed and recorded for ACCESS Model evaluation."
      }
    }
  ]
}

```

**Step 5: Process Result**

* Parse the result code: "success"
* Display the text to the user
* Log successful submission for record-keeping

##### BH Track Workflow Example

The following example demonstrates a complete data reporting workflow for a BH track patient:

**Step 1: Submit BH Data Report**

```
POST https://[base]/access/Patient/$report-data?entityId=ACCES67890
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "participantID",
      "valueIdentifier": {
        "system": "https://dsacms.github.io/cmmi-access-model/participant-id",
        "value": "ACCES67890"
      }
    },
    {
      "name": "track",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
            "code": "BH",
            "display": "Behavioral Health track"
          }
        ]
      }
    },
    {
      "name": "reportType",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportTypeCS",
            "code": "end-of-period",
            "display": "End of Period Data Report"
          }
        ]
      }
    },
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Composition_BHReportDataCompositionExample\"> </a><h3>ACCESS BH Track Data Report</h3><p>Patient: John Doe (MBI: 1EG4TE5MK73)</p><p>Report Date: 2026-01-26</p><p>Author: Jane Smith</p></div>"
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
              "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Behavioral Health Track Data Reporting including depression and anxiety assessments and patient-reported outcomes.</p></div>"
            },
            "section" : [{
              "title" : "Depression (PHQ-9)",
              "code" : {
                "coding" : [{
                  "system" : "http://loinc.org",
                  "code" : "44249-1",
                  "display" : "PHQ-9 quick depression assessment panel [Reported.PHQ]"
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
                  "code" : "69737-5",
                  "display" : "Generalized anxiety disorder 7 item (GAD-7)"
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
                  "code" : "WHODAS",
                  "display" : "World Health Organization Disability Assessment Schedule [WHODAS] 2.0"
                }]
              },
              "entry" : [{
                "reference" : "QuestionnaireResponse/BHWHODASExample"
              }]
            },
            {
              "title" : "Patient's Global Impression of Change",
              "code" : {
                "coding" : [{
                  "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
                  "code" : "PGIC",
                  "display" : "Patient Global Impression of Change [PGIC]"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_PatientExample\"> </a>Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_PractitionerExample\"> </a>Practitioner Jane Smith, NPI: 1234567893</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_OrganizationExample\"> </a>Example Healthcare Organization, ACCESS Participant ID: ACCES12345</div>"
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PHQ-9 QuestionnaireResponse</div>"
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
            "text" : "How difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 7
                }],
                "system" : "http://loinc.org",
                "code" : "44261-6",
                "display" : "Patient Health Questionnaire 9 item (PHQ-9) total score [Reported]"
              }
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">GAD-7 QuestionnaireResponse</div>"
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
            "text" : "Feeling nervous, anxious or on edge",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
            "text" : "Over the past 2 weeks have you not been able to stop or control worrying",
            "answer" : [{
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
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
              "valueCoding" : {
                "extension" : [{
                  "url" : "http://hl7.org/fhir/StructureDefinition/itemWeight",
                  "valueDecimal" : 6
                }],
                "system" : "http://loinc.org",
                "code" : "70274-6",
                "display" : "Generalized anxiety disorder 7 item (GAD-7) total score [Reported.PHQ]"
              }
            }]
          }]
        }
      },
      {
        "fullUrl" : "http://example.org/QuestionnaireResponse/BHWHODASExample",
        "resource" : {
          "resourceType" : "QuestionnaireResponse",
          "id" : "BHWHODASExample",
          "meta" : {
            "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
          },
          "text" : {
            "status" : "generated",
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">WHODAS QuestionnaireResponse</div>"
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
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s2",
            "text" : "Taking care of household responsibilities",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "whodas-s3",
            "text" : "Learning a new task, for example learning how to get to a new place",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s4",
            "text" : "How much of a problem did you have joining in community activities (for example, festivities, religious or other activities) in the same way as anyone else can?",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s5",
            "text" : "How much of a problem did you have with being emotionally affected by your health problems?",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "whodas-s6",
            "text" : "Concentrating on doing something for ten minutes?",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s7",
            "text" : "Walking a long distance such as a kilometer [or equivalent]?",
            "answer" : [{
              "valueDecimal" : 3
            }]
          },
          {
            "linkId" : "whodas-s8",
            "text" : "Washing your whole body?",
            "answer" : [{
              "valueDecimal" : 1
            }]
          },
          {
            "linkId" : "whodas-s9",
            "text" : "Getting dressed?",
            "answer" : [{
              "valueDecimal" : 1
            }]
          },
          {
            "linkId" : "whodas-s10",
            "text" : "Dealing with people you do not know",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s11",
            "text" : "Maintaining a friendship",
            "answer" : [{
              "valueDecimal" : 2
            }]
          },
          {
            "linkId" : "whodas-s12",
            "text" : "Your day-to-day work",
            "answer" : [{
              "valueDecimal" : 3
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
            "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">PGIC QuestionaireResponse</div>"
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
              "valueDecimal" : 1
            }]
          }]
        }
      }]
    }
  ]
}

```

**Response:**

```
HTTP/1.1 202 Accepted
Content-Location: https://[base]/access/Patient/$submission-status/sub-789012

```

**Step 2-5**: Follow the same polling pattern as MSK example above until receiving success response.

#### API-Specific Error Scenarios

For general error handling guidance and common error scenarios (missing parameters, invalid tokens, server errors, etc.), see the [Error Handling section in General Guidance](guidance.md#error-handling).

The following errors are specific to the Data Reporting API:

##### Patient Not Aligned

**Scenario**: Attempting to report data for a patient who is not currently aligned to this provider.

```
GET https://[base]/access/Patient/$submission-status/sub-123456

```

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "patient-not-aligned",
            "display": "Patient not aligned"
          }
        ],
        "text": "Patient is not currently aligned to this participant in the specified track. Data reporting is only accepted for aligned patients."
      }
    }
  ]
}

```

##### Missing Required Data Bundle Parameter

**Scenario**: Data reporting request submitted without the required dataBundle parameter.

```
POST https://[base]/access/Patient/$report-data?entityId=ACCES67890

```

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": {
        "text": "Missing required parameter: dataBundle"
      },
      "diagnostics": "At least one 'dataBundle' parameter containing an ACCESS Data Reporting Bundle is required. The bundle must conform to the ACCESSDataReportingBundle profile."
    }
  ]
}

```

##### Invalid Composition Structure

**Scenario**: Data reporting bundle contains an invalid Composition structure.

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "structure",
      "details": {
        "text": "Invalid Composition structure in data reporting bundle"
      },
      "diagnostics": "The Composition resource must include the required track-specific sections. For the CKM track, the following sections are required: blood-pressure, lipids, weight, BMI, HbA1c, eGFR, or uACR."
    }
  ]
}

```

##### Missing Required Track Section

**Scenario**: Composition is missing required sections for the specified track.

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": {
        "text": "Missing required track section in Composition"
      },
      "diagnostics": "For submitting data to the BH track, the Composition must include the BH section."
    }
  ]
}

```

##### Missing Required Track Section

**Scenario**: Composition is missing required section for the specified track.

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "required",
      "details": {
        "text": "Missing required track section in Composition"
      },
      "diagnostics": "For submitting data to the BH track, the Composition must include the BH section."
    }
  ]
}

```

##### Invalid Resource Reference

**Scenario**: Composition references resources that are not included in the bundle.

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invalid",
      "details": {
        "text": "Invalid resource reference in Composition"
      },
      "diagnostics": "Composition.section[blood-pressure].entry references 'Observation/bp-reading-123' but this resource is not included in the Bundle. All referenced resources must be included in the bundle."
    }
  ]
}

```

##### Multiple Track Sections Submitted

**Scenario**: Composition has more than one track section specified.

```
HTTP/1.1 400 Bad Request
Content-Type: application/fhir+json

```

```
{
  "resourceType": "OperationOutcome",
  "issue": [
    {
      "severity": "error",
      "code": "invariant",
      "details": {
        "text": "Invalid resource reference in Composition"
      },
      "diagnostics": "Composition contains data for both the CKM and BH tracks. Only data for one track can be provided.
    }
  ]
}

```

##### Duplicate Data Submission

**Scenario**: Attempting to submit data that was already reported in a previous submission.

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
            "code": "duplicate",
            "display": "Duplicate submission"
          }
        ],
        "text": "Data submission is a duplicate of a previously submitted report for this reporting period."
      }
    }
  ]
}

```

##### Incomplete Data Submission

**Scenario**: Attempting to submit data that was already reported in a previous submission.

```
HTTP/1.1 200 OK
Content-Type: application/fhir+json

```

```
{
  "resourceType": "Parameters",
  "parameter": [
    {
      "name": "result",
      "valueCodeableConcept": {
        "coding": [
          {
            "system": "https://globalalliantinc.com/access/CodeSystem/ACCESSReportDataResultCS",
            "code": "incomplete-data",
            "display": "Data submission is missing required observations or measurements for the specified track (see the 'issues' parameter for specific issues and details)."
          }
        ],
        "text": "PHQ-9 questionnaire response has more than two missing answers."
      }
    },
    {
      "resourceType": "OperationOutcome",
      "issue": [
        {
        "severity": "warning",
        "code": "incomplete",
        "expression": "Composition.section.where(title = 'BH').section.where(title = 'PHQ-9')"
        }
      ]
    }
  ]
}

```

**Note**: These scenarios represent a mix of business logic results (HTTP 200 with specific result codes) and technical validation errors (HTTP 400). Always check the HTTP status code first to determine the type of response.

