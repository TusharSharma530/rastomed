<?php
/**
 * Contact Page - PharmaCorp
 * Premium contact experience with demo-only form
 * NO email, NO backend, NO server-side processing
 */
require_once __DIR__ . '/includes/components.php';

$contactInfo = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'label' => 'Corporate Office',
        'value' => '123 Pharma Avenue, Science Park, Mumbai, Maharashtra 400001, India',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'label' => 'Phone',
        'value' => '+91 22 1234 5678',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'label' => 'Email',
        'value' => 'info@pharmacorp.com',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'label' => 'Business Hours',
        'value' => 'Mon - Fri: 9:00 AM - 6:00 PM | Sat: 9:00 AM - 1:00 PM',
    ],
];

$subjects = [
    'General Inquiry',
    'Product Information',
    'Business Partnership',
    'Career Opportunities',
    'Technical Support',
    'Media Inquiry',
    'Other',
];

$faqs = [
    ['q' => 'How can I learn more about your products?', 'a' => 'You can explore our complete product portfolio on the Products page, or contact our team directly for detailed product information and samples.'],
    ['q' => 'Where can I contact the company?', 'a' => 'You can reach us through this contact form, by phone at +91 22 1234 5678, or by email at info@pharmacorp.com. Our corporate office is located in Mumbai, India.'],
    ['q' => 'How can I explore career opportunities?', 'a' => 'Visit our Careers page to view current openings. You can also send your resume through the contact form, and we will keep you in mind for future opportunities.'],
    ['q' => 'How can I submit a business enquiry?', 'a' => 'Use the contact form below and select "Business Partnership" as the subject. Our business development team will get back to you within 2 business days.'],
    ['q' => 'Do you offer contract manufacturing services?', 'a' => 'Yes, we provide comprehensive contract manufacturing services. Please contact us with your requirements and our team will discuss how we can support your needs.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contact PharmaCorp - Get in touch with our team for inquiries, partnerships, and support.">
  <title>Contact Us - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Contact Us', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Contact', 'url' => 'contact.php'],
    ], 'Get in touch with our team for inquiries, partnerships, and support.') ?>

    <!-- ========== CONTACT FORM & INFO ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1.3fr 1fr; gap:clamp(2rem, 5vw, 4rem); align-items:start;" class="contact-grid">

          <!-- Contact Form -->
          <div class="reveal reveal--left">
            <span class="section-label">Send a Message</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-2);">Were Here to Help</h2>
            <p style="color:var(--color-text-muted); margin-bottom:var(--space-8);">Fill out the form below and our team will respond within 24 hours.</p>

            <!-- Success Message (hidden by default) -->
            <div id="formSuccess" class="form-success" style="display:none;">
              <div class="form-success__icon">&#10003;</div>
              <h3 class="form-success__title">Thank You!</h3>
              <p class="form-success__text">Your enquiry has been submitted successfully. Our team will get back to you within 24 hours.</p>
            </div>

            <!-- Form (DEMO ONLY - NO EMAIL SENT) -->
            <form id="contactForm" style="display:flex; flex-direction:column; gap:var(--space-5);">
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:var(--space-5);">
                <div class="form-group">
                  <label class="form-label" for="contactName">Full Name *</label>
                  <input type="text" id="contactName" name="name" class="form-input" placeholder="Your full name" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="contactEmail">Email Address *</label>
                  <input type="email" id="contactEmail" name="email" class="form-input" placeholder="your@email.com" required>
                </div>
              </div>
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:var(--space-5);">
                <div class="form-group">
                  <label class="form-label" for="contactPhone">Phone Number</label>
                  <input type="tel" id="contactPhone" name="phone" class="form-input" placeholder="+91 98765 43210">
                </div>
                <div class="form-group">
                  <label class="form-label" for="contactSubject">Subject *</label>
                  <select id="contactSubject" name="subject" class="form-input" required>
                    <option value="">Select a subject</option>
                    <?php foreach ($subjects as $subject): ?>
                      <option value="<?= $subject ?>"><?= $subject ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label" for="contactMessage">Message *</label>
                <textarea id="contactMessage" name="message" class="form-input" rows="6" placeholder="Tell us how we can help..." required></textarea>
              </div>
              <div>
                <?= renderButton('Send Message', '', 'primary', 'lg') ?>
                <p style="font-size:var(--fs-xs); color:var(--color-text-muted); margin-top:var(--space-2);">This is a demo form. No email will be sent.</p>
              </div>
            </form>
          </div>

          <!-- Contact Info Sidebar -->
          <div class="reveal reveal--right">
            <div style="background:var(--color-surface-alt); border-radius:var(--radius-2xl); padding:clamp(1.5rem, 3vw, 2.5rem); margin-bottom:var(--space-6);">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-6);">Contact Information</h3>

              <div style="display:flex; flex-direction:column; gap:var(--space-5);">
                <?php foreach ($contactInfo as $info): ?>
                  <div style="display:flex; gap:var(--space-4); align-items:flex-start;">
                    <div style="width:44px; height:44px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-primary-rgb), 0.1); border-radius:var(--radius-lg); color:var(--color-primary);">
                      <?= $info['icon'] ?>
                    </div>
                    <div>
                      <strong style="color:var(--color-text); display:block; margin-bottom:2px; font-size:var(--fs-small);"><?= $info['label'] ?></strong>
                      <p style="font-size:var(--fs-small); color:var(--color-text-muted); line-height:1.5;"><?= $info['value'] ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Map Placeholder -->
            <div style="background:var(--color-surface-alt); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); aspect-ratio:16/10; display:flex; align-items:center; justify-content:center;">
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Map Placeholder</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ SECTION ========== -->
    <section id="faq" class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('FAQ', 'Frequently Asked Questions', 'Quick answers to common questions about PharmaCorp.') ?>

        <div class="accordion reveal">
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="accordion__item <?= $index === 0 ? 'accordion__item--active' : '' ?>">
              <button class="accordion__trigger" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
                <span class="accordion__trigger-text"><?= $faq['q'] ?></span>
                <span class="accordion__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"/>
                  </svg>
                </span>
              </button>
              <div class="accordion__content" style="<?= $index === 0 ? 'max-height:500px;' : '' ?>">
                <div class="accordion__content-inner">
                  <?= $faq['a'] ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Need More Help?',
          'Our team is always ready to assist you. Reach out to us for any queries or support.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
