<?php
/**
 * Products Page - PharmaCorp
 * Enhanced with search, category & therapeutic filters
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
        'icon' => '&#9829;',
    ],
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management with rapid onset and sustained relief.',
        'badge' => '',
        'icon' => '&#9736;',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Tablets',
        'therapy' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization with minimal side effects.',
        'badge' => 'New',
        'icon' => '&#9883;',
    ],
    [
        'id' => 4,
        'name' => 'GastroEase',
        'category' => 'Syrups',
        'therapy' => 'Gastroenterology',
        'description' => 'Effective gastrointestinal treatment for GERD and peptic ulcer disease with improved patient compliance.',
        'badge' => '',
        'icon' => '&#9733;',
    ],
    [
        'id' => 5,
        'name' => 'OrthoFlex',
        'category' => 'Tablets',
        'therapy' => 'Orthopaedics',
        'description' => 'Joint health support formula designed to improve mobility and reduce discomfort in musculoskeletal conditions.',
        'badge' => '',
        'icon' => '&#9878;',
    ],
    [
        'id' => 6,
        'name' => 'DermaGlow',
        'category' => 'Creams',
        'therapy' => 'Dermatology',
        'description' => 'Advanced dermatological solution for various skin conditions with soothing and restorative properties.',
        'badge' => '',
        'icon' => '&#9752;',
    ],
    [
        'id' => 7,
        'name' => 'CardioShield Max',
        'category' => 'Tablets',
        'therapy' => 'Cardiology',
        'description' => 'Next-generation cardiovascular therapy with enhanced bioavailability and improved patient outcomes.',
        'badge' => 'Launched 2026',
        'icon' => '&#9829;',
    ],
    [
        'id' => 8,
        'name' => 'NeuroVita Plus',
        'category' => 'Capsules',
        'therapy' => 'Neurology',
        'description' => 'Novel neurological formulation targeting cognitive decline and neurodegenerative conditions.',
        'badge' => 'Coming Soon',
        'icon' => '&#9883;',
    ],
    [
        'id' => 9,
        'name' => 'ImmunoGuard',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'Advanced immunomodulatory therapy for autoimmune conditions with precision targeting.',
        'badge' => 'Launched 2026',
        'icon' => '&#10010;',
    ],
    [
        'id' => 10,
        'name' => 'GynoCare',
        'category' => 'Tablets',
        'therapy' => 'Gynaecology',
        'description' => 'Women\'s health formulation addressing hormonal balance and reproductive wellness support.',
        'badge' => '',
        'icon' => '&#9792;',
    ],
    [
        'id' => 11,
        'name' => 'PediaGrow',
        'category' => 'Syrups',
        'therapy' => 'Paediatrics',
        'description' => 'Pediatric nutritional supplement supporting healthy growth and development in children.',
        'badge' => '',
        'icon' => '&#9734;',
    ],
    [
        'id' => 12,
        'name' => 'NutriVita',
        'category' => 'Sachets',
        'therapy' => 'Nutraceuticals',
        'description' => 'Complete multivitamin and mineral supplement for daily nutritional support and wellness.',
        'badge' => '',
        'icon' => '&#10022;',
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
  <meta name="description" content="Explore PharmaCorp's comprehensive pharmaceutical product portfolio across multiple therapeutic areas.">
  <title>Products - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Our Products', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Products', 'url' => 'products.php'],
    ], 'Explore our comprehensive pharmaceutical portfolio spanning multiple therapeutic areas and dosage forms.') ?>

    <!-- ========== PRODUCT FILTERS ========== -->
    <section class="section" style="padding-top:var(--space-8);">
      <div class="container">
        <div class="filter-bar reveal">
          <div class="filter-bar__search">
            <svg class="filter-bar__search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="text" id="productSearch" class="filter-bar__search-input" placeholder="Search products by name...">
          </div>

          <select id="categoryFilter" class="filter-bar__select">
            <option value="">All Categories</option>
            <?php foreach ($categories as $cat): ?>
              <option value="<?= $cat ?>"><?= $cat ?></option>
            <?php endforeach; ?>
          </select>

          <select id="therapyFilter" class="filter-bar__select">
            <option value="">All Therapeutic Areas</option>
            <?php foreach ($therapies as $therapy): ?>
              <option value="<?= $therapy ?>"><?= $therapy ?></option>
            <?php endforeach; ?>
          </select>

          <button id="clearFilters" class="filter-bar__clear">Clear Filters</button>
          <span id="productCount" class="filter-bar__count"><?= count($allProducts) ?> products found</span>
        </div>

        <!-- ========== PRODUCT GRID ========== -->
        <div class="product-grid reveal">
          <?php foreach ($allProducts as $product): ?>
            <?= renderFilterableProductCard($product) ?>
          <?php endforeach; ?>
        </div>

        <!-- Empty State -->
        <div class="product-grid__empty" style="display:none; min-height:300px;">
          <div style="text-align:center; padding:var(--space-12);">
            <div style="width:64px; height:64px; margin:0 auto var(--space-4); display:flex; align-items:center; justify-content:center; background:var(--color-surface-alt); border-radius:var(--radius-full); font-size:1.5rem; color:var(--color-text-muted);">&#128269;</div>
            <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-2);">No products found</h3>
            <p style="font-size:var(--fs-small); color:var(--color-text-muted);">Try adjusting your search or filter criteria.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== THERAPEUTIC AREAS ========== -->
    <section id="therapeutic" class="section section--alt">
      <div class="container">
        <?= renderSectionHeader('Therapeutic Areas', 'Specialized Treatment Domains', 'Our expertise spans across major therapeutic areas, enabling us to serve diverse patient populations effectively.') ?>

        <div class="grid grid--3 reveal">
          <?= renderTherapyCard('&#9829;', 'Cardiology', '45+ Products') ?>
          <?= renderTherapyCard('&#9736;', 'General Medicine', '40+ Products') ?>
          <?= renderTherapyCard('&#9883;', 'Neurology', '25+ Products') ?>
          <?= renderTherapyCard('&#9733;', 'Gastroenterology', '35+ Products') ?>
          <?= renderTherapyCard('&#9878;', 'Orthopaedics', '20+ Products') ?>
          <?= renderTherapyCard('&#9752;', 'Dermatology', '22+ Products') ?>
          <?= renderTherapyCard('&#9792;', 'Gynaecology', '18+ Products') ?>
          <?= renderTherapyCard('&#9734;', 'Paediatrics', '15+ Products') ?>
          <?= renderTherapyCard('&#10022;', 'Nutraceuticals', '12+ Products') ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Need Product Information?',
          'Our team is ready to provide detailed product information, samples, and technical documentation.'
        ) ?>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
