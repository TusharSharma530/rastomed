<?php
/**
 * Homepage - RastoMed Pharma Private Limited
 * Exact layout: Header, Hero, About Us, Products, Awards, Testimonials, Blogs, Map/Contact, Footer
 */
require_once __DIR__ . '/includes/components.php';

$ourProducts = [
    [
        'name' => 'CoRast-Q10',
        'image' => 'assets/images/qorest-10.png',
        'url' => 'product-details.php?id=1',
    ],
];

$awards = [
    [
        'image' => 'assets/images/award1.jpeg',
        'title' => 'India Pharma Award 2023',
    ],
    [
        'image' => 'assets/images/award2.png',
        'title' => 'GMP Certified',
    ],
    [
        'image' => 'assets/images/award3.jpeg',
        'title' => 'ISO 9001:2015',
    ],
    [
        'image' => 'assets/images/award4.jpeg',
        'title' => 'WHO-GMP Certified',
    ],
];

$testimonials = [
    [
        'quote' => 'RastoMed Pharma has been our trusted partner for years. Their quality and commitment are truly exceptional.',
        'name' => 'Dr. Rakesh Sharma',
        'role' => 'Senior Consultant',
        'avatar' => 'RS',
    ],
    [
        'quote' => 'The quality of their products and timely delivery helps us serve our patients better every day.',
        'name' => 'Dr. Anjali Verma',
        'role' => 'MD, Physician',
        'avatar' => 'AV',
    ],
    [
        'quote' => 'Excellent services, wide product range and strong support team. Highly recommended.',
        'name' => 'Mr. Sandeep Patel',
        'role' => 'Distributor',
        'avatar' => 'SP',
    ],
];

