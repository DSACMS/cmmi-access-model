# Submit Data Report - CMS ACCESS Model API v0.9.12

## OperationDefinition: Submit Data Report 

 
The **$report-data** operation allows a participant to submit data reporting information for the ACCESS model. 

### Handy References

#### Operation Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Data Reporting API.

| | |
| :--- | :--- |
| [ACCESS Data Reporting Bundle](StructureDefinition-access-data-reporting-bundle.md) | Contains the resources need to report patient data to the ACCESS Model |
| [ACCESS Data Reporting Composition](StructureDefinition-access-data-reporting-composition.md) | Defines constraints that represent common clinical concepts for ACCESS Model Data Reporting submissions. Includes optional additional-information section for supplementary resources |
| [ACCESS Report Data Request Parameters](StructureDefinition-access-report-data-in.md) | Input parameters for the $report-data operation |
| [ACCESS Report Data Response Parameters](StructureDefinition-access-report-data-out.md) | Output parameters for the $report-data operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Data Reporting API.

| | |
| :--- | :--- |
| [ACCESS Report Type Value Set](ValueSet-ACCESSReportTypeVS.md) | Value set including all report type codes (e.g., baseline, end-of-quarter) |
| [ACCESS Report Data Result Value Set](ValueSet-ACCESSReportDataResultVS.md) | Value set including all data reporting submission result codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Data Reporting API.

| | |
| :--- | :--- |
| [ACCESS Report Type Code System](CodeSystem-ACCESSReportTypeCS.md) | Codes indicating the type of report (e.g., baseline, end-of-quarter) |
| [ACCESS Report Data Result Code System](CodeSystem-ACCESSReportDataResultCS.md) | Codes indicating the result of a data reporting submission |
| [ACCESS Report Data Composition Section Code System](CodeSystem-ACCESSReportDataCompositionSectionCS.md) | Additional codes for composition sections used in ACCESS Model data reporting when LOINC codes are not available |

#### Examples

These are example instances demonstrating the use of the Data Reporting API.

| | |
| :--- | :--- |
| [Report Data Request Example](Parameters-ReportDataRequestExample.md) | Example request for submitting data report including participant ID, track, and complete data bundle |
| [Report Data Response - Success](Parameters-ReportDataResponseSuccessExample.md) | Example successful response indicating data submission was processed and recorded |
| [Report Data Response - Duplicate](Parameters-ReportDataResponseDuplicateExample.md) | Example response indicating data submission is a duplicate |
| [Report Data Response - Patient Not Aligned](Parameters-ReportDataResponsePatientNotAlignedExample.md) | Example response indicating patient is not currently aligned |
| [Report Data Response - Reporting Period Closed](Parameters-ReportDataResponseReportingPeriodClosedExample.md) | Example response indicating the reporting period has closed |
| [Report Data Response - Incomplete Data](Parameters-ReportDataResponseIncompleteDataExample.md) | Example response indicating data submission is missing required elements |
| [Report Data Response - Incorrect Track](Parameters-ReportDataResponseIncorrectTrackExample.md) | Example response indicating data doesn't match patient's aligned track |
| [Submission Status OperationOutcome Example](OperationOutcome-SubmissionStatusOperationOutcomeExample.md) | Example OperationOutcome showing detailed information about an incomplete data submission with severity, code, details text, and FHIRPath expressions |

##### (Early) Cardio-Kidney-Metabolic (CKM/eCKM) Tracks

| | |
| :--- | :--- |
| [eCKM Report Data Request Example](Parameters-eCKMReportDataRequestExample.md) | Example request Parameters for submitting a eCKM track data report |
| [eCKM Report Data Bundle Example](Bundle-eCKMReportDataBundleExample.md) | Example document bundle containing composition, patient, and clinical observations for the eCKM track |
| [eCKM Report Data Composition Example](Composition-eCKMReportDataCompositionExample.md) | Example composition organizing clinical data for the eCKM track reporting |
| [CKM Report Data Request Example](Parameters-CKMReportDataRequestExample.md) | Example request Parameters for submitting a CKM track data report |
| [CKM Report Data Bundle Example](Bundle-CKMReportDataBundleExample.md) | Example document bundle containing composition, patient, and clinical observations for the CKM track |
| [CKM Report Data Composition Example](Composition-CKMReportDataCompositionExample.md) | Example composition organizing clinical data for the CKM track reporting |
| [Blood Pressure Example](Observation-BloodPressureExample.md) | Example blood pressure observation with systolic and diastolic components for the CKM/eCKM track |
| [Blood Pressure Example 2](Observation-BloodPressureExample2.md) | Example blood pressure observation with systolic and diastolic components for the CKM/eCKM track |
| [Blood Pressure Example 3](Observation-BloodPressureExample3.md) | Example blood pressure observation with systolic and diastolic components for the CKM/eCKM track |
| [Body Weight Example](Observation-BodyWeightExample.md) | Example body weight vital sign observation for the CKM/eCKM track |
| [BMI Example](Observation-BMIExample.md) | Example body mass index vital sign observation for the CKM/eCKM track |
| [Waist Circumference Example](Observation-WaistCircumferenceExample.md) | Example waist circumference vital sign observation for the CKM/eCKM track |
| [HbA1c Example](Observation-HbA1cExample.md) | Example hemoglobin A1c laboratory observation for the CKM/eCKM track |
| [eGFR Example](Observation-eGFRExample.md) | Example estimated glomerular filtration rate laboratory observation for the CKM track |
| [uACR Example](Observation-uACRExample.md) | Example urine albumin-creatinine ratio laboratory observation for the CKM track |
| [LDL-C Cholesterol Example](Observation-LDLCholesterolExample.md) | Example LDL-C observation for the CKM/eCKM track |
| [HDL Cholesterol Example](Observation-HDLCholesterolExample.md) | Example HDL observation for the CKM/eCKM track |
| [Total Cholesterol Example](Observation-TotalCholesterolExample.md) | Example total cholesterol observation for the CKM/eCKM track |
| [Triglycerides Example](Observation-TriglyceridesExample.md) | Example triglycerides observation for the CKM/eCKM track |
| [Lipid Panel DiagnosticReport Example](DiagnosticReport-LipidPanelDiagnosticReportExample.md) | Example lipid panel diagnostic report including total cholesterol, LDL, HDL, and triglycerides for the CKM/eCKM track |

