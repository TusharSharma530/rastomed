<?php
/**
 * Homepage - PharmaCorp
 * Jannocks Pharma-inspired pharmaceutical corporate website
 */
require_once __DIR__ . '/includes/components.php';

$categories = [
    ['name' => 'Gastro', 'icon' => '&#129516;', 'description' => 'Digestive health and gastrointestinal care products for comprehensive patient wellness.'],
    ['name' => 'Gynae', 'icon' => '&#9792;', 'description' => 'Specialized gynecological healthcare solutions supporting women\'s health at every stage.'],
    ['name' => 'Ortho', 'icon' => '&#129462;', 'description' => 'Orthopedic and musculoskeletal care products for bone and joint health.'],
    ['name' => 'General Care', 'icon' => '&#128138;', 'description' => 'Everyday healthcare essentials for general wellness and common health needs.'],
];

$homepageProducts = [
    [
        'id' => 1,
        'name' => 'CardioShield Plus',
        'category' => 'Cardiology',
        'therapy' => 'Cardiology',
        'description' => 'Advanced cardiovascular medication for managing hypertension and reducing cardiac risk factors.',
        'badge' => 'Best Seller',
        'icon' => '&#9829;',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'General Care',
        'therapy' => 'General Care',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset.',
        'badge' => '',
        'icon' => '&#9736;',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Neurology',
        'therapy' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization.',
        'badge' => 'New',
        'icon' => '&#9883;',
    ],
    [
        'id' => 4,
        'name' => 'OsteoFlex',
        'category' => 'Ortho',
        'therapy' => 'Ortho',
        'description' => 'Premium joint care supplement for mobility and bone strength support.',
        'badge' => '',
        'icon' => '&#9883;',
    ],
    [
        'id' => 5,
        'name' => 'GastroEase',
        'category' => 'Gastro',
        'therapy' => 'Gastro',
        'description' => 'Effective digestive care solution for gastrointestinal comfort and gut health.',
        'badge' => '',
        'icon' => '&#129516;',
    ],
    [
        'id' => 6,
        'name' => 'GynoCare',
        'category' => 'Gynae',
        'therapy' => 'Gynae',
        'description' => 'Trusted gynecological care product for women\'s health and wellness.',
        'badge' => '',
        'icon' => '&#9792;',
    ],
];

$whyChoose = [
    ['icon' => '&#10003;', 'title' => 'Quality Assurance', 'description' => 'We ensure that development and packaging of our products is done under hygienic environment with international standards.'],
    ['icon' => '&#9733;', 'title' => 'Our Strengths', 'description' => 'Our business ethics, zero tolerance quality policy and a highly qualified team are our strengths.'],
    ['icon' => '&#128293;', 'title' => 'Passion for Excellence', 'description' => 'We tenaciously chase excellence through continuous improvement in all our projects, processes and products.'],
    ['icon' => '&#128101;', 'title' => 'Customer Focus', 'description' => 'We believe in understanding and meeting customer needs in a professional and responsive manner.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp - High quality and affordable medicines to improve quality of life.">
  <title>PharmaCorp - Advancing Healthcare</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- ========== HERO ========== -->
    <section class="hero hero--clean">
      <div class="container">
        <div class="hero__grid">
          <div class="hero__content">
            <h1 class="hero__title">
              High Quality and Affordable Medicines To Improve Quality Of Life.
            </h1>
            <p class="hero__text">
              Delivering trusted pharmaceutical products with a commitment to scientific excellence, patient safety, and global healthcare standards.
            </p>
            <div class="hero__buttons">
              <?= renderButton('View Products', 'products.php', 'primary', 'lg') ?>
              <?= renderButton('Know More', 'about.php', 'outline', 'lg') ?>
            </div>
          </div>
          <div class="hero__visual">
            <div class="hero__image-placeholder">
              <div class="hero__image-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              </div>
              <span>Pharmaceutical Excellence</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ABOUT COMPANY ========== -->
    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="about-split__image reveal reveal--left">
            <div class="about-split__img-placeholder">
              <div class="about-split__img-icon">P</div>
              <span>Company Image</span>
            </div>
            <div class="about-split__badge">
              <strong>25+</strong>
              <span>Years of Excellence</span>
            </div>
          </div>
          <div class="about-split__content reveal reveal--right">
            <span class="section-label">About Company</span>
            <h2 class="section__title" style="text-align:left;">PharmaCorp Private Limited</h2>
            <p class="about-split__text">
              PharmaCorp Private Limited is a reliable leading organization, engaged in providing highly effective ranges of Pharmaceutical Medicines. We have a wide range of healthcare products: Capsules, Syrups, Tablets, and other Pharmaceutical Products.
            </p>
            <p class="about-split__text">
              All these products are processed under strict international standards, following the rules of appropriate composition of compounds.
            </p>
            <?= renderButton('Read More', 'about.php', 'primary', '', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== PRODUCT CATEGORIES ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Explore &amp; Trust</span>
          <h2 class="section__title">Our Range of Solutions</h2>
        </div>
        <div class="category-grid reveal">
          <?php foreach ($categories as $cat): ?>
            <a href="products.php" class="category-card">
              <div class="category-card__icon"><?= $cat['icon'] ?></div>
              <h4 class="category-card__name"><?= $cat['name'] ?></h4>
              <p class="category-card__desc"><?= $cat['description'] ?></p>
              <span class="category-card__link">
                Explore
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PRODUCTS ========== -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Quality &amp; Reliable</span>
          <h2 class="section__title">Our Products</h2>
        </div>
        <div class="product-grid product-grid--home reveal">
          <?php foreach ($homepageProducts as $product): ?>
            <div class="product-card product-card--clean">
              <div class="product-card__image">
                <div class="product-card__image-placeholder"><?= $product['icon'] ?></div>
              </div>
              <div class="product-card__body">
                <div class="product-card__category"><?= $product['category'] ?></div>
                <h4 class="product-card__title"><?= $product['name'] ?></h4>
                <a href="product-details.php" class="product-card__link">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top:var(--space-10);">
          <?= renderButton('View All Products', 'products.php', 'primary', 'lg') ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY CHOOSE US ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="why-choose">
          <div class="why-choose__content">
            <span class="section-label">Why Choose Us</span>
            <h2 class="section__title" style="text-align:left;">What Makes Us Better Than Others</h2>
            <div class="why-choose__features">
              <?php foreach ($whyChoose as $item): ?>
                <div class="why-choose__item">
                  <div class="why-choose__icon"><?= $item['icon'] ?></div>
                  <div>
                    <h4 class="why-choose__title"><?= $item['title'] ?></h4>
                    <p class="why-choose__desc"><?= $item['description'] ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="why-choose__image reveal reveal--right">
            <div class="why-choose__img-placeholder">
              <div class="why-choose__img-icon">&#10003;</div>
              <span>Quality &amp; Trust</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== HAVE QUESTIONS CTA ========== -->
    <section class="section">
      <div class="container">
        <div class="cta-clean">
          <div class="cta-clean__content">
            <h2 class="cta-clean__title">Have Questions?</h2>
            <p class="cta-clean__text">Our measurement of success is our customers. We succeed when they succeed. We are committed to solving current and future needs with innovation.</p>
            <div class="cta-clean__buttons">
              <?= renderButton('Contact Us', 'contact.php', 'primary', 'lg') ?>
              <?= renderButton('Call Now', 'tel:+912212345678', 'outline', 'lg') ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
