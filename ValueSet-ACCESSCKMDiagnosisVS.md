# ACCESS Cardio-Kidney-Metabolic (CKM) Track Qualifying Diagnoses - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Cardio-Kidney-Metabolic (CKM) Track Qualifying Diagnoses**

## ValueSet: ACCESS Cardio-Kidney-Metabolic (CKM) Track Qualifying Diagnoses 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/ValueSet/ACCESSCKMDiagnosisVS | *Version*:0.9.0 |
| Active as of 2026-03-06 | *Computable Name*:ACCESSCKMDiagnosisVS |
| **Copyright/Legal**: This value set includes content from ICD-10-CM, which is copyright World Health Organization (WHO). ICD-10-CM codes are freely available in the public domain. | |

 
This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Cardio-Kidney-Metabolic (CKM) track. Includes diabetes mellitus (all types), atherosclerotic cardiovascular disease (ASCVD), and chronic kidney disease (CKD stage 3) diagnoses. 

 **References** 

* [ACCESS CKM Track Condition Profile](StructureDefinition-access-ckm-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSCKMDiagnosisVS",
  "url" : "https://globalalliantinc.com/access/ValueSet/ACCESSCKMDiagnosisVS",
  "version" : "0.9.0",
  "name" : "ACCESSCKMDiagnosisVS",
  "title" : "ACCESS Cardio-Kidney-Metabolic (CKM) Track Qualifying Diagnoses",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-06T16:03:26-05:00",
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
  "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Cardio-Kidney-Metabolic (CKM) track. Includes diabetes mellitus (all types), atherosclerotic cardiovascular disease (ASCVD), and chronic kidney disease (CKD stage 3) diagnoses.",
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
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "E08"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "E09"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "E11"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "E13"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "concept" : [{
        "code" : "I20.0",
        "display" : "Unstable angina"
      },
      {
        "code" : "I20.1",
        "display" : "Angina pectoris with documented spasm"
      },
      {
        "code" : "I20.2",
        "display" : "Refractory angina pectoris"
      },
      {
        "code" : "I20.8",
        "display" : "Other forms of angina pectoris"
      },
      {
        "code" : "I20.81",
        "display" : "Angina pectoris with coronary microvascular dysfunction"
      },
      {
        "code" : "I20.89",
        "display" : "Other forms of angina pectoris"
      },
      {
        "code" : "I24.0",
        "display" : "Acute coronary thrombosis not resulting in myocardial infarction"
      },
      {
        "code" : "I24.8",
        "display" : "Other forms of acute ischemic heart disease"
      },
      {
        "code" : "I24.81",
        "display" : "Acute coronary microvascular dysfunction"
      },
      {
        "code" : "I24.89",
        "display" : "Other forms of acute ischemic heart disease"
      },
      {
        "code" : "I25.10",
        "display" : "Atherosclerotic heart disease of native coronary artery without angina pectoris"
      },
      {
        "code" : "I25.110",
        "display" : "Atherosclerotic heart disease of native coronary artery with unstable angina pectoris"
      },
      {
        "code" : "I25.111",
        "display" : "Atherosclerotic heart disease of native coronary artery with angina pectoris with documented spasm"
      },
      {
        "code" : "I25.112",
        "display" : "Atherosclerotic heart disease of native coronary artery with refractory angina pectoris"
      },
      {
        "code" : "I25.118",
        "display" : "Atherosclerotic heart disease of native coronary artery with other forms of angina pectoris"
      },
      {
        "code" : "I25.119",
        "display" : "Atherosclerotic heart disease of native coronary artery with unspecified angina pectoris"
      },
      {
        "code" : "I25.3",
        "display" : "Aneurysm of heart"
      },
      {
        "code" : "I25.41",
        "display" : "Coronary artery aneurysm"
      },
      {
        "code" : "I25.42",
        "display" : "Coronary artery dissection"
      },
      {
        "code" : "I25.5",
        "display" : "Ischemic cardiomyopathy"
      },
      {
        "code" : "I25.6",
        "display" : "Silent myocardial ischemia"
      },
      {
        "code" : "I63.0",
        "display" : "Cerebral infarction due to thrombosis of precerebral arteries"
      },
      {
        "code" : "I63.1",
        "display" : "Cerebral infarction due to embolism of precerebral arteries"
      },
      {
        "code" : "I63.2",
        "display" : "Cerebral infarction due to unspecified occlusion or stenosis of precerebral arteries"
      },
      {
        "code" : "I63.3",
        "display" : "Cerebral infarction due to thrombosis of cerebral arteries"
      },
      {
        "code" : "I63.4",
        "display" : "Cerebral infarction due to embolism of cerebral arteries"
      },
      {
        "code" : "I63.5",
        "display" : "Cerebral infarction due to unspecified occlusion or stenosis of cerebral arteries"
      },
      {
        "code" : "I63.6",
        "display" : "Cerebral infarction due to cerebral venous thrombosis, nonpyogenic"
      },
      {
        "code" : "I63.8",
        "display" : "Other cerebral infarction"
      },
      {
        "code" : "I63.9",
        "display" : "Cerebral infarction, unspecified"
      },
      {
        "code" : "I69.30",
        "display" : "Unspecified sequelae of cerebral infarction"
      },
      {
        "code" : "I69.31",
        "display" : "Cognitive deficits following cerebral infarction"
      },
      {
        "code" : "I69.32",
        "display" : "Speech and language deficits following cerebral infarction"
      },
      {
        "code" : "I69.33",
        "display" : "Monoplegia of upper limb following cerebral infarction"
      },
      {
        "code" : "I69.34",
        "display" : "Monoplegia of lower limb following cerebral infarction"
      },
      {
        "code" : "I69.35",
        "display" : "Hemiplegia and hemiparesis following cerebral infarction"
      },
      {
        "code" : "I70.0",
        "display" : "Atherosclerosis of aorta"
      },
      {
        "code" : "I70.20",
        "display" : "Unspecified atherosclerosis of native arteries of extremities"
      },
      {
        "code" : "I70.21",
        "display" : "Atherosclerosis of native arteries of extremities with intermittent claudication"
      },
      {
        "code" : "I70.22",
        "display" : "Atherosclerosis of native arteries of extremities with rest pain"
      },
      {
        "code" : "I70.23",
        "display" : "Atherosclerosis of native arteries of right leg with ulceration"
      },
      {
        "code" : "I70.24",
        "display" : "Atherosclerosis of native arteries of left leg with ulceration"
      },
      {
        "code" : "I70.30",
        "display" : "Unspecified atherosclerosis of unspecified type of bypass graft(s) of the extremities"
      },
      {
        "code" : "I70.40",
        "display" : "Unspecified atherosclerosis of autologous vein bypass graft(s) of the extremities"
      },
      {
        "code" : "I70.50",
        "display" : "Unspecified atherosclerosis of nonautologous biological bypass graft(s) of the extremities"
      },
      {
        "code" : "I73.8",
        "display" : "Other specified peripheral vascular diseases"
      },
      {
        "code" : "I73.9",
        "display" : "Peripheral vascular disease, unspecified"
      },
      {
        "code" : "N18.30",
        "display" : "Chronic kidney disease, stage 3 unspecified"
      },
      {
        "code" : "N18.31",
        "display" : "Chronic kidney disease, stage 3a"
      },
      {
        "code" : "N18.32",
        "display" : "Chronic kidney disease, stage 3b"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "I25.7"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "G45"
      }]
    }],
    "exclude" : [{
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "concept" : [{
        "code" : "E08"
      },
      {
        "code" : "E09"
      },
      {
        "code" : "E09.0"
      },
      {
        "code" : "E09.1"
      },
      {
        "code" : "E09.2"
      },
      {
        "code" : "E09.3"
      },
      {
        "code" : "E09.31"
      },
      {
        "code" : "E09.32"
      },
      {
        "code" : "E09.33"
      },
      {
        "code" : "E09.34"
      },
      {
        "code" : "E09.35"
      },
      {
        "code" : "E09.352"
      },
      {
        "code" : "E09.353"
      },
      {
        "code" : "E09.354"
      },
      {
        "code" : "E09.355"
      },
      {
        "code" : "E09.37"
      },
      {
        "code" : "E09.4"
      },
      {
        "code" : "E09.5"
      },
      {
        "code" : "E09.6"
      },
      {
        "code" : "E09.61"
      },
      {
        "code" : "E09.62"
      },
      {
        "code" : "E09.63"
      },
      {
        "code" : "E09.64"
      },
      {
        "code" : "E11"
      },
      {
        "code" : "E11.0"
      },
      {
        "code" : "E11.1"
      },
      {
        "code" : "E11.2"
      },
      {
        "code" : "E11.3"
      },
      {
        "code" : "E11.31"
      },
      {
        "code" : "E11.32"
      },
      {
        "code" : "E11.33"
      },
      {
        "code" : "E11.34"
      },
      {
        "code" : "E11.35"
      },
      {
        "code" : "E11.352"
      },
      {
        "code" : "E11.353"
      },
      {
        "code" : "E11.354"
      },
      {
        "code" : "E11.355"
      },
      {
        "code" : "E11.37"
      },
      {
        "code" : "E11.4"
      },
      {
        "code" : "E11.5"
      },
      {
        "code" : "E11.6"
      },
      {
        "code" : "E11.61"
      },
      {
        "code" : "E11.62"
      },
      {
        "code" : "E11.63"
      },
      {
        "code" : "E11.64"
      },
      {
        "code" : "E13"
      },
      {
        "code" : "E13.0"
      },
      {
        "code" : "E13.1"
      },
      {
        "code" : "E13.2"
      },
      {
        "code" : "E13.3"
      },
      {
        "code" : "E13.31"
      },
      {
        "code" : "E13.32"
      },
      {
        "code" : "E13.33"
      },
      {
        "code" : "E13.34"
      },
      {
        "code" : "E13.35"
      },
      {
        "code" : "E13.352"
      },
      {
        "code" : "E13.353"
      },
      {
        "code" : "E13.354"
      },
      {
        "code" : "E13.355"
      },
      {
        "code" : "E13.37"
      },
      {
        "code" : "E13.37X1"
      },
      {
        "code" : "E13.37X2"
      },
      {
        "code" : "E13.37X3"
      },
      {
        "code" : "E13.37X9"
      },
      {
        "code" : "E13.4"
      },
      {
        "code" : "E13.5"
      },
      {
        "code" : "E13.6"
      },
      {
        "code" : "E13.61"
      },
      {
        "code" : "E13.62"
      },
      {
        "code" : "E13.63"
      },
      {
        "code" : "E13.64"
      },
      {
        "code" : "I25.7"
      },
      {
        "code" : "I25.70"
      },
      {
        "code" : "I25.71"
      },
      {
        "code" : "I25.72"
      },
      {
        "code" : "I25.73"
      },
      {
        "code" : "I25.75"
      },
      {
        "code" : "I25.759"
      },
      {
        "code" : "I25.76"
      },
      {
        "code" : "I25.761"
      },
      {
        "code" : "I25.762"
      },
      {
        "code" : "I25.768"
      },
      {
        "code" : "I25.769"
      },
      {
        "code" : "I25.79"
      },
      {
        "code" : "I25.790"
      },
      {
        "code" : "I25.791"
      },
      {
        "code" : "I25.792"
      },
      {
        "code" : "I25.798"
      },
      {
        "code" : "I25.799"
      },
      {
        "code" : "G45.4"
      }]
    }]
  }
}

```
