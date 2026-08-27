<?php
/**
 * Product Details Page - RastoMed Pharma
 */
require_once __DIR__ . '/includes/components.php';

$allProducts = [
    1 => [
        'name' => 'CoRast-Q10',
        'image' => 'assets/images/qorest-10.png',
    ],
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
if (!isset($allProducts[$id])) {
    $id = 1;
}
$product = $allProducts[$id];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($product['name']) ?> - RastoMed Pharma Private Limited.">
  <title><?= htmlspecialchars($product['name']) ?> - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Product Details Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($product['name']) ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <a href="products.php" class="about-banner__breadcrumb-link">Products</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($product['name']) ?></span>
        </nav>
      </div>
    </section>

    <!-- Product Details -->
    <section class="section product-detail-sec-pad">
      <div class="container">
        <div class="pd-detail-grid product-detail-grid-layout">
          <div class="pd-detail-grid__image product-detail-img-flex">
            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-detail-img-max">
          </div>
          <div class="pd-detail-grid__content product-detail-content-box">
            <h2 class="pd-detail-grid__title"><?= htmlspecialchars($product['name']) ?></h2>
            <div class="pd-detail-grid__desc">
              <p>CoRast-Q10 is an advanced liposomal Coenzyme Q10 (CoQ10) formulation designed to support cellular energy production and antioxidant defense. Its liposomal delivery system is designed to enhance the bioavailability of CoQ10.</p>
              <p>CoRast-Q10 is formulated with complementary nutrients to support cardiovascular health, energy metabolism, muscle function and overall cellular wellness.</p>
              <h3>Key Benefits:</h3>
              <ul>
                <li>Supports cellular energy production</li>
                <li>Provides antioxidant support</li>
                <li>Supports cardiovascular health</li>
                <li>Helps maintain healthy muscle function</li>
                <li>Supports energy and vitality</li>
              </ul>
              <p><strong>Composition:</strong> Liposomal Coenzyme Q10 with complementary nutritional ingredients.</p>
              <p><strong>Recommended Use:</strong> As directed by a healthcare professional.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-top-pad">
      <div class="container">
        <h2 class="faq-heading-blue">Frequently Asked Questions</h2>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>1. What is CoQ10?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Coenzyme Q10 (CoQ10) is a naturally occurring compound found in the body and is involved in mitochondrial energy production and antioxidant defense.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>2. What is the advantage of liposomal CoQ10?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Liposomal delivery uses lipid-based structures to facilitate the delivery of CoQ10 and is designed to support its oral bioavailability.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>3. Who can use CoRast-Q10?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>CoRast-Q10 may be used by adults who require nutritional support with CoQ10, as recommended by a healthcare professional.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>4. Can CoRast-Q10 be used by people taking statins?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Individuals receiving statin therapy should discuss CoQ10 supplementation with their healthcare professional, particularly if they experience muscle-related symptoms. CoRast-Q10 should not be used as a substitute for prescribed statin therapy or other medical treatment.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>5. How should CoRast-Q10 be taken?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Use CoRast-Q10 according to the dosage instructions on the product label or as recommended by your healthcare professional.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span>6. How should CoRast-Q10 be stored?</span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>Store according to the conditions specified on the product packaging, generally in a cool, dry place away from direct sunlight and moisture.</p>
          </div>
        </div>

      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>

</body>
</html>
