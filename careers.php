<?php
/**
 * Careers Page - PharmaCorp
 * Build the Future of Healthcare With Us
 */
require_once __DIR__ . '/includes/components.php';

$whyJoin = [
    ['icon' => '&#9733;', 'title' => 'Growth Opportunities', 'description' => 'Accelerated career paths with mentorship programs and leadership development initiatives.'],
    ['icon' => '&#128218;', 'title' => 'Learning & Development', 'description' => 'Continuous skill enhancement through training programs, workshops, and industry conferences.'],
    ['icon' => '&#127968;', 'title' => 'Workplace Culture', 'description' => 'Inclusive, collaborative environment that values diversity, innovation, and work-life balance.'],
    ['icon' => '&#128176;', 'title' => 'Competitive Benefits', 'description' => 'Comprehensive compensation packages including health benefits, retirement plans, and wellness programs.'],
    ['icon' => '&#127758;', 'title' => 'Global Exposure', 'description' => 'Opportunity to work across international markets and collaborate with global teams.'],
    ['icon' => '&#128161;', 'title' => 'Innovation Driven', 'description' => 'Be part of cutting-edge pharmaceutical research and development that impacts millions of lives.'],
];

$jobs = [
    [
        'title' => 'Medical Representative',
        'department' => 'Sales & Marketing',
        'location' => 'Mumbai, India',
        'type' => 'Full-time',
        'experience' => '1-3 years',
        'icon' => '&#128105;&#8205;&#9877;&#65039;',
    ],
    [
        'title' => 'Quality Executive',
        'department' => 'Quality Assurance',
        'location' => 'Pune, India',
        'type' => 'Full-time',
        'experience' => '2-4 years',
        'icon' => '&#10003;',
    ],
    [
        'title' => 'Research Associate',
        'department' => 'R&D',
        'location' => 'Hyderabad, India',
        'type' => 'Full-time',
        'experience' => '0-2 years',
        'icon' => '&#128300;',
    ],
    [
        'title' => 'Production Executive',
        'department' => 'Manufacturing',
        'location' => 'Ahmedabad, India',
        'type' => 'Full-time',
        'experience' => '2-5 years',
        'icon' => '&#9881;',
    ],
    [
        'title' => 'Regulatory Affairs Specialist',
        'department' => 'Regulatory',
        'location' => 'Delhi, India',
        'type' => 'Full-time',
        'experience' => '3-6 years',
        'icon' => '&#128220;',
    ],
    [
        'title' => 'Data Analyst',
        'department' => 'IT & Analytics',
        'location' => 'Bangalore, India',
        'type' => 'Full-time',
        'experience' => '1-3 years',
        'icon' => '&#128202;',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Join PharmaCorp - Build the future of healthcare with a career in pharmaceutical innovation.">
  <title>Careers - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Careers', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Careers', 'url' => 'careers.php'],
    ], 'Build the Future of Healthcare With Us') ?>

    <!-- ========== WHY JOIN US ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Why PharmaCorp', 'Why Join Our Team', 'A workplace that values your growth, celebrates your contributions, and supports your aspirations.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($whyJoin as $item): ?>
            <div class="culture-card">
              <div class="culture-card__icon"><?= $item['icon'] ?></div>
              <h4 class="culture-card__title"><?= $item['title'] ?></h4>
              <p class="culture-card__desc"><?= $item['description'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== OUR CULTURE ========== -->
    <section class="section section--alt">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">Life at PharmaCorp</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">A Culture of Innovation & Care</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              At PharmaCorp, we believe that our people are our greatest asset. We foster an environment where curiosity is encouraged, ideas are valued, and every team member can make a meaningful impact on global healthcare.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              Our teams work collaboratively across departments and geographies, united by our passion for improving lives through pharmaceutical excellence.
            </p>
            <div style="display:flex; gap:var(--space-8);">
              <div style="text-align:center;">
                <div style="font-size:var(--fs-h3); font-weight:800; color:var(--color-primary);">10K+</div>
                <div style="font-size:var(--fs-xs); color:var(--color-text-muted);">Team Members</div>
              </div>
              <div style="text-align:center;">
                <div style="font-size:var(--fs-h3); font-weight:800; color:var(--color-primary);">50+</div>
                <div style="font-size:var(--fs-xs); color:var(--color-text-muted);">Countries</div>
              </div>
              <div style="text-align:center;">
                <div style="font-size:var(--fs-h3); font-weight:800; color:var(--color-primary);">90%</div>
                <div style="font-size:var(--fs-xs); color:var(--color-text-muted);">Satisfaction</div>
              </div>
            </div>
          </div>
          <div class="reveal reveal--right" style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
            <div style="text-align:center; padding:var(--space-8);">
              <div style="width:80px; height:80px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2rem;">&#127968;</div>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Team Culture Image</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== OPEN POSITIONS ========== -->
    <section id="openings" class="section">
      <div class="container">
        <?= renderSectionHeader('Open Positions', 'Current Opportunities', 'Find a role that matches your skills, experience, and career aspirations.') ?>

        <div class="grid grid--2 reveal">
          <?php foreach ($jobs as $job): ?>
            <div class="job-card">
              <div class="job-card__header">
                <div class="job-card__icon"><?= $job['icon'] ?></div>
              </div>
              <h4 class="job-card__title"><?= $job['title'] ?></h4>
              <div class="job-card__dept"><?= $job['department'] ?></div>
              <div class="job-card__meta">
                <div class="job-card__meta-item">
                  <svg class="job-card__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                  <?= $job['location'] ?>
                </div>
                <div class="job-card__meta-item">
                  <svg class="job-card__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  <?= $job['type'] ?>
                </div>
                <div class="job-card__meta-item">
                  <svg class="job-card__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                  <?= $job['experience'] ?>
                </div>
              </div>
              <?= renderButton('Apply Now', 'contact.php', 'primary', 'sm') ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Dont See Your Role?',
          'We are always looking for talented individuals. Send us your resume and we will keep you in mind for future opportunities that match your skills.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
