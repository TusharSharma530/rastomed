<?php
/**
 * Careers Page - PharmaCorp Enterprise
 * Opportunities to join our global pharmaceutical team
 */
require_once __DIR__ . '/includes/components.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Careers', 'url' => 'careers.php'],
];

$benefits = [
    [
        'icon' => '&#128161;',
        'title' => 'Scientific Innovation',
        'description' => 'Work alongside leading pharmaceutical scientists and R&D experts on cutting-edge formulations.',
    ],
    [
        'icon' => '&#127757;',
        'title' => 'Global Impact',
        'description' => 'Contribute to healthcare solutions that improve the quality of life for millions across 50+ countries.',
    ],
    [
        'icon' => '&#128200;',
        'title' => 'Career Acceleration',
        'description' => 'Structured leadership programs, continuous training, and transparent career advancement pathways.',
    ],
    [
        'icon' => '&#9878;',
        'title' => 'Comprehensive Benefits',
        'description' => 'Competitive compensation, medical insurance, wellness stipends, and flexible work life balance.',
    ],
];

$openings = [
    [
        'title' => 'Senior Formulation Scientist (R&D)',
        'department' => 'Research & Development',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '5-8 Years',
        'description' => 'Lead solid oral dosage formulation development, bioequivalence studies, and technology transfer.',
    ],
    [
        'title' => 'Quality Assurance Manager (WHO-GMP)',
        'department' => 'Quality Assurance',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '7-10 Years',
        'description' => 'Oversee plant compliance, audit readiness, batch release protocols, and international regulatory filings.',
    ],
    [
        'title' => 'Global Business Development Executive',
        'department' => 'International Sales',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '3-5 Years',
        'description' => 'Drive export market expansion, distributor partnerships, and international product licensing in LATAM & SEA.',
    ],
    [
        'title' => 'Regulatory Affairs Specialist',
        'department' => 'Regulatory Affairs',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '4-6 Years',
        'description' => 'Prepare CTD/eCTD dossier submissions, respond to health authority queries, and manage market authorizations.',
    ],
    [
        'title' => 'Production Supervisor (Tableting & Capsules)',
        'department' => 'Manufacturing',
        'location' => 'Pune, India',
        'type' => 'Full-time',
        'experience' => '3-5 Years',
        'description' => 'Supervise daily shift operations in automated tableting compression and hard gelatin encapsulation lines.',
    ],
    [
        'title' => 'Clinical Research Associate',
        'department' => 'Clinical Trials',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '2-4 Years',
        'description' => 'Monitor Phase III bioequivalence clinical trials, ensure GCP compliance, and coordinate site operations.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Build your career at PharmaCorp. Explore global pharmaceutical career opportunities in R&amp;D, QA, Manufacturing, and Sales.">
  <title>Careers &amp; Opportunities - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Page Hero -->
    <?= renderPageHero('Careers at PharmaCorp', $breadcrumbs, 'Shape the future of global healthcare with an organization driven by innovation, integrity, and scientific excellence.') ?>

    <!-- Why Work With Us -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Why Join Us</span>
          <h2 class="section__title">Empowering Growth &amp; Innovation</h2>
        </div>
        <div class="rd-grid">
          <?php foreach ($benefits as $benefit): ?>
            <div class="rd-card reveal">
              <div class="rd-card__icon"><?= $benefit['icon'] ?></div>
              <h3 class="rd-card__title"><?= $benefit['title'] ?></h3>
              <p class="rd-card__text"><?= $benefit['description'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Open Positions -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Current Openings</span>
          <h2 class="section__title">Explore Career Opportunities</h2>
        </div>

        <div class="rd-grid">
          <?php foreach ($openings as $job): ?>
            <div class="rd-card reveal">
              <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:var(--space-3);">
                <span class="trust-pill" style="font-size:10px;"><?= htmlspecialchars($job['department']) ?></span>
                <span style="font-size:var(--fs-xs); color:var(--color-text-muted); font-weight:600;"><?= htmlspecialchars($job['type']) ?></span>
              </div>
              <h3 class="rd-card__title" style="margin-bottom:var(--space-2);"><?= htmlspecialchars($job['title']) ?></h3>
              <p style="font-size:var(--fs-small); color:var(--color-primary); font-weight:600; margin-bottom:var(--space-3);">
                📍 <?= htmlspecialchars($job['location']) ?> &bull; ⏱ <?= htmlspecialchars($job['experience']) ?>
              </p>
              <p class="rd-card__text" style="margin-bottom:var(--space-5);"><?= htmlspecialchars($job['description']) ?></p>
              <a href="contact.php?subject=Application+for+<?= urlencode($job['title']) ?>" class="btn btn--primary btn--sm" style="width:100%; text-align:center;">
                Apply For This Position
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Application Form Section -->
    <section class="section">
      <div class="container">
        <div class="cta-clean">
          <div class="cta-clean__content">
            <h2 class="cta-clean__title">Don't See a Matching Role?</h2>
            <p class="cta-clean__text">We are always searching for passionate scientists, engineers, regulatory experts, and business leaders. Send us your CV for general consideration.</p>
            <div class="cta-clean__buttons">
              <?= renderButton('Submit Resume', 'contact.php', 'primary', 'lg') ?>
              <?= renderButton('Contact HR Team', 'mailto:careers@pharmacorp.com', 'outline', 'lg') ?>
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
