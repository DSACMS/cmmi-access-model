# ACCESS Event Types - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Event Types 

 
This codesystem defines codes for the types of events that trigger subscription notifications in the ACCESS Model. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSEventTypeVS](ValueSet-ACCESSEventTypeVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSEventTypeCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEventTypeCS",
  "version" : "0.9.8",
  "name" : "ACCESSEventTypeCS",
  "title" : "ACCESS Event Types",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-05-20T09:30:43-04:00",
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
  "description" : "This codesystem defines codes for the types of events that trigger subscription notifications in the ACCESS Model.",
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
    "code" : "participant-lock-ending",
    "display" : "Participant Lock-In Period Ending",
    "definition" : "The 90-day participant lock-in period is ending soon, allowing the patient to switch to a different participant if desired."
  },
  {
    "code" : "control-group-ending",
    "display" : "Control Group Period Ending",
    "definition" : "The 12-month control group assignment period is ending soon, allowing the patient to be reconsidered for alignment in the ACCESS Model."
  },
  {
    "code" : "alignment-renewal",
    "display" : "Alignment Renewal Due",
    "definition" : "The initial alignment period is ending and renewal action is required to continue services under the ACCESS Model."
  },
  {
    "code" : "baseline-reporting-window",
    "display" : "Baseline Reporting Due",
    "definition" : "The baseline data report is due soon. If baseline reporting is not received within 60 days of alignment, the patient will be unaligned."
  },
  {
    "code" : "quarterly-reporting-window",
    "display" : "Quarterly Reporting Due",
    "definition" : "The quarterly data report is due soon. Quarterly reporting must be submitted 70 to 110 days after the prior data submission."
  },
  {
    "code" : "eoy-reporting-window",
    "display" : "End-of-Year Reporting Due",
    "definition" : "The end-of-year data report is due soon. End-of-year reporting must be submitted no later than 425 days from the date of alignment (365 days plus an additional 60 days)."
  },
  {
    "code" : "unalignment",
    "display" : "Unalignment Notice",
    "definition" : "The patient has been unaligned from the ACCESS Model due to a change in eligibility status."
  }]
}

```
