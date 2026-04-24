# Organization Example - CMS ACCESS Model API v0.9.6

## Example Organization: Organization Example

Example Healthcare Organization, ACCESS Participant ID: ACCES12345



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrganizationExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization|6.1.0"]
  },
  "language" : "en",
  "identifier" : [{
    "system" : "https://dsacms.github.io/cmmi-access-model/participant-id",
    "value" : "ACCES12345"
  }],
  "active" : true,
  "name" : "Example Healthcare Organization"
}

```
