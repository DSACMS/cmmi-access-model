# ACCESS Unalignment Request Result Codes - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Unalignment Request Result Codes**

## CodeSystem: ACCESS Unalignment Request Result Codes 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentResultCS | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSUnalignmentResultCS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This codesystem defines the codes indicating the result of a requested unalignment. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSUnalignmentResultCS",
  "url" : "https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentResultCS",
  "version" : "0.9.0",
  "name" : "ACCESSUnalignmentResultCS",
  "title" : "ACCESS Unalignment Request Result Codes",
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
  "description" : "This codesystem defines the codes indicating the result of a requested unalignment.",
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
    "code" : "unaligned",
    "display" : "Unaligned",
    "definition" : "The request to unalign the patient has been accepted and the patient has been successfully unaligned."
  },
  {
    "code" : "unalignment-pending",
    "display" : "Unalignment pending further review",
    "definition" : "Additional review is needed and you will receive further information once the manual review of the unalignment request is complete."
  },
  {
    "code" : "patient-not-aligned",
    "display" : "Patient not aligned",
    "definition" : "Patient is not currently aligned to this participant in the specified track and therefore cannot be unaligned."
  }]
}

```
