# Check Eligibility Response - Eligible Example - CMS ACCESS Model API v0.9.12

## Example Parameters: Check Eligibility Response - Eligible Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "CheckEligibilityResponseEligibleExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-check-eligibility-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSEligibilityResultCS",
        "code" : "eligible",
        "display" : "Eligible"
      }],
      "text" : "Patient is eligible for the ACCESS Model."
    }
  }]
}

```
