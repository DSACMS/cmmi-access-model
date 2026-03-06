# ACCESS Unalignment API Capability Statement - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Unalignment API Capability Statement**

## CapabilityStatement: ACCESS Unalignment API Capability Statement 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CapabilityStatement/ACCESSUnalignmentAPICapabilityStatement | *Version*:0.9.0 |
| Active as of 2026-01-23 | *Computable Name*:ACCESSUnalignmentAPICapabilityStatement |

 
Describes the expected capabilities of systems implementing the ACCESS Unalignment API for removing patient alignments from ACCESS participants. 

 [Raw OpenAPI-Swagger Definition file](ACCESSUnalignmentAPICapabilityStatement.openapi.json) | [Download](ACCESSUnalignmentAPICapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ACCESSUnalignmentAPICapabilityStatement",
  "url" : "https://globalalliantinc.com/access/CapabilityStatement/ACCESSUnalignmentAPICapabilityStatement",
  "version" : "0.9.0",
  "name" : "ACCESSUnalignmentAPICapabilityStatement",
  "title" : "ACCESS Unalignment API Capability Statement",
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
  "description" : "Describes the expected capabilities of systems implementing the ACCESS Unalignment API for removing patient alignments from ACCESS participants.",
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
    "documentation" : "The ACCESS Unalignment API supports the voluntary removal of patient alignments from ACCESS participants and tracks.",
    "security" : {
      "cors" : true,
      "description" : "Implementations SHALL use TLS 1.3 and implement OAuth 2.0 Client Credentials flow for authentication. MBI and other PHI must be protected according to HIPAA requirements."
    },
    "resource" : [{
      "type" : "Patient",
      "documentation" : "Patient resource for ACCESS unalignment operations",
      "operation" : [{
        "name" : "unalign",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/Unalign|0.9.0",
        "documentation" : "Remove a patient's alignment from an ACCESS participant. Requires mandatory reason parameter from ACCESSUnalignmentReasonVS (geographic-relocated or loss-of-contact). Automatically cancels active subscriptions and sends unalignment notifications upon successful unalignment. Returns unalignment status from ACCESSUnalignmentResultVS: unaligned or unalignment-pending. Implements asynchronous processing with HTTP 202 Accepted response containing Content-Location header for status polling."
      },
      {
        "name" : "submission-status",
        "definition" : "https://globalalliantinc.com/access/OperationDefinition/SubmissionStatus|0.9.0",
        "documentation" : "Poll the status of a previously submitted unalignment request. Returns HTTP 202 while processing or HTTP 200 with result when complete."
      }]
    }]
  }]
}

```
