# Alignment Request - CMS ACCESS Model API v0.9.1

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Alignment Request**

## OperationDefinition: Alignment Request 

| | |
| :--- | :--- |
| *Official URL*:https://dsacms.github.io/cmmi-access-model/OperationDefinition/Align | *Version*:0.9.1 |
| Active as of 2026-03-12 | *Computable Name*:Align |

 
The **$align** operation determines if the patient can be aligned to a participant so that the participant can start providing care to the patient under the ACCESS Model. If the patient can be aligned, the patient will be aligned with the participant for a specific ACCESS track. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Align",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/Align",
  "version" : "0.9.1",
  "name" : "Align",
  "title" : "Alignment Request",
  "status" : "active",
  "kind" : "operation",
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
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-in|0.9.1",
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
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.1"
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
    "name" : "isProviderReferral",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Was the patient referred to the ACCESS Model by a provider?",
    "type" : "boolean"
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
