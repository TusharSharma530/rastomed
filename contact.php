<?php
require_once __DIR__ . '/manager/database/db.php';

$currentPage = 'contact';

// ===== contact category (id = 72) + banner =====
$contactRow = fetch_one_row($con, "SELECT * FROM category WHERE id = 72 AND status = 1");
$contactBanner = fetch_one_row($con, "SELECT * FROM web_banner WHERE category_id = 72 AND status = 1 ORDER BY wb_order ASC LIMIT 1");

// ===== settings: map + hours (db.php already loaded address/phone/email/name) =====
$settingsRow = fetch_one_row($con, "SELECT * FROM settings WHERE id = 1");
$openingHour = trim((string) ($settingsRow['opening_hour'] ?? ''));
$contactMapIframe = trim((string) ($settingsRow['map_iframe'] ?? ''));

// ===== hero media: video > banner img > category img =====
$heroVideo = (string) ($contactBanner['wb_video'] ?? '');
$heroImg = (string) ($contactBanner['wb_img'] ?? '');
if ($heroVideo === '' && $heroImg === '') {
	$heroImg = (string) ($contactRow['featured_img'] ?? '');
}

// ===== escaped vars =====
$eContactName  = htmlspecialchars((string) ($contactRow['c_name'] ?? 'Contact Us'), ENT_QUOTES, 'UTF-8');
$eHeroVideo    = htmlspecialchars($heroVideo, ENT_QUOTES, 'UTF-8');
$eHeroImg      = htmlspecialchars($heroImg, ENT_QUOTES, 'UTF-8');
$eAddress      = nl2br(htmlspecialchars((string) ($address ?? ''), ENT_QUOTES, 'UTF-8'));
$eContactNo    = htmlspecialchars((string) ($contactno ?? ''), ENT_QUOTES, 'UTF-8');
$eAltNo        = htmlspecialchars((string) ($alternateno ?? ''), ENT_QUOTES, 'UTF-8');
$eEmail        = htmlspecialchars((string) ($emailid ?? ''), ENT_QUOTES, 'UTF-8');
$eOpeningHour  = htmlspecialchars($openingHour, ENT_QUOTES, 'UTF-8');
$eMapIframe    = htmlspecialchars($contactMapIframe, ENT_QUOTES, 'UTF-8');
$eWebName      = htmlspecialchars((string) ($websitename ?? ''), ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="contact-hero-banner">
      <?php if ($eHeroVideo !== ''): ?>
      <video class="contact-hero-bg-img" autoplay muted loop playsinline>
        <source src="<?= $path . $eHeroVideo ?>">
      </video>
      <?php elseif ($eHeroImg !== ''): ?>
      <img src="<?= $path . $eHeroImg ?>" alt="<?= $eContactName ?>" class="contact-hero-bg-img">
      <?php endif; ?>
      <div class="contact-hero-center">
        <h1 class="contact-hero-h1"><?= $eContactName ?></h1>
      </div>
    </section>

    <section class="contact-section">
      <div class="container">
        <div class="contact-grid">

          <div class="contact-card">
            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Address</strong>
                <p class="contact-item__text"><?= $eAddress ?></p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Our Phone</strong>
                <p class="contact-item__text">
                  <?php if (!empty($contactno)): ?>
                    <a href="tel:+91<?= $eContactNo ?>">+91 <?= $eContactNo ?></a>
                  <?php endif; ?>
                  <?php if (!empty($alternateno)): ?>
                    <br><a href="tel:+91<?= $eAltNo ?>">+91 <?= $eAltNo ?></a>
                  <?php endif; ?>
                </p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Got a Question?</strong>
                <p class="contact-item__text contact-item-margin">Drop us an email and we'll be in touch asap.</p>
                <a href="mailto:<?= $eEmail ?>" class="contact-item__link"><?= $eEmail ?></a>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Open Hours</strong>
                <p class="contact-item__text"><?= $eOpeningHour ?></p>
              </div>
            </div>
          </div>

          <div class="contact-card">
            <div class="form-heading-tag">
              <span class="form-heading-tag__line"></span>
              <span class="form-heading-tag__text">LET'S CONNECT</span>
            </div>
            <h2 class="contact-msg-heading">Send us a message</h2>

            <form id="contactForm" class="contact-form-col">
              <input type="hidden" name="enquiry_type" value="Contact Form">

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

              <div class="form-row">
                <div class="form-field">
                  <label for="contactPhone">Phone *</label>
                  <input type="tel" id="contactPhone" name="phone" placeholder="+91 <?= $eContactNo ?>" required>
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

              <div class="form-field">
                <label for="contactMessage">Your Message *</label>
                <textarea id="contactMessage" name="message" rows="5" placeholder="Please share your requirements, enquiry, or how we can assist you…" required></textarea>
              </div>

              <?= rastomed_recaptcha_widget('contactRecaptcha') ?>

              <div>
                <button type="submit" class="btn-send">
                  Send Message
                </button>
              </div>
            </form>
            <div id="formSuccess" class="enquiry-modal__success" style="display:none;">
              <div class="enquiry-modal__success-icon">&#10003;</div>
              <h3>Thank You!</h3>
              <p>Your message has been submitted. Our team will contact you shortly.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="map-section-wrap">
      <div class="container">
        <div class="map-container-box">
          <?php if ($contactMapIframe !== ''): ?>
          <iframe
            src="<?= $eMapIframe ?>"
            width="100%"
            height="100%"
            class="map-iframe-no-border"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?= $eWebName ?> Location">
          </iframe>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
