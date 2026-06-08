# Oswestry Disability Index Questionnaire - CMS ACCESS Model API v0.9.11

## Questionnaire: 

*  [Tree view](#tabs-tree) 
*  [Sample Rendering](#tabs-sample) 
*  [Form Logic](#tabs-logic) 

### Test this Questionnaire

### Responses for this Questionnaire

* [Example Oswestry Disability Index (ODI) QuestionnaireResponse for the MSK track](QuestionnaireResponse-OswestryDisabilityIndexExample.md)



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "OswestryDisabilityIndexQuestionnaireExample",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire|3.0.0"]
  },
  "url" : "http://example.org/Questionnaire/OswestryDisabilityIndexQuestionnaire",
  "version" : "0.9.11",
  "status" : "active",
  "subjectType" : ["Patient"],
  "date" : "2026-06-04T22:54:52-04:00",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "US",
      "display" : "United States of America"
    }]
  }],
  "code" : [{
    "system" : "http://loinc.org",
    "code" : "97908-8",
    "display" : "Oswestry Disability Index"
  }],
  "item" : [{
    "linkId" : "odi-1",
    "text" : "Pain intensity",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I have no pain at the moment."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "The pain is very mild at the moment."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "The pain is moderate at the moment."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "The pain is fairly severe at the moment."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "The pain is very severe at the moment."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "The pain is the worst imaginable at the moment."
      }
    }]
  },
  {
    "linkId" : "odi-2",
    "text" : "Personal care (washing, dressing, etc.)",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I can look after myself normally without causing extra pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "I can look after myself normally but it is very painful."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "It is painful to look after myself and I am slow and careful."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "I need some help but can manage most of my personal care."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "I need help every day in most aspects of my personal care."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "I do not get dressed, I wash with difficulty and stay in bed."
      }
    }]
  },
  {
    "linkId" : "odi-3",
    "text" : "Lifting",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I can lift heavy weights without additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "I can lift heavy weights but it gives additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain prevents me lifting heavy weights off the floor, but I can manage if they are conveniently placed e.g. on a table."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain prevents me from lifting heavy weights, but I can manage light to medium weights if they are conveniently positioned."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "I can lift very light weights."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "I cannot lift or carry anything at all."
      }
    }]
  },
  {
    "linkId" : "odi-4",
    "text" : "Walking",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "Pain does not prevent me walking any distance."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "Pain prevents me from walking more than one mile."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain prevents me from walking more than a quarter of a mile."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain prevents me from walking more than 100 yards."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "I can only walk using a stick or crutches."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "I am in bed most of the time and have to crawl to the toilet."
      }
    }]
  },
  {
    "linkId" : "odi-5",
    "text" : "Sitting",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I can sit in any chair as long as I like."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "I can only sit in my favorite chair as long as I like."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain prevents me from sitting for more than one hour."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain prevents me from sitting for more than half an hour."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "Pain prevents me from sitting for more than 10 minutes."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Pain prevents me from sitting at all."
      }
    }]
  },
  {
    "linkId" : "odi-6",
    "text" : "Standing",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I can stand as long as I want without additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "I can stand as long as I want but it gives me additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain prevents me from standing for more than 1 hour."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain prevents me from standing for more than half an hour."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "Pain prevents me from standing for more than 10 minutes."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Pain prevents me from standing at all."
      }
    }]
  },
  {
    "linkId" : "odi-7",
    "text" : "Sleeping",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "My sleep is never interrupted by pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "My sleep is occasionally interrupted by pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Because of pain I have less than 6 hours sleep."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Because of pain I have less than 4 hours sleep."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "Because of pain I have less than 2 hours sleep."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Pain prevents me from sleeping at all."
      }
    }]
  },
  {
    "linkId" : "odi-8",
    "text" : "Sex life (if applicable)",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "My sex life is normal and causes no additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "My sex life is normal but causes some additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "My sex life is nearly normal but is very painful."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "My sex life is severely restricted by pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "My sex life is non existent because of pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Pain prevents me from having any sex life at all."
      }
    }]
  },
  {
    "linkId" : "odi-9",
    "text" : "Social life",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "My social life is normal and causes me no additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "My social life is normal but increases the degree of pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain has no significant effect on social life apart from limiting my more energetic interests e.g. sports, etc."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain has restricted my social life and I do not go out as often."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "Pain has restricted social life to my home."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "I have no social life because of pain."
      }
    }]
  },
  {
    "linkId" : "odi-10",
    "text" : "Traveling",
    "type" : "choice",
    "answerOption" : [{
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 0
        }],
        "display" : "I can travel anywhere without pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 1
        }],
        "display" : "I can travel anywhere but it gives me additional pain."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 2
        }],
        "display" : "Pain is bad but I am able to manage trips over two hours."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 3
        }],
        "display" : "Pain restricts me to trips of less than one hour."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 4
        }],
        "display" : "Pain restricts trips to short necessary journeys under 30 minutes."
      }
    },
    {
      "valueCoding" : {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/ordinalValue",
          "valueDecimal" : 5
        }],
        "display" : "Pain prevents traveling except to receive treatment."
      }
    }]
  },
  {
    "linkId" : "score",
    "code" : [{
      "system" : "http://loinc.org",
      "code" : "97909-6",
      "display" : "Oswestry disability index score ODI"
    }],
    "text" : "Oswestry disability index score ODI",
    "type" : "decimal"
  }]
}

```
