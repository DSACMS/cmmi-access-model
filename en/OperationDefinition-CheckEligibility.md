# Check Eligibility Request - CMS ACCESS Model API v0.9.6

## OperationDefinition: Check Eligibility Request 

 
The **$check-eligibility** operation allows a participant to submit basic information on a patient who they believe will be a good candidate for the ACCESS model and who wants to be part of the ACCESS Model. The participant can use this API to do a quick check on which patients may be eligible before officially submitting the patient's information for consideration and inclusion in the ACCESS Model. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "CheckEligibility",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/CheckEligibility",
  "version" : "0.9.6",
  "name" : "CheckEligibility",
  "title" : "Check Eligibility Request",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-04-24T13:45:33-04:00",
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
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-in|0.9.6",
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
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.6"
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
