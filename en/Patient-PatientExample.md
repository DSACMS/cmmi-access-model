# Patient Example - CMS ACCESS Model API v0.9.8

## Example Patient: Patient Example

Patient John Doe, male, born 1950-01-01, Medicare ID: 1EG4TE5MK73



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-patient|6.1.0"]
  },
  "language" : "en",
  "identifier" : [{
    "type" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "MC"
      }]
    },
    "system" : "http://terminology.hl7.org/NamingSystem/cmsMBI",
    "value" : "1EG4TE5MK73"
  }],
  "name" : [{
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1950-01-01"
}

```
