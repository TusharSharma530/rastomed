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
        <div class="contact-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 4rem); align-items:start;">

          <!-- Address Side -->
          <div>
            <h2 style="font-size:var(--fs-h2); font-weight:bold; margin-bottom:var(--space-3);">Address</h2>
            <p style="color:var(--color-text-secondary); margin-bottom:var(--space-8); line-height:var(--lh-relaxed);">You can reach us via Call, Mail or Direct Visit.</p>

            <div style="display:flex; flex-direction:column; gap:var(--space-6);">
              <!-- Registered Address -->
              <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                <div style="width:48px; height:48px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(21, 101, 192, 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <strong style="color:var(--color-text); display:block; margin-bottom:4px; font-size:var(--fs-body); font-weight:bold;">Registered Address</strong>
                  <p style="font-size:var(--fs-body); color:var(--color-text-secondary); line-height:1.5; margin:0;">Shed No. 67, 1st Floor, DSIDC Complex, K.M. Pur, New Delhi-110003</p>
                </div>
              </div>

              <!-- Corporate Address -->
              <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                <div style="width:48px; height:48px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(21, 101, 192, 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                  <strong style="color:var(--color-text); display:block; margin-bottom:4px; font-size:var(--fs-body); font-weight:bold;">Corporate Address</strong>
                  <p style="font-size:var(--fs-body); color:var(--color-text-secondary); line-height:1.5; margin:0;">Plot no 3, Opp. Central Bank of India, Sagar Road, Raisen MP. 464551.</p>
                </div>
              </div>

              <!-- Email -->
              <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                <div style="width:48px; height:48px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(21, 101, 192, 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <div>
                  <p style="font-size:var(--fs-body); color:var(--color-text-secondary); line-height:1.8; margin:0;">
                    info@jannockspharma.in<br>
                    jannockspharma@gmail.com
                  </p>
                </div>
              </div>

              <!-- Phone -->
              <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                <div style="width:48px; height:48px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(21, 101, 192, 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                  <p style="font-size:var(--fs-body); color:var(--color-text-secondary); line-height:1.8; margin:0;">
                    +91 88003 36704<br>
                    +91 99906 85530
                  </p>
                </div>
              </div>
            </div>

            <!-- Social Icons -->
            <div style="display:flex; gap:var(--space-3); margin-top:var(--space-8);">
              <a href="#" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center; background:var(--color-primary); color:#fff; border-radius:var(--radius-md); transition:all 0.3s;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
              </a>
              <a href="#" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center; background:#1a1a2e; color:#fff; border-radius:var(--radius-md); transition:all 0.3s;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
              </a>
            </div>
          </div>

          <!-- Contact Form Side -->
          <div style="background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-2xl); padding:var(--space-8); box-shadow:var(--shadow-md);">
            <h2 style="font-size:var(--fs-h2); font-weight:bold; margin-bottom:var(--space-3);">Contact Us</h2>
            <p style="color:var(--color-text-secondary); margin-bottom:var(--space-8); line-height:var(--lh-relaxed);">Please fill the form and we will get back to you soon.</p>

            <form id="contactForm" style="display:flex; flex-direction:column; gap:var(--space-5);">
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
                <button type="submit" class="btn btn--primary btn--lg" style="min-width:160px; display:inline-flex; align-items:center; gap:var(--space-2);">
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
    <section style="padding:0 0 var(--space-12);">
      <div class="container">
        <div style="width:100%; height:450px; border-radius:var(--radius-2xl); overflow:hidden; border:1px solid var(--color-border); box-shadow:var(--shadow-md);">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.2419!3d28.5714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d5a0b0b0b0b%3A0x0b0b0b0b0b0b0b0b!2sDSIDC%20Complex%2C%20Kotla%20Mubarakpur%2C%20New%20Delhi%2C%20Delhi%20110003!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Jannocks Pharma Pvt Ltd Location">
          </iframe>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
