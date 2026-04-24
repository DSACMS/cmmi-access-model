# ACCESS Data Reporting Bundle - CMS ACCESS Model API v0.9.6

## Resource Profile: ACCESS Data Reporting Bundle 

 
The ACCESS Data Reporting Bundle Profile defines the structure for packaging clinical data submissions. It is a document-type Bundle that **SHALL** contain a Patient resource and an [ACCESS Data Reporting Composition](StructureDefinition-access-data-reporting-composition.md) resource. 

The ACCESS Data Reporting Bundle Profile defines the structure for packaging clinical data submissions. It is a document-type Bundle that **SHALL** contain a Patient resource and an [ACCESS Data Reporting Composition](StructureDefinition-access-data-reporting-composition.md) resource.

### Bundle Structure

* **Type**: Must be `document`
* **Identifier**: Required (1..1) - unique identifier for this data submission
* **Entry slicing**: 
* `patient` entry (1..1): References a US Core Patient resource
* `access-data-reporting-composition` entry (1..1): References an ACCESS Data Reporting Composition
* Additional entries: Any Observation, DiagnosticReport, or other resources referenced by the Composition
 

All resources referenced in the Composition **SHALL** be included in the Bundle.

For examples and submission workflows, see the Data Reporting API section in the Operations Manual.

**Usages:**

* Use this Profile: [ACCESS Report Data Parameters](StructureDefinition-access-report-data-in.md)
* Examples for this Profile: [Bundle/BHReportDataBundleExample](Bundle-BHReportDataBundleExample.md), [Bundle/CKMReportDataBundleExample](Bundle-CKMReportDataBundleExample.md) and [Bundle/MSKReportDataBundleExample](Bundle-MSKReportDataBundleExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/cms.fhir.us.cmmi-access-model|current/StructureDefinition/access-data-reporting-bundle)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-data-reporting-bundle.csv), [Excel](../StructureDefinition-access-data-reporting-bundle.xlsx), [Schematron](../StructureDefinition-access-data-reporting-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-data-reporting-bundle",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-bundle",
  "version" : "0.9.6",
  "name" : "ACCESSDataReportingBundle",
  "title" : "ACCESS Data Reporting Bundle",
  "status" : "draft",
  "date" : "2026-04-24T13:45:33-04:00",
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
  "description" : "The ACCESS Data Reporting Bundle Profile defines the structure for packaging clinical data submissions. It is a document-type Bundle that **SHALL** contain a Patient resource and an [ACCESS Data Reporting Composition](StructureDefinition-access-data-reporting-composition.html) resource.",
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
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle"
    },
    {
      "id" : "Bundle.language",
      "path" : "Bundle.language",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/languages|4.0.1"
      }
    },
    {
      "id" : "Bundle.type",
      "path" : "Bundle.type",
      "patternCode" : "document"
    },
    {
      "id" : "Bundle.entry",
      "path" : "Bundle.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "resource"
        }],
        "description" : "Slice based on the entry.resource type",
        "rules" : "open"
      },
      "min" : 2
    },
    {
      "id" : "Bundle.entry:patient",
      "path" : "Bundle.entry",
      "sliceName" : "patient",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:patient.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Patient",
        "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:access-data-reporting-composition",
      "path" : "Bundle.entry",
      "sliceName" : "access-data-reporting-composition",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:access-data-reporting-composition.resource",
      "path" : "Bundle.entry.resource",
      "min" : 1,
      "type" : [{
        "code" : "Composition",
        "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition|0.9.6"]
      }],
      "mustSupport" : true
    }]
  }
}

```
