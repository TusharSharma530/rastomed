<?php
/**
 * Homepage - Medixon Pharmaceuticals
 * Exact layout: Header, Hero, About Us, Products, Awards, Testimonials, Blogs, Map/Contact, Footer
 */
require_once __DIR__ . '/includes/components.php';

$productCategories = [
    [
        'name' => 'Capsules',
        'description' => 'Wide range of high-quality capsule formulations.',
        'image' => 'assets/images/capsules.jpg',
        'url' => 'products.php',
    ],
    [
        'name' => 'Tablets',
        'description' => 'Reliable and effective tablet formulations.',
        'image' => 'assets/images/tablets.jpg',
        'url' => 'products.php',
    ],
    [
        'name' => 'Syrups',
        'description' => 'Clinically tested syrups for every need.',
        'image' => 'assets/images/syrups.jpg',
        'url' => 'products.php',
    ],
    [
        'name' => 'Injections',
        'description' => 'Safe, sterile & trusted injection range.',
        'image' => 'assets/images/injections.jpg',
        'url' => 'products.php',
    ],
    [
        'name' => 'Ointments',
        'description' => 'Topical care with reliable and safe formulations.',
        'image' => 'assets/images/ointments.jpg',
        'url' => 'products.php',
    ],
];

$awards = [
    [
        'image' => 'assets/images/award-1.jpg',
        'title' => 'Business Excellence Award 2024',
        'desc' => 'Recognized for outstanding business practices and excellence in pharmaceutical manufacturing.',
    ],
    [
        'image' => 'assets/images/award-2.jpg',
        'title' => 'India Pharma Award 2023',
        'desc' => 'Honored for innovation and contribution to the Indian pharmaceutical industry.',
    ],
    [
        'image' => 'assets/images/award-3.jpg',
        'title' => 'GMP Certified',
        'desc' => 'Certified for Good Manufacturing Practices ensuring product quality and safety.',
    ],
    [
        'image' => 'assets/images/award-4.jpg',
        'title' => 'ISO 9001:2015',
        'desc' => 'International standard certification for quality management systems.',
    ],
    [
        'image' => 'assets/images/award-5.jpg',
        'title' => 'WHO-GMP Certified',
        'desc' => 'World Health Organization Good Manufacturing Practices certified facility.',
    ],
    [
        'image' => 'assets/images/award-6.jpg',
        'title' => '15+ Years of Trust',
        'desc' => 'Over 15 years of trusted service in pharmaceutical manufacturing and distribution.',
    ],
];

