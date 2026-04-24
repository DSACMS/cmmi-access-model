# ACCESS MSK Track Condition Profile - CMS ACCESS Model API v0.9.6

## Resource Profile: ACCESS MSK Track Condition Profile 

 
The ACCESS MSK Track Condition Profile is used for representing qualifying diagnoses for the Musculoskeletal (MSK) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.md) to add a required binding to [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.md). 

All codes must still be valid ICD-10-CM codes as required by the base [ACCESS Condition Profile](StructureDefinition-access-condition.md).

**Usages:**

* Examples for this Profile: [Condition/ConditionOsteoarthritisExample](Condition-ConditionOsteoarthritisExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.cmmi-access-model|current/StructureDefinition/access-msk-condition)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-msk-condition.csv), [Excel](../StructureDefinition-access-msk-condition.xlsx), [Schematron](../StructureDefinition-access-msk-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-msk-condition",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-msk-condition",
  "version" : "0.9.6",
  "name" : "ACCESSMSKCondition",
  "title" : "ACCESS MSK Track Condition Profile",
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
  "description" : "The ACCESS MSK Track Condition Profile is used for representing qualifying diagnoses for the Musculoskeletal (MSK) track. It constrains the [ACCESS Condition Profile](StructureDefinition-access-condition.html) to add a required binding to [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.html).",
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
  "baseDefinition" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-condition|0.9.6",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.category:us-core",
      "path" : "Condition.category",
      "sliceName" : "us-core",
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item"
        }]
      }
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "short" : "MSK track diagnosis code",
      "definition" : "Diagnosis code for MSK track conditions. Values SHALL be from ACCESSMSKDiagnosisVS (osteoarthritis, arthropathies, spine disorders, etc.).",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSMSKDiagnosisVS|0.9.6"
      }
    }]
  }
}

```
