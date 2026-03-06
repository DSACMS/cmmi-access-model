# ACCESS Model Tracks Value Set - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Model Tracks Value Set**

## ValueSet: ACCESS Model Tracks Value Set 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSTrackVS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This value set includes all codes from the ACCESS Model Tracks code system. 

 **References** 

* [ACCESS Alignment Request Parameters](StructureDefinition-access-align-in.md)
* [ACCESS Check Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md)
* [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSTrackVS",
  "url" : "https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS",
  "version" : "0.9.0",
  "name" : "ACCESSTrackVS",
  "title" : "ACCESS Model Tracks Value Set",
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
      "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSTrackCS",
      "version" : "0.9.0"
    }]
  }
}

```
