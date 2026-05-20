# ACCESS Unalignment Response Parameters - CMS ACCESS Model API v0.9.8

## Resource Profile: ACCESS Unalignment Response Parameters 

 
This is the profile for the `$unalign` operation output parameters, which provide the results of the unalignment request. 

**Usages:**

* Examples for this Profile: [Parameters/UnalignmentResponseUnalignedExample](Parameters-UnalignmentResponseUnalignedExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.cmmi-access-model|current/StructureDefinition/access-unalign-out)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-unalign-out.csv), [Excel](../StructureDefinition-access-unalign-out.xlsx), [Schematron](../StructureDefinition-access-unalign-out.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-unalign-out",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-unalign-out",
  "version" : "0.9.8",
  "name" : "ACCESSUnalignmentResponseParameters",
  "title" : "ACCESS Unalignment Response Parameters",
  "status" : "draft",
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
  "description" : "This is the profile for the `$unalign` operation output parameters, which provide the results of the unalignment request.",
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
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSUnalignmentResultVS|0.9.8"
      }
    }]
  }
}

```
