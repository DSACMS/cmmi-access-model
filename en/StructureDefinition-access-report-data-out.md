# ACCESS Report Data Response Parameters - CMS ACCESS Model API v0.9.11

## Resource Profile: ACCESS Report Data Response Parameters 

 
This is the profile for the `$report-data` operation output parameters, which provide the results of the data reporting. 

**Usages:**

* Examples for this Profile: [Parameters/ReportDataResponseDuplicateExample](Parameters-ReportDataResponseDuplicateExample.md), [Parameters/ReportDataResponseIncompleteDataExample](Parameters-ReportDataResponseIncompleteDataExample.md), [Parameters/ReportDataResponseIncorrectTrackExample](Parameters-ReportDataResponseIncorrectTrackExample.md), [Parameters/ReportDataResponsePatientNotAlignedExample](Parameters-ReportDataResponsePatientNotAlignedExample.md)... Show 2 more, [Parameters/ReportDataResponseReportingPeriodClosedExample](Parameters-ReportDataResponseReportingPeriodClosedExample.md) and [Parameters/ReportDataResponseSuccessExample](Parameters-ReportDataResponseSuccessExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/cms.fhir.us.cmmi-access-model|current/StructureDefinition/StructureDefinition-access-report-data-out.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-report-data-out.csv), [Excel](../StructureDefinition-access-report-data-out.xlsx), [Schematron](../StructureDefinition-access-report-data-out.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-report-data-out",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-out",
  "version" : "0.9.11",
  "name" : "ACCESSReportDataResponseParameters",
  "title" : "ACCESS Report Data Response Parameters",
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
  "description" : "This is the profile for the `$report-data` operation output parameters, which provide the results of the data reporting.",
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
        "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSReportDataResultVS|0.9.11"
      }
    }]
  }
}

```