$homeBlogs = [
    [
        'id' => 1,
        'title' => 'Latest Trends in Pharmaceutical Industry in 2024',
        'category' => 'Pharma News',
        'date' => 'May 10, 2024',
        'image' => 'assets/images/blog-research.jpg',
        'excerpt' => 'Exploring the latest advancements and trends shaping the pharmaceutical industry.',
    ],
    [
        'id' => 2,
        'title' => '5 Simple Ways to Boost Your Immunity Naturally',
        'category' => 'Health Tips',
        'date' => 'May 05, 2024',
        'image' => 'assets/images/blog-health.jpg',
        'excerpt' => 'Natural approaches to strengthen your immune system and stay healthy.',
    ],
    [
        'id' => 3,
        'title' => 'How Quality Manufacturing Ensures Better Healthcare',
        'category' => 'Pharma Updates',
        'date' => 'April 28, 2024',
        'image' => 'assets/images/blog-manufacturing.jpg',
        'excerpt' => 'The role of quality manufacturing in delivering safe and effective medicines.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="RastoMed Pharma Private Limited - Trusted by Doctors, Chosen by Millions. High-quality medicines for a healthier tomorrow.">
  <title>RastoMed Pharma - Advancing Health with Purpose</title>

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
    <!-- 2. HERO SECTION - Video Hero Banner -->
    <section class="home-hero-banner">
      <video id="heroVideo" class="home-hero-video-bg" autoplay loop muted playsinline webkit-playsinline preload="auto" poster="assets/images/hero-pharma.jpg">
        <source src="assets/videos/hero-video.mp4" type="video/mp4">
        <source src="assets/videos/hero-video-2.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="home-hero-overlay"></div>
      <div class="container home-hero-content-container">
        <div class="home-hero-content">
          <span class="home-hero-badge">RastoMed Pharma Private Limited</span>
          <h1 class="home-hero-title">Advancing Health<br>with Purpose</h1>
          <p class="home-hero-subtitle">RastoMed Pharma Private Limited is committed to improving lives by delivering high-quality, effective and affordable pharmaceutical products <strong>trusted worldwide.</strong></p>
          
          <!-- 4 Feature Animated SVG Icons -->
          <div class="home-hero-features">
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes shieldPulse {
                      0%, 100% { transform: scale(1); }
                      50% { transform: scale(1.05); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <g style="transform-origin: 50px 48px; animation: shieldPulse 3s infinite ease-in-out;">
                    <path d="M50 24 L68 31 C68 49 59 62 50 68 C41 62 32 49 32 31 Z" fill="none" stroke="#0d47a1" stroke-width="3.8" stroke-linejoin="round" stroke-linecap="round" />
                    <path d="M46 38 H54 V44 H60 V52 H54 V58 H46 V52 H40 V44 H46 Z" fill="#0d47a1" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Trusted<br>Quality</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes heartBeat {
                      0%, 100% { transform: scale(1); }
                      14% { transform: scale(1.15); }
                      28% { transform: scale(1); }
                      42% { transform: scale(1.1); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <path d="M50 46 C50 46 33 35 33 27 C33 21 38 17 44 19 C47 20 50 23 50 23 C50 23 53 20 56 19 C62 17 67 21 67 27 C67 35 50 46 50 46 Z" fill="#0d47a1" style="transform-origin: 50px 32px; animation: heartBeat 2.2s infinite ease-in-out;" />
                  <path d="M28 56 C34 52 42 54 48 58 L54 62 C58 64 64 62 68 56 C70 52 67 49 63 50 L54 53 C50 54 45 49 40 49 C34 49 28 56 28 56 Z" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M24 65 C29 61 38 59 48 64" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" />
                </svg>
              </div>
              <span class="hero-feature-label">Better<br>Health</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes waveGrid {
                      0%, 100% { opacity: 0.75; }
                      50% { opacity: 1; }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <circle cx="50" cy="50" r="22" fill="none" stroke="#0d47a1" stroke-width="3.5" />
                  <g style="animation: waveGrid 3s infinite ease-in-out;">
                    <line x1="28" y1="50" x2="72" y2="50" fill="none" stroke="#0d47a1" stroke-width="2.2" stroke-linecap="round" />
                    <line x1="50" y1="28" x2="50" y2="72" fill="none" stroke="#0d47a1" stroke-width="2.2" stroke-linecap="round" />
                    <ellipse cx="50" cy="50" rx="14" ry="22" fill="none" stroke="#0d47a1" stroke-width="2.2" />
                    <ellipse cx="50" cy="50" rx="22" ry="12" fill="none" stroke="#0d47a1" stroke-width="2.2" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Global<br>Presence</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes pulseBeam {
                      0%, 100% { opacity: 0.25; transform: scaleY(0.95); }
                      50% { opacity: 0.9; transform: scaleY(1.05); }
                    }
                    @keyframes gearTurn {
                      0% { transform: rotate(0deg); }
                      100% { transform: rotate(360deg); }
                    }
                    @keyframes floatAtom {
                      0%, 100% { transform: translateY(0); }
                      50% { transform: translateY(-3px); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <g style="transform-origin: 50px 50px; animation: floatAtom 3s infinite ease-in-out;">
                    <path d="M30 72 H70 V75 H30 Z" fill="#0d47a1" />
                    <path d="M38 68 H62 V72 H38 Z" fill="#0d47a1" />
                    <rect x="42" y="62" width="16" height="6" rx="2" fill="#0d47a1" />
                    <rect x="34" y="55" width="32" height="4" rx="1" fill="#0d47a1" />
                    <path d="M60 62 C60 44 65 34 52 25 C45 20 38 26 38 32 C38 36 42 38 46 38 C50 38 52 35 52 32 C52 28 48 27 46 27 C54 27 54 44 54 55" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" />
                    <path d="M42 22 L49 33 C49 33 46 35 43 37 L36 26 Z" fill="#0d47a1" />
                    <path d="M42 39 L47 47 H41 L37 40 Z" fill="#0d47a1" />
                    <path d="M48 37 L52 45 H48 L45 38 Z" fill="#0d47a1" />
                    <circle cx="54" cy="46" r="3.5" fill="#0d47a1" style="transform-origin: 54px 46px; animation: gearTurn 6s linear infinite;" stroke="#90caf9" stroke-width="1" />
                    <circle cx="50" cy="62" r="3" fill="#1565c0" />
                    <polygon points="44,55 56,55 51,47 45,47" fill="#90caf9" style="transform-origin: 50px 51px; animation: pulseBeam 2s infinite ease-in-out;" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Driven by<br>Innovation</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. ABOUT US -->
    <section class="about-section">
      <div class="container">
        <div class="about-section__grid">
          <div class="about-section__images">
            <div class="about-section__img about-section__img--1">
              <img src="assets/images/about.png" alt="Pharmaceutical Medicines" width="400" height="350">
            </div>
          </div>
          <div class="about-section__content">
            <h2 class="about-section__title">RastoMed Pharma Private Limited</h2>
            <p class="about-section__text">
              RastoMed Pharma Private Limited is a reliable leading organization, which is engaged in providing a highly effective ranges of Pharmaceutical Medicines. We have a wide range of healthcare products: Capsules, Syrups, Tablets, and other Pharmaceutical Products. All these products are processed under the strict guideline of international standards, following the rules of appropriate composition of compounds.
            </p>
            <a href="about.php" class="about-section__btn">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. OUR PRODUCTS -->
    <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <span class="our-products-label">Quality &amp; Reliable</span>
            <h3 class="our-products-title">Our Products</h3>
          </div>
          <a href="products.php" class="our-products-viewall">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
        <div class="our-products-slider">
          <div class="our-products-track">
            <?php foreach ($ourProducts as $product): ?>
              <div class="our-product-card">
                <div class="our-product-card__image">
                  <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                  <a href="<?= $product['url'] ?>" class="our-product-card__plus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                  </a>
                </div>
                <div class="our-product-card__body">
                  <div class="flex-between-gap3">
                <div>
                  <h3 class="our-product-card__title margin-0-left">CoRast-Q10</h3>
                  <span class="price-tag-style">&#8377; 655</span>
                </div>
                <div>
                  <a href="product-details.php?id=1" class="our-product-card__btn">Read More</a>
                </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. AWARDS & CERTIFICATIONS -->
    <!-- <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <span class="our-products-label">AWARDS &amp; CERTIFICATIONS</span>
            <h3 class="our-products-title">Recognized for Excellence</h3>
          </div>
        </div>
        <div class="award-flex-row">
          <?php foreach ($awards as $award): ?>
            <div class="award-item-col">
              <div class="award-item-inner">
                <img src="<?= $award['image'] ?>" alt="<?= htmlspecialchars($award['title']) ?>" class="award-img-display" loading="lazy">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section> -->

    <!-- 6. TESTIMONIALS -->
    <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <span class="our-products-label">TESTIMONIALS</span>
            <h3 class="our-products-title">What Our Clients Say</h3>
          </div>
          <div class="testimonials-arrows">
            <button class="testimonials-arrow testimonials-arrow--prev" aria-label="Previous">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
            </button>
            <button class="testimonials-arrow testimonials-arrow--next" aria-label="Next">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
          </div>
        </div>
        <div class="testimonials-carousel">
          <div class="testimonials-track">
            <?php foreach ($testimonials as $t): ?>
              <div class="testimonial-card-clean reveal">
                <div class="testimonial-card-clean__quote-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/></svg>
                </div>
                <div class="testimonial-card-clean__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-card-clean__quote"><?= htmlspecialchars($t['quote']) ?></p>
                <div class="testimonial-card-clean__author">
                  <div class="testimonial-card-clean__avatar"><?= $t['avatar'] ?></div>
                  <div>
                    <div class="testimonial-card-clean__name"><?= htmlspecialchars($t['name']) ?></div>
                    <div class="testimonial-card-clean__role"><?= htmlspecialchars($t['role']) ?></div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="testimonials-nav">
            <button class="testimonials-nav__dot testimonials-nav__dot--active" aria-label="Slide 1"></button>
            <button class="testimonials-nav__dot" aria-label="Slide 2"></button>
            <button class="testimonials-nav__dot" aria-label="Slide 3"></button>
          </div>
        </div>
      </div>
    </section>

    <!-- 7. BLOGS
    <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <span class="our-products-label">OUR BLOGS</span>
            <h3 class="our-products-title">Latest Insights &amp; Updates</h3>
          </div>
          <?= renderButton('View All Blogs', 'blogs.php', 'outline', 'sm', '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
        </div>
        <div class="blogs-grid">
          <?php foreach ($homeBlogs as $b): ?>
            <div class="blog-card reveal">
              <div class="blog-card__image">
                <img src="<?= $b['image'] ?>" alt="<?= htmlspecialchars($b['title']) ?>" width="400" height="220" loading="lazy">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__category"><?= htmlspecialchars($b['category']) ?></span>
                  <span class="blog-card__date"><?= htmlspecialchars($b['date']) ?></span>
                </div>
                <h3 class="blog-card__title"><?= htmlspecialchars($b['title']) ?></h3>
                <a href="blog-details.php?id=<?= $b['id'] ?>" class="blog-card__link">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    -->

    <!-- 8. MAP / CONTACT -->
    <section class="section pad-20-section">
      <div class="container">
        <div class="map-contact-grid">
          <div class="map-wrapper reveal reveal--left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.123456789!2d76.9466!3d30.6942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afc7a5ec2f45b%3A0x1234567890abcdef!2sPanchkula%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
              width="100%"
              height="450"
              class="map-iframe-no-border border-radius-2xl-box"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="RastoMed Pharma Location Map">
            </iframe>
          </div>
          <div class="map-contact-info reveal reveal--right">
            <span class="our-products-label">GET IN TOUCH</span>
            <h3 class="our-products-title">We Are Here to Help You</h3>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>RastoMed Pharma Private Limited</strong>
                <p>353, Shivaji Road, Meerut,<br>Uttar Pradesh-250001</p>
              </div>
            </div>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>+91 9410666599</strong>
                <strong>+91 7906752047</strong>
              </div>
            </div>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>info@rastomedpharma.com</strong>
              </div>
            </div>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>Monday - Saturday</strong>
                <p>9:00 AM - 6:00 PM</p>
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
