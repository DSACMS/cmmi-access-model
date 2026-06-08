# ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses - CMS ACCESS Model API v0.9.11

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
  "version" : "0.9.11",
  "name" : "ACCESSeCKMDiagnosisVS",
  "title" : "ACCESS Early Cardio-Kidney-Metabolic (eCKM) Track Qualifying Diagnoses",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-04T23:05:21-04:00",
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
        "code" : "E66.811",
        "display" : "Obesity, class 1"
      },
      {
        "code" : "E66.812",
        "display" : "Obesity, class 2"
      },
      {
        "code" : "E66.813",
        "display" : "Obesity, class 3"
      },
      {
        "code" : "E66.89",
        "display" : "Other obesity not elsewhere classified"
      },
      {
        "code" : "E66.9",
        "display" : "Obesity, unspecified"
      },
      {
        "code" : "E78.00",
        "display" : "Pure hypercholesterolemia, unspecified"
      },
      {
        "code" : "E78.010",
        "display" : "Homozygous familial hypercholesterolemia [HoFH]"
      },
      {
        "code" : "E78.011",
        "display" : "Heterozygous familial hypercholesterolemia [HeFH]"
      },
      {
        "code" : "E78.019",
        "display" : "Familial hypercholesterolemia, unspecified"
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
        "code" : "E78.41",
        "display" : "Elevated Lipoprotein(a)"
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
        "code" : "E78.70",
        "display" : "Disorder of bile acid and cholesterol metabolism, unspecified"
      },
      {
        "code" : "E78.71",
        "display" : "Barth syndrome"
      },
      {
        "code" : "E78.72",
        "display" : "Smith-Lemli-Opitz syndrome"
      },
      {
        "code" : "E78.79",
        "display" : "Other disorders of bile acid and cholesterol metabolism"
      },
      {
        "code" : "E78.81",
        "display" : "Lipoid dermatoarthritis"
      },
      {
        "code" : "E78.89",
        "display" : "Other lipoprotein metabolism disorders"
      },
      {
        "code" : "E78.9",
        "display" : "Disorder of lipoprotein metabolism, unspecified"
      },
      {
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
        "code" : "I12.0",
        "display" : "Hypertensive chronic kidney disease with stage 5 chronic kidney disease or end stage renal disease"
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
        "code" : "I13.2",
        "display" : "Hypertensive heart and chronic kidney disease with heart failure and with stage 5 chronic kidney disease, or end stage renal disease"
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
        "code" : "I67.0",
        "display" : "Dissection of cerebral arteries, nonruptured"
      },
      {
        "code" : "I67.1",
        "display" : "Cerebral aneurysm, nonruptured"
      },
      {
        "code" : "I67.2",
        "display" : "Cerebral atherosclerosis"
      },
      {
        "code" : "I67.3",
        "display" : "Progressive vascular leukoencephalopathy"
      },
      {
        "code" : "I67.4",
        "display" : "Hypertensive encephalopathy"
      },
      {
        "code" : "I67.5",
        "display" : "Moyamoya disease"
      },
      {
        "code" : "I67.6",
        "display" : "Nonpyogenic thrombosis of intracranial venous system"
      },
      {
        "code" : "I67.7",
        "display" : "Cerebral arteritis, not elsewhere classified"
      },
      {
        "code" : "I67.81",
        "display" : "Acute cerebrovascular insufficiency"
      },
      {
        "code" : "I67.82",
        "display" : "Cerebral ischemia"
      },
      {
        "code" : "I67.83",
        "display" : "Posterior reversible encephalopathy syndrome"
      },
      {
        "code" : "I67.841",
        "display" : "Reversible cerebrovascular vasoconstriction syndrome"
      },
      {
        "code" : "I67.848",
        "display" : "Other cerebrovascular vasospasm and vasoconstriction"
      },
      {
        "code" : "I67.850",
        "display" : "Cerebral autosomal dominant arteriopathy with subcortical infarcts and leukoencephalopathy"
      },
      {
        "code" : "I67.858",
        "display" : "Other hereditary cerebrovascular disease"
      },
      {
        "code" : "I67.89",
        "display" : "Other cerebrovascular disease"
      },
      {
        "code" : "I67.9",
        "display" : "Cerebrovascular disease, unspecified"
      },
      {
        "code" : "R73.01",
        "display" : "Impaired fasting glucose"
      },
      {
        "code" : "R73.02",
        "display" : "Impaired glucose tolerance (oral)"
      },
      {
        "code" : "R73.03",
        "display" : "Prediabetes"
      },
      {
        "code" : "R73.09",
        "display" : "Other abnormal glucose"
      },
      {
        "code" : "R73.9",
        "display" : "Hyperglycemia, unspecified"
      }]
    }]
  }
}

```
