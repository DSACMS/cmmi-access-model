# ACCESS Alignment Request Parameters - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Alignment Request Parameters**

## Resource Profile: ACCESS Alignment Request Parameters 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-align-in | *Version*:0.7.0 |
| Draft as of 2026-02-26 | *Computable Name*:ACCESSAlignmentRequestParameters |

 
This is the profile for the `$align` operation input parameters. When a patient wishes to switch from one ACCESS participant to another after the 3-month lock-in period, the `switchConsentAttestation` parameter must be set to `true` to indicate that the patient has provided consent to switch providers. 

The `switchConsentAttestation` parameter:

* Is **optional** (`0..1` cardinality)
* Should be **omitted** for initial alignments
* Must be set to `true` when aligning a patient who is switching from another ACCESS participant after the lock-in period

By setting `switchConsentAttestation` to `true`, the submitting provider attests that:

* ==Legal text or link to same goes here==

The `conditions` parameter **SHALL** reference track-specific condition profiles, depending on the ACCESS track:

* **eCKM Track**: Use [ACCESSeCKMCondition](StructureDefinition-access-eckm-condition.md)
* **CKM Track**: Use [ACCESSCKMCondition](StructureDefinition-access-ckm-condition.md)
* **MSK Track**: Use [ACCESSMSKCondition](StructureDefinition-access-msk-condition.md)
* **BH Track**: Use [ACCESSBHCondition](StructureDefinition-access-bh-condition.md)

For detailed alignment workflows and examples, see the Alignment API Guidance section in the Operations Manual.

**Usages:**

* Examples for this Profile: [Parameters/AlignmentRequestExample](Parameters-AlignmentRequestExample.md) and [Parameters/AlignmentRequestWithSwitchConsentExample](Parameters-AlignmentRequestWithSwitchConsentExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-align-in)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-align-in.csv), [Excel](StructureDefinition-access-align-in.xlsx), [Schematron](StructureDefinition-access-align-in.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-align-in",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-align-in",
  "version" : "0.7.0",
  "name" : "ACCESSAlignmentRequestParameters",
  "title" : "ACCESS Alignment Request Parameters",
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
  "description" : "This is the profile for the `$align` operation input parameters. When a patient wishes to switch from one ACCESS participant to another after the 3-month lock-in period, the `switchConsentAttestation` parameter must be set to `true` to indicate that the patient has provided consent to switch providers.",
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
        "source" : "https://globalalliantinc.com/access/StructureDefinition/access-align-in|0.7.0"
      }],
      "mustSupport" : true
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
        "valueSet" : "https://globalalliantinc.com/access/ValueSet/ACCESSTrackVS|0.7.0"
      }
    },
    {
      "id" : "Parameters.parameter:conditions",
      "path" : "Parameters.parameter",
      "sliceName" : "conditions",
      "min" : 1,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:conditions.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:conditions.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "conditions",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:conditions.resource",
      "path" : "Parameters.parameter.resource",
      "min" : 1,
      "type" : [{
        "code" : "Condition",
        "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-condition|0.7.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:switchConsentAttestation",
      "path" : "Parameters.parameter",
      "sliceName" : "switchConsentAttestation",
      "short" : "Provider Switch Consent Attestation",
      "definition" : "Boolean flag indicating whether the patient has provided consent to switch from their current ACCESS participant to a new provider. This parameter is required when a patient wishes to align to a different provider after the initial 3-month lock-in period. [legal text goes here]",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:switchConsentAttestation.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:switchConsentAttestation.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "switchConsentAttestation",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:switchConsentAttestation.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "boolean"
      }],
      "mustSupport" : true
    }]
  }
}

```
