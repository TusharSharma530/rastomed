<?php
/**
 * Apply / Job Alert Page - RastoMed Pharma
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Subscribe for job alerts at RastoMed Pharma Private Limited.">
  <title>Job Alerts - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Hero Banner -->
    <section class="apply-hero">
      <img src="assets/images/apply-hero.jpg" alt="Job Alerts at RastoMed Pharma" class="apply-hero__bg">
      <div class="apply-hero__overlay"></div>
      <div class="apply-hero__content">
        <span class="apply-hero__badge">Job Alerts</span>
        <h1 class="apply-hero__title">Subscribe for Job Alerts</h1>
      </div>
    </section>

    <!-- Application Form -->
    <section class="apply-form-section">
      <div class="container">
        <div class="apply-form-card">
          <form class="apply-form" action="#" method="POST" enctype="multipart/form-data">
            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">Primary Email<span>*</span></label>
                <input type="email" name="email" class="apply-form__input" required>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Mobile Number<span>*</span></label>
                <div class="apply-form__phone">
                  <span class="apply-form__phone-code">🇮🇳 +91</span>
                  <input type="tel" name="mobile" class="apply-form__input apply-form__input--phone" required>
                </div>
              </div>
            </div>

            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">First Name<span>*</span></label>
                <input type="text" name="first_name" class="apply-form__input" required>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Last Name<span>*</span></label>
                <input type="text" name="last_name" class="apply-form__input" required>
              </div>
            </div>

            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">Country<span>*</span></label>
                <select name="country" class="apply-form__select" required>
                  <option value="India" selected>India</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Canada">Canada</option>
                  <option value="Australia">Australia</option>
                  <option value="Germany">Germany</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Job Function<span>*</span></label>
                <select name="job_function" class="apply-form__select" required>
                  <option value="" disabled selected>Select</option>
                  <option value="Sales">Sales</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Research & Development">Research &amp; Development</option>
                  <option value="Quality Assurance">Quality Assurance</option>
                  <option value="Manufacturing">Manufacturing</option>
                  <option value="Finance">Finance</option>
                  <option value="Human Resources">Human Resources</option>
                  <option value="Operations">Operations</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>

            <div class="apply-form__group">
              <label class="apply-form__label">Resume<span>*</span></label>
              <input type="file" name="resume" class="apply-form__file" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="apply-form__consent">
              <h3 class="apply-form__consent-title">Consent/Policy</h3>
              <p class="apply-form__consent-text">
                We collect and process your personal data strictly for recruitment purposes, including application screening, evaluations, offer roll-outs, and background checks. Your information is securely stored in our applicant tracking system and handled in accordance with applicable data protection laws.<br>
                By proceeding, you consent to the use of your data for these purposes.
              </p>
              <label class="apply-form__checkbox">
                <input type="checkbox" name="consent" required>
                <span>I agree to the processing of my personal data for recruitment activities, as outlined above.</span>
              </label>
            </div>

            <div class="apply-form__submit-wrap">
              <button type="submit" class="apply-form__submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
