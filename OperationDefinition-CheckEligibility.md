# Check Eligibility Request - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Check Eligibility Request**

## OperationDefinition: Check Eligibility Request 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/OperationDefinition/CheckEligibility | *Version*:0.7.0 |
| Active as of 2026-02-26 | *Computable Name*:CheckEligibility |

 
The **$check-eligibility** operation allows a participant to submit basic information on a patient who they believe will be a good candidate for the ACCESS model and who wants to be part of the ACCESS Model. The participant can use this API to do a quick check on which patients may be eligible before officially submitting the patient's information for consideration and inclusion in the ACCESS Model. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CheckEligibility",
  "url" : "https://globalalliantinc.com/access/OperationDefinition/CheckEligibility",
  "version" : "0.7.0",
  "name" : "CheckEligibility",
  "title" : "Check Eligibility Request",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-02-26T23:16:42-05:00",
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
  "description" : "The **$check-eligibility** operation allows a participant to submit basic information on a patient who they believe will be a good candidate for the ACCESS model and who wants to be part of the ACCESS Model. The participant can use this API to do a quick check on which patients may be eligible before officially submitting the patient's information for consideration and inclusion in the ACCESS Model.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "check-eligibility",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "inputProfile" : "https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-in|0.7.0",
  "parameter" : [{
    "name" : "participantID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS participant identifier. Must follow the pattern ACCESS#### where #### represents exactly 4 digits (e.g., ACCESS0001, ACCESS1234).",
    "type" : "Identifier"
  },
  {
    "name" : "payerID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Payer ID for the patient.",
    "type" : "Identifier"
  },
  {
    "name" : "patient",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Patient information.  It **SHOULD** contain the Medicare Beneficiary Identifier (MBI).",
    "type" : "Patient"
  },
  {
    "name" : "track",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS track for which eligibility is being checked.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS|0.7.0"
    }
  },
  {
    "name" : "conditions",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Patient's conditions.",
    "type" : "Condition"
  }]
}

```
