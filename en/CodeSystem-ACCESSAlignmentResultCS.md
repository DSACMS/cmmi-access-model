# ACCESS Alignment Request Result Codes - CMS ACCESS Model API v0.9.8

## CodeSystem: ACCESS Alignment Request Result Codes 

 
This codesystem defines codes indicating the result of a requested alignment. 

This Code system is referenced in the definition of the following value sets:

* [ACCESSAlignmentResultVS](ValueSet-ACCESSAlignmentResultVS.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ACCESSAlignmentResultCS",
  "url" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
  "version" : "0.9.8",
  "name" : "ACCESSAlignmentResultCS",
  "title" : "ACCESS Alignment Request Result Codes",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-05-20T09:30:43-04:00",
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
  "description" : "This codesystem defines codes indicating the result of a requested alignment.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "copyright" : "Copyright (c) 2026 Centers for Medicare and Medicaid Services (CMS).",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 10,
  "concept" : [{
    "code" : "aligned",
    "display" : "Aligned",
    "definition" : "Patient is eligible and has been aligned so the participant can now begin providing services to the patient under the ACCESS Model."
  },
  {
    "code" : "aligned-switch-approved",
    "display" : "Aligned and switch approved",
    "definition" : "The request to switch the patient's alignment from a different participant after the 90-day lock in period is accepted and the patient is considered switched and now re-aligned."
  },
  {
    "code" : "not-aligned-control-group",
    "display" : "Not aligned - assigned to Control Group",
    "definition" : "The patient is technically eligible, but based on the randomized control group algorithm, the patient has been placed in the control group for 12 months and therefore cannot be aligned for 12 months."
  },
  {
    "code" : "not-aligned-already-aligned",
    "display" : "Not aligned - already aligned to another participant in the track",
    "definition" : "The patient is technically eligible, but is already aligned to another participant and receiving services under the ACCESS Model in the same track. A patient can only be aligned to one participant in each track. If a switch consent attestation is submitted, but the patient is still within the 90-day lock-in period, this response will be received."
  },
  {
    "code" : "not-aligned-not-medicare",
    "display" : "Not aligned - not receiving Medicare",
    "definition" : "The patient either is not enrolled in Medicare Part A and Part B or dual eligible for Medicare and Medicaid, or they do not have Medicare as their primary insurance, so they are not eligible for services under the ACCESS Model."
  },
  {
    "code" : "not-aligned-services",
    "display" : "Not aligned - receiving services that prevent eligibility",
    "definition" : "The patient is receiving services (such as hospice, end stage renal disease (ESRD), etc.) making them ineligible to be part of the ACCESS Model."
  },
  {
    "code" : "not-aligned-diagnoses",
    "display" : "Not aligned - no qualifying diagnosis",
    "definition" : "The patient does not have a treating diagnosis that qualifies them for service in the track indicated and therefore cannot get services under the ACCESS Model."
  },
  {
    "code" : "not-aligned-clinical-exclusion",
    "display" : "Not aligned - clinical exclusion",
    "definition" : "The patient has a clinical exclusion that prevents them from receiving services under the ACCESS Model."
  },
  {
    "code" : "not-aligned-mismatch",
    "display" : "Not aligned - mismatch",
    "definition" : "The patient information provided does not match the patient information on record."
  },
  {
    "code" : "not-aligned-no-switch-attestation",
    "display" : "Not aligned - no switch attestation",
    "definition" : "Participant switch request did not include switch consent attestation."
  }]
}

```
