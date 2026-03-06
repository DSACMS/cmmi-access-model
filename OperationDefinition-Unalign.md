# Unalignment Request - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Unalignment Request**

## OperationDefinition: Unalignment Request 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/OperationDefinition/Unalign | *Version*:0.7.0 |
| Active as of 2026-02-26 | *Computable Name*:Unalign |

 
The **$unalign** operation supports the ability to manually unalign a patient from the participant in a specific ACCESS track. There are a specific set of reasons a patient can be unaligned such as the patient has moved outside of the care radius of the participant or despite good faith efforts, communication with the patient has ceased. When unalignment is successful, the system automatically sends notifications to the participant confirming the unalignment, then all FHIR subscriptions created during the original alignment are cancelled to prevent future erroneous notifications. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Unalign",
  "url" : "https://globalalliantinc.com/access/OperationDefinition/Unalign",
  "version" : "0.7.0",
  "name" : "Unalign",
  "title" : "Unalignment Request",
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
  "description" : "The **$unalign** operation supports the ability to manually unalign a patient from the participant in a specific ACCESS track. There are a specific set of reasons a patient can be unaligned such as the patient has moved outside of the care radius of the participant or despite good faith efforts, communication with the patient has ceased. When unalignment is successful, the system automatically sends notifications to the participant confirming the unalignment, then all FHIR subscriptions created during the original alignment are cancelled to prevent future erroneous notifications.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "unalign",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "inputProfile" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in|0.7.0",
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
    "documentation" : "ACCESS track to unalign the patient from.",
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
  },
  {
    "name" : "reason",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Reason for the manual unalignment.",
    "type" : "CodeableConcept"
  }]
}

```
