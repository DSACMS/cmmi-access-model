# Check Eligibility Response - Eligible Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Check Eligibility Response - Eligible Example**

## Example Parameters: Check Eligibility Response - Eligible Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "CheckEligibilityResponseEligibleExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-check-eligibility-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSEligibilityResultCS",
        "code" : "eligible",
        "display" : "Eligible"
      }],
      "text" : "Patient is eligible for the ACCESS Model."
    }
  }]
}

```
