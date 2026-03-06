# ACCESS Submission Status Response Parameters - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Submission Status Response Parameters**

## Resource Profile: ACCESS Submission Status Response Parameters 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/StructureDefinition/access-submission-status-out | *Version*:0.9.0 |
| Draft as of 2026-03-06 | *Computable Name*:ACCESSSubmissionStatusResponseParameters |

 
This is the profile for the $submission-status operation output parameters (generic for all APIs). When the result indicates a validation error, the optional 'issues' parameter MAY contain an OperationOutcome resource with detailed validation error information to help implementers understand and correct the submission. 

**Usages:**

* Examples for this Profile: [Parameters/SubmissionStatusResponseExample](Parameters-SubmissionStatusResponseExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.access|current/StructureDefinition/access-submission-status-out)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-access-submission-status-out.csv), [Excel](StructureDefinition-access-submission-status-out.xlsx), [Schematron](StructureDefinition-access-submission-status-out.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-submission-status-out",
  "url" : "https://globalalliantinc.com/access/StructureDefinition/access-submission-status-out",
  "version" : "0.9.0",
  "name" : "ACCESSSubmissionStatusResponseParameters",
  "title" : "ACCESS Submission Status Response Parameters",
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
  "description" : "This is the profile for the $submission-status operation output parameters (generic for all APIs). When the result indicates a validation error, the optional 'issues' parameter MAY contain an OperationOutcome resource with detailed validation error information to help implementers understand and correct the submission.",
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
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:issues",
      "path" : "Parameters.parameter",
      "sliceName" : "issues",
      "short" : "Provides more result context",
      "definition" : "When present, contains an OperationOutcome resource with detailed information about submission errors, warnings, or informational messages. This parameter is typically included when the result code indicates a validation error to provide structured, parseable details about what validation checks failed and how to correct the submission.",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:issues.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "issues",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:issues.resource",
      "path" : "Parameters.parameter.resource",
      "min" : 1,
      "type" : [{
        "code" : "OperationOutcome"
      }],
      "mustSupport" : true
    }]
  }
}

```
