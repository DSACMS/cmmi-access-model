# Submission Status - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Submission Status**

## OperationDefinition: Submission Status 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/OperationDefinition/SubmissionStatus | *Version*:0.7.0 |
| Active as of 2026-02-26 | *Computable Name*:SubmissionStatus |

 
The **$submission-status** operation allows the client to check the status of any asynchronous ACCESS operation submission. This is a shared operation used by all ACCESS APIs. The specific result codes returned depend on which operation created the submission: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md) for $check-eligibility, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md) for $align, and [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md) for $unalign. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "SubmissionStatus",
  "url" : "https://globalalliantinc.com/access/OperationDefinition/SubmissionStatus",
  "version" : "0.7.0",
  "name" : "SubmissionStatus",
  "title" : "Submission Status",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-02-26T23:16:42-05:00",
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
  "description" : "The **$submission-status** operation allows the client to check the status of any asynchronous ACCESS operation submission. This is a shared operation used by all ACCESS APIs. The specific result codes returned depend on which operation created the submission: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.html) for $check-eligibility, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.html) for $align, and [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.html) for $unalign.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "submission-status",
  "comment" : "The submissionID of the original request is provided in the $submission-status URL: GET https://[base]/access/Patient/$submission-status/sub-12345",
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "result",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "documentation" : "The result of the asynchronous operation. The specific codes returned depend on the original operation type: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.html) for $check-eligibility submissions, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.html) for $align submissions, and [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.html) for $unalign submissions. When processing is complete (HTTP 200), this parameter contains the result code and descriptive text. When still processing (HTTP 202), no body is returned.",
    "type" : "CodeableConcept"
  }]
}

```
