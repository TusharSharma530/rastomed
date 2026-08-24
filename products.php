<?php
/**
 * Products Page - PharmaCorp Enterprise
 * Enhanced with packaging renders, search, category & therapeutic filters
 */
require_once __DIR__ . '/includes/components.php';

$allProducts = [
    [
        'id' => 1,
        'name' => 'CardioShield Plus',
        'category' => 'Tablets',
        'therapy' => 'Cardiology',
        'description' => 'Advanced cardiovascular medication for managing hypertension and reducing cardiac risk factors in adult patients.',
        'badge' => 'Best Seller',
        'image' => 'assets/images/product-card-1.svg',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset and sustained relief.',
        'badge' => 'Popular',
        'image' => 'assets/images/product-card-2.svg',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Tablets',
        'therapy' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization with minimal side effects.',
        'badge' => 'New',
        'image' => 'assets/images/product-card-3.svg',
    ],
    [
        'id' => 4,
        'name' => 'OsteoFlex',
        'category' => 'Tablets',
        'therapy' => 'Orthopaedics',
        'description' => 'Joint health support formula designed to improve mobility and reduce discomfort in musculoskeletal conditions.',
        'badge' => 'High Demand',
        'image' => 'assets/images/product-card-4.svg',
    ],
    [
        'id' => 5,
        'name' => 'GastroEase',
        'category' => 'Syrups',
        'therapy' => 'Gastroenterology',
        'description' => 'Effective gastrointestinal treatment for GERD and peptic ulcer disease with improved patient compliance.',
        'badge' => '',
        'image' => 'assets/images/product-card-5.svg',
    ],
    [
        'id' => 6,
        'name' => 'GynoCare',
        'category' => 'Tablets',
        'therapy' => 'Gynaecology',
        'description' => 'Women\'s health formulation addressing hormonal balance and reproductive wellness support.',
        'badge' => '',
        'image' => 'assets/images/product-card-6.svg',
    ],
    [
        'id' => 7,
        'name' => 'CardioShield Max',
        'category' => 'Tablets',
        'therapy' => 'Cardiology',
        'description' => 'Next-generation cardiovascular therapy with enhanced bioavailability and improved patient outcomes.',
        'badge' => 'Launched 2026',
        'image' => 'assets/images/product-card-1.svg',
    ],
    [
        'id' => 8,
        'name' => 'RespiCare Lite',
        'category' => 'Syrups',
        'therapy' => 'General Medicine',
        'description' => 'Targeted pediatric and adult bronchodilator syrup for upper respiratory congestion.',
        'badge' => '',
        'image' => 'assets/images/product-card-2.svg',
    ],
    [
        'id' => 9,
        'name' => 'NeuroVita Plus',
        'category' => 'Capsules',
        'therapy' => 'Neurology',
        'description' => 'Novel neurological formulation targeting cognitive support and nerve health regeneration.',
        'badge' => 'Coming Soon',
        'image' => 'assets/images/product-card-3.svg',
    ],
];

$categories = array_unique(array_column($allProducts, 'category'));
sort($categories);

$therapies = array_unique(array_column($allProducts, 'therapy'));
sort($therapies);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore PharmaCorp's enterprise pharmaceutical portfolio across Cardiology, Respiratory, Neurology, Orthopaedics, Gastro, and Gynaecology.">
  <title>Pharmaceutical Products - PharmaCorp Enterprise</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Enterprise Product Portfolio', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Products', 'url' => 'products.php'],
    ], 'Browse WHO-GMP and ISO certified pharmaceutical formulations engineered for high bioavailability and therapeutic precision.') ?>

    <!-- ========== PRODUCT FILTERS & CATALOG ========== -->
    <section class="section">
      <div class="container">
        <!-- Filter Control Bar -->
        <div class="filter-bar reveal" style="background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-2xl); padding:var(--space-6); box-shadow:var(--shadow-md); margin-bottom:var(--space-10);">
          <div class="filter-bar__search">
            <svg class="filter-bar__search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" id="productSearch" class="filter-bar__search-input" placeholder="Search formulations by name or API...">
          </div>

          <select id="categoryFilter" class="filter-bar__select">
            <option value="">All Dosage Forms</option>
            <?php foreach ($categories as $cat): ?>
              <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
            <?php endforeach; ?>
          </select>

          <select id="therapyFilter" class="filter-bar__select">
            <option value="">All Therapeutic Segments</option>
            <?php foreach ($therapies as $therapy): ?>
              <option value="<?= htmlspecialchars($therapy) ?>"><?= htmlspecialchars($therapy) ?></option>
            <?php endforeach; ?>
          </select>

          <button id="clearFilters" class="filter-bar__clear">Reset Filters</button>
          <span id="productCount" class="filter-bar__count" style="font-weight:bold; color:var(--color-primary);"><?= count($allProducts) ?> Formulations Found</span>
        </div>

        <!-- ========== PRODUCT GRID ========== -->
        <div class="product-grid reveal">
          <?php foreach ($allProducts as $product): ?>
            <?= renderFilterableProductCard($product) ?>
          <?php endforeach; ?>
        </div>

        <!-- Empty Search State -->
        <div class="product-grid__empty" style="display:none; min-height:300px;">
          <div style="text-align:center; padding:var(--space-12);">
            <div style="width:64px; height:64px; margin:0 auto var(--space-4); display:flex; align-items:center; justify-content:center; background:var(--color-surface-alt); border-radius:var(--radius-full); font-size:1.5rem; color:var(--color-text-muted);">&#128269;</div>
            <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-2);">No Matching Formulations Found</h3>
            <p style="font-size:var(--fs-small); color:var(--color-text-muted);">Try resetting your search query or selecting a different dosage filter.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== THERAPEUTIC SPECIALIZATIONS ========== -->
    <section id="therapeutic" class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Therapeutic Domains', 'Specialized Healthcare Portfolios', 'Engineered across major therapeutic categories to deliver reliable clinical solutions globally.') ?>

        <div class="grid grid--3 reveal">
          <?= renderTherapyCard('&#9829;', 'Cardiology', '45+ Approved Products') ?>
          <?= renderTherapyCard('&#9736;', 'General Medicine', '40+ Approved Products') ?>
          <?= renderTherapyCard('&#9883;', 'Neurology', '25+ Approved Products') ?>
          <?= renderTherapyCard('&#129516;', 'Gastroenterology', '35+ Approved Products') ?>
          <?= renderTherapyCard('&#129462;', 'Orthopaedics', '20+ Approved Products') ?>
          <?= renderTherapyCard('&#9792;', 'Gynaecology', '18+ Approved Products') ?>
        </div>
      </div>
    </section>

    <!-- ========== CDMO & INQUIRY CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Require Turnkey CDMO & Contract Manufacturing?',
          'Our enterprise technical team provides complete technology transfer, COA specification sheets, and international regulatory dossiers for commercial distribution.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
