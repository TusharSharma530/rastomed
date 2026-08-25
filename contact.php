<?php
/**
 * Contact Page - RastoMed Pharma
 */
require_once __DIR__ . '/includes/components.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact RastoMed Pharma - Get in touch with our pharmaceutical team.">
  <title>Contact Us - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Contact Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">Contact Us</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">Contact Us</span>
        </nav>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
      <div class="container">
        <div class="contact-grid">

          <!-- Address Side -->
          <div>
            <h2 class="contact__title">Address</h2>
            <p class="contact__subtitle">You can reach us via Call, Mail or Direct Visit.</p>

            <div class="contact-info__list">
              <!-- Registered Address -->
              <div class="contact-info__item">
                <div class="contact-info__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <strong class="contact-info__label">Address</strong>
                  <p class="contact-info__text">353, Shivaji Road, Meerut, Uttar Pradesh-250001</p>
                </div>
              </div>

              <!-- Email -->
              <div class="contact-info__item">
                <div class="contact-info__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <div>
                  <p class="contact-info__text contact-info__text--relaxed">
                    info@rastomedpharma.com<br>
                    rastomedpharma@gmail.com
                  </p>
                </div>
              </div>

              <!-- Phone -->
              <div class="contact-info__item">
                <div class="contact-info__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                  <p class="contact-info__text contact-info__text--relaxed">
                    +91 9410666599 <br>
                    +91 7906752047
                  </p>
                </div>
              </div>
            </div>

            <!-- Social Icons -->
            <div class="contact-socials">
              <a href="#" class="contact-socials__btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
              </a>
              <a href="#" class="contact-socials__btn contact-socials__btn--dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
              </a>
            </div>
          </div>

          <!-- Contact Form Side -->
          <div class="contact-form-card">
            <h2 class="contact__title">Contact Us</h2>
            <p class="contact__subtitle">Please fill the form and we will get back to you soon.</p>

            <form id="contactForm" class="contact-form">
              <div class="form-group">
                <label class="form-label" for="contactName">Name*</label>
                <input type="text" id="contactName" name="name" class="form-input" placeholder="Name" required>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactPhone">Mobile*</label>
                <input type="tel" id="contactPhone" name="phone" class="form-input" placeholder="Mobile" required>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactEmail">Email*</label>
                <input type="email" id="contactEmail" name="email" class="form-input" placeholder="Email" required>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactMessage">Comments</label>
                <textarea id="contactMessage" name="message" class="form-input" rows="4" placeholder="Comments"></textarea>
              </div>

              <div>
                <button type="submit" class="btn btn--primary btn--lg contact-form__submit">
                  Submit
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="contact-map-section">
      <div class="container">
        <div class="contact-map-wrapper">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7107!3d28.9845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974b6a0b0b0b0b0%3A0x0b0b0b0b0b0b0b0b!2sShivaji+Road%2C+Meerut%2C+Uttar+Pradesh+250001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
            width="100%"
            height="100%"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="RastoMed Pharma Location">
          </iframe>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
