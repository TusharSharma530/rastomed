<?php
/**
 * Quality Page - PharmaCorp
 */
require_once __DIR__ . '/includes/components.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp quality assurance - WHO-GMP, US FDA, and EU certified pharmaceutical manufacturing.">
  <title>Quality Assurance - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Quality Assurance', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Quality', 'url' => 'quality.php'],
    ]) ?>

    <!-- Quality Commitment -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">Quality First</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">Uncompromising Commitment to Quality</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              At PharmaCorp, quality is not just a department — it is embedded in every process, every product, and every decision we make. Our Quality Management System ensures that every product meets the highest international standards.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed);">
              From raw material sourcing to final product release, our multi-layered quality processes guarantee that only safe, effective, and consistent medicines reach patients.
            </p>
          </div>
          <div class="reveal reveal--right" style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
            <div style="text-align:center; padding:var(--space-8);">
              <div style="width:80px; height:80px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-accent), var(--color-accent-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2rem;">&#10003;</div>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Quality Lab Image</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Certifications -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Certifications', 'Our Quality Certifications', 'Recognized by leading international regulatory bodies.') ?>

        <div class="grid grid--4 reveal">
          <?php
          $certs = [
            ['name' => 'WHO-GMP', 'desc' => 'World Health Organization Good Manufacturing Practices', 'icon' => '&#9733;'],
            ['name' => 'US FDA', 'desc' => 'US Food and Drug Administration approved facility', 'icon' => '&#10003;'],
            ['name' => 'EU GMP', 'desc' => 'European Union Good Manufacturing Practice compliance', 'icon' => '&#9830;'],
            ['name' => 'ISO 9001', 'desc' => 'International quality management system standard', 'icon' => '&#9826;'],
          ];
          foreach ($certs as $cert): ?>
            <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); padding:var(--space-6); text-align:center; transition: all var(--transition-base);" class="card-hover-target">
              <div style="width:64px; height:64px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:1.5rem;"><?= $cert['icon'] ?></div>
              <h4 style="font-size:var(--fs-body); margin-bottom:var(--space-2);"><?= $cert['name'] ?></h4>
              <p style="font-size:var(--fs-xs); color:var(--color-text-muted); line-height:var(--lh-normal);"><?= $cert['desc'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Quality Process -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Our Process', 'Quality Control Process', 'Multi-stage quality checks ensuring product safety and efficacy.') ?>

        <div class="grid grid--3 reveal">
          <?php
          $steps = [
            ['num' => '01', 'title' => 'Raw Material Testing', 'desc' => 'Every incoming raw material undergoes rigorous testing for identity, purity, and quality before approval for use.'],
            ['num' => '02', 'title' => 'In-Process Control', 'desc' => 'Continuous monitoring during manufacturing ensures consistency and adherence to specifications at every stage.'],
            ['num' => '03', 'title' => 'Finished Product Release', 'desc' => 'Final products are tested against pharmacopeial standards before release, with complete batch documentation.'],
          ];
          foreach ($steps as $step): ?>
            <div style="position:relative; background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); padding:var(--space-8); transition: all var(--transition-base);" class="card-hover-target">
              <span style="position:absolute; top:var(--space-5); right:var(--space-5); font-size:3rem; font-weight:800; color:rgba(var(--color-primary-rgb), 0.08); line-height:1;"><?= $step['num'] ?></span>
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-3); position:relative;"><?= $step['title'] ?></h3>
              <p style="font-size:var(--fs-small); color:var(--color-text-muted); line-height:var(--lh-normal); position:relative;"><?= $step['desc'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Quality Documentation',
          'Request detailed quality documentation, certificates of analysis, and regulatory compliance information.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
