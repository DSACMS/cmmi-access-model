# ACCESS Check Eligibility Response Parameters - CMS ACCESS Model API v0.9.12

## Resource Profile: ACCESS Check Eligibility Response Parameters 

 
This is the profile for the `$check-eligibility` operation output parameters, which provide the results of the eligibility check. 

**Usages:**

* Examples for this Profile: [Parameters/CheckEligibilityResponseEligibleExample](Parameters-CheckEligibilityResponseEligibleExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/cms.fhir.us.cmmi-access-model|current/StructureDefinition/StructureDefinition-access-check-eligibility-out.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-check-eligibility-out.csv), [Excel](../StructureDefinition-access-check-eligibility-out.xlsx), [Schematron](../StructureDefinition-access-check-eligibility-out.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-check-eligibility-out",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-out",
  "version" : "0.9.12",
  "name" : "ACCESSCheckEligibilityResponseParameters",
  "title" : "ACCESS Check Eligibility Response Parameters",
  "status" : "draft",
  "date" : "2026-06-10T23:08:55-04:00",
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
  "description" : "This is the profile for the `$check-eligibility` operation output parameters, which provide the results of the eligibility check.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Parameters",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Parameters|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Parameters",
      "path" : "Parameters"
    },
    {
      "id" : "Parameters.language",
      "path" : "Parameters.language",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/languages|4.0.1"
      }
    },
    {
      "id" : "Parameters.parameter",
      "path" : "Parameters.parameter",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "name"
        }],
        "rules" : "closed"
      },
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:result",
      "path" : "Parameters.parameter",
      "sliceName" : "result",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:result.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "result",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:result.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSEligibilityResultVS|0.9.12"
      }
    }]
  }
}

```