$testimonials = [
    [
        'quote' => 'Medixon Pharmaceuticals has been our trusted partner for years. Their quality and commitment are truly exceptional.',
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
        'image' => 'assets/images/blog-1.jpg',
        'excerpt' => 'Exploring the latest advancements and trends shaping the pharmaceutical industry.',
    ],
    [
        'id' => 2,
        'title' => '5 Simple Ways to Boost Your Immunity Naturally',
        'category' => 'Health Tips',
        'date' => 'May 05, 2024',
        'image' => 'assets/images/blog-2.jpg',
        'excerpt' => 'Natural approaches to strengthen your immune system and stay healthy.',
    ],
    [
        'id' => 3,
        'title' => 'How Quality Manufacturing Ensures Better Healthcare',
        'category' => 'Pharma Updates',
        'date' => 'April 28, 2024',
        'image' => 'assets/images/blog-3.jpg',
        'excerpt' => 'The role of quality manufacturing in delivering safe and effective medicines.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Medixon Pharmaceuticals - Trusted by Doctors, Chosen by Millions. High-quality medicines for a healthier tomorrow.">
  <title>Medixon Pharmaceuticals - Advancing Healthcare Through Innovation</title>

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
    <!-- 2. HERO SECTION -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-section__grid">
          <div class="hero-section__content">
            <span class="hero-section__label">CARING FOR LIFE</span>
            <h1 class="hero-section__title">
              Advancing Healthcare Through <span class="hero-section__title--highlight">Innovation</span>
            </h1>
            <p class="hero-section__text">
              Medixon Pharmaceuticals is committed to improving lives by delivering high-quality, effective and affordable pharmaceutical products trusted worldwide.
            </p>
            <div class="hero-section__buttons">
              <?= renderButton('Explore Products', 'products.php', 'primary', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
              <?= renderButton('Contact Us', 'contact.php', 'outline', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
            </div>
          </div>
          <div class="hero-section__visual">
            <div class="hero-section__image-wrapper">
              <img src="assets/images/hero-lab.jpg" alt="Medixon Pharmaceuticals Laboratory" class="hero-section__image" width="600" height="450">
            </div>
          </div>
        </div>
        <!-- Trust Badges -->
        <div class="hero-section__trust">
          <div class="trust-badge-item">
            <div class="trust-badge-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <span class="trust-badge-item__text">WHO-GMP<br>Certified</span>
          </div>
          <div class="trust-badge-item">
            <div class="trust-badge-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <span class="trust-badge-item__text">Quality<br>Assurance</span>
          </div>
          <div class="trust-badge-item">
            <div class="trust-badge-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
            </div>
            <span class="trust-badge-item__text">Timely<br>Delivery</span>
          </div>
          <div class="trust-badge-item">
            <div class="trust-badge-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3h6v11l-3 3-3-3z"/><path d="M6 21h12"/></svg>
            </div>
            <span class="trust-badge-item__text">R&amp;D<br>Driven</span>
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
              <img src="assets/images/about-building.jpg" alt="Medixon Pharmaceuticals Corporate Headquarters" class="enterprise-img" width="600" height="450">
            </div>
            <div class="about-split__badge">
              <strong>18+</strong>
              <span>Years of<br>Excellence</span>
              <small>Serving healthcare with trust since 2006</small>
            </div>
          </div>
          <div class="about-split__content reveal reveal--right">
            <span class="section-label">ABOUT US</span>
            <h2 class="section__title" style="text-align:left;">Trusted by Doctors.<br>Chosen by <span style="color:var(--color-primary);">Millions.</span></h2>
            <p class="about-split__text">
              Medixon Pharmaceuticals is a fast-growing pharmaceutical company dedicated to manufacturing and marketing a wide range of high-quality medicines.
            </p>
            <div class="about-stats-grid">
              <div class="about-stat">
                <div class="about-stat__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="about-stat__number">18+</div>
                <div class="about-stat__label">Years<br>Experience</div>
              </div>
              <div class="about-stat">
                <div class="about-stat__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                </div>
                <div class="about-stat__number">300+</div>
                <div class="about-stat__label">Quality<br>Products</div>
              </div>
              <div class="about-stat">
                <div class="about-stat__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <div class="about-stat__number">25+</div>
                <div class="about-stat__label">Countries<br>Presence</div>
              </div>
              <div class="about-stat">
                <div class="about-stat__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="about-stat__number">500+</div>
                <div class="about-stat__label">Happy<br>Associates</div>
              </div>
            </div>
            <div style="margin-top: var(--space-6);">
              <?= renderButton('Know More About Us', 'about.php', 'primary', '', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. PRODUCTS -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">OUR PRODUCTS</span>
          <h2 class="section__title">Quality Products for a <span style="color:var(--color-primary);">Healthier Tomorrow</span></h2>
        </div>
        <div class="product-categories-grid reveal">
          <?php foreach ($productCategories as $product): ?>
            <div class="product-category-card">
              <div class="product-category-card__image">
                <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="200" height="160" loading="lazy">
              </div>
              <div class="product-category-card__body">
                <h3 class="product-category-card__title"><?= htmlspecialchars($product['name']) ?></h3>
                <p class="product-category-card__desc"><?= htmlspecialchars($product['description']) ?></p>
                <a href="<?= $product['url'] ?>" class="product-category-card__link">
                  View Details
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin-top:var(--space-10);">
          <?= renderButton('View All Products', 'products.php', 'primary', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
        </div>
      </div>
    </section>

    <!-- 5. AWARDS & CERTIFICATIONS -->
    <section class="section awards-section">
      <div class="container">
        <div class="awards-header">
          <span class="awards-header__label">AWARDS &amp; CERTIFICATIONS</span>
          <h2 class="awards-header__title">Recognized for Excellence</h2>
          <p class="awards-header__text">Our commitment to quality has been acknowledged by leading industry bodies and regulatory authorities worldwide.</p>
        </div>
        <div class="awards-grid">
          <?php foreach ($awards as $index => $award): ?>
            <div class="award-card reveal" style="animation-delay: <?= $index * 0.1 ?>s;">
              <div class="award-card__image">
                <img src="<?= $award['image'] ?>" alt="<?= htmlspecialchars($award['title']) ?>" loading="lazy">
                <div class="award-card__overlay">
                  <div class="award-card__icon-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                  </div>
                </div>
              </div>
              <div class="award-card__content">
                <h3 class="award-card__title"><?= htmlspecialchars($award['title']) ?></h3>
                <p class="award-card__desc"><?= htmlspecialchars($award['desc']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 6. TESTIMONIALS -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">TESTIMONIALS</span>
          <h2 class="section__title">What Our Clients Say</h2>
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

    <!-- 7. BLOGS -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header" style="display:flex; align-items:center; justify-content:space-between; text-align:left; max-width:100;">
          <div>
            <span class="section-label">OUR BLOGS</span>
            <h2 class="section__title" style="text-align:left;">Latest Insights &amp; Updates</h2>
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

    <!-- 8. MAP / CONTACT -->
    <section class="section">
      <div class="container">
        <div class="map-contact-grid">
          <div class="map-wrapper reveal reveal--left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.123456789!2d76.9466!3d30.6942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afc7a5ec2f45b%3A0x1234567890abcdef!2sPanchkula%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
              width="100%"
              height="450"
              style="border:0; border-radius: var(--radius-2xl);"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Medixon Pharmaceuticals Location Map">
            </iframe>
          </div>
          <div class="map-contact-info reveal reveal--right">
            <span class="section-label">GET IN TOUCH</span>
            <h2 class="section__title" style="text-align:left; margin-bottom: var(--space-6);">We Are Here to Help You</h2>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>Medixon Pharmaceuticals</strong>
                <p>Plot No. 123, Industrial Area,<br>Phase 1, Panchkula,<br>Haryana, India - 134113</p>
              </div>
            </div>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>+91 98765 43210</strong>
                <strong>+91 98765 43211</strong>
              </div>
            </div>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong>info@medixonpharma.com</strong>
                <strong>www.medixonpharma.com</strong>
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
