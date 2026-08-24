<?php
/**
 * Homepage - PharmaCorp Enterprise
 * Exact layout structure: Header, Banner, About Us, Products, Awards, Testimonials, Blogs, Map, Footer
 */
require_once __DIR__ . '/includes/components.php';

$homepageProducts = [
    [
        'id' => 1,
        'name' => 'CardioShield Plus',
        'category' => 'Cardiology',
        'description' => 'Advanced cardiovascular medication for managing hypertension and reducing cardiac risk factors.',
        'badge' => 'Best Seller',
        'image' => 'assets/images/product-card-1.svg',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'General Care',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset.',
        'badge' => 'Popular',
        'image' => 'assets/images/product-card-2.svg',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization.',
        'badge' => 'New',
        'image' => 'assets/images/product-card-3.svg',
    ],
    [
        'id' => 4,
        'name' => 'OsteoFlex',
        'category' => 'Ortho',
        'description' => 'Premium joint care supplement for mobility and bone strength support.',
        'badge' => 'High Demand',
        'image' => 'assets/images/product-card-4.svg',
    ],
    [
        'id' => 5,
        'name' => 'GastroEase',
        'category' => 'Gastro',
        'description' => 'Effective digestive care solution for gastrointestinal comfort and gut health.',
        'badge' => '',
        'image' => 'assets/images/product-card-5.svg',
    ],
    [
        'id' => 6,
        'name' => 'GynoCare',
        'category' => 'Gynae',
        'description' => 'Trusted gynecological care product for women\'s health and wellness.',
        'badge' => '',
        'image' => 'assets/images/product-card-6.svg',
    ],
];

$awards = [
    [
        'year' => '2026',
        'icon' => '&#127942;',
        'title' => 'WHO-GMP Excellence Award',
        'description' => 'Honored for outstanding quality assurance & zero-defect pharmaceutical manufacturing standards.',
    ],
    [
        'year' => '2025',
        'icon' => '&#9733;',
        'title' => 'ISO 9001:2015 Certification',
        'description' => 'Certified high-precision quality management system across international product lines.',
    ],
    [
        'year' => '2025',
        'icon' => '&#128161;',
        'title' => 'Pharma Innovation Award',
        'description' => 'Recognized for pioneering solid oral bio-availability enhancement technologies.',
    ],
    [
        'year' => '2024',
        'icon' => '&#127757;',
        'title' => 'Top Healthcare Exporter',
        'description' => 'Awarded for expanding high-quality affordable medicines to over 50 countries.',
    ],
];

$testimonials = [
    [
        'quote' => 'PharmaCorp\'s unwavering commitment to product consistency and international GMP standards has made them our most trusted pharmaceutical partner.',
        'name' => 'Dr. Alok Nath',
        'role' => 'Chief Cardiologist, Metro Health Institute',
        'avatar' => 'A',
    ],
    [
        'quote' => 'Their rapid formulation turnarounds and transparent regulatory documentation have accelerated our international medicine distribution.',
        'name' => 'Sarah Jenkins',
        'role' => 'VP of Supply Chain, EuroCare Global',
        'avatar' => 'S',
    ],
    [
        'quote' => 'The therapeutic efficacy of PharmaCorp\'s respiratory and gastroenterology formulations is consistently backed by clinical excellence.',
        'name' => 'Dr. Maria Santos',
        'role' => 'Regional Medical Director',
        'avatar' => 'M',
    ],
];

