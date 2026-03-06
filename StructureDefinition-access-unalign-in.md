# ACCESS Unalignment Request Parameters - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Unalignment Request Parameters**

## Resource Profile: ACCESS Unalignment Request Parameters 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-unalign-in | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSUnalignmentRequestParameters |

 
This is the profile for the `$unalign` operation input parameters. 

The `reason` parameter is required and must use one of four codes from [ACCESSUnalignmentReasonVS](ValueSet-ACCESSUnalignmentReasonVS.md).

The `conditions` parameter:

* Is optional (0..* cardinality) in general
* Becomes **required** (1..* cardinality) when using the `no-longer-clinically-eligible` reason code
* This requirement is enforced by the `access-unalign-condition-required` invariant
* Should reference [ACCESSClinicalExclusionCondition](StructureDefinition-access-clinical-exclusion-condition.md) resources with ICD-10-CM codes

For detailed unalignment workflows and examples, see the Unalignment API Guidance section in the Operations Manual.

**Usages:**

* Examples for this Profile: [Parameters/UnalignmentRequestESRDExample](Parameters-UnalignmentRequestESRDExample.md) and [Parameters/UnalignmentRequestExample](Parameters-UnalignmentRequestExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-unalign-in)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-unalign-in.csv), [Excel](StructureDefinition-access-unalign-in.xlsx), [Schematron](StructureDefinition-access-unalign-in.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-unalign-in",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in",
  "version" : "0.9.0",
  "name" : "ACCESSUnalignmentRequestParameters",
  "title" : "ACCESS Unalignment Request Parameters",
  "status" : "draft",
  "date" : "2026-03-06T16:03:26-05:00",
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
  "description" : "This is the profile for the `$unalign` operation input parameters.",
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
      "path" : "Parameters",
      "constraint" : [{
        "key" : "access-unalign-condition-required",
        "severity" : "error",
        "human" : "When the unalignment reason is 'no-longer-clinically-eligible', at least one condition parameter must be provided to document the disqualifying diagnosis",
        "expression" : "parameter.where(name = 'reason').value.ofType(CodeableConcept).coding.where(system = 'https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentReasonCS' and code = 'no-longer-clinically-eligible').exists() implies parameter.where(name = 'condition').exists()",
        "source" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in|0.9.0"
      }]
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
      "min" : 5,
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:participantID",
      "path" : "Parameters.parameter",
      "sliceName" : "participantID",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:participantID.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:participantID.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "participantID",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:participantID.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Identifier"
      }],
      "constraint" : [{
        "key" : "access-participant-id-pattern",
        "severity" : "error",
        "human" : "ACCESS Participant ID must follow the pattern ACCESS#### where #### represents exactly 4 digits (e.g., ACCESS0001, ACCESS1234)",
        "expression" : "value.matches('^ACCESS\\\\d{4}$')",
        "source" : "https://globalalliantinc.com/access/StructureDefinition/access-unalign-in|0.9.0"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:participantID.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:payerID",
      "path" : "Parameters.parameter",
      "sliceName" : "payerID",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:payerID.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:payerID.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "payerID",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:payerID.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Identifier"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:payerID.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:patient",
      "path" : "Parameters.parameter",
      "sliceName" : "patient",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:patient.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:patient.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "patient",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:patient.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:patient.resource",
      "path" : "Parameters.parameter.resource",
      "min" : 1,
      "type" : [{
        "code" : "Patient",
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:track",
      "path" : "Parameters.parameter",
      "sliceName" : "track",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:track.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:track.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "track",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:track.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS|0.9.0"
      }
    },
    {
      "id" : "Parameters.parameter:track.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:condition",
      "path" : "Parameters.parameter",
      "sliceName" : "condition",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:condition.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:condition.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "condition",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:condition.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:condition.resource",
      "path" : "Parameters.parameter.resource",
      "min" : 1,
      "type" : [{
        "code" : "Condition",
        "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-clinical-exclusion-condition|0.9.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:reason",
      "path" : "Parameters.parameter",
      "sliceName" : "reason",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:reason.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:reason.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "reason",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:reason.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSUnalignmentReasonVS|0.9.0"
      }
    },
    {
      "id" : "Parameters.parameter:reason.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    }]
  }
}

```
