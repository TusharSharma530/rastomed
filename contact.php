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
  <title>CONTACT - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .contact-section {
     
      background: linear-gradient(135deg, var(--color-surface-alt) 0%, var(--color-surface) 100%);
    }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: clamp(2rem, 5vw, 4rem);
      align-items: start;
    }
    .contact-card {
      background: var(--color-surface);
      border: 1px solid var(--color-border);
      border-radius: var(--radius-2xl);
      padding: var(--space-10);
      box-shadow: var(--shadow-lg);
    }
    .contact-item {
      display: flex;
      gap: var(--space-5);
      align-items: flex-start;
      padding: var(--space-4) 0;
    }
    .contact-item + .contact-item {
      border-top: 1px solid var(--color-border-light, rgba(0,0,0,0.06));
    }
    .contact-icon {
      width: 56px;
      height: 56px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(var(--color-primary-rgb), 0.08);
      border-radius: var(--radius-xl);
      color: var(--color-primary);
    }
    .contact-item__label {
      display: block;
      font-size: var(--fs-body);
      font-weight: var(--fw-semibold);
      color: var(--color-text);
      margin-bottom: 6px;
    }
    .contact-item__text {
      font-size: var(--fs-body);
      color: var(--color-text-secondary);
      line-height: 1.65;
      margin: 0;
    }
    .contact-item__link {
      font-size: var(--fs-body);
      color: var(--color-primary);
      text-decoration: none;
      font-weight: var(--fw-medium);
      transition: color 0.2s;
    }
    .contact-item__link:hover {
      color: var(--color-primary-dark);
    }
    .form-heading-tag {
      display: flex;
      align-items: center;
      gap: var(--space-3);
      margin-bottom: var(--space-3);
    }
    .form-heading-tag__line {
      width: 36px;
      height: 2px;
      background: var(--color-primary);
      border-radius: var(--radius-full);
    }
    .form-heading-tag__text {
      font-size: var(--fs-small);
      font-weight: var(--fw-semibold);
      color: var(--color-primary);
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: var(--space-5);
    }
    .form-field label {
      display: block;
      font-size: var(--fs-body);
      font-weight: var(--fw-medium);
      color: var(--color-text);
      margin-bottom: var(--space-2);
    }
    .form-field input,
    .form-field select,
    .form-field textarea {
      width: 100%;
      padding: var(--space-4) var(--space-5);
      background: var(--color-surface-alt);
      border: 1px solid var(--color-border);
      border-radius: var(--radius-lg);
      font-size: var(--fs-body);
      color: var(--color-text);
      transition: all 0.2s ease;
      font-family: inherit;
    }
    .form-field input::placeholder,
    .form-field textarea::placeholder {
      color: var(--color-text-muted, #999);
    }
    .form-field input:focus,
    .form-field select:focus,
    .form-field textarea:focus {
      outline: none;
      border-color: var(--color-primary);
      box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.12);
      background: var(--color-surface);
    }
    .form-field textarea {
      min-height: 140px;
      resize: vertical;
    }
    .btn-send {
      width: 100%;
      padding: var(--space-5) var(--space-8);
      background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark, #0D47A1) 100%);
      color: #fff;
      border: none;
      border-radius: var(--radius-xl);
      font-size: var(--fs-body);
      font-weight: var(--fw-semibold);
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(var(--color-primary-rgb), 0.3);
      font-family: inherit;
      letter-spacing: 0.02em;
    }
    .btn-send:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(var(--color-primary-rgb), 0.4);
    }
    @media (max-width: 968px) {
      .contact-grid {
        grid-template-columns: 1fr;
      }
      .form-row {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Contact Banner -->
    <section class="contact-banner">
      <div class="container contact-banner__content">
        <nav class="contact-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="contact-banner__breadcrumb-link">Home</a>
          <span class="contact-banner__breadcrumb-sep">&#9656;</span>
          <span class="contact-banner__breadcrumb-current">CONTACT</span>
        </nav>
        <span class="contact-banner__label">GET IN TOUCH</span>
        <h1 class="contact-banner__title">Let's start a <span class="contact-banner__title-gradient">conversation.</span></h1>
        <p class="contact-banner__desc">Drop us a line and we'll be in touch as soon as possible. Our team is ready to assist you on your journey to success.</p>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
      <div class="container">
        <div class="contact-grid">

          <!-- Address Side Card -->
          <div class="contact-card">
            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Address</strong>
                <p class="contact-item__text">353, Shivaji Road, Meerut, Uttar Pradesh-250001</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Our Phone</strong>
                <p class="contact-item__text">
                  +91 9410666599<br>
                  +91 7906752047
                </p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Got a Question?</strong>
                <p class="contact-item__text" style="margin-bottom:6px;">Drop us an email and we'll be in touch asap.</p>
                <a href="mailto:partners@riskevite.com" class="contact-item__link">partners@riskevite.com</a>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Open Hours</strong>
                <p class="contact-item__text">Everyday, 9 AM &ndash; 5 PM</p>
              </div>
            </div>
          </div>

          <!-- Contact Form Side -->
          <div class="contact-card">
            <div class="form-heading-tag">
              <span class="form-heading-tag__line"></span>
              <span class="form-heading-tag__text">LET'S CONNECT</span>
            </div>
            <h2 style="font-size: clamp(1.75rem, 3vw, 2.25rem); font-weight: var(--fw-bold); margin-bottom: var(--space-8); color: var(--color-text); line-height: 1.2;">Send us a message</h2>

            <form id="contactForm" style="display:flex; flex-direction:column; gap: var(--space-5);">
              <!-- Row 1: Name + Email -->
              <div class="form-row">
                <div class="form-field">
                  <label for="contactName">Full Name *</label>
                  <input type="text" id="contactName" name="name" placeholder="Your name" required>
                </div>
                <div class="form-field">
                  <label for="contactEmail">Email Address *</label>
                  <input type="email" id="contactEmail" name="email" placeholder="you@company.com" required>
                </div>
              </div>

              <!-- Row 2: Phone + Interest -->
              <div class="form-row">
                <div class="form-field">
                  <label for="contactPhone">Phone</label>
                  <input type="tel" id="contactPhone" name="phone" placeholder="+91 ...">
                </div>
                <div class="form-field">
                  <label for="contactInterest">I'm interested in</label>
                  <select id="contactInterest" name="interest">
                    <option value="general">General inquiry</option>
                    <option value="product">Product information</option>
                    <option value="partnership">Partnership opportunity</option>
                    <option value="support">Customer support</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>

              <!-- Row 3: Message -->
              <div class="form-field">
                <label for="contactMessage">Your Message *</label>
                <textarea id="contactMessage" name="message" rows="5" placeholder="Tell us a little about your organization and what you need..."></textarea>
              </div>

              <!-- Submit Button -->
              <div>
                <button type="submit" class="btn-send">
                  Send Message
                </button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section style="padding:var(--space-10) 0 var(--space-12);">
      <div class="container">
        <div style="width:100%; height:450px; border-radius:var(--radius-2xl); overflow:hidden; border:1px solid var(--color-border); box-shadow:var(--shadow-md);">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7107!3d28.9845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974b6a0b0b0b0b0%3A0x0b0b0b0b0b0b0b0b!2sShivaji+Road%2C+Meerut%2C+Uttar+Pradesh+250001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
            width="100%"
            height="100%"
            style="border:0;"
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
