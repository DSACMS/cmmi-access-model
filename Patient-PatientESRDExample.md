# Patient with ESRD - Unalignment Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Patient with ESRD - Unalignment Example**

## Example Patient: Patient with ESRD - Unalignment Example

Patient Jane Smith, female, born 1955-06-15, Medicare ID: 9876543210B



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientESRDExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
  },
  "identifier" : [{
    "type" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "MC"
      }]
    },
    "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
    "value" : "9876543210B"
  }],
  "name" : [{
    "family" : "Smith",
    "given" : ["Jane"]
  }],
  "gender" : "female",
  "birthDate" : "1955-06-15"
}

```
