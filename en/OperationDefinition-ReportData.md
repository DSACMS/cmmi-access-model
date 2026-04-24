# Submit Data Report - CMS ACCESS Model API v0.9.6

## OperationDefinition: Submit Data Report 

 
The **$report-data** operation allows a participant to submit data reporting information for the ACCESS model. 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "ReportData",
  "url" : "https://dsacms.github.io/cmmi-access-model/OperationDefinition/ReportData",
  "version" : "0.9.6",
  "name" : "ReportData",
  "title" : "Submit Data Report",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-04-24T13:45:33-04:00",
  "publisher" : "Global Alliant, Inc.",
  "contact" : [{
    "name" : "Global Alliant, Inc.",
    "telecom" : [{
      "system" : "url",
      "value" : "https://globalalliantinc.com"
    },
    {
      "system" : "email",
      "value" : "david.h@globalalliantinc.org"
    }]
  }],
  "description" : "The **$report-data** operation allows a participant to submit data reporting information for the ACCESS model.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : "report-data",
  "resource" : ["Patient"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "inputProfile" : "https://dsacms.github.io/cmmi-access-model/StructureDefinition/access-report-data-in|0.9.6",
  "parameter" : [{
    "name" : "participantID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS participant identifier. Must follow the pattern ACCES##### where ##### represents exactly 5 digits (e.g., ACCES00001, ACCES12345).",
    "type" : "Identifier"
  },
  {
    "name" : "payerID",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Payer ID for the patient.",
    "type" : "Identifier"
  },
  {
    "name" : "track",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "ACCESS track for the data submission.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSTrackVS|0.9.6"
    }
  },
  {
    "name" : "reportType",
    "use" : "in",
    "min" : 1,
    "max" : "1",
    "documentation" : "Type of data report.",
    "type" : "CodeableConcept",
    "binding" : {
      "strength" : "required",
      "valueSet" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSReportTypeVS|0.9.6"
    }
  },
  {
    "name" : "dataBundle",
    "use" : "in",
    "min" : 1,
    "max" : "*",
    "documentation" : "Data bundle to report.",
    "type" : "Bundle"
  }]
}

```
