# ACCESS Eligibility API Capability Statement - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Eligibility API Capability Statement**

## CapabilityStatement: ACCESS Eligibility API Capability Statement 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CapabilityStatement/ACCESSEligibilityAPICapabilityStatement | *Version*:0.7.0 |
| Active as of 2026-01-23 | *Computable Name*:ACCESSEligibilityAPICapabilityStatement |

 
Describes the expected capabilities of systems implementing the ACCESS Eligibility API for checking patient eligibility for the ACCESS Model. 

 [Raw OpenAPI-Swagger Definition file](ACCESSEligibilityAPICapabilityStatement.openapi.json) | [Download](ACCESSEligibilityAPICapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ACCESSEligibilityAPICapabilityStatement",
  "url" : "https://globalalliantinc.com/access/CapabilityStatement/ACCESSEligibilityAPICapabilityStatement",
  "version" : "0.7.0",
  "name" : "ACCESSEligibilityAPICapabilityStatement",
  "title" : "ACCESS Eligibility API Capability Statement",
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
  "description" : "Describes the expected capabilities of systems implementing the ACCESS Eligibility API for checking patient eligibility for the ACCESS Model.",
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
    "documentation" : "The ACCESS Eligibility API supports checking patient eligibility for the ACCESS Model.",
    "security" : {
      "cors" : true,
      "description" : "Implementations SHALL use TLS 1.3 and implement OAuth 2.0 Client Credentials flow for authentication. All PHI including MBI must be protected according to HIPAA requirements."
    },
    "resource" : [{
      "type" : "Patient",
      "documentation" : "Patient resource for ACCESS eligibility operations",
      "operation" : [{
        "name" : "check-eligibility",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/CheckEligibility|0.7.0",
        "documentation" : "Check if a patient is eligible for the ACCESS Model. Returns eligibility status from ACCESSEligibilityResultVS: eligible, not-eligible-not-medicare, not-eligible-services, not-eligible-diagnoses, not-eligible-control-group, or not-eligible-already-aligned. Implements asynchronous processing with HTTP 202 Accepted response containing Content-Location header for status polling."
      },
      {
        "name" : "submission-status",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/SubmissionStatus|0.7.0",
        "documentation" : "Poll the status of a previously submitted eligibility check request. Returns HTTP 202 while processing or HTTP 200 with result when complete."
      }]
    }]
  }]
}

```
