# ACCESS Model Tracks - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Model Tracks 

 
This codesystem defines codes for each of the ACCESS Model tracks. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSTrackCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
  "version" : "0.9.8",
  "name" : "ACCESSTrackCS",
  "title" : "ACCESS Model Tracks",
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
  "description" : "This codesystem defines codes for each of the ACCESS Model tracks.",
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
    "code" : "eCKM",
    "display" : "Early Cardio-Kidney-Metabolic track",
    "definition" : "Early Cardio-kidney-metabolic conditions, including hypertension (high blood pressure), dyslipidemia (high or abnormal lipids, including cholesterol), obesity or overweight with marker of central obesity, and prediabetes."
  },
  {
    "code" : "CKM",
    "display" : "Cardio-Kidney-Metabolic track",
    "definition" : "Cardio-kidney-metabolic conditions, including diabetes, chronic kidney disease (3a or 3b), and atherosclerotic cardiovascular disease, including heart disease."
  },
  {
    "code" : "MSK",
    "display" : "Musculoskeletal track",
    "definition" : "Musculoskeletal conditions, including chronic musculoskeletal pain."
  },
  {
    "code" : "BH",
    "display" : "Behavioral Health track",
    "definition" : "Behavioral health conditions, including depression and anxiety."
  }]
}

```
