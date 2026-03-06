# ACCESS eCKM Track Condition Profile - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS eCKM Track Condition Profile**

## Resource Profile: ACCESS eCKM Track Condition Profile 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-eckm-condition | *Version*:0.9.0 |
| Active as of 2026-02-13 | *Computable Name*:ACCESSeCKMCondition |

 
The ACCESS eCKM Track Condition Profile is used for representing qualifying diagnoses for the Early Cardio-Kidney-Metabolic (eCKM) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.md) to add a required binding to [ACCESSeCKMDiagnosisVS](ValueSet-ACCESSeCKMDiagnosisVS.md). 

All codes must still be valid ICD-10-CM codes as required by the base [ACCESS Condition Profile](StructureDefinition-access-condition.md).

**Usages:**

* Examples for this Profile: [Condition/ConditionHypertensionExample](Condition-ConditionHypertensionExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-eckm-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-eckm-condition.csv), [Excel](StructureDefinition-access-eckm-condition.xlsx), [Schematron](StructureDefinition-access-eckm-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-eckm-condition",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-eckm-condition",
  "version" : "0.9.0",
  "name" : "ACCESSeCKMCondition",
  "title" : "ACCESS eCKM Track Condition Profile",
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
  "description" : "The ACCESS eCKM Track Condition Profile is used for representing qualifying diagnoses for the Early Cardio-Kidney-Metabolic (eCKM) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSeCKMDiagnosisVS](ValueSet-ACCESSeCKMDiagnosisVS.html).",
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
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "eCKM track diagnosis code",
      "definition" : "Diagnosis code for eCKM track conditions. Values SHALL be from ACCESSeCKMDiagnosisVS (hypertension, dyslipidemia, prediabetes, obesity).",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSeCKMDiagnosisVS|0.9.0"
      }
    }]
  }
}

```
