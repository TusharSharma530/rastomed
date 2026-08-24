<?php
/**
 * Contact Page - PharmaCorp Enterprise
 * Premium interactive enterprise contact experience
 */
require_once __DIR__ . '/includes/components.php';

$contactInfo = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'label' => 'Global Headquarters',
        'value' => '123 Pharma Avenue, Science Park, Mumbai, Maharashtra 400001, India',
        'sub' => 'WHO-GMP & ISO 9001:2015 Registered Facility',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'label' => 'Direct Sales & Hotline',
        'value' => '+91 22 1234 5678',
        'sub' => 'Mon - Fri, 9:00 AM - 6:00 PM IST',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'label' => 'Official Communications',
        'value' => 'info@pharmacorp.com',
        'sub' => 'Guaranteed response within 24 business hours',
    ],
];

$offices = [
    [
        'city' => 'Mumbai, India',
        'type' => 'Global HQ & Regulatory Affairs',
        'address' => '123 Pharma Avenue, Science Park, Mumbai 400001',
        'phone' => '+91 22 1234 5678',
    ],
    [
        'city' => 'Pune, India',
        'type' => 'R&D & Formulation Facility',
        'address' => 'Biotech Innovation Campus, MIDC Phase II, Pune 411057',
        'phone' => '+91 20 9876 5432',
    ],
    [
        'city' => 'Dubai, UAE',
        'type' => 'Middle East & Africa Liaison',
        'address' => 'Dubai Healthcare City, Building 45, Dubai, UAE',
        'phone' => '+971 4 123 4567',
    ],
];

$subjects = [
    'Business Partnership & Distribution',
    'Contract Manufacturing (CDMO)',
    'Product Specification Request',
    'Career & Talent Acquisition',
    'Quality & Regulatory Dossiers',
    'Media & Press Inquiries',
    'General Inquiry',
];

