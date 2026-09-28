<?php
require_once __DIR__ . '/manager/database/db.php';

// nested URL (product-details/product-name) -> resolve relative links from site root
$useBaseTag = true;

// ===== product by name
$id = 0;
$productSlug = trim((string) ($_GET['product'] ?? ''));
if ($productSlug !== '') {
	$escSlug = mysqli_real_escape_string($con, $productSlug);
	$rsSlug = mysqli_query($con, "SELECT `id` FROM products WHERE (`url` = '$escSlug' OR `name` = '$escSlug') AND status = 1 LIMIT 1");
	if ($rsSlug && mysqli_num_rows($rsSlug)) {
		$id = (int) mysqli_fetch_assoc($rsSlug)['id'];
	}
} elseif (isset($_GET['id'])) {
	$id = (int) $_GET['id'];
}

$product = null;
if ($id) {
	$rsProduct = mysqli_query($con, "SELECT * FROM products WHERE id = $id AND status = 1");
	if ($rsProduct && mysqli_num_rows($rsProduct)) {
		$product = mysqli_fetch_assoc($rsProduct);
	}
}

// ===== product not found =====
if (!$product) {
	require_once __DIR__ . '/includes/header.php';
	echo '<main><section class="section"><div class="container"><p>Product not found.</p></div></section></main>';
	include __DIR__ . '/includes/footer.php';
	exit();
}

// ===== FAQ for this product 
$faqItems = [];
$rsFaq = mysqli_query($con, "SELECT * FROM product_faq WHERE product_id = $id AND status = 1 ORDER BY `order` ASC, id ASC");
if ($rsFaq && mysqli_num_rows($rsFaq)) {
	while ($rowFaq = mysqli_fetch_assoc($rsFaq)) {
		$question = trim(strip_tags($rowFaq['question']));
		if ($question !== '') {
			$faqItems[] = [
				'q' => $question,
				'a' => nl2br(htmlspecialchars(trim($rowFaq['answer']), ENT_QUOTES, 'UTF-8')),
			];
		}
	}
}

// ===== escaped vars =====
$eName  = htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8');
$ePrice = htmlspecialchars((string) $product['price'], ENT_QUOTES, 'UTF-8');
$eImg   = htmlspecialchars((string) $product['featured_img'], ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= $eName ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <a href="products.php" class="about-banner__breadcrumb-link">Products</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= $eName ?></span>
        </nav>
      </div>
    </section>

    <section class="section product-detail-sec-pad">
      <div class="container">
        <div class="pd-detail-grid product-detail-grid-layout">
          <div class="pd-detail-grid__image product-detail-img-flex">
            <img src="<?= $eImg !== '' ? $path . $eImg : '' ?>" alt="<?= $eName ?>" class="product-detail-img-max">
          </div>
          <div class="pd-detail-grid__content product-detail-content-box">
            <h2 class="pd-detail-grid__title"><?= $eName ?></h2>
            <?php if (!empty($product['price'])): ?>
            <span class="price-tag-style">&#8377; <?= $ePrice ?></span>
            <?php endif; ?>
            <div class="pd-detail-grid__desc">
              <?php if (!empty($product['sdesc'])): ?>
              <?= $product['sdesc'] ?>
              <?php endif; ?>
              <?php if (!empty($product['cdesc'])): ?>
              <?= $product['cdesc'] ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php if (!empty($faqItems)): ?>
    <!-- FAQ Section -->
    <section class="faq-top-pad">
      <div class="container">
        <h2 class="faq-heading-blue">Frequently Asked Questions</h2>
        <?php $faqNum = 1; foreach ($faqItems as $faq): ?>
        <div class="faq-item">
          <button class="faq-question" onclick="this.parentElement.classList.toggle('faq-open')">
            <span><?= $faqNum . '. ' . htmlspecialchars($faq['q']) ?></span>
            <svg class="faq-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p><?= $faq['a'] ?></p>
          </div>
        </div>
        <?php $faqNum++; endforeach; ?>
      </div>
    </section>
    <?php endif; ?>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
