#  - CMS ACCESS Model API v0.9.8

## 

The ACCESS Model provides automatic email notifications for important events during the patient ACCESS Model lifecycle.

### Overview

Upon successful patient alignment, participants are automatically enrolled to receive email notifications about upcoming deadlines and events that require action or awareness. These email notifications are automatically stopped when a patient is unaligned, either manually or through the ACCESS Model system.

### Event Types

The following event types trigger email notifications to ACCESS participants:

| | | | |
| :--- | :--- | :--- | :--- |
| Provider Lock-In Period Ending | `provider-lock-ending` | The 90-day provider lock-in period is ending soon, allowing the patient to switch to a different provider if desired | Before the lock-in period ends |
| Control Group Period Ending | `control-group-ending` | The 12-month control group assignment period is ending soon, allowing the patient to be reconsidered for alignment in the ACCESS Model | Before control group period ends |
| Alignment Renewal Due | `alignment-renewal` | The initial alignment period is ending and renewal action is required to continue services under the ACCESS Model | Before initial alignment period expires |
| Baseline Reporting Due | `baseline-reporting-window` | The baseline data report is due soon. If baseline reporting is not received within 60 days of alignment, the patient will be unaligned. | When baseline reporting deadline is approaching |
| Quarterly Reporting Due | `quarterly-reporting-window` | The quarterly data report is due soon. Quarterly reporting must be submitted 70 to 110 days after the prior data submission. | When quarterly reporting window opens |
| End-of-Year Reporting Due | `eoy-reporting-window` | The end-of-year data report is due soon. End-of-year reporting must be submitted no later than 425 days from the date of alignment (365 days plus an additional 60 days). | When end-of-year reporting window opens |
| Unalignment Notice | `unalignment` | The patient has been unaligned from the ACCESS Model due to a change in eligibility status. | When patient is unaligned by the ACCESS Model system |

### Email Notification Enrollment

Email notifications are automatically configured during the participant onboarding process. The email addresses registered during onboarding will receive notifications for all relevant events related to aligned patients.

**Key Points:**

* Email addresses are configured during participant onboarding
* Notifications are sent automatically for all events
* No additional configuration needed during alignment

**What Happens After Alignment:**

Upon successful alignment (`HTTP 200` with result code `aligned` or `aligned-switch-approved`), the system automatically:

1. Begins monitoring for upcoming events that require notification
1. Sends email notifications to registered addresses when events occur
1. Continues notifications throughout the alignment period
1. Stops notifications when the patient is unaligned

You do not need to manually configure or manage these notifications — they are handled automatically by the system based on your registered email addresses.

### Email Notification Content

Email notifications include:

* **Event Type**: Clear description of what is happening (e.g., "Participant Lock-In Period Ending")
* **Submission ID**: Submission ID from the successful alignment for the patient, provided in the Beneficiary Alignment Report
* **Participant ID**: Your ACCESS participant identifier
* **Deadline Date**: When action is required or event occurs
* **Action Required**: Specific steps you need to take
* **Additional Information**: Relevant details and guidance

#### Example Email Notifications

```
Subject: ACCESS Model Notification - Participant Lock-In Period Ending

Dear ACCESS Participant,

Event: Participant Lock-In Period Ending
Submission ID: sub-123456
Participant ID: ACCES12345
Deadline Date: October 1, 2026

Action Required:
The 90-day participant lock-in period for this patient ends on October 1, 2026. 
After this date, the patient may switch to another ACCESS participant 
if they choose.

Additional Information:
Please contact the patient to discuss their care options and ensure they are 
aware of this upcoming change.

If you have questions, please contact ACCESS Model support at 
ACCESSModelTeam@cms.hhs.gov.

```

### Notification Lifecycle

#### Enrollment

* Automatic upon successful alignment
* Uses email addresses from participant onboarding
* Notifications sent for all relevant events

#### Active Period

* Remains active for duration of alignment
* Triggers email notifications at appropriate times

#### Cancellation

* Automatic upon successful unalignment
* No further notifications sent for that patient
* Participant continues to receive notifications for other aligned patients

### Implementation Guidance

#### Receiving Notifications

Your email system should:

* Accept emails from ACCESS Model notification service
* Configure spam filters to allow ACCESS emails
* Set up forwarding rules if needed for team distribution
* Monitor inbox regularly for time-sensitive notifications

#### Processing Notifications

When you receive a notification email:

1. **Review Event Details**- Understand what is happening
1. **Check Deadline**- Note when action is required
1. **Update Internal Systems**- Record event in your system
1. **Take Appropriate Action**- Follow up with patient if needed
1. **Complete Required Actions**- Perform required tasks before deadline

#### Security Considerations

* Notification emails do not contain any Personally Identifiable Information (PII) and/or Protected Health Information (PHI) in emails
* Follow your organization's email security policies
* Do not forward notification emails outside your organization

### Related Artifacts

* [ACCESSEventTypeCS CodeSystem](CodeSystem-ACCESSEventTypeCS.md)
* [ACCESSEventTypeVS ValueSet](ValueSet-ACCESSEventTypeVS.md)

