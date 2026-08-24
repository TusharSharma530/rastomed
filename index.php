<?php
/**
 * Homepage - PharmaCorp Enterprise
 * Premium pharmaceutical corporate landing page
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
        'image' => 'assets/images/product-card-1.svg',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'General Care',
        'therapy' => 'General Care',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset.',
        'badge' => 'Popular',
        'image' => 'assets/images/product-card-2.svg',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Neurology',
        'therapy' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization.',
        'badge' => 'New',
        'image' => 'assets/images/product-card-3.svg',
    ],
    [
        'id' => 4,
        'name' => 'OsteoFlex',
        'category' => 'Ortho',
        'therapy' => 'Ortho',
        'description' => 'Premium joint care supplement for mobility and bone strength support.',
        'badge' => 'High Demand',
        'image' => 'assets/images/product-card-4.svg',
    ],
    [
        'id' => 5,
        'name' => 'GastroEase',
        'category' => 'Gastro',
        'therapy' => 'Gastro',
        'description' => 'Effective digestive care solution for gastrointestinal comfort and gut health.',
        'badge' => '',
        'image' => 'assets/images/product-card-5.svg',
    ],
    [
        'id' => 6,
        'name' => 'GynoCare',
        'category' => 'Gynae',
        'therapy' => 'Gynae',
        'description' => 'Trusted gynecological care product for women\'s health and wellness.',
        'badge' => '',
        'image' => 'assets/images/product-card-6.svg',
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
  <meta name="description" content="PharmaCorp - High quality and affordable medicines to improve quality of life globally.">
  <title>PharmaCorp - Enterprise Pharmaceutical R&amp;D &amp; Healthcare</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- ========== ENTERPRISE HERO ========== -->
    <section class="hero hero--clean hero--enterprise">
      <div class="container">
        <div class="hero__grid">
          <div class="hero__content">
            <div class="trust-pills">
              <span class="trust-pill">&#10003; WHO-GMP Certified</span>
              <span class="trust-pill">&#9733; ISO 9001:2015</span>
              <span class="trust-pill">&#127757; Global Distribution</span>
            </div>
            <h1 class="hero__title">
              High Quality &amp; Affordable Medicines To Improve Global Healthcare.
            </h1>
            <p class="hero__text">
              Delivering trusted enterprise-grade pharmaceutical formulations with an unyielding commitment to scientific innovation, patient safety, and international quality standards.
            </p>
            <div class="hero__buttons">
              <?= renderButton('Explore Products', 'products.php', 'primary', 'lg') ?>
              <?= renderButton('Corporate Profile', 'about.php', 'outline', 'lg') ?>
            </div>
          </div>
          <div class="hero__visual">
            <div class="enterprise-img-wrapper">
              <img src="assets/images/hero-enterprise.svg" alt="PharmaCorp Enterprise R&amp;D Laboratory Showcase" class="enterprise-img" width="800" height="500">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== GLOBAL METRICS BANNER ========== -->
    <section class="metrics-banner">
      <div class="container">
        <div class="metrics-grid">
          <div class="metric-item">
            <div class="metric-item__value">25+</div>
            <div class="metric-item__label">Years of Excellence</div>
          </div>
          <div class="metric-item">
            <div class="metric-item__value">50+</div>
            <div class="metric-item__label">Global Markets</div>
          </div>
          <div class="metric-item">
            <div class="metric-item__value">150+</div>
            <div class="metric-item__label">Approved Formulations</div>
          </div>
          <div class="metric-item">
            <div class="metric-item__value">10M+</div>
            <div class="metric-item__label">Patients Impacted</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ABOUT COMPANY ENTERPRISE ========== -->
    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="about-split__image reveal reveal--left">
            <div class="enterprise-img-wrapper">
              <img src="assets/images/about-enterprise.svg" alt="PharmaCorp Corporate Headquarters and R&amp;D Facility" class="enterprise-img" width="600" height="450">
            </div>
          </div>
          <div class="about-split__content reveal reveal--right">
            <span class="section-label">About Enterprise</span>
            <h2 class="section__title" style="text-align:left;">PharmaCorp Private Limited</h2>
            <p class="about-split__text">
              PharmaCorp is a premier global pharmaceutical organization engaged in developing, manufacturing, and supplying life-changing medicinal products. We offer an extensive portfolio spanning Capsules, Syrups, Tablets, Injectables, and Specialized Formulations.
            </p>
            <p class="about-split__text">
              Engineered within state-of-the-art WHO-GMP and ISO certified manufacturing facilities, all formulations adhere to stringent international regulatory guidelines for maximum efficacy and purity.
            </p>
            <?= renderButton('Discover Our Legacy', 'about.php', 'primary', '', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== R&D & MANUFACTURING SPOTLIGHT ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Enterprise Capabilities</span>
          <h2 class="section__title">World-Class Research &amp; Production</h2>
        </div>
        <div class="rd-grid">
          <div class="rd-card reveal">
            <div class="rd-card__icon">&#128302;</div>
            <h3 class="rd-card__title">Advanced R&amp;D Center</h3>
            <p class="rd-card__text">Equipped with sophisticated analytical instruments and molecular modeling labs to engineer innovative, bioequivalent drug deliveries.</p>
          </div>
          <div class="rd-card reveal">
            <div class="rd-card__icon">&#9881;</div>
            <h3 class="rd-card__title">Automated Production Plants</h3>
            <p class="rd-card__text">High-capacity automated tableting, liquid filling, and blister packaging lines designed under class 10,000 cleanroom environments.</p>
          </div>
          <div class="rd-card reveal">
            <div class="rd-card__icon">&#128737;</div>
            <h3 class="rd-card__title">Zero-Defect Quality Control</h3>
            <p class="rd-card__text">Multi-stage HPLC, dissolution, and microbiological validation guarantees batch-to-batch consistency and therapeutic precision.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== PRODUCT CATEGORIES ========== -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Explore &amp; Trust</span>
          <h2 class="section__title">Therapeutic Specializations</h2>
        </div>
        <div class="category-grid reveal">
          <?php foreach ($categories as $cat): ?>
            <a href="products.php" class="category-card">
              <div class="category-card__icon"><?= $cat['icon'] ?></div>
              <h4 class="category-card__name"><?= $cat['name'] ?></h4>
              <p class="category-card__desc"><?= $cat['description'] ?></p>
              <span class="category-card__link">
                Explore Portfolio
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== FEATURED PRODUCTS ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Quality &amp; Reliable</span>
          <h2 class="section__title">Featured Pharmaceutical Products</h2>
        </div>
        <div class="product-grid product-grid--home reveal">
          <?php foreach ($homepageProducts as $product): ?>
            <div class="product-card product-card--clean">
              <?php if (!empty($product['badge'])): ?>
                <span class="product-card__badge"><?= $product['badge'] ?></span>
              <?php endif; ?>
              <div class="product-card__image-enterprise">
                <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?> Packaging Render" width="400" height="300" loading="lazy">
              </div>
              <div class="product-card__body">
                <div class="product-card__category"><?= $product['category'] ?></div>
                <h4 class="product-card__title"><?= $product['name'] ?></h4>
                <p style="font-size: var(--fs-small); color: var(--color-text-secondary); margin-bottom: var(--space-4);"><?= $product['description'] ?></p>
                <a href="product-details.php" class="product-card__link">
                  View Specifications
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top:var(--space-10);">
          <?= renderButton('Explore Full Product Catalog', 'products.php', 'primary', 'lg') ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY CHOOSE US & CERTIFICATIONS ========== -->
    <section class="section">
      <div class="container">
        <div class="why-choose">
          <div class="why-choose__content">
            <span class="section-label">Why Partner With Us</span>
            <h2 class="section__title" style="text-align:left;">Built On Trust, Integrity &amp; Quality</h2>
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
            <div class="enterprise-img-wrapper">
              <img src="assets/images/quality-enterprise.svg" alt="WHO-GMP Quality Seal &amp; Trust Assurance" class="enterprise-img" width="600" height="450">
            </div>
          </div>
        </div>

        <!-- Compliance & Certifications Seals Bar -->
        <div class="cert-bar reveal">
          <div class="cert-item">
            <div class="cert-item__icon">&#10003;</div>
            <span>WHO-GMP Certified</span>
          </div>
          <div class="cert-item">
            <div class="cert-item__icon">&#9733;</div>
            <span>ISO 9001:2015</span>
          </div>
          <div class="cert-item">
            <div class="cert-item__icon">&#128737;</div>
            <span>EU-GMP Standards</span>
          </div>
          <div class="cert-item">
            <div class="cert-item__icon">&#127757;</div>
            <span>US FDA R&amp;D Compliant</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ENTERPRISE CTA SECTION ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="cta-clean">
          <div class="cta-clean__content">
            <h2 class="cta-clean__title">Partner With PharmaCorp Today</h2>
            <p class="cta-clean__text">Whether you require PCD Pharma Franchise opportunities, contract manufacturing, or bulk export inquiries, our enterprise team is dedicated to accelerating global access to healthcare.</p>
            <div class="cta-clean__buttons">
              <?= renderButton('Get in Touch', 'contact.php', 'primary', 'lg') ?>
              <?= renderButton('Call Direct Sales', 'tel:+912212345678', 'outline', 'lg') ?>
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
