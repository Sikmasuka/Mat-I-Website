# Developer Fixes, WCAG Accessibility Requirements, and Evidence Checklist

## 1. Defects the Developer Must Fix

These defects remain open after the retest.

### 1.1 Security

- [ ] Turn debug mode off in production (`APP_DEBUG=false`) and return generic error pages. This alone keeps Resistance at 1.
- [ ] Remove the `server`, `platform`, and `panel` headers, plus `X-Powered-By` on error pages.
- [ ] Send security headers on `404`, `405`, and `419` responses as well.
- [ ] Send `Cache-Control: no-store` on logged-in pages so pressing Back after logout does not display the previous page.
- [ ] Make the password-reset page display the same message whether or not the email address is registered.
- [ ] Remove `'unsafe-inline'` from `style-src`.
- [ ] Shorten the idle session timeout to 30 minutes or less. It is currently 120 minutes.

### 1.2 Payments and Reports

These defects keep Functional Correctness at 1.

- [ ] Give the ₱1 partial payment one consistent status (**Partial, ₱4,999 remaining**) across every screen. The bill and Bills page must reflect this, and the rent bill must not say "Paid in Advance."
- [ ] Correct the receipt dialog badges:
  - The ₱3,000 payment with ₱5,000 still owed must not say "Fully Paid."
  - Fully paid deposits must not say "Partial."
- [ ] Ensure the RCC Collect dialog does not say "Up to Date" while ₱5,000 is due.
- [ ] Stop reusing the receipt number of a voided payment.
- [ ] Default the payment date to today.
- [ ] In Reports, ensure collected plus unpaid equals billed. September must not show Billed ₱0 with 100% efficiency.
- [ ] Display days overdue as a number, not "₱1.00," and assign the record to the correct aging bucket.
- [ ] Print DCR times in Philippine time, not UTC.
- [ ] Ensure the printed RCD uses the same Report No. as the preview. The print currently shows `032`, while the preview shows `007`.
- [ ] Ensure Payment Ledgers list every vendor with an active lease. The vendor with ₱10,000 unpaid is missing.
- [ ] Ensure the RCC **Overdue Dues** tab displays the overdue bill.
- [ ] Ensure the RCC dashboard **Collect** button opens the collection interface for the correct vendor.

### 1.3 Functionality

- [ ] Fix **Download QR Card**, which currently returns `403`.
- [ ] Make the Head supervisor filter work correctly.
- [ ] Allow search to find users by ID.
- [ ] Prefill the Edit User dialog with existing user information.
- [ ] Display contact numbers and stalls in Manage Users.
- [ ] Remove or redirect the placeholder `/dashboard` page.
- [ ] Add `/faq` and `/contact` pages, or remove the links to them.
- [ ] Fix the landing-page map, which is blocked by the site's own security policy.

### 1.4 Validation and Error Protection

- [ ] Require at least 5 characters and a confirmation step when rejecting a rental application.
- [ ] Enforce the password symbol rule on:
  - Signup
  - The password page
  - Create User
- [ ] Validate phone numbers in Profile and Create User using the format `09` followed by 9 additional digits, for a total of 11 digits.
- [ ] Reject amounts below ₱0.01 and display an application-level error message.
- [ ] Prevent stall rates of ₱0.

### 1.5 Audit Log

These fixes are needed to raise Non-repudiation from 1.

- [ ] Record a void under its own action type, `Voided`, rather than `Created`.
- [ ] Record the IP address and before-and-after values.
- [ ] Attribute self-signup activity to the newly registered user, not `System Engine`.
- [ ] Limit Supervisors to viewing their own logs, or change the "personal activity history" wording to match the logs they can actually see.

### 1.6 Help Text

- [ ] Correct the vendor Help documentation:
  - LOI files must be JPG or PNG only.
  - The wizard has 3 steps.
- [ ] Correct the RCC Help documentation regarding where voids are performed and the amount cap.
- [ ] Update the Supervisor Help documentation to use the current tab names.
- [ ] Inform vendors about the ₱5,000 deposit required after approval.

### 1.7 Performance

- [ ] Reduce LOI PDF generation time to 2 seconds or less. It currently takes approximately 6 seconds.

---

## 2. WCAG Accessibility Fixes

Group the fixes by failed or partially satisfied WCAG criterion.

### 2.1 Perceivable

#### 1.3.1 — Info and Relationships / 4.1.2 — Name, Role, Value

- [ ] Give every search box, select, switch, icon button, and sidebar icon link an accessible name or label.
- [ ] Associate stall-form labels with their inputs using the `for` attribute.
- [ ] Use exactly one `<main>` element per page.
- [ ] Mark tabs with `role="tab"` and table headers with `scope`.
- [ ] Expose the selected stall state to assistive technologies.
- [ ] Remove closed drawers from the page's accessibility tree and interactive flow.

#### 1.3.5 — Identify Input Purpose

- [ ] Use valid autocomplete tokens on signup, Profile, and Create User:
  - `given-name`
  - `family-name`
  - `email`
  - `tel`
  - `bday`
- [ ] Remove `autocomplete="off"` from the forgot-password page.

#### 1.4.3 — Contrast (Minimum)

- [ ] Increase text contrast to at least **4.5:1**.
- [ ] Check green buttons, captions, badges, dates, "PAID RATE," and "General."

