<?php
/**
 * Product Details Page - RastoMed Pharma
 */
require_once __DIR__ . '/includes/components.php';

$allProducts = [
    1 => [
        'name' => 'CoRast-Q10',
        'image' => 'assets/images/qorest-10.png',
        'description' => 'CoRaST-Q10 is a CoQ10-based nutritional supplement designed to support cellular energy production and antioxidant protection. Coenzyme Q10 is naturally present in the body and plays an important role in mitochondrial energy production. The product is presented in a consumer supplement pack and may be intended for nutritional support of energy, cardiovascular function, and overall cellular health.',
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
    <section class="section" style="padding-top:20px;">
      <div class="container">
        <div class="pd-detail-grid">
          <div class="pd-detail-grid__image">
            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          </div>
          <div class="pd-detail-grid__content">
            <h2 class="pd-detail-grid__title"><?= htmlspecialchars($product['name']) ?></h2>
            <ul class="pd-detail-grid__list">
              <li><?= htmlspecialchars($product['description']) ?></li>
            </ul>
            <a href="contact.php" class="pd-detail-grid__btn">Place Order</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
