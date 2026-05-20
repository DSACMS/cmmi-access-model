# ACCESS Report Data Composition Section Codes - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Report Data Composition Section Codes 

 
This codesystem defines additional codes for composition sections used in ACCESS Model data reporting when LOINC codes are not available. 

This Code system is referenced in the definition of the following value sets:

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSReportDataCompositionSectionCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
  "version" : "0.9.8",
  "name" : "ACCESSReportDataCompositionSectionCS",
  "title" : "ACCESS Report Data Composition Section Codes",
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
  "description" : "This codesystem defines additional codes for composition sections used in ACCESS Model data reporting when LOINC codes are not available.",
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
    "code" : "QuickDASH",
    "display" : "Quick Disabilities of the Arm, Shoulder and Hand [QuickDASH]",
    "definition" : "Assesses physical function and symptoms in people with upper limb musculoskeletal disorders"
  },
  {
    "code" : "WHODAS",
    "display" : "World Health Organization Disability Assessment Schedule [WHODAS] 2.0",
    "definition" : "Assesses functioning and disability across six life domains: cognition, mobility, self-care, getting along, life activities, and participation."
  },
  {
    "code" : "PGIC",
    "display" : "Patient Global Impression of Change [PGIC]",
    "definition" : "Assesses patient's perception of improvement or decline."
  },
  {
    "code" : "additional-information",
    "display" : "Additional Information",
    "definition" : "Section containing references to supplementary resources that provide additional context or detail beyond required track-specific data elements"
  }]
}

```
