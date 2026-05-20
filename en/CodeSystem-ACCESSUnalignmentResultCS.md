# ACCESS Unalignment Request Result Codes - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Unalignment Request Result Codes 

 
This codesystem defines the codes indicating the result of a requested unalignment. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSUnalignmentResultCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
  "version" : "0.9.8",
  "name" : "ACCESSUnalignmentResultCS",
  "title" : "ACCESS Unalignment Request Result Codes",
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
  "count" : 4,
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
  },
  {
    "code" : "cannot-unalign-during-lock-in",
    "display" : "Cannot unalign during lock-in",
    "definition" : "Patient is within the 90-day lock-in period and cannot be unaligned."
  }]
}

```
