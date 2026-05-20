# ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses - CMS ACCESS Model API v0.9.8

## ValueSet: ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses 

 
This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Early Cardio-Kidney-Metabolic (eCKM) track. Includes hypertension, dyslipidemia, prediabetes, and obesity diagnoses. 

 **References** 

* [ACCESS eCKM Track Condition Profile](StructureDefinition-access-eckm-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSeCKMDiagnosisVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSeCKMDiagnosisVS",
  "version" : "0.9.8",
  "name" : "ACCESSeCKMDiagnosisVS",
  "title" : "ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses",
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
  "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Early Cardio-Kidney-Metabolic (eCKM) track. Includes hypertension, dyslipidemia, prediabetes, and obesity diagnoses.",
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
        "code" : "I10",
        "display" : "Essential (primary) hypertension"
      },
      {
        "code" : "I11.0",
        "display" : "Hypertensive heart disease with heart failure"
      },
      {
        "code" : "I11.9",
        "display" : "Hypertensive heart disease without heart failure"
      },
      {
        "code" : "I12.9",
        "display" : "Hypertensive chronic kidney disease with stage 1 through stage 4 chronic kidney disease, or unspecified chronic kidney disease"
      },
      {
        "code" : "I13.0",
        "display" : "Hypertensive heart and chronic kidney disease with heart failure and stage 1 through stage 4 chronic kidney disease, or unspecified chronic kidney disease"
      },
      {
        "code" : "I13.10",
        "display" : "Hypertensive heart and chronic kidney disease without heart failure, with stage 1 through stage 4 chronic kidney disease, or unspecified chronic kidney disease"
      },
      {
        "code" : "I13.11",
        "display" : "Hypertensive heart and chronic kidney disease without heart failure, with stage 5 chronic kidney disease, or end stage renal disease"
      },
      {
        "code" : "I15.0",
        "display" : "Renovascular hypertension"
      },
      {
        "code" : "I15.1",
        "display" : "Hypertension secondary to other renal disorders"
      },
      {
        "code" : "I15.2",
        "display" : "Hypertension secondary to endocrine disorders"
      },
      {
        "code" : "I15.8",
        "display" : "Other secondary hypertension"
      },
      {
        "code" : "I15.9",
        "display" : "Secondary hypertension, unspecified"
      },
      {
        "code" : "I1A.0",
        "display" : "Resistant hypertension"
      },
      {
        "code" : "I67.4",
        "display" : "Hypertensive encephalopathy"
      },
      {
        "code" : "E78.0",
        "display" : "Pure hypercholesterolemia"
      },
      {
        "code" : "E78.00",
        "display" : "Pure hypercholesterolemia, unspecified"
      },
      {
        "code" : "E78.01",
        "display" : "Familial hypercholesterolemia"
      },
      {
        "code" : "E78.1",
        "display" : "Pure hyperglyceridemia"
      },
      {
        "code" : "E78.2",
        "display" : "Mixed hyperlipidemia"
      },
      {
        "code" : "E78.3",
        "display" : "Hyperchylomicronemia"
      },
      {
        "code" : "E78.4",
        "display" : "Other hyperlipidemia"
      },
      {
        "code" : "E78.41",
        "display" : "Elevated lipoprotein(a)"
      },
      {
        "code" : "E78.49",
        "display" : "Other hyperlipidemia"
      },
      {
        "code" : "E78.5",
        "display" : "Hyperlipidemia, unspecified"
      },
      {
        "code" : "E78.6",
        "display" : "Lipoprotein deficiency"
      },
      {
        "code" : "E78.7",
        "display" : "Disorders of bile acid and cholesterol metabolism"
      },
      {
        "code" : "R73.03",
        "display" : "Prediabetes"
      },
      {
        "code" : "E66.01",
        "display" : "Morbid (severe) obesity due to excess calories"
      },
      {
        "code" : "E66.09",
        "display" : "Other obesity due to excess calories"
      },
      {
        "code" : "E66.1",
        "display" : "Drug-induced obesity"
      },
      {
        "code" : "E66.2",
        "display" : "Morbid (severe) obesity with alveolar hypoventilation"
      },
      {
        "code" : "E66.3",
        "display" : "Overweight"
      },
      {
        "code" : "E66.8",
        "display" : "Other obesity"
      },
      {
        "code" : "E66.9",
        "display" : "Obesity, unspecified"
      }]
    }]
  }
}

```
