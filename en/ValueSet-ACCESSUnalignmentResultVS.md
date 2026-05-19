# ACCESS Unalignment Result Value Set - CMS ACCESS Model API v0.9.8

## ValueSet: ACCESS Unalignment Result Value Set 

 
This value set includes all codes from the ACCESS Unalignment Result code system. 

 **References** 

* [ACCESS Unalignment Response Parameters](StructureDefinition-access-unalign-out.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSUnalignmentResultVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSUnalignmentResultVS",
  "version" : "0.9.8",
  "name" : "ACCESSUnalignmentResultVS",
  "title" : "ACCESS Unalignment Result Value Set",
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
  "description" : "This value set includes all codes from the ACCESS Unalignment Result code system.",
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
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
      "version" : "0.9.8"
    }]
  }
}

```
