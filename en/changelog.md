# Change Log - CMS ACCESS Model API v0.9.6

## Change Log

This page documents the changes between versions of the CMS ACCESS Model API Implementation Guide.

-------

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

