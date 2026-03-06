# Artifacts - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* **Artifacts**

## Artifacts

This page lists all FHIR artifacts defined in the ACCESS Model API Implementation Guide, organized by API.

### Capability Statements

These statements define the expected capabilities of systems implementing the ACCESS Model APIs. Each capability statement describes the operations, resources, and interactions that must be supported.

| | |
| :--- | :--- |
| [ACCESS Eligibility API Capability Statement](CapabilityStatement-ACCESSEligibilityAPICapabilityStatement.md) | Capabilities for systems implementing the Eligibility API |
| [ACCESS Alignment API Capability Statement](CapabilityStatement-ACCESSAlignmentAPICapabilityStatement.md) | Capabilities for systems implementing the Alignment API |
| [ACCESS Unalignment API Capability Statement](CapabilityStatement-ACCESSUnalignmentAPICapabilityStatement.md) | Capabilities for systems implementing the Unalignment API |

**🔮 Coming in Future Release:**The ACCESS Data Reporting API Capability Statement is planned for a future version of this Implementation Guide.

### Shared Resources

This section defines the operations, code systems, and value sets that are used across multiple ACCESS APIs.

#### Operations

These are the custom operations that can be supported by and/or invoked by systems conforming to the ACCESS Model APIs.

| | |
| :--- | :--- |
| [SubmissionStatus](OperationDefinition-SubmissionStatus.md) | Check the status of asynchronous operation requests |

#### Profiles

These define constraints on FHIR resources for use across multiple ACCESS APIs.

| | |
| :--- | :--- |
| [Submission Status Response Parameters](StructureDefinition-access-submission-status-out.md) | Output parameters for the $submission-status operation |
| [ACCESS Condition Profile](StructureDefinition-access-condition.md) | Base condition profile requiring ICD-10-CM codes for diagnoses across all ACCESS APIs |
| [ACCESS eCKM Track Condition Profile](StructureDefinition-access-eckm-condition.md) | Condition profile for Early Cardio-Kidney-Metabolic (eCKM) track with extensible binding to eCKM diagnosis codes |
| [ACCESS CKM Track Condition Profile](StructureDefinition-access-ckm-condition.md) | Condition profile for Cardio-Kidney-Metabolic (CKM) track with extensible binding to CKM diagnosis codes |
| [ACCESS MSK Track Condition Profile](StructureDefinition-access-msk-condition.md) | Condition profile for Musculoskeletal (MSK) track with extensible binding to MSK diagnosis codes |
| [ACCESS BH Track Condition Profile](StructureDefinition-access-bh-condition.md) | Condition profile for Behavioral Health (BH) track with extensible binding to BH diagnosis codes |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Model APIs.

| | |
| :--- | :--- |
| [ACCESS Track Value Set](ValueSet-ACCESSTrackVS.md) | Value set including all ACCESS Model track codes |
| [ACCESS eCKM Track Qualifying Diagnoses](ValueSet-ACCESSeCKMDiagnosisVS.md) | ICD-10-CM diagnosis codes that qualify a patient for the Early Cardio-Kidney-Metabolic (eCKM) track |
| [ACCESS CKM Track Qualifying Diagnoses](ValueSet-ACCESSCKMDiagnosisVS.md) | ICD-10-CM diagnosis codes that qualify a patient for the Cardio-Kidney-Metabolic (CKM) track |
| [ACCESS MSK Track Qualifying Diagnoses](ValueSet-ACCESSMSKDiagnosisVS.md) | ICD-10-CM diagnosis codes that qualify a patient for the Musculoskeletal (MSK) track |
| [ACCESS BH Track Qualifying Diagnoses](ValueSet-ACCESSBHDiagnosisVS.md) | ICD-10-CM diagnosis codes that qualify a patient for the Behavioral Health (BH) track |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Model APIs.

| | |
| :--- | :--- |
| [ACCESS Track Code System](CodeSystem-ACCESSTrackCS.md) | Codes for each of the ACCESS Model tracks (eCKM, CKM, MSK, BH) |

#### Supporting Examples

These are example instances that are referenced by multiple API examples across the implementation guide.

| | |
| :--- | :--- |
| [Patient Example](Patient-PatientExample.md) | Example US Core patient with Medicare Beneficiary Identifier (MBI) used across multiple API examples |
| [Practitioner Example](Practitioner-PractitionerExample.md) | Example US Core practitioner with NPI used in data reporting examples |
| [Organization Example](Organization-OrganizationExample.md) | Example US Core organization representing an ACCESS participant |
| [Condition - Type 2 Diabetes Example](Condition-ConditionDiabetesExample.md) | Example ACCESS CKM Track condition for Type 2 Diabetes Mellitus (ICD-10-CM E11.9) |
| [Condition - Essential Hypertension Example](Condition-ConditionHypertensionExample.md) | Example ACCESS eCKM Track condition for Essential Hypertension (ICD-10-CM I10) |
| [Condition - Major Depressive Disorder Example](Condition-ConditionDepressionExample.md) | Example ACCESS BH Track condition for Major Depressive Disorder (ICD-10-CM F32.9) |
| [Condition - Osteoarthritis Example](Condition-ConditionOsteoarthritisExample.md) | Example ACCESS MSK Track condition for Osteoarthritis (ICD-10-CM M19.90) |

### Eligibility API

This section defines the operations, profiles, code systems, and value sets that are specific to the ACCESS Eligibility API, which allows participants to check if patients are eligible for the ACCESS model.

#### Operations

