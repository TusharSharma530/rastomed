<?php


?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$productsRow = null;
$productsBanner = null;
$allProducts = [];
if (isset($con)) {
    $proCatResult = mysqli_query($con, "SELECT * FROM category WHERE id = 70 AND status = 1");
    if ($proCatResult && mysqli_num_rows($proCatResult)) {
        $productsRow = mysqli_fetch_assoc($proCatResult);
    }
    $bannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 70 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
    if ($bannerResult && mysqli_num_rows($bannerResult)) {
        $productsBanner = mysqli_fetch_assoc($bannerResult);
    }
    $proResult = mysqli_query($con, "SELECT * FROM products WHERE cat_id = 70 AND status = 1 ORDER BY `order` ASC, id DESC");
    if ($proResult && mysqli_num_rows($proResult)) {
        while ($rw = mysqli_fetch_assoc($proResult)) {
            $allProducts[] = $rw;
        }
    }
}
?>

  <main>
    <section class="about-banner"<?php if(!empty($productsBanner['wb_img'])): ?> style="background-image: url('<?= $path . $productsBanner['wb_img'] ?>');"<?php endif; ?>>
      <?php if(!empty($productsBanner['wb_video'])): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $path . $productsBanner['wb_video'] ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($productsRow['c_name'] ?? 'Our Products') ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($productsRow['c_name'] ?? 'Products') ?></span>
        </nav>
      </div>
    </section>

    <section class="section pad-0-top">
      <div class="container">
        <div class="flex-display">
<?php if (!empty($allProducts)) { foreach ($allProducts as $prod) { ?>
          <div class="our-product-card product-card-max">
            <div class="our-product-card__image">
              <?php if(!empty($prod['featured_img'])): ?>
              <img src="<?= $path . $prod['featured_img'] ?>" alt="<?= htmlspecialchars($prod['name']) ?>" loading="lazy">
              <?php else: ?>
      
              <?php endif; ?>
              <a href="product-details.php?id=<?= $prod['id'] ?>" class="our-product-card__plus">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
              </a>
            </div>
            <div class="our-product-card__body">
              <div class="flex-between-gap3">
                <div>
                  <h3 class="our-product-card__title margin-0-left"><?= htmlspecialchars($prod['name']) ?></h3>
                  <?php if(!empty($prod['price'])): ?>
                  <span class="price-tag-style">&#8377; <?= htmlspecialchars($prod['price']) ?></span>
                  <?php endif; ?>
                </div>
                <div>
                  <a href="product-details.php?id=<?= $prod['id'] ?>" class="our-product-card__btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
<?php } } else { ?>
          <p>No products found.</p>
<?php } ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
