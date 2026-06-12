# ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses - CMS ACCESS Model API v0.9.12

## ValueSet: ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses 

 
This value set contains ICD-10-CM diagnosis codes that qualify a patient for the ACCESS Model Musculoskeletal (MSK) track. Includes osteoarthritis, other arthropathies and joint disorders, spine and structural disorders, degenerative spine disease, back pain and radiculopathy, soft tissue/tendon/bursa disorders, and peripheral nerve and plexus disorders. 

 **References** 

* [ACCESS MSK Track Condition Profile](StructureDefinition-access-msk-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ACCESSMSKDiagnosisVS",
  "url" : "https://dsacms.github.io/cmmi-access-model/ValueSet/ACCESSMSKDiagnosisVS",
  "version" : "0.9.12",
  "name" : "ACCESSMSKDiagnosisVS",
  "title" : "ACCESS Musculoskeletal (MSK) Track Qualifying Diagnoses",
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
      "concept" : [{
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
        "code" : "G55",
        "display" : "Nerve root and plexus compressions in diseases classified elsewhere"
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
        "code" : "G56.03",
        "display" : "Carpal tunnel syndrome, bilateral upper limbs"
      },
      {
        "code" : "G56.10",
        "display" : "Other lesions of median nerve, unspecified upper limb"
      },
      {
        "code" : "G56.11",
        "display" : "Other lesions of median nerve, right upper limb"
      },
      {
        "code" : "G56.12",
        "display" : "Other lesions of median nerve, left upper limb"
      },
      {
        "code" : "G56.13",
        "display" : "Other lesions of median nerve, bilateral upper limbs"
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
        "code" : "G56.23",
        "display" : "Lesion of ulnar nerve, bilateral upper limbs"
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
        "code" : "G56.33",
        "display" : "Lesion of radial nerve, bilateral upper limbs"
      },
      {
        "code" : "G56.40",
        "display" : "Causalgia of unspecified upper limb"
      },
      {
        "code" : "G56.41",
        "display" : "Causalgia of right upper limb"
      },
      {
        "code" : "G56.42",
        "display" : "Causalgia of left upper limb"
      },
      {
        "code" : "G56.43",
        "display" : "Causalgia of bilateral upper limbs"
      },
      {
        "code" : "G56.80",
        "display" : "Other specified mononeuropathies of unspecified upper limb"
      },
      {
        "code" : "G56.81",
        "display" : "Other specified mononeuropathies of right upper limb"
      },
      {
        "code" : "G56.82",
        "display" : "Other specified mononeuropathies of left upper limb"
      },
      {
        "code" : "G56.83",
        "display" : "Other specified mononeuropathies of bilateral upper limbs"
      },
      {
        "code" : "G56.90",
        "display" : "Unspecified mononeuropathy of unspecified upper limb"
      },
      {
        "code" : "G56.91",
        "display" : "Unspecified mononeuropathy of right upper limb"
      },
      {
        "code" : "G56.92",
        "display" : "Unspecified mononeuropathy of left upper limb"
      },
      {
        "code" : "G56.93",
        "display" : "Unspecified mononeuropathy of bilateral upper limbs"
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
        "code" : "G57.03",
        "display" : "Lesion of sciatic nerve, bilateral lower limbs"
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
        "code" : "G57.13",
        "display" : "Meralgia paresthetica, bilateral lower limbs"
      },
      {
        "code" : "G57.20",
        "display" : "Lesion of femoral nerve, unspecified lower limb"
      },
      {
        "code" : "G57.21",
        "display" : "Lesion of femoral nerve, right lower limb"
      },
      {
        "code" : "G57.22",
        "display" : "Lesion of femoral nerve, left lower limb"
      },
      {
        "code" : "G57.23",
        "display" : "Lesion of femoral nerve, bilateral lower limbs"
      },
      {
        "code" : "G57.30",
        "display" : "Lesion of lateral popliteal nerve, unspecified lower limb"
      },
      {
        "code" : "G57.31",
        "display" : "Lesion of lateral popliteal nerve, right lower limb"
      },
      {
        "code" : "G57.32",
        "display" : "Lesion of lateral popliteal nerve, left lower limb"
      },
      {
        "code" : "G57.33",
        "display" : "Lesion of lateral popliteal nerve, bilateral lower limbs"
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
      },
      {
        "code" : "G57.43",
        "display" : "Lesion of medial popliteal nerve, bilateral lower limbs"
      },
      {
        "code" : "G57.50",
        "display" : "Tarsal tunnel syndrome, unspecified lower limb"
      },
      {
        "code" : "G57.51",
        "display" : "Tarsal tunnel syndrome, right lower limb"
      },
      {
        "code" : "G57.52",
        "display" : "Tarsal tunnel syndrome, left lower limb"
      },
      {
        "code" : "G57.53",
        "display" : "Tarsal tunnel syndrome, bilateral lower limbs"
      },
      {
        "code" : "G57.60",
        "display" : "Lesion of plantar nerve, unspecified lower limb"
      },
      {
        "code" : "G57.61",
        "display" : "Lesion of plantar nerve, right lower limb"
      },
      {
        "code" : "G57.62",
        "display" : "Lesion of plantar nerve, left lower limb"
      },
      {
        "code" : "G57.63",
        "display" : "Lesion of plantar nerve, bilateral lower limbs"
      },
      {
        "code" : "G57.70",
        "display" : "Causalgia of unspecified lower limb"
      },
      {
        "code" : "G57.71",
        "display" : "Causalgia of right lower limb"
      },
      {
        "code" : "G57.72",
        "display" : "Causalgia of left lower limb"
      },
      {
        "code" : "G57.73",
        "display" : "Causalgia of bilateral lower limbs"
      },
      {
        "code" : "G57.80",
        "display" : "Other specified mononeuropathies of unspecified lower limb"
      },
      {
        "code" : "G57.81",
        "display" : "Other specified mononeuropathies of right lower limb"
      },
      {
        "code" : "G57.82",
        "display" : "Other specified mononeuropathies of left lower limb"
      },
      {
        "code" : "G57.83",
        "display" : "Other specified mononeuropathies of bilateral lower limbs"
      },
      {
        "code" : "G57.90",
        "display" : "Unspecified mononeuropathy of unspecified lower limb"
      },
      {
        "code" : "G57.91",
        "display" : "Unspecified mononeuropathy of right lower limb"
      },
      {
        "code" : "G57.92",
        "display" : "Unspecified mononeuropathy of left lower limb"
      },
      {
        "code" : "G57.93",
        "display" : "Unspecified mononeuropathy of bilateral lower limbs"
      },
      {
        "code" : "G58.0",
        "display" : "Intercostal neuropathy"
      },
      {
        "code" : "G58.7",
        "display" : "Mononeuritis multiplex"
      },
      {
        "code" : "G58.8",
        "display" : "Other specified mononeuropathies"
      },
      {
        "code" : "G58.9",
        "display" : "Mononeuropathy, unspecified"
      },
      {
        "code" : "G59",
        "display" : "Mononeuropathy in diseases classified elsewhere"
      },
      {
        "code" : "G89.0",
        "display" : "Central pain syndrome"
      },
      {
        "code" : "G89.11",
        "display" : "Acute pain due to trauma"
      },
      {
        "code" : "G89.12",
        "display" : "Acute post-thoracotomy pain"
      },
      {
        "code" : "G89.18",
        "display" : "Other acute postprocedural pain"
      },
      {
        "code" : "G89.21",
        "display" : "Chronic pain due to trauma"
      },
      {
        "code" : "G89.22",
        "display" : "Chronic post-thoracotomy pain"
      },
      {
        "code" : "G89.28",
        "display" : "Other chronic postprocedural pain"
      },
      {
        "code" : "G89.29",
        "display" : "Other chronic pain"
      },
      {
        "code" : "G89.3",
        "display" : "Neoplasm related pain (acute) (chronic)"
      },
      {
        "code" : "G89.4",
        "display" : "Chronic pain syndrome"
      },
      {
        "code" : "M15.0",
        "display" : "Primary generalized (osteo)arthritis"
      },
      {
        "code" : "M15.1",
        "display" : "Heberden's nodes (with arthropathy)"
      },
      {
        "code" : "M15.2",
        "display" : "Bouchard's nodes (with arthropathy)"
      },
      {
        "code" : "M15.3",
        "display" : "Secondary multiple arthritis"
      },
      {
        "code" : "M15.4",
        "display" : "Erosive (osteo)arthritis"
      },
      {
        "code" : "M15.8",
        "display" : "Other polyosteoarthritis"
      },
      {
        "code" : "M15.9",
        "display" : "Polyosteoarthritis, unspecified"
      },
      {
        "code" : "M16.0",
        "display" : "Bilateral primary osteoarthritis of hip"
      },
      {
        "code" : "M16.10",
        "display" : "Unilateral primary osteoarthritis, unspecified hip"
      },
      {
        "code" : "M16.11",
        "display" : "Unilateral primary osteoarthritis, right hip"
      },
      {
        "code" : "M16.12",
        "display" : "Unilateral primary osteoarthritis, left hip"
      },
      {
        "code" : "M16.2",
        "display" : "Bilateral osteoarthritis resulting from hip dysplasia"
      },
      {
        "code" : "M16.30",
        "display" : "Unilateral osteoarthritis resulting from hip dysplasia, unspecified hip"
      },
      {
        "code" : "M16.31",
        "display" : "Unilateral osteoarthritis resulting from hip dysplasia, right hip"
      },
      {
        "code" : "M16.32",
        "display" : "Unilateral osteoarthritis resulting from hip dysplasia, left hip"
      },
      {
        "code" : "M16.4",
        "display" : "Bilateral post-traumatic osteoarthritis of hip"
      },
      {
        "code" : "M16.50",
        "display" : "Unilateral post-traumatic osteoarthritis, unspecified hip"
      },
      {
        "code" : "M16.51",
        "display" : "Unilateral post-traumatic osteoarthritis, right hip"
      },
      {
        "code" : "M16.52",
        "display" : "Unilateral post-traumatic osteoarthritis, left hip"
      },
      {
        "code" : "M16.6",
        "display" : "Other bilateral secondary osteoarthritis of hip"
      },
      {
        "code" : "M16.7",
        "display" : "Other unilateral secondary osteoarthritis of hip"
      },
      {
        "code" : "M16.9",
        "display" : "Osteoarthritis of hip, unspecified"
      },
      {
        "code" : "M17.0",
        "display" : "Bilateral primary osteoarthritis of knee"
      },
      {
        "code" : "M17.10",
        "display" : "Unilateral primary osteoarthritis, unspecified knee"
      },
      {
        "code" : "M17.11",
        "display" : "Unilateral primary osteoarthritis, right knee"
      },
      {
        "code" : "M17.12",
        "display" : "Unilateral primary osteoarthritis, left knee"
      },
      {
        "code" : "M17.2",
        "display" : "Bilateral post-traumatic osteoarthritis of knee"
      },
      {
        "code" : "M17.30",
        "display" : "Unilateral post-traumatic osteoarthritis, unspecified knee"
      },
      {
        "code" : "M17.31",
        "display" : "Unilateral post-traumatic osteoarthritis, right knee"
      },
      {
        "code" : "M17.32",
        "display" : "Unilateral post-traumatic osteoarthritis, left knee"
      },
      {
        "code" : "M17.4",
        "display" : "Other bilateral secondary osteoarthritis of knee"
      },
      {
        "code" : "M17.5",
        "display" : "Other unilateral secondary osteoarthritis of knee"
      },
      {
        "code" : "M17.9",
        "display" : "Osteoarthritis of knee, unspecified"
      },
      {
        "code" : "M18.0",
        "display" : "Bilateral primary osteoarthritis of first carpometacarpal joints"
      },
      {
        "code" : "M18.10",
        "display" : "Unilateral primary osteoarthritis of first carpometacarpal joint, unspecified hand"
      },
      {
        "code" : "M18.11",
        "display" : "Unilateral primary osteoarthritis of first carpometacarpal joint, right hand"
      },
      {
        "code" : "M18.12",
        "display" : "Unilateral primary osteoarthritis of first carpometacarpal joint, left hand"
      },
      {
        "code" : "M18.2",
        "display" : "Bilateral post-traumatic osteoarthritis of first carpometacarpal joints"
      },
      {
        "code" : "M18.30",
        "display" : "Unilateral post-traumatic osteoarthritis of first carpometacarpal joint, unspecified hand"
      },
      {
        "code" : "M18.31",
        "display" : "Unilateral post-traumatic osteoarthritis of first carpometacarpal joint, right hand"
      },
      {
        "code" : "M18.32",
        "display" : "Unilateral post-traumatic osteoarthritis of first carpometacarpal joint, left hand"
      },
      {
        "code" : "M18.4",
        "display" : "Other bilateral secondary osteoarthritis of first carpometacarpal joints"
      },
      {
        "code" : "M18.50",
        "display" : "Other unilateral secondary osteoarthritis of first carpometacarpal joint, unspecified hand"
      },
      {
        "code" : "M18.51",
        "display" : "Other unilateral secondary osteoarthritis of first carpometacarpal joint, right hand"
      },
      {
        "code" : "M18.52",
        "display" : "Other unilateral secondary osteoarthritis of first carpometacarpal joint, left hand"
      },
      {
        "code" : "M18.9",
        "display" : "Osteoarthritis of first carpometacarpal joint, unspecified"
      },
      {
        "code" : "M19.011",
        "display" : "Primary osteoarthritis, right shoulder"
      },
      {
        "code" : "M19.012",
        "display" : "Primary osteoarthritis, left shoulder"
      },
      {
        "code" : "M19.019",
        "display" : "Primary osteoarthritis, unspecified shoulder"
      },
      {
        "code" : "M19.021",
        "display" : "Primary osteoarthritis, right elbow"
      },
      {
        "code" : "M19.022",
        "display" : "Primary osteoarthritis, left elbow"
      },
      {
        "code" : "M19.029",
        "display" : "Primary osteoarthritis, unspecified elbow"
      },
      {
        "code" : "M19.031",
        "display" : "Primary osteoarthritis, right wrist"
      },
      {
        "code" : "M19.032",
        "display" : "Primary osteoarthritis, left wrist"
      },
      {
        "code" : "M19.039",
        "display" : "Primary osteoarthritis, unspecified wrist"
      },
      {
        "code" : "M19.041",
        "display" : "Primary osteoarthritis, right hand"
      },
      {
        "code" : "M19.042",
        "display" : "Primary osteoarthritis, left hand"
      },
      {
        "code" : "M19.049",
        "display" : "Primary osteoarthritis, unspecified hand"
      },
      {
        "code" : "M19.071",
        "display" : "Primary osteoarthritis, right ankle and foot"
      },
      {
        "code" : "M19.072",
        "display" : "Primary osteoarthritis, left ankle and foot"
      },
      {
        "code" : "M19.079",
        "display" : "Primary osteoarthritis, unspecified ankle and foot"
      },
      {
        "code" : "M19.09",
        "display" : "Primary osteoarthritis, other specified site"
      },
      {
        "code" : "M19.111",
        "display" : "Post-traumatic osteoarthritis, right shoulder"
      },
      {
        "code" : "M19.112",
        "display" : "Post-traumatic osteoarthritis, left shoulder"
      },
      {
        "code" : "M19.119",
        "display" : "Post-traumatic osteoarthritis, unspecified shoulder"
      },
      {
        "code" : "M19.121",
        "display" : "Post-traumatic osteoarthritis, right elbow"
      },
      {
        "code" : "M19.122",
        "display" : "Post-traumatic osteoarthritis, left elbow"
      },
      {
        "code" : "M19.129",
        "display" : "Post-traumatic osteoarthritis, unspecified elbow"
      },
      {
        "code" : "M19.131",
        "display" : "Post-traumatic osteoarthritis, right wrist"
      },
      {
        "code" : "M19.132",
        "display" : "Post-traumatic osteoarthritis, left wrist"
      },
      {
        "code" : "M19.139",
        "display" : "Post-traumatic osteoarthritis, unspecified wrist"
      },
      {
        "code" : "M19.141",
        "display" : "Post-traumatic osteoarthritis, right hand"
      },
      {
        "code" : "M19.142",
        "display" : "Post-traumatic osteoarthritis, left hand"
      },
      {
        "code" : "M19.149",
        "display" : "Post-traumatic osteoarthritis, unspecified hand"
      },
      {
        "code" : "M19.171",
        "display" : "Post-traumatic osteoarthritis, right ankle and foot"
      },
      {
        "code" : "M19.172",
        "display" : "Post-traumatic osteoarthritis, left ankle and foot"
      },
      {
        "code" : "M19.179",
        "display" : "Post-traumatic osteoarthritis, unspecified ankle and foot"
      },
      {
        "code" : "M19.19",
        "display" : "Post-traumatic osteoarthritis, other specified site"
      },
      {
        "code" : "M19.211",
        "display" : "Secondary osteoarthritis, right shoulder"
      },
      {
        "code" : "M19.212",
        "display" : "Secondary osteoarthritis, left shoulder"
      },
      {
        "code" : "M19.219",
        "display" : "Secondary osteoarthritis, unspecified shoulder"
      },
      {
        "code" : "M19.221",
        "display" : "Secondary osteoarthritis, right elbow"
      },
      {
        "code" : "M19.222",
        "display" : "Secondary osteoarthritis, left elbow"
      },
      {
        "code" : "M19.229",
        "display" : "Secondary osteoarthritis, unspecified elbow"
      },
      {
        "code" : "M19.231",
        "display" : "Secondary osteoarthritis, right wrist"
      },
      {
        "code" : "M19.232",
        "display" : "Secondary osteoarthritis, left wrist"
      },
      {
        "code" : "M19.239",
        "display" : "Secondary osteoarthritis, unspecified wrist"
      },
      {
        "code" : "M19.241",
        "display" : "Secondary osteoarthritis, right hand"
      },
      {
        "code" : "M19.242",
        "display" : "Secondary osteoarthritis, left hand"
      },
      {
        "code" : "M19.249",
        "display" : "Secondary osteoarthritis, unspecified hand"
      },
      {
        "code" : "M19.271",
        "display" : "Secondary osteoarthritis, right ankle and foot"
      },
      {
        "code" : "M19.272",
        "display" : "Secondary osteoarthritis, left ankle and foot"
      },
      {
        "code" : "M19.279",
        "display" : "Secondary osteoarthritis, unspecified ankle and foot"
      },
      {
        "code" : "M19.29",
        "display" : "Secondary osteoarthritis, other specified site"
      },
      {
        "code" : "M19.90",
        "display" : "Unspecified osteoarthritis, unspecified site"
      },
      {
        "code" : "M19.91",
        "display" : "Primary osteoarthritis, unspecified site"
      },
      {
        "code" : "M19.92",
        "display" : "Post-traumatic osteoarthritis, unspecified site"
      },
      {
        "code" : "M19.93",
        "display" : "Secondary osteoarthritis, unspecified site"
      },
      {
        "code" : "M20.001",
        "display" : "Unspecified deformity of right finger(s)"
      },
      {
        "code" : "M20.002",
        "display" : "Unspecified deformity of left finger(s)"
      },
      {
        "code" : "M20.009",
        "display" : "Unspecified deformity of unspecified finger(s)"
      },
      {
        "code" : "M20.011",
        "display" : "Mallet finger of right finger(s)"
      },
      {
        "code" : "M20.012",
        "display" : "Mallet finger of left finger(s)"
      },
      {
        "code" : "M20.019",
        "display" : "Mallet finger of unspecified finger(s)"
      },
      {
        "code" : "M20.021",
        "display" : "Boutonniere deformity of right finger(s)"
      },
      {
        "code" : "M20.022",
        "display" : "Boutonniere deformity of left finger(s)"
      },
      {
        "code" : "M20.029",
        "display" : "Boutonniere deformity of unspecified finger(s)"
      },
      {
        "code" : "M20.031",
        "display" : "Swan-neck deformity of right finger(s)"
      },
      {
        "code" : "M20.032",
        "display" : "Swan-neck deformity of left finger(s)"
      },
      {
        "code" : "M20.039",
        "display" : "Swan-neck deformity of unspecified finger(s)"
      },
      {
        "code" : "M20.091",
        "display" : "Other deformity of right finger(s)"
      },
      {
        "code" : "M20.092",
        "display" : "Other deformity of left finger(s)"
      },
      {
        "code" : "M20.099",
        "display" : "Other deformity of finger(s), unspecified finger(s)"
      },
      {
        "code" : "M20.10",
        "display" : "Hallux valgus (acquired), unspecified foot"
      },
      {
        "code" : "M20.11",
        "display" : "Hallux valgus (acquired), right foot"
      },
      {
        "code" : "M20.12",
        "display" : "Hallux valgus (acquired), left foot"
      },
      {
        "code" : "M20.20",
        "display" : "Hallux rigidus, unspecified foot"
      },
      {
        "code" : "M20.21",
        "display" : "Hallux rigidus, right foot"
      },
      {
        "code" : "M20.22",
        "display" : "Hallux rigidus, left foot"
      },
      {
        "code" : "M20.30",
        "display" : "Hallux varus (acquired), unspecified foot"
      },
      {
        "code" : "M20.31",
        "display" : "Hallux varus (acquired), right foot"
      },
      {
        "code" : "M20.32",
        "display" : "Hallux varus (acquired), left foot"
      },
      {
        "code" : "M20.40",
        "display" : "Other hammer toe(s) (acquired), unspecified foot"
      },
      {
        "code" : "M20.41",
        "display" : "Other hammer toe(s) (acquired), right foot"
      },
      {
        "code" : "M20.42",
        "display" : "Other hammer toe(s) (acquired), left foot"
      },
      {
        "code" : "M20.5X1",
        "display" : "Other deformities of toe(s) (acquired), right foot"
      },
      {
        "code" : "M20.5X2",
        "display" : "Other deformities of toe(s) (acquired), left foot"
      },
      {
        "code" : "M20.5X9",
        "display" : "Other deformities of toe(s) (acquired), unspecified foot"
      },
      {
        "code" : "M20.60",
        "display" : "Acquired deformities of toe(s), unspecified, unspecified foot"
      },
      {
        "code" : "M20.61",
        "display" : "Acquired deformities of toe(s), unspecified, right foot"
      },
      {
        "code" : "M20.62",
        "display" : "Acquired deformities of toe(s), unspecified, left foot"
      },
      {
        "code" : "M21.00",
        "display" : "Valgus deformity, not elsewhere classified, unspecified site"
      },
      {
        "code" : "M21.021",
        "display" : "Valgus deformity, not elsewhere classified, right elbow"
      },
      {
        "code" : "M21.022",
        "display" : "Valgus deformity, not elsewhere classified, left elbow"
      },
      {
        "code" : "M21.029",
        "display" : "Valgus deformity, not elsewhere classified, unspecified elbow"
      },
      {
        "code" : "M21.051",
        "display" : "Valgus deformity, not elsewhere classified, right hip"
      },
      {
        "code" : "M21.052",
        "display" : "Valgus deformity, not elsewhere classified, left hip"
      },
      {
        "code" : "M21.059",
        "display" : "Valgus deformity, not elsewhere classified, unspecified hip"
      },
      {
        "code" : "M21.061",
        "display" : "Valgus deformity, not elsewhere classified, right knee"
      },
      {
        "code" : "M21.062",
        "display" : "Valgus deformity, not elsewhere classified, left knee"
      },
      {
        "code" : "M21.069",
        "display" : "Valgus deformity, not elsewhere classified, unspecified knee"
      },
      {
        "code" : "M21.071",
        "display" : "Valgus deformity, not elsewhere classified, right ankle"
      },
      {
        "code" : "M21.072",
        "display" : "Valgus deformity, not elsewhere classified, left ankle"
      },
      {
        "code" : "M21.079",
        "display" : "Valgus deformity, not elsewhere classified, unspecified ankle"
      },
      {
        "code" : "M21.10",
        "display" : "Varus deformity, not elsewhere classified, unspecified site"
      },
      {
        "code" : "M21.121",
        "display" : "Varus deformity, not elsewhere classified, right elbow"
      },
      {
        "code" : "M21.122",
        "display" : "Varus deformity, not elsewhere classified, left elbow"
      },
      {
        "code" : "M21.129",
        "display" : "Varus deformity, not elsewhere classified, unspecified elbow"
      },
      {
        "code" : "M21.151",
        "display" : "Varus deformity, not elsewhere classified, right hip"
      },
      {
        "code" : "M21.152",
        "display" : "Varus deformity, not elsewhere classified, left hip"
      },
      {
        "code" : "M21.159",
        "display" : "Varus deformity, not elsewhere classified, unspecified hip"
      },
      {
        "code" : "M21.161",
        "display" : "Varus deformity, not elsewhere classified, right knee"
      },
      {
        "code" : "M21.162",
        "display" : "Varus deformity, not elsewhere classified, left knee"
      },
      {
        "code" : "M21.169",
        "display" : "Varus deformity, not elsewhere classified, unspecified knee"
      },
      {
        "code" : "M21.171",
        "display" : "Varus deformity, not elsewhere classified, right ankle"
      },
      {
        "code" : "M21.172",
        "display" : "Varus deformity, not elsewhere classified, left ankle"
      },
      {
        "code" : "M21.179",
        "display" : "Varus deformity, not elsewhere classified, unspecified ankle"
      },
      {
        "code" : "M21.20",
        "display" : "Flexion deformity, unspecified site"
      },
      {
        "code" : "M21.211",
        "display" : "Flexion deformity, right shoulder"
      },
      {
        "code" : "M21.212",
        "display" : "Flexion deformity, left shoulder"
      },
      {
        "code" : "M21.219",
        "display" : "Flexion deformity, unspecified shoulder"
      },
      {
        "code" : "M21.221",
        "display" : "Flexion deformity, right elbow"
      },
      {
        "code" : "M21.222",
        "display" : "Flexion deformity, left elbow"
      },
      {
        "code" : "M21.229",
        "display" : "Flexion deformity, unspecified elbow"
      },
      {
        "code" : "M21.231",
        "display" : "Flexion deformity, right wrist"
      },
      {
        "code" : "M21.232",
        "display" : "Flexion deformity, left wrist"
      },
      {
        "code" : "M21.239",
        "display" : "Flexion deformity, unspecified wrist"
      },
      {
        "code" : "M21.241",
        "display" : "Flexion deformity, right finger joints"
      },
      {
        "code" : "M21.242",
        "display" : "Flexion deformity, left finger joints"
      },
      {
        "code" : "M21.249",
        "display" : "Flexion deformity, unspecified finger joints"
      },
      {
        "code" : "M21.251",
        "display" : "Flexion deformity, right hip"
      },
      {
        "code" : "M21.252",
        "display" : "Flexion deformity, left hip"
      },
      {
        "code" : "M21.259",
        "display" : "Flexion deformity, unspecified hip"
      },
      {
        "code" : "M21.261",
        "display" : "Flexion deformity, right knee"
      },
      {
        "code" : "M21.262",
        "display" : "Flexion deformity, left knee"
      },
      {
        "code" : "M21.269",
        "display" : "Flexion deformity, unspecified knee"
      },
      {
        "code" : "M21.271",
        "display" : "Flexion deformity, right ankle and toes"
      },
      {
        "code" : "M21.272",
        "display" : "Flexion deformity, left ankle and toes"
      },
      {
        "code" : "M21.279",
        "display" : "Flexion deformity, unspecified ankle and toes"
      },
      {
        "code" : "M21.331",
        "display" : "Wrist drop, right wrist"
      },
      {
        "code" : "M21.332",
        "display" : "Wrist drop, left wrist"
      },
      {
        "code" : "M21.339",
        "display" : "Wrist drop, unspecified wrist"
      },
      {
        "code" : "M21.371",
        "display" : "Foot drop, right foot"
      },
      {
        "code" : "M21.372",
        "display" : "Foot drop, left foot"
      },
      {
        "code" : "M21.379",
        "display" : "Foot drop, unspecified foot"
      },
      {
        "code" : "M21.40",
        "display" : "Flat foot [pes planus] (acquired), unspecified foot"
      },
      {
        "code" : "M21.41",
        "display" : "Flat foot [pes planus] (acquired), right foot"
      },
      {
        "code" : "M21.42",
        "display" : "Flat foot [pes planus] (acquired), left foot"
      },
      {
        "code" : "M21.511",
        "display" : "Acquired clawhand, right hand"
      },
      {
        "code" : "M21.512",
        "display" : "Acquired clawhand, left hand"
      },
      {
        "code" : "M21.519",
        "display" : "Acquired clawhand, unspecified hand"
      },
      {
        "code" : "M21.521",
        "display" : "Acquired clubhand, right hand"
      },
      {
        "code" : "M21.522",
        "display" : "Acquired clubhand, left hand"
      },
      {
        "code" : "M21.529",
        "display" : "Acquired clubhand, unspecified hand"
      },
      {
        "code" : "M21.531",
        "display" : "Acquired clawfoot, right foot"
      },
      {
        "code" : "M21.532",
        "display" : "Acquired clawfoot, left foot"
      },
      {
        "code" : "M21.539",
        "display" : "Acquired clawfoot, unspecified foot"
      },
      {
        "code" : "M21.541",
        "display" : "Acquired clubfoot, right foot"
      },
      {
        "code" : "M21.542",
        "display" : "Acquired clubfoot, left foot"
      },
      {
        "code" : "M21.549",
        "display" : "Acquired clubfoot, unspecified foot"
      },
      {
        "code" : "M21.611",
        "display" : "Bunion of right foot"
      },
      {
        "code" : "M21.612",
        "display" : "Bunion of left foot"
      },
      {
        "code" : "M21.619",
        "display" : "Bunion of unspecified foot"
      },
      {
        "code" : "M21.621",
        "display" : "Bunionette of right foot"
      },
      {
        "code" : "M21.622",
        "display" : "Bunionette of left foot"
      },
      {
        "code" : "M21.629",
        "display" : "Bunionette of unspecified foot"
      },
      {
        "code" : "M21.6X1",
        "display" : "Other acquired deformities of right foot"
      },
      {
        "code" : "M21.6X2",
        "display" : "Other acquired deformities of left foot"
      },
      {
        "code" : "M21.6X9",
        "display" : "Other acquired deformities of unspecified foot"
      },
      {
        "code" : "M21.70",
        "display" : "Unequal limb length (acquired), unspecified site"
      },
      {
        "code" : "M21.721",
        "display" : "Unequal limb length (acquired), right humerus"
      },
      {
        "code" : "M21.722",
        "display" : "Unequal limb length (acquired), left humerus"
      },
      {
        "code" : "M21.729",
        "display" : "Unequal limb length (acquired), unspecified humerus"
      },
      {
        "code" : "M21.731",
        "display" : "Unequal limb length (acquired), right ulna"
      },
      {
        "code" : "M21.732",
        "display" : "Unequal limb length (acquired), left ulna"
      },
      {
        "code" : "M21.733",
        "display" : "Unequal limb length (acquired), right radius"
      },
      {
        "code" : "M21.734",
        "display" : "Unequal limb length (acquired), left radius"
      },
      {
        "code" : "M21.739",
        "display" : "Unequal limb length (acquired), unspecified ulna and radius"
      },
      {
        "code" : "M21.751",
        "display" : "Unequal limb length (acquired), right femur"
      },
      {
        "code" : "M21.752",
        "display" : "Unequal limb length (acquired), left femur"
      },
      {
        "code" : "M21.759",
        "display" : "Unequal limb length (acquired), unspecified femur"
      },
      {
        "code" : "M21.761",
        "display" : "Unequal limb length (acquired), right tibia"
      },
      {
        "code" : "M21.762",
        "display" : "Unequal limb length (acquired), left tibia"
      },
      {
        "code" : "M21.763",
        "display" : "Unequal limb length (acquired), right fibula"
      },
      {
        "code" : "M21.764",
        "display" : "Unequal limb length (acquired), left fibula"
      },
      {
        "code" : "M21.769",
        "display" : "Unequal limb length (acquired), unspecified tibia and fibula"
      },
      {
        "code" : "M21.80",
        "display" : "Other specified acquired deformities of unspecified limb"
      },
      {
        "code" : "M21.821",
        "display" : "Other specified acquired deformities of right upper arm"
      },
      {
        "code" : "M21.822",
        "display" : "Other specified acquired deformities of left upper arm"
      },
      {
        "code" : "M21.829",
        "display" : "Other specified acquired deformities of unspecified upper arm"
      },
      {
        "code" : "M21.831",
        "display" : "Other specified acquired deformities of right forearm"
      },
      {
        "code" : "M21.832",
        "display" : "Other specified acquired deformities of left forearm"
      },
      {
        "code" : "M21.839",
        "display" : "Other specified acquired deformities of unspecified forearm"
      },
      {
        "code" : "M21.851",
        "display" : "Other specified acquired deformities of right thigh"
      },
      {
        "code" : "M21.852",
        "display" : "Other specified acquired deformities of left thigh"
      },
      {
        "code" : "M21.859",
        "display" : "Other specified acquired deformities of unspecified thigh"
      },
      {
        "code" : "M21.861",
        "display" : "Other specified acquired deformities of right lower leg"
      },
      {
        "code" : "M21.862",
        "display" : "Other specified acquired deformities of left lower leg"
      },
      {
        "code" : "M21.869",
        "display" : "Other specified acquired deformities of unspecified lower leg"
      },
      {
        "code" : "M21.90",
        "display" : "Unspecified acquired deformity of unspecified limb"
      },
      {
        "code" : "M21.921",
        "display" : "Unspecified acquired deformity of right upper arm"
      },
      {
        "code" : "M21.922",
        "display" : "Unspecified acquired deformity of left upper arm"
      },
      {
        "code" : "M21.929",
        "display" : "Unspecified acquired deformity of unspecified upper arm"
      },
      {
        "code" : "M21.931",
        "display" : "Unspecified acquired deformity of right forearm"
      },
      {
        "code" : "M21.932",
        "display" : "Unspecified acquired deformity of left forearm"
      },
      {
        "code" : "M21.939",
        "display" : "Unspecified acquired deformity of unspecified forearm"
      },
      {
        "code" : "M21.941",
        "display" : "Unspecified acquired deformity of hand, right hand"
      },
      {
        "code" : "M21.942",
        "display" : "Unspecified acquired deformity of hand, left hand"
      },
      {
        "code" : "M21.949",
        "display" : "Unspecified acquired deformity of hand, unspecified hand"
      },
      {
        "code" : "M21.951",
        "display" : "Unspecified acquired deformity of right thigh"
      },
      {
        "code" : "M21.952",
        "display" : "Unspecified acquired deformity of left thigh"
      },
      {
        "code" : "M21.959",
        "display" : "Unspecified acquired deformity of unspecified thigh"
      },
      {
        "code" : "M21.961",
        "display" : "Unspecified acquired deformity of right lower leg"
      },
      {
        "code" : "M21.962",
        "display" : "Unspecified acquired deformity of left lower leg"
      },
      {
        "code" : "M21.969",
        "display" : "Unspecified acquired deformity of unspecified lower leg"
      },
      {
        "code" : "M22.00",
        "display" : "Recurrent dislocation of patella, unspecified knee"
      },
      {
        "code" : "M22.01",
        "display" : "Recurrent dislocation of patella, right knee"
      },
      {
        "code" : "M22.02",
        "display" : "Recurrent dislocation of patella, left knee"
      },
      {
        "code" : "M22.10",
        "display" : "Recurrent subluxation of patella, unspecified knee"
      },
      {
        "code" : "M22.11",
        "display" : "Recurrent subluxation of patella, right knee"
      },
      {
        "code" : "M22.12",
        "display" : "Recurrent subluxation of patella, left knee"
      },
      {
        "code" : "M22.2X1",
        "display" : "Patellofemoral disorders, right knee"
      },
      {
        "code" : "M22.2X2",
        "display" : "Patellofemoral disorders, left knee"
      },
      {
        "code" : "M22.2X9",
        "display" : "Patellofemoral disorders, unspecified knee"
      },
      {
        "code" : "M22.3X1",
        "display" : "Other derangements of patella, right knee"
      },
      {
        "code" : "M22.3X2",
        "display" : "Other derangements of patella, left knee"
      },
      {
        "code" : "M22.3X9",
        "display" : "Other derangements of patella, unspecified knee"
      },
      {
        "code" : "M22.40",
        "display" : "Chondromalacia patellae, unspecified knee"
      },
      {
        "code" : "M22.41",
        "display" : "Chondromalacia patellae, right knee"
      },
      {
        "code" : "M22.42",
        "display" : "Chondromalacia patellae, left knee"
      },
      {
        "code" : "M22.8X1",
        "display" : "Other disorders of patella, right knee"
      },
      {
        "code" : "M22.8X2",
        "display" : "Other disorders of patella, left knee"
      },
      {
        "code" : "M22.8X9",
        "display" : "Other disorders of patella, unspecified knee"
      },
      {
        "code" : "M22.90",
        "display" : "Unspecified disorder of patella, unspecified knee"
      },
      {
        "code" : "M22.91",
        "display" : "Unspecified disorder of patella, right knee"
      },
      {
        "code" : "M22.92",
        "display" : "Unspecified disorder of patella, left knee"
      },
      {
        "code" : "M23.000",
        "display" : "Cystic meniscus, unspecified lateral meniscus, right knee"
      },
      {
        "code" : "M23.001",
        "display" : "Cystic meniscus, unspecified lateral meniscus, left knee"
      },
      {
        "code" : "M23.002",
        "display" : "Cystic meniscus, unspecified lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.003",
        "display" : "Cystic meniscus, unspecified medial meniscus, right knee"
      },
      {
        "code" : "M23.004",
        "display" : "Cystic meniscus, unspecified medial meniscus, left knee"
      },
      {
        "code" : "M23.005",
        "display" : "Cystic meniscus, unspecified medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.006",
        "display" : "Cystic meniscus, unspecified meniscus, right knee"
      },
      {
        "code" : "M23.007",
        "display" : "Cystic meniscus, unspecified meniscus, left knee"
      },
      {
        "code" : "M23.009",
        "display" : "Cystic meniscus, unspecified meniscus, unspecified knee"
      },
      {
        "code" : "M23.011",
        "display" : "Cystic meniscus, anterior horn of medial meniscus, right knee"
      },
      {
        "code" : "M23.012",
        "display" : "Cystic meniscus, anterior horn of medial meniscus, left knee"
      },
      {
        "code" : "M23.019",
        "display" : "Cystic meniscus, anterior horn of medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.021",
        "display" : "Cystic meniscus, posterior horn of medial meniscus, right knee"
      },
      {
        "code" : "M23.022",
        "display" : "Cystic meniscus, posterior horn of medial meniscus, left knee"
      },
      {
        "code" : "M23.029",
        "display" : "Cystic meniscus, posterior horn of medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.031",
        "display" : "Cystic meniscus, other medial meniscus, right knee"
      },
      {
        "code" : "M23.032",
        "display" : "Cystic meniscus, other medial meniscus, left knee"
      },
      {
        "code" : "M23.039",
        "display" : "Cystic meniscus, other medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.041",
        "display" : "Cystic meniscus, anterior horn of lateral meniscus, right knee"
      },
      {
        "code" : "M23.042",
        "display" : "Cystic meniscus, anterior horn of lateral meniscus, left knee"
      },
      {
        "code" : "M23.049",
        "display" : "Cystic meniscus, anterior horn of lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.051",
        "display" : "Cystic meniscus, posterior horn of lateral meniscus, right knee"
      },
      {
        "code" : "M23.052",
        "display" : "Cystic meniscus, posterior horn of lateral meniscus, left knee"
      },
      {
        "code" : "M23.059",
        "display" : "Cystic meniscus, posterior horn of lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.061",
        "display" : "Cystic meniscus, other lateral meniscus, right knee"
      },
      {
        "code" : "M23.062",
        "display" : "Cystic meniscus, other lateral meniscus, left knee"
      },
      {
        "code" : "M23.069",
        "display" : "Cystic meniscus, other lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.200",
        "display" : "Derangement of unspecified lateral meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.201",
        "display" : "Derangement of unspecified lateral meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.202",
        "display" : "Derangement of unspecified lateral meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.203",
        "display" : "Derangement of unspecified medial meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.204",
        "display" : "Derangement of unspecified medial meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.205",
        "display" : "Derangement of unspecified medial meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.206",
        "display" : "Derangement of unspecified meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.207",
        "display" : "Derangement of unspecified meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.209",
        "display" : "Derangement of unspecified meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.211",
        "display" : "Derangement of anterior horn of medial meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.212",
        "display" : "Derangement of anterior horn of medial meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.219",
        "display" : "Derangement of anterior horn of medial meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.221",
        "display" : "Derangement of posterior horn of medial meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.222",
        "display" : "Derangement of posterior horn of medial meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.229",
        "display" : "Derangement of posterior horn of medial meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.231",
        "display" : "Derangement of other medial meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.232",
        "display" : "Derangement of other medial meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.239",
        "display" : "Derangement of other medial meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.241",
        "display" : "Derangement of anterior horn of lateral meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.242",
        "display" : "Derangement of anterior horn of lateral meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.249",
        "display" : "Derangement of anterior horn of lateral meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.251",
        "display" : "Derangement of posterior horn of lateral meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.252",
        "display" : "Derangement of posterior horn of lateral meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.259",
        "display" : "Derangement of posterior horn of lateral meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.261",
        "display" : "Derangement of other lateral meniscus due to old tear or injury, right knee"
      },
      {
        "code" : "M23.262",
        "display" : "Derangement of other lateral meniscus due to old tear or injury, left knee"
      },
      {
        "code" : "M23.269",
        "display" : "Derangement of other lateral meniscus due to old tear or injury, unspecified knee"
      },
      {
        "code" : "M23.300",
        "display" : "Other meniscus derangements, unspecified lateral meniscus, right knee"
      },
      {
        "code" : "M23.301",
        "display" : "Other meniscus derangements, unspecified lateral meniscus, left knee"
      },
      {
        "code" : "M23.302",
        "display" : "Other meniscus derangements, unspecified lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.303",
        "display" : "Other meniscus derangements, unspecified medial meniscus, right knee"
      },
      {
        "code" : "M23.304",
        "display" : "Other meniscus derangements, unspecified medial meniscus, left knee"
      },
      {
        "code" : "M23.305",
        "display" : "Other meniscus derangements, unspecified medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.306",
        "display" : "Other meniscus derangements, unspecified meniscus, right knee"
      },
      {
        "code" : "M23.307",
        "display" : "Other meniscus derangements, unspecified meniscus, left knee"
      },
      {
        "code" : "M23.309",
        "display" : "Other meniscus derangements, unspecified meniscus, unspecified knee"
      },
      {
        "code" : "M23.311",
        "display" : "Other meniscus derangements, anterior horn of medial meniscus, right knee"
      },
      {
        "code" : "M23.312",
        "display" : "Other meniscus derangements, anterior horn of medial meniscus, left knee"
      },
      {
        "code" : "M23.319",
        "display" : "Other meniscus derangements, anterior horn of medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.321",
        "display" : "Other meniscus derangements, posterior horn of medial meniscus, right knee"
      },
      {
        "code" : "M23.322",
        "display" : "Other meniscus derangements, posterior horn of medial meniscus, left knee"
      },
      {
        "code" : "M23.329",
        "display" : "Other meniscus derangements, posterior horn of medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.331",
        "display" : "Other meniscus derangements, other medial meniscus, right knee"
      },
      {
        "code" : "M23.332",
        "display" : "Other meniscus derangements, other medial meniscus, left knee"
      },
      {
        "code" : "M23.339",
        "display" : "Other meniscus derangements, other medial meniscus, unspecified knee"
      },
      {
        "code" : "M23.341",
        "display" : "Other meniscus derangements, anterior horn of lateral meniscus, right knee"
      },
      {
        "code" : "M23.342",
        "display" : "Other meniscus derangements, anterior horn of lateral meniscus, left knee"
      },
      {
        "code" : "M23.349",
        "display" : "Other meniscus derangements, anterior horn of lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.351",
        "display" : "Other meniscus derangements, posterior horn of lateral meniscus, right knee"
      },
      {
        "code" : "M23.352",
        "display" : "Other meniscus derangements, posterior horn of lateral meniscus, left knee"
      },
      {
        "code" : "M23.359",
        "display" : "Other meniscus derangements, posterior horn of lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.361",
        "display" : "Other meniscus derangements, other lateral meniscus, right knee"
      },
      {
        "code" : "M23.362",
        "display" : "Other meniscus derangements, other lateral meniscus, left knee"
      },
      {
        "code" : "M23.369",
        "display" : "Other meniscus derangements, other lateral meniscus, unspecified knee"
      },
      {
        "code" : "M23.40",
        "display" : "Loose body in knee, unspecified knee"
      },
      {
        "code" : "M23.41",
        "display" : "Loose body in knee, right knee"
      },
      {
        "code" : "M23.42",
        "display" : "Loose body in knee, left knee"
      },
      {
        "code" : "M23.50",
        "display" : "Chronic instability of knee, unspecified knee"
      },
      {
        "code" : "M23.51",
        "display" : "Chronic instability of knee, right knee"
      },
      {
        "code" : "M23.52",
        "display" : "Chronic instability of knee, left knee"
      },
      {
        "code" : "M23.601",
        "display" : "Other spontaneous disruption of unspecified ligament of right knee"
      },
      {
        "code" : "M23.602",
        "display" : "Other spontaneous disruption of unspecified ligament of left knee"
      },
      {
        "code" : "M23.609",
        "display" : "Other spontaneous disruption of unspecified ligament of unspecified knee"
      },
      {
        "code" : "M23.611",
        "display" : "Other spontaneous disruption of anterior cruciate ligament of right knee"
      },
      {
        "code" : "M23.612",
        "display" : "Other spontaneous disruption of anterior cruciate ligament of left knee"
      },
      {
        "code" : "M23.619",
        "display" : "Other spontaneous disruption of anterior cruciate ligament of unspecified knee"
      },
      {
        "code" : "M23.621",
        "display" : "Other spontaneous disruption of posterior cruciate ligament of right knee"
      },
      {
        "code" : "M23.622",
        "display" : "Other spontaneous disruption of posterior cruciate ligament of left knee"
      },
      {
        "code" : "M23.629",
        "display" : "Other spontaneous disruption of posterior cruciate ligament of unspecified knee"
      },
      {
        "code" : "M23.631",
        "display" : "Other spontaneous disruption of medial collateral ligament of right knee"
      },
      {
        "code" : "M23.632",
        "display" : "Other spontaneous disruption of medial collateral ligament of left knee"
      },
      {
        "code" : "M23.639",
        "display" : "Other spontaneous disruption of medial collateral ligament of unspecified knee"
      },
      {
        "code" : "M23.641",
        "display" : "Other spontaneous disruption of lateral collateral ligament of right knee"
      },
      {
        "code" : "M23.642",
        "display" : "Other spontaneous disruption of lateral collateral ligament of left knee"
      },
      {
        "code" : "M23.649",
        "display" : "Other spontaneous disruption of lateral collateral ligament of unspecified knee"
      },
      {
        "code" : "M23.671",
        "display" : "Other spontaneous disruption of capsular ligament of right knee"
      },
      {
        "code" : "M23.672",
        "display" : "Other spontaneous disruption of capsular ligament of left knee"
      },
      {
        "code" : "M23.679",
        "display" : "Other spontaneous disruption of capsular ligament of unspecified knee"
      },
      {
        "code" : "M23.8X1",
        "display" : "Other internal derangements of right knee"
      },
      {
        "code" : "M23.8X2",
        "display" : "Other internal derangements of left knee"
      },
      {
        "code" : "M23.8X9",
        "display" : "Other internal derangements of unspecified knee"
      },
      {
        "code" : "M23.90",
        "display" : "Unspecified internal derangement of unspecified knee"
      },
      {
        "code" : "M23.91",
        "display" : "Unspecified internal derangement of right knee"
      },
      {
        "code" : "M23.92",
        "display" : "Unspecified internal derangement of left knee"
      },
      {
        "code" : "M24.00",
        "display" : "Loose body in unspecified joint"
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
        "code" : "M24.022",
        "display" : "Loose body in left elbow"
      },
      {
        "code" : "M24.029",
        "display" : "Loose body in unspecified elbow"
      },
      {
        "code" : "M24.031",
        "display" : "Loose body in right wrist"
      },
      {
        "code" : "M24.032",
        "display" : "Loose body in left wrist"
      },
      {
        "code" : "M24.039",
        "display" : "Loose body in unspecified wrist"
      },
      {
        "code" : "M24.041",
        "display" : "Loose body in right finger joint(s)"
      },
      {
        "code" : "M24.042",
        "display" : "Loose body in left finger joint(s)"
      },
      {
        "code" : "M24.049",
        "display" : "Loose body in unspecified finger joint(s)"
      },
      {
        "code" : "M24.051",
        "display" : "Loose body in right hip"
      },
      {
        "code" : "M24.052",
        "display" : "Loose body in left hip"
      },
      {
        "code" : "M24.059",
        "display" : "Loose body in unspecified hip"
      },
      {
        "code" : "M24.071",
        "display" : "Loose body in right ankle"
      },
      {
        "code" : "M24.072",
        "display" : "Loose body in left ankle"
      },
      {
        "code" : "M24.073",
        "display" : "Loose body in unspecified ankle"
      },
      {
        "code" : "M24.074",
        "display" : "Loose body in right toe joint(s)"
      },
      {
        "code" : "M24.075",
        "display" : "Loose body in left toe joint(s)"
      },
      {
        "code" : "M24.076",
        "display" : "Loose body in unspecified toe joint(s)"
      },
      {
        "code" : "M24.08",
        "display" : "Loose body, other site"
      },
      {
        "code" : "M24.10",
        "display" : "Other articular cartilage disorders, unspecified site"
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
        "code" : "M24.121",
        "display" : "Other articular cartilage disorders, right elbow"
      },
      {
        "code" : "M24.122",
        "display" : "Other articular cartilage disorders, left elbow"
      },
      {
        "code" : "M24.129",
        "display" : "Other articular cartilage disorders, unspecified elbow"
      },
      {
        "code" : "M24.131",
        "display" : "Other articular cartilage disorders, right wrist"
      },
      {
        "code" : "M24.132",
        "display" : "Other articular cartilage disorders, left wrist"
      },
      {
        "code" : "M24.139",
        "display" : "Other articular cartilage disorders, unspecified wrist"
      },
      {
        "code" : "M24.141",
        "display" : "Other articular cartilage disorders, right hand"
      },
      {
        "code" : "M24.142",
        "display" : "Other articular cartilage disorders, left hand"
      },
      {
        "code" : "M24.149",
        "display" : "Other articular cartilage disorders, unspecified hand"
      },
      {
        "code" : "M24.151",
        "display" : "Other articular cartilage disorders, right hip"
      },
      {
        "code" : "M24.152",
        "display" : "Other articular cartilage disorders, left hip"
      },
      {
        "code" : "M24.159",
        "display" : "Other articular cartilage disorders, unspecified hip"
      },
      {
        "code" : "M24.171",
        "display" : "Other articular cartilage disorders, right ankle"
      },
      {
        "code" : "M24.172",
        "display" : "Other articular cartilage disorders, left ankle"
      },
      {
        "code" : "M24.173",
        "display" : "Other articular cartilage disorders, unspecified ankle"
      },
      {
        "code" : "M24.174",
        "display" : "Other articular cartilage disorders, right foot"
      },
      {
        "code" : "M24.175",
        "display" : "Other articular cartilage disorders, left foot"
      },
      {
        "code" : "M24.176",
        "display" : "Other articular cartilage disorders, unspecified foot"
      },
      {
        "code" : "M24.19",
        "display" : "Other articular cartilage disorders, other specified site"
      },
      {
        "code" : "M24.20",
        "display" : "Disorder of ligament, unspecified site"
      },
      {
        "code" : "M24.211",
        "display" : "Disorder of ligament, right shoulder"
      },
      {
        "code" : "M24.212",
        "display" : "Disorder of ligament, left shoulder"
      },
      {
        "code" : "M24.219",
        "display" : "Disorder of ligament, unspecified shoulder"
      },
      {
        "code" : "M24.221",
        "display" : "Disorder of ligament, right elbow"
      },
      {
        "code" : "M24.222",
        "display" : "Disorder of ligament, left elbow"
      },
      {
        "code" : "M24.229",
        "display" : "Disorder of ligament, unspecified elbow"
      },
      {
        "code" : "M24.231",
        "display" : "Disorder of ligament, right wrist"
      },
      {
        "code" : "M24.232",
        "display" : "Disorder of ligament, left wrist"
      },
      {
        "code" : "M24.239",
        "display" : "Disorder of ligament, unspecified wrist"
      },
      {
        "code" : "M24.241",
        "display" : "Disorder of ligament, right hand"
      },
      {
        "code" : "M24.242",
        "display" : "Disorder of ligament, left hand"
      },
      {
        "code" : "M24.249",
        "display" : "Disorder of ligament, unspecified hand"
      },
      {
        "code" : "M24.251",
        "display" : "Disorder of ligament, right hip"
      },
      {
        "code" : "M24.252",
        "display" : "Disorder of ligament, left hip"
      },
      {
        "code" : "M24.259",
        "display" : "Disorder of ligament, unspecified hip"
      },
      {
        "code" : "M24.271",
        "display" : "Disorder of ligament, right ankle"
      },
      {
        "code" : "M24.272",
        "display" : "Disorder of ligament, left ankle"
      },
      {
        "code" : "M24.273",
        "display" : "Disorder of ligament, unspecified ankle"
      },
      {
        "code" : "M24.274",
        "display" : "Disorder of ligament, right foot"
      },
      {
        "code" : "M24.275",
        "display" : "Disorder of ligament, left foot"
      },
      {
        "code" : "M24.276",
        "display" : "Disorder of ligament, unspecified foot"
      },
      {
        "code" : "M24.28",
        "display" : "Disorder of ligament, vertebrae"
      },
      {
        "code" : "M24.29",
        "display" : "Disorder of ligament, other specified site"
      },
      {
        "code" : "M24.30",
        "display" : "Pathological dislocation of unspecified joint, not elsewhere classified"
      },
      {
        "code" : "M24.311",
        "display" : "Pathological dislocation of right shoulder, not elsewhere classified"
      },
      {
        "code" : "M24.312",
        "display" : "Pathological dislocation of left shoulder, not elsewhere classified"
      },
      {
        "code" : "M24.319",
        "display" : "Pathological dislocation of unspecified shoulder, not elsewhere classified"
      },
      {
        "code" : "M24.321",
        "display" : "Pathological dislocation of right elbow, not elsewhere classified"
      },
      {
        "code" : "M24.322",
        "display" : "Pathological dislocation of left elbow, not elsewhere classified"
      },
      {
        "code" : "M24.329",
        "display" : "Pathological dislocation of unspecified elbow, not elsewhere classified"
      },
      {
        "code" : "M24.331",
        "display" : "Pathological dislocation of right wrist, not elsewhere classified"
      },
      {
        "code" : "M24.332",
        "display" : "Pathological dislocation of left wrist, not elsewhere classified"
      },
      {
        "code" : "M24.339",
        "display" : "Pathological dislocation of unspecified wrist, not elsewhere classified"
      },
      {
        "code" : "M24.341",
        "display" : "Pathological dislocation of right hand, not elsewhere classified"
      },
      {
        "code" : "M24.342",
        "display" : "Pathological dislocation of left hand, not elsewhere classified"
      },
      {
        "code" : "M24.349",
        "display" : "Pathological dislocation of unspecified hand, not elsewhere classified"
      },
      {
        "code" : "M24.351",
        "display" : "Pathological dislocation of right hip, not elsewhere classified"
      },
      {
        "code" : "M24.352",
        "display" : "Pathological dislocation of left hip, not elsewhere classified"
      },
      {
        "code" : "M24.359",
        "display" : "Pathological dislocation of unspecified hip, not elsewhere classified"
      },
      {
        "code" : "M24.361",
        "display" : "Pathological dislocation of right knee, not elsewhere classified"
      },
      {
        "code" : "M24.362",
        "display" : "Pathological dislocation of left knee, not elsewhere classified"
      },
      {
        "code" : "M24.369",
        "display" : "Pathological dislocation of unspecified knee, not elsewhere classified"
      },
      {
        "code" : "M24.371",
        "display" : "Pathological dislocation of right ankle, not elsewhere classified"
      },
      {
        "code" : "M24.372",
        "display" : "Pathological dislocation of left ankle, not elsewhere classified"
      },
      {
        "code" : "M24.373",
        "display" : "Pathological dislocation of unspecified ankle, not elsewhere classified"
      },
      {
        "code" : "M24.374",
        "display" : "Pathological dislocation of right foot, not elsewhere classified"
      },
      {
        "code" : "M24.375",
        "display" : "Pathological dislocation of left foot, not elsewhere classified"
      },
      {
        "code" : "M24.376",
        "display" : "Pathological dislocation of unspecified foot, not elsewhere classified"
      },
      {
        "code" : "M24.39",
        "display" : "Pathological dislocation of other specified joint, not elsewhere classified"
      },
      {
        "code" : "M24.40",
        "display" : "Recurrent dislocation, unspecified joint"
      },
      {
        "code" : "M24.411",
        "display" : "Recurrent dislocation, right shoulder"
      },
      {
        "code" : "M24.412",
        "display" : "Recurrent dislocation, left shoulder"
      },
      {
        "code" : "M24.419",
        "display" : "Recurrent dislocation, unspecified shoulder"
      },
      {
        "code" : "M24.421",
        "display" : "Recurrent dislocation, right elbow"
      },
      {
        "code" : "M24.422",
        "display" : "Recurrent dislocation, left elbow"
      },
      {
        "code" : "M24.429",
        "display" : "Recurrent dislocation, unspecified elbow"
      },
      {
        "code" : "M24.431",
        "display" : "Recurrent dislocation, right wrist"
      },
      {
        "code" : "M24.432",
        "display" : "Recurrent dislocation, left wrist"
      },
      {
        "code" : "M24.439",
        "display" : "Recurrent dislocation, unspecified wrist"
      },
      {
        "code" : "M24.441",
        "display" : "Recurrent dislocation, right hand"
      },
      {
        "code" : "M24.442",
        "display" : "Recurrent dislocation, left hand"
      },
      {
        "code" : "M24.443",
        "display" : "Recurrent dislocation, unspecified hand"
      },
      {
        "code" : "M24.444",
        "display" : "Recurrent dislocation, right finger"
      },
      {
        "code" : "M24.445",
        "display" : "Recurrent dislocation, left finger"
      },
      {
        "code" : "M24.446",
        "display" : "Recurrent dislocation, unspecified finger"
      },
      {
        "code" : "M24.451",
        "display" : "Recurrent dislocation, right hip"
      },
      {
        "code" : "M24.452",
        "display" : "Recurrent dislocation, left hip"
      },
      {
        "code" : "M24.459",
        "display" : "Recurrent dislocation, unspecified hip"
      },
      {
        "code" : "M24.461",
        "display" : "Recurrent dislocation, right knee"
      },
      {
        "code" : "M24.462",
        "display" : "Recurrent dislocation, left knee"
      },
      {
        "code" : "M24.469",
        "display" : "Recurrent dislocation, unspecified knee"
      },
      {
        "code" : "M24.471",
        "display" : "Recurrent dislocation, right ankle"
      },
      {
        "code" : "M24.472",
        "display" : "Recurrent dislocation, left ankle"
      },
      {
        "code" : "M24.473",
        "display" : "Recurrent dislocation, unspecified ankle"
      },
      {
        "code" : "M24.474",
        "display" : "Recurrent dislocation, right foot"
      },
      {
        "code" : "M24.475",
        "display" : "Recurrent dislocation, left foot"
      },
      {
        "code" : "M24.476",
        "display" : "Recurrent dislocation, unspecified foot"
      },
      {
        "code" : "M24.477",
        "display" : "Recurrent dislocation, right toe(s)"
      },
      {
        "code" : "M24.478",
        "display" : "Recurrent dislocation, left toe(s)"
      },
      {
        "code" : "M24.479",
        "display" : "Recurrent dislocation, unspecified toe(s)"
      },
      {
        "code" : "M24.49",
        "display" : "Recurrent dislocation, other specified joint"
      },
      {
        "code" : "M24.50",
        "display" : "Contracture, unspecified joint"
      },
      {
        "code" : "M24.511",
        "display" : "Contracture, right shoulder"
      },
      {
        "code" : "M24.512",
        "display" : "Contracture, left shoulder"
      },
      {
        "code" : "M24.519",
        "display" : "Contracture, unspecified shoulder"
      },
      {
        "code" : "M24.521",
        "display" : "Contracture, right elbow"
      },
      {
        "code" : "M24.522",
        "display" : "Contracture, left elbow"
      },
      {
        "code" : "M24.529",
        "display" : "Contracture, unspecified elbow"
      },
      {
        "code" : "M24.531",
        "display" : "Contracture, right wrist"
      },
      {
        "code" : "M24.532",
        "display" : "Contracture, left wrist"
      },
      {
        "code" : "M24.539",
        "display" : "Contracture, unspecified wrist"
      },
      {
        "code" : "M24.541",
        "display" : "Contracture, right hand"
      },
      {
        "code" : "M24.542",
        "display" : "Contracture, left hand"
      },
      {
        "code" : "M24.549",
        "display" : "Contracture, unspecified hand"
      },
      {
        "code" : "M24.551",
        "display" : "Contracture, right hip"
      },
      {
        "code" : "M24.552",
        "display" : "Contracture, left hip"
      },
      {
        "code" : "M24.559",
        "display" : "Contracture, unspecified hip"
      },
      {
        "code" : "M24.561",
        "display" : "Contracture, right knee"
      },
      {
        "code" : "M24.562",
        "display" : "Contracture, left knee"
      },
      {
        "code" : "M24.569",
        "display" : "Contracture, unspecified knee"
      },
      {
        "code" : "M24.571",
        "display" : "Contracture, right ankle"
      },
      {
        "code" : "M24.572",
        "display" : "Contracture, left ankle"
      },
      {
        "code" : "M24.573",
        "display" : "Contracture, unspecified ankle"
      },
      {
        "code" : "M24.574",
        "display" : "Contracture, right foot"
      },
      {
        "code" : "M24.575",
        "display" : "Contracture, left foot"
      },
      {
        "code" : "M24.576",
        "display" : "Contracture, unspecified foot"
      },
      {
        "code" : "M24.59",
        "display" : "Contracture, other specified joint"
      },
      {
        "code" : "M24.60",
        "display" : "Ankylosis, unspecified joint"
      },
      {
        "code" : "M24.611",
        "display" : "Ankylosis, right shoulder"
      },
      {
        "code" : "M24.612",
        "display" : "Ankylosis, left shoulder"
      },
      {
        "code" : "M24.619",
        "display" : "Ankylosis, unspecified shoulder"
      },
      {
        "code" : "M24.621",
        "display" : "Ankylosis, right elbow"
      },
      {
        "code" : "M24.622",
        "display" : "Ankylosis, left elbow"
      },
      {
        "code" : "M24.629",
        "display" : "Ankylosis, unspecified elbow"
      },
      {
        "code" : "M24.631",
        "display" : "Ankylosis, right wrist"
      },
      {
        "code" : "M24.632",
        "display" : "Ankylosis, left wrist"
      },
      {
        "code" : "M24.639",
        "display" : "Ankylosis, unspecified wrist"
      },
      {
        "code" : "M24.641",
        "display" : "Ankylosis, right hand"
      },
      {
        "code" : "M24.642",
        "display" : "Ankylosis, left hand"
      },
      {
        "code" : "M24.649",
        "display" : "Ankylosis, unspecified hand"
      },
      {
        "code" : "M24.651",
        "display" : "Ankylosis, right hip"
      },
      {
        "code" : "M24.652",
        "display" : "Ankylosis, left hip"
      },
      {
        "code" : "M24.659",
        "display" : "Ankylosis, unspecified hip"
      },
      {
        "code" : "M24.661",
        "display" : "Ankylosis, right knee"
      },
      {
        "code" : "M24.662",
        "display" : "Ankylosis, left knee"
      },
      {
        "code" : "M24.669",
        "display" : "Ankylosis, unspecified knee"
      },
      {
        "code" : "M24.671",
        "display" : "Ankylosis, right ankle"
      },
      {
        "code" : "M24.672",
        "display" : "Ankylosis, left ankle"
      },
      {
        "code" : "M24.673",
        "display" : "Ankylosis, unspecified ankle"
      },
      {
        "code" : "M24.674",
        "display" : "Ankylosis, right foot"
      },
      {
        "code" : "M24.675",
        "display" : "Ankylosis, left foot"
      },
      {
        "code" : "M24.676",
        "display" : "Ankylosis, unspecified foot"
      },
      {
        "code" : "M24.69",
        "display" : "Ankylosis, other specified joint"
      },
      {
        "code" : "M24.7",
        "display" : "Protrusio acetabuli"
      },
      {
        "code" : "M24.80",
        "display" : "Other specific joint derangements of unspecified joint, not elsewhere classified"
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
        "code" : "M24.821",
        "display" : "Other specific joint derangements of right elbow, not elsewhere classified"
      },
      {
        "code" : "M24.822",
        "display" : "Other specific joint derangements of left elbow, not elsewhere classified"
      },
      {
        "code" : "M24.829",
        "display" : "Other specific joint derangements of unspecified elbow, not elsewhere classified"
      },
      {
        "code" : "M24.831",
        "display" : "Other specific joint derangements of right wrist, not elsewhere classified"
      },
      {
        "code" : "M24.832",
        "display" : "Other specific joint derangements of left wrist, not elsewhere classified"
      },
      {
        "code" : "M24.839",
        "display" : "Other specific joint derangements of unspecified wrist, not elsewhere classified"
      },
      {
        "code" : "M24.841",
        "display" : "Other specific joint derangements of right hand, not elsewhere classified"
      },
      {
        "code" : "M24.842",
        "display" : "Other specific joint derangements of left hand, not elsewhere classified"
      },
      {
        "code" : "M24.849",
        "display" : "Other specific joint derangements of unspecified hand, not elsewhere classified"
      },
      {
        "code" : "M24.851",
        "display" : "Other specific joint derangements of right hip, not elsewhere classified"
      },
      {
        "code" : "M24.852",
        "display" : "Other specific joint derangements of left hip, not elsewhere classified"
      },
      {
        "code" : "M24.859",
        "display" : "Other specific joint derangements of unspecified hip, not elsewhere classified"
      },
      {
        "code" : "M24.871",
        "display" : "Other specific joint derangements of right ankle, not elsewhere classified"
      },
      {
        "code" : "M24.872",
        "display" : "Other specific joint derangements of left ankle, not elsewhere classified"
      },
      {
        "code" : "M24.873",
        "display" : "Other specific joint derangements of unspecified ankle, not elsewhere classified"
      },
      {
        "code" : "M24.874",
        "display" : "Other specific joint derangements of right foot, not elsewhere classified"
      },
      {
        "code" : "M24.875",
        "display" : "Other specific joint derangements left foot, not elsewhere classified"
      },
      {
        "code" : "M24.876",
        "display" : "Other specific joint derangements of unspecified foot, not elsewhere classified"
      },
      {
        "code" : "M24.89",
        "display" : "Other specific joint derangement of other specified joint, not elsewhere classified"
      },
      {
        "code" : "M24.9",
        "display" : "Joint derangement, unspecified"
      },
      {
        "code" : "M25.00",
        "display" : "Hemarthrosis, unspecified joint"
      },
      {
        "code" : "M25.011",
        "display" : "Hemarthrosis, right shoulder"
      },
      {
        "code" : "M25.012",
        "display" : "Hemarthrosis, left shoulder"
      },
      {
        "code" : "M25.019",
        "display" : "Hemarthrosis, unspecified shoulder"
      },
      {
        "code" : "M25.021",
        "display" : "Hemarthrosis, right elbow"
      },
      {
        "code" : "M25.022",
        "display" : "Hemarthrosis, left elbow"
      },
      {
        "code" : "M25.029",
        "display" : "Hemarthrosis, unspecified elbow"
      },
      {
        "code" : "M25.031",
        "display" : "Hemarthrosis, right wrist"
      },
      {
        "code" : "M25.032",
        "display" : "Hemarthrosis, left wrist"
      },
      {
        "code" : "M25.039",
        "display" : "Hemarthrosis, unspecified wrist"
      },
      {
        "code" : "M25.041",
        "display" : "Hemarthrosis, right hand"
      },
      {
        "code" : "M25.042",
        "display" : "Hemarthrosis, left hand"
      },
      {
        "code" : "M25.049",
        "display" : "Hemarthrosis, unspecified hand"
      },
      {
        "code" : "M25.051",
        "display" : "Hemarthrosis, right hip"
      },
      {
        "code" : "M25.052",
        "display" : "Hemarthrosis, left hip"
      },
      {
        "code" : "M25.059",
        "display" : "Hemarthrosis, unspecified hip"
      },
      {
        "code" : "M25.061",
        "display" : "Hemarthrosis, right knee"
      },
      {
        "code" : "M25.062",
        "display" : "Hemarthrosis, left knee"
      },
      {
        "code" : "M25.069",
        "display" : "Hemarthrosis, unspecified knee"
      },
      {
        "code" : "M25.071",
        "display" : "Hemarthrosis, right ankle"
      },
      {
        "code" : "M25.072",
        "display" : "Hemarthrosis, left ankle"
      },
      {
        "code" : "M25.073",
        "display" : "Hemarthrosis, unspecified ankle"
      },
      {
        "code" : "M25.074",
        "display" : "Hemarthrosis, right foot"
      },
      {
        "code" : "M25.075",
        "display" : "Hemarthrosis, left foot"
      },
      {
        "code" : "M25.076",
        "display" : "Hemarthrosis, unspecified foot"
      },
      {
        "code" : "M25.08",
        "display" : "Hemarthrosis, other specified site"
      },
      {
        "code" : "M25.10",
        "display" : "Fistula, unspecified joint"
      },
      {
        "code" : "M25.111",
        "display" : "Fistula, right shoulder"
      },
      {
        "code" : "M25.112",
        "display" : "Fistula, left shoulder"
      },
      {
        "code" : "M25.119",
        "display" : "Fistula, unspecified shoulder"
      },
      {
        "code" : "M25.121",
        "display" : "Fistula, right elbow"
      },
      {
        "code" : "M25.122",
        "display" : "Fistula, left elbow"
      },
      {
        "code" : "M25.129",
        "display" : "Fistula, unspecified elbow"
      },
      {
        "code" : "M25.131",
        "display" : "Fistula, right wrist"
      },
      {
        "code" : "M25.132",
        "display" : "Fistula, left wrist"
      },
      {
        "code" : "M25.139",
        "display" : "Fistula, unspecified wrist"
      },
      {
        "code" : "M25.141",
        "display" : "Fistula, right hand"
      },
      {
        "code" : "M25.142",
        "display" : "Fistula, left hand"
      },
      {
        "code" : "M25.149",
        "display" : "Fistula, unspecified hand"
      },
      {
        "code" : "M25.151",
        "display" : "Fistula, right hip"
      },
      {
        "code" : "M25.152",
        "display" : "Fistula, left hip"
      },
      {
        "code" : "M25.159",
        "display" : "Fistula, unspecified hip"
      },
      {
        "code" : "M25.161",
        "display" : "Fistula, right knee"
      },
      {
        "code" : "M25.162",
        "display" : "Fistula, left knee"
      },
      {
        "code" : "M25.169",
        "display" : "Fistula, unspecified knee"
      },
      {
        "code" : "M25.171",
        "display" : "Fistula, right ankle"
      },
      {
        "code" : "M25.172",
        "display" : "Fistula, left ankle"
      },
      {
        "code" : "M25.173",
        "display" : "Fistula, unspecified ankle"
      },
      {
        "code" : "M25.174",
        "display" : "Fistula, right foot"
      },
      {
        "code" : "M25.175",
        "display" : "Fistula, left foot"
      },
      {
        "code" : "M25.176",
        "display" : "Fistula, unspecified foot"
      },
      {
        "code" : "M25.18",
        "display" : "Fistula, other specified site"
      },
      {
        "code" : "M25.20",
        "display" : "Flail joint, unspecified joint"
      },
      {
        "code" : "M25.211",
        "display" : "Flail joint, right shoulder"
      },
      {
        "code" : "M25.212",
        "display" : "Flail joint, left shoulder"
      },
      {
        "code" : "M25.219",
        "display" : "Flail joint, unspecified shoulder"
      },
      {
        "code" : "M25.221",
        "display" : "Flail joint, right elbow"
      },
      {
        "code" : "M25.222",
        "display" : "Flail joint, left elbow"
      },
      {
        "code" : "M25.229",
        "display" : "Flail joint, unspecified elbow"
      },
      {
        "code" : "M25.231",
        "display" : "Flail joint, right wrist"
      },
      {
        "code" : "M25.232",
        "display" : "Flail joint, left wrist"
      },
      {
        "code" : "M25.239",
        "display" : "Flail joint, unspecified wrist"
      },
      {
        "code" : "M25.241",
        "display" : "Flail joint, right hand"
      },
      {
        "code" : "M25.242",
        "display" : "Flail joint, left hand"
      },
      {
        "code" : "M25.249",
        "display" : "Flail joint, unspecified hand"
      },
      {
        "code" : "M25.251",
        "display" : "Flail joint, right hip"
      },
      {
        "code" : "M25.252",
        "display" : "Flail joint, left hip"
      },
      {
        "code" : "M25.259",
        "display" : "Flail joint, unspecified hip"
      },
      {
        "code" : "M25.261",
        "display" : "Flail joint, right knee"
      },
      {
        "code" : "M25.262",
        "display" : "Flail joint, left knee"
      },
      {
        "code" : "M25.269",
        "display" : "Flail joint, unspecified knee"
      },
      {
        "code" : "M25.271",
        "display" : "Flail joint, right ankle and foot"
      },
      {
        "code" : "M25.272",
        "display" : "Flail joint, left ankle and foot"
      },
      {
        "code" : "M25.279",
        "display" : "Flail joint, unspecified ankle and foot"
      },
      {
        "code" : "M25.28",
        "display" : "Flail joint, other site"
      },
      {
        "code" : "M25.30",
        "display" : "Other instability, unspecified joint"
      },
      {
        "code" : "M25.311",
        "display" : "Other instability, right shoulder"
      },
      {
        "code" : "M25.312",
        "display" : "Other instability, left shoulder"
      },
      {
        "code" : "M25.319",
        "display" : "Other instability, unspecified shoulder"
      },
      {
        "code" : "M25.321",
        "display" : "Other instability, right elbow"
      },
      {
        "code" : "M25.322",
        "display" : "Other instability, left elbow"
      },
      {
        "code" : "M25.329",
        "display" : "Other instability, unspecified elbow"
      },
      {
        "code" : "M25.331",
        "display" : "Other instability, right wrist"
      },
      {
        "code" : "M25.332",
        "display" : "Other instability, left wrist"
      },
      {
        "code" : "M25.339",
        "display" : "Other instability, unspecified wrist"
      },
      {
        "code" : "M25.341",
        "display" : "Other instability, right hand"
      },
      {
        "code" : "M25.342",
        "display" : "Other instability, left hand"
      },
      {
        "code" : "M25.349",
        "display" : "Other instability, unspecified hand"
      },
      {
        "code" : "M25.351",
        "display" : "Other instability, right hip"
      },
      {
        "code" : "M25.352",
        "display" : "Other instability, left hip"
      },
      {
        "code" : "M25.359",
        "display" : "Other instability, unspecified hip"
      },
      {
        "code" : "M25.361",
        "display" : "Other instability, right knee"
      },
      {
        "code" : "M25.362",
        "display" : "Other instability, left knee"
      },
      {
        "code" : "M25.369",
        "display" : "Other instability, unspecified knee"
      },
      {
        "code" : "M25.371",
        "display" : "Other instability, right ankle"
      },
      {
        "code" : "M25.372",
        "display" : "Other instability, left ankle"
      },
      {
        "code" : "M25.373",
        "display" : "Other instability, unspecified ankle"
      },
      {
        "code" : "M25.374",
        "display" : "Other instability, right foot"
      },
      {
        "code" : "M25.375",
        "display" : "Other instability, left foot"
      },
      {
        "code" : "M25.376",
        "display" : "Other instability, unspecified foot"
      },
      {
        "code" : "M25.39",
        "display" : "Other instability, other specified joint"
      },
      {
        "code" : "M25.40",
        "display" : "Effusion, unspecified joint"
      },
      {
        "code" : "M25.411",
        "display" : "Effusion, right shoulder"
      },
      {
        "code" : "M25.412",
        "display" : "Effusion, left shoulder"
      },
      {
        "code" : "M25.419",
        "display" : "Effusion, unspecified shoulder"
      },
      {
        "code" : "M25.421",
        "display" : "Effusion, right elbow"
      },
      {
        "code" : "M25.422",
        "display" : "Effusion, left elbow"
      },
      {
        "code" : "M25.429",
        "display" : "Effusion, unspecified elbow"
      },
      {
        "code" : "M25.431",
        "display" : "Effusion, right wrist"
      },
      {
        "code" : "M25.432",
        "display" : "Effusion, left wrist"
      },
      {
        "code" : "M25.439",
        "display" : "Effusion, unspecified wrist"
      },
      {
        "code" : "M25.441",
        "display" : "Effusion, right hand"
      },
      {
        "code" : "M25.442",
        "display" : "Effusion, left hand"
      },
      {
        "code" : "M25.449",
        "display" : "Effusion, unspecified hand"
      },
      {
        "code" : "M25.451",
        "display" : "Effusion, right hip"
      },
      {
        "code" : "M25.452",
        "display" : "Effusion, left hip"
      },
      {
        "code" : "M25.459",
        "display" : "Effusion, unspecified hip"
      },
      {
        "code" : "M25.461",
        "display" : "Effusion, right knee"
      },
      {
        "code" : "M25.462",
        "display" : "Effusion, left knee"
      },
      {
        "code" : "M25.469",
        "display" : "Effusion, unspecified knee"
      },
      {
        "code" : "M25.471",
        "display" : "Effusion, right ankle"
      },
      {
        "code" : "M25.472",
        "display" : "Effusion, left ankle"
      },
      {
        "code" : "M25.473",
        "display" : "Effusion, unspecified ankle"
      },
      {
        "code" : "M25.474",
        "display" : "Effusion, right foot"
      },
      {
        "code" : "M25.475",
        "display" : "Effusion, left foot"
      },
      {
        "code" : "M25.476",
        "display" : "Effusion, unspecified foot"
      },
      {
        "code" : "M25.48",
        "display" : "Effusion, other site"
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
        "code" : "M25.541",
        "display" : "Pain in joints of right hand"
      },
      {
        "code" : "M25.542",
        "display" : "Pain in joints of left hand"
      },
      {
        "code" : "M25.549",
        "display" : "Pain in joints of unspecified hand"
      },
      {
        "code" : "M25.551",
        "display" : "Pain in right hip"
      },
      {
        "code" : "M25.552",
        "display" : "Pain in left hip"
      },
      {
        "code" : "M25.559",
        "display" : "Pain in unspecified hip"
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
        "code" : "M25.571",
        "display" : "Pain in right ankle and joints of right foot"
      },
      {
        "code" : "M25.572",
        "display" : "Pain in left ankle and joints of left foot"
      },
      {
        "code" : "M25.579",
        "display" : "Pain in unspecified ankle and joints of unspecified foot"
      },
      {
        "code" : "M25.59",
        "display" : "Pain in other specified joint"
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
        "code" : "M25.621",
        "display" : "Stiffness of right elbow, not elsewhere classified"
      },
      {
        "code" : "M25.622",
        "display" : "Stiffness of left elbow, not elsewhere classified"
      },
      {
        "code" : "M25.629",
        "display" : "Stiffness of unspecified elbow, not elsewhere classified"
      },
      {
        "code" : "M25.631",
        "display" : "Stiffness of right wrist, not elsewhere classified"
      },
      {
        "code" : "M25.632",
        "display" : "Stiffness of left wrist, not elsewhere classified"
      },
      {
        "code" : "M25.639",
        "display" : "Stiffness of unspecified wrist, not elsewhere classified"
      },
      {
        "code" : "M25.641",
        "display" : "Stiffness of right hand, not elsewhere classified"
      },
      {
        "code" : "M25.642",
        "display" : "Stiffness of left hand, not elsewhere classified"
      },
      {
        "code" : "M25.649",
        "display" : "Stiffness of unspecified hand, not elsewhere classified"
      },
      {
        "code" : "M25.651",
        "display" : "Stiffness of right hip, not elsewhere classified"
      },
      {
        "code" : "M25.652",
        "display" : "Stiffness of left hip, not elsewhere classified"
      },
      {
        "code" : "M25.659",
        "display" : "Stiffness of unspecified hip, not elsewhere classified"
      },
      {
        "code" : "M25.661",
        "display" : "Stiffness of right knee, not elsewhere classified"
      },
      {
        "code" : "M25.662",
        "display" : "Stiffness of left knee, not elsewhere classified"
      },
      {
        "code" : "M25.669",
        "display" : "Stiffness of unspecified knee, not elsewhere classified"
      },
      {
        "code" : "M25.671",
        "display" : "Stiffness of right ankle, not elsewhere classified"
      },
      {
        "code" : "M25.672",
        "display" : "Stiffness of left ankle, not elsewhere classified"
      },
      {
        "code" : "M25.673",
        "display" : "Stiffness of unspecified ankle, not elsewhere classified"
      },
      {
        "code" : "M25.674",
        "display" : "Stiffness of right foot, not elsewhere classified"
      },
      {
        "code" : "M25.675",
        "display" : "Stiffness of left foot, not elsewhere classified"
      },
      {
        "code" : "M25.676",
        "display" : "Stiffness of unspecified foot, not elsewhere classified"
      },
      {
        "code" : "M25.69",
        "display" : "Stiffness of other specified joint, not elsewhere classified"
      },
      {
        "code" : "M25.70",
        "display" : "Osteophyte, unspecified joint"
      },
      {
        "code" : "M25.711",
        "display" : "Osteophyte, right shoulder"
      },
      {
        "code" : "M25.712",
        "display" : "Osteophyte, left shoulder"
      },
      {
        "code" : "M25.719",
        "display" : "Osteophyte, unspecified shoulder"
      },
      {
        "code" : "M25.721",
        "display" : "Osteophyte, right elbow"
      },
      {
        "code" : "M25.722",
        "display" : "Osteophyte, left elbow"
      },
      {
        "code" : "M25.729",
        "display" : "Osteophyte, unspecified elbow"
      },
      {
        "code" : "M25.731",
        "display" : "Osteophyte, right wrist"
      },
      {
        "code" : "M25.732",
        "display" : "Osteophyte, left wrist"
      },
      {
        "code" : "M25.739",
        "display" : "Osteophyte, unspecified wrist"
      },
      {
        "code" : "M25.741",
        "display" : "Osteophyte, right hand"
      },
      {
        "code" : "M25.742",
        "display" : "Osteophyte, left hand"
      },
      {
        "code" : "M25.749",
        "display" : "Osteophyte, unspecified hand"
      },
      {
        "code" : "M25.751",
        "display" : "Osteophyte, right hip"
      },
      {
        "code" : "M25.752",
        "display" : "Osteophyte, left hip"
      },
      {
        "code" : "M25.759",
        "display" : "Osteophyte, unspecified hip"
      },
      {
        "code" : "M25.761",
        "display" : "Osteophyte, right knee"
      },
      {
        "code" : "M25.762",
        "display" : "Osteophyte, left knee"
      },
      {
        "code" : "M25.769",
        "display" : "Osteophyte, unspecified knee"
      },
      {
        "code" : "M25.771",
        "display" : "Osteophyte, right ankle"
      },
      {
        "code" : "M25.772",
        "display" : "Osteophyte, left ankle"
      },
      {
        "code" : "M25.773",
        "display" : "Osteophyte, unspecified ankle"
      },
      {
        "code" : "M25.774",
        "display" : "Osteophyte, right foot"
      },
      {
        "code" : "M25.775",
        "display" : "Osteophyte, left foot"
      },
      {
        "code" : "M25.776",
        "display" : "Osteophyte, unspecified foot"
      },
      {
        "code" : "M25.78",
        "display" : "Osteophyte, vertebrae"
      },
      {
        "code" : "M25.80",
        "display" : "Other specified joint disorders, unspecified joint"
      },
      {
        "code" : "M25.811",
        "display" : "Other specified joint disorders, right shoulder"
      },
      {
        "code" : "M25.812",
        "display" : "Other specified joint disorders, left shoulder"
      },
      {
        "code" : "M25.819",
        "display" : "Other specified joint disorders, unspecified shoulder"
      },
      {
        "code" : "M25.821",
        "display" : "Other specified joint disorders, right elbow"
      },
      {
        "code" : "M25.822",
        "display" : "Other specified joint disorders, left elbow"
      },
      {
        "code" : "M25.829",
        "display" : "Other specified joint disorders, unspecified elbow"
      },
      {
        "code" : "M25.831",
        "display" : "Other specified joint disorders, right wrist"
      },
      {
        "code" : "M25.832",
        "display" : "Other specified joint disorders, left wrist"
      },
      {
        "code" : "M25.839",
        "display" : "Other specified joint disorders, unspecified wrist"
      },
      {
        "code" : "M25.841",
        "display" : "Other specified joint disorders, right hand"
      },
      {
        "code" : "M25.842",
        "display" : "Other specified joint disorders, left hand"
      },
      {
        "code" : "M25.849",
        "display" : "Other specified joint disorders, unspecified hand"
      },
      {
        "code" : "M25.851",
        "display" : "Other specified joint disorders, right hip"
      },
      {
        "code" : "M25.852",
        "display" : "Other specified joint disorders, left hip"
      },
      {
        "code" : "M25.859",
        "display" : "Other specified joint disorders, unspecified hip"
      },
      {
        "code" : "M25.861",
        "display" : "Other specified joint disorders, right knee"
      },
      {
        "code" : "M25.862",
        "display" : "Other specified joint disorders, left knee"
      },
      {
        "code" : "M25.869",
        "display" : "Other specified joint disorders, unspecified knee"
      },
      {
        "code" : "M25.871",
        "display" : "Other specified joint disorders, right ankle and foot"
      },
      {
        "code" : "M25.872",
        "display" : "Other specified joint disorders, left ankle and foot"
      },
      {
        "code" : "M25.879",
        "display" : "Other specified joint disorders, unspecified ankle and foot"
      },
      {
        "code" : "M25.9",
        "display" : "Joint disorder, unspecified"
      },
      {
        "code" : "M26.00",
        "display" : "Unspecified anomaly of jaw size"
      },
      {
        "code" : "M26.01",
        "display" : "Maxillary hyperplasia"
      },
      {
        "code" : "M26.02",
        "display" : "Maxillary hypoplasia"
      },
      {
        "code" : "M26.03",
        "display" : "Mandibular hyperplasia"
      },
      {
        "code" : "M26.04",
        "display" : "Mandibular hypoplasia"
      },
      {
        "code" : "M26.05",
        "display" : "Macrogenia"
      },
      {
        "code" : "M26.06",
        "display" : "Microgenia"
      },
      {
        "code" : "M26.07",
        "display" : "Excessive tuberosity of jaw"
      },
      {
        "code" : "M26.09",
        "display" : "Other specified anomalies of jaw size"
      },
      {
        "code" : "M26.10",
        "display" : "Unspecified anomaly of jaw-cranial base relationship"
      },
      {
        "code" : "M26.11",
        "display" : "Maxillary asymmetry"
      },
      {
        "code" : "M26.12",
        "display" : "Other jaw asymmetry"
      },
      {
        "code" : "M26.19",
        "display" : "Other specified anomalies of jaw-cranial base relationship"
      },
      {
        "code" : "M26.20",
        "display" : "Unspecified anomaly of dental arch relationship"
      },
      {
        "code" : "M26.211",
        "display" : "Malocclusion, Angle's class I"
      },
      {
        "code" : "M26.212",
        "display" : "Malocclusion, Angle's class II"
      },
      {
        "code" : "M26.213",
        "display" : "Malocclusion, Angle's class III"
      },
      {
        "code" : "M26.219",
        "display" : "Malocclusion, Angle's class, unspecified"
      },
      {
        "code" : "M26.220",
        "display" : "Open anterior occlusal relationship"
      },
      {
        "code" : "M26.221",
        "display" : "Open posterior occlusal relationship"
      },
      {
        "code" : "M26.23",
        "display" : "Excessive horizontal overlap"
      },
      {
        "code" : "M26.24",
        "display" : "Reverse articulation"
      },
      {
        "code" : "M26.25",
        "display" : "Anomalies of interarch distance"
      },
      {
        "code" : "M26.29",
        "display" : "Other anomalies of dental arch relationship"
      },
      {
        "code" : "M26.30",
        "display" : "Unspecified anomaly of tooth position of fully erupted tooth or teeth"
      },
      {
        "code" : "M26.31",
        "display" : "Crowding of fully erupted teeth"
      },
      {
        "code" : "M26.32",
        "display" : "Excessive spacing of fully erupted teeth"
      },
      {
        "code" : "M26.33",
        "display" : "Horizontal displacement of fully erupted tooth or teeth"
      },
      {
        "code" : "M26.34",
        "display" : "Vertical displacement of fully erupted tooth or teeth"
      },
      {
        "code" : "M26.35",
        "display" : "Rotation of fully erupted tooth or teeth"
      },
      {
        "code" : "M26.36",
        "display" : "Insufficient interocclusal distance of fully erupted teeth (ridge)"
      },
      {
        "code" : "M26.37",
        "display" : "Excessive interocclusal distance of fully erupted teeth"
      },
      {
        "code" : "M26.39",
        "display" : "Other anomalies of tooth position of fully erupted tooth or teeth"
      },
      {
        "code" : "M26.4",
        "display" : "Malocclusion, unspecified"
      },
      {
        "code" : "M26.50",
        "display" : "Dentofacial functional abnormalities, unspecified"
      },
      {
        "code" : "M26.51",
        "display" : "Abnormal jaw closure"
      },
      {
        "code" : "M26.52",
        "display" : "Limited mandibular range of motion"
      },
      {
        "code" : "M26.53",
        "display" : "Deviation in opening and closing of the mandible"
      },
      {
        "code" : "M26.54",
        "display" : "Insufficient anterior guidance"
      },
      {
        "code" : "M26.55",
        "display" : "Centric occlusion maximum intercuspation discrepancy"
      },
      {
        "code" : "M26.56",
        "display" : "Non-working side interference"
      },
      {
        "code" : "M26.57",
        "display" : "Lack of posterior occlusal support"
      },
      {
        "code" : "M26.59",
        "display" : "Other dentofacial functional abnormalities"
      },
      {
        "code" : "M26.601",
        "display" : "Right temporomandibular joint disorder, unspecified"
      },
      {
        "code" : "M26.602",
        "display" : "Left temporomandibular joint disorder, unspecified"
      },
      {
        "code" : "M26.603",
        "display" : "Bilateral temporomandibular joint disorder, unspecified"
      },
      {
        "code" : "M26.609",
        "display" : "Unspecified temporomandibular joint disorder, unspecified side"
      },
      {
        "code" : "M26.611",
        "display" : "Adhesions and ankylosis of right temporomandibular joint"
      },
      {
        "code" : "M26.612",
        "display" : "Adhesions and ankylosis of left temporomandibular joint"
      },
      {
        "code" : "M26.613",
        "display" : "Adhesions and ankylosis of bilateral temporomandibular joint"
      },
      {
        "code" : "M26.619",
        "display" : "Adhesions and ankylosis of temporomandibular joint, unspecified side"
      },
      {
        "code" : "M26.621",
        "display" : "Arthralgia of right temporomandibular joint"
      },
      {
        "code" : "M26.622",
        "display" : "Arthralgia of left temporomandibular joint"
      },
      {
        "code" : "M26.623",
        "display" : "Arthralgia of bilateral temporomandibular joint"
      },
      {
        "code" : "M26.629",
        "display" : "Arthralgia of temporomandibular joint, unspecified side"
      },
      {
        "code" : "M26.631",
        "display" : "Articular disc disorder of right temporomandibular joint"
      },
      {
        "code" : "M26.632",
        "display" : "Articular disc disorder of left temporomandibular joint"
      },
      {
        "code" : "M26.633",
        "display" : "Articular disc disorder of bilateral temporomandibular joint"
      },
      {
        "code" : "M26.639",
        "display" : "Articular disc disorder of temporomandibular joint, unspecified side"
      },
      {
        "code" : "M26.641",
        "display" : "Arthritis of right temporomandibular joint"
      },
      {
        "code" : "M26.642",
        "display" : "Arthritis of left temporomandibular joint"
      },
      {
        "code" : "M26.643",
        "display" : "Arthritis of bilateral temporomandibular joint"
      },
      {
        "code" : "M26.649",
        "display" : "Arthritis of unspecified temporomandibular joint"
      },
      {
        "code" : "M26.651",
        "display" : "Arthropathy of right temporomandibular joint"
      },
      {
        "code" : "M26.652",
        "display" : "Arthropathy of left temporomandibular joint"
      },
      {
        "code" : "M26.653",
        "display" : "Arthropathy of bilateral temporomandibular joint"
      },
      {
        "code" : "M26.659",
        "display" : "Arthropathy of unspecified temporomandibular joint"
      },
      {
        "code" : "M26.69",
        "display" : "Other specified disorders of temporomandibular joint"
      },
      {
        "code" : "M26.70",
        "display" : "Unspecified alveolar anomaly"
      },
      {
        "code" : "M26.71",
        "display" : "Alveolar maxillary hyperplasia"
      },
      {
        "code" : "M26.72",
        "display" : "Alveolar mandibular hyperplasia"
      },
      {
        "code" : "M26.73",
        "display" : "Alveolar maxillary hypoplasia"
      },
      {
        "code" : "M26.74",
        "display" : "Alveolar mandibular hypoplasia"
      },
      {
        "code" : "M26.79",
        "display" : "Other specified alveolar anomalies"
      },
      {
        "code" : "M26.81",
        "display" : "Anterior soft tissue impingement"
      },
      {
        "code" : "M26.82",
        "display" : "Posterior soft tissue impingement"
      },
      {
        "code" : "M26.89",
        "display" : "Other dentofacial anomalies"
      },
      {
        "code" : "M26.9",
        "display" : "Dentofacial anomaly, unspecified"
      },
      {
        "code" : "M27.0",
        "display" : "Developmental disorders of jaws"
      },
      {
        "code" : "M27.1",
        "display" : "Giant cell granuloma, central"
      },
      {
        "code" : "M27.2",
        "display" : "Inflammatory conditions of jaws"
      },
      {
        "code" : "M27.3",
        "display" : "Alveolitis of jaws"
      },
      {
        "code" : "M27.40",
        "display" : "Unspecified cyst of jaw"
      },
      {
        "code" : "M27.49",
        "display" : "Other cysts of jaw"
      },
      {
        "code" : "M27.51",
        "display" : "Perforation of root canal space due to endodontic treatment"
      },
      {
        "code" : "M27.52",
        "display" : "Endodontic overfill"
      },
      {
        "code" : "M27.53",
        "display" : "Endodontic underfill"
      },
      {
        "code" : "M27.59",
        "display" : "Other periradicular pathology associated with previous endodontic treatment"
      },
      {
        "code" : "M27.61",
        "display" : "Osseointegration failure of dental implant"
      },
      {
        "code" : "M27.62",
        "display" : "Post-osseointegration biological failure of dental implant"
      },
      {
        "code" : "M27.63",
        "display" : "Post-osseointegration mechanical failure of dental implant"
      },
      {
        "code" : "M27.69",
        "display" : "Other endosseous dental implant failure"
      },
      {
        "code" : "M27.8",
        "display" : "Other specified diseases of jaws"
      },
      {
        "code" : "M27.9",
        "display" : "Disease of jaws, unspecified"
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
        "code" : "M40.202",
        "display" : "Unspecified kyphosis, cervical region"
      },
      {
        "code" : "M40.203",
        "display" : "Unspecified kyphosis, cervicothoracic region"
      },
      {
        "code" : "M40.204",
        "display" : "Unspecified kyphosis, thoracic region"
      },
      {
        "code" : "M40.205",
        "display" : "Unspecified kyphosis, thoracolumbar region"
      },
      {
        "code" : "M40.209",
        "display" : "Unspecified kyphosis, site unspecified"
      },
      {
        "code" : "M40.292",
        "display" : "Other kyphosis, cervical region"
      },
      {
        "code" : "M40.293",
        "display" : "Other kyphosis, cervicothoracic region"
      },
      {
        "code" : "M40.294",
        "display" : "Other kyphosis, thoracic region"
      },
      {
        "code" : "M40.295",
        "display" : "Other kyphosis, thoracolumbar region"
      },
      {
        "code" : "M40.299",
        "display" : "Other kyphosis, site unspecified"
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
        "code" : "M40.36",
        "display" : "Flatback syndrome, lumbar region"
      },
      {
        "code" : "M40.37",
        "display" : "Flatback syndrome, lumbosacral region"
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
        "code" : "M40.46",
        "display" : "Postural lordosis, lumbar region"
      },
      {
        "code" : "M40.47",
        "display" : "Postural lordosis, lumbosacral region"
      },
      {
        "code" : "M40.50",
        "display" : "Lordosis, unspecified, site unspecified"
      },
      {
        "code" : "M40.55",
        "display" : "Lordosis, unspecified, thoracolumbar region"
      },
      {
        "code" : "M40.56",
        "display" : "Lordosis, unspecified, lumbar region"
      },
      {
        "code" : "M40.57",
        "display" : "Lordosis, unspecified, lumbosacral region"
      },
      {
        "code" : "M41.00",
        "display" : "Infantile idiopathic scoliosis, site unspecified"
      },
      {
        "code" : "M41.02",
        "display" : "Infantile idiopathic scoliosis, cervical region"
      },
      {
        "code" : "M41.03",
        "display" : "Infantile idiopathic scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.04",
        "display" : "Infantile idiopathic scoliosis, thoracic region"
      },
      {
        "code" : "M41.05",
        "display" : "Infantile idiopathic scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.06",
        "display" : "Infantile idiopathic scoliosis, lumbar region"
      },
      {
        "code" : "M41.07",
        "display" : "Infantile idiopathic scoliosis, lumbosacral region"
      },
      {
        "code" : "M41.08",
        "display" : "Infantile idiopathic scoliosis, sacral and sacrococcygeal region"
      },
      {
        "code" : "M41.112",
        "display" : "Juvenile idiopathic scoliosis, cervical region"
      },
      {
        "code" : "M41.113",
        "display" : "Juvenile idiopathic scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.114",
        "display" : "Juvenile idiopathic scoliosis, thoracic region"
      },
      {
        "code" : "M41.115",
        "display" : "Juvenile idiopathic scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.116",
        "display" : "Juvenile idiopathic scoliosis, lumbar region"
      },
      {
        "code" : "M41.117",
        "display" : "Juvenile idiopathic scoliosis, lumbosacral region"
      },
      {
        "code" : "M41.119",
        "display" : "Juvenile idiopathic scoliosis, site unspecified"
      },
      {
        "code" : "M41.122",
        "display" : "Adolescent idiopathic scoliosis, cervical region"
      },
      {
        "code" : "M41.123",
        "display" : "Adolescent idiopathic scoliosis, cervicothoracic region"
      },
      {
        "code" : "M41.124",
        "display" : "Adolescent idiopathic scoliosis, thoracic region"
      },
      {
        "code" : "M41.125",
        "display" : "Adolescent idiopathic scoliosis, thoracolumbar region"
      },
      {
        "code" : "M41.126",
        "display" : "Adolescent idiopathic scoliosis, lumbar region"
      },
      {
        "code" : "M41.127",
        "display" : "Adolescent idiopathic scoliosis, lumbosacral region"
      },
      {
        "code" : "M41.129",
        "display" : "Adolescent idiopathic scoliosis, site unspecified"
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
        "code" : "M41.26",
        "display" : "Other idiopathic scoliosis, lumbar region"
      },
      {
        "code" : "M41.27",
        "display" : "Other idiopathic scoliosis, lumbosacral region"
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
        "code" : "M41.41",
        "display" : "Neuromuscular scoliosis, occipito-atlanto-axial region"
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
        "code" : "M41.46",
        "display" : "Neuromuscular scoliosis, lumbar region"
      },
      {
        "code" : "M41.47",
        "display" : "Neuromuscular scoliosis, lumbosacral region"
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
        "code" : "M41.56",
        "display" : "Other secondary scoliosis, lumbar region"
      },
      {
        "code" : "M41.57",
        "display" : "Other secondary scoliosis, lumbosacral region"
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
        "code" : "M41.86",
        "display" : "Other forms of scoliosis, lumbar region"
      },
      {
        "code" : "M41.87",
        "display" : "Other forms of scoliosis, lumbosacral region"
      },
      {
        "code" : "M41.9",
        "display" : "Scoliosis, unspecified"
      },
      {
        "code" : "M42.00",
        "display" : "Juvenile osteochondrosis of spine, site unspecified"
      },
      {
        "code" : "M42.01",
        "display" : "Juvenile osteochondrosis of spine, occipito-atlanto-axial region"
      },
      {
        "code" : "M42.02",
        "display" : "Juvenile osteochondrosis of spine, cervical region"
      },
      {
        "code" : "M42.03",
        "display" : "Juvenile osteochondrosis of spine, cervicothoracic region"
      },
      {
        "code" : "M42.04",
        "display" : "Juvenile osteochondrosis of spine, thoracic region"
      },
      {
        "code" : "M42.05",
        "display" : "Juvenile osteochondrosis of spine, thoracolumbar region"
      },
      {
        "code" : "M42.06",
        "display" : "Juvenile osteochondrosis of spine, lumbar region"
      },
      {
        "code" : "M42.07",
        "display" : "Juvenile osteochondrosis of spine, lumbosacral region"
      },
      {
        "code" : "M42.08",
        "display" : "Juvenile osteochondrosis of spine, sacral and sacrococcygeal region"
      },
      {
        "code" : "M42.09",
        "display" : "Juvenile osteochondrosis of spine, multiple sites in spine"
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
        "code" : "M42.11",
        "display" : "Adult osteochondrosis of spine, occipito-atlanto-axial region"
      },
      {
        "code" : "M42.15",
        "display" : "Adult osteochondrosis of spine, thoracolumbar region"
      },
      {
        "code" : "M42.16",
        "display" : "Adult osteochondrosis of spine, lumbar region"
      },
      {
        "code" : "M42.17",
        "display" : "Adult osteochondrosis of spine, lumbosacral region"
      },
      {
        "code" : "M42.18",
        "display" : "Adult osteochondrosis of spine, sacral and sacrococcygeal region"
      },
      {
        "code" : "M42.19",
        "display" : "Adult osteochondrosis of spine, multiple sites in spine"
      },
      {
        "code" : "M42.9",
        "display" : "Spinal osteochondrosis, unspecified"
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
        "code" : "M43.01",
        "display" : "Spondylolysis, occipito-atlanto-axial region"
      },
      {
        "code" : "M43.05",
        "display" : "Spondylolysis, thoracolumbar region"
      },
      {
        "code" : "M43.06",
        "display" : "Spondylolysis, lumbar region"
      },
      {
        "code" : "M43.07",
        "display" : "Spondylolysis, lumbosacral region"
      },
      {
        "code" : "M43.08",
        "display" : "Spondylolysis, sacral and sacrococcygeal region"
      },
      {
        "code" : "M43.09",
        "display" : "Spondylolysis, multiple sites in spine"
      },
      {
        "code" : "M43.10",
        "display" : "Spondylolisthesis, site unspecified"
      },
      {
        "code" : "M43.11",
        "display" : "Spondylolisthesis, occipito-atlanto-axial region"
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
        "code" : "M43.16",
        "display" : "Spondylolisthesis, lumbar region"
      },
      {
        "code" : "M43.17",
        "display" : "Spondylolisthesis, lumbosacral region"
      },
      {
        "code" : "M43.18",
        "display" : "Spondylolisthesis, sacral and sacrococcygeal region"
      },
      {
        "code" : "M43.19",
        "display" : "Spondylolisthesis, multiple sites in spine"
      },
      {
        "code" : "M43.20",
        "display" : "Fusion of spine, site unspecified"
      },
      {
        "code" : "M43.21",
        "display" : "Fusion of spine, occipito-atlanto-axial region"
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
        "code" : "M43.26",
        "display" : "Fusion of spine, lumbar region"
      },
      {
        "code" : "M43.27",
        "display" : "Fusion of spine, lumbosacral region"
      },
      {
        "code" : "M43.28",
        "display" : "Fusion of spine, sacral and sacrococcygeal region"
      },
      {
        "code" : "M43.3",
        "display" : "Recurrent atlantoaxial dislocation with myelopathy"
      },
      {
        "code" : "M43.4",
        "display" : "Other recurrent atlantoaxial dislocation"
      },
      {
        "code" : "M43.5X2",
        "display" : "Other recurrent vertebral dislocation, cervical region"
      },
      {
        "code" : "M43.5X3",
        "display" : "Other recurrent vertebral dislocation, cervicothoracic region"
      },
      {
        "code" : "M43.5X4",
        "display" : "Other recurrent vertebral dislocation, thoracic region"
      },
      {
        "code" : "M43.5X5",
        "display" : "Other recurrent vertebral dislocation, thoracolumbar region"
      },
      {
        "code" : "M43.5X6",
        "display" : "Other recurrent vertebral dislocation, lumbar region"
      },
      {
        "code" : "M43.5X7",
        "display" : "Other recurrent vertebral dislocation, lumbosacral region"
      },
      {
        "code" : "M43.5X8",
        "display" : "Other recurrent vertebral dislocation, sacral and sacrococcygeal region"
      },
      {
        "code" : "M43.5X9",
        "display" : "Other recurrent vertebral dislocation, site unspecified"
      },
      {
        "code" : "M43.6",
        "display" : "Torticollis"
      },
      {
        "code" : "M43.8",
        "display" : "Other specified deforming dorsopathies"
      },
      {
        "code" : "M43.8X1",
        "display" : "Other specified deforming dorsopathies, occipito-atlanto-axial region"
      },
      {
        "code" : "M43.8X2",
        "display" : "Other specified deforming dorsopathies, cervical region"
      },
      {
        "code" : "M43.8X3",
        "display" : "Other specified deforming dorsopathies, cervicothoracic region"
      },
      {
        "code" : "M43.8X4",
        "display" : "Other specified deforming dorsopathies, thoracic region"
      },
      {
        "code" : "M43.8X5",
        "display" : "Other specified deforming dorsopathies, thoracolumbar region"
      },
      {
        "code" : "M43.8X6",
        "display" : "Other specified deforming dorsopathies, lumbar region"
      },
      {
        "code" : "M43.8X7",
        "display" : "Other specified deforming dorsopathies, lumbosacral region"
      },
      {
        "code" : "M43.8X8",
        "display" : "Other specified deforming dorsopathies, sacral and sacrococcygeal region"
      },
      {
        "code" : "M43.8X9",
        "display" : "Other specified deforming dorsopathies, site unspecified"
      },
      {
        "code" : "M43.9",
        "display" : "Deforming dorsopathy, unspecified"
      },
      {
        "code" : "M45.0",
        "display" : "Ankylosing spondylitis of multiple sites in spine"
      },
      {
        "code" : "M45.1",
        "display" : "Ankylosing spondylitis of occipito-atlanto-axial region"
      },
      {
        "code" : "M45.2",
        "display" : "Ankylosing spondylitis of cervical region"
      },
      {
        "code" : "M45.3",
        "display" : "Ankylosing spondylitis of cervicothoracic region"
      },
      {
        "code" : "M45.4",
        "display" : "Ankylosing spondylitis of thoracic region"
      },
      {
        "code" : "M45.5",
        "display" : "Ankylosing spondylitis of thoracolumbar region"
      },
      {
        "code" : "M45.6",
        "display" : "Ankylosing spondylitis lumbar region"
      },
      {
        "code" : "M45.7",
        "display" : "Ankylosing spondylitis of lumbosacral region"
      },
      {
        "code" : "M45.8",
        "display" : "Ankylosing spondylitis sacral and sacrococcygeal region"
      },
      {
        "code" : "M45.9",
        "display" : "Ankylosing spondylitis of unspecified sites in spine"
      },
      {
        "code" : "M45.A0",
        "display" : "Non-radiographic axial spondyloarthritis of unspecified sites in spine"
      },
      {
        "code" : "M45.A1",
        "display" : "Non-radiographic axial spondyloarthritis of occipito-atlanto-axial region"
      },
      {
        "code" : "M45.A2",
        "display" : "Non-radiographic axial spondyloarthritis of cervical region"
      },
      {
        "code" : "M45.A3",
        "display" : "Non-radiographic axial spondyloarthritis of cervicothoracic region"
      },
      {
        "code" : "M45.A4",
        "display" : "Non-radiographic axial spondyloarthritis of thoracic region"
      },
      {
        "code" : "M45.A5",
        "display" : "Non-radiographic axial spondyloarthritis of thoracolumbar region"
      },
      {
        "code" : "M45.A6",
        "display" : "Non-radiographic axial spondyloarthritis of lumbar region"
      },
      {
        "code" : "M45.A7",
        "display" : "Non-radiographic axial spondyloarthritis of lumbosacral region"
      },
      {
        "code" : "M45.A8",
        "display" : "Non-radiographic axial spondyloarthritis of sacral and sacrococcygeal region"
      },
      {
        "code" : "M45.AB",
        "display" : "Non-radiographic axial spondyloarthritis of multiple sites in spine"
      },
      {
        "code" : "M47.011",
        "display" : "Anterior spinal artery compression syndromes, occipito-atlanto-axial region"
      },
      {
        "code" : "M47.012",
        "display" : "Anterior spinal artery compression syndromes, cervical region"
      },
      {
        "code" : "M47.013",
        "display" : "Anterior spinal artery compression syndromes, cervicothoracic region"
      },
      {
        "code" : "M47.014",
        "display" : "Anterior spinal artery compression syndromes, thoracic region"
      },
      {
        "code" : "M47.015",
        "display" : "Anterior spinal artery compression syndromes, thoracolumbar region"
      },
      {
        "code" : "M47.016",
        "display" : "Anterior spinal artery compression syndromes, lumbar region"
      },
      {
        "code" : "M47.019",
        "display" : "Anterior spinal artery compression syndromes, site unspecified"
      },
      {
        "code" : "M47.021",
        "display" : "Vertebral artery compression syndromes, occipito-atlanto-axial region"
      },
      {
        "code" : "M47.022",
        "display" : "Vertebral artery compression syndromes, cervical region"
      },
      {
        "code" : "M47.029",
        "display" : "Vertebral artery compression syndromes, site unspecified"
      },
      {
        "code" : "M47.10",
        "display" : "Other spondylosis with myelopathy, site unspecified"
      },
      {
        "code" : "M47.11",
        "display" : "Other spondylosis with myelopathy, occipito-atlanto-axial region"
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
        "code" : "M47.16",
        "display" : "Other spondylosis with myelopathy, lumbar region"
      },
      {
        "code" : "M47.891",
        "display" : "Other spondylosis, occipito-atlanto-axial region"
      },
      {
        "code" : "M47.892",
        "display" : "Other spondylosis, cervical region"
      },
      {
        "code" : "M47.893",
        "display" : "Other spondylosis, cervicothoracic region"
      },
      {
        "code" : "M47.894",
        "display" : "Other spondylosis, thoracic region"
      },
      {
        "code" : "M47.895",
        "display" : "Other spondylosis, thoracolumbar region"
      },
      {
        "code" : "M47.896",
        "display" : "Other spondylosis, lumbar region"
      },
      {
        "code" : "M47.897",
        "display" : "Other spondylosis, lumbosacral region"
      },
      {
        "code" : "M47.898",
        "display" : "Other spondylosis, sacral and sacrococcygeal region"
      },
      {
        "code" : "M47.899",
        "display" : "Other spondylosis, site unspecified"
      },
      {
        "code" : "M47.9",
        "display" : "Spondylosis, unspecified"
      },
      {
        "code" : "M47.20",
        "display" : "Other spondylosis with radiculopathy, site unspecified"
      },
      {
        "code" : "M47.21",
        "display" : "Other spondylosis with radiculopathy, occipito-atlanto-axial region"
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
        "code" : "M47.28",
        "display" : "Other spondylosis with radiculopathy, sacral and sacrococcygeal region"
      },
      {
        "code" : "M47.811",
        "display" : "Spondylosis without myelopathy or radiculopathy, occipito-atlanto-axial region"
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
        "code" : "M47.818",
        "display" : "Spondylosis without myelopathy or radiculopathy, sacral and sacrococcygeal region"
      },
      {
        "code" : "M47.819",
        "display" : "Spondylosis without myelopathy or radiculopathy, site unspecified"
      },
      {
        "code" : "M48.00",
        "display" : "Spinal stenosis, site unspecified"
      },
      {
        "code" : "M48.01",
        "display" : "Spinal stenosis, occipito-atlanto-axial region"
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
        "code" : "M48.061",
        "display" : "Spinal stenosis, lumbar region without neurogenic claudication"
      },
      {
        "code" : "M48.062",
        "display" : "Spinal stenosis, lumbar region with neurogenic claudication"
      },
      {
        "code" : "M48.07",
        "display" : "Spinal stenosis, lumbosacral region"
      },
      {
        "code" : "M48.08",
        "display" : "Spinal stenosis, sacral and sacrococcygeal region"
      },
      {
        "code" : "M48.10",
        "display" : "Ankylosing hyperostosis [Forestier], site unspecified"
      },
      {
        "code" : "M48.11",
        "display" : "Ankylosing hyperostosis [Forestier], occipito-atlanto-axial region"
      },
      {
        "code" : "M48.12",
        "display" : "Ankylosing hyperostosis [Forestier], cervical region"
      },
      {
        "code" : "M48.13",
        "display" : "Ankylosing hyperostosis [Forestier], cervicothoracic region"
      },
      {
        "code" : "M48.14",
        "display" : "Ankylosing hyperostosis [Forestier], thoracic region"
      },
      {
        "code" : "M48.15",
        "display" : "Ankylosing hyperostosis [Forestier], thoracolumbar region"
      },
      {
        "code" : "M48.16",
        "display" : "Ankylosing hyperostosis [Forestier], lumbar region"
      },
      {
        "code" : "M48.17",
        "display" : "Ankylosing hyperostosis [Forestier], lumbosacral region"
      },
      {
        "code" : "M48.18",
        "display" : "Ankylosing hyperostosis [Forestier], sacral and sacrococcygeal region"
      },
      {
        "code" : "M48.19",
        "display" : "Ankylosing hyperostosis [Forestier], multiple sites in spine"
      },
      {
        "code" : "M48.20",
        "display" : "Kissing spine, site unspecified"
      },
      {
        "code" : "M48.21",
        "display" : "Kissing spine, occipito-atlanto-axial region"
      },
      {
        "code" : "M48.22",
        "display" : "Kissing spine, cervical region"
      },
      {
        "code" : "M48.23",
        "display" : "Kissing spine, cervicothoracic region"
      },
      {
        "code" : "M48.24",
        "display" : "Kissing spine, thoracic region"
      },
      {
        "code" : "M48.25",
        "display" : "Kissing spine, thoracolumbar region"
      },
      {
        "code" : "M48.26",
        "display" : "Kissing spine, lumbar region"
      },
      {
        "code" : "M48.27",
        "display" : "Kissing spine, lumbosacral region"
      },
      {
        "code" : "M48.30",
        "display" : "Traumatic spondylopathy, site unspecified"
      },
      {
        "code" : "M48.31",
        "display" : "Traumatic spondylopathy, occipito-atlanto-axial region"
      },
      {
        "code" : "M48.32",
        "display" : "Traumatic spondylopathy, cervical region"
      },
      {
        "code" : "M48.33",
        "display" : "Traumatic spondylopathy, cervicothoracic region"
      },
      {
        "code" : "M48.34",
        "display" : "Traumatic spondylopathy, thoracic region"
      },
      {
        "code" : "M48.35",
        "display" : "Traumatic spondylopathy, thoracolumbar region"
      },
      {
        "code" : "M48.36",
        "display" : "Traumatic spondylopathy, lumbar region"
      },
      {
        "code" : "M48.37",
        "display" : "Traumatic spondylopathy, lumbosacral region"
      },
      {
        "code" : "M48.38",
        "display" : "Traumatic spondylopathy, sacral and sacrococcygeal region"
      },
      {
        "code" : "M48.40XA",
        "display" : "Fatigue fracture of vertebra, site unspecified, initial encounter for fracture"
      },
      {
        "code" : "M48.40XD",
        "display" : "Fatigue fracture of vertebra, site unspecified, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.40XG",
        "display" : "Fatigue fracture of vertebra, site unspecified, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.40XS",
        "display" : "Fatigue fracture of vertebra, site unspecified, sequela of fracture"
      },
      {
        "code" : "M48.41XA",
        "display" : "Fatigue fracture of vertebra, occipito-atlanto-axial region, initial encounter for fracture"
      },
      {
        "code" : "M48.41XD",
        "display" : "Fatigue fracture of vertebra, occipito-atlanto-axial region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.41XG",
        "display" : "Fatigue fracture of vertebra, occipito-atlanto-axial region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.41XS",
        "display" : "Fatigue fracture of vertebra, occipito-atlanto-axial region, sequela of fracture"
      },
      {
        "code" : "M48.42XA",
        "display" : "Fatigue fracture of vertebra, cervical region, initial encounter for fracture"
      },
      {
        "code" : "M48.42XD",
        "display" : "Fatigue fracture of vertebra, cervical region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.42XG",
        "display" : "Fatigue fracture of vertebra, cervical region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.42XS",
        "display" : "Fatigue fracture of vertebra, cervical region, sequela of fracture"
      },
      {
        "code" : "M48.43XA",
        "display" : "Fatigue fracture of vertebra, cervicothoracic region, initial encounter for fracture"
      },
      {
        "code" : "M48.43XD",
        "display" : "Fatigue fracture of vertebra, cervicothoracic region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.43XG",
        "display" : "Fatigue fracture of vertebra, cervicothoracic region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.43XS",
        "display" : "Fatigue fracture of vertebra, cervicothoracic region, sequela of fracture"
      },
      {
        "code" : "M48.44XA",
        "display" : "Fatigue fracture of vertebra, thoracic region, initial encounter for fracture"
      },
      {
        "code" : "M48.44XD",
        "display" : "Fatigue fracture of vertebra, thoracic region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.44XG",
        "display" : "Fatigue fracture of vertebra, thoracic region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.44XS",
        "display" : "Fatigue fracture of vertebra, thoracic region, sequela of fracture"
      },
      {
        "code" : "M48.45XA",
        "display" : "Fatigue fracture of vertebra, thoracolumbar region, initial encounter for fracture"
      },
      {
        "code" : "M48.45XD",
        "display" : "Fatigue fracture of vertebra, thoracolumbar region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.45XG",
        "display" : "Fatigue fracture of vertebra, thoracolumbar region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.45XS",
        "display" : "Fatigue fracture of vertebra, thoracolumbar region, sequela of fracture"
      },
      {
        "code" : "M48.46XA",
        "display" : "Fatigue fracture of vertebra, lumbar region, initial encounter for fracture"
      },
      {
        "code" : "M48.46XD",
        "display" : "Fatigue fracture of vertebra, lumbar region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.46XG",
        "display" : "Fatigue fracture of vertebra, lumbar region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.46XS",
        "display" : "Fatigue fracture of vertebra, lumbar region, sequela of fracture"
      },
      {
        "code" : "M48.47XA",
        "display" : "Fatigue fracture of vertebra, lumbosacral region, initial encounter for fracture"
      },
      {
        "code" : "M48.47XD",
        "display" : "Fatigue fracture of vertebra, lumbosacral region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.47XG",
        "display" : "Fatigue fracture of vertebra, lumbosacral region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.47XS",
        "display" : "Fatigue fracture of vertebra, lumbosacral region, sequela of fracture"
      },
      {
        "code" : "M48.48XA",
        "display" : "Fatigue fracture of vertebra, sacral and sacrococcygeal region, initial encounter for fracture"
      },
      {
        "code" : "M48.48XD",
        "display" : "Fatigue fracture of vertebra, sacral and sacrococcygeal region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.48XG",
        "display" : "Fatigue fracture of vertebra, sacral and sacrococcygeal region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.48XS",
        "display" : "Fatigue fracture of vertebra, sacral and sacrococcygeal region, sequela of fracture"
      },
      {
        "code" : "M48.50XA",
        "display" : "Collapsed vertebra, not elsewhere classified, site unspecified, initial encounter for fracture"
      },
      {
        "code" : "M48.50XD",
        "display" : "Collapsed vertebra, not elsewhere classified, site unspecified, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.50XG",
        "display" : "Collapsed vertebra, not elsewhere classified, site unspecified, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.50XS",
        "display" : "Collapsed vertebra, not elsewhere classified, site unspecified, sequela of fracture"
      },
      {
        "code" : "M48.51XA",
        "display" : "Collapsed vertebra, not elsewhere classified, occipito-atlanto-axial region, initial encounter for fracture"
      },
      {
        "code" : "M48.51XD",
        "display" : "Collapsed vertebra, not elsewhere classified, occipito-atlanto-axial region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.51XG",
        "display" : "Collapsed vertebra, not elsewhere classified, occipito-atlanto-axial region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.51XS",
        "display" : "Collapsed vertebra, not elsewhere classified, occipito-atlanto-axial region, sequela of fracture"
      },
      {
        "code" : "M48.52XA",
        "display" : "Collapsed vertebra, not elsewhere classified, cervical region, initial encounter for fracture"
      },
      {
        "code" : "M48.52XD",
        "display" : "Collapsed vertebra, not elsewhere classified, cervical region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.52XG",
        "display" : "Collapsed vertebra, not elsewhere classified, cervical region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.52XS",
        "display" : "Collapsed vertebra, not elsewhere classified, cervical region, sequela of fracture"
      },
      {
        "code" : "M48.53XA",
        "display" : "Collapsed vertebra, not elsewhere classified, cervicothoracic region, initial encounter for fracture"
      },
      {
        "code" : "M48.53XD",
        "display" : "Collapsed vertebra, not elsewhere classified, cervicothoracic region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.53XG",
        "display" : "Collapsed vertebra, not elsewhere classified, cervicothoracic region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.53XS",
        "display" : "Collapsed vertebra, not elsewhere classified, cervicothoracic region, sequela of fracture"
      },
      {
        "code" : "M48.54XA",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracic region, initial encounter for fracture"
      },
      {
        "code" : "M48.54XD",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracic region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.54XG",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracic region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.54XS",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracic region, sequela of fracture"
      },
      {
        "code" : "M48.55XA",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracolumbar region, initial encounter for fracture"
      },
      {
        "code" : "M48.55XD",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracolumbar region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.55XG",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracolumbar region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.55XS",
        "display" : "Collapsed vertebra, not elsewhere classified, thoracolumbar region, sequela of fracture"
      },
      {
        "code" : "M48.56XA",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbar region, initial encounter for fracture"
      },
      {
        "code" : "M48.56XD",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbar region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.56XG",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbar region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.56XS",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbar region, sequela of fracture"
      },
      {
        "code" : "M48.57XA",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbosacral region, initial encounter for fracture"
      },
      {
        "code" : "M48.57XD",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbosacral region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.57XG",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbosacral region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.57XS",
        "display" : "Collapsed vertebra, not elsewhere classified, lumbosacral region, sequela of fracture"
      },
      {
        "code" : "M48.58XA",
        "display" : "Collapsed vertebra, not elsewhere classified, sacral and sacrococcygeal region, initial encounter for fracture"
      },
      {
        "code" : "M48.58XD",
        "display" : "Collapsed vertebra, not elsewhere classified, sacral and sacrococcygeal region, subsequent encounter for fracture with routine healing"
      },
      {
        "code" : "M48.58XG",
        "display" : "Collapsed vertebra, not elsewhere classified, sacral and sacrococcygeal region, subsequent encounter for fracture with delayed healing"
      },
      {
        "code" : "M48.58XS",
        "display" : "Collapsed vertebra, not elsewhere classified, sacral and sacrococcygeal region, sequela of fracture"
      },
      {
        "code" : "M48.8X1",
        "display" : "Other specified spondylopathies, occipito-atlanto-axial region"
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
        "code" : "M48.8X8",
        "display" : "Other specified spondylopathies, sacral and sacrococcygeal region"
      },
      {
        "code" : "M48.8X9",
        "display" : "Other specified spondylopathies, site unspecified"
      },
      {
        "code" : "M48.9",
        "display" : "Spondylopathy, unspecified"
      },
      {
        "code" : "M49.80",
        "display" : "Spondylopathy in diseases classified elsewhere, site unspecified"
      },
      {
        "code" : "M49.81",
        "display" : "Spondylopathy in diseases classified elsewhere, occipito-atlanto-axial region"
      },
      {
        "code" : "M49.82",
        "display" : "Spondylopathy in diseases classified elsewhere, cervical region"
      },
      {
        "code" : "M49.83",
        "display" : "Spondylopathy in diseases classified elsewhere, cervicothoracic region"
      },
      {
        "code" : "M49.84",
        "display" : "Spondylopathy in diseases classified elsewhere, thoracic region"
      },
      {
        "code" : "M49.85",
        "display" : "Spondylopathy in diseases classified elsewhere, thoracolumbar region"
      },
      {
        "code" : "M49.86",
        "display" : "Spondylopathy in diseases classified elsewhere, lumbar region"
      },
      {
        "code" : "M49.87",
        "display" : "Spondylopathy in diseases classified elsewhere, lumbosacral region"
      },
      {
        "code" : "M49.88",
        "display" : "Spondylopathy in diseases classified elsewhere, sacral and sacrococcygeal region"
      },
      {
        "code" : "M49.89",
        "display" : "Spondylopathy in diseases classified elsewhere, multiple sites in spine"
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
        "code" : "M50.020",
        "display" : "Cervical disc disorder with myelopathy, mid-cervical region, unspecified level"
      },
      {
        "code" : "M50.021",
        "display" : "Cervical disc disorder at C4-C5 level with myelopathy"
      },
      {
        "code" : "M50.022",
        "display" : "Cervical disc disorder at C5-C6 level with myelopathy"
      },
      {
        "code" : "M50.023",
        "display" : "Cervical disc disorder at C6-C7 level with myelopathy"
      },
      {
        "code" : "M50.03",
        "display" : "Cervical disc disorder with myelopathy, cervicothoracic region"
      },
      {
        "code" : "M50.10",
        "display" : "Cervical disc disorder with radiculopathy, unspecified cervical region"
      },
      {
        "code" : "M50.11",
        "display" : "Cervical disc disorder with radiculopathy, high cervical region"
      },
      {
        "code" : "M50.120",
        "display" : "Mid-cervical disc disorder, unspecified level"
      },
      {
        "code" : "M50.121",
        "display" : "Cervical disc disorder at C4-C5 level with radiculopathy"
      },
      {
        "code" : "M50.122",
        "display" : "Cervical disc disorder at C5-C6 level with radiculopathy"
      },
      {
        "code" : "M50.123",
        "display" : "Cervical disc disorder at C6-C7 level with radiculopathy"
      },
      {
        "code" : "M50.13",
        "display" : "Cervical disc disorder with radiculopathy, cervicothoracic region"
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
        "code" : "M50.220",
        "display" : "Other cervical disc displacement, mid-cervical region, unspecified level"
      },
      {
        "code" : "M50.221",
        "display" : "Other cervical disc displacement at C4-C5 level"
      },
      {
        "code" : "M50.222",
        "display" : "Other cervical disc displacement at C5-C6 level"
      },
      {
        "code" : "M50.223",
        "display" : "Other cervical disc displacement at C6-C7 level"
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
        "code" : "M50.320",
        "display" : "Other cervical disc degeneration, mid-cervical region, unspecified level"
      },
      {
        "code" : "M50.321",
        "display" : "Other cervical disc degeneration at C4-C5 level"
      },
      {
        "code" : "M50.322",
        "display" : "Other cervical disc degeneration at C5-C6 level"
      },
      {
        "code" : "M50.323",
        "display" : "Other cervical disc degeneration at C6-C7 level"
      },
      {
        "code" : "M50.33",
        "display" : "Other cervical disc degeneration, cervicothoracic region"
      },
      {
        "code" : "M50.80",
        "display" : "Other cervical disc disorders, unspecified cervical region"
      },
      {
        "code" : "M50.81",
        "display" : "Other cervical disc disorders, high cervical region"
      },
      {
        "code" : "M50.820",
        "display" : "Other cervical disc disorders, mid-cervical region, unspecified level"
      },
      {
        "code" : "M50.821",
        "display" : "Other cervical disc disorders at C4-C5 level"
      },
      {
        "code" : "M50.822",
        "display" : "Other cervical disc disorders at C5-C6 level"
      },
      {
        "code" : "M50.823",
        "display" : "Other cervical disc disorders at C6-C7 level"
      },
      {
        "code" : "M50.83",
        "display" : "Other cervical disc disorders, cervicothoracic region"
      },
      {
        "code" : "M50.90",
        "display" : "Cervical disc disorder, unspecified, unspecified cervical region"
      },
      {
        "code" : "M50.91",
        "display" : "Cervical disc disorder, unspecified, high cervical region"
      },
      {
        "code" : "M50.920",
        "display" : "Unspecified cervical disc disorder, mid-cervical region, unspecified level"
      },
      {
        "code" : "M50.921",
        "display" : "Unspecified cervical disc disorder at C4-C5 level"
      },
      {
        "code" : "M50.922",
        "display" : "Unspecified cervical disc disorder at C5-C6 level"
      },
      {
        "code" : "M50.923",
        "display" : "Unspecified cervical disc disorder at C6-C7 level"
      },
      {
        "code" : "M50.93",
        "display" : "Cervical disc disorder, unspecified, cervicothoracic region"
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
        "code" : "M51.360",
        "display" : "Other intervertebral disc degeneration, lumbar region with discogenic back pain only"
      },
      {
        "code" : "M51.361",
        "display" : "Other intervertebral disc degeneration, lumbar region with lower extremity pain only"
      },
      {
        "code" : "M51.362",
        "display" : "Other intervertebral disc degeneration, lumbar region with discogenic back pain and lower extremity pain"
      },
      {
        "code" : "M51.369",
        "display" : "Other intervertebral disc degeneration, lumbar region without mention of lumbar back pain or lower extremity pain"
      },
      {
        "code" : "M51.370",
        "display" : "Other intervertebral disc degeneration, lumbosacral region with discogenic back pain only"
      },
      {
        "code" : "M51.371",
        "display" : "Other intervertebral disc degeneration, lumbosacral region with lower extremity pain only"
      },
      {
        "code" : "M51.372",
        "display" : "Other intervertebral disc degeneration, lumbosacral region with discogenic back pain and lower extremity pain"
      },
      {
        "code" : "M51.379",
        "display" : "Other intervertebral disc degeneration, lumbosacral region without mention of lumbar back pain or lower extremity pain"
      },
      {
        "code" : "M51.44",
        "display" : "Schmorl's nodes, thoracic region"
      },
      {
        "code" : "M51.45",
        "display" : "Schmorl's nodes, thoracolumbar region"
      },
      {
        "code" : "M51.46",
        "display" : "Schmorl's nodes, lumbar region"
      },
      {
        "code" : "M51.47",
        "display" : "Schmorl's nodes, lumbosacral region"
      },
      {
        "code" : "M51.84",
        "display" : "Other intervertebral disc disorders, thoracic region"
      },
      {
        "code" : "M51.85",
        "display" : "Other intervertebral disc disorders, thoracolumbar region"
      },
      {
        "code" : "M51.86",
        "display" : "Other intervertebral disc disorders, lumbar region"
      },
      {
        "code" : "M51.87",
        "display" : "Other intervertebral disc disorders, lumbosacral region"
      },
      {
        "code" : "M51.9",
        "display" : "Unspecified thoracic, thoracolumbar and lumbosacral intervertebral disc disorder"
      },
      {
        "code" : "M51.A0",
        "display" : "Intervertebral annulus fibrosus defect, lumbar region, unspecified size"
      },
      {
        "code" : "M51.A1",
        "display" : "Intervertebral annulus fibrosus defect, small, lumbar region"
      },
      {
        "code" : "M51.A2",
        "display" : "Intervertebral annulus fibrosus defect, large, lumbar region"
      },
      {
        "code" : "M51.A3",
        "display" : "Intervertebral annulus fibrosus defect, lumbosacral region, unspecified size"
      },
      {
        "code" : "M51.A4",
        "display" : "Intervertebral annulus fibrosus defect, small, lumbosacral region"
      },
      {
        "code" : "M51.A5",
        "display" : "Intervertebral annulus fibrosus defect, large, lumbosacral region"
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
        "code" : "M53.2X1",
        "display" : "Spinal instabilities, occipito-atlanto-axial region"
      },
      {
        "code" : "M53.2X2",
        "display" : "Spinal instabilities, cervical region"
      },
      {
        "code" : "M53.2X3",
        "display" : "Spinal instabilities, cervicothoracic region"
      },
      {
        "code" : "M53.2X4",
        "display" : "Spinal instabilities, thoracic region"
      },
      {
        "code" : "M53.2X5",
        "display" : "Spinal instabilities, thoracolumbar region"
      },
      {
        "code" : "M53.2X6",
        "display" : "Spinal instabilities, lumbar region"
      },
      {
        "code" : "M53.2X7",
        "display" : "Spinal instabilities, lumbosacral region"
      },
      {
        "code" : "M53.2X8",
        "display" : "Spinal instabilities, sacral and sacrococcygeal region"
      },
      {
        "code" : "M53.2X9",
        "display" : "Spinal instabilities, site unspecified"
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
        "code" : "M53.87",
        "display" : "Other specified dorsopathies, lumbosacral region"
      },
      {
        "code" : "M53.88",
        "display" : "Other specified dorsopathies, sacral and sacrococcygeal region"
      },
      {
        "code" : "M53.9",
        "display" : "Dorsopathy, unspecified"
      },
      {
        "code" : "M54.00",
        "display" : "Panniculitis affecting regions of neck and back, site unspecified"
      },
      {
        "code" : "M54.01",
        "display" : "Panniculitis affecting regions of neck and back, occipito-atlanto-axial region"
      },
      {
        "code" : "M54.02",
        "display" : "Panniculitis affecting regions of neck and back, cervical region"
      },
      {
        "code" : "M54.03",
        "display" : "Panniculitis affecting regions of neck and back, cervicothoracic region"
      },
      {
        "code" : "M54.04",
        "display" : "Panniculitis affecting regions of neck and back, thoracic region"
      },
      {
        "code" : "M54.05",
        "display" : "Panniculitis affecting regions of neck and back, thoracolumbar region"
      },
      {
        "code" : "M54.06",
        "display" : "Panniculitis affecting regions of neck and back, lumbar region"
      },
      {
        "code" : "M54.07",
        "display" : "Panniculitis affecting regions of neck and back, lumbosacral region"
      },
      {
        "code" : "M54.08",
        "display" : "Panniculitis affecting regions of neck and back, sacral and sacrococcygeal region"
      },
      {
        "code" : "M54.09",
        "display" : "Panniculitis affecting regions, neck and back, multiple sites in spine"
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
        "code" : "M54.17",
        "display" : "Radiculopathy, lumbosacral region"
      },
      {
        "code" : "M54.18",
        "display" : "Radiculopathy, sacral and sacrococcygeal region"
      },
      {
        "code" : "M54.2",
        "display" : "Cervicalgia"
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
        "code" : "M54.50",
        "display" : "Low back pain, unspecified"
      },
      {
        "code" : "M54.51",
        "display" : "Vertebrogenic low back pain"
      },
      {
        "code" : "M54.59",
        "display" : "Other low back pain"
      },
      {
        "code" : "M54.6",
        "display" : "Pain in thoracic spine"
      },
      {
        "code" : "M54.81",
        "display" : "Occipital neuralgia"
      },
      {
        "code" : "M54.89",
        "display" : "Other dorsalgia"
      },
      {
        "code" : "M54.9",
        "display" : "Dorsalgia, unspecified"
      },
      {
        "code" : "M61.00",
        "display" : "Myositis ossificans traumatica, unspecified site"
      },
      {
        "code" : "M61.011",
        "display" : "Myositis ossificans traumatica, right shoulder"
      },
      {
        "code" : "M61.012",
        "display" : "Myositis ossificans traumatica, left shoulder"
      },
      {
        "code" : "M61.019",
        "display" : "Myositis ossificans traumatica, unspecified shoulder"
      },
      {
        "code" : "M61.021",
        "display" : "Myositis ossificans traumatica, right upper arm"
      },
      {
        "code" : "M61.022",
        "display" : "Myositis ossificans traumatica, left upper arm"
      },
      {
        "code" : "M61.029",
        "display" : "Myositis ossificans traumatica, unspecified upper arm"
      },
      {
        "code" : "M61.031",
        "display" : "Myositis ossificans traumatica, right forearm"
      },
      {
        "code" : "M61.032",
        "display" : "Myositis ossificans traumatica, left forearm"
      },
      {
        "code" : "M61.039",
        "display" : "Myositis ossificans traumatica, unspecified forearm"
      },
      {
        "code" : "M61.041",
        "display" : "Myositis ossificans traumatica, right hand"
      },
      {
        "code" : "M61.042",
        "display" : "Myositis ossificans traumatica, left hand"
      },
      {
        "code" : "M61.049",
        "display" : "Myositis ossificans traumatica, unspecified hand"
      },
      {
        "code" : "M61.051",
        "display" : "Myositis ossificans traumatica, right thigh"
      },
      {
        "code" : "M61.052",
        "display" : "Myositis ossificans traumatica, left thigh"
      },
      {
        "code" : "M61.059",
        "display" : "Myositis ossificans traumatica, unspecified thigh"
      },
      {
        "code" : "M61.061",
        "display" : "Myositis ossificans traumatica, right lower leg"
      },
      {
        "code" : "M61.062",
        "display" : "Myositis ossificans traumatica, left lower leg"
      },
      {
        "code" : "M61.069",
        "display" : "Myositis ossificans traumatica, unspecified lower leg"
      },
      {
        "code" : "M61.071",
        "display" : "Myositis ossificans traumatica, right ankle and foot"
      },
      {
        "code" : "M61.072",
        "display" : "Myositis ossificans traumatica, left ankle and foot"
      },
      {
        "code" : "M61.079",
        "display" : "Myositis ossificans traumatica, unspecified ankle and foot"
      },
      {
        "code" : "M61.08",
        "display" : "Myositis ossificans traumatica, other site"
      },
      {
        "code" : "M61.09",
        "display" : "Myositis ossificans traumatica, multiple sites"
      },
      {
        "code" : "M61.10",
        "display" : "Myositis ossificans progressiva, unspecified site"
      },
      {
        "code" : "M61.111",
        "display" : "Myositis ossificans progressiva, right shoulder"
      },
      {
        "code" : "M61.112",
        "display" : "Myositis ossificans progressiva, left shoulder"
      },
      {
        "code" : "M61.119",
        "display" : "Myositis ossificans progressiva, unspecified shoulder"
      },
      {
        "code" : "M61.121",
        "display" : "Myositis ossificans progressiva, right upper arm"
      },
      {
        "code" : "M61.122",
        "display" : "Myositis ossificans progressiva, left upper arm"
      },
      {
        "code" : "M61.129",
        "display" : "Myositis ossificans progressiva, unspecified upper arm"
      },
      {
        "code" : "M61.131",
        "display" : "Myositis ossificans progressiva, right forearm"
      },
      {
        "code" : "M61.132",
        "display" : "Myositis ossificans progressiva, left forearm"
      },
      {
        "code" : "M61.139",
        "display" : "Myositis ossificans progressiva, unspecified forearm"
      },
      {
        "code" : "M61.141",
        "display" : "Myositis ossificans progressiva, right hand"
      },
      {
        "code" : "M61.142",
        "display" : "Myositis ossificans progressiva, left hand"
      },
      {
        "code" : "M61.143",
        "display" : "Myositis ossificans progressiva, unspecified hand"
      },
      {
        "code" : "M61.144",
        "display" : "Myositis ossificans progressiva, right finger(s)"
      },
      {
        "code" : "M61.145",
        "display" : "Myositis ossificans progressiva, left finger(s)"
      },
      {
        "code" : "M61.146",
        "display" : "Myositis ossificans progressiva, unspecified finger(s)"
      },
      {
        "code" : "M61.151",
        "display" : "Myositis ossificans progressiva, right thigh"
      },
      {
        "code" : "M61.152",
        "display" : "Myositis ossificans progressiva, left thigh"
      },
      {
        "code" : "M61.159",
        "display" : "Myositis ossificans progressiva, unspecified thigh"
      },
      {
        "code" : "M61.161",
        "display" : "Myositis ossificans progressiva, right lower leg"
      },
      {
        "code" : "M61.162",
        "display" : "Myositis ossificans progressiva, left lower leg"
      },
      {
        "code" : "M61.169",
        "display" : "Myositis ossificans progressiva, unspecified lower leg"
      },
      {
        "code" : "M61.171",
        "display" : "Myositis ossificans progressiva, right ankle"
      },
      {
        "code" : "M61.172",
        "display" : "Myositis ossificans progressiva, left ankle"
      },
      {
        "code" : "M61.173",
        "display" : "Myositis ossificans progressiva, unspecified ankle"
      },
      {
        "code" : "M61.174",
        "display" : "Myositis ossificans progressiva, right foot"
      },
      {
        "code" : "M61.175",
        "display" : "Myositis ossificans progressiva, left foot"
      },
      {
        "code" : "M61.176",
        "display" : "Myositis ossificans progressiva, unspecified foot"
      },
      {
        "code" : "M61.177",
        "display" : "Myositis ossificans progressiva, right toe(s)"
      },
      {
        "code" : "M61.178",
        "display" : "Myositis ossificans progressiva, left toe(s)"
      },
      {
        "code" : "M61.179",
        "display" : "Myositis ossificans progressiva, unspecified toe(s)"
      },
      {
        "code" : "M61.18",
        "display" : "Myositis ossificans progressiva, other site"
      },
      {
        "code" : "M61.19",
        "display" : "Myositis ossificans progressiva, multiple sites"
      },
      {
        "code" : "M61.20",
        "display" : "Paralytic calcification and ossification of muscle, unspecified site"
      },
      {
        "code" : "M61.211",
        "display" : "Paralytic calcification and ossification of muscle, right shoulder"
      },
      {
        "code" : "M61.212",
        "display" : "Paralytic calcification and ossification of muscle, left shoulder"
      },
      {
        "code" : "M61.219",
        "display" : "Paralytic calcification and ossification of muscle, unspecified shoulder"
      },
      {
        "code" : "M61.221",
        "display" : "Paralytic calcification and ossification of muscle, right upper arm"
      },
      {
        "code" : "M61.222",
        "display" : "Paralytic calcification and ossification of muscle, left upper arm"
      },
      {
        "code" : "M61.229",
        "display" : "Paralytic calcification and ossification of muscle, unspecified upper arm"
      },
      {
        "code" : "M61.231",
        "display" : "Paralytic calcification and ossification of muscle, right forearm"
      },
      {
        "code" : "M61.232",
        "display" : "Paralytic calcification and ossification of muscle, left forearm"
      },
      {
        "code" : "M61.239",
        "display" : "Paralytic calcification and ossification of muscle, unspecified forearm"
      },
      {
        "code" : "M61.241",
        "display" : "Paralytic calcification and ossification of muscle, right hand"
      },
      {
        "code" : "M61.242",
        "display" : "Paralytic calcification and ossification of muscle, left hand"
      },
      {
        "code" : "M61.249",
        "display" : "Paralytic calcification and ossification of muscle, unspecified hand"
      },
      {
        "code" : "M61.251",
        "display" : "Paralytic calcification and ossification of muscle, right thigh"
      },
      {
        "code" : "M61.252",
        "display" : "Paralytic calcification and ossification of muscle, left thigh"
      },
      {
        "code" : "M61.259",
        "display" : "Paralytic calcification and ossification of muscle, unspecified thigh"
      },
      {
        "code" : "M61.261",
        "display" : "Paralytic calcification and ossification of muscle, right lower leg"
      },
      {
        "code" : "M61.262",
        "display" : "Paralytic calcification and ossification of muscle, left lower leg"
      },
      {
        "code" : "M61.269",
        "display" : "Paralytic calcification and ossification of muscle, unspecified lower leg"
      },
      {
        "code" : "M61.271",
        "display" : "Paralytic calcification and ossification of muscle, right ankle and foot"
      },
      {
        "code" : "M61.272",
        "display" : "Paralytic calcification and ossification of muscle, left ankle and foot"
      },
      {
        "code" : "M61.279",
        "display" : "Paralytic calcification and ossification of muscle, unspecified ankle and foot"
      },
      {
        "code" : "M61.28",
        "display" : "Paralytic calcification and ossification of muscle, other site"
      },
      {
        "code" : "M61.29",
        "display" : "Paralytic calcification and ossification of muscle, multiple sites"
      },
      {
        "code" : "M61.30",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified site"
      },
      {
        "code" : "M61.311",
        "display" : "Calcification and ossification of muscles associated with burns, right shoulder"
      },
      {
        "code" : "M61.312",
        "display" : "Calcification and ossification of muscles associated with burns, left shoulder"
      },
      {
        "code" : "M61.319",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified shoulder"
      },
      {
        "code" : "M61.321",
        "display" : "Calcification and ossification of muscles associated with burns, right upper arm"
      },
      {
        "code" : "M61.322",
        "display" : "Calcification and ossification of muscles associated with burns, left upper arm"
      },
      {
        "code" : "M61.329",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified upper arm"
      },
      {
        "code" : "M61.331",
        "display" : "Calcification and ossification of muscles associated with burns, right forearm"
      },
      {
        "code" : "M61.332",
        "display" : "Calcification and ossification of muscles associated with burns, left forearm"
      },
      {
        "code" : "M61.339",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified forearm"
      },
      {
        "code" : "M61.341",
        "display" : "Calcification and ossification of muscles associated with burns, right hand"
      },
      {
        "code" : "M61.342",
        "display" : "Calcification and ossification of muscles associated with burns, left hand"
      },
      {
        "code" : "M61.349",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified hand"
      },
      {
        "code" : "M61.351",
        "display" : "Calcification and ossification of muscles associated with burns, right thigh"
      },
      {
        "code" : "M61.352",
        "display" : "Calcification and ossification of muscles associated with burns, left thigh"
      },
      {
        "code" : "M61.359",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified thigh"
      },
      {
        "code" : "M61.361",
        "display" : "Calcification and ossification of muscles associated with burns, right lower leg"
      },
      {
        "code" : "M61.362",
        "display" : "Calcification and ossification of muscles associated with burns, left lower leg"
      },
      {
        "code" : "M61.369",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified lower leg"
      },
      {
        "code" : "M61.371",
        "display" : "Calcification and ossification of muscles associated with burns, right ankle and foot"
      },
      {
        "code" : "M61.372",
        "display" : "Calcification and ossification of muscles associated with burns, left ankle and foot"
      },
      {
        "code" : "M61.379",
        "display" : "Calcification and ossification of muscles associated with burns, unspecified ankle and foot"
      },
      {
        "code" : "M61.38",
        "display" : "Calcification and ossification of muscles associated with burns, other site"
      },
      {
        "code" : "M61.39",
        "display" : "Calcification and ossification of muscles associated with burns, multiple sites"
      },
      {
        "code" : "M61.40",
        "display" : "Other calcification of muscle, unspecified site"
      },
      {
        "code" : "M61.411",
        "display" : "Other calcification of muscle, right shoulder"
      },
      {
        "code" : "M61.412",
        "display" : "Other calcification of muscle, left shoulder"
      },
      {
        "code" : "M61.419",
        "display" : "Other calcification of muscle, unspecified shoulder"
      },
      {
        "code" : "M61.421",
        "display" : "Other calcification of muscle, right upper arm"
      },
      {
        "code" : "M61.422",
        "display" : "Other calcification of muscle, left upper arm"
      },
      {
        "code" : "M61.429",
        "display" : "Other calcification of muscle, unspecified upper arm"
      },
      {
        "code" : "M61.431",
        "display" : "Other calcification of muscle, right forearm"
      },
      {
        "code" : "M61.432",
        "display" : "Other calcification of muscle, left forearm"
      },
      {
        "code" : "M61.439",
        "display" : "Other calcification of muscle, unspecified forearm"
      },
      {
        "code" : "M61.441",
        "display" : "Other calcification of muscle, right hand"
      },
      {
        "code" : "M61.442",
        "display" : "Other calcification of muscle, left hand"
      },
      {
        "code" : "M61.449",
        "display" : "Other calcification of muscle, unspecified hand"
      },
      {
        "code" : "M61.451",
        "display" : "Other calcification of muscle, right thigh"
      },
      {
        "code" : "M61.452",
        "display" : "Other calcification of muscle, left thigh"
      },
      {
        "code" : "M61.459",
        "display" : "Other calcification of muscle, unspecified thigh"
      },
      {
        "code" : "M61.461",
        "display" : "Other calcification of muscle, right lower leg"
      },
      {
        "code" : "M61.462",
        "display" : "Other calcification of muscle, left lower leg"
      },
      {
        "code" : "M61.469",
        "display" : "Other calcification of muscle, unspecified lower leg"
      },
      {
        "code" : "M61.471",
        "display" : "Other calcification of muscle, right ankle and foot"
      },
      {
        "code" : "M61.472",
        "display" : "Other calcification of muscle, left ankle and foot"
      },
      {
        "code" : "M61.479",
        "display" : "Other calcification of muscle, unspecified ankle and foot"
      },
      {
        "code" : "M61.48",
        "display" : "Other calcification of muscle, other site"
      },
      {
        "code" : "M61.49",
        "display" : "Other calcification of muscle, multiple sites"
      },
      {
        "code" : "M61.50",
        "display" : "Other ossification of muscle, unspecified site"
      },
      {
        "code" : "M61.511",
        "display" : "Other ossification of muscle, right shoulder"
      },
      {
        "code" : "M61.512",
        "display" : "Other ossification of muscle, left shoulder"
      },
      {
        "code" : "M61.519",
        "display" : "Other ossification of muscle, unspecified shoulder"
      },
      {
        "code" : "M61.521",
        "display" : "Other ossification of muscle, right upper arm"
      },
      {
        "code" : "M61.522",
        "display" : "Other ossification of muscle, left upper arm"
      },
      {
        "code" : "M61.529",
        "display" : "Other ossification of muscle, unspecified upper arm"
      },
      {
        "code" : "M61.531",
        "display" : "Other ossification of muscle, right forearm"
      },
      {
        "code" : "M61.532",
        "display" : "Other ossification of muscle, left forearm"
      },
      {
        "code" : "M61.539",
        "display" : "Other ossification of muscle, unspecified forearm"
      },
      {
        "code" : "M61.541",
        "display" : "Other ossification of muscle, right hand"
      },
      {
        "code" : "M61.542",
        "display" : "Other ossification of muscle, left hand"
      },
      {
        "code" : "M61.549",
        "display" : "Other ossification of muscle, unspecified hand"
      },
      {
        "code" : "M61.551",
        "display" : "Other ossification of muscle, right thigh"
      },
      {
        "code" : "M61.552",
        "display" : "Other ossification of muscle, left thigh"
      },
      {
        "code" : "M61.559",
        "display" : "Other ossification of muscle, unspecified thigh"
      },
      {
        "code" : "M61.561",
        "display" : "Other ossification of muscle, right lower leg"
      },
      {
        "code" : "M61.562",
        "display" : "Other ossification of muscle, left lower leg"
      },
      {
        "code" : "M61.569",
        "display" : "Other ossification of muscle, unspecified lower leg"
      },
      {
        "code" : "M61.571",
        "display" : "Other ossification of muscle, right ankle and foot"
      },
      {
        "code" : "M61.572",
        "display" : "Other ossification of muscle, left ankle and foot"
      },
      {
        "code" : "M61.579",
        "display" : "Other ossification of muscle, unspecified ankle and foot"
      },
      {
        "code" : "M61.58",
        "display" : "Other ossification of muscle, other site"
      },
      {
        "code" : "M61.59",
        "display" : "Other ossification of muscle, multiple sites"
      },
      {
        "code" : "M61.9",
        "display" : "Calcification and ossification of muscle, unspecified"
      },
      {
        "code" : "M62.00",
        "display" : "Separation of muscle (nontraumatic), unspecified site"
      },
      {
        "code" : "M62.011",
        "display" : "Separation of muscle (nontraumatic), right shoulder"
      },
      {
        "code" : "M62.012",
        "display" : "Separation of muscle (nontraumatic), left shoulder"
      },
      {
        "code" : "M62.019",
        "display" : "Separation of muscle (nontraumatic), unspecified shoulder"
      },
      {
        "code" : "M62.021",
        "display" : "Separation of muscle (nontraumatic), right upper arm"
      },
      {
        "code" : "M62.022",
        "display" : "Separation of muscle (nontraumatic), left upper arm"
      },
      {
        "code" : "M62.029",
        "display" : "Separation of muscle (nontraumatic), unspecified upper arm"
      },
      {
        "code" : "M62.031",
        "display" : "Separation of muscle (nontraumatic), right forearm"
      },
      {
        "code" : "M62.032",
        "display" : "Separation of muscle (nontraumatic), left forearm"
      },
      {
        "code" : "M62.039",
        "display" : "Separation of muscle (nontraumatic), unspecified forearm"
      },
      {
        "code" : "M62.041",
        "display" : "Separation of muscle (nontraumatic), right hand"
      },
      {
        "code" : "M62.042",
        "display" : "Separation of muscle (nontraumatic), left hand"
      },
      {
        "code" : "M62.049",
        "display" : "Separation of muscle (nontraumatic), unspecified hand"
      },
      {
        "code" : "M62.051",
        "display" : "Separation of muscle (nontraumatic), right thigh"
      },
      {
        "code" : "M62.052",
        "display" : "Separation of muscle (nontraumatic), left thigh"
      },
      {
        "code" : "M62.059",
        "display" : "Separation of muscle (nontraumatic), unspecified thigh"
      },
      {
        "code" : "M62.061",
        "display" : "Separation of muscle (nontraumatic), right lower leg"
      },
      {
        "code" : "M62.062",
        "display" : "Separation of muscle (nontraumatic), left lower leg"
      },
      {
        "code" : "M62.069",
        "display" : "Separation of muscle (nontraumatic), unspecified lower leg"
      },
      {
        "code" : "M62.071",
        "display" : "Separation of muscle (nontraumatic), right ankle and foot"
      },
      {
        "code" : "M62.072",
        "display" : "Separation of muscle (nontraumatic), left ankle and foot"
      },
      {
        "code" : "M62.079",
        "display" : "Separation of muscle (nontraumatic), unspecified ankle and foot"
      },
      {
        "code" : "M62.08",
        "display" : "Separation of muscle (nontraumatic), other site"
      },
      {
        "code" : "M62.10",
        "display" : "Other rupture of muscle (nontraumatic), unspecified site"
      },
      {
        "code" : "M62.111",
        "display" : "Other rupture of muscle (nontraumatic), right shoulder"
      },
      {
        "code" : "M62.112",
        "display" : "Other rupture of muscle (nontraumatic), left shoulder"
      },
      {
        "code" : "M62.119",
        "display" : "Other rupture of muscle (nontraumatic), unspecified shoulder"
      },
      {
        "code" : "M62.121",
        "display" : "Other rupture of muscle (nontraumatic), right upper arm"
      },
      {
        "code" : "M62.122",
        "display" : "Other rupture of muscle (nontraumatic), left upper arm"
      },
      {
        "code" : "M62.129",
        "display" : "Other rupture of muscle (nontraumatic), unspecified upper arm"
      },
      {
        "code" : "M62.131",
        "display" : "Other rupture of muscle (nontraumatic), right forearm"
      },
      {
        "code" : "M62.132",
        "display" : "Other rupture of muscle (nontraumatic), left forearm"
      },
      {
        "code" : "M62.139",
        "display" : "Other rupture of muscle (nontraumatic), unspecified forearm"
      },
      {
        "code" : "M62.141",
        "display" : "Other rupture of muscle (nontraumatic), right hand"
      },
      {
        "code" : "M62.142",
        "display" : "Other rupture of muscle (nontraumatic), left hand"
      },
      {
        "code" : "M62.149",
        "display" : "Other rupture of muscle (nontraumatic), unspecified hand"
      },
      {
        "code" : "M62.151",
        "display" : "Other rupture of muscle (nontraumatic), right thigh"
      },
      {
        "code" : "M62.152",
        "display" : "Other rupture of muscle (nontraumatic), left thigh"
      },
      {
        "code" : "M62.159",
        "display" : "Other rupture of muscle (nontraumatic), unspecified thigh"
      },
      {
        "code" : "M62.161",
        "display" : "Other rupture of muscle (nontraumatic), right lower leg"
      },
      {
        "code" : "M62.162",
        "display" : "Other rupture of muscle (nontraumatic), left lower leg"
      },
      {
        "code" : "M62.169",
        "display" : "Other rupture of muscle (nontraumatic), unspecified lower leg"
      },
      {
        "code" : "M62.171",
        "display" : "Other rupture of muscle (nontraumatic), right ankle and foot"
      },
      {
        "code" : "M62.172",
        "display" : "Other rupture of muscle (nontraumatic), left ankle and foot"
      },
      {
        "code" : "M62.179",
        "display" : "Other rupture of muscle (nontraumatic), unspecified ankle and foot"
      },
      {
        "code" : "M62.18",
        "display" : "Other rupture of muscle (nontraumatic), other site"
      },
      {
        "code" : "M62.20",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified site"
      },
      {
        "code" : "M62.211",
        "display" : "Nontraumatic ischemic infarction of muscle, right shoulder"
      },
      {
        "code" : "M62.212",
        "display" : "Nontraumatic ischemic infarction of muscle, left shoulder"
      },
      {
        "code" : "M62.219",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified shoulder"
      },
      {
        "code" : "M62.221",
        "display" : "Nontraumatic ischemic infarction of muscle, right upper arm"
      },
      {
        "code" : "M62.222",
        "display" : "Nontraumatic ischemic infarction of muscle, left upper arm"
      },
      {
        "code" : "M62.229",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified upper arm"
      },
      {
        "code" : "M62.231",
        "display" : "Nontraumatic ischemic infarction of muscle, right forearm"
      },
      {
        "code" : "M62.232",
        "display" : "Nontraumatic ischemic infarction of muscle, left forearm"
      },
      {
        "code" : "M62.239",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified forearm"
      },
      {
        "code" : "M62.241",
        "display" : "Nontraumatic ischemic infarction of muscle, right hand"
      },
      {
        "code" : "M62.242",
        "display" : "Nontraumatic ischemic infarction of muscle, left hand"
      },
      {
        "code" : "M62.249",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified hand"
      },
      {
        "code" : "M62.251",
        "display" : "Nontraumatic ischemic infarction of muscle, right thigh"
      },
      {
        "code" : "M62.252",
        "display" : "Nontraumatic ischemic infarction of muscle, left thigh"
      },
      {
        "code" : "M62.259",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified thigh"
      },
      {
        "code" : "M62.261",
        "display" : "Nontraumatic ischemic infarction of muscle, right lower leg"
      },
      {
        "code" : "M62.262",
        "display" : "Nontraumatic ischemic infarction of muscle, left lower leg"
      },
      {
        "code" : "M62.269",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified lower leg"
      },
      {
        "code" : "M62.271",
        "display" : "Nontraumatic ischemic infarction of muscle, right ankle and foot"
      },
      {
        "code" : "M62.272",
        "display" : "Nontraumatic ischemic infarction of muscle, left ankle and foot"
      },
      {
        "code" : "M62.279",
        "display" : "Nontraumatic ischemic infarction of muscle, unspecified ankle and foot"
      },
      {
        "code" : "M62.28",
        "display" : "Nontraumatic ischemic infarction of muscle, other site"
      },
      {
        "code" : "M62.3",
        "display" : "Immobility syndrome (paraplegic)"
      },
      {
        "code" : "M62.40",
        "display" : "Contracture of muscle, unspecified site"
      },
      {
        "code" : "M62.411",
        "display" : "Contracture of muscle, right shoulder"
      },
      {
        "code" : "M62.412",
        "display" : "Contracture of muscle, left shoulder"
      },
      {
        "code" : "M62.419",
        "display" : "Contracture of muscle, unspecified shoulder"
      },
      {
        "code" : "M62.421",
        "display" : "Contracture of muscle, right upper arm"
      },
      {
        "code" : "M62.422",
        "display" : "Contracture of muscle, left upper arm"
      },
      {
        "code" : "M62.429",
        "display" : "Contracture of muscle, unspecified upper arm"
      },
      {
        "code" : "M62.431",
        "display" : "Contracture of muscle, right forearm"
      },
      {
        "code" : "M62.432",
        "display" : "Contracture of muscle, left forearm"
      },
      {
        "code" : "M62.439",
        "display" : "Contracture of muscle, unspecified forearm"
      },
      {
        "code" : "M62.441",
        "display" : "Contracture of muscle, right hand"
      },
      {
        "code" : "M62.442",
        "display" : "Contracture of muscle, left hand"
      },
      {
        "code" : "M62.449",
        "display" : "Contracture of muscle, unspecified hand"
      },
      {
        "code" : "M62.451",
        "display" : "Contracture of muscle, right thigh"
      },
      {
        "code" : "M62.452",
        "display" : "Contracture of muscle, left thigh"
      },
      {
        "code" : "M62.459",
        "display" : "Contracture of muscle, unspecified thigh"
      },
      {
        "code" : "M62.461",
        "display" : "Contracture of muscle, right lower leg"
      },
      {
        "code" : "M62.462",
        "display" : "Contracture of muscle, left lower leg"
      },
      {
        "code" : "M62.469",
        "display" : "Contracture of muscle, unspecified lower leg"
      },
      {
        "code" : "M62.471",
        "display" : "Contracture of muscle, right ankle and foot"
      },
      {
        "code" : "M62.472",
        "display" : "Contracture of muscle, left ankle and foot"
      },
      {
        "code" : "M62.479",
        "display" : "Contracture of muscle, unspecified ankle and foot"
      },
      {
        "code" : "M62.48",
        "display" : "Contracture of muscle, other site"
      },
      {
        "code" : "M62.49",
        "display" : "Contracture of muscle, multiple sites"
      },
      {
        "code" : "M62.50",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified site"
      },
      {
        "code" : "M62.511",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right shoulder"
      },
      {
        "code" : "M62.512",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left shoulder"
      },
      {
        "code" : "M62.519",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified shoulder"
      },
      {
        "code" : "M62.521",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right upper arm"
      },
      {
        "code" : "M62.522",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left upper arm"
      },
      {
        "code" : "M62.529",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified upper arm"
      },
      {
        "code" : "M62.531",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right forearm"
      },
      {
        "code" : "M62.532",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left forearm"
      },
      {
        "code" : "M62.539",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified forearm"
      },
      {
        "code" : "M62.541",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right hand"
      },
      {
        "code" : "M62.542",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left hand"
      },
      {
        "code" : "M62.549",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified hand"
      },
      {
        "code" : "M62.551",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right thigh"
      },
      {
        "code" : "M62.552",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left thigh"
      },
      {
        "code" : "M62.559",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified thigh"
      },
      {
        "code" : "M62.561",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right lower leg"
      },
      {
        "code" : "M62.562",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left lower leg"
      },
      {
        "code" : "M62.569",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified lower leg"
      },
      {
        "code" : "M62.571",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, right ankle and foot"
      },
      {
        "code" : "M62.572",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, left ankle and foot"
      },
      {
        "code" : "M62.579",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, unspecified ankle and foot"
      },
      {
        "code" : "M62.58",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, other site"
      },
      {
        "code" : "M62.59",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, multiple sites"
      },
      {
        "code" : "M62.5A0",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, back, cervical"
      },
      {
        "code" : "M62.5A1",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, back, thoracic"
      },
      {
        "code" : "M62.5A2",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, back, lumbosacral"
      },
      {
        "code" : "M62.5A9",
        "display" : "Muscle wasting and atrophy, not elsewhere classified, back, unspecified level"
      },
      {
        "code" : "M62.81",
        "display" : "Muscle weakness (generalized)"
      },
      {
        "code" : "M62.82",
        "display" : "Rhabdomyolysis"
      },
      {
        "code" : "M62.830",
        "display" : "Muscle spasm of back"
      },
      {
        "code" : "M62.831",
        "display" : "Muscle spasm of calf"
      },
      {
        "code" : "M62.838",
        "display" : "Other muscle spasm"
      },
      {
        "code" : "M62.84",
        "display" : "Sarcopenia"
      },
      {
        "code" : "M62.85",
        "display" : "Dysfunction of the multifidus muscles, lumbar region"
      },
      {
        "code" : "M62.89",
        "display" : "Other specified disorders of muscle"
      },
      {
        "code" : "M62.9",
        "display" : "Disorder of muscle, unspecified"
      },
      {
        "code" : "M65.00",
        "display" : "Abscess of tendon sheath, unspecified site"
      },
      {
        "code" : "M65.011",
        "display" : "Abscess of tendon sheath, right shoulder"
      },
      {
        "code" : "M65.012",
        "display" : "Abscess of tendon sheath, left shoulder"
      },
      {
        "code" : "M65.019",
        "display" : "Abscess of tendon sheath, unspecified shoulder"
      },
      {
        "code" : "M65.021",
        "display" : "Abscess of tendon sheath, right upper arm"
      },
      {
        "code" : "M65.022",
        "display" : "Abscess of tendon sheath, left upper arm"
      },
      {
        "code" : "M65.029",
        "display" : "Abscess of tendon sheath, unspecified upper arm"
      },
      {
        "code" : "M65.031",
        "display" : "Abscess of tendon sheath, right forearm"
      },
      {
        "code" : "M65.032",
        "display" : "Abscess of tendon sheath, left forearm"
      },
      {
        "code" : "M65.039",
        "display" : "Abscess of tendon sheath, unspecified forearm"
      },
      {
        "code" : "M65.041",
        "display" : "Abscess of tendon sheath, right hand"
      },
      {
        "code" : "M65.042",
        "display" : "Abscess of tendon sheath, left hand"
      },
      {
        "code" : "M65.049",
        "display" : "Abscess of tendon sheath, unspecified hand"
      },
      {
        "code" : "M65.051",
        "display" : "Abscess of tendon sheath, right thigh"
      },
      {
        "code" : "M65.052",
        "display" : "Abscess of tendon sheath, left thigh"
      },
      {
        "code" : "M65.059",
        "display" : "Abscess of tendon sheath, unspecified thigh"
      },
      {
        "code" : "M65.061",
        "display" : "Abscess of tendon sheath, right lower leg"
      },
      {
        "code" : "M65.062",
        "display" : "Abscess of tendon sheath, left lower leg"
      },
      {
        "code" : "M65.069",
        "display" : "Abscess of tendon sheath, unspecified lower leg"
      },
      {
        "code" : "M65.071",
        "display" : "Abscess of tendon sheath, right ankle and foot"
      },
      {
        "code" : "M65.072",
        "display" : "Abscess of tendon sheath, left ankle and foot"
      },
      {
        "code" : "M65.079",
        "display" : "Abscess of tendon sheath, unspecified ankle and foot"
      },
      {
        "code" : "M65.08",
        "display" : "Abscess of tendon sheath, other site"
      },
      {
        "code" : "M65.10",
        "display" : "Other infective (teno)synovitis, unspecified site"
      },
      {
        "code" : "M65.111",
        "display" : "Other infective (teno)synovitis, right shoulder"
      },
      {
        "code" : "M65.112",
        "display" : "Other infective (teno)synovitis, left shoulder"
      },
      {
        "code" : "M65.119",
        "display" : "Other infective (teno)synovitis, unspecified shoulder"
      },
      {
        "code" : "M65.121",
        "display" : "Other infective (teno)synovitis, right elbow"
      },
      {
        "code" : "M65.122",
        "display" : "Other infective (teno)synovitis, left elbow"
      },
      {
        "code" : "M65.129",
        "display" : "Other infective (teno)synovitis, unspecified elbow"
      },
      {
        "code" : "M65.131",
        "display" : "Other infective (teno)synovitis, right wrist"
      },
      {
        "code" : "M65.132",
        "display" : "Other infective (teno)synovitis, left wrist"
      },
      {
        "code" : "M65.139",
        "display" : "Other infective (teno)synovitis, unspecified wrist"
      },
      {
        "code" : "M65.141",
        "display" : "Other infective (teno)synovitis, right hand"
      },
      {
        "code" : "M65.142",
        "display" : "Other infective (teno)synovitis, left hand"
      },
      {
        "code" : "M65.149",
        "display" : "Other infective (teno)synovitis, unspecified hand"
      },
      {
        "code" : "M65.151",
        "display" : "Other infective (teno)synovitis, right hip"
      },
      {
        "code" : "M65.152",
        "display" : "Other infective (teno)synovitis, left hip"
      },
      {
        "code" : "M65.159",
        "display" : "Other infective (teno)synovitis, unspecified hip"
      },
      {
        "code" : "M65.161",
        "display" : "Other infective (teno)synovitis, right knee"
      },
      {
        "code" : "M65.162",
        "display" : "Other infective (teno)synovitis, left knee"
      },
      {
        "code" : "M65.169",
        "display" : "Other infective (teno)synovitis, unspecified knee"
      },
      {
        "code" : "M65.171",
        "display" : "Other infective (teno)synovitis, right ankle and foot"
      },
      {
        "code" : "M65.172",
        "display" : "Other infective (teno)synovitis, left ankle and foot"
      },
      {
        "code" : "M65.179",
        "display" : "Other infective (teno)synovitis, unspecified ankle and foot"
      },
      {
        "code" : "M65.18",
        "display" : "Other infective (teno)synovitis, other site"
      },
      {
        "code" : "M65.19",
        "display" : "Other infective (teno)synovitis, multiple sites"
      },
      {
        "code" : "M65.20",
        "display" : "Calcific tendinitis, unspecified site"
      },
      {
        "code" : "M65.221",
        "display" : "Calcific tendinitis, right upper arm"
      },
      {
        "code" : "M65.222",
        "display" : "Calcific tendinitis, left upper arm"
      },
      {
        "code" : "M65.229",
        "display" : "Calcific tendinitis, unspecified upper arm"
      },
      {
        "code" : "M65.231",
        "display" : "Calcific tendinitis, right forearm"
      },
      {
        "code" : "M65.232",
        "display" : "Calcific tendinitis, left forearm"
      },
      {
        "code" : "M65.239",
        "display" : "Calcific tendinitis, unspecified forearm"
      },
      {
        "code" : "M65.241",
        "display" : "Calcific tendinitis, right hand"
      },
      {
        "code" : "M65.242",
        "display" : "Calcific tendinitis, left hand"
      },
      {
        "code" : "M65.249",
        "display" : "Calcific tendinitis, unspecified hand"
      },
      {
        "code" : "M65.251",
        "display" : "Calcific tendinitis, right thigh"
      },
      {
        "code" : "M65.252",
        "display" : "Calcific tendinitis, left thigh"
      },
      {
        "code" : "M65.259",
        "display" : "Calcific tendinitis, unspecified thigh"
      },
      {
        "code" : "M65.261",
        "display" : "Calcific tendinitis, right lower leg"
      },
      {
        "code" : "M65.262",
        "display" : "Calcific tendinitis, left lower leg"
      },
      {
        "code" : "M65.269",
        "display" : "Calcific tendinitis, unspecified lower leg"
      },
      {
        "code" : "M65.271",
        "display" : "Calcific tendinitis, right ankle and foot"
      },
      {
        "code" : "M65.272",
        "display" : "Calcific tendinitis, left ankle and foot"
      },
      {
        "code" : "M65.279",
        "display" : "Calcific tendinitis, unspecified ankle and foot"
      },
      {
        "code" : "M65.28",
        "display" : "Calcific tendinitis, other site"
      },
      {
        "code" : "M65.29",
        "display" : "Calcific tendinitis, multiple sites"
      },
      {
        "code" : "M65.30",
        "display" : "Trigger finger, unspecified finger"
      },
      {
        "code" : "M65.311",
        "display" : "Trigger thumb, right thumb"
      },
      {
        "code" : "M65.312",
        "display" : "Trigger thumb, left thumb"
      },
      {
        "code" : "M65.319",
        "display" : "Trigger thumb, unspecified thumb"
      },
      {
        "code" : "M65.321",
        "display" : "Trigger finger, right index finger"
      },
      {
        "code" : "M65.322",
        "display" : "Trigger finger, left index finger"
      },
      {
        "code" : "M65.329",
        "display" : "Trigger finger, unspecified index finger"
      },
      {
        "code" : "M65.331",
        "display" : "Trigger finger, right middle finger"
      },
      {
        "code" : "M65.332",
        "display" : "Trigger finger, left middle finger"
      },
      {
        "code" : "M65.339",
        "display" : "Trigger finger, unspecified middle finger"
      },
      {
        "code" : "M65.341",
        "display" : "Trigger finger, right ring finger"
      },
      {
        "code" : "M65.342",
        "display" : "Trigger finger, left ring finger"
      },
      {
        "code" : "M65.349",
        "display" : "Trigger finger, unspecified ring finger"
      },
      {
        "code" : "M65.351",
        "display" : "Trigger finger, right little finger"
      },
      {
        "code" : "M65.352",
        "display" : "Trigger finger, left little finger"
      },
      {
        "code" : "M65.359",
        "display" : "Trigger finger, unspecified little finger"
      },
      {
        "code" : "M65.4",
        "display" : "Radial styloid tenosynovitis [de Quervain]"
      },
      {
        "code" : "M65.80",
        "display" : "Other synovitis and tenosynovitis, unspecified site"
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
        "code" : "M65.821",
        "display" : "Other synovitis and tenosynovitis, right upper arm"
      },
      {
        "code" : "M65.822",
        "display" : "Other synovitis and tenosynovitis, left upper arm"
      },
      {
        "code" : "M65.829",
        "display" : "Other synovitis and tenosynovitis, unspecified upper arm"
      },
      {
        "code" : "M65.831",
        "display" : "Other synovitis and tenosynovitis, right forearm"
      },
      {
        "code" : "M65.832",
        "display" : "Other synovitis and tenosynovitis, left forearm"
      },
      {
        "code" : "M65.839",
        "display" : "Other synovitis and tenosynovitis, unspecified forearm"
      },
      {
        "code" : "M65.841",
        "display" : "Other synovitis and tenosynovitis, right hand"
      },
      {
        "code" : "M65.842",
        "display" : "Other synovitis and tenosynovitis, left hand"
      },
      {
        "code" : "M65.849",
        "display" : "Other synovitis and tenosynovitis, unspecified hand"
      },
      {
        "code" : "M65.851",
        "display" : "Other synovitis and tenosynovitis, right thigh"
      },
      {
        "code" : "M65.852",
        "display" : "Other synovitis and tenosynovitis, left thigh"
      },
      {
        "code" : "M65.859",
        "display" : "Other synovitis and tenosynovitis, unspecified thigh"
      },
      {
        "code" : "M65.861",
        "display" : "Other synovitis and tenosynovitis, right lower leg"
      },
      {
        "code" : "M65.862",
        "display" : "Other synovitis and tenosynovitis, left lower leg"
      },
      {
        "code" : "M65.869",
        "display" : "Other synovitis and tenosynovitis, unspecified lower leg"
      },
      {
        "code" : "M65.871",
        "display" : "Other synovitis and tenosynovitis, right ankle and foot"
      },
      {
        "code" : "M65.872",
        "display" : "Other synovitis and tenosynovitis, left ankle and foot"
      },
      {
        "code" : "M65.879",
        "display" : "Other synovitis and tenosynovitis, unspecified ankle and foot"
      },
      {
        "code" : "M65.88",
        "display" : "Other synovitis and tenosynovitis, other site"
      },
      {
        "code" : "M65.89",
        "display" : "Other synovitis and tenosynovitis, multiple sites"
      },
      {
        "code" : "M65.90",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified site"
      },
      {
        "code" : "M65.911",
        "display" : "Unspecified synovitis and tenosynovitis, right shoulder"
      },
      {
        "code" : "M65.912",
        "display" : "Unspecified synovitis and tenosynovitis, left shoulder"
      },
      {
        "code" : "M65.919",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified shoulder"
      },
      {
        "code" : "M65.921",
        "display" : "Unspecified synovitis and tenosynovitis, right upper arm"
      },
      {
        "code" : "M65.922",
        "display" : "Unspecified synovitis and tenosynovitis, left upper arm"
      },
      {
        "code" : "M65.929",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified upper arm"
      },
      {
        "code" : "M65.931",
        "display" : "Unspecified synovitis and tenosynovitis, right forearm"
      },
      {
        "code" : "M65.932",
        "display" : "Unspecified synovitis and tenosynovitis, left forearm"
      },
      {
        "code" : "M65.939",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified forearm"
      },
      {
        "code" : "M65.941",
        "display" : "Unspecified synovitis and tenosynovitis, right hand"
      },
      {
        "code" : "M65.942",
        "display" : "Unspecified synovitis and tenosynovitis, left hand"
      },
      {
        "code" : "M65.949",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified hand"
      },
      {
        "code" : "M65.951",
        "display" : "Unspecified synovitis and tenosynovitis, right thigh"
      },
      {
        "code" : "M65.952",
        "display" : "Unspecified synovitis and tenosynovitis, left thigh"
      },
      {
        "code" : "M65.959",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified thigh"
      },
      {
        "code" : "M65.961",
        "display" : "Unspecified synovitis and tenosynovitis, right lower leg"
      },
      {
        "code" : "M65.962",
        "display" : "Unspecified synovitis and tenosynovitis, left lower leg"
      },
      {
        "code" : "M65.969",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified lower leg"
      },
      {
        "code" : "M65.971",
        "display" : "Unspecified synovitis and tenosynovitis, right ankle and foot"
      },
      {
        "code" : "M65.972",
        "display" : "Unspecified synovitis and tenosynovitis, left ankle and foot"
      },
      {
        "code" : "M65.979",
        "display" : "Unspecified synovitis and tenosynovitis, unspecified ankle and foot"
      },
      {
        "code" : "M65.98",
        "display" : "Unspecified synovitis and tenosynovitis, other site"
      },
      {
        "code" : "M65.99",
        "display" : "Unspecified synovitis and tenosynovitis, multiple sites"
      },
      {
        "code" : "M67.00",
        "display" : "Short Achilles tendon (acquired), unspecified ankle"
      },
      {
        "code" : "M67.01",
        "display" : "Short Achilles tendon (acquired), right ankle"
      },
      {
        "code" : "M67.02",
        "display" : "Short Achilles tendon (acquired), left ankle"
      },
      {
        "code" : "M67.20",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified site"
      },
      {
        "code" : "M67.211",
        "display" : "Synovial hypertrophy, not elsewhere classified, right shoulder"
      },
      {
        "code" : "M67.212",
        "display" : "Synovial hypertrophy, not elsewhere classified, left shoulder"
      },
      {
        "code" : "M67.219",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified shoulder"
      },
      {
        "code" : "M67.221",
        "display" : "Synovial hypertrophy, not elsewhere classified, right upper arm"
      },
      {
        "code" : "M67.222",
        "display" : "Synovial hypertrophy, not elsewhere classified, left upper arm"
      },
      {
        "code" : "M67.229",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified upper arm"
      },
      {
        "code" : "M67.231",
        "display" : "Synovial hypertrophy, not elsewhere classified, right forearm"
      },
      {
        "code" : "M67.232",
        "display" : "Synovial hypertrophy, not elsewhere classified, left forearm"
      },
      {
        "code" : "M67.239",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified forearm"
      },
      {
        "code" : "M67.241",
        "display" : "Synovial hypertrophy, not elsewhere classified, right hand"
      },
      {
        "code" : "M67.242",
        "display" : "Synovial hypertrophy, not elsewhere classified, left hand"
      },
      {
        "code" : "M67.249",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified hand"
      },
      {
        "code" : "M67.251",
        "display" : "Synovial hypertrophy, not elsewhere classified, right thigh"
      },
      {
        "code" : "M67.252",
        "display" : "Synovial hypertrophy, not elsewhere classified, left thigh"
      },
      {
        "code" : "M67.259",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified thigh"
      },
      {
        "code" : "M67.261",
        "display" : "Synovial hypertrophy, not elsewhere classified, right lower leg"
      },
      {
        "code" : "M67.262",
        "display" : "Synovial hypertrophy, not elsewhere classified, left lower leg"
      },
      {
        "code" : "M67.269",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified lower leg"
      },
      {
        "code" : "M67.271",
        "display" : "Synovial hypertrophy, not elsewhere classified, right ankle and foot"
      },
      {
        "code" : "M67.272",
        "display" : "Synovial hypertrophy, not elsewhere classified, left ankle and foot"
      },
      {
        "code" : "M67.279",
        "display" : "Synovial hypertrophy, not elsewhere classified, unspecified ankle and foot"
      },
      {
        "code" : "M67.28",
        "display" : "Synovial hypertrophy, not elsewhere classified, other site"
      },
      {
        "code" : "M67.29",
        "display" : "Synovial hypertrophy, not elsewhere classified, multiple sites"
      },
      {
        "code" : "M67.30",
        "display" : "Transient synovitis, unspecified site"
      },
      {
        "code" : "M67.311",
        "display" : "Transient synovitis, right shoulder"
      },
      {
        "code" : "M67.312",
        "display" : "Transient synovitis, left shoulder"
      },
      {
        "code" : "M67.319",
        "display" : "Transient synovitis, unspecified shoulder"
      },
      {
        "code" : "M67.321",
        "display" : "Transient synovitis, right elbow"
      },
      {
        "code" : "M67.322",
        "display" : "Transient synovitis, left elbow"
      },
      {
        "code" : "M67.329",
        "display" : "Transient synovitis, unspecified elbow"
      },
      {
        "code" : "M67.331",
        "display" : "Transient synovitis, right wrist"
      },
      {
        "code" : "M67.332",
        "display" : "Transient synovitis, left wrist"
      },
      {
        "code" : "M67.339",
        "display" : "Transient synovitis, unspecified wrist"
      },
      {
        "code" : "M67.341",
        "display" : "Transient synovitis, right hand"
      },
      {
        "code" : "M67.342",
        "display" : "Transient synovitis, left hand"
      },
      {
        "code" : "M67.349",
        "display" : "Transient synovitis, unspecified hand"
      },
      {
        "code" : "M67.351",
        "display" : "Transient synovitis, right hip"
      },
      {
        "code" : "M67.352",
        "display" : "Transient synovitis, left hip"
      },
      {
        "code" : "M67.359",
        "display" : "Transient synovitis, unspecified hip"
      },
      {
        "code" : "M67.361",
        "display" : "Transient synovitis, right knee"
      },
      {
        "code" : "M67.362",
        "display" : "Transient synovitis, left knee"
      },
      {
        "code" : "M67.369",
        "display" : "Transient synovitis, unspecified knee"
      },
      {
        "code" : "M67.371",
        "display" : "Transient synovitis, right ankle and foot"
      },
      {
        "code" : "M67.372",
        "display" : "Transient synovitis, left ankle and foot"
      },
      {
        "code" : "M67.379",
        "display" : "Transient synovitis, unspecified ankle and foot"
      },
      {
        "code" : "M67.38",
        "display" : "Transient synovitis, other site"
      },
      {
        "code" : "M67.39",
        "display" : "Transient synovitis, multiple sites"
      },
      {
        "code" : "M67.40",
        "display" : "Ganglion, unspecified site"
      },
      {
        "code" : "M67.411",
        "display" : "Ganglion, right shoulder"
      },
      {
        "code" : "M67.412",
        "display" : "Ganglion, left shoulder"
      },
      {
        "code" : "M67.419",
        "display" : "Ganglion, unspecified shoulder"
      },
      {
        "code" : "M67.421",
        "display" : "Ganglion, right elbow"
      },
      {
        "code" : "M67.422",
        "display" : "Ganglion, left elbow"
      },
      {
        "code" : "M67.429",
        "display" : "Ganglion, unspecified elbow"
      },
      {
        "code" : "M67.431",
        "display" : "Ganglion, right wrist"
      },
      {
        "code" : "M67.432",
        "display" : "Ganglion, left wrist"
      },
      {
        "code" : "M67.439",
        "display" : "Ganglion, unspecified wrist"
      },
      {
        "code" : "M67.441",
        "display" : "Ganglion, right hand"
      },
      {
        "code" : "M67.442",
        "display" : "Ganglion, left hand"
      },
      {
        "code" : "M67.449",
        "display" : "Ganglion, unspecified hand"
      },
      {
        "code" : "M67.451",
        "display" : "Ganglion, right hip"
      },
      {
        "code" : "M67.452",
        "display" : "Ganglion, left hip"
      },
      {
        "code" : "M67.459",
        "display" : "Ganglion, unspecified hip"
      },
      {
        "code" : "M67.461",
        "display" : "Ganglion, right knee"
      },
      {
        "code" : "M67.462",
        "display" : "Ganglion, left knee"
      },
      {
        "code" : "M67.469",
        "display" : "Ganglion, unspecified knee"
      },
      {
        "code" : "M67.471",
        "display" : "Ganglion, right ankle and foot"
      },
      {
        "code" : "M67.472",
        "display" : "Ganglion, left ankle and foot"
      },
      {
        "code" : "M67.479",
        "display" : "Ganglion, unspecified ankle and foot"
      },
      {
        "code" : "M67.48",
        "display" : "Ganglion, other site"
      },
      {
        "code" : "M67.49",
        "display" : "Ganglion, multiple sites"
      },
      {
        "code" : "M67.50",
        "display" : "Plica syndrome, unspecified knee"
      },
      {
        "code" : "M67.51",
        "display" : "Plica syndrome, right knee"
      },
      {
        "code" : "M67.52",
        "display" : "Plica syndrome, left knee"
      },
      {
        "code" : "M67.80",
        "display" : "Other specified disorders of synovium and tendon, unspecified site"
      },
      {
        "code" : "M67.811",
        "display" : "Other specified disorders of synovium, right shoulder"
      },
      {
        "code" : "M67.812",
        "display" : "Other specified disorders of synovium, left shoulder"
      },
      {
        "code" : "M67.813",
        "display" : "Other specified disorders of tendon, right shoulder"
      },
      {
        "code" : "M67.814",
        "display" : "Other specified disorders of tendon, left shoulder"
      },
      {
        "code" : "M67.819",
        "display" : "Other specified disorders of synovium and tendon, unspecified shoulder"
      },
      {
        "code" : "M67.821",
        "display" : "Other specified disorders of synovium, right elbow"
      },
      {
        "code" : "M67.822",
        "display" : "Other specified disorders of synovium, left elbow"
      },
      {
        "code" : "M67.823",
        "display" : "Other specified disorders of tendon, right elbow"
      },
      {
        "code" : "M67.824",
        "display" : "Other specified disorders of tendon, left elbow"
      },
      {
        "code" : "M67.829",
        "display" : "Other specified disorders of synovium and tendon, unspecified elbow"
      },
      {
        "code" : "M67.831",
        "display" : "Other specified disorders of synovium, right wrist"
      },
      {
        "code" : "M67.832",
        "display" : "Other specified disorders of synovium, left wrist"
      },
      {
        "code" : "M67.833",
        "display" : "Other specified disorders of tendon, right wrist"
      },
      {
        "code" : "M67.834",
        "display" : "Other specified disorders of tendon, left wrist"
      },
      {
        "code" : "M67.839",
        "display" : "Other specified disorders of synovium and tendon, unspecified wrist"
      },
      {
        "code" : "M67.841",
        "display" : "Other specified disorders of synovium, right hand"
      },
      {
        "code" : "M67.842",
        "display" : "Other specified disorders of synovium, left hand"
      },
      {
        "code" : "M67.843",
        "display" : "Other specified disorders of tendon, right hand"
      },
      {
        "code" : "M67.844",
        "display" : "Other specified disorders of tendon, left hand"
      },
      {
        "code" : "M67.849",
        "display" : "Other specified disorders of synovium and tendon, unspecified hand"
      },
      {
        "code" : "M67.851",
        "display" : "Other specified disorders of synovium, right hip"
      },
      {
        "code" : "M67.852",
        "display" : "Other specified disorders of synovium, left hip"
      },
      {
        "code" : "M67.853",
        "display" : "Other specified disorders of tendon, right hip"
      },
      {
        "code" : "M67.854",
        "display" : "Other specified disorders of tendon, left hip"
      },
      {
        "code" : "M67.859",
        "display" : "Other specified disorders of synovium and tendon, unspecified hip"
      },
      {
        "code" : "M67.861",
        "display" : "Other specified disorders of synovium, right knee"
      },
      {
        "code" : "M67.862",
        "display" : "Other specified disorders of synovium, left knee"
      },
      {
        "code" : "M67.863",
        "display" : "Other specified disorders of tendon, right knee"
      },
      {
        "code" : "M67.864",
        "display" : "Other specified disorders of tendon, left knee"
      },
      {
        "code" : "M67.869",
        "display" : "Other specified disorders of synovium and tendon, unspecified knee"
      },
      {
        "code" : "M67.871",
        "display" : "Other specified disorders of synovium, right ankle and foot"
      },
      {
        "code" : "M67.872",
        "display" : "Other specified disorders of synovium, left ankle and foot"
      },
      {
        "code" : "M67.873",
        "display" : "Other specified disorders of tendon, right ankle and foot"
      },
      {
        "code" : "M67.874",
        "display" : "Other specified disorders of tendon, left ankle and foot"
      },
      {
        "code" : "M67.879",
        "display" : "Other specified disorders of synovium and tendon, unspecified ankle and foot"
      },
      {
        "code" : "M67.88",
        "display" : "Other specified disorders of synovium and tendon, other site"
      },
      {
        "code" : "M67.89",
        "display" : "Other specified disorders of synovium and tendon, multiple sites"
      },
      {
        "code" : "M67.90",
        "display" : "Unspecified disorder of synovium and tendon, unspecified site"
      },
      {
        "code" : "M67.911",
        "display" : "Unspecified disorder of synovium and tendon, right shoulder"
      },
      {
        "code" : "M67.912",
        "display" : "Unspecified disorder of synovium and tendon, left shoulder"
      },
      {
        "code" : "M67.919",
        "display" : "Unspecified disorder of synovium and tendon, unspecified shoulder"
      },
      {
        "code" : "M67.921",
        "display" : "Unspecified disorder of synovium and tendon, right upper arm"
      },
      {
        "code" : "M67.922",
        "display" : "Unspecified disorder of synovium and tendon, left upper arm"
      },
      {
        "code" : "M67.929",
        "display" : "Unspecified disorder of synovium and tendon, unspecified upper arm"
      },
      {
        "code" : "M67.931",
        "display" : "Unspecified disorder of synovium and tendon, right forearm"
      },
      {
        "code" : "M67.932",
        "display" : "Unspecified disorder of synovium and tendon, left forearm"
      },
      {
        "code" : "M67.939",
        "display" : "Unspecified disorder of synovium and tendon, unspecified forearm"
      },
      {
        "code" : "M67.941",
        "display" : "Unspecified disorder of synovium and tendon, right hand"
      },
      {
        "code" : "M67.942",
        "display" : "Unspecified disorder of synovium and tendon, left hand"
      },
      {
        "code" : "M67.949",
        "display" : "Unspecified disorder of synovium and tendon, unspecified hand"
      },
      {
        "code" : "M67.951",
        "display" : "Unspecified disorder of synovium and tendon, right thigh"
      },
      {
        "code" : "M67.952",
        "display" : "Unspecified disorder of synovium and tendon, left thigh"
      },
      {
        "code" : "M67.959",
        "display" : "Unspecified disorder of synovium and tendon, unspecified thigh"
      },
      {
        "code" : "M67.961",
        "display" : "Unspecified disorder of synovium and tendon, right lower leg"
      },
      {
        "code" : "M67.962",
        "display" : "Unspecified disorder of synovium and tendon, left lower leg"
      },
      {
        "code" : "M67.969",
        "display" : "Unspecified disorder of synovium and tendon, unspecified lower leg"
      },
      {
        "code" : "M67.971",
        "display" : "Unspecified disorder of synovium and tendon, right ankle and foot"
      },
      {
        "code" : "M67.972",
        "display" : "Unspecified disorder of synovium and tendon, left ankle and foot"
      },
      {
        "code" : "M67.979",
        "display" : "Unspecified disorder of synovium and tendon, unspecified ankle and foot"
      },
      {
        "code" : "M67.98",
        "display" : "Unspecified disorder of synovium and tendon, other site"
      },
      {
        "code" : "M67.99",
        "display" : "Unspecified disorder of synovium and tendon, multiple sites"
      },
      {
        "code" : "M70.031",
        "display" : "Crepitant synovitis (acute) (chronic), right wrist"
      },
      {
        "code" : "M70.032",
        "display" : "Crepitant synovitis (acute) (chronic), left wrist"
      },
      {
        "code" : "M70.039",
        "display" : "Crepitant synovitis (acute) (chronic), unspecified wrist"
      },
      {
        "code" : "M70.041",
        "display" : "Crepitant synovitis (acute) (chronic), right hand"
      },
      {
        "code" : "M70.042",
        "display" : "Crepitant synovitis (acute) (chronic), left hand"
      },
      {
        "code" : "M70.049",
        "display" : "Crepitant synovitis (acute) (chronic), unspecified hand"
      },
      {
        "code" : "M70.10",
        "display" : "Bursitis, unspecified hand"
      },
      {
        "code" : "M70.11",
        "display" : "Bursitis, right hand"
      },
      {
        "code" : "M70.12",
        "display" : "Bursitis, left hand"
      },
      {
        "code" : "M70.20",
        "display" : "Olecranon bursitis, unspecified elbow"
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
        "code" : "M70.30",
        "display" : "Other bursitis of elbow, unspecified elbow"
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
        "code" : "M70.40",
        "display" : "Prepatellar bursitis, unspecified knee"
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
        "code" : "M70.50",
        "display" : "Other bursitis of knee, unspecified knee"
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
        "code" : "M70.70",
        "display" : "Other bursitis of hip, unspecified hip"
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
        "code" : "M70.80",
        "display" : "Other soft tissue disorders related to use, overuse and pressure of unspecified site"
      },
      {
        "code" : "M70.811",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right shoulder"
      },
      {
        "code" : "M70.812",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left shoulder"
      },
      {
        "code" : "M70.819",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified shoulder"
      },
      {
        "code" : "M70.821",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right upper arm"
      },
      {
        "code" : "M70.822",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left upper arm"
      },
      {
        "code" : "M70.829",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified upper arms"
      },
      {
        "code" : "M70.831",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right forearm"
      },
      {
        "code" : "M70.832",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left forearm"
      },
      {
        "code" : "M70.839",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified forearm"
      },
      {
        "code" : "M70.841",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right hand"
      },
      {
        "code" : "M70.842",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left hand"
      },
      {
        "code" : "M70.849",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified hand"
      },
      {
        "code" : "M70.851",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right thigh"
      },
      {
        "code" : "M70.852",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left thigh"
      },
      {
        "code" : "M70.859",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified thigh"
      },
      {
        "code" : "M70.861",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right lower leg"
      },
      {
        "code" : "M70.862",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left lower leg"
      },
      {
        "code" : "M70.869",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified leg"
      },
      {
        "code" : "M70.871",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, right ankle and foot"
      },
      {
        "code" : "M70.872",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, left ankle and foot"
      },
      {
        "code" : "M70.879",
        "display" : "Other soft tissue disorders related to use, overuse and pressure, unspecified ankle and foot"
      },
      {
        "code" : "M70.88",
        "display" : "Other soft tissue disorders related to use, overuse and pressure other site"
      },
      {
        "code" : "M70.89",
        "display" : "Other soft tissue disorders related to use, overuse and pressure multiple sites"
      },
      {
        "code" : "M70.90",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure of unspecified site"
      },
      {
        "code" : "M70.911",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right shoulder"
      },
      {
        "code" : "M70.912",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left shoulder"
      },
      {
        "code" : "M70.919",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified shoulder"
      },
      {
        "code" : "M70.921",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right upper arm"
      },
      {
        "code" : "M70.922",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left upper arm"
      },
      {
        "code" : "M70.929",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified upper arm"
      },
      {
        "code" : "M70.931",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right forearm"
      },
      {
        "code" : "M70.932",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left forearm"
      },
      {
        "code" : "M70.939",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified forearm"
      },
      {
        "code" : "M70.941",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right hand"
      },
      {
        "code" : "M70.942",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left hand"
      },
      {
        "code" : "M70.949",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified hand"
      },
      {
        "code" : "M70.951",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right thigh"
      },
      {
        "code" : "M70.952",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left thigh"
      },
      {
        "code" : "M70.959",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified thigh"
      },
      {
        "code" : "M70.961",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right lower leg"
      },
      {
        "code" : "M70.962",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left lower leg"
      },
      {
        "code" : "M70.969",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified lower leg"
      },
      {
        "code" : "M70.971",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, right ankle and foot"
      },
      {
        "code" : "M70.972",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, left ankle and foot"
      },
      {
        "code" : "M70.979",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure, unspecified ankle and foot"
      },
      {
        "code" : "M70.98",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure other"
      },
      {
        "code" : "M70.99",
        "display" : "Unspecified soft tissue disorder related to use, overuse and pressure multiple sites"
      },
      {
        "code" : "M71.00",
        "display" : "Abscess of bursa, unspecified site"
      },
      {
        "code" : "M71.011",
        "display" : "Abscess of bursa, right shoulder"
      },
      {
        "code" : "M71.012",
        "display" : "Abscess of bursa, left shoulder"
      },
      {
        "code" : "M71.019",
        "display" : "Abscess of bursa, unspecified shoulder"
      },
      {
        "code" : "M71.021",
        "display" : "Abscess of bursa, right elbow"
      },
      {
        "code" : "M71.022",
        "display" : "Abscess of bursa, left elbow"
      },
      {
        "code" : "M71.029",
        "display" : "Abscess of bursa, unspecified elbow"
      },
      {
        "code" : "M71.031",
        "display" : "Abscess of bursa, right wrist"
      },
      {
        "code" : "M71.032",
        "display" : "Abscess of bursa, left wrist"
      },
      {
        "code" : "M71.039",
        "display" : "Abscess of bursa, unspecified wrist"
      },
      {
        "code" : "M71.041",
        "display" : "Abscess of bursa, right hand"
      },
      {
        "code" : "M71.042",
        "display" : "Abscess of bursa, left hand"
      },
      {
        "code" : "M71.049",
        "display" : "Abscess of bursa, unspecified hand"
      },
      {
        "code" : "M71.051",
        "display" : "Abscess of bursa, right hip"
      },
      {
        "code" : "M71.052",
        "display" : "Abscess of bursa, left hip"
      },
      {
        "code" : "M71.059",
        "display" : "Abscess of bursa, unspecified hip"
      },
      {
        "code" : "M71.061",
        "display" : "Abscess of bursa, right knee"
      },
      {
        "code" : "M71.062",
        "display" : "Abscess of bursa, left knee"
      },
      {
        "code" : "M71.069",
        "display" : "Abscess of bursa, unspecified knee"
      },
      {
        "code" : "M71.071",
        "display" : "Abscess of bursa, right ankle and foot"
      },
      {
        "code" : "M71.072",
        "display" : "Abscess of bursa, left ankle and foot"
      },
      {
        "code" : "M71.079",
        "display" : "Abscess of bursa, unspecified ankle and foot"
      },
      {
        "code" : "M71.08",
        "display" : "Abscess of bursa, other site"
      },
      {
        "code" : "M71.09",
        "display" : "Abscess of bursa, multiple sites"
      },
      {
        "code" : "M71.10",
        "display" : "Other infective bursitis, unspecified site"
      },
      {
        "code" : "M71.111",
        "display" : "Other infective bursitis, right shoulder"
      },
      {
        "code" : "M71.112",
        "display" : "Other infective bursitis, left shoulder"
      },
      {
        "code" : "M71.119",
        "display" : "Other infective bursitis, unspecified shoulder"
      },
      {
        "code" : "M71.121",
        "display" : "Other infective bursitis, right elbow"
      },
      {
        "code" : "M71.122",
        "display" : "Other infective bursitis, left elbow"
      },
      {
        "code" : "M71.129",
        "display" : "Other infective bursitis, unspecified elbow"
      },
      {
        "code" : "M71.131",
        "display" : "Other infective bursitis, right wrist"
      },
      {
        "code" : "M71.132",
        "display" : "Other infective bursitis, left wrist"
      },
      {
        "code" : "M71.139",
        "display" : "Other infective bursitis, unspecified wrist"
      },
      {
        "code" : "M71.141",
        "display" : "Other infective bursitis, right hand"
      },
      {
        "code" : "M71.142",
        "display" : "Other infective bursitis, left hand"
      },
      {
        "code" : "M71.149",
        "display" : "Other infective bursitis, unspecified hand"
      },
      {
        "code" : "M71.151",
        "display" : "Other infective bursitis, right hip"
      },
      {
        "code" : "M71.152",
        "display" : "Other infective bursitis, left hip"
      },
      {
        "code" : "M71.159",
        "display" : "Other infective bursitis, unspecified hip"
      },
      {
        "code" : "M71.161",
        "display" : "Other infective bursitis, right knee"
      },
      {
        "code" : "M71.162",
        "display" : "Other infective bursitis, left knee"
      },
      {
        "code" : "M71.169",
        "display" : "Other infective bursitis, unspecified knee"
      },
      {
        "code" : "M71.171",
        "display" : "Other infective bursitis, right ankle and foot"
      },
      {
        "code" : "M71.172",
        "display" : "Other infective bursitis, left ankle and foot"
      },
      {
        "code" : "M71.179",
        "display" : "Other infective bursitis, unspecified ankle and foot"
      },
      {
        "code" : "M71.18",
        "display" : "Other infective bursitis, other site"
      },
      {
        "code" : "M71.19",
        "display" : "Other infective bursitis, multiple sites"
      },
      {
        "code" : "M71.20",
        "display" : "Synovial cyst of popliteal space [Baker], unspecified knee"
      },
      {
        "code" : "M71.21",
        "display" : "Synovial cyst of popliteal space [Baker], right knee"
      },
      {
        "code" : "M71.22",
        "display" : "Synovial cyst of popliteal space [Baker], left knee"
      },
      {
        "code" : "M71.30",
        "display" : "Other bursal cyst, unspecified site"
      },
      {
        "code" : "M71.311",
        "display" : "Other bursal cyst, right shoulder"
      },
      {
        "code" : "M71.312",
        "display" : "Other bursal cyst, left shoulder"
      },
      {
        "code" : "M71.319",
        "display" : "Other bursal cyst, unspecified shoulder"
      },
      {
        "code" : "M71.321",
        "display" : "Other bursal cyst, right elbow"
      },
      {
        "code" : "M71.322",
        "display" : "Other bursal cyst, left elbow"
      },
      {
        "code" : "M71.329",
        "display" : "Other bursal cyst, unspecified elbow"
      },
      {
        "code" : "M71.331",
        "display" : "Other bursal cyst, right wrist"
      },
      {
        "code" : "M71.332",
        "display" : "Other bursal cyst, left wrist"
      },
      {
        "code" : "M71.339",
        "display" : "Other bursal cyst, unspecified wrist"
      },
      {
        "code" : "M71.341",
        "display" : "Other bursal cyst, right hand"
      },
      {
        "code" : "M71.342",
        "display" : "Other bursal cyst, left hand"
      },
      {
        "code" : "M71.349",
        "display" : "Other bursal cyst, unspecified hand"
      },
      {
        "code" : "M71.351",
        "display" : "Other bursal cyst, right hip"
      },
      {
        "code" : "M71.352",
        "display" : "Other bursal cyst, left hip"
      },
      {
        "code" : "M71.359",
        "display" : "Other bursal cyst, unspecified hip"
      },
      {
        "code" : "M71.371",
        "display" : "Other bursal cyst, right ankle and foot"
      },
      {
        "code" : "M71.372",
        "display" : "Other bursal cyst, left ankle and foot"
      },
      {
        "code" : "M71.379",
        "display" : "Other bursal cyst, unspecified ankle and foot"
      },
      {
        "code" : "M71.38",
        "display" : "Other bursal cyst, other site"
      },
      {
        "code" : "M71.39",
        "display" : "Other bursal cyst, multiple sites"
      },
      {
        "code" : "M71.40",
        "display" : "Calcium deposit in bursa, unspecified site"
      },
      {
        "code" : "M71.421",
        "display" : "Calcium deposit in bursa, right elbow"
      },
      {
        "code" : "M71.422",
        "display" : "Calcium deposit in bursa, left elbow"
      },
      {
        "code" : "M71.429",
        "display" : "Calcium deposit in bursa, unspecified elbow"
      },
      {
        "code" : "M71.431",
        "display" : "Calcium deposit in bursa, right wrist"
      },
      {
        "code" : "M71.432",
        "display" : "Calcium deposit in bursa, left wrist"
      },
      {
        "code" : "M71.439",
        "display" : "Calcium deposit in bursa, unspecified wrist"
      },
      {
        "code" : "M71.441",
        "display" : "Calcium deposit in bursa, right hand"
      },
      {
        "code" : "M71.442",
        "display" : "Calcium deposit in bursa, left hand"
      },
      {
        "code" : "M71.449",
        "display" : "Calcium deposit in bursa, unspecified hand"
      },
      {
        "code" : "M71.451",
        "display" : "Calcium deposit in bursa, right hip"
      },
      {
        "code" : "M71.452",
        "display" : "Calcium deposit in bursa, left hip"
      },
      {
        "code" : "M71.459",
        "display" : "Calcium deposit in bursa, unspecified hip"
      },
      {
        "code" : "M71.461",
        "display" : "Calcium deposit in bursa, right knee"
      },
      {
        "code" : "M71.462",
        "display" : "Calcium deposit in bursa, left knee"
      },
      {
        "code" : "M71.469",
        "display" : "Calcium deposit in bursa, unspecified knee"
      },
      {
        "code" : "M71.471",
        "display" : "Calcium deposit in bursa, right ankle and foot"
      },
      {
        "code" : "M71.472",
        "display" : "Calcium deposit in bursa, left ankle and foot"
      },
      {
        "code" : "M71.479",
        "display" : "Calcium deposit in bursa, unspecified ankle and foot"
      },
      {
        "code" : "M71.48",
        "display" : "Calcium deposit in bursa, other site"
      },
      {
        "code" : "M71.49",
        "display" : "Calcium deposit in bursa, multiple sites"
      },
      {
        "code" : "M71.50",
        "display" : "Other bursitis, not elsewhere classified, unspecified site"
      },
      {
        "code" : "M71.521",
        "display" : "Other bursitis, not elsewhere classified, right elbow"
      },
      {
        "code" : "M71.522",
        "display" : "Other bursitis, not elsewhere classified, left elbow"
      },
      {
        "code" : "M71.529",
        "display" : "Other bursitis, not elsewhere classified, unspecified elbow"
      },
      {
        "code" : "M71.531",
        "display" : "Other bursitis, not elsewhere classified, right wrist"
      },
      {
        "code" : "M71.532",
        "display" : "Other bursitis, not elsewhere classified, left wrist"
      },
      {
        "code" : "M71.539",
        "display" : "Other bursitis, not elsewhere classified, unspecified wrist"
      },
      {
        "code" : "M71.541",
        "display" : "Other bursitis, not elsewhere classified, right hand"
      },
      {
        "code" : "M71.542",
        "display" : "Other bursitis, not elsewhere classified, left hand"
      },
      {
        "code" : "M71.549",
        "display" : "Other bursitis, not elsewhere classified, unspecified hand"
      },
      {
        "code" : "M71.551",
        "display" : "Other bursitis, not elsewhere classified, right hip"
      },
      {
        "code" : "M71.552",
        "display" : "Other bursitis, not elsewhere classified, left hip"
      },
      {
        "code" : "M71.559",
        "display" : "Other bursitis, not elsewhere classified, unspecified hip"
      },
      {
        "code" : "M71.561",
        "display" : "Other bursitis, not elsewhere classified, right knee"
      },
      {
        "code" : "M71.562",
        "display" : "Other bursitis, not elsewhere classified, left knee"
      },
      {
        "code" : "M71.569",
        "display" : "Other bursitis, not elsewhere classified, unspecified knee"
      },
      {
        "code" : "M71.571",
        "display" : "Other bursitis, not elsewhere classified, right ankle and foot"
      },
      {
        "code" : "M71.572",
        "display" : "Other bursitis, not elsewhere classified, left ankle and foot"
      },
      {
        "code" : "M71.579",
        "display" : "Other bursitis, not elsewhere classified, unspecified ankle and foot"
      },
      {
        "code" : "M71.58",
        "display" : "Other bursitis, not elsewhere classified, other site"
      },
      {
        "code" : "M71.80",
        "display" : "Other specified bursopathies, unspecified site"
      },
      {
        "code" : "M71.811",
        "display" : "Other specified bursopathies, right shoulder"
      },
      {
        "code" : "M71.812",
        "display" : "Other specified bursopathies, left shoulder"
      },
      {
        "code" : "M71.819",
        "display" : "Other specified bursopathies, unspecified shoulder"
      },
      {
        "code" : "M71.821",
        "display" : "Other specified bursopathies, right elbow"
      },
      {
        "code" : "M71.822",
        "display" : "Other specified bursopathies, left elbow"
      },
      {
        "code" : "M71.829",
        "display" : "Other specified bursopathies, unspecified elbow"
      },
      {
        "code" : "M71.831",
        "display" : "Other specified bursopathies, right wrist"
      },
      {
        "code" : "M71.832",
        "display" : "Other specified bursopathies, left wrist"
      },
      {
        "code" : "M71.839",
        "display" : "Other specified bursopathies, unspecified wrist"
      },
      {
        "code" : "M71.841",
        "display" : "Other specified bursopathies, right hand"
      },
      {
        "code" : "M71.842",
        "display" : "Other specified bursopathies, left hand"
      },
      {
        "code" : "M71.849",
        "display" : "Other specified bursopathies, unspecified hand"
      },
      {
        "code" : "M71.851",
        "display" : "Other specified bursopathies, right hip"
      },
      {
        "code" : "M71.852",
        "display" : "Other specified bursopathies, left hip"
      },
      {
        "code" : "M71.859",
        "display" : "Other specified bursopathies, unspecified hip"
      },
      {
        "code" : "M71.861",
        "display" : "Other specified bursopathies, right knee"
      },
      {
        "code" : "M71.862",
        "display" : "Other specified bursopathies, left knee"
      },
      {
        "code" : "M71.869",
        "display" : "Other specified bursopathies, unspecified knee"
      },
      {
        "code" : "M71.871",
        "display" : "Other specified bursopathies, right ankle and foot"
      },
      {
        "code" : "M71.872",
        "display" : "Other specified bursopathies, left ankle and foot"
      },
      {
        "code" : "M71.879",
        "display" : "Other specified bursopathies, unspecified ankle and foot"
      },
      {
        "code" : "M71.88",
        "display" : "Other specified bursopathies, other site"
      },
      {
        "code" : "M71.89",
        "display" : "Other specified bursopathies, multiple sites"
      },
      {
        "code" : "M71.9",
        "display" : "Bursopathy, unspecified"
      },
      {
        "code" : "M72.0",
        "display" : "Palmar fascial fibromatosis [Dupuytren]"
      },
      {
        "code" : "M72.1",
        "display" : "Knuckle pads"
      },
      {
        "code" : "M72.2",
        "display" : "Plantar fascial fibromatosis"
      },
      {
        "code" : "M72.4",
        "display" : "Pseudosarcomatous fibromatosis"
      },
      {
        "code" : "M72.6",
        "display" : "Necrotizing fasciitis"
      },
      {
        "code" : "M72.8",
        "display" : "Other fibroblastic disorders"
      },
      {
        "code" : "M72.9",
        "display" : "Fibroblastic disorder, unspecified"
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
        "code" : "M75.110",
        "display" : "Incomplete rotator cuff tear or rupture of unspecified shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.111",
        "display" : "Incomplete rotator cuff tear or rupture of right shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.112",
        "display" : "Incomplete rotator cuff tear or rupture of left shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.120",
        "display" : "Complete rotator cuff tear or rupture of unspecified shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.121",
        "display" : "Complete rotator cuff tear or rupture of right shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.122",
        "display" : "Complete rotator cuff tear or rupture of left shoulder, not specified as traumatic"
      },
      {
        "code" : "M75.20",
        "display" : "Bicipital tendinitis, unspecified shoulder"
      },
      {
        "code" : "M75.21",
        "display" : "Bicipital tendinitis, right shoulder"
      },
      {
        "code" : "M75.22",
        "display" : "Bicipital tendinitis, left shoulder"
      },
      {
        "code" : "M75.30",
        "display" : "Calcific tendinitis of unspecified shoulder"
      },
      {
        "code" : "M75.31",
        "display" : "Calcific tendinitis of right shoulder"
      },
      {
        "code" : "M75.32",
        "display" : "Calcific tendinitis of left shoulder"
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
        "code" : "M75.50",
        "display" : "Bursitis of unspecified shoulder"
      },
      {
        "code" : "M75.51",
        "display" : "Bursitis of right shoulder"
      },
      {
        "code" : "M75.52",
        "display" : "Bursitis of left shoulder"
      },
      {
        "code" : "M75.80",
        "display" : "Other shoulder lesions, unspecified shoulder"
      },
      {
        "code" : "M75.81",
        "display" : "Other shoulder lesions, right shoulder"
      },
      {
        "code" : "M75.82",
        "display" : "Other shoulder lesions, left shoulder"
      },
      {
        "code" : "M75.90",
        "display" : "Shoulder lesion, unspecified, unspecified shoulder"
      },
      {
        "code" : "M75.91",
        "display" : "Shoulder lesion, unspecified, right shoulder"
      },
      {
        "code" : "M75.92",
        "display" : "Shoulder lesion, unspecified, left shoulder"
      },
      {
        "code" : "M76.00",
        "display" : "Gluteal tendinitis, unspecified hip"
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
        "code" : "M76.10",
        "display" : "Psoas tendinitis, unspecified hip"
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
        "code" : "M76.20",
        "display" : "Iliac crest spur, unspecified hip"
      },
      {
        "code" : "M76.21",
        "display" : "Iliac crest spur, right hip"
      },
      {
        "code" : "M76.22",
        "display" : "Iliac crest spur, left hip"
      },
      {
        "code" : "M76.30",
        "display" : "Iliotibial band syndrome, unspecified leg"
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
        "code" : "M76.40",
        "display" : "Tibial collateral bursitis [Pellegrini-Stieda], unspecified leg"
      },
      {
        "code" : "M76.41",
        "display" : "Tibial collateral bursitis [Pellegrini-Stieda], right leg"
      },
      {
        "code" : "M76.42",
        "display" : "Tibial collateral bursitis [Pellegrini-Stieda], left leg"
      },
      {
        "code" : "M76.50",
        "display" : "Patellar tendinitis, unspecified knee"
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
        "code" : "M76.70",
        "display" : "Peroneal tendinitis, unspecified leg"
      },
      {
        "code" : "M76.71",
        "display" : "Peroneal tendinitis, right leg"
      },
      {
        "code" : "M76.72",
        "display" : "Peroneal tendinitis, left leg"
      },
      {
        "code" : "M76.811",
        "display" : "Anterior tibial syndrome, right leg"
      },
      {
        "code" : "M76.812",
        "display" : "Anterior tibial syndrome, left leg"
      },
      {
        "code" : "M76.819",
        "display" : "Anterior tibial syndrome, unspecified leg"
      },
      {
        "code" : "M76.821",
        "display" : "Posterior tibial tendinitis, right leg"
      },
      {
        "code" : "M76.822",
        "display" : "Posterior tibial tendinitis, left leg"
      },
      {
        "code" : "M76.829",
        "display" : "Posterior tibial tendinitis, unspecified leg"
      },
      {
        "code" : "M76.891",
        "display" : "Other specified enthesopathies of right lower limb, excluding foot"
      },
      {
        "code" : "M76.892",
        "display" : "Other specified enthesopathies of left lower limb, excluding foot"
      },
      {
        "code" : "M76.899",
        "display" : "Other specified enthesopathies of unspecified lower limb, excluding foot"
      },
      {
        "code" : "M76.9",
        "display" : "Unspecified enthesopathy, lower limb, excluding foot"
      },
      {
        "code" : "M77.00",
        "display" : "Medial epicondylitis, unspecified elbow"
      },
      {
        "code" : "M77.01",
        "display" : "Medial epicondylitis, right elbow"
      },
      {
        "code" : "M77.02",
        "display" : "Medial epicondylitis, left elbow"
      },
      {
        "code" : "M77.10",
        "display" : "Lateral epicondylitis, unspecified elbow"
      },
      {
        "code" : "M77.11",
        "display" : "Lateral epicondylitis, right elbow"
      },
      {
        "code" : "M77.12",
        "display" : "Lateral epicondylitis, left elbow"
      },
      {
        "code" : "M77.20",
        "display" : "Periarthritis, unspecified wrist"
      },
      {
        "code" : "M77.21",
        "display" : "Periarthritis, right wrist"
      },
      {
        "code" : "M77.22",
        "display" : "Periarthritis, left wrist"
      },
      {
        "code" : "M77.30",
        "display" : "Calcaneal spur, unspecified foot"
      },
      {
        "code" : "M77.31",
        "display" : "Calcaneal spur, right foot"
      },
      {
        "code" : "M77.32",
        "display" : "Calcaneal spur, left foot"
      },
      {
        "code" : "M77.40",
        "display" : "Metatarsalgia, unspecified foot"
      },
      {
        "code" : "M77.41",
        "display" : "Metatarsalgia, right foot"
      },
      {
        "code" : "M77.42",
        "display" : "Metatarsalgia, left foot"
      },
      {
        "code" : "M77.50",
        "display" : "Other enthesopathy of unspecified foot and ankle"
      },
      {
        "code" : "M77.51",
        "display" : "Other enthesopathy of right foot and ankle"
      },
      {
        "code" : "M77.52",
        "display" : "Other enthesopathy of left foot and ankle"
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
        "code" : "M79.0",
        "display" : "Rheumatism, unspecified"
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
        "code" : "M79.2",
        "display" : "Neuralgia and neuritis, unspecified"
      },
      {
        "code" : "M79.3",
        "display" : "Panniculitis, unspecified"
      },
      {
        "code" : "M79.4",
        "display" : "Hypertrophy of (infrapatellar) fat pad"
      },
      {
        "code" : "M79.5",
        "display" : "Residual foreign body in soft tissue"
      },
      {
        "code" : "M79.601",
        "display" : "Pain in right arm"
      },
      {
        "code" : "M79.602",
        "display" : "Pain in left arm"
      },
      {
        "code" : "M79.603",
        "display" : "Pain in arm, unspecified"
      },
      {
        "code" : "M79.604",
        "display" : "Pain in right leg"
      },
      {
        "code" : "M79.605",
        "display" : "Pain in left leg"
      },
      {
        "code" : "M79.606",
        "display" : "Pain in leg, unspecified"
      },
      {
        "code" : "M79.609",
        "display" : "Pain in unspecified limb"
      },
      {
        "code" : "M79.621",
        "display" : "Pain in right upper arm"
      },
      {
        "code" : "M79.622",
        "display" : "Pain in left upper arm"
      },
      {
        "code" : "M79.629",
        "display" : "Pain in unspecified upper arm"
      },
      {
        "code" : "M79.631",
        "display" : "Pain in right forearm"
      },
      {
        "code" : "M79.632",
        "display" : "Pain in left forearm"
      },
      {
        "code" : "M79.639",
        "display" : "Pain in unspecified forearm"
      },
      {
        "code" : "M79.641",
        "display" : "Pain in right hand"
      },
      {
        "code" : "M79.642",
        "display" : "Pain in left hand"
      },
      {
        "code" : "M79.643",
        "display" : "Pain in unspecified hand"
      },
      {
        "code" : "M79.644",
        "display" : "Pain in right finger(s)"
      },
      {
        "code" : "M79.645",
        "display" : "Pain in left finger(s)"
      },
      {
        "code" : "M79.646",
        "display" : "Pain in unspecified finger(s)"
      },
      {
        "code" : "M79.651",
        "display" : "Pain in right thigh"
      },
      {
        "code" : "M79.652",
        "display" : "Pain in left thigh"
      },
      {
        "code" : "M79.659",
        "display" : "Pain in unspecified thigh"
      },
      {
        "code" : "M79.661",
        "display" : "Pain in right lower leg"
      },
      {
        "code" : "M79.662",
        "display" : "Pain in left lower leg"
      },
      {
        "code" : "M79.669",
        "display" : "Pain in unspecified lower leg"
      },
      {
        "code" : "M79.671",
        "display" : "Pain in right foot"
      },
      {
        "code" : "M79.672",
        "display" : "Pain in left foot"
      },
      {
        "code" : "M79.673",
        "display" : "Pain in unspecified foot"
      },
      {
        "code" : "M79.674",
        "display" : "Pain in right toe(s)"
      },
      {
        "code" : "M79.675",
        "display" : "Pain in left toe(s)"
      },
      {
        "code" : "M79.676",
        "display" : "Pain in unspecified toe(s)"
      },
      {
        "code" : "M79.7",
        "display" : "Fibromyalgia"
      },
      {
        "code" : "M79.A11",
        "display" : "Nontraumatic compartment syndrome of right upper extremity"
      },
      {
        "code" : "M79.A12",
        "display" : "Nontraumatic compartment syndrome of left upper extremity"
      },
      {
        "code" : "M79.A19",
        "display" : "Nontraumatic compartment syndrome of unspecified upper extremity"
      },
      {
        "code" : "M79.A21",
        "display" : "Nontraumatic compartment syndrome of right lower extremity"
      },
      {
        "code" : "M79.A22",
        "display" : "Nontraumatic compartment syndrome of left lower extremity"
      },
      {
        "code" : "M79.A29",
        "display" : "Nontraumatic compartment syndrome of unspecified lower extremity"
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
        "code" : "M79.81",
        "display" : "Nontraumatic hematoma of soft tissue"
      },
      {
        "code" : "M79.89",
        "display" : "Other specified soft tissue disorders"
      },
      {
        "code" : "M79.9",
        "display" : "Soft tissue disorder, unspecified"
      },
      {
        "code" : "M99.00",
        "display" : "Segmental and somatic dysfunction of head region"
      },
      {
        "code" : "M99.01",
        "display" : "Segmental and somatic dysfunction of cervical region"
      },
      {
        "code" : "M99.02",
        "display" : "Segmental and somatic dysfunction of thoracic region"
      },
      {
        "code" : "M99.03",
        "display" : "Segmental and somatic dysfunction of lumbar region"
      },
      {
        "code" : "M99.04",
        "display" : "Segmental and somatic dysfunction of sacral region"
      },
      {
        "code" : "M99.05",
        "display" : "Segmental and somatic dysfunction of pelvic region"
      },
      {
        "code" : "M99.06",
        "display" : "Segmental and somatic dysfunction of lower extremity"
      },
      {
        "code" : "M99.07",
        "display" : "Segmental and somatic dysfunction of upper extremity"
      },
      {
        "code" : "M99.08",
        "display" : "Segmental and somatic dysfunction of rib cage"
      },
      {
        "code" : "M99.09",
        "display" : "Segmental and somatic dysfunction of abdomen and other regions"
      },
      {
        "code" : "M99.10",
        "display" : "Subluxation complex (vertebral) of head region"
      },
      {
        "code" : "M99.11",
        "display" : "Subluxation complex (vertebral) of cervical region"
      },
      {
        "code" : "M99.12",
        "display" : "Subluxation complex (vertebral) of thoracic region"
      },
      {
        "code" : "M99.13",
        "display" : "Subluxation complex (vertebral) of lumbar region"
      },
      {
        "code" : "M99.14",
        "display" : "Subluxation complex (vertebral) of sacral region"
      },
      {
        "code" : "M99.15",
        "display" : "Subluxation complex (vertebral) of pelvic region"
      },
      {
        "code" : "M99.16",
        "display" : "Subluxation complex (vertebral) of lower extremity"
      },
      {
        "code" : "M99.17",
        "display" : "Subluxation complex (vertebral) of upper extremity"
      },
      {
        "code" : "M99.18",
        "display" : "Subluxation complex (vertebral) of rib cage"
      },
      {
        "code" : "M99.19",
        "display" : "Subluxation complex (vertebral) of abdomen and other regions"
      },
      {
        "code" : "M99.20",
        "display" : "Subluxation stenosis of neural canal of head region"
      },
      {
        "code" : "M99.21",
        "display" : "Subluxation stenosis of neural canal of cervical region"
      },
      {
        "code" : "M99.22",
        "display" : "Subluxation stenosis of neural canal of thoracic region"
      },
      {
        "code" : "M99.23",
        "display" : "Subluxation stenosis of neural canal of lumbar region"
      },
      {
        "code" : "M99.24",
        "display" : "Subluxation stenosis of neural canal of sacral region"
      },
      {
        "code" : "M99.25",
        "display" : "Subluxation stenosis of neural canal of pelvic region"
      },
      {
        "code" : "M99.26",
        "display" : "Subluxation stenosis of neural canal of lower extremity"
      },
      {
        "code" : "M99.27",
        "display" : "Subluxation stenosis of neural canal of upper extremity"
      },
      {
        "code" : "M99.28",
        "display" : "Subluxation stenosis of neural canal of rib cage"
      },
      {
        "code" : "M99.29",
        "display" : "Subluxation stenosis of neural canal of abdomen and other regions"
      },
      {
        "code" : "M99.30",
        "display" : "Osseous stenosis of neural canal of head region"
      },
      {
        "code" : "M99.31",
        "display" : "Osseous stenosis of neural canal of cervical region"
      },
      {
        "code" : "M99.32",
        "display" : "Osseous stenosis of neural canal of thoracic region"
      },
      {
        "code" : "M99.33",
        "display" : "Osseous stenosis of neural canal of lumbar region"
      },
      {
        "code" : "M99.34",
        "display" : "Osseous stenosis of neural canal of sacral region"
      },
      {
        "code" : "M99.35",
        "display" : "Osseous stenosis of neural canal of pelvic region"
      },
      {
        "code" : "M99.36",
        "display" : "Osseous stenosis of neural canal of lower extremity"
      },
      {
        "code" : "M99.37",
        "display" : "Osseous stenosis of neural canal of upper extremity"
      },
      {
        "code" : "M99.38",
        "display" : "Osseous stenosis of neural canal of rib cage"
      },
      {
        "code" : "M99.39",
        "display" : "Osseous stenosis of neural canal of abdomen and other regions"
      },
      {
        "code" : "M99.40",
        "display" : "Connective tissue stenosis of neural canal of head region"
      },
      {
        "code" : "M99.41",
        "display" : "Connective tissue stenosis of neural canal of cervical region"
      },
      {
        "code" : "M99.42",
        "display" : "Connective tissue stenosis of neural canal of thoracic region"
      },
      {
        "code" : "M99.43",
        "display" : "Connective tissue stenosis of neural canal of lumbar region"
      },
      {
        "code" : "M99.44",
        "display" : "Connective tissue stenosis of neural canal of sacral region"
      },
      {
        "code" : "M99.45",
        "display" : "Connective tissue stenosis of neural canal of pelvic region"
      },
      {
        "code" : "M99.46",
        "display" : "Connective tissue stenosis of neural canal of lower extremity"
      },
      {
        "code" : "M99.47",
        "display" : "Connective tissue stenosis of neural canal of upper extremity"
      },
      {
        "code" : "M99.48",
        "display" : "Connective tissue stenosis of neural canal of rib cage"
      },
      {
        "code" : "M99.49",
        "display" : "Connective tissue stenosis of neural canal of abdomen and other regions"
      },
      {
        "code" : "M99.50",
        "display" : "Intervertebral disc stenosis of neural canal of head region"
      },
      {
        "code" : "M99.51",
        "display" : "Intervertebral disc stenosis of neural canal of cervical region"
      },
      {
        "code" : "M99.52",
        "display" : "Intervertebral disc stenosis of neural canal of thoracic region"
      },
      {
        "code" : "M99.53",
        "display" : "Intervertebral disc stenosis of neural canal of lumbar region"
      },
      {
        "code" : "M99.54",
        "display" : "Intervertebral disc stenosis of neural canal of sacral region"
      },
      {
        "code" : "M99.55",
        "display" : "Intervertebral disc stenosis of neural canal of pelvic region"
      },
      {
        "code" : "M99.56",
        "display" : "Intervertebral disc stenosis of neural canal of lower extremity"
      },
      {
        "code" : "M99.57",
        "display" : "Intervertebral disc stenosis of neural canal of upper extremity"
      },
      {
        "code" : "M99.58",
        "display" : "Intervertebral disc stenosis of neural canal of rib cage"
      },
      {
        "code" : "M99.59",
        "display" : "Intervertebral disc stenosis of neural canal of abdomen and other regions"
      },
      {
        "code" : "M99.60",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of head region"
      },
      {
        "code" : "M99.61",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of cervical region"
      },
      {
        "code" : "M99.62",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of thoracic region"
      },
      {
        "code" : "M99.63",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of lumbar region"
      },
      {
        "code" : "M99.64",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of sacral region"
      },
      {
        "code" : "M99.65",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of pelvic region"
      },
      {
        "code" : "M99.66",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of lower extremity"
      },
      {
        "code" : "M99.67",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of upper extremity"
      },
      {
        "code" : "M99.68",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of rib cage"
      },
      {
        "code" : "M99.69",
        "display" : "Osseous and subluxation stenosis of intervertebral foramina of abdomen and other regions"
      },
      {
        "code" : "M99.70",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of head region"
      },
      {
        "code" : "M99.71",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of cervical region"
      },
      {
        "code" : "M99.72",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of thoracic region"
      },
      {
        "code" : "M99.73",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of lumbar region"
      },
      {
        "code" : "M99.74",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of sacral region"
      },
      {
        "code" : "M99.75",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of pelvic region"
      },
      {
        "code" : "M99.76",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of lower extremity"
      },
      {
        "code" : "M99.77",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of upper extremity"
      },
      {
        "code" : "M99.78",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of rib cage"
      },
      {
        "code" : "M99.79",
        "display" : "Connective tissue and disc stenosis of intervertebral foramina of abdomen and other regions"
      },
      {
        "code" : "M99.80",
        "display" : "Other biomechanical lesions of head region"
      },
      {
        "code" : "M99.81",
        "display" : "Other biomechanical lesions of cervical region"
      },
      {
        "code" : "M99.82",
        "display" : "Other biomechanical lesions of thoracic region"
      },
      {
        "code" : "M99.83",
        "display" : "Other biomechanical lesions of lumbar region"
      },
      {
        "code" : "M99.84",
        "display" : "Other biomechanical lesions of sacral region"
      },
      {
        "code" : "M99.85",
        "display" : "Other biomechanical lesions of pelvic region"
      },
      {
        "code" : "M99.86",
        "display" : "Other biomechanical lesions of lower extremity"
      },
      {
        "code" : "M99.87",
        "display" : "Other biomechanical lesions of upper extremity"
      },
      {
        "code" : "M99.88",
        "display" : "Other biomechanical lesions of rib cage"
      },
      {
        "code" : "M99.89",
        "display" : "Other biomechanical lesions of abdomen and other regions"
      },
      {
        "code" : "M99.9",
        "display" : "Biomechanical lesion, unspecified"
      },
      {
        "code" : "R52",
        "display" : "Pain, unspecified"
      }]
    }]
  }
}

```
