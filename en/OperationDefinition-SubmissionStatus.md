# Submission Status - CMS ACCESS Model API v0.9.6

## OperationDefinition: Submission Status 

 
The **$submission-status** operation allows the client to check the status of any asynchronous ACCESS operation submission. This is a shared operation used by all ACCESS APIs. The specific result codes returned depend on which operation created the submission: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md) for $check-eligibility, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md) for $align, [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md) for $unalign, and [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.md) for $report-data. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "SubmissionStatus",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/SubmissionStatus",
  "version" : "0.9.6",
  "name" : "SubmissionStatus",
  "title" : "Submission Status",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-04-24T13:45:33-04:00",
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
  "description" : "The **$submission-status** operation allows the client to check the status of any asynchronous ACCESS operation submission. This is a shared operation used by all ACCESS APIs. The specific result codes returned depend on which operation created the submission: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.html) for $check-eligibility, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.html) for $align, [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.html) for $unalign, and [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.html) for $report-data.",
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
    "min" : 1,
    "max" : "1",
    "documentation" : "The result of the asynchronous operation. The specific codes returned depend on the original operation type: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.html) for $check-eligibility submissions, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.html) for $align submissions, [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.html) for $unalign submissions, and [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.html) for $report-data submissions. When processing is complete (HTTP 200), this parameter contains the result code and descriptive text. When still processing (HTTP 202), no body is returned.",
    "type" : "CodeableConcept"
  },
  {
    "name" : "issues",
    "use" : "out",
    "min" : 0,
    "max" : "1",
    "documentation" : "This parameter **MAY** be included to provide more detail about the context of the result code.",
    "type" : "OperationOutcome"
  }]
}

```
