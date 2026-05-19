# Change Log - CMS ACCESS Model API v0.9.8

## Change Log

This page documents the changes between versions of the CMS ACCESS Model API Implementation Guide.

-------

### Version 0.9.8 - DRAFT

**Release Date**: May 18, 2026

#### Major Changes

##### Addressed feedback from first external testing window

* **Fixed questionnaire responses that are uncoded** so that they have both the text (display) and numerical values for scoring 
* Now use valueCoding with decimal extension instead of valueString
* More consistent with the coded questionnaire responses
 
* **Added example questionnaires** to provide further guidance on how to package questionnaire response data
* **Added more documentation** for each of the ACCESS Model API operations to make them easier to implement
* **Added new result codes** for the `$check-eligibility` operation 
* `not-eligible-clinical-exclusion` - The patient has a clinical exclusion that prevents them from receiving services under the ACCESS Model.
* `not-eligible-mismatch` - The patient information provided does not match the patient information on record.
 
* **Added new result codes** for the `$align` operation 
* `not-aligned-clinical-exclusion` - The patient has a clinical exclusion that prevents them from receiving services under the ACCESS Model.
* `not-aligned-mismatch` - The patient information provided does not match the patient information on record.
* `not-aligned-no-switch-attestation` - Participant switch request did not include switch consent attestation.
 
* **Fixed LOINC code usage bug** for lipids 
* All 57698-3 LOINC codes were replaced by 18262-6 LOINC codes
 
* **Replaced `itemWeight` references** with `ordinalValue` 
* Some servers do not support `itemWeight`
 
* **Added invariant to `dataBundle`** 
* Items reference in the ACCESSDataReportingComposition must be in the ACCESSDataReportingBundle
 
* **Updated Getting Started section** of the IG home page

##### Changed Structured Data Capture IG dependency

* **Changed** from using version 4.0.0 (STU4) to version 3.0.0 (STU3)
* **Better aligns** with `USCoreQuestionnaireResponse` version 6.1.0

##### More blood pressure examples

* `dataBundle` examples now include three individual blood pressure observations

#### Technical Updates

* Version bump from 0.9.6 to 0.9.8

### Version 0.9.6 - DRAFT

**Release Date**: April 24, 2026

#### Major Changes

##### ACCESSDataReportingComposition tweaks

* Added [artifacts](artifacts.md) for the Data Reporting API

##### Replaced average blood pressure with individual blood pressure observations

* **Removed `ACCESSAverageBloodPressure`** profile from the IG
* **Updated `ACCESSDataReportingComposition`** to reference USCoreBloodPressure instead of `ACCESSAverageBloodPressure` and LOINC codes for individual blood pressure observations
* **Updated blood pressure examples** to use `USCoreBloodPressure`
* **Updated documentation** to reflect the change

##### Added cannot-unalign-during-lock-in to ACCESSUnalignmentResultCS

* Patient cannot be unaligned during the 90-day lock-in period

##### Added required entityId query parameter to ACCESS Capability statements

* **`entityId` required** for `$check-eligibility`, `$align`, `$unalign`, `$report-data` operations

##### Track-based condition profiles have a fixed condition category of problem-list-item

* **Condition category update made** to `ACCESSeCKMCondition`, `ACCESSCKMCondition`, `ACCESSMSKCondition`, and `ACCESSBHCondition`

##### Changed ACCESS ID format

* **New ACCESS ID format** for participants now takes the form of ACCES##### (`ACCES` followed by 5 digits)
* **Replaces previous format** of ACCESS#### (`ACCESS` followed by 4 digits)

##### Changed IG path from cms.fhir.us.access to cms.fhir.us.cmmi-access-model

* More specific to the division in CMS.

##### Lock-in Duration

* **References to 3-months** changed to 90 days

#### Technical Updates

* Version bump from 0.9.1 to 0.9.6

