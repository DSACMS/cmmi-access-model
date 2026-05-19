# ACCESS Report Data Result Codes - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Report Data Result Codes 

 
This codesystem defines the codes indicating the result of a data reporting submission. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSReportDataResultCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
  "version" : "0.9.8",
  "name" : "ACCESSReportDataResultCS",
  "title" : "ACCESS Report Data Result Codes",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-05-18T15:59:44-04:00",
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
  "description" : "This codesystem defines the codes indicating the result of a data reporting submission.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "copyright" : "Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS).",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 7,
  "concept" : [{
    "code" : "success",
    "display" : "Success",
    "definition" : "The data reporting submission was successful."
  },
  {
    "code" : "validation-error",
    "display" : "Validation error",
    "definition" : "Data submission failed validation (see the 'issues' parameter for specific errors and details)."
  },
  {
    "code" : "duplicate",
    "display" : "Duplicate submission",
    "definition" : "Data submission is a duplicate of a previously submitted report for this reporting period."
  },
  {
    "code" : "patient-not-aligned",
    "display" : "Patient not aligned",
    "definition" : "Patient is not currently aligned to this participant in the specified track. Data reporting is only accepted for aligned patients."
  },
  {
    "code" : "reporting-period-closed",
    "display" : "Reporting period closed",
    "definition" : "The reporting period for this data has closed and no further submissions are accepted."
  },
  {
    "code" : "incomplete-data",
    "display" : "Incomplete data",
    "definition" : "Data submission is missing required observations or measurements for the specified track (see the 'issues' parameter for specific issues and details)."
  },
  {
    "code" : "incorrect-track",
    "display" : "Incorrect track",
    "definition" : "The submitted data does not match the track the patient is aligned to."
  }]
}

```
