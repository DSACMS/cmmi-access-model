# Submission Status OperationOutcome Example - CMS ACCESS Model API v0.9.6

## Example OperationOutcome: Submission Status OperationOutcome Example

### Incomplete Submission

The data submission did not contain the following required information:

* **Error:** Missing required observation: Hemoglobin A1c (HbA1c) is required for CKM track quarterly reporting



## Resource Content

```json
{
  "resourceType" : "OperationOutcome",
  "id" : "SubmissionStatusOperationOutcomeExample",
  "language" : "en",
  "issue" : [{
    "severity" : "warning",
    "code" : "required",
    "details" : {
      "text" : "Missing required observation: Hemoglobin A1c (HbA1c) is required for CKM track quarterly reporting"
    },
    "expression" : ["Bundle.entry[2].resource.section.where(code.coding.code='CKM').section.where(code.coding.code='4548-4')"]
  }]
}

```
