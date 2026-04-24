# ACCESS Report Type Codes - CMS ACCESS Model API v0.9.6

## CodeSystem: ACCESS Report Type Codes 

 
This codesystem defines the codes indicating the type of the data report submission. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSReportTypeVS](ValueSet-ACCESSReportTypeVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSReportTypeCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportTypeCS",
  "version" : "0.9.6",
  "name" : "ACCESSReportTypeCS",
  "title" : "ACCESS Report Type Codes",
  "status" : "draft",
  "experimental" : false,
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
  "description" : "This codesystem defines the codes indicating the type of the data report submission.",
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
  "count" : 3,
  "concept" : [{
    "code" : "baseline",
    "display" : "Baseline Data Report",
    "definition" : "Reports the baseline Outcome-Aligned Payment (OAP) data for the patient. Valid baseline OAP Measures must be submitted within 60 days of alignment."
  },
  {
    "code" : "quarterly",
    "display" : "Quarterly Data Report",
    "definition" : "Reports quarterly Outcome-Aligned Payment (OAP) data for the patient. Valid quarterly OAP Measures must be submitted 70 to 110 days after the prior OAP \nsubmission"
  },
  {
    "code" : "end-of-period",
    "display" : "End of Period Data Report",
    "definition" : "Reports end of period Outcome-Aligned Payment (OAP) data for the patient. Valid end-of-period measures must be submitted no later than 425 days from the date of alignment \n(365 days plus an additional 60 days) and may be submitted up to 90 days prior to Day 365 for the \neCKM and CKM tracks or up to 180 days prior to Day 365 for the BH and MSK tracks (“early success reporting”)."
  }]
}

```
