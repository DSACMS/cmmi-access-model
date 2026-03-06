# Home - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/ImplementationGuide/cms.fhir.us.access | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:CMSAccessAPI |

### Overview

Welcome to the **CMS ACCESS Model API Implementation Guide**. This comprehensive guide covers all APIs for the CMS ACCESS (Advancing Chronic Care with Effective, Scalable Solutions) Model.

The ACCESS Model aims to modernize chronic condition management across Medicare by testing a value-based payment system that prioritizes health outcomes, clinical accountability, and patient empowerment. It enables care organizations to use a wide range of technology-supported tools — including virtual care, remote monitoring, digital therapeutics, and coordinated team-based services — that are often difficult to bill under traditional fee-for-service Medicare.

For more information about the CMS ACCESS Model, please see the [ACCESS Model website](https://www.cms.gov/priorities/innovation/innovation-models/access).

### About This Implementation Guide

This IG consolidates guidance for all ACCESS Model APIs into a single comprehensive resource, providing:

* **Consistent authentication** mechanisms
* **Shared resources** used across multiple APIs
* **API-specific resources** used in specific APIs

### ACCESS Model APIs

This Implementation Guide covers four primary APIs: the Eligibility API, the Alignment API, the Unalignment API, and the Data Reporting API (to be added in a subsequent release of this IG).

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

**🔮 Coming in Future Release:**The Data Reporting API details will be added in a future version of this Implementation Guide.

-------

### ACCESS Model Tracks

All APIs support the following ACCESS Model tracks:

* **eCKM (Early Cardio-Kidney-Metabolic)** - Hypertension, dyslipidemia, obesity, prediabetes
* **CKM (Cardio-Kidney-Metabolic)** - Diabetes, chronic kidney disease, atherosclerotic cardiovascular disease
* **MSK (Musculoskeletal)** - Chronic musculoskeletal pain
* **BH (Behavioral Health)** - Depression and anxiety

### Key Features

* **Asynchronous Processing** - All primary operations are asynchronous, returning a URL with submission ID to check the status
* **US Core Alignment** - Leverages US Core 6.1.0 profiles
* **OAuth 2.0 Security** - Enterprise-grade authentication using client credentials flow
* **FHIR R4** - Built on FHIR R4.0.1 specification
* **Subscription Support** - Real-time notifications for ACCESS Model events and deadlines

### Getting Started

**📘 Operations Manual:**Detailed implementation guidance including authentication workflows, API-specific examples, subscriptions, and testing scenarios is available in the separate Operations Manual document.

1. **Review the Operations Manual**- Understand common patterns, authentication, and API-specific guidance
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
* **QA/Testing Teams**: Use the example instances in [Artifacts](artifacts.md) to understand expected responses, and see the Testing Guide in the Operations Manual for test scenarios.
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

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (cms.fhir.us.access.r4)](package.r4.tgz) and [R4B (cms.fhir.us.access.r4b)](package.r4b.tgz) are available.

### Intellectual Property Considerations

This publication includes IP covered under the following statements.

* Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS).

