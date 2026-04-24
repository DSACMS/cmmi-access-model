# ACCESS Event Types Value Set - CMS ACCESS Model API v0.9.6

## ValueSet: ACCESS Event Types Value Set 

 
This value set includes all codes from the ACCESS Event Types code system. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSEventTypeVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSEventTypeVS",
  "version" : "0.9.6",
  "name" : "ACCESSEventTypeVS",
  "title" : "ACCESS Event Types Value Set",
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
  "description" : "This value set includes all codes from the ACCESS Event Types code system.",
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
      "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEventTypeCS",
      "version" : "0.9.6"
    }]
  }
}

```
