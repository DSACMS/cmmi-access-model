# Alignment Request - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Alignment Request**

## OperationDefinition: Alignment Request 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/OperationDefinition/Align | *Version*:0.9.0 |
| Active as of 2026-03-06 | *Computable Name*:Align |

 
The **$align** operation determines if the patient can be aligned to a participant so that the participant can start providing care to the patient under the ACCESS Model. If the patient can be aligned, the patient will be aligned with the participant for a specific ACCESS track. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Align",
  "url" : "https://globalalliantinc.com/access/OperationDefinition/Align",
  "version" : "0.9.0",
  "name" : "Align",
  "title" : "Alignment Request",
  "status" : "active",
  "kind" : "operation",
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
  "description" : "The **$align** operation determines if the patient can be aligned to a participant so that the participant can start providing care to the patient under the ACCESS Model. If the patient can be aligned, the patient will be aligned with the participant for a specific ACCESS track.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "align",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "inputProfile" : "https://globalalliantinc.com/access/StructureDefinition/access-align-in|0.9.0",
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
    "documentation" : "ACCESS Track to align the patient to.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS|0.9.0"
    }
  },
  {
    "name" : "condition",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "documentation" : "Patient's conditions.",
    "type" : "Condition"
  },
  {
    "name" : "referralType",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "How the patient was referred to the ACCESS Model.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSReferralTypeVS|0.9.0"
    }
  },
  {
    "name" : "switchConsentAttestation",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Switch consent attestation, if applicable.",
    "type" : "boolean"
  }]
}

```
