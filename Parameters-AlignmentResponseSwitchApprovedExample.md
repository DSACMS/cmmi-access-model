# Alignment Response - Switch Approved Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Alignment Response - Switch Approved Example**

## Example Parameters: Alignment Response - Switch Approved Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "AlignmentResponseSwitchApprovedExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-align-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSAlignmentResultCS",
        "code" : "aligned-switch-approved",
        "display" : "Aligned and switch approved"
      }],
      "text" : "The request to switch the patient's alignment from a different provider after the 3-month lock in period is accepted and the patient is considered switched and now re-aligned."
    }
  }]
}

```
