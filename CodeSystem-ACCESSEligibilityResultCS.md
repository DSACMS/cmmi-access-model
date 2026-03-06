# ACCESS Eligibility Result Codes - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Eligibility Result Codes**

## CodeSystem: ACCESS Eligibility Result Codes 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CodeSystem/ACCESSEligibilityResultCS | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSEligibilityResultCS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This codesystem defines codes indicating the result of an eligibility check. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSEligibilityResultCS",
  "url" : "https://globalalliantinc.com/access/CodeSystem/ACCESSEligibilityResultCS",
  "version" : "0.9.0",
  "name" : "ACCESSEligibilityResultCS",
  "title" : "ACCESS Eligibility Result Codes",
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
  "description" : "This codesystem defines codes indicating the result of an eligibility check.",
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
  "count" : 8,
  "concept" : [{
    "code" : "eligible",
    "display" : "Eligible",
    "definition" : "Patient is eligible for services under the model. This response does not mean the patient has been aligned. It simply means the patient is eligible to be aligned."
  },
  {
    "code" : "eligible-pending-diagnosis",
    "display" : "Eligible pending diagnosis",
    "definition" : "Patient is provisionally eligible for services under the model depending on the diagnosis."
  },
  {
    "code" : "eligible-switch-participants",
    "display" : "Eligible to switch participants.",
    "definition" : "Patient is eligible to switch participants."
  },
  {
    "code" : "not-eligible-not-medicare",
    "display" : "Not eligible - not receiving Medicare",
    "definition" : "The patient either is not enrolled in Medicare Part A and Part B or dual eligible for Medicare and Medicaid, or they do not have Medicare as their primary insurance, so they are not eligible for services under the ACCESS Model."
  },
  {
    "code" : "not-eligible-services",
    "display" : "Not eligible - receiving services that prevent eligibility",
    "definition" : "The patient is receiving services (such as hospice, end stage renal disease (ESRD), etc.) making them ineligible to be part of the ACCESS Model."
  },
  {
    "code" : "not-eligible-diagnoses",
    "display" : "Not eligible - no qualifying diagnosis",
    "definition" : "The patient does not have a treating diagnosis that qualifies them for services in the track indicated and therefore cannot get services under the ACCESS Model."
  },
  {
    "code" : "not-eligible-control-group",
    "display" : "Not eligible - assigned to Control Group",
    "definition" : "The patient is technically eligible for the ACCESS Model, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months."
  },
  {
    "code" : "not-eligible-already-aligned",
    "display" : "Not eligible - already aligned to another participant in the track",
    "definition" : "The patient is technically eligible, but is already aligned to another participant and receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track."
  }]
}

```
