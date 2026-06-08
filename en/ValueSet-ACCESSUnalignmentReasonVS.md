# ACCESS Unalignment Reason Value Set - CMS ACCESS Model API v0.9.11

## ValueSet: ACCESS Unalignment Reason Value Set 

 
This value set includes all codes from the ACCESS Unalignment Reason code system. 

 **References** 

* [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSUnalignmentReasonVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSUnalignmentReasonVS",
  "version" : "0.9.11",
  "name" : "ACCESSUnalignmentReasonVS",
  "title" : "ACCESS Unalignment Reason Value Set",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-04T22:54:52-04:00",
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
  "description" : "This value set includes all codes from the ACCESS Unalignment Reason code system.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "copyright" : "Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS).",
  "compose" : {
    "include" : [{
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentReasonCS",
      "version" : "0.9.11"
    }]
  }
}

```
