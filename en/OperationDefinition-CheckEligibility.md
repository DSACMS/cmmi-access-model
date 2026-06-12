# Check Eligibility Request - CMS ACCESS Model API v0.9.12

## OperationDefinition: Check Eligibility Request 

 
The **$check-eligibility** operation allows a participant to submit basic information on a patient who they believe will be a good candidate for the ACCESS model and who wants to be part of the ACCESS Model. The participant can use this API to do a quick check on which patients may be eligible before officially submitting the patient's information for consideration and inclusion in the ACCESS Model. 

### Handy References

#### Operation Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [ACCESS Check Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md) | Input parameters for the $check-eligibility operation |
| [ACCESS Check Eligibility Response Parameters](StructureDefinition-access-check-eligibility-out.md) | Output parameters for the $check-eligibility operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [ACCESS Eligibility Result Value Set](ValueSet-ACCESSEligibilityResultVS.md) | Value set including all eligibility result codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [ACCESS Eligibility Result Code System](CodeSystem-ACCESSEligibilityResultCS.md) | Codes indicating the result of an eligibility check |

#### Examples

These are example instances demonstrating the use of the Eligibility API.

| | |
| :--- | :--- |
| [Check Eligibility Request Example](Parameters-CheckEligibilityRequestExample.md) | Example request for checking patient eligibility including participant ID, payer ID, patient details, and track |
| [Check Eligibility Response - Eligible](Parameters-CheckEligibilityResponseEligibleExample.md) | Example successful response indicating patient is eligible for the ACCESS Model |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CheckEligibility",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/CheckEligibility",
  "version" : "0.9.12",
  "name" : "CheckEligibility",
  "title" : "Check Eligibility Request",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-06-10T23:08:55-04:00",
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
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-in|0.9.12",
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
    "documentation" : "ACCESS track for which eligibility is being checked.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.12"
    }
  },
  {
    "name" : "condition",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "documentation" : "Patient's conditions.",
    "type" : "Condition"
  }]
}

```
