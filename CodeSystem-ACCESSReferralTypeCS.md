# ACCESS Referral Type - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Referral Type**

## CodeSystem: ACCESS Referral Type 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/CodeSystem/ACCESSReferralTypeCS | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSReferralTypeCS |
| **Copyright/Legal**: Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS). | |

 
This codesystem defines codes that indicate how the patient was referred to the ACCESS Model. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ACCESSReferralTypeVS](ValueSet-ACCESSReferralTypeVS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSReferralTypeCS",
  "url" : "https://globalalliantinc.com/access/CodeSystem/ACCESSReferralTypeCS",
  "version" : "0.9.0",
  "name" : "ACCESSReferralTypeCS",
  "title" : "ACCESS Referral Type",
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
  "description" : "This codesystem defines codes that indicate how the patient was referred to the ACCESS Model.",
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
  "count" : 3,
  "concept" : [{
    "code" : "patient-self-referral",
    "display" : "Patient self-referral",
    "definition" : "The patient independently initiated contact with the ACCESS Model participant to request services through the ACCESS Model."
  },
  {
    "code" : "provider-referral",
    "display" : "Provider referral",
    "definition" : "A healthcare provider identified the patient as a potential candidate for the ACCESS Model."
  },
  {
    "code" : "direct-to-consumer",
    "display" : "Direct to consumer",
    "definition" : "The patient was reached through direct marketing, advertising, or outreach campaigns specifically designed to promote awareness of the participant’s services through the ACCESS Model."
  }]
}

```