##### Musculoskeletal (MSK) Track

| | |
| :--- | :--- |
| [MSK Report Data Request Example](Parameters-MSKReportDataRequestExample.md) | Example request Parameters for submitting a MSK track data report |
| [MSK Report Data Bundle Example](Bundle-MSKReportDataBundleExample.md) | Example document bundle containing composition, patient, and patient-reported outcomes for the MSK track |
| [MSK Report Data Composition Example](Composition-MSKReportDataCompositionExample.md) | Example composition organizing clinical data for the MSK track reporting |
| [PROMIS Physical Function Short Form 6b Example](QuestionnaireResponse-PROMISPhysicalFunctionExample.md) | Example PROMIS Physical Function (PF) Short Form 6b QuestionnaireResponse for the MSK track |
| [PROMIS Physical Function CAT Example](QuestionnaireResponse-PROMISPhysicalFunctionCATExample.md) | Example PROMIS Physical Function CAT QuestionnaireResponse for the MSK track |
| [PROMIS Pain Interference Short Form 6a Example](QuestionnaireResponse-PROMISPainInterferenceSFExample.md) | Example PROMIS Pain Interference (PI) Short Form 6a QuestionnaireResponse for the MSK track |
| [PROMIS Pain Interference CAT Example](QuestionnaireResponse-PROMISPainInterferenceCATExample.md) | Example PROMIS Pain Interference CAT QuestionnaireResponse for the MSK track |
| [Oswestry Disability Index Example](QuestionnaireResponse-OswestryDisabilityIndexExample.md) | Example Oswestry Disability Index (ODI) QuestionnaireResponse for the MSK track |
| [Neck Disability Index Example](QuestionnaireResponse-NeckDisabilityIndexExample.md) | Example Neck Disability Index (NDI) QuestionnaireResponse for the MSK track |
| [QuickDASH Example](QuestionnaireResponse-QuickDASHExample.md) | Example Quick Disabilities of the Arm, Shoulder and Hand (QuickDASH) QuestionnaireResponse for the MSK track |
| [Musculoskeletal PGIC Example](QuestionnaireResponse-MSKPGICExample.md) | Example Patient Global Impression of Change QuestionnaireResponse for the MSK track |
| [KOOS JR Example](QuestionnaireResponse-KOOSJRExample.md) | Example KOOS JR QuestionnaireResponse for the MSK track |
| [HOOS JR Example](QuestionnaireResponse-HOOSJRExample.md) | Example HOOS JR QuestionnaireResponse for the MSK track |
| [PROMIS Pain Intensity NRS Example](QuestionnaireResponse-PROMISNRSExample.md) | Example PROMIS Pain Intensity NRS QuestionnaireResponse for the MSK track |

##### Behaviorial Health (BH) Track

| | |
| :--- | :--- |
| [BH Report Data Request Example](Parameters-BHReportDataRequestExample.md) | Example request Parameters for submitting a BH track data report |
| [BH Report Data Bundle Example](Bundle-BHReportDataBundleExample.md) | Example document bundle containing composition, patient, and behavioral health assessments for BH track |
| [BH Report Data Composition Example](Composition-BHReportDataCompositionExample.md) | Example composition organizing clinical data for BH track reporting |
| [Depression PHQ-9 Example](QuestionnaireResponse-DepressionPHQ9Example.md) | Example PHQ-9 QuestionnaireResponse for the BH track |
| [Anxiety GAD-7 Example](QuestionnaireResponse-AnxietyGAD7Example.md) | Example GAD-7 QuestionnaireResponse for the BH track |
| [WHODAS 2.0 Example](QuestionnaireResponse-WHODASExample.md) | Example WHODAS 2.0 QuestionnaireResponse for the BH track |
| [Behavioral Health PGIC Example](QuestionnaireResponse-BHPGICExample.md) | Example Behavioral Health PGIC QuestionnaireResponse for the BH track |

