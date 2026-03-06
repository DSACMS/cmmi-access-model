# Alignment Response - Aligned Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Alignment Response - Aligned Example**

## Example Parameters: Alignment Response - Aligned Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "AlignmentResponseAlignedExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-align-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSAlignmentResultCS",
        "code" : "aligned",
        "display" : "Aligned"
      }],
      "text" : "Patient is eligible and has been aligned so the ACCESS participant can now begin providing services to the patient under the model."
    }
  }]
}

```
