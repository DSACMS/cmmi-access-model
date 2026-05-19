#  - CMS ACCESS Model API v0.9.8

## 

This page provides detailed testing guidance to ensure implementations conform to ACCESS Model requirements before production deployment.

### Testing Checklist

Before deploying to production, implementers should complete the following validation steps:

**FHIR Conformance Validation:**

* All resource instances validate against their declared profiles
* All Must Support elements are properly populated when data is available
* All required elements are present in submissions
* Value set bindings use codes from the correct code systems
* Patient resources include valid MBI in correct format

**Operation Testing:**

* All four operations (`$check-eligibility`, `$align`, `$unalign`, `$report-data`) successfully submit requests
* `Content-Location` header is correctly parsed and used for polling
* `$submission-status` correctly returns HTTP 202 Accepted while processing
* `$submission-status` correctly returns HTTP 200 OK with result when complete
* All result codes are correctly handled

**Authentication & Security:**

* OAuth 2.0 token acquisition succeeds
* Token is correctly included in Authorization header
* Token refresh works before expiration
* TLS 1.3 is enforced
* MBI and PII/PHI are encrypted in transit and storage

**Error Handling:**

* 400 errors are handled without retry
* 401 errors trigger token refresh
* 500/503 errors implement exponential backoff retry
* Network errors implement retry logic
* Timeout scenarios are handled gracefully

**Asynchronous Pattern:**

* Polling implements appropriate wait intervals (5-30 seconds)
* Polling includes timeout mechanism
* Submission IDs are stored and associated with original requests
* Polling continues after network interruption

### Test Scenarios by API

#### Eligibility API Test Scenarios

| | | | |
| :--- | :--- | :--- | :--- |
| Eligible Patient | Valid patient with qualifying diagnosis | HTTP 200, result "eligible" | Can proceed to alignment |
| Control Group | Patient randomized to control | HTTP 200, result "not-eligible-control-group" | 12-month wait documented |
| Already Aligned | Patient aligned to another provider | HTTP 200, result "not-eligible-already-aligned" | Cannot align |
| Missing Parameter | Request without patient | HTTP 400, OperationOutcome | Error identifies missing parameter |
| Invalid Track | Track code not in value set | HTTP 400, OperationOutcome | Error identifies invalid track |

#### Alignment API Test Scenarios

| | | | |
| :--- | :--- | :--- | :--- |
| Successful Alignment | Eligible patient with conditions | HTTP 200, result "aligned" | Subscriptions created |
| Provider Switch | Alignment with switch consent after 90 days | HTTP 200, result "aligned-switch-approved" | Previous subscriptions cancelled |
| Lock-In Active | Switch attempt within 90 days | HTTP 200, result "not-aligned-already-aligned" | Switch rejected |
| Missing Conditions | Alignment without conditions | HTTP 400, OperationOutcome | Error identifies missing conditions |
| No Qualifying Diagnosis | Conditions don't match track | HTTP 200, result "not-aligned-diagnoses" | Specific requirements noted |

#### Unalignment API Test Scenarios

| | | | |
| :--- | :--- | :--- | :--- |
| Successful Unalignment | Valid reason (geographic-relocated) | HTTP 200, result "unaligned" | Subscriptions cancelled |
| Manual Review | Unalignment requiring review | HTTP 200, result "unalignment-pending" | Subscriptions remain active |
| Not Aligned | Patient not currently aligned | HTTP 200, result "not-unaligned-not-aligned" | Cannot unalign |
| Missing Reason | Unalignment without reason | HTTP 400, OperationOutcome | Error identifies missing reason |

#### Data Reporting API Test Scenarios

| | | | |
| :--- | :--- | :--- | :--- |
| Successful CKM Submission | Complete CKM bundle | HTTP 200, result "success" | All observations recorded |
| Validation Error | Bundle missing required sections | HTTP 200, result "validation-error" | Specific errors identified |
| Patient Not Aligned | Data for unaligned patient | HTTP 200, result "patient-not-aligned" | Submission rejected |
| Duplicate | Same data submitted twice | HTTP 200, result "duplicate" | Original submission referenced |
| Incorrect Track | MSK data for CKM patient | HTTP 200, result "incorrect-track" | Track mismatch identified |

### Integration Testing Patterns

**Pattern 1: End-to-End Workflow**

```
1. Check eligibility → "eligible"
2. Align patient → "aligned"  
3. Submit baseline data → "success"
4. Submit quarterly data → "success"
5. Unalign patient → "unaligned"

```

Validates: Complete patient lifecycle through all ACCESS Model operations

**Pattern 2: Error Recovery**

```
1. Submit operation with network error
2. Implement retry with exponential backoff
3. Resume polling after reconnection
4. Verify operation completes successfully

```

Validates: Network interruption handling and recovery mechanisms

**Pattern 3: Token Refresh During Polling**

```
1. Submit long-running operation
2. Token expires during polling
3. Refresh token automatically
4. Continue polling with new token
5. Verify operation completes

```

Validates: Token management during asynchronous operations

**Pattern 4: Concurrent Operations**

```
1. Check eligibility for multiple patients in parallel
2. Align multiple patients simultaneously
3. Submit data for multiple patients concurrently
4. Verify all operations complete correctly

```

Validates: Parallel processing capability and resource management

### Validation Tools and Resources

**FHIR Validation:**

* Online validator: [https://validator.fhir.org/](https://validator.fhir.org/)

