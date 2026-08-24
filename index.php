<?php
/**
 * Homepage - PharmaCorp
 * Premium Pharmaceutical Corporate Website
 */
require_once __DIR__ . '/includes/components.php';

$stats = [
    ['number' => 25, 'label' => 'Years of Excellence', 'suffix' => '+'],
    ['number' => 100, 'label' => 'Products Manufactured', 'suffix' => '+'],
    ['number' => 15, 'label' => 'Therapeutic Areas', 'suffix' => '+'],
    ['number' => 5, 'label' => 'Manufacturing Capabilities', 'suffix' => '+'],
];

$values = [
    ['icon' => '&#9733;', 'title' => 'Quality', 'description' => 'Every product meets the highest international standards of safety, purity, and efficacy through rigorous quality control processes.'],
    ['icon' => '&#9878;', 'title' => 'Innovation', 'description' => 'Continuously investing in R&D to develop advanced formulations and drug delivery systems that improve patient outcomes.'],
    ['icon' => '&#9830;', 'title' => 'Integrity', 'description' => 'Operating with transparency and ethical practices in every aspect of our business, from sourcing to distribution.'],
    ['icon' => '&#10022;', 'title' => 'Excellence', 'description' => 'Striving for the highest standards in manufacturing, research, and customer service across all operations.'],
    ['icon' => '&#9829;', 'title' => 'Patient First', 'description' => 'Designing every process and product with the patient\'s well-being and safety as the central priority.'],
    ['icon' => '&#9764;', 'title' => 'Responsibility', 'description' => 'Committed to sustainable practices and environmental stewardship in pharmaceutical manufacturing.'],
];

$products = [
    [
        'id' => 1,
        'name' => 'CardioShield Plus',
        'category' => 'Tablets',
        'therapy' => 'Cardiology',
        'description' => 'Advanced cardiovascular medication for managing hypertension and reducing cardiac risk factors.',
        'badge' => 'Best Seller',
        'icon' => '&#9829;',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset.',
        'badge' => '',
        'icon' => '&#9736;',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Tablets',
        'therapy' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization.',
        'badge' => 'New',
        'icon' => '&#9883;',
    ],
];

$features = [
    ['icon' => '&#9733;', 'title' => 'Pharmaceutical Expertise', 'description' => 'Over two decades of specialized experience in pharmaceutical development, manufacturing, and distribution across global markets.'],
    ['icon' => '&#10003;', 'title' => 'Quality Focus', 'description' => 'Rigorous quality management systems at every stage, from raw material sourcing to final product release and post-market surveillance.'],
    ['icon' => '&#9878;', 'title' => 'Innovation', 'description' => 'State-of-the-art R&D facilities driving continuous innovation in drug delivery, formulation science, and therapeutic solutions.'],
    ['icon' => '&#9830;', 'title' => 'Strong Portfolio', 'description' => 'Diverse product portfolio spanning multiple therapeutic areas, catering to varied healthcare needs and patient demographics.'],
    ['icon' => '&#9829;', 'title' => 'Patient-Centric Approach', 'description' => 'Every decision is guided by our commitment to improving patient outcomes and enhancing quality of life through accessible medicines.'],
    ['icon' => '&#9881;', 'title' => 'Reliable Manufacturing', 'description' => 'WHO-GMP compliant manufacturing facilities ensuring consistent quality, timely supply, and scalable production capacity.'],
    ['icon' => '&#9830;', 'title' => 'Ethical Practices', 'description' => 'Transparent operations, fair pricing, and responsible marketing practices that uphold the highest ethical standards in the industry.'],
];

$qualityFeatures = [
    ['icon' => '&#10003;', 'title' => 'Quality Assurance', 'description' => 'Comprehensive quality management system covering all aspects of pharmaceutical manufacturing.'],
    ['icon' => '&#128270;', 'title' => 'Quality Control', 'description' => 'State-of-the-art analytical laboratories with advanced instrumentation for rigorous testing.'],
    ['icon' => '&#9989;', 'title' => 'GMP Compliance', 'description' => 'Strict adherence to Good Manufacturing Practices across all production facilities.'],
    ['icon' => '&#128220;', 'title' => 'Regulatory Compliance', 'description' => 'Full compliance with national and international regulatory requirements and guidelines.'],
    ['icon' => '&#9881;', 'title' => 'Manufacturing Standards', 'description' => 'Advanced manufacturing processes with continuous monitoring and process optimization.'],
    ['icon' => '&#128260;', 'title' => 'Continuous Improvement', 'description' => 'Ongoing enhancement of processes, systems, and outcomes through data-driven decision making.'],
];

