<?php

require_once __DIR__ . '/includes/components.php';

$currentPage = 'contact';
?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$contactRow = null;
$contactBanner = null;
if (isset($con)) {
    $contactResult = mysqli_query($con, "SELECT * FROM category WHERE id = 72 AND status = 1");
    if ($contactResult && mysqli_num_rows($contactResult)) {
        $contactRow = mysqli_fetch_assoc($contactResult);
    }
    $bannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 72 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
    if ($bannerResult && mysqli_num_rows($bannerResult)) {
        $contactBanner = mysqli_fetch_assoc($bannerResult);
    }
}

// Default values
$websitename =$websitename ;
$address =$address ;
$contactno =$contactno ;
$alternateno =$alternateno ;
$emailid =$emailid ;

// Fetch settings from database if connection exists
if (isset($con)) {
    $res = mysqli_query($con, "SELECT * FROM `settings` WHERE id = 1 LIMIT 1");
    if ($res && mysqli_num_rows($res) > 0) {
        $rw = mysqli_fetch_assoc($res);
        if (!empty($rw['address'])) { $address =$rw['address']; }
        if (!empty($rw['contact_no'])) { $contactno =$rw['contact_no']; }
        if (!empty($rw['alternate_no'])) { $alternateno =$rw['alternate_no']; }
        if (!empty($rw['email_id'])) { $emailid =$rw['email_id']; }
    }
}
?>

  <main>
    <!-- Contact Banner -->
    <section class="contact-hero-banner">
      <?php if(!empty($contactBanner['wb_video'])): ?>
      <video class="contact-hero-bg-img" autoplay muted loop playsinline>
        <source src="<?= $path . $contactBanner['wb_video'] ?>">
      </video>
      <?php elseif(!empty($contactBanner['wb_img'])): ?>
      <img src="<?= $path . $contactBanner['wb_img'] ?>" alt="<?= htmlspecialchars($contactRow['c_name'] ?? 'Contact Us') ?>" class="contact-hero-bg-img">
      <?php elseif(!empty($contactRow['featured_img'])): ?>
      <img src="<?= $path . $contactRow['featured_img'] ?>" alt="<?= htmlspecialchars($contactRow['c_name']) ?>" class="contact-hero-bg-img">
      <?php else: ?>
      <img src="assets/images/contact-hero.jpg" alt="Contact Us" class="contact-hero-bg-img">
      <?php endif; ?>
      <div class="contact-hero-center">
        <h1 class="contact-hero-h1"><?= htmlspecialchars($contactRow['c_name'] ?? 'Contact Us') ?></h1>
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
                <p class="contact-item__text"><?= nl2br(htmlspecialchars($address)) ?></p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Our Phone</strong>
                <p class="contact-item__text">
                  <?php if(!empty($contactno)): ?>
                    <a href="tel:+91<?= htmlspecialchars($contactno) ?>">+91 <?= htmlspecialchars($contactno) ?></a>
                  <?php endif; ?>
                  <?php if(!empty($alternateno)): ?>
                    <br><a href="tel:+91<?= htmlspecialchars($alternateno) ?>">+91 <?= htmlspecialchars($alternateno) ?></a>
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
                <a href="mailto:<?= htmlspecialchars($emailid) ?>" class="contact-item__link"><?= htmlspecialchars($emailid) ?></a>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <strong class="contact-item__label">Open Hours</strong>
                <p class="contact-item__text">Monday - Saturday, 9 AM &ndash; 6 PM</p>
              </div>
            </div>
          </div>

          <!-- Contact Form Side -->
          <div class="contact-card">
            <div class="form-heading-tag">
              <span class="form-heading-tag__line"></span>
              <span class="form-heading-tag__text">LET'S CONNECT</span>
            </div>
            <h2 class="contact-msg-heading">Send us a message</h2>

            <form id="contactForm" class="contact-form-col">
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
                  <label for="contactPhone">Phone *</label>
                  <input type="tel" id="contactPhone" name="phone" placeholder="+91 <?= htmlspecialchars($contactno) ?>" required>
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
                <textarea id="contactMessage" name="message" rows="5" placeholder="Please share your requirements, enquiry, or how we can assist you…"></textarea>
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
    <section class="map-section-wrap">
      <div class="container">
        <div class="map-container-box">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5!2d77.7107!3d28.9845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974b6a0b0b0b0b0%3A0x0b0b0b0b0b0b0b0b!2sShivaji+Road%2C+Meerut%2C+Uttar+Pradesh+250001!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
            width="100%"
            height="100%"
            class="map-iframe-no-border"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="<?= htmlspecialchars($websitename) ?> Location">
          </iframe>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
