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
  <style>
    .product-spec-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: var(--space-4);
      margin-bottom: var(--space-6);
    }
    .product-spec-item {
      background: var(--color-surface-alt);
      border-radius: var(--radius-lg);
      padding: var(--space-4);
      border: 1px solid var(--color-border-light);
    }
    .product-spec-label {
      font-size: var(--fs-xs);
      color: var(--color-text-muted);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-weight: bold;
      margin-bottom: 0.25rem;
    }
    .product-spec-val {
      font-size: var(--fs-small);
      font-weight: bold;
      color: var(--color-text);
    }
    .pd-detail-grid__desc p {
      font-size: 1rem;
      color: #555;
      line-height: 1.8;
      margin-bottom: 16px;
    }
    .pd-detail-grid__desc h3 {
      font-size: 1.1rem;
      font-weight: 700;
      color: #1a237e;
      margin-bottom: 12px;
      margin-top: 8px;
    }
    .pd-detail-grid__desc ul {
      list-style: disc;
      padding-left: 24px;
      margin-bottom: 20px;
    }
    .pd-detail-grid__desc ul li {
      font-size: 1rem;
      color: #555;
      line-height: 1.8;
      margin-bottom: 4px;
    }
  </style>
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
    <section class="section" style="padding-top:20px; padding-bottom:0;">
      <div class="container">
        <div class="pd-detail-grid">
          <div class="pd-detail-grid__image">
            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          </div>
          <div class="pd-detail-grid__content">
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
    <section style="padding: 0 0 60px;">
      <div class="container" style="max-width: 800px;">
        <h2 style="font-size: 1.6rem; font-weight: 800; color: #1a237e; margin-bottom: 28px;">Frequently Asked Questions</h2>

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
  <style>
    .faq-item {
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      margin-bottom: 12px;
      overflow: hidden;
    }
    .faq-question {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 20px;
      background: #fff;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      color: #1a237e;
      text-align: left;
      font-family: inherit;
    }
    .faq-question:hover {
      background: #f9fafb;
    }
    .faq-icon {
      flex-shrink: 0;
      color: #1a237e;
      transition: transform 0.3s ease;
    }
    .faq-open .faq-icon {
      transform: rotate(180deg);
    }
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    .faq-open .faq-answer {
      max-height: 300px;
    }
    .faq-answer p {
      padding: 0 20px 18px;
      font-size: 0.95rem;
      color: #555;
      line-height: 1.7;
      margin: 0;
    }
  </style>
</body>
</html>
