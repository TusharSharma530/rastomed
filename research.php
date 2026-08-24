<?php
/**
 * Research & Development Page - PharmaCorp
 * Innovation That Moves Healthcare Forward
 */
require_once __DIR__ . '/includes/components.php';

$processSteps = [
    ['icon' => '&#128300;', 'label' => 'Research', 'sublabel' => 'Exploration'],
    ['icon' => '&#128161;', 'label' => 'Discovery', 'sublabel' => 'Identification'],
    ['icon' => '&#9881;', 'label' => 'Development', 'sublabel' => 'Formulation'],
    ['icon' => '&#128200;', 'label' => 'Testing', 'sublabel' => 'Validation'],
    ['icon' => '&#10003;', 'label' => 'Quality', 'sublabel' => 'Assurance'],
    ['icon' => '&#9829;', 'label' => 'Healthcare', 'sublabel' => 'Delivery'],
];

$capabilities = [
    ['icon' => '&#128300;', 'title' => 'Drug Discovery', 'description' => 'High-throughput screening and computational chemistry to identify novel therapeutic targets and promising drug candidates.'],
    ['icon' => '&#9881;', 'title' => 'Preclinical Research', 'description' => 'Comprehensive in-vitro and in-vivo studies, pharmacokinetics, and toxicology assessments for candidate evaluation.'],
    ['icon' => '&#128202;', 'title' => 'Clinical Development', 'description' => 'Phase I-III clinical trials with global site management, patient recruitment, and regulatory expertise.'],
    ['icon' => '&#128300;', 'title' => 'Formulation Science', 'description' => 'Advanced drug delivery systems, stability studies, and bioavailability optimization for enhanced therapeutic outcomes.'],
    ['icon' => '&#9879;', 'title' => 'Analytical Development', 'description' => 'Method development and validation for quality control, stability testing, and regulatory submissions.'],
    ['icon' => '&#128203;', 'title' => 'Regulatory Affairs', 'description' => 'Global regulatory strategy, dossier preparation, and lifecycle management for market approvals.'],
];

$timeline = [
    ['year' => 'Phase I', 'title' => 'First-in-Human Studies', 'description' => 'Initial safety and tolerability studies in healthy volunteers to determine safe dosage ranges.'],
    ['year' => 'Phase II', 'title' => 'Proof of Concept', 'description' => 'Efficacy and safety evaluation in patients with the target condition, optimizing dose-response.'],
    ['year' => 'Phase III', 'title' => 'Pivotal Trials', 'description' => 'Large-scale confirmatory trials across multiple centers to establish efficacy and safety profile.'],
    ['year' => 'Phase IV', 'title' => 'Post-Market', 'description' => 'Ongoing surveillance and real-world evidence collection after market approval.'],
];

$stats = [
    ['number' => 200, 'label' => 'Research Scientists', 'suffix' => '+'],
    ['number' => 50, 'label' => 'Active Projects', 'suffix' => '+'],
    ['number' => 15, 'label' => 'Patents Filed', 'suffix' => '+'],
    ['number' => 10, 'label' => 'Publications Yearly', 'suffix' => '+'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Research & Development - Innovation that moves healthcare forward through cutting-edge pharmaceutical research.">
  <title>Research & Development - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Research & Development', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'R&D', 'url' => 'research.php'],
    ], 'Pioneering pharmaceutical innovation through cutting-edge science and dedicated research.') ?>

    <!-- ========== R&D OVERVIEW ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">Innovation Hub</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">Innovation That Moves Healthcare Forward</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Our Research & Development division is the engine of innovation at PharmaCorp. With state-of-the-art laboratories and a team of world-class scientists, we are dedicated to discovering and developing therapies that address unmet medical needs.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              From early-stage drug discovery through clinical development, our integrated R&D approach accelerates the journey from concept to clinic, bringing hope to patients worldwide.
            </p>
            <?= renderButton('View Our Pipeline', '#', 'primary') ?>
          </div>
          <div class="reveal reveal--right" style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
            <div style="text-align:center; padding:var(--space-8);">
              <div style="width:100px; height:100px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-secondary), var(--color-secondary-dark)); border-radius:var(--radius-2xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2.5rem;">&#128300;</div>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">R&D Laboratory Image</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== PROCESS FLOW ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Our Process', 'From Research to Healthcare', 'A systematic approach to pharmaceutical innovation ensuring quality at every stage.') ?>

        <div class="process-flow reveal">
          <?php foreach ($processSteps as $index => $step): ?>
            <div class="process-flow__step">
              <div class="process-flow__icon"><?= $step['icon'] ?></div>
              <div class="process-flow__label"><?= $step['label'] ?></div>
              <div class="process-flow__sublabel"><?= $step['sublabel'] ?></div>
            </div>
            <?php if ($index < count($processSteps) - 1): ?>
              <div class="process-flow__arrow">&#8594;</div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== R&D STATISTICS ========== -->
    <section class="section">
      <div class="container">
        <div class="stat-grid reveal">
          <?php foreach ($stats as $stat): ?>
            <?= renderAnimatedStat($stat['number'], $stat['label'], $stat['prefix'] ?? '', $stat['suffix'] ?? '') ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CAPABILITIES ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Capabilities', 'Our R&D Capabilities', 'Integrated research infrastructure supporting the full drug development lifecycle.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($capabilities as $cap): ?>
            <?= renderFeatureCard($cap['icon'], $cap['title'], $cap['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== DEVELOPMENT TIMELINE ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Pipeline', 'Drug Development Timeline', 'From initial concept to patient delivery, our systematic approach ensures excellence.') ?>

        <div class="rd-timeline reveal">
          <?php foreach ($timeline as $item): ?>
            <div class="rd-timeline__item">
              <div class="rd-timeline__year"><?= $item['year'] ?></div>
              <div class="rd-timeline__content">
                <h4 class="rd-timeline__title"><?= $item['title'] ?></h4>
                <p class="rd-timeline__desc"><?= $item['description'] ?></p>
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
          'Collaborate With Us',
          'Interested in research partnerships, licensing opportunities, or academic collaborations? Our business development team is ready to explore synergies.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