$homeBlogs = [
    [
        'id' => 1,
        'title' => 'Breakthroughs in Solid Oral Dosage Formulations',
        'category' => 'R&D Insights',
        'date' => 'August 18, 2026',
        'image' => 'assets/images/blog-1.svg',
        'excerpt' => 'Exploring self-emulsifying drug delivery systems for poorly soluble active pharmaceutical ingredients.',
    ],
    [
        'id' => 2,
        'title' => 'Navigating Global WHO-GMP & ISO Compliance',
        'category' => 'Regulatory',
        'date' => 'August 10, 2026',
        'image' => 'assets/images/blog-2.svg',
        'excerpt' => 'Maintaining zero-defect audit readiness across health authority inspections.',
    ],
    [
        'id' => 3,
        'title' => 'The Role of AI & Molecular Modeling in Drug Discovery',
        'category' => 'Innovation',
        'date' => 'July 28, 2026',
        'image' => 'assets/images/blog-3.svg',
        'excerpt' => 'How machine learning accelerates target-ligand binding affinity predictions.',
    ],
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
  <!-- 1. HEADER -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- 2. BANNER / HERO -->
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

    <!-- 3. ABOUT US -->
    <section class="section">
      <div class="container">
        <div class="about-split">
          <div class="about-split__image reveal reveal--left">
            <div class="enterprise-img-wrapper">
              <img src="assets/images/about-enterprise.svg" alt="PharmaCorp Corporate Headquarters and R&amp;D Facility" class="enterprise-img" width="600" height="450">
            </div>
          </div>
          <div class="about-split__content reveal reveal--right">
            <span class="section-label">About Us</span>
            <h2 class="section__title" style="text-align:left;">PharmaCorp Private Limited</h2>
            <p class="about-split__text">
              PharmaCorp is a premier global pharmaceutical organization engaged in developing, manufacturing, and supplying life-changing medicinal products. We offer an extensive portfolio spanning Capsules, Syrups, Tablets, Injectables, and Specialized Formulations.
            </p>
            <p class="about-split__text">
              Engineered within state-of-the-art WHO-GMP and ISO certified manufacturing facilities, all formulations adhere to stringent international regulatory guidelines for maximum efficacy and purity.
            </p>
            <?= renderButton('Discover Our Story', 'about.php', 'primary', '', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. PRODUCTS -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Quality &amp; Reliable</span>
          <h2 class="section__title">Featured Products</h2>
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

    <!-- 5. AWARDS -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Excellence &amp; Honor</span>
          <h2 class="section__title">Awards &amp; Industry Recognition</h2>
        </div>
        <div class="awards-grid">
          <?php foreach ($awards as $award): ?>
            <div class="award-card reveal">
              <div class="award-card__icon"><?= $award['icon'] ?></div>
              <span class="award-card__year"><?= $award['year'] ?></span>
              <h3 class="award-card__title"><?= htmlspecialchars($award['title']) ?></h3>
              <p class="award-card__desc"><?= htmlspecialchars($award['description']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 6. TESTIMONIALS -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Client &amp; Partner Voices</span>
          <h2 class="section__title">What Our Partners Say</h2>
        </div>
        <div class="testimonials-grid">
          <?php foreach ($testimonials as $t): ?>
            <div class="testimonial-card reveal">
              <div class="testimonial-card__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <p class="testimonial-card__quote">&ldquo;<?= htmlspecialchars($t['quote']) ?>&rdquo;</p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__avatar"><?= $t['avatar'] ?></div>
                <div>
                  <div class="testimonial-card__name"><?= htmlspecialchars($t['name']) ?></div>
                  <div class="testimonial-card__role"><?= htmlspecialchars($t['role']) ?></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 7. BLOGS -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Scientific Insights</span>
          <h2 class="section__title">Latest Blogs &amp; Articles</h2>
        </div>
        <div class="rd-grid">
          <?php foreach ($homeBlogs as $b): ?>
            <div class="rd-card reveal">
              <div style="width:100%; height:160px; border-radius:var(--radius-md); overflow:hidden; margin-bottom:var(--space-4);">
                <img src="<?= $b['image'] ?>" alt="<?= htmlspecialchars($b['title']) ?>" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-2);"><?= htmlspecialchars($b['category']) ?></span>
              <h3 class="rd-card__title" style="font-size:var(--fs-h4); margin-bottom:var(--space-2);"><?= htmlspecialchars($b['title']) ?></h3>
              <p class="rd-card__text" style="font-size:var(--fs-small); margin-bottom:var(--space-4);"><?= htmlspecialchars($b['excerpt']) ?></p>
              <a href="blog-details.php?id=<?= $b['id'] ?>" class="card__link" style="font-size:var(--fs-xs);">Read Article &rarr;</a>
            </div>
          <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top:var(--space-8);">
          <?= renderButton('View All Blogs', 'blogs.php', 'outline', 'lg') ?>
        </div>
      </div>
    </section>

    <!-- 8. MAP / LOCATION -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Global Headquarters</span>
          <h2 class="section__title">Our Location &amp; Reach</h2>
        </div>
        <div class="map-grid">
          <div class="map-wrapper reveal reveal--left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.8256193798!2d72.8776559!3d19.0759837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="PharmaCorp Headquarters Location Map">
            </iframe>
          </div>
          <div class="map-info-card reveal reveal--right">
            <div class="map-info-item">
              <div class="map-info-icon">&#128205;</div>
              <div class="map-info-text">
                <strong>Head Office</strong>
                <p>353, Shivaji Road, Meerut,<br>Uttar Pradesh-250001</p>
              </div>
            </div>
            <div class="map-info-item">
              <div class="map-info-icon">&#128222;</div>
              <div class="map-info-text">
                <strong>Contact Support</strong>
                <p>+91 9410666599<br>info@rastomed.com</p>
              </div>
            </div>
            <div class="map-info-item">
              <div class="map-info-icon">&#128336;</div>
              <div class="map-info-text">
                <strong>Working Hours</strong>
                <p>Monday &ndash; Friday: 9:00 AM &ndash; 6:00 PM (IST)<br>Saturday &ndash; Sunday: Closed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- 9. FOOTER -->
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
