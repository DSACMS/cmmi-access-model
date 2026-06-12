# ACCESS Clinical Exclusion Diagnoses - CMS ACCESS Model API v0.9.12

## ValueSet: ACCESS Clinical Exclusion Diagnoses 

 
This value set contains ICD-10-CM diagnosis codes that represent clinical exclusions that would prevent a patient from participating in the ACCESS Model. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSClinicalExclusionDiagnosisVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSClinicalExclusionDiagnosisVS",
  "version" : "0.9.12",
  "name" : "ACCESSClinicalExclusionDiagnosisVS",
  "title" : "ACCESS Clinical Exclusion Diagnoses",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T23:08:55-04:00",
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
  "description" : "This value set contains ICD-10-CM diagnosis codes that represent clinical exclusions that would prevent a patient from participating in the ACCESS Model.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "copyright" : "This value set includes content from ICD-10-CM, which is copyright World Health Organization (WHO). ICD-10-CM codes are freely available in the public domain.",
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/sid/icd-10-cm"
    }]
  }
}

```
