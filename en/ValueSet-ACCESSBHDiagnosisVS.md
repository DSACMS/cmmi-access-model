# ACCESS Behavioral Health (BH) Track Qualifying Diagnoses - CMS ACCESS Model API v0.9.8

## ValueSet: ACCESS Behavioral Health (BH) Track Qualifying Diagnoses 

 
This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Behavioral Health (BH) track. Includes depression and anxiety disorder diagnoses. 

 **References** 

* [ACCESS BH Condition Profile](StructureDefinition-access-bh-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSBHDiagnosisVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSBHDiagnosisVS",
  "version" : "0.9.8",
  "name" : "ACCESSBHDiagnosisVS",
  "title" : "ACCESS Behavioral Health (BH) Track Qualifying Diagnoses",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-20T09:30:43-04:00",
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
  "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Behavioral Health (BH) track. Includes depression and anxiety disorder diagnoses.",
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
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "concept" : [{
        "code" : "F06.31",
        "display" : "Mood disorder due to known physiological condition with depressive features"
      },
      {
        "code" : "F06.32",
        "display" : "Mood disorder due to known physiological condition with major depressive-like episode"
      },
      {
        "code" : "F32.0",
        "display" : "Major depressive disorder, single episode, mild"
      },
      {
        "code" : "F32.1",
        "display" : "Major depressive disorder, single episode, moderate"
      },
      {
        "code" : "F32.2",
        "display" : "Major depressive disorder, single episode, severe without psychotic features"
      },
      {
        "code" : "F32.3",
        "display" : "Major depressive disorder, single episode, severe with psychotic features"
      },
      {
        "code" : "F32.4",
        "display" : "Major depressive disorder, single episode, in partial remission"
      },
      {
        "code" : "F32.5",
        "display" : "Major depressive disorder, single episode, in full remission"
      },
      {
        "code" : "F32.81",
        "display" : "Premenstrual dysphoric disorder"
      },
      {
        "code" : "F32.89",
        "display" : "Other specified depressive episodes"
      },
      {
        "code" : "F32.9",
        "display" : "Major depressive disorder, single episode, unspecified"
      },
      {
        "code" : "F32.A",
        "display" : "Depression, unspecified"
      },
      {
        "code" : "F33.0",
        "display" : "Major depressive disorder, recurrent, mild"
      },
      {
        "code" : "F33.1",
        "display" : "Major depressive disorder, recurrent, moderate"
      },
      {
        "code" : "F33.2",
        "display" : "Major depressive disorder, recurrent severe without psychotic features"
      },
      {
        "code" : "F33.3",
        "display" : "Major depressive disorder, recurrent, severe with psychotic symptoms"
      },
      {
        "code" : "F33.40",
        "display" : "Major depressive disorder, recurrent, in remission, unspecified"
      },
      {
        "code" : "F33.41",
        "display" : "Major depressive disorder, recurrent, in partial remission"
      },
      {
        "code" : "F33.42",
        "display" : "Major depressive disorder, recurrent, in full remission"
      },
      {
        "code" : "F33.8",
        "display" : "Other recurrent depressive disorders"
      },
      {
        "code" : "F33.9",
        "display" : "Major depressive disorder, recurrent, unspecified"
      },
      {
        "code" : "F34.0",
        "display" : "Cyclothymic disorder"
      },
      {
        "code" : "F34.1",
        "display" : "Dysthymic disorder"
      },
      {
        "code" : "F43.20",
        "display" : "Adjustment disorder, unspecified"
      },
      {
        "code" : "F43.21",
        "display" : "Adjustment disorder with depressed mood"
      },
      {
        "code" : "F43.22",
        "display" : "Adjustment disorder with anxiety"
      },
      {
        "code" : "F43.23",
        "display" : "Adjustment disorder with mixed anxiety and depressed mood"
      },
      {
        "code" : "F40.00",
        "display" : "Agoraphobia, unspecified"
      },
      {
        "code" : "F40.01",
        "display" : "Agoraphobia with panic disorder"
      },
      {
        "code" : "F40.02",
        "display" : "Agoraphobia without panic disorder"
      },
      {
        "code" : "F40.10",
        "display" : "Social phobia, unspecified"
      },
      {
        "code" : "F40.11",
        "display" : "Social phobia, generalized"
      },
      {
        "code" : "F40.9",
        "display" : "Phobic anxiety disorder, unspecified"
      },
      {
        "code" : "F41.0",
        "display" : "Panic disorder [episodic paroxysmal anxiety]"
      },
      {
        "code" : "F41.1",
        "display" : "Generalized anxiety disorder"
      },
      {
        "code" : "F41.3",
        "display" : "Other mixed anxiety disorders"
      },
      {
        "code" : "F41.8",
        "display" : "Other specified anxiety disorders"
      },
      {
        "code" : "F41.9",
        "display" : "Anxiety disorder, unspecified"
      }]
    }]
  }
}

```
