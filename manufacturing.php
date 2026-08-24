<?php
/**
 * Manufacturing Page - PharmaCorp
 * Manufacturing Excellence & Capabilities
 */
require_once __DIR__ . '/includes/components.php';

$capabilities = [
    ['icon' => '&#9673;', 'title' => 'Oral Solid Dosage', 'description' => 'Tablets, capsules, and granules with advanced coating and sustained-release technologies.'],
    ['icon' => '&#9878;', 'title' => 'Injectables', 'description' => 'Sterile injectable manufacturing in state-of-the-art cleanroom environments.'],
    ['icon' => '&#9832;', 'title' => 'Oral Liquids', 'description' => 'Syrups, suspensions, and solutions with precise formulation control.'],
    ['icon' => '&#9752;', 'title' => 'Topicals', 'description' => 'Creams, ointments, gels, and patches for dermatological applications.'],
    ['icon' => '&#9877;', 'title' => 'Medical Devices', 'description' => 'Complementary medical devices and combination products for enhanced patient care.'],
    ['icon' => '&#9635;', 'title' => 'Packaging', 'description' => 'Primary and secondary packaging with serialization and track-and-trace capabilities.'],
];

$qualitySystems = [
    ['icon' => '&#10003;', 'title' => 'GMP Compliance', 'description' => 'Strict adherence to Good Manufacturing Practices across all production facilities.'],
    ['icon' => '&#128270;', 'title' => 'Quality Control', 'description' => 'In-process and finished product testing with advanced analytical instrumentation.'],
    ['icon' => '&#128737;', 'title' => 'Safety Protocols', 'description' => 'Comprehensive safety measures protecting workers and products throughout manufacturing.'],
    ['icon' => '&#9881;', 'title' => 'Technology', 'description' => 'Automated systems and modern equipment ensuring precision and efficiency.'],
    ['icon' => '&#128260;', 'title' => 'Continuous Improvement', 'description' => 'Ongoing optimization of processes through lean manufacturing and Six Sigma methodologies.'],
    ['icon' => '&#128203;', 'title' => 'Documentation', 'description' => 'Complete batch records and traceability for every product manufactured.'],
];

$stats = [
    ['number' => 15, 'label' => 'Manufacturing Sites', 'suffix' => '+'],
    ['number' => 500, 'label' => 'Production Lines', 'suffix' => '+'],
    ['number' => 2, 'label' => 'Million Units Daily', 'suffix' => 'M+'],
    ['number' => 99, 'label' => 'Quality Pass Rate', 'suffix' => '.8%'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Manufacturing - State-of-the-art pharmaceutical manufacturing with quality systems and advanced technology.">
  <title>Manufacturing - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Manufacturing', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Manufacturing', 'url' => 'manufacturing.php'],
    ], 'World-class pharmaceutical production combining advanced technology with rigorous quality standards.') ?>

    <!-- ========== MANUFACTURING EXCELLENCE ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">World-Class Facilities</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">Manufacturing Excellence</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Our manufacturing facilities represent the pinnacle of pharmaceutical production technology. Equipped with cutting-edge machinery and operated by trained professionals, we deliver consistent quality at scale.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              From oral solid dosage forms to sterile injectables, our diverse manufacturing capabilities enable us to produce a wide range of pharmaceutical products meeting global standards.
            </p>
            <?= renderButton('Our Products', 'products.php', 'secondary') ?>
          </div>
          <div class="reveal reveal--right" style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
            <div style="text-align:center; padding:var(--space-8);">
              <div style="width:100px; height:100px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-2xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2.5rem;">&#9881;</div>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Manufacturing Facility Image</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== MANUFACTURING STATS ========== -->
    <section class="section section--alt">
      <div class="container">
        <div class="stat-grid reveal">
          <?php foreach ($stats as $stat): ?>
            <?= renderAnimatedStat($stat['number'], $stat['label'], $stat['prefix'] ?? '', $stat['suffix'] ?? '') ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PRODUCTION CAPABILITIES ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Capabilities', 'Production Capabilities', 'Comprehensive pharmaceutical production across multiple dosage forms and delivery systems.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($capabilities as $cap): ?>
            <?= renderFeatureCard($cap['icon'], $cap['title'], $cap['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== QUALITY SYSTEMS ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Quality', 'Quality & Safety Systems', 'Multi-layered quality processes ensuring product safety and regulatory compliance.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($qualitySystems as $qs): ?>
            <?= renderQualityFeature($qs['icon'], $qs['title'], $qs['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== GMP SECTION ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--right" style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
            <div style="text-align:center; padding:var(--space-8);">
              <div style="width:100px; height:100px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-accent), var(--color-accent-dark)); border-radius:var(--radius-2xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2.5rem;">&#10003;</div>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small);">GMP Compliance Image</p>
            </div>
          </div>
          <div class="reveal reveal--left">
            <span class="section-label">Compliance</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">GMP & Regulatory Standards</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Our manufacturing operations comply with international Good Manufacturing Practice (GMP) standards. We maintain rigorous quality systems that meet or exceed regulatory requirements across all markets we serve.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              Regular internal and external audits ensure continuous compliance, while our quality management system provides complete traceability for every product manufactured.
            </p>
            <div style="display:flex; flex-direction:column; gap:var(--space-3);">
              <?php
              $gmpItems = ['WHO-GMP Guidelines', 'ISO Quality Management', 'Environmental Compliance', 'Data Integrity Standards'];
              foreach ($gmpItems as $item): ?>
                <div style="display:flex; align-items:center; gap:var(--space-3);">
                  <span style="width:22px; height:22px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-primary-rgb), 0.1); border-radius:var(--radius-full); color:var(--color-primary); font-size:0.7rem;">&#10003;</span>
                  <span style="font-size:var(--fs-small); color:var(--color-text-secondary);"><?= $item ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Contract Manufacturing',
          'Looking for contract manufacturing services? We offer end-to-end solutions from development to commercial supply with full regulatory support.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