* [ACCESS Alignment Request Result Codes](CodeSystem-ACCESSAlignmentResultCS.md): [ACCESSAlignmentResponseParameters](StructureDefinition-access-align-out.md), [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md), [Parameters/AlignmentResponseAlignedExample](Parameters-AlignmentResponseAlignedExample.md) and [Parameters/AlignmentResponseSwitchApprovedExample](Parameters-AlignmentResponseSwitchApprovedExample.md)
* [ACCESS Eligibility Result Codes](CodeSystem-ACCESSEligibilityResultCS.md): [ACCESSCheckEligibilityResponseParameters](StructureDefinition-access-check-eligibility-out.md), [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md), [Parameters/CheckEligibilityResponseEligibleExample](Parameters-CheckEligibilityResponseEligibleExample.md) and [Parameters/SubmissionStatusResponseExample](Parameters-SubmissionStatusResponseExample.md)
* [ACCESS Event Types](CodeSystem-ACCESSEventTypeCS.md): [ACCESSEventTypeVS](ValueSet-ACCESSEventTypeVS.md)
* [ACCESS Referral Type](CodeSystem-ACCESSReferralTypeCS.md): [ACCESSAlignmentRequestParameters](StructureDefinition-access-align-in.md), [ACCESSReferralTypeVS](ValueSet-ACCESSReferralTypeVS.md), [Align](OperationDefinition-Align.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md) and [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md)
* [ACCESS Model Tracks](CodeSystem-ACCESSTrackCS.md): [ACCESSAlignmentRequestParameters](StructureDefinition-access-align-in.md), [ACCESSCheckEligibilityRequestParameters](StructureDefinition-access-check-eligibility-in.md)... Show 10 more, [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [Align](OperationDefinition-Align.md), [CheckEligibility](OperationDefinition-CheckEligibility.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md), [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md), [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md) and [Unalign](OperationDefinition-Unalign.md)
* [ACCESS Unalignment Reason Codes](CodeSystem-ACCESSUnalignmentReasonCS.md): [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md) and [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md)
* [ACCESS Unalignment Request Result Codes](CodeSystem-ACCESSUnalignmentResultCS.md): [ACCESSUnalignmentResponseParameters](StructureDefinition-access-unalign-out.md), [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md) and [Parameters/UnalignmentResponseUnalignedExample](Parameters-UnalignmentResponseUnalignedExample.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.2.0/CodeSystem-ISO3166Part1.html): [ACCESSAlignmentAPICapabilityStatement](CapabilityStatement-ACCESSAlignmentAPICapabilityStatement.md), [ACCESSAlignmentRequestParameters](StructureDefinition-access-align-in.md)... Show 37 more, [ACCESSAlignmentResponseParameters](StructureDefinition-access-align-out.md), [ACCESSAlignmentResultCS](CodeSystem-ACCESSAlignmentResultCS.md), [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md), [ACCESSBHCondition](StructureDefinition-access-bh-condition.md), [ACCESSBHDiagnosisVS](ValueSet-ACCESSBHDiagnosisVS.md), [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md), [ACCESSCKMDiagnosisVS](ValueSet-ACCESSCKMDiagnosisVS.md), [ACCESSCheckEligibilityRequestParameters](StructureDefinition-access-check-eligibility-in.md), [ACCESSCheckEligibilityResponseParameters](StructureDefinition-access-check-eligibility-out.md), [ACCESSClinicalExclusionCondition](StructureDefinition-access-clinical-exclusion-condition.md), [ACCESSCondition](StructureDefinition-access-condition.md), [ACCESSEligibilityAPICapabilityStatement](CapabilityStatement-ACCESSEligibilityAPICapabilityStatement.md), [ACCESSEligibilityResultCS](CodeSystem-ACCESSEligibilityResultCS.md), [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.md), [ACCESSEventTypeCS](CodeSystem-ACCESSEventTypeCS.md), [ACCESSEventTypeVS](ValueSet-ACCESSEventTypeVS.md), [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md), [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.md), [ACCESSReferralTypeCS](CodeSystem-ACCESSReferralTypeCS.md), [ACCESSReferralTypeVS](ValueSet-ACCESSReferralTypeVS.md), [ACCESSSubmissionStatusResponseParameters](StructureDefinition-access-submission-status-out.md), [ACCESSTrackCS](CodeSystem-ACCESSTrackCS.md), [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md), [ACCESSUnalignmentAPICapabilityStatement](CapabilityStatement-ACCESSUnalignmentAPICapabilityStatement.md), [ACCESSUnalignmentReasonCS](CodeSystem-ACCESSUnalignmentReasonCS.md), [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md), [ACCESSUnalignmentRequestParameters](StructureDefinition-access-unalign-in.md), [ACCESSUnalignmentResponseParameters](StructureDefinition-access-unalign-out.md), [ACCESSUnalignmentResultCS](CodeSystem-ACCESSUnalignmentResultCS.md), [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.md), [ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md), [ACCESSeCKMDiagnosisVS](ValueSet-ACCESSeCKMDiagnosisVS.md), [Align](OperationDefinition-Align.md), [CMSAccessAPI](index.md), [CheckEligibility](OperationDefinition-CheckEligibility.md), [SubmissionStatus](OperationDefinition-SubmissionStatus.md) and [Unalign](OperationDefinition-Unalign.md)


* This CodeSystem is not copyrighted.

* [C4BB Identifier Type Code System](http://hl7.org/fhir/us/carin-bb/STU2.1/CodeSystem-C4BBIdentifierType.html): [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md), [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md) and [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md)... Show 6 more, [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md)... Show 6 more, [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Condition/ConditionDepressionExample](Condition-ConditionDepressionExample.md), [Condition/ConditionDiabetesExample](Condition-ConditionDiabetesExample.md)... Show 6 more, [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md), [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md), [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md), [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md) and [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md), [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md)... Show 5 more, [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md), [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md), [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md), [Patient/PatientESRDExample](Patient-PatientESRDExample.md) and [Patient/PatientExample](Patient-PatientExample.md)




## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "cms.fhir.us.access",
  "language" : "en-US",
  "url" : "https://globalalliantinc.com/access/ImplementationGuide/cms.fhir.us.access",
  "version" : "0.9.0",
  "name" : "CMSAccessAPI",
  "title" : "CMS ACCESS Model API",
  "status" : "draft",
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
  "description" : "Comprehensive Implementation Guide for all CMS ACCESS Model APIs including Eligibility, Alignment, Unalignment, and Data Reporting",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "packageId" : "cms.fhir.us.access",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7tx",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
    }],
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.0.1"
  },
  {
    "id" : "hl7ext",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
    }],
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.2.0"
  },
  {
    "id" : "hl7_fhir_us_core",
    "uri" : "http://hl7.org/fhir/us/core/ImplementationGuide/hl7.fhir.us.core",
    "packageId" : "hl7.fhir.us.core",
    "version" : "6.1.0"
  },
  {
    "id" : "hl7_fhir_us_carin_bb",
    "uri" : "http://hl7.org/fhir/us/carin-bb/ImplementationGuide/hl7.fhir.us.carin-bb",
    "packageId" : "hl7.fhir.us.carin-bb",
    "version" : "2.1.0"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2025+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ci-build"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "logging"
      },
      {
        "url" : "value",
        "valueString" : "debug"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-all"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://globalalliantinc.com/access/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
      "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2025+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "ci-build"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludettl"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "logging"
      },
      {
        "url" : "value",
        "valueString" : "debug"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "pin-canonicals"
      },
      {
        "url" : "value",
        "valueString" : "pin-all"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://globalalliantinc.com/access/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "grouping" : [{
      "id" : "SharedResources",
      "name" : "Shared Resources",
      "description" : "Resources used across multiple ACCESS APIs"
    },
    {
      "id" : "EligibilityAPI",
      "name" : "Eligibility API Resources",
      "description" : "Resources specific to the ACCESS Eligibility API"
    },
    {
      "id" : "AlignmentAPI",
      "name" : "Alignment API Resources",
      "description" : "Resources specific to the ACCESS Alignment API"
    },
    {
      "id" : "UnalignmentAPI",
      "name" : "Unalignment API Resources",
      "description" : "Resources specific to the ACCESS Unalignment API"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CapabilityStatement"
      }],
      "reference" : {
        "reference" : "CapabilityStatement/ACCESSAlignmentAPICapabilityStatement"
      },
      "name" : "ACCESS Alignment API Capability Statement",
      "description" : "Describes the expected capabilities of systems implementing the ACCESS Alignment API for aligning patients to ACCESS participants.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-align-in"
      },
      "name" : "ACCESS Alignment Request Parameters",
      "description" : "This is the profile for the `$align` operation input parameters. When a patient wishes to switch from one ACCESS participant to another after the 3-month lock-in period, the `switchConsentAttestation` parameter must be set to `true` to indicate that the patient has provided consent to switch providers.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSAlignmentResultCS"
      },
      "name" : "ACCESS Alignment Request Result Codes",
      "description" : "This codesystem defines codes indicating the result of a requested alignment.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-align-out"
      },
      "name" : "ACCESS Alignment Response Parameters",
      "description" : "This is the profile for the `$align` operation output parameters, which provide the results of the alignment request.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSAlignmentResultVS"
      },
      "name" : "ACCESS Alignment Result Value Set",
      "description" : "This value set includes all codes from the ACCESS Alignment Result code system.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSBHDiagnosisVS"
      },
      "name" : "ACCESS Behavioral Health (BH) Track Qualifying Diagnoses",
      "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Behavioral Health (BH) track. Includes depression and anxiety disorder diagnoses.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-bh-condition"
      },
      "name" : "ACCESS BH Condition Profile",
      "description" : "The ACCESS BH Track Condition Profile is used for representing qualifying diagnoses for the Behavioral Health (BH) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSBHDiagnosisVS](ValueSet-ACCESSBHDiagnosisVS.html).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSCKMDiagnosisVS"
      },
      "name" : "ACCESS Cardio-Kidney-Metabolic (CKM) Track Qualifying Diagnoses",
      "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Cardio-Kidney-Metabolic (CKM) track. Includes diabetes mellitus (all types), atherosclerotic cardiovascular disease (ASCVD), and chronic kidney disease (CKD stage 3) diagnoses.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-check-eligibility-in"
      },
      "name" : "ACCESS Check Eligibility Request Parameters",
      "description" : "This profile defines the input parameters for the `$check-eligibility` operation, which is used to determine if a patient is eligible for a specific ACCESS Model track.",
      "exampleBoolean" : false,
      "groupingId" : "EligibilityAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-check-eligibility-out"
      },
      "name" : "ACCESS Check Eligibility Response Parameters",
      "description" : "This is the profile for the `$check-eligibility` operation output parameters, which provide the results of the eligibility check.",
      "exampleBoolean" : false,
      "groupingId" : "EligibilityAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-ckm-condition"
      },
      "name" : "ACCESS CKM Track Condition Profile",
      "description" : "The ACCESS CKM Track Condition Profile is used for representing qualifying diagnoses for the Cardio-Kidney-Metabolic (CKM) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSCKMDiagnosisVS](ValueSet-ACCESSCKMDiagnosisVS.html).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-clinical-exclusion-condition"
      },
      "name" : "ACCESS Clinical Exclusion Condition",
      "description" : "The ACCESS Clinical Exclusion Condition profile is used for representing disqualifying conditions that would prevent a patient from being eligible for the ACCESS Model.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource:abstract"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-condition"
      },
      "name" : "ACCESS Condition Profile",
      "description" : "This profile constrains the US Core Condition Problems and Health Concerns Profile to require ICD-10-CM codes for the ACCESS Model. This ensures consistent diagnosis coding across all ACCESS APIs.  This profile also serves as the foundation for track-specific condition profiles:",
      "exampleBoolean" : false,
      "groupingId" : "SharedResources"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSeCKMDiagnosisVS"
      },
      "name" : "ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses",
      "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Early Cardio-Kidney-Metabolic (eCKM) track. Includes hypertension, dyslipidemia, prediabetes, and obesity diagnoses.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-eckm-condition"
      },
      "name" : "ACCESS eCKM Track Condition Profile",
      "description" : "The ACCESS eCKM Track Condition Profile is used for representing qualifying diagnoses for the Early Cardio-Kidney-Metabolic (eCKM) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSeCKMDiagnosisVS](ValueSet-ACCESSeCKMDiagnosisVS.html).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CapabilityStatement"
      }],
      "reference" : {
        "reference" : "CapabilityStatement/ACCESSEligibilityAPICapabilityStatement"
      },
      "name" : "ACCESS Eligibility API Capability Statement",
      "description" : "Describes the expected capabilities of systems implementing the ACCESS Eligibility API for checking patient eligibility for the ACCESS Model.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSEligibilityResultCS"
      },
      "name" : "ACCESS Eligibility Result Codes",
      "description" : "This codesystem defines codes indicating the result of an eligibility check.",
      "exampleBoolean" : false,
      "groupingId" : "EligibilityAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSEligibilityResultVS"
      },
      "name" : "ACCESS Eligibility Result Value Set",
      "description" : "This value set includes all codes from the ACCESS Eligibility Result code system.",
      "exampleBoolean" : false,
      "groupingId" : "EligibilityAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSEventTypeCS"
      },
      "name" : "ACCESS Event Types",
      "description" : "This codesystem defines codes for the types of events that trigger subscription notifications in the ACCESS Model.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSEventTypeVS"
      },
      "name" : "ACCESS Event Types Value Set",
      "description" : "This value set includes all codes from the ACCESS Event Types code system.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSTrackCS"
      },
      "name" : "ACCESS Model Tracks",
      "description" : "This codesystem defines codes for each of the ACCESS Model tracks.",
      "exampleBoolean" : false,
      "groupingId" : "SharedResources"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSTrackVS"
      },
      "name" : "ACCESS Model Tracks Value Set",
      "description" : "This value set includes all codes from the ACCESS Model Tracks code system.",
      "exampleBoolean" : false,
      "groupingId" : "SharedResources"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-msk-condition"
      },
      "name" : "ACCESS MSK Track Condition Profile",
      "description" : "The ACCESS MSK Track Condition Profile is used for representing qualifying diagnoses for the Musculoskeletal (MSK) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.html).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSMSKDiagnosisVS"
      },
      "name" : "ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses",
      "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Musculoskeletal (MSK) track. Includes osteoarthritis, other arthropathies and joint disorders, spine and structural disorders, degenerative spine disease, back pain and radiculopathy, soft tissue/tendon/bursa disorders, and peripheral nerve and plexus disorders.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSReferralTypeCS"
      },
      "name" : "ACCESS Referral Type",
      "description" : "This codesystem defines codes that indicate how the patient was referred to the ACCESS Model.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSReferralTypeVS"
      },
      "name" : "ACCESS Referral Type Value Set",
      "description" : "This value set includes all codes from the ACCESS Referral Type code system.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-submission-status-out"
      },
      "name" : "ACCESS Submission Status Response Parameters",
      "description" : "This is the profile for the $submission-status operation output parameters (generic for all APIs). When the result indicates a validation error, the optional 'issues' parameter MAY contain an OperationOutcome resource with detailed validation error information to help implementers understand and correct the submission.",
      "exampleBoolean" : false,
      "groupingId" : "SharedResources"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CapabilityStatement"
      }],
      "reference" : {
        "reference" : "CapabilityStatement/ACCESSUnalignmentAPICapabilityStatement"
      },
      "name" : "ACCESS Unalignment API Capability Statement",
      "description" : "Describes the expected capabilities of systems implementing the ACCESS Unalignment API for removing patient alignments from ACCESS participants.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSUnalignmentReasonCS"
      },
      "name" : "ACCESS Unalignment Reason Codes",
      "description" : "This codesystem defines the codes indicating the reason for the requested unalignment.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSUnalignmentReasonVS"
      },
      "name" : "ACCESS Unalignment Reason Value Set",
      "description" : "This value set includes all codes from the ACCESS Unalignment Reason code system.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-unalign-in"
      },
      "name" : "ACCESS Unalignment Request Parameters",
      "description" : "This is the profile for the `$unalign` operation input parameters.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACCESSUnalignmentResultCS"
      },
      "name" : "ACCESS Unalignment Request Result Codes",
      "description" : "This codesystem defines the codes indicating the result of a requested unalignment.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-unalign-out"
      },
      "name" : "ACCESS Unalignment Response Parameters",
      "description" : "This is the profile for the `$unalign` operation output parameters, which provide the results of the unalignment request.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ACCESSUnalignmentResultVS"
      },
      "name" : "ACCESS Unalignment Result Value Set",
      "description" : "This value set includes all codes from the ACCESS Unalignment Result code system.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "OperationDefinition"
      }],
      "reference" : {
        "reference" : "OperationDefinition/Align"
      },
      "name" : "Alignment Request",
      "description" : "The **$align** operation determines if the patient can be aligned to a participant so that the participant can start providing care to the patient under the ACCESS Model. If the patient can be aligned, the patient will be aligned with the participant for a specific ACCESS track.",
      "exampleBoolean" : false,
      "groupingId" : "AlignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/AlignmentRequestExample"
      },
      "name" : "Alignment Request Example",
      "description" : "Example of parameters for aligning a patient to the ACCESS Model",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-align-in|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/AlignmentRequestWithSwitchConsentExample"
      },
      "name" : "Alignment Request with Switch Consent Example",
      "description" : "Example of parameters for aligning a patient with switch consent attestation",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-align-in|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/AlignmentResponseAlignedExample"
      },
      "name" : "Alignment Response - Aligned Example",
      "description" : "Example response indicating successful patient alignment",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-align-out|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/AlignmentResponseSwitchApprovedExample"
      },
      "name" : "Alignment Response - Switch Approved Example",
      "description" : "Example response indicating successful provider switch",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-align-out|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "OperationDefinition"
      }],
      "reference" : {
        "reference" : "OperationDefinition/CheckEligibility"
      },
      "name" : "Check Eligibility Request",
      "description" : "The **$check-eligibility** operation allows a participant to submit basic information on a patient who they believe will be a good candidate for the ACCESS model and who wants to be part of the ACCESS Model. The participant can use this API to do a quick check on which patients may be eligible before officially submitting the patient's information for consideration and inclusion in the ACCESS Model.",
      "exampleBoolean" : false,
      "groupingId" : "EligibilityAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/CheckEligibilityRequestExample"
      },
      "name" : "Check Eligibility Request Example",
      "description" : "Example of parameters for checking patient eligibility for the ACCESS Model",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-in|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/CheckEligibilityResponseEligibleExample"
      },
      "name" : "Check Eligibility Response - Eligible Example",
      "description" : "Example response indicating patient is eligible for the ACCESS Model",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-out|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/ConditionHypertensionExample"
      },
      "name" : "Condition Example - Essential Hypertension",
      "description" : "Example condition for Essential Hypertension using ACCESS eCKM Track Condition profile with required ICD-10 coding",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-eckm-condition|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/ConditionDepressionExample"
      },
      "name" : "Condition Example - Major Depressive Disorder",
      "description" : "Example condition for Major Depressive Disorder using ACCESS BH Track Condition profile with required ICD-10 coding",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-bh-condition|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/ConditionOsteoarthritisExample"
      },
      "name" : "Condition Example - Osteoarthritis",
      "description" : "Example condition for Osteoarthritis using ACCESS MSK Track Condition profile with required ICD-10 coding",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-msk-condition|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/ConditionDiabetesExample"
      },
      "name" : "Condition Example - Type 2 Diabetes",
      "description" : "Example condition for Type 2 Diabetes Mellitus using ACCESS CKM Track Condition profile with required ICD-10 coding",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-ckm-condition|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      }],
      "reference" : {
        "reference" : "Condition/ESRDConditionExample"
      },
      "name" : "End Stage Renal Disease Condition Example",
      "description" : "Active ESRD diagnosis that disqualifies patient from ACCESS Model",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-clinical-exclusion-condition|0.9.0",
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      }],
      "reference" : {
        "reference" : "Organization/OrganizationExample"
      },
      "name" : "Organization Example",
      "description" : "Example organization for ACCESS Model examples",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/PatientExample"
      },
      "name" : "Patient Example",
      "description" : "Example patient for ACCESS Model examples",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      }],
      "reference" : {
        "reference" : "Patient/PatientESRDExample"
      },
      "name" : "Patient with ESRD - Unalignment Example",
      "description" : "Patient Jane Smith who has developed ESRD making her ineligible for ACCESS Model",
      "exampleBoolean" : true,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      }],
      "reference" : {
        "reference" : "Practitioner/PractitionerExample"
      },
      "name" : "Practitioner Example",
      "description" : "Example practitioner for ACCESS Model examples",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "OperationDefinition"
      }],
      "reference" : {
        "reference" : "OperationDefinition/SubmissionStatus"
      },
      "name" : "Submission Status",
      "description" : "The **$submission-status** operation allows the client to check the status of any asynchronous ACCESS operation submission. This is a shared operation used by all ACCESS APIs. The specific result codes returned depend on which operation created the submission: [ACCESSEligibilityResultVS](ValueSet-ACCESSEligibilityResultVS.html) for $check-eligibility, [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.html) for $align, and [ACCESSUnalignmentResultVS](ValueSet-ACCESSUnalignmentResultVS.html) for $unalign.",
      "exampleBoolean" : false,
      "groupingId" : "SharedResources"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/SubmissionStatusResponseExample"
      },
      "name" : "Submission Status Response Example",
      "description" : "Example response for submission status check",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-submission-status-out|0.9.0"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "OperationDefinition"
      }],
      "reference" : {
        "reference" : "OperationDefinition/Unalign"
      },
      "name" : "Unalignment Request",
      "description" : "The **$unalign** operation supports the ability to manually unalign a patient from the participant in a specific ACCESS track. There are a specific set of reasons a patient can be unaligned such as the patient has moved outside of the care radius of the participant or despite good faith efforts, communication with the patient has ceased. When unalignment is successful, the system automatically sends notifications to the participant confirming the unalignment, then all FHIR subscriptions created during the original alignment are cancelled to prevent future erroneous notifications.",
      "exampleBoolean" : false,
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/UnalignmentRequestESRDExample"
      },
      "name" : "Unalignment Request - ESRD Example",
      "description" : "Example of unalignment request for patient who developed ESRD (no longer clinically eligible)",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in|0.9.0",
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/UnalignmentRequestExample"
      },
      "name" : "Unalignment Request Example",
      "description" : "Example of parameters for unaligning a patient from the ACCESS Model",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in|0.9.0",
      "groupingId" : "UnalignmentAPI"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Parameters"
      }],
      "reference" : {
        "reference" : "Parameters/UnalignmentResponseUnalignedExample"
      },
      "name" : "Unalignment Response - Unaligned Example",
      "description" : "Example response indicating successful patient unalignment",
      "exampleCanonical" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-out|0.9.0",
      "groupingId" : "UnalignmentAPI"
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "conformance.html"
        }],
        "nameUrl" : "conformance.html",
        "title" : "Conformance Expectations",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "artifacts.html"
        }],
        "nameUrl" : "artifacts.html",
        "title" : "Artifacts",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "downloads.html"
        }],
        "nameUrl" : "downloads.html",
        "title" : "Downloads",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : "path-resource",
      "value" : "input/capabilities"
    },
    {
      "code" : "path-resource",
      "value" : "input/examples"
    },
    {
      "code" : "path-resource",
      "value" : "input/extensions"
    },
    {
      "code" : "path-resource",
      "value" : "input/models"
    },
    {
      "code" : "path-resource",
      "value" : "input/operations"
    },
    {
      "code" : "path-resource",
      "value" : "input/profiles"
    },
    {
      "code" : "path-resource",
      "value" : "input/resources"
    },
    {
      "code" : "path-resource",
      "value" : "input/vocabulary"
    },
    {
      "code" : "path-resource",
      "value" : "input/maps"
    },
    {
      "code" : "path-resource",
      "value" : "input/testing"
    },
    {
      "code" : "path-resource",
      "value" : "input/history"
    },
    {
      "code" : "path-resource",
      "value" : "fsh-generated/resources"
    },
    {
      "code" : "path-pages",
      "value" : "template/config"
    },
    {
      "code" : "path-pages",
      "value" : "input/images"
    },
    {
      "code" : "path-tx-cache",
      "value" : "input-cache/txcache"
    }]
  }
}

```
