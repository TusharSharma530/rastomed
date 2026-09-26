<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== products category (id = 70) =====
$proCatId = 70;

// ===== category row + banner =====
$productsRow = null;
$rsCat = mysqli_query($con, "SELECT * FROM category WHERE id = $proCatId AND status = 1");
if ($rsCat && mysqli_num_rows($rsCat)) {
	$productsRow = mysqli_fetch_assoc($rsCat);
}

$productsBanner = null;
$rsBanner = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = $proCatId AND status = 1 ORDER BY wb_order ASC LIMIT 1");
if ($rsBanner && mysqli_num_rows($rsBanner)) {
	$productsBanner = mysqli_fetch_assoc($rsBanner);
}

// ===== product list =====
$allProducts = [];
$rsProducts = mysqli_query($con, "SELECT * FROM products WHERE cat_id = $proCatId AND status = 1 ORDER BY `order` ASC, id DESC");
if ($rsProducts) {
	while ($rw = mysqli_fetch_assoc($rsProducts)) {
		$allProducts[] = $rw;
	}
}

// ===== escaped vars =====
$eCatName    = htmlspecialchars($productsRow['c_name'] ?? 'Our Products', ENT_QUOTES, 'UTF-8');
$eBannerBg   = htmlspecialchars((string) ($productsBanner['wb_img'] ?? ''), ENT_QUOTES, 'UTF-8');
$eBannerVid  = htmlspecialchars((string) ($productsBanner['wb_video'] ?? ''), ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="about-banner"<?php if ($eBannerBg !== ''): ?> style="background-image: url('<?= $eBannerBg ?>');"<?php endif; ?>>
      <?php if ($eBannerVid !== ''): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $eBannerVid ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= $eCatName ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= $eCatName ?></span>
        </nav>
      </div>
    </section>

    <section class="section pad-0-top">
      <div class="container">
        <div class="flex-display">
<?php if (empty($allProducts)) { ?>
          <p>No products found.</p>
<?php } else { foreach ($allProducts as $prod) {
	$eProdName = htmlspecialchars($prod['name'], ENT_QUOTES, 'UTF-8');
	$prodUrl   = 'product-details.php?id=' . (int) $prod['id'];
?>
          <div class="our-product-card product-card-max">
            <div class="our-product-card__image">
              <?php if (!empty($prod['featured_img'])): ?>
              <img src="<?= $path . htmlspecialchars($prod['featured_img']) ?>" alt="<?= $eProdName ?>" loading="lazy">
              <?php endif; ?>
              <a href="<?= $prodUrl ?>" class="our-product-card__plus">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </a>
            </div>
            <div class="our-product-card__body">
              <div class="flex-between-gap3">
                <div>
                  <h3 class="our-product-card__title margin-0-left"><?= $eProdName ?></h3>
                  <?php if (!empty($prod['price'])): ?>
                  <span class="price-tag-style">&#8377; <?= htmlspecialchars($prod['price']) ?></span>
                  <?php endif; ?>
                </div>
                <div>
                  <a href="<?= $prodUrl ?>" class="our-product-card__btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
<?php } } ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
