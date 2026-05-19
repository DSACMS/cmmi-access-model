# Alignment Response - Aligned Example - CMS ACCESS Model API v0.9.8

## Example Parameters: Alignment Response - Aligned Example



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "AlignmentResponseAlignedExample",
  "meta" : {
    "profile" : ["https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-align-out"]
  },
  "language" : "en",
  "parameter" : [{
    "name" : "result",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://dsacms.github.io/cmmi-access-model/CodeSystem/ACCESSAlignmentResultCS",
        "code" : "aligned",
        "display" : "Aligned"
      }],
      "text" : "Patient is eligible and has been aligned so the ACCESS participant can now begin providing services to the patient under the model."
    }
  }]
}

```
