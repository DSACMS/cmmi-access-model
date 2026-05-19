# ACCESS Model Tracks Value Set - CMS ACCESS Model API v0.9.8

## ValueSet: ACCESS Model Tracks Value Set 

 
This value set includes all codes from the ACCESS Model Tracks code system. 

 **References** 

* [ACCESS Alignment Request Parameters](StructureDefinition-access-align-in.md)
* [ACCESS Check Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md)
* [ACCESS Report Data Parameters](StructureDefinition-access-report-data-in.md)
* [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSTrackVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS",
  "version" : "0.9.8",
  "name" : "ACCESSTrackVS",
  "title" : "ACCESS Model Tracks Value Set",
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
  "description" : "This value set includes all codes from the ACCESS Model Tracks code system.",
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
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
      "version" : "0.9.8"
    }]
  }
}

```
