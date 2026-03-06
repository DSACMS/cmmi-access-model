# ACCESS Unalignment Reason Codes - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Unalignment Reason Codes**

## CodeSystem: ACCESS Unalignment Reason Codes 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentReasonCS | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSUnalignmentReasonCS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This codesystem defines the codes indicating the reason for the requested unalignment. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSUnalignmentReasonCS",
  "url" : "https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentReasonCS",
  "version" : "0.9.0",
  "name" : "ACCESSUnalignmentReasonCS",
  "title" : "ACCESS Unalignment Reason Codes",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-06T16:03:26-05:00",
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
  "description" : "This codesystem defines the codes indicating the reason for the requested unalignment.",
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
  "count" : 4,
  "concept" : [{
    "code" : "geographic-relocated",
    "display" : "Geographic relocated",
    "definition" : "Patient has relocated outside of the geographic area in which the aligned participant is licensed to provide services."
  },
  {
    "code" : "loss-of-contact",
    "display" : "Loss of contact",
    "definition" : "Despite good faith efforts, defined as making three or more outreach attempts over 30 or more days, contact with the patient has been lost and therefore no longer able to engage with them."
  },
  {
    "code" : "no-longer-clinically-eligible",
    "display" : "No longer clinically eligible",
    "definition" : "Patient's conditions have changed such that they are no longer eligible for the ACCESS Model."
  },
  {
    "code" : "patient-initiated",
    "display" : "Patient initiated",
    "definition" : "Patient no longer wants to participate in the ACCESS Model after the initial 90-day lock-in period."
  }]
}

```
