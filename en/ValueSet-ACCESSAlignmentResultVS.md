# ACCESS Alignment Result Value Set - CMS ACCESS Model API v0.9.8

## ValueSet: ACCESS Alignment Result Value Set 

 
This value set includes all codes from the ACCESS Alignment Result code system. 

 **References** 

* [ACCESS Alignment Response Parameters](StructureDefinition-access-align-out.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSAlignmentResultVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSAlignmentResultVS",
  "version" : "0.9.8",
  "name" : "ACCESSAlignmentResultVS",
  "title" : "ACCESS Alignment Result Value Set",
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
  "description" : "This value set includes all codes from the ACCESS Alignment Result code system.",
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
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
      "version" : "0.9.8"
    }]
  }
}

```