$sustainabilityItems = [
    ['icon' => '&#127793;', 'title' => 'Environmental Responsibility', 'description' => 'Minimizing our environmental footprint through sustainable practices and green manufacturing.', 'color' => 'green'],
    ['icon' => '&#128106;', 'title' => 'Community Healthcare', 'description' => 'Providing accessible healthcare solutions to underserved communities worldwide.', 'color' => 'blue'],
    ['icon' => '&#128588;', 'title' => 'Employee Wellbeing', 'description' => 'Fostering a safe, inclusive workplace that promotes health and professional growth.', 'color' => 'primary'],
    ['icon' => '&#9881;', 'title' => 'Responsible Manufacturing', 'description' => 'Implementing eco-efficient processes and waste reduction across all operations.', 'color' => 'green'],
    ['icon' => '&#128640;', 'title' => 'Sustainable Growth', 'description' => 'Balancing business growth with social responsibility and environmental stewardship.', 'color' => 'blue'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp - Advancing healthcare through scientific innovation, quality manufacturing, and commitment to improving lives worldwide.">
  <title>PharmaCorp - Advancing Healthcare</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- ========== HERO ========== -->
    <section class="hero" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));">
      <!-- Background Pattern -->
      <div style="position:absolute; inset:0; background: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;); opacity:0.5;"></div>

      <!-- Floating Particles -->
      <div class="hero__particles">
        <div class="hero__particle"></div>
        <div class="hero__particle"></div>
        <div class="hero__particle"></div>
        <div class="hero__particle"></div>
      </div>

      <!-- Gradient Overlay -->
      <div style="position:absolute; bottom:-1px; left:0; right:0; height:120px; background:linear-gradient(to top, var(--color-bg), transparent); z-index:1;"></div>

      <!-- Hero Content -->
      <div class="container" style="position:relative; z-index:2; padding-top: calc(var(--header-height) + 4rem); padding-bottom: 6rem;">
        <div style="display:grid; grid-template-columns: 1.2fr 1fr; gap:var(--space-12); align-items:center;">
          <div>
            <span class="section-label" style="color:rgba(255,255,255,0.9); margin-bottom:var(--space-6);">
              <span style="display:inline-block; width:2rem; height:2px; background:rgba(255,255,255,0.9); border-radius:999px;"></span>
              PHARMACEUTICAL EXCELLENCE
            </span>
            <h1 style="font-size:var(--fs-hero); font-weight:800; color:#fff; line-height:1.08; margin-bottom:var(--space-6); letter-spacing:-0.03em;">
              Advancing Healthcare Through Quality, Innovation &amp; Care
            </h1>
            <p style="font-size:clamp(1rem, 1.2vw + 0.3rem, 1.2rem); color:rgba(255,255,255,0.85); line-height:1.75; max-width:540px; margin-bottom:var(--space-8);">
              Delivering high-quality pharmaceutical products with a commitment to scientific excellence, patient safety, and global healthcare standards. Your trusted partner in better health.
            </p>
            <div style="display:flex; gap:var(--space-4); flex-wrap:wrap;">
              <?= renderButton('Explore Products', 'products.php', 'white', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
              <?= renderButton('Discover Our Story', 'about.php', 'outline-white', 'lg') ?>
            </div>
          </div>

          <!-- Hero Visual -->
          <div style="display:flex; align-items:center; justify-content:center;">
            <div style="position:relative; width:100%; max-width:440px;">
              <div style="background:rgba(255,255,255,0.08); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.15); border-radius:var(--radius-2xl); padding:var(--space-10); text-align:center;">
                <div style="width:100px; height:100px; margin:0 auto var(--space-6); background:rgba(255,255,255,0.15); border-radius:var(--radius-2xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2.5rem; border:2px solid rgba(255,255,255,0.2);">P</div>
                <div style="color:#fff; font-size:var(--fs-h3); font-weight:700; margin-bottom:var(--space-2);">PharmaCorp</div>
                <div style="color:rgba(255,255,255,0.7); font-size:var(--fs-small);">Advancing Lives Through Science</div>
                <div style="display:flex; justify-content:center; gap:var(--space-6); margin-top:var(--space-8);">
                  <div style="text-align:center;">
                    <div style="font-size:var(--fs-h3); font-weight:800; color:#fff;">25+</div>
                    <div style="font-size:var(--fs-xs); color:rgba(255,255,255,0.7);">Years</div>
                  </div>
                  <div style="width:1px; background:rgba(255,255,255,0.2);"></div>
                  <div style="text-align:center;">
                    <div style="font-size:var(--fs-h3); font-weight:800; color:#fff;">100+</div>
                    <div style="font-size:var(--fs-xs); color:rgba(255,255,255,0.7);">Products</div>
                  </div>
                  <div style="width:1px; background:rgba(255,255,255,0.2);"></div>
                  <div style="text-align:center;">
                    <div style="font-size:var(--fs-h3); font-weight:800; color:#fff;">15+</div>
                    <div style="font-size:var(--fs-xs); color:rgba(255,255,255,0.7);">Areas</div>
                  </div>
                </div>
              </div>
              <!-- Floating badge -->
              <div style="position:absolute; top:-16px; right:-16px; background:#fff; border-radius:var(--radius-xl); padding:var(--space-3) var(--space-4); box-shadow:0 8px 24px rgba(0,0,0,0.15); display:flex; align-items:center; gap:var(--space-2); font-size:var(--fs-xs); font-weight:600; color:var(--color-primary);">
                <span style="width:28px; height:28px; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-primary-rgb), 0.1); border-radius:var(--radius-full);">&#10003;</span>
                WHO-GMP Certified
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Trust Badge -->
      <div class="hero__trust-badge">
        <span class="hero__trust-icon">&#128737;</span>
        Trusted by 500+ Healthcare Partners Worldwide
      </div>
    </section>

    <!-- ========== TRUST STATISTICS ========== -->
    <section class="section" style="margin-top: -2rem; position: relative; z-index: 2;">
      <div class="container">
        <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-2xl); padding: clamp(2rem, 4vw, 3rem); box-shadow:var(--shadow-xl);">
          <div class="stat-grid">
            <?php foreach ($stats as $stat): ?>
              <?= renderAnimatedStat($stat['number'], $stat['label'], $stat['prefix'] ?? '', $stat['suffix'] ?? '') ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ABOUT PREVIEW ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:center;">
          <div class="reveal reveal--left">
            <span class="section-label">About PharmaCorp</span>
            <h2 style="font-size:var(--fs-h2); margin-bottom:var(--space-4);">A Legacy of Pharmaceutical Excellence</h2>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Founded with a vision to make quality healthcare accessible, PharmaCorp has grown into a globally recognized pharmaceutical company serving patients across multiple continents.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
              Our mission is to discover, develop, and deliver high-quality pharmaceutical products that address critical healthcare needs while maintaining the highest standards of ethics and sustainability.
            </p>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-8);">
              From drug discovery to manufacturing, we maintain rigorous quality processes ensuring safe and effective medicines reach those who need them most.
            </p>
            <?= renderButton('Discover Our Story', 'about.php', 'primary', '', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
          </div>
          <div class="reveal reveal--right" style="position:relative;">
            <div style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:4/3; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light);">
              <div style="text-align:center; padding:var(--space-8);">
                <div style="width:80px; height:80px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:2rem;">P</div>
                <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Company Image Placeholder</p>
              </div>
            </div>
            <!-- Floating stat -->
            <div style="position:absolute; bottom:-20px; left:-20px; background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); padding:var(--space-4) var(--space-5); box-shadow:var(--shadow-lg); display:flex; align-items:center; gap:var(--space-3);">
              <div style="width:44px; height:44px; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-primary-rgb), 0.1); border-radius:var(--radius-lg); color:var(--color-primary); font-size:1.25rem;">&#9733;</div>
              <div>
                <div style="font-size:var(--fs-h4); font-weight:700; color:var(--color-text);">25+ Years</div>
                <div style="font-size:var(--fs-xs); color:var(--color-text-muted);">of Trusted Healthcare</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== CORE VALUES ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Our Values', 'Built on Principles That Matter', 'The core values that guide every decision we make and every product we deliver.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($values as $value): ?>
            <?= renderValueCard($value['icon'], $value['title'], $value['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== PRODUCT PORTFOLIO ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Our Products', 'Comprehensive Pharmaceutical Solutions', 'From essential medicines to specialized therapies, our diverse product portfolio addresses critical healthcare needs across multiple therapeutic areas.') ?>

        <div class="product-grid reveal">
          <?php foreach ($products as $product): ?>
            <?= renderFilterableProductCard($product) ?>
          <?php endforeach; ?>
        </div>

        <div style="text-align:center; margin-top:var(--space-10);">
          <?= renderButton('View All Products', 'products.php', 'secondary', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
        </div>
      </div>
    </section>

    <!-- ========== QUALITY SECTION ========== -->
    <section class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Quality Assurance', 'Quality Is at the Heart of Everything We Do', 'Our commitment to quality spans every aspect of pharmaceutical manufacturing, from raw materials to finished products.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($qualityFeatures as $qf): ?>
            <?= renderQualityFeature($qf['icon'], $qf['title'], $qf['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== SUSTAINABILITY SECTION ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Sustainability', 'Committed to a Healthier Planet', 'Sustainability is at the core of our operations, guiding how we manufacture, innovate, and serve communities.') ?>

        <div class="grid grid--3 reveal">
          <?php foreach ($sustainabilityItems as $item): ?>
            <?= renderSustainCard($item['icon'], $item['title'], $item['description'], $item['color']) ?>
          <?php endforeach; ?>
        </div>

        <div style="text-align:center; margin-top:var(--space-10);">
          <?= renderButton('Our Sustainability Commitment', 'about.php#sustainability', 'secondary', 'lg', '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>') ?>
        </div>
      </div>
    </section>

    <!-- ========== WHY CHOOSE US ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Why PharmaCorp', 'Why Leading Healthcare Partners Choose Us', 'A combination of expertise, quality, and commitment that sets us apart in the pharmaceutical industry.') ?>

        <div class="grid grid--2 reveal" style="gap:var(--space-5);">
          <?php foreach ($features as $feature): ?>
            <?= renderFeatureCard($feature['icon'], $feature['title'], $feature['description']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Partner With PharmaCorp',
          'Whether you are looking for quality pharmaceutical products, exploring partnership opportunities, or seeking career growth, we would love to connect.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
