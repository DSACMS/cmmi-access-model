# Home - CMS ACCESS Model API v0.9.6

## Home

### Overview

Welcome to the **CMS ACCESS Model API Implementation Guide**. This comprehensive guide covers all APIs for the CMS ACCESS (Advancing Chronic Care with Effective, Scalable Solutions) Model.

The ACCESS Model aims to modernize chronic condition management across Medicare by testing a value-based payment system that prioritizes health outcomes, clinical accountability, and patient empowerment. It enables care organizations to use a wide range of technology-supported tools — including virtual care, remote monitoring, digital therapeutics, and coordinated team-based services — that are often difficult to bill under traditional fee-for-service Medicare.

For more information about the CMS ACCESS Model, please see the [ACCESS Model website](https://www.cms.gov/priorities/innovation/innovation-models/access).

### About This Implementation Guide

This IG consolidates guidance for all ACCESS Model APIs into a single comprehensive resource, providing:

* **Consistent authentication** mechanisms
* **Shared resources** used across multiple APIs
* **API-specific resources** used in specific APIs

**📘 Operations Manual:**Detailed implementation guidance including authentication workflows, API-specific examples, subscriptions, and testing scenarios is available in the separate
[Operations Manual](https://github.com/DSACMS/cmmi-access-model/blob/main/ACCESS%20API%20Operations%20Manual.pdf)document.

### ACCESS Model APIs

This Implementation Guide covers four primary APIs: the Eligibility API, the Alignment API, the Unalignment API, and the Data Reporting API.

#### Eligibility API

This API allows participants to quickly determine if a patient meets the basic eligibility criteria for participation in the ACCESS model.

**Key Operations:**

* `$check-eligibility` - Submit eligibility check request
* `$submission-status` - Check status of eligibility request

Learn more about the Eligibility API in the ACCESS API Operations Manual.

-------

#### Alignment API

This API aligns eligible patients to participants within specific ACCESS Model tracks. When a patient is aligned to an ACCESS Model track, a subscription is created to provide event notifications related to the patient to the participant. This subscription will provide information on the patient’s status throughout the ACCESS Model and provide valuable reminders.

**Key Operations:**

* `$align` - Submit alignment request
* `$submission-status` - Check status of alignment request

**Additional Features:**

* Subscription-based event notifications

Learn more about the Alignment API in the ACCESS API Operations Manual.

-------

#### Unalignment API

This API allows a participant to manually unalign a patient from the ACCESS Model track due to specific approved reasons such as patient relocation or loss of contact.

**Key Operations:**

* `$unalign` - Submit unalignment request
* `$submission-status` - Check status of unalignment request

Learn more about the Unalignment API in the ACCESS API Operations Manual.

-------

#### Data Reporting API

This API allows a participant to submit required data reporting information for patients aligned to the ACCESS Model to support program evaluation and performance measurement.

**Key Operations:**

* `$report-data` - Submit data report
* `$submission-status` - Check status of data submission

Learn more about the Data Reporting API in the ACCESS API Operations Manual.

-------

### ACCESS Model Tracks

All APIs support the following ACCESS Model tracks:

* **eCKM (Early Cardio-Kidney-Metabolic)** - Hypertension, dyslipidemia, obesity, prediabetes
* **CKM (Cardio-Kidney-Metabolic)** - Diabetes, chronic kidney disease, atherosclerotic cardiovascular disease
* **MSK (Musculoskeletal)** - Chronic musculoskeletal pain
* **BH (Behavioral Health)** - Depression and anxiety

### Key Features

* **Asynchronous Processing** - All primary operations are asynchronous, returning a URL with submission ID to check the status
* **US Core Alignment** - Leverages US Core Patient, QuestionnaireResponse, and Condition profiles
* **OAuth 2.0 Security** - Enterprise-grade authentication using client credentials flow
* **FHIR R4** - Built on FHIR R4.0.1 specification
* **Subscription Support** - Real-time notifications for ACCESS Model events and deadlines

### Getting Started

1. **Review the Operations Manual**- Understand common patterns and requirements across all APIs
1. **Select Your APIs**- Choose the appropriate APIs for your use case
1. **Review [Artifacts](artifacts.md)**- Examine the technical specifications
1. **Review [Conformance Expectations](conformance.md)**- Understand conformance requirements

#### Navigation Tips

* Use the top menu bar to access different IG sections
* The [Artifacts](artifacts.md) page provides a comprehensive list of all formal artifacts with links to detailed pages
* Code examples throughout use realistic placeholder URLs marked as `[base]` - replace these with your actual API endpoint
* All examples show both HTTP headers and JSON bodies separately for clarity

#### For Different Roles

* **API Developers**: Review the Operations Manual for detailed implementation patterns, then examine the operation definitions in [Artifacts](artifacts.md).
* **Integration Architects**: The Operations Manual contains sequence diagrams showing the asynchronous pattern and system interactions.
* **QA/Testing Teams**: Use the example instances in [Artifacts](artifacts.md) to understand expected responses for different eligibility scenarios.
* **Compliance/Security Teams**: The Operations Manual includes Security Considerations for authentication, TLS requirements, and data handling practices.

#### FHIR Knowledge Prerequisites

This IG assumes familiarity with:

**Core FHIR Concepts:**

* [**FHIR R4 basics**](http://hl7.org/fhir/R4) including resources, data types, and the RESTful API
* **HTTP/REST APIs** - [RESTful API basics](http://hl7.org/fhir/R4/http.html) and [HTTP status codes](https://www.rfc-editor.org/rfc/rfc7231#section-6)
* **FHIR Operations** - [Operations Framework](http://hl7.org/fhir/R4/operations.html) and [custom operations](http://hl7.org/fhir/R4/operationdefinition.html)
* [**Parameters**](http://hl7.org/fhir/R4/parameters.html) for operation inputs and outputs
* [**FHIR Asynchronous request patterns**](http://hl7.org/fhir/R4/async.html)

**US Core Profiles:**

* [**US Core Patient**](http://hl7.org/fhir/us/core/STU6.1/StructureDefinition-us-core-patient.html)
* **US Core Observation profiles** - [US Core Vital Signs](http://hl7.org/fhir/us/core/STU6.1/StructureDefinition-us-core-vital-signs.html), [US Core Laboratory Result](http://hl7.org/fhir/us/core/STU6.1/StructureDefinition-us-core-observation-lab.html), and [US Core Simple Observation](http://hl7.org/fhir/us/core/STU6.1/StructureDefinition-us-core-simple-observation.html)
* [**US Core DiagnosticReport**](http://hl7.org/fhir/us/core/STU6.1/StructureDefinition-us-core-diagnosticreport-lab.html)

**Additional FHIR Resources (for Data Reporting API):**

* [**Bundle resource**](http://hl7.org/fhir/R4/bundle.html) for document bundles
* [**Composition resource**](http://hl7.org/fhir/R4/composition.html) for organizing clinical data

**Subscriptions (for Alignment API):**

* [**Subscription resource**](http://hl7.org/fhir/R4/subscription.html) for event notifications
* [**Bundle resource**](http://hl7.org/fhir/R4/bundle.html) for notification messages (message bundles)
* [**MessageHeader**](http://hl7.org/fhir/R4/messageheader.html) for subscription notification messages

**Security:**

* [**OAuth 2.0 Client Credentials flow**](https://www.rfc-editor.org/rfc/rfc6749#section-4.4) for API authentication
* [**SMART App Launch Backend Services**](http://hl7.org/fhir/smart-app-launch/backend-services.html)

### Credits

These are the contributing organizations which drive the guidance in this IG:

* Centers of Medicare and Medicaid Services (CMS)
* Global Alliant, Inc.
* Firely USA Inc.

For more information contact Dave Hill (david.h[at]globalalliantinc.com).

### Globals Profiles

*There are no Global profiles defined*

### Package Dependencies

**ℹ️ Important - Standards Compliance:**It should be noted that FHIR US Core 6.1.0 is based off of ASTP/ONC USCDI v3, not USCDI v1 as indicated below, so this FHIR IG is compliant with g10 standards.












### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (cms.fhir.us.cmmi-access-model.r4)](../package.r4.tgz) and [R4B (cms.fhir.us.cmmi-access-model.r4b)](../package.r4b.tgz) are available.

### Intellectual Property Considerations

This publication includes IP covered under the following statements.

* Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS).

* [ACCESS Alignment Request Result Codes](CodeSystem-ACCESSAlignmentResultCS.md): [ACCESSAlignmentResponseParameters](StructureDefinition-access-align-out.md), [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md), [Parameters/AlignmentResponseAlignedExample](Parameters-AlignmentResponseAlignedExample.md) and [Parameters/AlignmentResponseSwitchApprovedExample](Parameters-AlignmentResponseSwitchApprovedExample.md)
* [ACCESS Eligibility Result Codes](CodeSystem-ACCESSEligibilityResultCS.md): [ACCESSCheckEligibilityResponseParameters](StructureDefinition-access-check-eligibility-out.md), [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md), [Parameters/CheckEligibilityResponseEligibleExample](Parameters-CheckEligibilityResponseEligibleExample.md) and [Parameters/SubmissionStatusResponseExample](Parameters-SubmissionStatusResponseExample.md)
* [ACCESS Event Types](CodeSystem-ACCESSEventTypeCS.md): [ACCESSEventTypeVS](ValueSet-ACCESSEventTypeVS.md)
* [ACCESS Report Data Composition Section Codes](CodeSystem-ACCESSReportDataCompositionSectionCS.md): [ACCESSDataReportingComposition](StructureDefinition-access-data-reporting-composition.md), [Bundle/BHReportDataBundleExample](Bundle-BHReportDataBundleExample.md)... Show 5 more, [Bundle/MSKReportDataBundleExample](Bundle-MSKReportDataBundleExample.md), [Composition/BHReportDataCompositionExample](Composition-BHReportDataCompositionExample.md), [Composition/MSKReportDataCompositionExample](Composition-MSKReportDataCompositionExample.md), [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md) and [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md)
* [ACCESS Report Data Result Codes](CodeSystem-ACCESSReportDataResultCS.md): [ACCESSReportDataResponseParameters](StructureDefinition-access-report-data-out.md), [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.md)... Show 6 more, [Parameters/ReportDataResponseDuplicateExample](Parameters-ReportDataResponseDuplicateExample.md), [Parameters/ReportDataResponseIncompleteDataExample](Parameters-ReportDataResponseIncompleteDataExample.md), [Parameters/ReportDataResponseIncorrectTrackExample](Parameters-ReportDataResponseIncorrectTrackExample.md), [Parameters/ReportDataResponsePatientNotAlignedExample](Parameters-ReportDataResponsePatientNotAlignedExample.md), [Parameters/ReportDataResponseReportingPeriodClosedExample](Parameters-ReportDataResponseReportingPeriodClosedExample.md) and [Parameters/ReportDataResponseSuccessExample](Parameters-ReportDataResponseSuccessExample.md)
* [ACCESS Report Type Codes](CodeSystem-ACCESSReportTypeCS.md): [ACCESSReportDataRequestParameters](StructureDefinition-access-report-data-in.md), [ACCESSReportTypeVS](ValueSet-ACCESSReportTypeVS.md)... Show 5 more, [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md) and [ReportData](OperationDefinition-ReportData.md)
* [ACCESS Model Tracks](CodeSystem-ACCESSTrackCS.md): [ACCESSAlignmentRequestParameters](StructureDefinition-access-align-in.md), [ACCESSCheckEligibilityRequestParameters](StructureDefinition-access-check-eligibility-in.md)... Show 23 more, [ACCESSDataReportingComposition](StructureDefinition-access-data-reporting-composition.md), [ACCESSReportDataRequestParameters](StructureDefinition-access-report-data-in.md), [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [Align](OperationDefinition-Align.md), [Bundle/BHReportDataBundleExample](Bundle-BHReportDataBundleExample.md), [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md), [Bundle/MSKReportDataBundleExample](Bundle-MSKReportDataBundleExample.md), [CheckEligibility](OperationDefinition-CheckEligibility.md), [Composition/BHReportDataCompositionExample](Composition-BHReportDataCompositionExample.md), [Composition/CKMReportDataCompositionExample](Composition-CKMReportDataCompositionExample.md), [Composition/MSKReportDataCompositionExample](Composition-MSKReportDataCompositionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md), [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md), [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md), [ReportData](OperationDefinition-ReportData.md) and [Unalign](OperationDefinition-Unalign.md)
* [ACCESS Unalignment Reason Codes](CodeSystem-ACCESSUnalignmentReasonCS.md): [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md) and [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md)
* [ACCESS Unalignment Request Result Codes](CodeSystem-ACCESSUnalignmentResultCS.md): [ACCESSUnalignmentResponseParameters](StructureDefinition-access-unalign-out.md), [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md) and [Parameters/UnalignmentResponseUnalignedExample](Parameters-UnalignmentResponseUnalignedExample.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [ACCESSAlignmentAPICapabilityStatement](CapabilityStatement-ACCESSAlignmentAPICapabilityStatement.md), [ACCESSAlignmentRequestParameters](StructureDefinition-access-align-in.md)... Show 46 more, [ACCESSAlignmentResponseParameters](StructureDefinition-access-align-out.md), [ACCESSAlignmentResultCS](CodeSystem-ACCESSAlignmentResultCS.md), [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md), [ACCESSBHCondition](StructureDefinition-access-bh-condition.md), [ACCESSBHDiagnosisVS](ValueSet-ACCESSBHDiagnosisVS.md), [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md), [ACCESSCKMDiagnosisVS](ValueSet-ACCESSCKMDiagnosisVS.md), [ACCESSCheckEligibilityRequestParameters](StructureDefinition-access-check-eligibility-in.md), [ACCESSCheckEligibilityResponseParameters](StructureDefinition-access-check-eligibility-out.md), [ACCESSClinicalExclusionCondition](StructureDefinition-access-clinical-exclusion-condition.md), [ACCESSCondition](StructureDefinition-access-condition.md), [ACCESSDataReportingAPICapabilityStatement](CapabilityStatement-ACCESSDataReportingAPICapabilityStatement.md), [ACCESSDataReportingBundle](StructureDefinition-access-data-reporting-bundle.md), [ACCESSDataReportingComposition](StructureDefinition-access-data-reporting-composition.md), [ACCESSEligibilityAPICapabilityStatement](CapabilityStatement-ACCESSEligibilityAPICapabilityStatement.md), [ACCESSEligibilityResultCS](CodeSystem-ACCESSEligibilityResultCS.md), [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md), [ACCESSEventTypeCS](CodeSystem-ACCESSEventTypeCS.md), [ACCESSEventTypeVS](ValueSet-ACCESSEventTypeVS.md), [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md), [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.md), [ACCESSReportDataCompositionSectionCS](CodeSystem-ACCESSReportDataCompositionSectionCS.md), [ACCESSReportDataRequestParameters](StructureDefinition-access-report-data-in.md), [ACCESSReportDataResponseParameters](StructureDefinition-access-report-data-out.md), [ACCESSReportDataResultCS](CodeSystem-ACCESSReportDataResultCS.md), [ACCESSReportDataResultVS](ValueSet-ACCESSReportDataResultVS.md), [ACCESSReportTypeCS](CodeSystem-ACCESSReportTypeCS.md), [ACCESSReportTypeVS](ValueSet-ACCESSReportTypeVS.md), [ACCESSSubmissionStatusResponseParameters](StructureDefinition-access-submission-status-out.md), [ACCESSTrackCS](CodeSystem-ACCESSTrackCS.md), [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md), [ACCESSUnalignmentAPICapabilityStatement](CapabilityStatement-ACCESSUnalignmentAPICapabilityStatement.md), [ACCESSUnalignmentReasonCS](CodeSystem-ACCESSUnalignmentReasonCS.md), [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [ACCESSUnalignmentResponseParameters](StructureDefinition-access-unalign-out.md), [ACCESSUnalignmentResultCS](CodeSystem-ACCESSUnalignmentResultCS.md), [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md), [ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md), [ACCESSeCKMDiagnosisVS](ValueSet-ACCESSeCKMDiagnosisVS.md), [Align](OperationDefinition-Align.md), [CMSAccessAPI](index.md), [CheckEligibility](OperationDefinition-CheckEligibility.md), [ReportData](OperationDefinition-ReportData.md), [SubmissionStatus](OperationDefinition-SubmissionStatus.md) and [Unalign](OperationDefinition-Unalign.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://hl7.org/fhir/uv/xver-r5.r4/0.1.0/CodeSystem-v3-ucum.html): [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md), [Observation/BMIExample](Observation-BMIExample.md)... Show 12 more, [Observation/BloodPressureExample](Observation-BloodPressureExample.md), [Observation/BodyWeightExample](Observation-BodyWeightExample.md), [Observation/HDLCholesterolExample](Observation-HDLCholesterolExample.md), [Observation/HbA1cExample](Observation-HbA1cExample.md), [Observation/LDLCholesterolExample](Observation-LDLCholesterolExample.md), [Observation/TotalCholesterolExample](Observation-TotalCholesterolExample.md), [Observation/TriglyceridesExample](Observation-TriglyceridesExample.md), [Observation/WaistCircumferenceExample](Observation-WaistCircumferenceExample.md), [Observation/eGFRExample](Observation-eGFRExample.md), [Observation/uACRExample](Observation-uACRExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md) and [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md)


* This CodeSystem is not copyrighted.

* [C4BB Identifier Type Code System](http://hl7.org/fhir/us/carin-bb/STU2.1/CodeSystem-C4BBIdentifierType.html): [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md)... Show 7 more, [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md) and [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [ACCESSDataReportingComposition](StructureDefinition-access-data-reporting-composition.md), [Bundle/BHReportDataBundleExample](Bundle-BHReportDataBundleExample.md)... Show 32 more, [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md), [Bundle/MSKReportDataBundleExample](Bundle-MSKReportDataBundleExample.md), [Composition/BHReportDataCompositionExample](Composition-BHReportDataCompositionExample.md), [Composition/CKMReportDataCompositionExample](Composition-CKMReportDataCompositionExample.md), [Composition/MSKReportDataCompositionExample](Composition-MSKReportDataCompositionExample.md), [DiagnosticReport/LDLDiagnosticReportExample](DiagnosticReport-LDLDiagnosticReportExample.md), [DiagnosticReport/LipidPanelDiagnosticReportExample](DiagnosticReport-LipidPanelDiagnosticReportExample.md), [Observation/BMIExample](Observation-BMIExample.md), [Observation/BloodPressureExample](Observation-BloodPressureExample.md), [Observation/BodyWeightExample](Observation-BodyWeightExample.md), [Observation/HDLCholesterolExample](Observation-HDLCholesterolExample.md), [Observation/HbA1cExample](Observation-HbA1cExample.md), [Observation/LDLCholesterolExample](Observation-LDLCholesterolExample.md), [Observation/TotalCholesterolExample](Observation-TotalCholesterolExample.md), [Observation/TriglyceridesExample](Observation-TriglyceridesExample.md), [Observation/WaistCircumferenceExample](Observation-WaistCircumferenceExample.md), [Observation/eGFRExample](Observation-eGFRExample.md), [Observation/uACRExample](Observation-uACRExample.md), [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md), [QuestionnaireResponse/AnxietyGAD7Example](QuestionnaireResponse-AnxietyGAD7Example.md), [QuestionnaireResponse/DepressionPHQ9Example](QuestionnaireResponse-DepressionPHQ9Example.md), [QuestionnaireResponse/HOOSJRExample](QuestionnaireResponse-HOOSJRExample.md), [QuestionnaireResponse/KOOSJRExample](QuestionnaireResponse-KOOSJRExample.md), [QuestionnaireResponse/NeckDisabilityIndexExample](QuestionnaireResponse-NeckDisabilityIndexExample.md), [QuestionnaireResponse/OswestryDisabilityIndexExample](QuestionnaireResponse-OswestryDisabilityIndexExample.md), [QuestionnaireResponse/PROMISCATExample](QuestionnaireResponse-PROMISCATExample.md), [QuestionnaireResponse/PROMISPainInterferenceCATExample](QuestionnaireResponse-PROMISPainInterferenceCATExample.md), [QuestionnaireResponse/PROMISPainInterferenceSFExample](QuestionnaireResponse-PROMISPainInterferenceSFExample.md) and [QuestionnaireResponse/PROMISPhysicalFunctionExample](QuestionnaireResponse-PROMISPhysicalFunctionExample.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Condition Category Codes](http://terminology.hl7.org/7.1.0/CodeSystem-condition-category.html): [ACCESSBHCondition](StructureDefinition-access-bh-condition.md), [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md)... Show 10 more, [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md), [ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md), [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md), [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.1.0/CodeSystem-condition-clinical.html): [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md)... Show 6 more, [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.1.0/CodeSystem-condition-ver-status.html): [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md)... Show 6 more, [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [Observation Category Codes](http://terminology.hl7.org/7.1.0/CodeSystem-observation-category.html): [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md), [Observation/BMIExample](Observation-BMIExample.md)... Show 12 more, [Observation/BloodPressureExample](Observation-BloodPressureExample.md), [Observation/BodyWeightExample](Observation-BodyWeightExample.md), [Observation/HDLCholesterolExample](Observation-HDLCholesterolExample.md), [Observation/HbA1cExample](Observation-HbA1cExample.md), [Observation/LDLCholesterolExample](Observation-LDLCholesterolExample.md), [Observation/TotalCholesterolExample](Observation-TotalCholesterolExample.md), [Observation/TriglyceridesExample](Observation-TriglyceridesExample.md), [Observation/WaistCircumferenceExample](Observation-WaistCircumferenceExample.md), [Observation/eGFRExample](Observation-eGFRExample.md), [Observation/uACRExample](Observation-uACRExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md) and [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md)
* [diagnosticServiceSectionId](http://terminology.hl7.org/7.1.0/CodeSystem-v2-0074.html): [DiagnosticReport/LDLDiagnosticReportExample](DiagnosticReport-LDLDiagnosticReportExample.md) and [DiagnosticReport/LipidPanelDiagnosticReportExample](DiagnosticReport-LipidPanelDiagnosticReportExample.md)
* [identifierType](http://terminology.hl7.org/7.1.0/CodeSystem-v2-0203.html): [Bundle/BHReportDataBundleExample](Bundle-BHReportDataBundleExample.md), [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md)... Show 12 more, [Bundle/MSKReportDataBundleExample](Bundle-MSKReportDataBundleExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md), [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md), [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md), [Patient/PatientESRDExample](Patient-PatientESRDExample.md) and [Patient/PatientExample](Patient-PatientExample.md)


