# ACCESS Report Data Parameters - CMS ACCESS Model API v0.9.11

## Resource Profile: ACCESS Report Data Parameters 

 
This is the profile for the `$report-data` operation input parameters. 

**Usages:**

* Examples for this Profile: [Parameters/BHReportDataRequestExample](Parameters-BHReportDataRequestExample.md), [Parameters/CKMReportDataRequestExample](Parameters-CKMReportDataRequestExample.md), [Parameters/MSKReportDataRequestExample](Parameters-MSKReportDataRequestExample.md), [Parameters/ReportDataRequestExample](Parameters-ReportDataRequestExample.md) and [Parameters/eCKMReportDataRequestExample](Parameters-eCKMReportDataRequestExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/cms.fhir.us.cmmi-access-model|current/StructureDefinition/StructureDefinition-access-report-data-in.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-report-data-in.csv), [Excel](../StructureDefinition-access-report-data-in.xlsx), [Schematron](../StructureDefinition-access-report-data-in.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-report-data-in",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in",
  "version" : "0.9.11",
  "name" : "ACCESSReportDataRequestParameters",
  "title" : "ACCESS Report Data Parameters",
  "status" : "draft",
  "date" : "2026-06-04T23:05:21-04:00",
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
  "description" : "This is the profile for the `$report-data` operation input parameters.",
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
        "key" : "access-report-data-track-matches-composition-section",
        "severity" : "error",
        "human" : "The first section in the report-data Bundle must match the track parameter in the $report-data operation.",
        "expression" : "parameter.where(name = 'dataBundle').resource.ofType(Bundle).entry.resource.ofType(Composition).section.first().code.coding.code = parameter.where(name = 'track').value.coding.code",
        "source" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in|0.9.11"
      }]
    },
    {
      "id" : "Parameters.meta",
      "path" : "Parameters.meta",
      "min" : 1
    },
    {
      "id" : "Parameters.meta.profile",
      "path" : "Parameters.meta.profile",
      "min" : 1
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
        "human" : "ACCESS Participant ID must follow the pattern ACCES##### where ##### represents exactly 5 digits (e.g., ACCES00001, ACCES12345)",
        "expression" : "value.matches('^ACCES\\\\d{5}$')",
        "source" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in|0.9.11"
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
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.11"
      }
    },
    {
      "id" : "Parameters.parameter:track.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:reportType",
      "path" : "Parameters.parameter",
      "sliceName" : "reportType",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:reportType.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:reportType.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "reportType",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:reportType.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSReportTypeVS|0.9.11"
      }
    },
    {
      "id" : "Parameters.parameter:reportType.resource",
      "path" : "Parameters.parameter.resource",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:dataBundle",
      "path" : "Parameters.parameter",
      "sliceName" : "dataBundle",
      "min" : 1,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:dataBundle.modifierExtension",
      "path" : "Parameters.parameter.modifierExtension",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:dataBundle.name",
      "path" : "Parameters.parameter.name",
      "fixedString" : "dataBundle",
      "mustSupport" : true
    },
    {
      "id" : "Parameters.parameter:dataBundle.value[x]",
      "path" : "Parameters.parameter.value[x]",
      "max" : "0"
    },
    {
      "id" : "Parameters.parameter:dataBundle.resource",
      "path" : "Parameters.parameter.resource",
      "min" : 1,
      "type" : [{
        "code" : "Bundle",
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle|0.9.11"]
      }],
      "mustSupport" : true
    }]
  }
}

```
