# ACCESS Alignment API Capability Statement - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Alignment API Capability Statement**

## CapabilityStatement: ACCESS Alignment API Capability Statement 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CapabilityStatement/ACCESSAlignmentAPICapabilityStatement | *Version*:0.9.0 |
| Active as of 2026-01-23 | *Computable Name*:ACCESSAlignmentAPICapabilityStatement |

 
Describes the expected capabilities of systems implementing the ACCESS Alignment API for aligning patients to ACCESS participants. 

 [Raw OpenAPI-Swagger Definition file](ACCESSAlignmentAPICapabilityStatement.openapi.json) | [Download](ACCESSAlignmentAPICapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ACCESSAlignmentAPICapabilityStatement",
  "url" : "https://globalalliantinc.com/access/CapabilityStatement/ACCESSAlignmentAPICapabilityStatement",
  "version" : "0.9.0",
  "name" : "ACCESSAlignmentAPICapabilityStatement",
  "title" : "ACCESS Alignment API Capability Statement",
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
  "description" : "Describes the expected capabilities of systems implementing the ACCESS Alignment API for aligning patients to ACCESS participants.",
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
  "implementationGuide" : ["https://globalalliantinc.com/access/ImplementationGuide/cms.fhir.us.access"],
  "rest" : [{
    "mode" : "server",
    "documentation" : "The ACCESS Alignment API supports aligning patients to ACCESS participants for specific tracks (eCKM, CKM, MSK, BH).",
    "security" : {
      "cors" : true,
      "description" : "Implementations SHALL use TLS 1.3 and implement OAuth 2.0 Client Credentials flow for authentication. MBI and other PHI must be protected according to HIPAA requirements."
    },
    "resource" : [{
      "type" : "Patient",
      "documentation" : "Patient resource for ACCESS alignment operations",
      "operation" : [{
        "name" : "align",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/Align|0.9.0",
        "documentation" : "Align a patient to an ACCESS participant for a specific track. Requires at least one Condition resource. Enforces 3-month lock-in period. Supports provider switching with switchConsentAttestation parameter after lock-in expires. Automatically creates notification subscriptions upon successful alignment. Returns alignment status from ACCESSAlignmentResultVS: aligned, aligned-switch-approved, not-aligned-control-group, not-aligned-already-aligned, not-aligned-not-medicare, not-aligned-services, or not-aligned-diagnoses. Implements asynchronous processing with HTTP 202 Accepted response containing Content-Location header for status polling."
      },
      {
        "name" : "submission-status",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/SubmissionStatus|0.9.0",
        "documentation" : "Poll the status of a previously submitted alignment request. Returns HTTP 202 while processing or HTTP 200 with result when complete."
      }]
    }]
  }]
}

```
