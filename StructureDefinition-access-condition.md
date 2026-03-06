# ACCESS Condition Profile - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Condition Profile**

## Resource Profile: ACCESS Condition Profile 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-condition | *Version*:0.7.0 |
| Active as of 2026-02-05 | *Computable Name*:ACCESSCondition |

 
This profile constrains the US Core Condition Problems and Health Concerns Profile to require ICD-10-CM codes for the ACCESS Model. This ensures consistent diagnosis coding across all ACCESS APIs. This profile also serves as the foundation for track-specific condition profiles: 

* **CKM Track**: [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md) - Adds extensible binding to CKM diagnoses
* **eCKM Track**: [ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md) - Adds extensible binding to eCKM diagnoses
* **MSK Track**: [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md) - Adds extensible binding to MSK diagnoses
* **BH Track**: [ACCESSBHCondition](StructureDefinition-access-bh-condition.md) - Adds extensible binding to BH diagnoses

For more information on value set binding strengths, see the [Conformance page](conformance.md#value-set-bindings).

**Usages:**

* Derived from this Profile: [ACCESS BH Condition Profile](StructureDefinition-access-bh-condition.md), [ACCESS CKM Track Condition Profile](StructureDefinition-access-ckm-condition.md), [ACCESS eCKM Track Condition Profile](StructureDefinition-access-eckm-condition.md) and [ACCESS MSK Track Condition Profile](StructureDefinition-access-msk-condition.md)
* Use this Profile: [ACCESS Alignment Request Parameters](StructureDefinition-access-align-in.md), [ACCESS Check Eligibility Request Parameters](StructureDefinition-access-check-eligibility-in.md) and [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)
* Examples for this Profile: [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-condition.csv), [Excel](StructureDefinition-access-condition.xlsx), [Schematron](StructureDefinition-access-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-condition",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-condition",
  "version" : "0.7.0",
  "name" : "ACCESSCondition",
  "title" : "ACCESS Condition Profile",
  "status" : "active",
  "date" : "2026-02-05",
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
  "description" : "This profile constrains the US Core Condition Problems and Health Concerns Profile to require ICD-10-CM codes for the ACCESS Model. This ensures consistent diagnosis coding across all ACCESS APIs.  This profile also serves as the foundation for track-specific condition profiles:",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/us/core/StructureDefinition/us-core-condition-problems-health-concerns|6.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "Identification of the condition using ICD-10-CM codes",
      "definition" : "Identification of the condition, problem or diagnosis. Must include at least one ICD-10-CM code."
    },
    {
      "id" : "Condition.code.coding",
      "path" : "Condition.code.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Condition.code.coding:icd10cm",
      "path" : "Condition.code.coding",
      "sliceName" : "icd10cm",
      "short" : "ICD-10-CM diagnosis code",
      "definition" : "Required ICD-10-CM diagnosis code for the condition",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Condition.code.coding:icd10cm.system",
      "path" : "Condition.code.coding.system",
      "min" : 1,
      "fixedUri" : "http://hl7.org/fhir/sid/icd-10-cm",
      "mustSupport" : true
    },
    {
      "id" : "Condition.code.coding:icd10cm.code",
      "path" : "Condition.code.coding.code",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
