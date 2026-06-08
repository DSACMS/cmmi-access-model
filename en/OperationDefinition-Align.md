# Alignment Request - CMS ACCESS Model API v0.9.11

## OperationDefinition: Alignment Request 

 
The **$align** operation determines if the patient can be aligned to a participant so that the participant can start providing care to the patient under the ACCESS Model. If the patient can be aligned, the patient will be aligned with the participant for a specific ACCESS track. 

### Handy References

#### Operation Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [ACCESS Alignment Request Parameters](StructureDefinition-access-align-in.md) | Input parameters for the $align operation |
| [ACCESS Alignment Response Parameters](StructureDefinition-access-align-out.md) | Output parameters for the $align operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [ACCESS Alignment Result Value Set](ValueSet-ACCESSAlignmentResultVS.md) | Value set including all alignment result codes |
| [ACCESS Event Type Value Set](ValueSet-ACCESSEventTypeVS.md) | Value set including all event notification type codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [ACCESS Alignment Result Code System](CodeSystem-ACCESSAlignmentResultCS.md) | Codes indicating the result of an alignment request |
| [ACCESS Event Type Code System](CodeSystem-ACCESSEventTypeCS.md) | Codes for types of notification events that trigger subscription notifications |

#### Examples

These are example instances demonstrating the use of the Alignment API.

| | |
| :--- | :--- |
| [Alignment Request Example](Parameters-AlignmentRequestExample.md) | Example request for aligning a patient including participant ID, payer ID, patient details, track, conditions, and notification endpoint |
| [Alignment Request with Switch Consent Example](Parameters-AlignmentRequestWithSwitchConsentExample.md) | Example request for aligning a patient with provider switch consent attestation after 90-day lock-in period |
| [Alignment Response - Aligned](Parameters-AlignmentResponseAlignedExample.md) | Example successful response indicating patient has been aligned to the ACCESS participant |
| [Alignment Response - Switch Approved](Parameters-AlignmentResponseSwitchApprovedExample.md) | Example successful response indicating patient provider switch has been approved and patient is re-aligned |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Align",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/Align",
  "version" : "0.9.11",
  "name" : "Align",
  "title" : "Alignment Request",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-06-04T22:54:52-04:00",
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
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-in|0.9.11",
  "parameter" : [{
    "name" : "participantID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS participant identifier. Must follow the pattern ACCES##### where ##### represents exactly 5 digits (e.g., ACCES00001, ACCES12345).",
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
    "documentation" : "Patient information.  If the payer is Medicare, it **SHALL** contain the Medicare Beneficiary Identifier (MBI).",
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
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.11"
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