$faqs = [
    ['q' => 'How quickly will your team respond to partnership inquiries?', 'a' => 'Our dedicated International Business Development team evaluates and responds to all business partnership and contract manufacturing inquiries within 24 business hours.'],
    ['q' => 'What international manufacturing quality certifications does PharmaCorp hold?', 'a' => 'PharmaCorp operating plants are WHO-GMP certified, ISO 9001:2015 accredited, and comply with EU-GMP and US FDA CTD dossier filing specifications.'],
    ['q' => 'Do you provide PCD Pharma Franchise and CDMO contract manufacturing?', 'a' => 'Yes. We offer turnkey CDMO contract manufacturing, technology transfer, bioequivalence studies, and exclusive regional PCD pharma distribution rights.'],
    ['q' => 'Where can I access technical product data sheets and regulatory dossiers?', 'a' => 'Registered healthcare professionals and trade distributors can request detailed COA (Certificate of Analysis), MSDS, and dossier summaries directly via this contact form.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact PharmaCorp Enterprise - Get in touch with our global pharmaceutical sales, R&amp;D, and CDMO manufacturing team.">
  <title>Contact Us - PharmaCorp Enterprise</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Connect With PharmaCorp', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Contact Us', 'url' => 'contact.php'],
    ], 'Whether seeking contract manufacturing, bulk export partnerships, or product inquiries, our global enterprise team is ready to assist you.') ?>

    <!-- ========== CONTACT FORM & SIDEBAR ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1.3fr 1fr; gap:clamp(2rem, 5vw, 4rem); align-items:start;" class="contact-grid">

          <!-- Contact Form -->
          <div class="reveal reveal--left">
            <span class="section-label">Enterprise Inquiry</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-2);">Start a Conversation</h2>
            <p style="color:var(--color-text-secondary); margin-bottom:var(--space-8); line-height:var(--lh-relaxed);">Fill out the secure form below to connect directly with our corporate development and technical support department.</p>

            <!-- Success Notification -->
            <div id="formSuccess" class="form-success" style="display:none; background:rgba(16, 185, 129, 0.1); border:1px solid #10b981; border-radius:var(--radius-xl); padding:var(--space-6); margin-bottom:var(--space-6);">
              <div style="display:flex; align-items:center; gap:var(--space-3); color:#10b981; font-weight:bold; font-size:var(--fs-h4);">
                <span>&#10003;</span> Inquiry Received Successfully
              </div>
              <p style="margin-top:var(--space-2); color:var(--color-text-secondary); font-size:var(--fs-small);">Thank you for contacting PharmaCorp. Your inquiry reference has been generated and routed to our specialist team.</p>
            </div>

            <!-- Form -->
            <form id="contactForm" style="display:flex; flex-direction:column; gap:var(--space-5);">
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:var(--space-5);">
                <div class="form-group">
                  <label class="form-label" for="contactName">Full Name *</label>
                  <input type="text" id="contactName" name="name" class="form-input" placeholder="e.g. Dr. Alexander Wright" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="contactEmail">Work Email Address *</label>
                  <input type="email" id="contactEmail" name="email" class="form-input" placeholder="name@company.com" required>
                </div>
              </div>

              <div style="display:grid; grid-template-columns:1fr 1fr; gap:var(--space-5);">
                <div class="form-group">
                  <label class="form-label" for="contactPhone">Phone Number *</label>
                  <input type="tel" id="contactPhone" name="phone" class="form-input" placeholder="+91 98765 43210" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="contactSubject">Inquiry Category *</label>
                  <select id="contactSubject" name="subject" class="form-input" required>
                    <option value="">Select an inquiry category</option>
                    <?php foreach ($subjects as $subject): ?>
                      <option value="<?= htmlspecialchars($subject) ?>"><?= htmlspecialchars($subject) ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label" for="contactMessage">Message / Project Requirements *</label>
                <textarea id="contactMessage" name="message" class="form-input" rows="5" placeholder="Specify formulation requirements, target markets, or business partnership details..." required></textarea>
              </div>

              <div>
                <button type="submit" class="btn btn--primary btn--lg" style="min-width:200px;">
                  Submit Enterprise Inquiry &rarr;
                </button>
                <p style="font-size:var(--fs-xs); color:var(--color-text-muted); margin-top:var(--space-3);">
                  🔒 Your data is protected under our strict Privacy Policy. No spam guaranteed.
                </p>
              </div>
            </form>
          </div>

          <!-- Contact Info Sidebar & Map -->
          <div class="reveal reveal--right" style="display:flex; flex-direction:column; gap:var(--space-6);">
            <!-- Contact Details Card -->
            <div style="background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-2xl); padding:var(--space-8); box-shadow:var(--shadow-md);">
              <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-4);">&#9673; Operational Status: Active</span>
              <h3 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-6);">Corporate Headquarters</h3>

              <div style="display:flex; flex-direction:column; gap:var(--space-6);">
                <?php foreach ($contactInfo as $info): ?>
                  <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                    <div style="width:44px; height:44px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(13, 110, 253, 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                      <?= $info['icon'] ?>
                    </div>
                    <div>
                      <strong style="color:var(--color-text); display:block; margin-bottom:2px; font-size:var(--fs-body); font-weight:bold;"><?= $info['label'] ?></strong>
                      <p style="font-size:var(--fs-small); color:var(--color-text-secondary); line-height:1.4; margin-bottom:2px;"><?= $info['value'] ?></p>
                      <span style="font-size:var(--fs-xs); color:var(--color-primary); font-weight:600;"><?= $info['sub'] ?></span>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Interactive Map Card -->
            <div style="background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-2xl); overflow:hidden; box-shadow:var(--shadow-md);">
              <div style="padding:var(--space-4) var(--space-6); background:var(--color-surface-alt); border-bottom:1px solid var(--color-border); display:flex; justify-content:space-between; align-items:center;">
                <span style="font-size:var(--fs-small); font-weight:bold; color:var(--color-text);">📍 Live Location Map</span>
                <span style="font-size:var(--fs-xs); color:var(--color-text-muted);">Mumbai Science Park</span>
              </div>
              <div style="height:260px; width:100%;">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8256193798!2d72.8776559!3d19.0759837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
                  width="100%"
                  height="100%"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  title="PharmaCorp HQ Map">
                </iframe>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== GLOBAL OFFICES GRID ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Global Presence</span>
          <h2 class="section__title">Our Regional Hubs</h2>
        </div>
        <div class="rd-grid">
          <?php foreach ($offices as $office): ?>
            <div class="rd-card reveal">
              <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-3);"><?= htmlspecialchars($office['type']) ?></span>
              <h3 class="rd-card__title"><?= htmlspecialchars($office['city']) ?></h3>
              <p class="rd-card__text" style="margin-bottom:var(--space-4);"><?= htmlspecialchars($office['address']) ?></p>
              <p style="font-size:var(--fs-small); font-weight:bold; color:var(--color-primary);">📞 <?= htmlspecialchars($office['phone']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FAQ SECTION ========== -->
    <section id="faq" class="section">
      <div class="container">
        <?= renderSectionHeader('FAQ &amp; Support', 'Frequently Asked Questions', 'Quick answers to common enterprise and commercial queries.') ?>

        <div class="accordion reveal" style="max-width:900px; margin:0 auto;">
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="accordion__item <?= $index === 0 ? 'accordion__item--active' : '' ?>">
              <button class="accordion__trigger" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
                <span class="accordion__trigger-text"><?= htmlspecialchars($faq['q']) ?></span>
                <span class="accordion__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                  </svg>
                </span>
              </button>
              <div class="accordion__content" style="<?= $index === 0 ? 'max-height:500px;' : '' ?>">
                <div class="accordion__content-inner">
                  <?= htmlspecialchars($faq['a']) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/header.php'; ?>
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
