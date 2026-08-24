<?php
/**
 * About Page - PharmaCorp
 * Enhanced with Company Overview, Mission, Vision, Values, Milestones, Leadership
 */
require_once __DIR__ . '/includes/components.php';

$values = [
    ['icon' => '&#9733;', 'title' => 'Quality', 'description' => 'Every product meets the highest international standards of safety, purity, and efficacy.'],
    ['icon' => '&#9878;', 'title' => 'Innovation', 'description' => 'Continuously investing in R&D to develop advanced formulations and drug delivery systems.'],
    ['icon' => '&#9830;', 'title' => 'Integrity', 'description' => 'Operating with transparency and ethical practices in every aspect of our business.'],
    ['icon' => '&#10022;', 'title' => 'Excellence', 'description' => 'Striving for the highest standards in manufacturing, research, and customer service.'],
    ['icon' => '&#9829;', 'title' => 'Patient First', 'description' => 'Designing every process and product with the patient\'s well-being as the central priority.'],
    ['icon' => '&#9764;', 'title' => 'Responsibility', 'description' => 'Committed to sustainable practices and environmental stewardship in manufacturing.'],
];

$milestones = [
    ['year' => '2001', 'title' => 'Foundation', 'description' => 'PharmaCorp was established with a vision to make quality healthcare accessible.'],
    ['year' => '2005', 'title' => 'First Manufacturing Facility', 'description' => 'Inaugurated our first WHO-GMP compliant manufacturing unit in Maharashtra.'],
    ['year' => '2010', 'title' => 'International Expansion', 'description' => 'Expanded operations to serve patients across 15+ countries worldwide.'],
    ['year' => '2015', 'title' => 'R&D Center', 'description' => 'Established state-of-the-art research and development center for drug discovery.'],
    ['year' => '2020', 'title' => 'Digital Transformation', 'description' => 'Embraced digital technologies for smart manufacturing and supply chain optimization.'],
    ['year' => '2025', 'title' => 'Global Recognition', 'description' => 'Recognized as a leading pharmaceutical company with 100+ products across therapeutic areas.'],
];

$leaders = [
    ['name' => 'Dr. Rajesh Kumar', 'role' => 'Chairman & Managing Director', 'initials' => 'RK', 'bio' => 'Visionary leader with over 30 years of pharmaceutical industry experience.'],
    ['name' => 'Dr. Priya Sharma', 'role' => 'Chief Executive Officer', 'initials' => 'PS', 'bio' => 'Strategic thinker driving organizational growth and global expansion.'],
    ['name' => 'Mr. Arjun Mehta', 'role' => 'Chief Operating Officer', 'initials' => 'AM', 'bio' => 'Operational excellence expert ensuring efficient manufacturing and supply chain.'],
    ['name' => 'Dr. Anita Desai', 'role' => 'Chief Scientific Officer', 'initials' => 'AD', 'bio' => 'Leading innovation in pharmaceutical research and drug development.'],
    ['name' => 'Mr. Vikram Singh', 'role' => 'Chief Financial Officer', 'initials' => 'VS', 'bio' => 'Driving financial strategy and sustainable business growth.'],
    ['name' => 'Dr. Meera Nair', 'role' => 'Head of Quality', 'initials' => 'MN', 'bio' => 'Ensuring the highest quality standards across all operations.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Learn about PharmaCorp - our history, leadership, vision, and mission to advance global healthcare.">
  <title>About Us - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('About Us', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'About Us', 'url' => 'about.php'],
    ], 'Discover our story, our mission, and the values that drive our commitment to global healthcare.') ?>

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
        <?= renderSectionHeader('Our Purpose', 'Mission & Vision', 'Guided by purpose, driven by impact.') ?>

        <div class="grid grid--2 reveal">
          <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-2xl); padding:clamp(2rem, 4vw, 3rem); text-align:center;">
            <div style="width:72px; height:72px; margin:0 auto var(--space-5); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:1.75rem;">&#9733;</div>
            <h3 style="font-size:var(--fs-h3); margin-bottom:var(--space-4);">Our Vision</h3>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed);">
              To be a globally trusted pharmaceutical leader, recognized for innovation, quality, and our commitment to improving human health and well-being through accessible, effective medicines.
            </p>
          </div>
          <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-2xl); padding:clamp(2rem, 4vw, 3rem); text-align:center;">
            <div style="width:72px; height:72px; margin:0 auto var(--space-5); background:linear-gradient(135deg, var(--color-secondary), var(--color-secondary-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:1.75rem;">&#9826;</div>
            <h3 style="font-size:var(--fs-h3); margin-bottom:var(--space-4);">Our Mission</h3>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed);">
              To discover, develop, and deliver high-quality pharmaceutical products that address critical healthcare needs, while maintaining the highest standards of ethics, sustainability, and patient safety.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CORE VALUES ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Our Values', 'The Principles That Define Us', 'Core values that guide every decision we make and every product we deliver.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($values as $value): ?>
            <?= renderValueCard($value['icon'], $value['title'], $value['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== MILESTONES ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Our Journey', 'Key Milestones', 'A timeline of our growth and achievements over the years.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($milestones as $milestone): ?>
            <?= renderMilestoneCard($milestone['year'], $milestone['title'], $milestone['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== LEADERSHIP ========== -->
    <section id="leadership" class="section">
      <div class="container">
        <?= renderSectionHeader('Leadership', 'Our Leadership Team', 'Experienced professionals driving pharmaceutical excellence with vision and dedication.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($leaders as $leader): ?>
            <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); padding:var(--space-6); text-align:center; transition: all var(--transition-base);" class="card-hover-target">
              <div style="width:90px; height:90px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border:2px solid var(--color-border); border-radius:var(--radius-full); display:flex; align-items:center; justify-content:center; font-size:1.375rem; font-weight:700; color:var(--color-primary);"><?= $leader['initials'] ?></div>
              <h4 style="font-size:var(--fs-body); font-weight:var(--fw-semibold); margin-bottom:var(--space-1);"><?= $leader['name'] ?></h4>
              <p style="font-size:var(--fs-xs); color:var(--color-primary); font-weight:var(--fw-medium); margin-bottom:var(--space-3);"><?= $leader['role'] ?></p>
              <p style="font-size:var(--fs-xs); color:var(--color-text-muted); line-height:var(--lh-normal);"><?= $leader['bio'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== GLOBAL PRESENCE ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Global Reach', 'Our Global Presence', 'Serving healthcare needs across continents with dedication and excellence.') ?>

        <div class="stat-grid reveal">
          <?= renderStat('50+', 'Countries') ?>
          <?= renderStat('15+', 'Manufacturing Sites') ?>
          <?= renderStat('25+', 'Years Experience') ?>
          <?= renderStat('10,000+', 'Team Members') ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Join Our Journey',
          'Be part of a team that is making a real difference in global healthcare. Explore career opportunities with PharmaCorp.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
