# ACCESS Alignment API Capability Statement - CMS ACCESS Model API v0.9.6

## CapabilityStatement: ACCESS Alignment API Capability Statement 

 
Describes the expected capabilities of systems implementing the ACCESS Alignment API for aligning patients to ACCESS participants. 

 [Raw OpenAPI-Swagger Definition file](../ACCESSAlignmentAPICapabilityStatement.openapi.json) | [Download](../ACCESSAlignmentAPICapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ACCESSAlignmentAPICapabilityStatement",
  "url" : "https://dsacms.github.io/cmmi-access-model/CapabilityStatement/ACCESSAlignmentAPICapabilityStatement",
  "version" : "0.9.6",
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
  "implementationGuide" : ["https://dsacms.github.io/cmmi-access-model/ImplementationGuide/cms.fhir.us.cmmi-access-model"],
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
        "definition" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/Align|0.9.6",
        "documentation" : "Align a patient to an ACCESS participant for a specific track. This operation requires the `entityId` query parameter (participant identifier) and a Parameters body including other required inputs. Requires at least one Condition resource. Enforces 90-day lock-in period. Supports provider switching with switchConsentAttestation parameter after lock-in expires. Automatically creates notification subscriptions upon successful alignment. Returns alignment status from ACCESSAlignmentResultVS: aligned, aligned-switch-approved, not-aligned-control-group, not-aligned-already-aligned, not-aligned-not-medicare, not-aligned-services, or not-aligned-diagnoses. Implements asynchronous processing with HTTP 202 Accepted response containing Content-Location header for status polling."
      },
      {
        "name" : "submission-status",
        "definition" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/SubmissionStatus|0.9.6",
        "documentation" : "Poll the status of a previously submitted alignment request. Returns HTTP 202 while processing or HTTP 200 with result when complete."
      }]
    }]
  }]
}

```
