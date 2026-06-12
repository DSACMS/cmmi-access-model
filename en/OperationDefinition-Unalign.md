# Unalignment Request - CMS ACCESS Model API v0.9.12

## OperationDefinition: Unalignment Request 

 
The **$unalign** operation supports the ability to manually unalign a patient from the participant in a specific ACCESS track. There are a specific set of reasons a patient can be unaligned such as the patient has moved outside of the care radius of the participant or despite good faith efforts, communication with the patient has ceased. When unalignment is successful, the system automatically sends notifications to the participant confirming the unalignment, then all FHIR subscriptions created during the original alignment are cancelled to prevent future erroneous notifications. 

### Handy References

#### Operation Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md) | Input parameters for the $unalign operation |
| [ACCESS Unalignment Response Parameters](StructureDefinition-access-unalign-out.md) | Output parameters for the $unalign operation |
| [ACCESS Clinical Exclusion Condition](StructureDefinition-access-clinical-exclusion-condition.md) | ICD-10-CM diagnosis codes that disqualify a patient from the ACCESS Model |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [ACCESS Unalignment Result Value Set](ValueSet-ACCESSUnalignmentResultVS.md) | Value set including all unalignment result codes |
| [ACCESS Unalignment Reason Value Set](ValueSet-ACCESSUnalignmentReasonVS.md) | Value set including all unalignment reason codes |
| [ACCESS eCKM/CKM Track Clinical Exclusion Diagnoses Value Set](ValueSet-ACCESSCKMClinicalExclusionDiagnosisVS.md) | ICD-10-CM diagnosis codes representing clinical exclusions for the eCKM and CKM tracks |
| [ACCESS MSK Track Clinical Exclusion Diagnoses Value Set](ValueSet-ACCESSMSKClinicalExclusionDiagnosisVS.md) | ICD-10-CM diagnosis codes representing clinical exclusions for the MSK track |
| [ACCESS BH Track Clinical Exclusion Diagnoses Value Set](ValueSet-ACCESSBHClinicalExclusionDiagnosisVS.md) | ICD-10-CM diagnosis codes representing clinical exclusions for the BH track |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [ACCESS Unalignment Result Code System](CodeSystem-ACCESSUnalignmentResultCS.md) | Codes indicating the result of an unalignment request |
| [ACCESS Unalignment Reason Code System](CodeSystem-ACCESSUnalignmentReasonCS.md) | Codes indicating the reason for an unalignment request |

#### Examples

These are example instances demonstrating the use of the Unalignment API.

| | |
| :--- | :--- |
| [Unalignment Request Example](Parameters-UnalignmentRequestExample.md) | Example request for unaligning a patient including participant ID, payer ID, patient details, track, and reason for unalignment (geographic relocation) |
| [Unalignment Request - ESRD Example](Parameters-UnalignmentRequestESRDExample.md) | Example unalignment request for patient who developed end-stage renal disease (ESRD), demonstrating the no-longer-clinically-eligible reason code |
| [Patient with ESRD - Unalignment Example](Patient-PatientESRDExample.md) | Example patient Jane Smith who has developed ESRD making her ineligible for the ACCESS Model |
| [End Stage Renal Disease Condition Example](Condition-ESRDConditionExample.md) | Example active ESRD diagnosis (ICD-10-CM N18.6) that disqualifies patient from ACCESS Model participation |
| [Unalignment Response - Unaligned](Parameters-UnalignmentResponseUnalignedExample.md) | Example successful response indicating patient has been manually unaligned from the ACCESS Model |



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Unalign",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/Unalign",
  "version" : "0.9.12",
  "name" : "Unalign",
  "title" : "Unalignment Request",
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
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-unalign-in|0.9.12",
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
    "documentation" : "ACCESS track to unalign the patient from.",
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
