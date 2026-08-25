<?php
/**
 * About Page - PharmaCorp
 * Enhanced with Company Overview, Mission, Vision, Values, Milestones, Leadership
 */
require_once __DIR__ . '/includes/components.php';

$values = [
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 7h7l-5.5 4.5 2 7L12 16l-6.5 4.5 2-7L2 9h7z"/></svg>',
        'title' => 'Passion For Excellence',
        'description' => 'We tenaciously chase excellence through continuous improvement in all our processes and products and to set our standards, we benchmark with the best in the world.',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'title' => 'Integrity',
        'description' => 'We believe in uncompromising integrity and honesty and insist on the highest human values from our employees in all endeavours.',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/><circle cx="19" cy="7" r="4"/></svg>',
        'title' => 'Teamwork',
        'description' => 'We align efforts and energies of our people across all levels to deliver outstanding results. We encourage diverse opinions and yet work together in supportive way.',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>',
        'title' => 'Entrepreneurial Spirit',
        'description' => 'We motivate our employees to foster new ideas, explore avenues and offer solutions that add exceptional value.',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><path d="M11 8a3 3 0 0 0-3 3"/></svg>',
        'title' => 'Customer Focus',
        'description' => 'We believe in understanding and meeting customer needs in a professional and responsive manner. We focus on building and nurturing long term partnerships.',
    ],
    [
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15l-2 5l9-13h-5l2-5l-9 13h5z"/></svg>',
        'title' => 'Robust Quality Standards',
        'description' => 'We prioritize stringent quality assurance measures to ensure that our products meet and exceed industry standards.',
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Learn about RastoMed Pharma Private Limited - our history, leadership, vision, and mission to advance healthcare.">
  <title>About Us - RastoMed Pharma Private Limited</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- About Us Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">About Us</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">About Us</span>
        </nav>
      </div>
    </section>

    <!-- ========== COMPANY OVERVIEW ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">Our Story</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">A Legacy of Healthcare Excellence</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Founded with a vision to make quality healthcare accessible, PharmaCorp has grown from a small pharmaceutical venture into a globally recognized healthcare company serving patients across multiple continents.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Over the past 25 years, we have built our reputation on scientific rigor, manufacturing excellence, and an unwavering commitment to patient safety. Our journey is marked by continuous innovation and expansion into new therapeutic areas.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              Today, we serve patients in over 50 countries, with a portfolio spanning cardiovascular, respiratory, neurology, and many other therapeutic segments. Our team of dedicated professionals works tirelessly to ensure that quality medicines reach those who need them most.
            </p>
            <div style="display:flex; gap:var(--space-4); flex-wrap:wrap;">
              <?= renderButton('Our Products', 'products.php', 'primary') ?>
              <?= renderButton('Contact Us', 'contact.php', 'outline') ?>
            </div>
          </div>
          <div class="reveal reveal--right" style="position:relative;">
            <div style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
              <div style="text-align:center; padding:var(--space-8);">
                <img src="assets/images/rastomed.jpeg" alt="RastoMed Pharma" style="max-width:100%; max-height:220px; object-fit:contain; border-radius:var(--radius-lg);">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== MISSION & VISION ========== -->
    <section class="section section--alt">
      <div class="container">
        <h2 class="mv-section__title">Mission &amp; Vision</h2>

        <div class="mv-cards reveal">
          <div class="mv-card">
            <div class="mv-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
            </div>
            <div class="mv-card__content">
              <h3 class="mv-card__title">Our Mission</h3>
              <p class="mv-card__text">Our mission is to provide excellent quality products to our customers, improve the lives of patients by providing latest and advanced treatments. Customer Satisfaction with quality and service is our main motto.</p>
            </div>
            <div class="mv-card__corner mv-card__corner--left"></div>
            <div class="mv-card__corner mv-card__corner--right"></div>
          </div>

          <div class="mv-card">
            <div class="mv-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
            </div>
            <div class="mv-card__content">
              <h3 class="mv-card__title">Our Vision</h3>
              <p class="mv-card__text">Our vision is to be the India's One Of The Best &amp; Leading Pharmaceutical Company, being the best in terms of products, values, service, employee talent and consistent and predictable growth.</p>
            </div>
            <div class="mv-card__corner mv-card__corner--left"></div>
            <div class="mv-card__corner mv-card__corner--right"></div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