These are the custom operations that can be supported by and/or invoked by systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [CheckEligibility](OperationDefinition-CheckEligibility.md) | Submit basic patient information to check eligibility for the ACCESS model |

#### Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [Check Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md) | Input parameters for the $check-eligibility operation |
| [Check Eligibility Response Parameters](StructureDefinition-access-check-eligibility-out.md) | Output parameters for the $check-eligibility operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [Eligibility Result Value Set](ValueSet-ACCESSEligibilityResultVS.md) | Value set including all eligibility result codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Eligibility API.

| | |
| :--- | :--- |
| [Eligibility Result Code System](CodeSystem-ACCESSEligibilityResultCS.md) | Codes indicating the result of an eligibility check |

#### Examples

These are example instances demonstrating the use of the Eligibility API.

| | |
| :--- | :--- |
| [Check Eligibility Request Example](Parameters-CheckEligibilityRequestExample.md) | Example request for checking patient eligibility including participant ID, payer ID, patient details, and track |
| [Check Eligibility Response - Eligible](Parameters-CheckEligibilityResponseEligibleExample.md) | Example successful response indicating patient is eligible for the ACCESS Model |

### Alignment API

This section defines the operations, profiles, code systems, and value sets that are specific to the ACCESS Alignment API, which aligns eligible patients to participants for care under the ACCESS Model.

#### Operations

These are the custom operations that can be supported by and/or invoked by systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [Align](OperationDefinition-Align.md) | Align a patient to a participant and ACCESS track |

#### Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [Alignment Request Parameters](StructureDefinition-access-align-in.md) | Input parameters for the $align operation |
| [Alignment Response Parameters](StructureDefinition-access-align-out.md) | Output parameters for the $align operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [Alignment Result Value Set](ValueSet-ACCESSAlignmentResultVS.md) | Value set including all alignment result codes |
| [Event Type Value Set](ValueSet-ACCESSEventTypeVS.md) | Value set including all event notification type codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Alignment API.

| | |
| :--- | :--- |
| [Alignment Result Code System](CodeSystem-ACCESSAlignmentResultCS.md) | Codes indicating the result of an alignment request |
| [Event Type Code System](CodeSystem-ACCESSEventTypeCS.md) | Codes for types of notification events that trigger subscription notifications |

#### Examples

These are example instances demonstrating the use of the Alignment API.

| | |
| :--- | :--- |
| [Alignment Request Example](Parameters-AlignmentRequestExample.md) | Example request for aligning a patient including participant ID, payer ID, patient details, track, conditions, and notification endpoint |
| [Alignment Request with Switch Consent Example](Parameters-AlignmentRequestWithSwitchConsentExample.md) | Example request for aligning a patient with provider switch consent attestation after 3-month lock-in period |
| [Alignment Response - Aligned](Parameters-AlignmentResponseAlignedExample.md) | Example successful response indicating patient has been aligned to the ACCESS participant |
| [Alignment Response - Switch Approved](Parameters-AlignmentResponseSwitchApprovedExample.md) | Example successful response indicating patient provider switch has been approved and patient is re-aligned |

### Unalignment API

This section defines the operations, profiles, code systems, and value sets that are specific to the ACCESS Unalignment API, which allows manual unalignment of patients from participants.

#### Operations

These are the custom operations that can be supported by and/or invoked by systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [Unalign](OperationDefinition-Unalign.md) | Manually unalign a patient from a participant and ACCESS track |

#### Profiles

These define constraints on FHIR resources for systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [Unalignment Request Parameters](StructureDefinition-access-unalign-in.md) | Input parameters for the $unalign operation |
| [Unalignment Response Parameters](StructureDefinition-access-unalign-out.md) | Output parameters for the $unalign operation |

#### Value Sets

These define sets of codes used by systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [Unalignment Result Value Set](ValueSet-ACCESSUnalignmentResultVS.md) | Value set including all unalignment result codes |
| [Unalignment Reason Value Set](ValueSet-ACCESSUnalignmentReasonVS.md) | Value set including all unalignment reason codes |

#### Code Systems

These define new code systems used by systems conforming to the ACCESS Unalignment API.

| | |
| :--- | :--- |
| [Unalignment Result Code System](CodeSystem-ACCESSUnalignmentResultCS.md) | Codes indicating the result of an unalignment request |
| [Unalignment Reason Code System](CodeSystem-ACCESSUnalignmentReasonCS.md) | Codes indicating the reason for an unalignment request |

#### Examples

These are example instances demonstrating the use of the Unalignment API.

| | |
| :--- | :--- |
| [Unalignment Request Example](Parameters-UnalignmentRequestExample.md) | Example request for unaligning a patient including participant ID, payer ID, patient details, track, and reason for unalignment (geographic relocation) |
| [Unalignment Request - ESRD Example](Parameters-UnalignmentRequestESRDExample.md) | Example unalignment request for patient who developed end-stage renal disease (ESRD), demonstrating the no-longer-clinically-eligible reason code |
| [Patient with ESRD - Unalignment Example](Patient-PatientESRDExample.md) | Example patient Jane Smith who has developed ESRD making her ineligible for the ACCESS Model |
| [End Stage Renal Disease Condition Example](Condition-ESRDConditionExample.md) | Example active ESRD diagnosis (ICD-10-CM N18.6) that disqualifies patient from ACCESS Model participation |
| [Unalignment Response - Unaligned](Parameters-UnalignmentResponseUnalignedExample.md) | Example successful response indicating patient has been manually unaligned from the ACCESS Model |

