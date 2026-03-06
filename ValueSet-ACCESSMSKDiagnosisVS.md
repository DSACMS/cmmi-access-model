# ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses - CMS ACCESS Model API v0.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts**](artifacts.md)
* **ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses**

## ValueSet: ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses 

| | |
| :--- | :--- |
| *Official URL*:https://globalalliantinc.com/access/ValueSet/ACCESSMSKDiagnosisVS | *Version*:0.7.0 |
| Active as of 2026-02-26 | *Computable Name*:ACCESSMSKDiagnosisVS |
| **Copyright/Legal**: This value set includes content from ICD-10-CM, which is copyright World Health Organization (WHO). ICD-10-CM codes are freely available in the public domain. | |

 
This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Musculoskeletal (MSK) track. Includes osteoarthritis, other arthropathies and joint disorders, spine and structural disorders, degenerative spine disease, back pain and radiculopathy, soft tissue/tendon/bursa disorders, and peripheral nerve and plexus disorders. 

 **References** 

* [ACCESS MSK Track Condition Profile](StructureDefinition-access-msk-condition.md)

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
  "id" : "ACCESSMSKDiagnosisVS",
  "url" : "https://globalalliantinc.com/access/ValueSet/ACCESSMSKDiagnosisVS",
  "version" : "0.7.0",
  "name" : "ACCESSMSKDiagnosisVS",
  "title" : "ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-02-26T23:16:42-05:00",
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
  "description" : "This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Musculoskeletal (MSK) track. Includes osteoarthritis, other arthropathies and joint disorders, spine and structural disorders, degenerative spine disease, back pain and radiculopathy, soft tissue/tendon/bursa disorders, and peripheral nerve and plexus disorders.",
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
        "value" : "M15"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "M16"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "M17"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "M18"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "M19"
      }]
    },
    {
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "concept" : [{
        "code" : "M12.011",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], right shoulder"
      },
      {
        "code" : "M12.012",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], left shoulder"
      },
      {
        "code" : "M12.019",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], unspecified shoulder"
      },
      {
        "code" : "M12.051",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], right hip"
      },
      {
        "code" : "M12.052",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], left hip"
      },
      {
        "code" : "M12.059",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], unspecified hip"
      },
      {
        "code" : "M12.061",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], right knee"
      },
      {
        "code" : "M12.062",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], left knee"
      },
      {
        "code" : "M12.069",
        "display" : "Chronic postrheumatic arthropathy [Jaccoud], unspecified knee"
      },
      {
        "code" : "M12.111",
        "display" : "Kaschin-Beck disease, right shoulder"
      },
      {
        "code" : "M12.112",
        "display" : "Kaschin-Beck disease, left shoulder"
      },
      {
        "code" : "M12.119",
        "display" : "Kaschin-Beck disease, unspecified shoulder"
      },
      {
        "code" : "M12.151",
        "display" : "Kaschin-Beck disease, right hip"
      },
      {
        "code" : "M12.152",
        "display" : "Kaschin-Beck disease, left hip"
      },
      {
        "code" : "M12.159",
        "display" : "Kaschin-Beck disease, unspecified hip"
      },
      {
        "code" : "M12.161",
        "display" : "Kaschin-Beck disease, right knee"
      },
      {
        "code" : "M12.162",
        "display" : "Kaschin-Beck disease, left knee"
      },
      {
        "code" : "M12.169",
        "display" : "Kaschin-Beck disease, unspecified knee"
      },
      {
        "code" : "M12.211",
        "display" : "Villonodular synovitis (pigmented), right shoulder"
      },
      {
        "code" : "M12.212",
        "display" : "Villonodular synovitis (pigmented), left shoulder"
      },
      {
        "code" : "M12.219",
        "display" : "Villonodular synovitis (pigmented), unspecified shoulder"
      },
      {
        "code" : "M12.251",
        "display" : "Villonodular synovitis (pigmented), right hip"
      },
      {
        "code" : "M12.252",
        "display" : "Villonodular synovitis (pigmented), left hip"
      },
      {
        "code" : "M12.259",
        "display" : "Villonodular synovitis (pigmented), unspecified hip"
      },
      {
        "code" : "M12.261",
        "display" : "Villonodular synovitis (pigmented), right knee"
      },
      {
        "code" : "M12.262",
        "display" : "Villonodular synovitis (pigmented), left knee"
      },
      {
        "code" : "M12.269",
        "display" : "Villonodular synovitis (pigmented), unspecified knee"
      },
      {
        "code" : "M12.811",
        "display" : "Other specific arthropathies, not elsewhere classified, right shoulder"
      },
      {
        "code" : "M12.812",
        "display" : "Other specific arthropathies, not elsewhere classified, left shoulder"
      },
      {
        "code" : "M12.819",
        "display" : "Other specific arthropathies, not elsewhere classified, unspecified shoulder"
      },
      {
        "code" : "M12.851",
        "display" : "Other specific arthropathies, not elsewhere classified, right hip"
      },
      {
        "code" : "M12.852",
        "display" : "Other specific arthropathies, not elsewhere classified, left hip"
      },
      {
        "code" : "M12.859",
        "display" : "Other specific arthropathies, not elsewhere classified, unspecified hip"
      },
      {
        "code" : "M12.861",
        "display" : "Other specific arthropathies, not elsewhere classified, right knee"
      },
      {
        "code" : "M12.862",
        "display" : "Other specific arthropathies, not elsewhere classified, left knee"
      },
      {
        "code" : "M12.869",
        "display" : "Other specific arthropathies, not elsewhere classified, unspecified knee"
      },
      {
        "code" : "M13.111",
        "display" : "Monoarthritis, not elsewhere classified, right shoulder"
      },
      {
        "code" : "M13.112",
        "display" : "Monoarthritis, not elsewhere classified, left shoulder"
      },
      {
        "code" : "M13.119",
        "display" : "Monoarthritis, not elsewhere classified, unspecified shoulder"
      },
      {
        "code" : "M13.151",
        "display" : "Monoarthritis, not elsewhere classified, right hip"
      },
      {
        "code" : "M13.152",
        "display" : "Monoarthritis, not elsewhere classified, left hip"
      },
      {
        "code" : "M13.159",
        "display" : "Monoarthritis, not elsewhere classified, unspecified hip"
      },
      {
        "code" : "M13.161",
        "display" : "Monoarthritis, not elsewhere classified, right knee"
      },
      {
        "code" : "M13.162",
        "display" : "Monoarthritis, not elsewhere classified, left knee"
      },
      {
        "code" : "M13.169",
        "display" : "Monoarthritis, not elsewhere classified, unspecified knee"
      },
      {
        "code" : "M13.811",
        "display" : "Other specified arthritis, right shoulder"
      },
      {
        "code" : "M13.812",
        "display" : "Other specified arthritis, left shoulder"
      },
      {
        "code" : "M13.819",
        "display" : "Other specified arthritis, unspecified shoulder"
      },
      {
        "code" : "M13.851",
        "display" : "Other specified arthritis, right hip"
      },
      {
        "code" : "M13.852",
        "display" : "Other specified arthritis, left hip"
      },
      {
        "code" : "M13.859",
        "display" : "Other specified arthritis, unspecified hip"
      },
      {
        "code" : "M13.861",
        "display" : "Other specified arthritis, right knee"
      },
      {
        "code" : "M13.862",
        "display" : "Other specified arthritis, left knee"
      },
      {
        "code" : "M13.869",
        "display" : "Other specified arthritis, unspecified knee"
      },
      {
        "code" : "M14.611",
        "display" : "Charcot's joint, right shoulder"
      },
      {
        "code" : "M14.612",
        "display" : "Charcot's joint, left shoulder"
      },
      {
        "code" : "M14.619",
        "display" : "Charcot's joint, unspecified shoulder"
      },
      {
        "code" : "M14.651",
        "display" : "Charcot's joint, right hip"
      },
      {
        "code" : "M14.652",
        "display" : "Charcot's joint, left hip"
      },
      {
        "code" : "M14.659",
        "display" : "Charcot's joint, unspecified hip"
      },
      {
        "code" : "M14.661",
        "display" : "Charcot's joint, right knee"
      },
      {
        "code" : "M14.662",
        "display" : "Charcot's joint, left knee"
      },
      {
        "code" : "M14.669",
        "display" : "Charcot's joint, unspecified knee"
      },
      {
        "code" : "M14.811",
        "display" : "Arthropathies in other specified diseases classified elsewhere, right shoulder"
      },
      {
        "code" : "M14.812",
        "display" : "Arthropathies in other specified diseases classified elsewhere, left shoulder"
      },
      {
        "code" : "M14.819",
        "display" : "Arthropathies in other specified diseases classified elsewhere, unspecified shoulder"
      },
      {
        "code" : "M14.851",
        "display" : "Arthropathies in other specified diseases classified elsewhere, right hip"
      },
      {
        "code" : "M14.852",
        "display" : "Arthropathies in other specified diseases classified elsewhere, left hip"
      },
      {
        "code" : "M14.859",
        "display" : "Arthropathies in other specified diseases classified elsewhere, unspecified hip"
      },
      {
        "code" : "M14.861",
        "display" : "Arthropathies in other specified diseases classified elsewhere, right knee"
      },
      {
        "code" : "M14.862",
        "display" : "Arthropathies in other specified diseases classified elsewhere, left knee"
      },
      {
        "code" : "M14.869",
        "display" : "Arthropathies in other specified diseases classified elsewhere, unspecified knee"
      },
      {
        "code" : "M14.8",
        "display" : "Arthropathies in other specified diseases classified elsewhere"
      },
      {
        "code" : "M24.011",
        "display" : "Loose body in right shoulder"
      },
      {
        "code" : "M24.012",
        "display" : "Loose body in left shoulder"
      },
      {
        "code" : "M24.019",
        "display" : "Loose body in unspecified shoulder"
      },
      {
        "code" : "M24.111",
        "display" : "Other articular cartilage disorders, right shoulder"
      },
      {
        "code" : "M24.112",
        "display" : "Other articular cartilage disorders, left shoulder"
      },
      {
        "code" : "M24.119",
        "display" : "Other articular cartilage disorders, unspecified shoulder"
      },
      {
        "code" : "M24.811",
        "display" : "Other specific joint derangements of right shoulder, not elsewhere classified"
      },
      {
        "code" : "M24.812",
        "display" : "Other specific joint derangements of left shoulder, not elsewhere classified"
      },
      {
        "code" : "M24.819",
        "display" : "Other specific joint derangements of unspecified shoulder, not elsewhere classified"
      },
      {
        "code" : "M25.50",
        "display" : "Pain in unspecified joint"
      },
      {
        "code" : "M25.511",
        "display" : "Pain in right shoulder"
      },
      {
        "code" : "M25.512",
        "display" : "Pain in left shoulder"
      },
      {
        "code" : "M25.519",
        "display" : "Pain in unspecified shoulder"
      },
      {
        "code" : "M25.521",
        "display" : "Pain in right elbow"
      },
      {
        "code" : "M25.522",
        "display" : "Pain in left elbow"
      },
      {
        "code" : "M25.529",
        "display" : "Pain in unspecified elbow"
      },
      {
        "code" : "M25.531",
        "display" : "Pain in right wrist"
      },
      {
        "code" : "M25.532",
        "display" : "Pain in left wrist"
      },
      {
        "code" : "M25.539",
        "display" : "Pain in unspecified wrist"
      },
      {
        "code" : "M25.561",
        "display" : "Pain in right knee"
      },
      {
        "code" : "M25.562",
        "display" : "Pain in left knee"
      },
      {
        "code" : "M25.569",
        "display" : "Pain in unspecified knee"
      },
      {
        "code" : "M25.60",
        "display" : "Stiffness of unspecified joint, not elsewhere classified"
      },
      {
        "code" : "M25.611",
        "display" : "Stiffness of right shoulder, not elsewhere classified"
      },
      {
        "code" : "M25.612",
        "display" : "Stiffness of left shoulder, not elsewhere classified"
      },
      {
        "code" : "M25.619",
        "display" : "Stiffness of unspecified shoulder, not elsewhere classified"
      },
      {
        "code" : "M25.40",
        "display" : "Effusion, unspecified joint"
      },
      {
        "code" : "M40.00",
        "display" : "Postural kyphosis, site unspecified"
      },
      {
        "code" : "M40.03",
        "display" : "Postural kyphosis, cervicothoracic region"
      },
      {
        "code" : "M40.04",
        "display" : "Postural kyphosis, thoracic region"
      },
      {
        "code" : "M40.05",
        "display" : "Postural kyphosis, thoracolumbar region"
      },
      {
        "code" : "M40.10",
        "display" : "Other secondary kyphosis, site unspecified"
      },
      {
        "code" : "M40.12",
        "display" : "Other secondary kyphosis, cervical region"
      },
      {
        "code" : "M40.13",
        "display" : "Other secondary kyphosis, cervicothoracic region"
      },
      {
        "code" : "M40.14",
        "display" : "Other secondary kyphosis, thoracic region"
      },
      {
        "code" : "M40.15",
        "display" : "Other secondary kyphosis, thoracolumbar region"
      },
      {
        "code" : "M40.20",
        "display" : "Unspecified kyphosis"
      },
      {
        "code" : "M40.30",
        "display" : "Flatback syndrome, site unspecified"
      },
      {
        "code" : "M40.35",
        "display" : "Flatback syndrome, thoracolumbar region"
      },
      {
        "code" : "M40.40",
        "display" : "Postural lordosis, site unspecified"
      },
      {
        "code" : "M40.45",
        "display" : "Postural lordosis, thoracolumbar region"
      },
      {
        "code" : "M41.20",
        "display" : "Other idiopathic scoliosis, site unspecified"
      },
      {
        "code" : "M41.22",
        "display" : "Other idiopathic scoliosis, cervical region"
      },
      {
        "code" : "M41.23",
        "display" : "Other idiopathic scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.24",
        "display" : "Other idiopathic scoliosis, thoracic region"
      },
      {
        "code" : "M41.25",
        "display" : "Other idiopathic scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.30",
        "display" : "Thoracogenic scoliosis, site unspecified"
      },
      {
        "code" : "M41.34",
        "display" : "Thoracogenic scoliosis, thoracic region"
      },
      {
        "code" : "M41.35",
        "display" : "Thoracogenic scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.40",
        "display" : "Neuromuscular scoliosis, site unspecified"
      },
      {
        "code" : "M41.42",
        "display" : "Neuromuscular scoliosis, cervical region"
      },
      {
        "code" : "M41.43",
        "display" : "Neuromuscular scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.44",
        "display" : "Neuromuscular scoliosis, thoracic region"
      },
      {
        "code" : "M41.45",
        "display" : "Neuromuscular scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.50",
        "display" : "Other secondary scoliosis, site unspecified"
      },
      {
        "code" : "M41.52",
        "display" : "Other secondary scoliosis, cervical region"
      },
      {
        "code" : "M41.53",
        "display" : "Other secondary scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.54",
        "display" : "Other secondary scoliosis, thoracic region"
      },
      {
        "code" : "M41.55",
        "display" : "Other secondary scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.80",
        "display" : "Other forms of scoliosis, site unspecified"
      },
      {
        "code" : "M41.82",
        "display" : "Other forms of scoliosis, cervical region"
      },
      {
        "code" : "M41.83",
        "display" : "Other forms of scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.84",
        "display" : "Other forms of scoliosis, thoracic region"
      },
      {
        "code" : "M41.85",
        "display" : "Other forms of scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.9",
        "display" : "Scoliosis, unspecified"
      },
      {
        "code" : "M42.10",
        "display" : "Adult osteochondrosis of spine, site unspecified"
      },
      {
        "code" : "M42.12",
        "display" : "Adult osteochondrosis of spine, cervical region"
      },
      {
        "code" : "M42.13",
        "display" : "Adult osteochondrosis of spine, cervicothoracic region"
      },
      {
        "code" : "M42.14",
        "display" : "Adult osteochondrosis of spine, thoracic region"
      },
      {
        "code" : "M42.15",
        "display" : "Adult osteochondrosis of spine, thoracolumbar region"
      },
      {
        "code" : "M43.00",
        "display" : "Spondylolysis, site unspecified"
      },
      {
        "code" : "M43.02",
        "display" : "Spondylolysis, cervical region"
      },
      {
        "code" : "M43.03",
        "display" : "Spondylolysis, cervicothoracic region"
      },
      {
        "code" : "M43.04",
        "display" : "Spondylolysis, thoracic region"
      },
      {
        "code" : "M43.05",
        "display" : "Spondylolysis, thoracolumbar region"
      },
      {
        "code" : "M43.10",
        "display" : "Spondylolisthesis, site unspecified"
      },
      {
        "code" : "M43.12",
        "display" : "Spondylolisthesis, cervical region"
      },
      {
        "code" : "M43.13",
        "display" : "Spondylolisthesis, cervicothoracic region"
      },
      {
        "code" : "M43.14",
        "display" : "Spondylolisthesis, thoracic region"
      },
      {
        "code" : "M43.15",
        "display" : "Spondylolisthesis, thoracolumbar region"
      },
      {
        "code" : "M43.20",
        "display" : "Fusion of spine, site unspecified"
      },
      {
        "code" : "M43.22",
        "display" : "Fusion of spine, cervical region"
      },
      {
        "code" : "M43.23",
        "display" : "Fusion of spine, cervicothoracic region"
      },
      {
        "code" : "M43.24",
        "display" : "Fusion of spine, thoracic region"
      },
      {
        "code" : "M43.25",
        "display" : "Fusion of spine, thoracolumbar region"
      },
      {
        "code" : "M43.8",
        "display" : "Other specified deforming dorsopathies"
      },
      {
        "code" : "M43.9",
        "display" : "Deforming dorsopathy, unspecified"
      },
      {
        "code" : "M47.812",
        "display" : "Spondylosis without myelopathy or radiculopathy, cervical region"
      },
      {
        "code" : "M47.813",
        "display" : "Spondylosis without myelopathy or radiculopathy, cervicothoracic region"
      },
      {
        "code" : "M47.814",
        "display" : "Spondylosis without myelopathy or radiculopathy, thoracic region"
      },
      {
        "code" : "M47.815",
        "display" : "Spondylosis without myelopathy or radiculopathy, thoracolumbar region"
      },
      {
        "code" : "M47.816",
        "display" : "Spondylosis without myelopathy or radiculopathy, lumbar region"
      },
      {
        "code" : "M47.817",
        "display" : "Spondylosis without myelopathy or radiculopathy, lumbosacral region"
      },
      {
        "code" : "M47.22",
        "display" : "Other spondylosis with radiculopathy, cervical region"
      },
      {
        "code" : "M47.23",
        "display" : "Other spondylosis with radiculopathy, cervicothoracic region"
      },
      {
        "code" : "M47.24",
        "display" : "Other spondylosis with radiculopathy, thoracic region"
      },
      {
        "code" : "M47.25",
        "display" : "Other spondylosis with radiculopathy, thoracolumbar region"
      },
      {
        "code" : "M47.26",
        "display" : "Other spondylosis with radiculopathy, lumbar region"
      },
      {
        "code" : "M47.27",
        "display" : "Other spondylosis with radiculopathy, lumbosacral region"
      },
      {
        "code" : "M47.12",
        "display" : "Other spondylosis with myelopathy, cervical region"
      },
      {
        "code" : "M47.13",
        "display" : "Other spondylosis with myelopathy, cervicothoracic region"
      },
      {
        "code" : "M47.14",
        "display" : "Other spondylosis with myelopathy, thoracic region"
      },
      {
        "code" : "M47.15",
        "display" : "Other spondylosis with myelopathy, thoracolumbar region"
      },
      {
        "code" : "M48.02",
        "display" : "Spinal stenosis, cervical region"
      },
      {
        "code" : "M48.03",
        "display" : "Spinal stenosis, cervicothoracic region"
      },
      {
        "code" : "M48.04",
        "display" : "Spinal stenosis, thoracic region"
      },
      {
        "code" : "M48.05",
        "display" : "Spinal stenosis, thoracolumbar region"
      },
      {
        "code" : "M48.06",
        "display" : "Spinal stenosis, lumbar region"
      },
      {
        "code" : "M48.07",
        "display" : "Spinal stenosis, lumbosacral region"
      },
      {
        "code" : "M48.8X2",
        "display" : "Other specified spondylopathies, cervical region"
      },
      {
        "code" : "M48.8X3",
        "display" : "Other specified spondylopathies, cervicothoracic region"
      },
      {
        "code" : "M48.8X4",
        "display" : "Other specified spondylopathies, thoracic region"
      },
      {
        "code" : "M48.8X5",
        "display" : "Other specified spondylopathies, thoracolumbar region"
      },
      {
        "code" : "M48.8X6",
        "display" : "Other specified spondylopathies, lumbar region"
      },
      {
        "code" : "M48.8X7",
        "display" : "Other specified spondylopathies, lumbosacral region"
      },
      {
        "code" : "M48.9",
        "display" : "Spondylopathy, unspecified"
      },
      {
        "code" : "M50.00",
        "display" : "Cervical disc disorder with myelopathy, unspecified cervical region"
      },
      {
        "code" : "M50.01",
        "display" : "Cervical disc disorder with myelopathy, high cervical region"
      },
      {
        "code" : "M50.02",
        "display" : "Cervical disc disorder with myelopathy, mid-cervical region"
      },
      {
        "code" : "M50.03",
        "display" : "Cervical disc disorder with myelopathy, cervicothoracic region"
      },
      {
        "code" : "M50.20",
        "display" : "Other cervical disc displacement, unspecified cervical region"
      },
      {
        "code" : "M50.21",
        "display" : "Other cervical disc displacement, high cervical region"
      },
      {
        "code" : "M50.22",
        "display" : "Other cervical disc displacement, mid-cervical region"
      },
      {
        "code" : "M50.23",
        "display" : "Other cervical disc displacement, cervicothoracic region"
      },
      {
        "code" : "M50.30",
        "display" : "Other cervical disc degeneration, unspecified cervical region"
      },
      {
        "code" : "M50.31",
        "display" : "Other cervical disc degeneration, high cervical region"
      },
      {
        "code" : "M50.32",
        "display" : "Other cervical disc degeneration, mid-cervical region"
      },
      {
        "code" : "M50.33",
        "display" : "Other cervical disc degeneration, cervicothoracic region"
      },
      {
        "code" : "M51.04",
        "display" : "Intervertebral disc disorders with myelopathy, thoracic region"
      },
      {
        "code" : "M51.05",
        "display" : "Intervertebral disc disorders with myelopathy, thoracolumbar region"
      },
      {
        "code" : "M51.06",
        "display" : "Intervertebral disc disorders with myelopathy, lumbar region"
      },
      {
        "code" : "M51.14",
        "display" : "Intervertebral disc disorders with radiculopathy, thoracic region"
      },
      {
        "code" : "M51.15",
        "display" : "Intervertebral disc disorders with radiculopathy, thoracolumbar region"
      },
      {
        "code" : "M51.16",
        "display" : "Intervertebral disc disorders with radiculopathy, lumbar region"
      },
      {
        "code" : "M51.17",
        "display" : "Intervertebral disc disorders with radiculopathy, lumbosacral region"
      },
      {
        "code" : "M51.24",
        "display" : "Other intervertebral disc displacement, thoracic region"
      },
      {
        "code" : "M51.25",
        "display" : "Other intervertebral disc displacement, thoracolumbar region"
      },
      {
        "code" : "M51.26",
        "display" : "Other intervertebral disc displacement, lumbar region"
      },
      {
        "code" : "M51.27",
        "display" : "Other intervertebral disc displacement, lumbosacral region"
      },
      {
        "code" : "M51.34",
        "display" : "Other intervertebral disc degeneration, thoracic region"
      },
      {
        "code" : "M51.35",
        "display" : "Other intervertebral disc degeneration, thoracolumbar region"
      },
      {
        "code" : "M51.36",
        "display" : "Other intervertebral disc degeneration, lumbar region"
      },
      {
        "code" : "M51.37",
        "display" : "Other intervertebral disc degeneration, lumbosacral region"
      },
      {
        "code" : "M51.9",
        "display" : "Unspecified thoracic, thoracolumbar and lumbosacral intervertebral disc disorder"
      },
      {
        "code" : "M53.0",
        "display" : "Cervicocranial syndrome"
      },
      {
        "code" : "M53.1",
        "display" : "Cervicobrachial syndrome"
      },
      {
        "code" : "M53.2",
        "display" : "Spinal instabilities"
      },
      {
        "code" : "M53.3",
        "display" : "Sacrococcygeal disorders, not elsewhere classified"
      },
      {
        "code" : "M53.80",
        "display" : "Other specified dorsopathies, site unspecified"
      },
      {
        "code" : "M53.81",
        "display" : "Other specified dorsopathies, occipito-atlanto-axial region"
      },
      {
        "code" : "M53.82",
        "display" : "Other specified dorsopathies, cervical region"
      },
      {
        "code" : "M53.83",
        "display" : "Other specified dorsopathies, cervicothoracic region"
      },
      {
        "code" : "M53.84",
        "display" : "Other specified dorsopathies, thoracic region"
      },
      {
        "code" : "M53.85",
        "display" : "Other specified dorsopathies, thoracolumbar region"
      },
      {
        "code" : "M53.86",
        "display" : "Other specified dorsopathies, lumbar region"
      },
      {
        "code" : "M53.9",
        "display" : "Dorsopathy, unspecified"
      },
      {
        "code" : "M54.2",
        "display" : "Cervicalgia"
      },
      {
        "code" : "M54.5",
        "display" : "Low back pain"
      },
      {
        "code" : "M54.6",
        "display" : "Pain in thoracic spine"
      },
      {
        "code" : "M54.8",
        "display" : "Other dorsalgia"
      },
      {
        "code" : "M54.9",
        "display" : "Dorsalgia, unspecified"
      },
      {
        "code" : "M54.10",
        "display" : "Radiculopathy, site unspecified"
      },
      {
        "code" : "M54.11",
        "display" : "Radiculopathy, occipito-atlanto-axial region"
      },
      {
        "code" : "M54.12",
        "display" : "Radiculopathy, cervical region"
      },
      {
        "code" : "M54.13",
        "display" : "Radiculopathy, cervicothoracic region"
      },
      {
        "code" : "M54.14",
        "display" : "Radiculopathy, thoracic region"
      },
      {
        "code" : "M54.15",
        "display" : "Radiculopathy, thoracolumbar region"
      },
      {
        "code" : "M54.16",
        "display" : "Radiculopathy, lumbar region"
      },
      {
        "code" : "M54.30",
        "display" : "Sciatica, unspecified side"
      },
      {
        "code" : "M54.31",
        "display" : "Sciatica, right side"
      },
      {
        "code" : "M54.32",
        "display" : "Sciatica, left side"
      },
      {
        "code" : "M54.40",
        "display" : "Lumbago with sciatica, unspecified side"
      },
      {
        "code" : "M54.41",
        "display" : "Lumbago with sciatica, right side"
      },
      {
        "code" : "M54.42",
        "display" : "Lumbago with sciatica, left side"
      },
      {
        "code" : "M54.0",
        "display" : "Panniculitis affecting regions of neck and back"
      },
      {
        "code" : "M54.89",
        "display" : "Other dorsalgia"
      },
      {
        "code" : "R52",
        "display" : "Pain, unspecified"
      },
      {
        "code" : "M79.10",
        "display" : "Myalgia, unspecified site"
      },
      {
        "code" : "M79.11",
        "display" : "Myalgia of mastication muscle"
      },
      {
        "code" : "M79.12",
        "display" : "Myalgia of auxiliary muscles, head and neck"
      },
      {
        "code" : "M79.18",
        "display" : "Myalgia, other site"
      },
      {
        "code" : "M60.811",
        "display" : "Other myositis, right shoulder"
      },
      {
        "code" : "M60.812",
        "display" : "Other myositis, left shoulder"
      },
      {
        "code" : "M60.819",
        "display" : "Other myositis, unspecified shoulder"
      },
      {
        "code" : "M60.851",
        "display" : "Other myositis, right thigh"
      },
      {
        "code" : "M60.852",
        "display" : "Other myositis, left thigh"
      },
      {
        "code" : "M60.859",
        "display" : "Other myositis, unspecified thigh"
      },
      {
        "code" : "M60.861",
        "display" : "Other myositis, right lower leg"
      },
      {
        "code" : "M60.862",
        "display" : "Other myositis, left lower leg"
      },
      {
        "code" : "M60.869",
        "display" : "Other myositis, unspecified lower leg"
      },
      {
        "code" : "M65.11",
        "display" : "Other infective (teno)synovitis, shoulder"
      },
      {
        "code" : "M65.12",
        "display" : "Other infective (teno)synovitis, elbow"
      },
      {
        "code" : "M65.19",
        "display" : "Other infective (teno)synovitis, multiple sites"
      },
      {
        "code" : "M65.22",
        "display" : "Calcific tendinitis, upper arm"
      },
      {
        "code" : "M65.29",
        "display" : "Calcific tendinitis, multiple sites"
      },
      {
        "code" : "M65.31",
        "display" : "Trigger thumb"
      },
      {
        "code" : "M65.32",
        "display" : "Trigger finger, index finger"
      },
      {
        "code" : "M65.811",
        "display" : "Other synovitis and tenosynovitis, right shoulder"
      },
      {
        "code" : "M65.812",
        "display" : "Other synovitis and tenosynovitis, left shoulder"
      },
      {
        "code" : "M65.819",
        "display" : "Other synovitis and tenosynovitis, unspecified shoulder"
      },
      {
        "code" : "M70.21",
        "display" : "Olecranon bursitis, right elbow"
      },
      {
        "code" : "M70.22",
        "display" : "Olecranon bursitis, left elbow"
      },
      {
        "code" : "M70.31",
        "display" : "Other bursitis of elbow, right elbow"
      },
      {
        "code" : "M70.32",
        "display" : "Other bursitis of elbow, left elbow"
      },
      {
        "code" : "M70.41",
        "display" : "Prepatellar bursitis, right knee"
      },
      {
        "code" : "M70.42",
        "display" : "Prepatellar bursitis, left knee"
      },
      {
        "code" : "M70.51",
        "display" : "Other bursitis of knee, right knee"
      },
      {
        "code" : "M70.52",
        "display" : "Other bursitis of knee, left knee"
      },
      {
        "code" : "M70.71",
        "display" : "Other bursitis of hip, right hip"
      },
      {
        "code" : "M70.72",
        "display" : "Other bursitis of hip, left hip"
      },
      {
        "code" : "M76.01",
        "display" : "Gluteal tendinitis, right hip"
      },
      {
        "code" : "M76.02",
        "display" : "Gluteal tendinitis, left hip"
      },
      {
        "code" : "M76.11",
        "display" : "Psoas tendinitis, right hip"
      },
      {
        "code" : "M76.12",
        "display" : "Psoas tendinitis, left hip"
      },
      {
        "code" : "M76.31",
        "display" : "Iliotibial band syndrome, right leg"
      },
      {
        "code" : "M76.32",
        "display" : "Iliotibial band syndrome, left leg"
      },
      {
        "code" : "M76.51",
        "display" : "Patellar tendinitis, right knee"
      },
      {
        "code" : "M76.52",
        "display" : "Patellar tendinitis, left knee"
      },
      {
        "code" : "M75.00",
        "display" : "Adhesive capsulitis of unspecified shoulder"
      },
      {
        "code" : "M75.01",
        "display" : "Adhesive capsulitis of right shoulder"
      },
      {
        "code" : "M75.02",
        "display" : "Adhesive capsulitis of left shoulder"
      },
      {
        "code" : "M75.100",
        "display" : "Unspecified rotator cuff tear or rupture of unspecified shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.101",
        "display" : "Unspecified rotator cuff tear or rupture of right shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.102",
        "display" : "Unspecified rotator cuff tear or rupture of left shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.40",
        "display" : "Impingement syndrome of unspecified shoulder"
      },
      {
        "code" : "M75.41",
        "display" : "Impingement syndrome of right shoulder"
      },
      {
        "code" : "M75.42",
        "display" : "Impingement syndrome of left shoulder"
      },
      {
        "code" : "M79.7",
        "display" : "Fibromyalgia"
      },
      {
        "code" : "M77",
        "display" : "Other enthesopathies"
      },
      {
        "code" : "M77.0",
        "display" : "Medial epicondylitis"
      },
      {
        "code" : "M77.1",
        "display" : "Lateral epicondylitis"
      },
      {
        "code" : "M77.2",
        "display" : "Periarthritis of wrist"
      },
      {
        "code" : "M77.3",
        "display" : "Calcaneal spur"
      },
      {
        "code" : "M77.4",
        "display" : "Metatarsalgia"
      },
      {
        "code" : "M77.5",
        "display" : "Other enthesopathy of foot and ankle"
      },
      {
        "code" : "M77.8",
        "display" : "Other enthesopathies, not elsewhere classified"
      },
      {
        "code" : "M77.9",
        "display" : "Enthesopathy, unspecified"
      },
      {
        "code" : "M72.2",
        "display" : "Plantar fascial fibromatosis"
      },
      {
        "code" : "M76.60",
        "display" : "Achilles tendinitis, unspecified leg"
      },
      {
        "code" : "M76.61",
        "display" : "Achilles tendinitis, right leg"
      },
      {
        "code" : "M76.62",
        "display" : "Achilles tendinitis, left leg"
      },
      {
        "code" : "M70.60",
        "display" : "Trochanteric bursitis, unspecified hip"
      },
      {
        "code" : "M70.61",
        "display" : "Trochanteric bursitis, right hip"
      },
      {
        "code" : "M70.62",
        "display" : "Trochanteric bursitis, left hip"
      },
      {
        "code" : "M65.4",
        "display" : "Radial styloid tenosynovitis [de Quervain]"
      },
      {
        "code" : "M79.A1",
        "display" : "Nontraumatic compartment syndrome of upper extremity"
      },
      {
        "code" : "M79.A2",
        "display" : "Nontraumatic compartment syndrome of lower extremity"
      },
      {
        "code" : "M79.A3",
        "display" : "Nontraumatic compartment syndrome of abdomen"
      },
      {
        "code" : "M79.A9",
        "display" : "Nontraumatic compartment syndrome of other sites"
      },
      {
        "code" : "G54.0",
        "display" : "Brachial plexus disorders"
      },
      {
        "code" : "G54.1",
        "display" : "Lumbosacral plexus disorders"
      },
      {
        "code" : "G54.2",
        "display" : "Cervical root disorders, not elsewhere classified"
      },
      {
        "code" : "G54.3",
        "display" : "Thoracic root disorders, not elsewhere classified"
      },
      {
        "code" : "G54.4",
        "display" : "Lumbosacral root disorders, not elsewhere classified"
      },
      {
        "code" : "G54.5",
        "display" : "Neuralgic amyotrophy"
      },
      {
        "code" : "G54.6",
        "display" : "Phantom limb syndrome with pain"
      },
      {
        "code" : "G54.7",
        "display" : "Phantom limb syndrome without pain"
      },
      {
        "code" : "G54.8",
        "display" : "Other nerve root and plexus disorders"
      },
      {
        "code" : "G54.9",
        "display" : "Nerve root and plexus disorder, unspecified"
      },
      {
        "code" : "G56.00",
        "display" : "Carpal tunnel syndrome, unspecified upper limb"
      },
      {
        "code" : "G56.01",
        "display" : "Carpal tunnel syndrome, right upper limb"
      },
      {
        "code" : "G56.02",
        "display" : "Carpal tunnel syndrome, left upper limb"
      },
      {
        "code" : "G56.20",
        "display" : "Lesion of ulnar nerve, unspecified upper limb"
      },
      {
        "code" : "G56.21",
        "display" : "Lesion of ulnar nerve, right upper limb"
      },
      {
        "code" : "G56.22",
        "display" : "Lesion of ulnar nerve, left upper limb"
      },
      {
        "code" : "G56.30",
        "display" : "Lesion of radial nerve, unspecified upper limb"
      },
      {
        "code" : "G56.31",
        "display" : "Lesion of radial nerve, right upper limb"
      },
      {
        "code" : "G56.32",
        "display" : "Lesion of radial nerve, left upper limb"
      },
      {
        "code" : "G57.00",
        "display" : "Lesion of sciatic nerve, unspecified lower limb"
      },
      {
        "code" : "G57.01",
        "display" : "Lesion of sciatic nerve, right lower limb"
      },
      {
        "code" : "G57.02",
        "display" : "Lesion of sciatic nerve, left lower limb"
      },
      {
        "code" : "G57.10",
        "display" : "Meralgia paresthetica, unspecified lower limb"
      },
      {
        "code" : "G57.11",
        "display" : "Meralgia paresthetica, right lower limb"
      },
      {
        "code" : "G57.12",
        "display" : "Meralgia paresthetica, left lower limb"
      },
      {
        "code" : "G57.40",
        "display" : "Lesion of medial popliteal nerve, unspecified lower limb"
      },
      {
        "code" : "G57.41",
        "display" : "Lesion of medial popliteal nerve, right lower limb"
      },
      {
        "code" : "G57.42",
        "display" : "Lesion of medial popliteal nerve, left lower limb"
      }]
    }],
    "exclude" : [{
      "system" : "http://hl7.org/fhir/sid/icd-10-cm",
      "concept" : [{
        "code" : "M15"
      },
      {
        "code" : "M16"
      },
      {
        "code" : "M16.1"
      },
      {
        "code" : "M16.3"
      },
      {
        "code" : "M16.5"
      },
      {
        "code" : "M17"
      },
      {
        "code" : "M17.1"
      },
      {
        "code" : "M17.3"
      },
      {
        "code" : "M18"
      },
      {
        "code" : "M18.1"
      },
      {
        "code" : "M18.3"
      },
      {
        "code" : "M18.5"
      },
      {
        "code" : "M19"
      },
      {
        "code" : "M19.0"
      },
      {
        "code" : "M19.01"
      },
      {
        "code" : "M19.02"
      },
      {
        "code" : "M19.03"
      },
      {
        "code" : "M19.04"
      },
      {
        "code" : "M19.07"
      },
      {
        "code" : "M19.1"
      },
      {
        "code" : "M19.11"
      },
      {
        "code" : "M19.12"
      },
      {
        "code" : "M19.13"
      },
      {
        "code" : "M19.14"
      },
      {
        "code" : "M19.17"
      },
      {
        "code" : "M19.2"
      },
      {
        "code" : "M19.21"
      },
      {
        "code" : "M19.22"
      },
      {
        "code" : "M19.23"
      },
      {
        "code" : "M19.24"
      },
      {
        "code" : "M19.27"
      },
      {
        "code" : "M19.9"
      }]
    }]
  }
}

```
