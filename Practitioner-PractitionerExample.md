# Practitioner Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Practitioner Example**

## Example Practitioner: Practitioner Example

Practitioner Jane Smith, NPI: 1234567893



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PractitionerExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-practitioner|6.1.0"]
  },
  "identifier" : [{
    "system" : "http://hl7.org/fhir/sid/us-npi",
    "value" : "1234567893"
  }],
  "name" : [{
    "family" : "Smith",
    "given" : ["Jane"]
  }]
}

```
