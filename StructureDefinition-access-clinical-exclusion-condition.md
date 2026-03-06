# ACCESS Clinical Exclusion Condition - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Clinical Exclusion Condition**

## Resource Profile: ACCESS Clinical Exclusion Condition 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-clinical-exclusion-condition | *Version*:0.9.0 |
| Active as of 2026-02-13 | *Computable Name*:ACCESSClinicalExclusionCondition |

 
The ACCESS Clinical Exclusion Condition profile is used for representing disqualifying conditions that would prevent a patient from being eligible for the ACCESS Model. 

**Usages:**

* Use this Profile: [ACCESS Unalignment Request Parameters](StructureDefinition-access-unalign-in.md)
* Examples for this Profile: [Condition/ESRDConditionExample](Condition-ESRDConditionExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-clinical-exclusion-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-clinical-exclusion-condition.csv), [Excel](StructureDefinition-access-clinical-exclusion-condition.xlsx), [Schematron](StructureDefinition-access-clinical-exclusion-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-clinical-exclusion-condition",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-clinical-exclusion-condition",
  "version" : "0.9.0",
  "name" : "ACCESSClinicalExclusionCondition",
  "title" : "ACCESS Clinical Exclusion Condition",
  "status" : "active",
  "date" : "2026-02-13",
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
  "description" : "The ACCESS Clinical Exclusion Condition profile is used for representing disqualifying conditions that would prevent a patient from being eligible for the ACCESS Model.",
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
  "baseDefinition" : "https://globalalliantinc.com/access/StructureDefinition/access-condition|0.9.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    }]
  }
}

```
