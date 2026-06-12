# Unalignment Response - Unaligned Example - CMS ACCESS Model API v0.9.12

## Example Parameters: Unalignment Response - Unaligned Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "UnalignmentResponseUnalignedExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-unalign-out"]
  },
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSUnalignmentResultCS",
        "code" : "unaligned",
        "display" : "Unaligned"
      }],
      "text" : "The request to manually unalign the patient has been successfully accepted and the patient has been successfully unaligned."
    }
  }]
}

```
