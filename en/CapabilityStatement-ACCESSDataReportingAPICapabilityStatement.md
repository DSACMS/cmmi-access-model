# ACCESS Data Reporting API Capability Statement - CMS ACCESS Model API v0.9.12

## CapabilityStatement: ACCESS Data Reporting API Capability Statement 

 
Describes the expected capabilities of systems implementing the ACCESS Data Reporting API for submitting clinical data for aligned patients. 

 [Raw OpenAPI-Swagger Definition file](../ACCESSDataReportingAPICapabilityStatement.openapi.json) | [Download](../ACCESSDataReportingAPICapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ACCESSDataReportingAPICapabilityStatement",
  "url" : "https://dsacms.github.io/cmmi-access-model/CapabilityStatement/ACCESSDataReportingAPICapabilityStatement",
  "version" : "0.9.12",
  "name" : "ACCESSDataReportingAPICapabilityStatement",
  "title" : "ACCESS Data Reporting API Capability Statement",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-23",
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
  "description" : "Describes the expected capabilities of systems implementing the ACCESS Data Reporting API for submitting clinical data for aligned patients.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["json", "xml"],
  "implementationGuide" : ["https://dsacms.github.io/cmmi-access-model/ImplementationGuide/cms.fhir.us.cmmi-access-model"],
  "rest" : [{
    "mode" : "server",
    "documentation" : "Track-Specific Data Requirements:\n\n**CKM (Cardio-Kidney-Metabolic) Track:**\n- Blood Pressure (BP using LOINC 85354-9)\n- Lipid panel (LOINC 18262-6)\n- Body weight (LOINC 29463-7)\n- BMI (LOINC 39156-3)\n- Waist circumference (LOINC 8280-0)\n- HbA1c (LOINC 4548-4)\n- eGFR (LOINC 98979-8)\n- uACR (LOINC 14959-1)\n\n**eCKM (Early Cardio-Kidney-Metabolic) Track:**\n- Blood Pressure (BP using LOINC 85354-9)\n- Lipid panel (LOINC 18262-6)\n- Body weight (LOINC 29463-7)\n- BMI (LOINC 39156-3)\n- Waist circumference (LOINC 8280-0)\n- HbA1c (LOINC 4548-4)\n\n**MSK (Musculoskeletal) Track:**\n- PROMIS Physical Function Short Form 6b (LOINC 76804-4) or PROMIS Physical Function v2.0 Computer Adaptive Test (LOINC 91722-9)\n- PROMIS Pain Interference Short Form 6a (LOINC 90973-9) or PROMIS Pain Interference v1.1 Computer Adaptive Test (LOINC 89923-7)\n- Oswestry Disability Index (LOINC 97908-8)\n- Neck Disability Index (LOINC 82226-2)\n- Quick Disabilities of the Arm, Shoulder and Hand/QuickDASH (ACCESSReportDataCompositionSection QuickDASH)\n- Patient's Global Impression of Change (ACCESSReportDataCompositionSection PGIC)\n- Knee Injury and Osteoarthritis Outcome Score for Joint Replacement/KOOS JR (LOINC 82324-5)\n- Hip Dysfunction and Osteoarthritis Outcome Score for Joint Replacement/HOOS JR (LOINC 82316-1)\n- PROMIS Pain Intensity Numeric Rating Scale v1.0 (LOINC 72514-3)\n\n**BH (Behavioral Health) Track:**\n- Depression screening/PHQ-9 (LOINC 44261-6)\n- Anxiety screening/GAD-7 (LOINC 69737-5)\n- Functioning and disability/WHODAS 2.0 (ACCESSReportDataCompositionSection WHODAS)\n- Patient's Global Impression of Change (ACCESSReportDataCompositionSection PGIC)",
    "security" : {
      "cors" : true,
      "description" : "Implementations SHALL use TLS 1.3 and implement OAuth 2.0 Client Credentials flow for authentication. All clinical data and MBI must be protected according to HIPAA requirements."
    },
    "resource" : [{
      "type" : "Patient",
      "documentation" : "Patient resource for ACCESS data reporting operations",
      "operation" : [{
        "name" : "report-data",
        "definition" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/ReportData|0.9.12",
        "documentation" : "Report clinical data for an aligned patient. This operation requires the `entityId` query parameter (participant identifier) and a Parameters body including other required inputs. Requires document bundle conforming to ACCESSDataReportingBundle profile with Composition as first entry and all referenced resources included. Validates track-specific data requirements. Supports multiple submissions per reporting period. Returns submission status from ACCESSReportDataResultVS: success, duplicate, patient-not-aligned, reporting-period-closed, incomplete-data, or incorrect-track. Implements asynchronous processing with HTTP 202 Accepted response containing Content-Location header for status polling."
      },
      {
        "name" : "submission-status",
        "definition" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/SubmissionStatus|0.9.12",
        "documentation" : "Poll the status of a previously submitted data report. Returns HTTP 202 while processing or HTTP 200 with result when complete. May include OperationOutcome with validation errors if submission failed."
      }]
    }]
  }]
}

```
