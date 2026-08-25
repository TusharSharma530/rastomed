<?php
/**
 * Products Page - PharmaCorp Enterprise
 * Enhanced with packaging renders, search, category & therapeutic filters
 */
require_once __DIR__ . '/includes/components.php';

$allProducts = [
    [
        'id' => 1,
        'name' => 'RESPIRO',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'High-quality respiratory formulation for effective lung and airway support.',
        'badge' => '',
        'image' => 'assets/images/respiro.png',
    ],
    [
        'id' => 2,
        'name' => 'RAPORZ-M1',
        'category' => 'Tablets',
        'therapy' => 'General Medicine',
        'description' => 'Reliable and effective tablet formulation for daily health management.',
        'badge' => '',
        'image' => 'assets/images/raporz-m1.png',
    ],
    [
        'id' => 3,
        'name' => 'NIMEXO-Q',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'Co-Enzyme Q10 softgel capsules with Eicosapentaenoic Acid, Docosahexaenoic Acid, L-Arginine & Selenium.',
        'badge' => '',
        'image' => 'assets/images/nimex-q.jpeg',
    ],
    [
        'id' => 4,
        'name' => 'JANOHEME 170',
        'category' => 'Tablets',
        'therapy' => 'General Medicine',
        'description' => 'Iron supplementation tablets for effective management of iron deficiency.',
        'badge' => '',
        'image' => 'assets/images/janoheme170.png',
    ],
    [
        'id' => 5,
        'name' => 'RAPORZ-D170',
        'category' => 'Tablets',
        'therapy' => 'General Medicine',
        'description' => 'Cholecalciferol Oral Solution 60000 IU for Vitamin D deficiency management.',
        'badge' => '',
        'image' => 'assets/images/rapordz170.png',
    ],
    [
        'id' => 6,
        'name' => 'BRANCH',
        'category' => 'Syrups',
        'therapy' => 'General Medicine',
        'description' => 'Premium liver support formulation for hepatoprotection and detoxification.',
        'badge' => '',
        'image' => 'assets/images/branch.png',
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
  <meta name="description" content="Explore RastoMed Pharma's quality pharmaceutical products including RESPIRO, RAPORZ-M1, NIMEXO-Q, JANOHEME 170, RAPORZ-D170, and BRANCH.">
  <title>Our Products - RastoMed Pharma Private Limited</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Products Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">Our Products</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">Products</span>
        </nav>
      </div>
    </section>

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
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
