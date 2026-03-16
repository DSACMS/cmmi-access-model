# ACCESS Model Tracks - CMS ACCESS Model API v0.9.1

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Model Tracks**

## CodeSystem: ACCESS Model Tracks 

| | |
| :--- | :--- |
| *Official URL*:https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS | *Version*:0.9.1 |
| Draft as of 2026-03-12 | *Computable Name*:ACCESSTrackCS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This codesystem defines codes for each of the ACCESS Model tracks. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSTrackCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
  "version" : "0.9.1",
  "name" : "ACCESSTrackCS",
  "title" : "ACCESS Model Tracks",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-12T23:55:37-07:00",
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