#### Example Questionnaires

These questionnaire examples provide additional information to implementers and a better understanding of how the QuestionnaireResponse profiles interact with their associated questionnaires, particularly linkIds between the questionnaire items and the corresponding individual responses.

The Data Reporting API leverages USCoreQuestionnaireResponse profile, which requires a canonical URL for the underlying questionnaire associated with the questionnaire response. If the FHIR questionnaire is publicly available, it can be referenced through its canonical URL from the questionnaire response.

Otherwise, the questionnaire should be included in the ACCESS Data Reporting Bundle and referenced from the matching questionnaire response.

##### Musculoskeletal (MSK) Track

| | |
| :--- | :--- |
| [PROMIS Physical Function Short Form 6b Questionnaire Example](Questionnaire-PROMISPhysicalFunctionQuestionnaireExample.md) | Example PROMIS Physical Function (PF) Short Form 6b Questionnaire |
| [PROMIS Physical Function CAT Questionnaire Example](Questionnaire-PROMISPhysicalFunctionCATQuestionnaireExample.md) | Example PROMIS Physical Function CAT Questionnaire |
| [PROMIS Pain Interference Short Form 6a Questionnaire Example](Questionnaire-PROMISPainInterferenceSFQuestionnaireExample.md) | Example PROMIS Pain Interference (PI) Short Form 6a Questionnaire |
| [PROMIS Pain Interference CAT Questionnaire Example](Questionnaire-PROMISPainInterferenceCATQuestionnaireExample.md) | Example PROMIS Pain Interference CAT Questionnaire |
| [Oswestry Disability Index Questionnaire Example](Questionnaire-OswestryDisabilityIndexQuestionnaireExample.md) | Example Oswestry Disability Index (ODI) Questionnaire |
| [Neck Disability Index Questionnaire Example](Questionnaire-NeckDisabilityIndexQuestionnaireExample.md) | Example Neck Disability Index (NDI) Questionnaire |
| [QuickDASH Questionnaire Example](Questionnaire-QuickDASHQuestionnaireExample.md) | Example Quick Disabilities of the Arm, Shoulder and Hand (QuickDASH) Questionnaire |
| [MSK PGIC Questionnaire Example](Questionnaire-MSKPGICQuestionnaireExample.md) | Example Patient Global Impression of Change Questionnaire |
| [KOOS JR Questionnaire Example](Questionnaire-KOOSJRQuestionnaireExample.md) | Example KOOS JR Questionnaire |
| [HOOS JR Questionnaire Example](Questionnaire-HOOSJRQuestionnaireExample.md) | Example HOOS JR Questionnaire |
| [PROMIS Pain Intensity NRS Questionnaire Example](Questionnaire-PROMISNRSQuestionnaireExample.md) | Example PROMIS Pain Intensity NRS Questionnaire |

##### Behaviorial Health (BH) Track

| | |
| :--- | :--- |
| [PHQ-9 Questionnaire Example](Questionnaire-PHQ9QuestionnaireExample.md) | Example PHQ-9 Questionnaire |
| [GAD-7 Questionnaire Example](Questionnaire-GAD7QuestionnaireExample.md) | Example GAD-7 Questionnaire |
| [WHODAS 2.0 Questionnaire Example](Questionnaire-WHODASQuestionnaireExample.md) | Example WHODAS 2.0 Questionnaire |
| [BH PGIC Questionnaire Example](Questionnaire-BHPGICQuestionnaireExample.md) | Example Behavioral Health PGIC Questionnaire |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ReportData",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/ReportData",
  "version" : "0.9.12",
  "name" : "ReportData",
  "title" : "Submit Data Report",
  "status" : "active",
  "kind" : "operation",
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
  "description" : "The **$report-data** operation allows a participant to submit data reporting information for the ACCESS model.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "report-data",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in|0.9.12",
  "parameter" : [{
    "name" : "participantID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS participant identifier. Must follow the pattern ACCES##### where ##### represents exactly 5 digits (e.g., ACCES00001, ACCES12345).",
    "type" : "Identifier"
  },
  {
    "name" : "payerID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Payer ID for the patient.",
    "type" : "Identifier"
  },
  {
    "name" : "track",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS track for the data submission.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.12"
    }
  },
  {
    "name" : "reportType",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Type of data report.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSReportTypeVS|0.9.12"
    }
  },
  {
    "name" : "dataBundle",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "documentation" : "Data bundle to report.",
    "type" : "Bundle"
  }]
}

```
