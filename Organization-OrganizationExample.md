# Organization Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Organization Example**

## Example Organization: Organization Example

Example Healthcare Organization, ACCESS Participant ID: ACCESS1234



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrganizationExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/us/core/StructureDefinition/us-core-organization|6.1.0"]
  },
  "identifier" : [{
    "system" : "https://globalalliantinc.com/access/participant-id",
    "value" : "ACCESS1234"
  }],
  "active" : true,
  "name" : "Example Healthcare Organization"
}

```
