# ACCESS Data Reporting Composition - CMS ACCESS Model API v0.9.11

## Resource Profile: ACCESS Data Reporting Composition 

 
The ACCESS Data Reporting Composition Profile defines the structure for organizing clinical data submissions to the ACCESS Model. This profile uses FHIR Composition sections to organize data by track (eCKM, CKM, MSK, BH) and measurement type. 

The ACCESS Data Reporting Composition organizes clinical data submissions using FHIR Composition sections.

### Track-Specific Sections

Each ACCESS track (eCKM, CKM, MSK, BH) has its own top-level section containing subsections for specific measurements. Only one track section should be present in a composition, corresponding to the patient's aligned track.

For detailed data collection requirements by track, see the Data Reporting API section in the [**Operations Manual**](https://github.com/DSACMS/cmmi-access-model/blob/main/ACCESS%20API%20Operations%20Manual.pdf).

### Additional Information Section

The profile includes an optional **additional-information** section that allows participants to include supplementary resources beyond the required track-specific data elements.

**IMPORTANT**: The `additional-information` section must appear after the required `track` section.

**Key Features:**

* **Section Code**: `ACCESSReportDataCompositionSectionCS#additional-information`
* **Cardinality**: 0..1 (optional section)
* **Entry References**: 0..* references to any FHIR Resource
* **Purpose**: Include resources that provide additional context or detail about the data being reported

**Common Use Cases:**

* **Supporting Documentation**: Include DiagnosticReport or DocumentReference resources that provide additional clinical context
* **Care Plan Information**: Include CarePlan resources that describe the treatment approach
* **Supplementary Observations**: Include additional measurements not explicitly required by the track

**Important Considerations:**

* All resources referenced in the additional-information section **must** be included in the containing Bundle
* The section is entirely optional - only use it when you have meaningful supplementary data to provide
* Validation focuses on required track-specific data; additional information is not validated against track requirements
* Using a standard Composition.section pattern makes this familiar to FHIR implementers

**Usages:**

* Use this Profile: [ACCESS Data Reporting Bundle](StructureDefinition-access-data-reporting-bundle.md)
* Examples for this Profile: [Composition/BHReportDataCompositionExample](Composition-BHReportDataCompositionExample.md), [Composition/CKMReportDataCompositionExample](Composition-CKMReportDataCompositionExample.md), [Composition/MSKReportDataCompositionExample](Composition-MSKReportDataCompositionExample.md) and [Composition/eCKMReportDataCompositionExample](Composition-eCKMReportDataCompositionExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/cms.fhir.us.cmmi-access-model|current/StructureDefinition/StructureDefinition-access-data-reporting-composition.json)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-access-data-reporting-composition.csv), [Excel](../StructureDefinition-access-data-reporting-composition.xlsx), [Schematron](../StructureDefinition-access-data-reporting-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "access-data-reporting-composition",
  "url" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition",
  "version" : "0.9.11",
  "name" : "ACCESSDataReportingComposition",
  "title" : "ACCESS Data Reporting Composition",
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
  "description" : "The ACCESS Data Reporting Composition Profile defines the structure for organizing clinical data submissions to the ACCESS Model. This profile uses FHIR Composition sections to organize data by track (eCKM, CKM, MSK, BH) and measurement type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
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
    "identity" : "fhirdocumentreference",
    "uri" : "http://hl7.org/fhir/documentreference",
    "name" : "FHIR DocumentReference"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Composition|4.0.1",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition",
      "path" : "Composition",
      "constraint" : [{
        "key" : "access-data-reporting-composition-only-one-track-section",
        "severity" : "error",
        "human" : "The data reporting composition can include at most one track-based section (eCKM, CKM, MSK, BH).",
        "expression" : "section.where(code.coding.where(system = 'https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS' and (code = 'eCKM' or code = 'CKM' or code = 'MSK' or code = 'BH')).exists()).count() <= 1",
        "source" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-data-reporting-composition|0.9.11"
      }]
    },
    {
      "id" : "Composition.language",
      "path" : "Composition.language",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/languages|4.0.1"
      }
    },
    {
      "id" : "Composition.date",
      "path" : "Composition.date",
      "mustSupport" : true
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitioner|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitionerrole|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.title",
      "path" : "Composition.title",
      "mustSupport" : true
    },
    {
      "id" : "Composition.custodian",
      "path" : "Composition.custodian",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "description" : "Slice based on $this value",
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Composition.section.text",
      "path" : "Composition.section.text",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM",
      "path" : "Composition.section",
      "sliceName" : "CKM",
      "short" : "Cardio-Kidney-Metabolic Track Data",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
          "code" : "CKM"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "description" : "CKM track subsections",
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:CKM.section:blood-pressure",
      "path" : "Composition.section.section",
      "sliceName" : "blood-pressure",
      "short" : "Blood Pressure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:blood-pressure.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:blood-pressure.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:lipids",
      "path" : "Composition.section.section",
      "sliceName" : "lipids",
      "short" : "Lipids",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:lipids.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18262-6"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:lipids.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:weight",
      "path" : "Composition.section.section",
      "sliceName" : "weight",
      "short" : "Weight",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:weight.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "29463-7"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:weight.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:BMI",
      "path" : "Composition.section.section",
      "sliceName" : "BMI",
      "short" : "BMI",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:BMI.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "39156-5"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:BMI.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-bmi|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:waist",
      "path" : "Composition.section.section",
      "sliceName" : "waist",
      "short" : "Waist circumference",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:waist.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "8280-0"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:waist.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:HbA1c",
      "path" : "Composition.section.section",
      "sliceName" : "HbA1c",
      "short" : "Hemoglobin A1c",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:HbA1c.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "4548-4"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:HbA1c.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:eGFR",
      "path" : "Composition.section.section",
      "sliceName" : "eGFR",
      "short" : "Estimated Glomerular Filtration Rate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:eGFR.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "98979-8"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:eGFR.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:uACR",
      "path" : "Composition.section.section",
      "sliceName" : "uACR",
      "short" : "Urine Albumin-to-Creatinine Ratio",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:CKM.section:uACR.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "14959-1"
        }]
      }
    },
    {
      "id" : "Composition.section:CKM.section:uACR.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM",
      "path" : "Composition.section",
      "sliceName" : "eCKM",
      "short" : "Early Cardio-Kidney-Metabolic Track Data",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
          "code" : "eCKM"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "description" : "eCKM track subsections",
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:eCKM.section:blood-pressure",
      "path" : "Composition.section.section",
      "sliceName" : "blood-pressure",
      "short" : "Blood Pressure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:blood-pressure.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "85354-9"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:blood-pressure.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-blood-pressure|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:lipids",
      "path" : "Composition.section.section",
      "sliceName" : "lipids",
      "short" : "Lipids",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:lipids.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18262-6"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:lipids.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-diagnosticreport-lab|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:weight",
      "path" : "Composition.section.section",
      "sliceName" : "weight",
      "short" : "Weight",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:weight.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "29463-7"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:weight.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-body-weight|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:BMI",
      "path" : "Composition.section.section",
      "sliceName" : "BMI",
      "short" : "BMI",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:BMI.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "39156-5"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:BMI.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-bmi|6.1.0",
        "http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:waist",
      "path" : "Composition.section.section",
      "sliceName" : "waist",
      "short" : "Waist circumference",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:waist.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "8280-0"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:waist.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:HbA1c",
      "path" : "Composition.section.section",
      "sliceName" : "HbA1c",
      "short" : "Hemoglobin A1c",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:eCKM.section:HbA1c.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "4548-4"
        }]
      }
    },
    {
      "id" : "Composition.section:eCKM.section:HbA1c.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-observation-clinical-result|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK",
      "path" : "Composition.section",
      "sliceName" : "MSK",
      "short" : "Musculoskeletal Track Data",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
          "code" : "MSK"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "description" : "MSK track subsections",
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF",
      "path" : "Composition.section.section",
      "sliceName" : "PROMIS-PF",
      "short" : "PROMIS Physical Function Short Form 6b",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "76804-4"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF-CAT",
      "path" : "Composition.section.section",
      "sliceName" : "PROMIS-PF-CAT",
      "short" : "PROMIS Physical Function v2.0 Computer Adaptive Test (CAT)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF-CAT.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "91722-9"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PF-CAT.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI",
      "path" : "Composition.section.section",
      "sliceName" : "PROMIS-PI",
      "short" : "PROMIS Pain Interference Short Form 6a",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "90973-9"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI-CAT",
      "path" : "Composition.section.section",
      "sliceName" : "PROMIS-PI-CAT",
      "short" : "PROMIS Pain Interference v1.1 Computer Adaptive Test (CAT)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI-CAT.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "89923-7"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-PI-CAT.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:ODI",
      "path" : "Composition.section.section",
      "sliceName" : "ODI",
      "short" : "Oswestry Disability Index",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:ODI.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "97908-8"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:ODI.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:NDI",
      "path" : "Composition.section.section",
      "sliceName" : "NDI",
      "short" : "Neck Disability Index",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:NDI.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82226-2"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:NDI.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:QuickDASH",
      "path" : "Composition.section.section",
      "sliceName" : "QuickDASH",
      "short" : "QuickDASH",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:QuickDASH.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "QuickDASH"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:QuickDASH.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PGIC",
      "path" : "Composition.section.section",
      "sliceName" : "PGIC",
      "short" : "Patient's Global Impression of Change",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PGIC.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "PGIC"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PGIC.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:KOOS-JR",
      "path" : "Composition.section.section",
      "sliceName" : "KOOS-JR",
      "short" : "Knee Injury and Osteoarthritis Outcome Score for Joint Replacement (KOOS JR)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:KOOS-JR.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82324-5"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:KOOS-JR.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:HOOS-JR",
      "path" : "Composition.section.section",
      "sliceName" : "HOOS-JR",
      "short" : "Hip Dysfunction and Osteoarthritis Outcome Score for Joint Replacement (HOOS JR)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:HOOS-JR.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82316-1"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:HOOS-JR.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-NRS",
      "path" : "Composition.section.section",
      "sliceName" : "PROMIS-NRS",
      "short" : "PROMIS Pain Intensity NRS v1.0",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-NRS.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "72514-3"
        }]
      }
    },
    {
      "id" : "Composition.section:MSK.section:PROMIS-NRS.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH",
      "path" : "Composition.section",
      "sliceName" : "BH",
      "short" : "Behavioral Health Track Data",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSTrackCS",
          "code" : "BH"
        }]
      }
    },
    {
      "id" : "Composition.section:BH.section",
      "path" : "Composition.section.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "description" : "BH track subsections",
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:BH.section:PHQ-9",
      "path" : "Composition.section.section",
      "sliceName" : "PHQ-9",
      "short" : "Depression (PHQ-9)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:PHQ-9.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "44249-1"
        }]
      }
    },
    {
      "id" : "Composition.section:BH.section:PHQ-9.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:GAD-7",
      "path" : "Composition.section.section",
      "sliceName" : "GAD-7",
      "short" : "Anxiety (GAD-7)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:GAD-7.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "69737-5"
        }]
      }
    },
    {
      "id" : "Composition.section:BH.section:GAD-7.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:WHODAS",
      "path" : "Composition.section.section",
      "sliceName" : "WHODAS",
      "short" : "WHODAS 2.0 12-item total score",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:WHODAS.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "WHODAS"
        }]
      }
    },
    {
      "id" : "Composition.section:BH.section:WHODAS.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:PGIC",
      "path" : "Composition.section.section",
      "sliceName" : "PGIC",
      "short" : "Patient's Global Impression of Change",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "BackboneElement"
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:BH.section:PGIC.code",
      "path" : "Composition.section.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "PGIC"
        }]
      }
    },
    {
      "id" : "Composition.section:BH.section:PGIC.entry",
      "path" : "Composition.section.section.entry",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-questionnaireresponse|6.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:additional-information",
      "path" : "Composition.section",
      "sliceName" : "additional-information",
      "short" : "Additional Information",
      "definition" : "Optional section containing references to supplementary resources that provide additional context or detail beyond required track-specific data elements. All referenced resources must be included in the Bundle.",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section:additional-information.code",
      "path" : "Composition.section.code",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSReportDataCompositionSectionCS",
          "code" : "additional-information"
        }]
      }
    },
    {
      "id" : "Composition.section:additional-information.entry",
      "path" : "Composition.section.entry",
      "short" : "References to supplementary resources",
      "definition" : "References to any additional FHIR resources (e.g., detailed QuestionnaireResponses, supporting documentation, care plans) that provide supplementary information for the data report",
      "mustSupport" : true
    }]
  }
}

```
