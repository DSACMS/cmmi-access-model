# Unalignment Response - Unaligned Example - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **Unalignment Response - Unaligned Example**

## Example Parameters: Unalignment Response - Unaligned Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "UnalignmentResponseUnalignedExample",
  "meta" : {
    "profile" : ["https://globalalliantinc.com/access/StructureDefinition/access-unalign-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://globalalliantinc.com/access/CodeSystem/ACCESSUnalignmentResultCS",
        "code" : "unaligned",
        "display" : "Unaligned"
      }],
      "text" : "The request to manually unalign the patient has been successfully accepted and the patient has been successfully unaligned."
    }
  }]
}

```
