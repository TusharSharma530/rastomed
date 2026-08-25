<?php
/**
 * Careers Page - RastoMed Pharma
 */
require_once __DIR__ . '/includes/components.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Build your career at RastoMed Pharma Private Limited.">
  <title>Careers - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Careers Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">Careers</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">Careers</span>
        </nav>
      </div>
    </section>

    <!-- Career Form Section -->
    <section class="section">
      <div class="container">
        <div class="career-form-grid">
          <div class="career-form-wrapper">
            <form id="careerForm" class="career-form">
              <div class="career-form__row">
                <div class="career-form__group">
                  <label class="career-form__label">Name<span>*</span></label>
                  <input type="text" class="career-form__input" placeholder="Name" required>
                </div>
                <div class="career-form__group">
                  <label class="career-form__label">Mobile<span>*</span></label>
                  <input type="tel" class="career-form__input" placeholder="Mobile" required>
                </div>
              </div>
              <div class="career-form__row">
                <div class="career-form__group">
                  <label class="career-form__label">Email<span>*</span></label>
                  <input type="email" class="career-form__input" placeholder="Email" required>
                </div>
                <div class="career-form__group">
                  <label class="career-form__label">Designation</label>
                  <input type="text" class="career-form__input" placeholder="Designation">
                </div>
              </div>
              <div class="career-form__group">
                <label class="career-form__label">Resume</label>
                <div class="career-form__file-wrapper">
                  <input type="file" class="career-form__file" id="resumeFile" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                  <label for="resumeFile" class="career-form__file-label">Choose file</label>
                  <span class="career-form__file-btn">Browse</span>
                </div>
                <small class="career-form__file-hint">Allowed only Image, PDF and DOC file.</small>
              </div>
              <div class="career-form__group">
                <label class="career-form__label">Message</label>
                <textarea class="career-form__textarea" placeholder="Message" rows="4"></textarea>
              </div>
              <button type="submit" class="career-form__submit">
                Submit
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              </button>
            </form>
          </div>
          <div class="career-form-image">
            <img src="assets/images/carrer image.jpg" alt="Career at RastoMed Pharma">
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
