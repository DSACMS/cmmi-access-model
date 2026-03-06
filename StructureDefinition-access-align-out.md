# ACCESS Alignment Response Parameters - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Alignment Response Parameters**

## Resource Profile: ACCESS Alignment Response Parameters 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-align-out | *Version*:0.7.0 |
| Draft as of 2026-02-26 | *Computable Name*:ACCESSAlignmentResponseParameters |

 
This is the profile for the `$align` operation output parameters, which provide the results of the alignment request. 

**Usages:**

* Examples for this Profile: [Parameters/AlignmentResponseAlignedExample](Parameters-AlignmentResponseAlignedExample.md) and [Parameters/AlignmentResponseSwitchApprovedExample](Parameters-AlignmentResponseSwitchApprovedExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-align-out)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-align-out.csv), [Excel](StructureDefinition-access-align-out.xlsx), [Schematron](StructureDefinition-access-align-out.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-align-out",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-align-out",
  "version" : "0.7.0",
  "name" : "ACCESSAlignmentResponseParameters",
  "title" : "ACCESS Alignment Response Parameters",
  "status" : "draft",
  "date" : "2026-02-26T23:16:42-05:00",
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
  "description" : "This is the profile for the `$align` operation output parameters, which provide the results of the alignment request.",
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
        "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSAlignmentResultVS|0.7.0"
      }
    }]
  }
}

```
