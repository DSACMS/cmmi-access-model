# Conformance Expectations - CMS ACCESS Model API v0.9.0

* [**Table of Contents**](toc.md)
* **Conformance Expectations**

## Conformance Expectations

**📘 Operations Manual:**Detailed implementation guidance including authentication workflows, API-specific examples, subscriptions, and testing scenarios is available in the separate Operations Manual document.

### Conformance Language

The ACCESS Model IG uses conformance verbs defined in the [FHIR core specification](https://hl7.org/fhir/R4/conformance-rules.html#conflang) to indicate the requirements for implementations.

#### Conformance Verbs

* **SHALL**: An absolute requirement for all implementations
* **SHALL NOT**: An absolute prohibition
* **SHOULD**: A recommendation that may be disregarded with valid justification
* **SHOULD NOT**: A recommendation against a particular approach
* **MAY**: Truly optional behavior that implementations can choose to support or not

#### Examples of Conformance Verb Usage

**SHALL Example**:

* Clients **SHALL** include an OAuth 2.0 Bearer token in the Authorization header for all API requests

**SHOULD Example**:

* Clients **SHOULD** implement exponential backoff when polling for submission status
* Systems **SHOULD** cache OAuth tokens to minimize authentication requests

**MAY Example**:

* Systems **MAY** include additional identifiers beyond the recommended MBI
* Implementations **MAY** support multiple concurrent operations

### Must Support

The FHIR profiles in the ACCESS Model IG make use of the [Must Support](https://hl7.org/fhir/R4/profiling.html#mustsupport) property to identify data elements that have special conformance requirements.

#### Must Support Rules for ACCESS Model

**For ACCESS API Servers (CMS Systems)**:

Systems **SHALL**:

1. Be capable of populating all Must Support data elements in response parameters
1. Include Must Support elements in responses when data are available
1. Return responses that validate against the ACCESS profiles

**For ACCESS API Clients (Participant Systems)**:

Systems **SHALL**:

1. Be capable of processing all Must Support data elements without generating errors
1. Be capable of displaying Must Support elements to end users or storing them for later use
1. Not reject or fail to process resources containing Must Support elements

Systems **SHALL NOT**:

1. Generate an error or cause the application to fail when receiving a Must Support data element
1. Silently ignore Must Support data elements

#### Must Support and Cardinality

Must Support does not change the cardinality requirements of an element:

* **0..1 MS**: Optional element. If present, must be supported. If not present, no requirement to send.
* **1..1 MS**: Required element. Must always be populated and must be supported.
* **0..* MS**: Optional repeating element. If present, all instances must be supported.
* **1..* MS**: Required repeating element. At least one must be present, and all must be supported.

**Example**: The `conditions` parameter in the Alignment API is `1..* MS`, meaning:

* At least one Condition resource is required
* All Condition resources must be supported by implementations
* Systems must be able to process multiple Condition resources if provided

### Value Set Bindings

The ACCESS Model IG uses [value set bindings](https://hl7.org/fhir/R4/terminologies.html#strength) to constrain the codes that can be used in coded elements. FHIR defines four binding strengths that determine conformance requirements.

#### Binding Strength Definitions

**Required Binding**

* Implementations **SHALL** use a code from the specified value set
* No other codes are permitted
* Used when interoperability requires exact agreement on codes
* Example: [ACCESSTrackVS](ValueSet-ACCESSTrackVS.md) for the `track` parameter (must be one of: eCKM, CKM, MSK, or BH)

**Extensible Binding**

* Implementations **SHALL** use a code from the specified value set if applicable
* Other codes **MAY** be used if no suitable code exists in the value set
* Used when a value set covers most but not all valid cases

**Preferred Binding**

* Implementations **SHOULD** use a code from the specified value set if applicable
* Other codes **MAY** be used freely
* Provides guidance without strict requirements
* Used for recommendations rather than requirements

**Example Binding**

* The value set is provided as an example only
* No conformance requirements
* Used to illustrate the type of codes that might be used

#### ACCESS Model Binding Usage

The ACCESS Model IG primarily uses **required** bindings:

**Required Bindings** are used for:

* ACCESS Model tracks (eCKM, CKM, MSK, BH)
* Track-specific diagnosis codes (e.g., [ACCESSCKMDiagnosisVS](ValueSet-ACCESSCKMDiagnosisVS.md), [ACCESSMSKDiagnosisVS](ValueSet-ACCESSMSKDiagnosisVS.md))
* Operation result codes (eligibility results, alignment results, etc.)
* Unalignment reasons
* Data reporting result codes

### Profile Conformance

#### Claiming Conformance to ACCESS Profiles

To claim conformance to an ACCESS Model profile, systems **SHALL**:

1. **Populate required elements**- All elements with minimum cardinality of 1 or greater must be populated
1. **Support Must Support elements**- Follow the Must Support rules defined above
1. **Use required value sets**- Use codes from required value sets where specified
1. **Meet profile constraints**- Satisfy all invariants and constraints defined in the profile
1. **Validate resources**- Resources should validate against the profile using a FHIR validator

#### Example: ACCESS Condition Profile Conformance

To conform to the [ACCESS Condition Profile](StructureDefinition-access-condition.md), systems must:

* Populate the `code` element (1..1 cardinality)
* Include at least one coding from the ICD-10-CM code system (`http://hl7.org/fhir/sid/icd-10-cm`)
* Support all Must Support elements inherited from US Core Condition
* Validate the resource against both US Core Condition and ACCESS Condition profiles

### Capability Statement Conformance

The ACCESS Model IG defines [Capability Statements](artifacts.md#capability-statements) for each API. These statements define the expected capabilities of systems implementing the APIs.

#### Server Conformance Requirements

ACCESS API servers (CMS systems) **SHALL**:

1. **Support required operations**- Implement all operations defined in the applicable capability statement
1. **Support required parameters**- Accept all required input parameters for each operation
1. **Return conformant responses**- Return responses that conform to the defined output parameter profiles
1. **Support asynchronous processing**- Implement the HTTP 202 Accepted pattern for primary operations
1. **Implement OAuth 2.0**- Support OAuth 2.0 Client Credentials flow for authentication

#### Client Conformance Requirements

ACCESS API clients (participant systems) **SHALL**:

1. **Invoke operations correctly**- Call operations with properly formatted Parameters resources
1. **Provide required parameters**- Include all required input parameters
1. **Handle asynchronous responses**- Implement polling logic for HTTP 202 responses
1. **Process all result codes**- Handle all possible result codes defined for each API
1. **Implement OAuth 2.0**- Obtain and present valid OAuth 2.0 Bearer tokens

### Testing and Validation

For testing guidance including test scenarios, checklists, and integration patterns, see the Testing Guide section in the Operations Manual.