#### 1.4.11 — Non-text Contrast

- [ ] Increase input-border contrast to at least **3:1**. Current measurements range from 1.13:1 to 1.58:1.

#### 1.1.1 — Non-text Content

- [ ] Add text alternatives to report charts.
- [ ] Give the `✕` dismiss buttons meaningful accessible names.

#### 1.4.1 — Use of Color

- [ ] Add a text label to the red `27.8%` indicator so the information is not conveyed by color alone.

### 2.2 Operable

#### 2.1.1 — Keyboard

- [ ] Allow Enter and Space to open stall details on the Supervisor map.
- [ ] Ensure the landing page's scrollable region is reachable and operable using a keyboard.

#### 2.4.3 — Focus Order

- [ ] Return focus to the button that opened a dialog when the dialog closes.
- [ ] Make the stall drawer reachable using a keyboard.

#### 2.4.4 — Link Purpose (In Context)

- [ ] Give sidebar icon links accessible names.
- [ ] Fix the broken `#general`, `#appeals`, and `#contact` anchors.

#### 2.4.1 — Bypass Blocks

- [ ] Add skip links to the following pages:
  - `/`
  - `/policy`
  - `/loi-wizard`
  - `/forgot-password`
  - `/mission`
  - `/vision`

#### 2.4.6 — Headings and Labels

- [ ] Ensure each page has exactly one `<h1>`, with no skipped heading levels.
- [ ] Make action names specific and descriptive.

#### 2.4.7 — Focus Visible

- [ ] Add a visible focus style to the "Show password" control.

#### 2.2.1 — Timing Adjustable

- [ ] Warn users before their session expires.
- [ ] Allow users to extend their session.

#### 2.2.2 — Pause, Stop, Hide

- [ ] Add a pause control to the hero animation or respect the user's reduced-motion setting.

### 2.3 Understandable

#### 3.3.1 — Error Identification / 3.3.3 — Error Suggestion

- [ ] Mark invalid fields with `aria-invalid` and associate each field with its error message.
- [ ] Never fail silently. Address Quick Scan failures, empty exports, and blank stall numbers.
- [ ] Replace framework error text with plain-language messages explaining how to fix the problem.

#### 3.3.2 — Labels or Instructions

- [ ] Give inputs visible labels instead of relying only on placeholders.
- [ ] Mark the contact number as required.
- [ ] Ensure the password checklist matches the actual password rules enforced by the application.

#### 3.3.4 — Error Prevention (Legal, Financial, Data)

- [ ] Add a review step for the security deposit.
- [ ] Require stronger confirmation before permanently deleting data.

### 2.4 Robust

#### 4.1.1 — Parsing

- [ ] Remove nested `<main>` elements.
- [ ] Ensure the pages pass the W3C validator.

#### 4.1.3 — Status Messages

- [ ] Expose inline errors as live regions or alerts.
- [ ] Announce when a receipt is issued or voided.

---

## 3. Evidence the Developer Must Supply

A black-box browser audit cannot prove the following items. They remain at level 2 even after every defect is fixed. To reach level 3, the team must provide the evidence below.

| Quality Attribute                                          | Evidence Required                                                                                                                                         |
| ---------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Functional Completeness                                    | The Software Requirements Specification (SRS) or feature list to verify 100% feature coverage.                                                            |
| Resource Utilization, Capacity, Scalability                | A JMeter or k6 load-test report covering 50+ concurrent users and 2× load, including server CPU and memory measurements.                                  |
| Availability                                               | An uptime-monitoring report demonstrating at least 99% availability.                                                                                      |
| Integrity, Resistance                                      | An OWASP ZAP or equivalent security scan with no high- or critical-severity findings.                                                                     |
| Confidentiality                                            | Proof that passwords are hashed (e.g., bcrypt) and sensitive data is encrypted at rest.                                                                   |
| Maintainability (5 items)                                  | Repository access or architecture documentation, a test-coverage report covering 60–70% of core features, and change-request and regression-test results. |
| Installability, Replaceability                             | Deployment documentation tested on a clean server and evidence that one component can be replaced or swapped.                                             |
| Learnability, Operability, Appropriateness Recognizability | A short usability test with first-time users demonstrating at least 90% task success, with core tasks completed within 5 minutes.                         |
| Adaptability                                               | Testing in Firefox and Safari, or on real phones, in addition to the browser used in the original audit.                                                  |
| WCAG 4.1.2 and 4.1.3                                       | A screen-reader test using NVDA or VoiceOver confirming accessible names and status announcements.                                                        |

---

## 4. Realistic Targets

### 4.1 Recommended for Use

Fix every high-severity defect in Section 1 and every Level A failure in Section 2, specifically:

- [ ] WCAG 1.3.1 — Info and Relationships
- [ ] WCAG 2.1.1 — Keyboard
- [ ] WCAG 2.4.3 — Focus Order
- [ ] WCAG 2.4.4 — Link Purpose (In Context)
- [ ] WCAG 4.1.2 — Name, Role, Value

**Target outcome:**

- Zero open critical- or high-severity defects.
- Level A WCAG conformance.

### 4.2 Full Pass

Complete all requirements in Sections 1, 2, and 3.

**Target outcome:**

- All identified defects resolved.
- Level AA WCAG conformance.
- Quality attributes assessed as **"Fully Meets."**
- Required supporting evidence supplied and verified.
