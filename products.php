<?php
/**
 * Products Page - PharmaCorp Enterprise
 * Enhanced with packaging renders, search, category & therapeutic filters
 */
require_once __DIR__ . '/includes/components.php';

$allProducts = [
    [
        'id' => 1,
        'name' => 'CoRast-Q10',
        'category' => 'Capsules',
        'therapy' => 'General Medicine',
        'description' => 'High-quality softgel capsules for effective health supplementation.',
        'badge' => '',
        'image' => 'assets/images/qorest-10.png',
        'url' => 'product-details.php?id=1',
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

    <!-- ========== PRODUCT CATALOG ========== -->
    <section class="section pad-0-top">
      <div class="container">
        <div class="flex-display">
          <div class="our-product-card product-card-max">
            <div class="our-product-card__image">
              <img src="assets/images/qorest-10.png" alt="CoRast-Q10" loading="lazy">
              <a href="product-details.php?id=1" class="our-product-card__plus">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </a>
            </div>
            <div class="our-product-card__body">
              <div class="flex-between-gap3">
                <div>
                  <h3 class="our-product-card__title margin-0-left">CoRast-Q10</h3>
                  <span class="price-tag-style">&#8377; 655</span>
                </div>
                <div>
                  <a href="product-details.php?id=1" class="our-product-card__btn">Read More</a>
                </div>
              </div>
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
