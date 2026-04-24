# ACCESS Report Data Result Value Set - CMS ACCESS Model API v0.9.6

## ValueSet: ACCESS Report Data Result Value Set 

 
This value set includes all codes from the ACCESS Report Data Result code system. 

 **References** 

* [ACCESS Report Data Response Parameters](StructureDefinition-access-report-data-out.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSReportDataResultVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSReportDataResultVS",
  "version" : "0.9.6",
  "name" : "ACCESSReportDataResultVS",
  "title" : "ACCESS Report Data Result Value Set",
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
  "description" : "This value set includes all codes from the ACCESS Report Data Result code system.",
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
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataResultCS",
      "version" : "0.9.6"
    }]
  }
}

```
