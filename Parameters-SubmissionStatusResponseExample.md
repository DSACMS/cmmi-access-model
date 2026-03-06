# Submission Status Response Example - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Submission Status Response Example**

## Example Parameters: Submission Status Response Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "SubmissionStatusResponseExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-submission-status-out"]
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
