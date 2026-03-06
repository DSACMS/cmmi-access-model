# ACCESS Check Eligibility Request Parameters - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Check Eligibility Request Parameters**

## Resource Profile: ACCESS Check Eligibility Request Parameters 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-in | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSCheckEligibilityRequestParameters |

 
This profile defines the input parameters for the `$check-eligibility` operation, which is used to determine if a patient is eligible for a specific ACCESS Model track. 

The `conditions` parameter is optional (0..*) and can be used to provide qualifying diagnosis information:

* When included, should reference track-specific condition profiles when applicable
* Helps the server assess eligibility based on specific diagnoses
* Not required for basic eligibility checks based on enrollment data

For detailed alignment workflows and examples, see the Eligibility API Guidance section in the Operations Manual.

**Usages:**

* Examples for this Profile: [Parameters/CheckEligibilityRequestExample](Parameters-CheckEligibilityRequestExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-check-eligibility-in)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-check-eligibility-in.csv), [Excel](StructureDefinition-access-check-eligibility-in.xlsx), [Schematron](StructureDefinition-access-check-eligibility-in.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-check-eligibility-in",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-in",
  "version" : "0.9.0",
  "name" : "ACCESSCheckEligibilityRequestParameters",
  "title" : "ACCESS Check Eligibility Request Parameters",
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
  "description" : "This profile defines the input parameters for the `$check-eligibility` operation, which is used to determine if a patient is eligible for a specific ACCESS Model track.",
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
      "min" : 4,
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
        "source" : "https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-in|0.9.0"
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
        "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-condition|0.9.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
