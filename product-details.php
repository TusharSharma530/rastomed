<?php
?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;
if ($id && isset($con)) {
    $proResult = mysqli_query($con, "SELECT * FROM products WHERE id = $id AND status = 1");
    if ($proResult && mysqli_num_rows($proResult)) {
        $product = mysqli_fetch_assoc($proResult);
    }
}

if (!$product) {
    echo '<main><section class="section"><div class="container"><p>Product not found.</p></div></section></main>';
    include __DIR__ . '/includes/footer.php';
    exit();
}

$faqItems = [];
if (!empty($product['faq'])) {
    preg_match_all('/<p>(.*?)<\/p>/si', $product['faq'], $matches);
    if (!empty($matches[1])) {
        $total = count($matches[1]);
        for ($i = 0; $i < $total; $i += 2) {
            $question = trim(strip_tags($matches[1][$i]));
            $answer = isset($matches[1][$i + 1]) ? trim($matches[1][$i + 1]) : '';
            if (!empty($question)) {
                $faqItems[] = ['q' => $question, 'a' => $answer];
            }
        }
    }
}
?>

  <main>
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

    <section class="section product-detail-sec-pad">
      <div class="container">
        <div class="pd-detail-grid product-detail-grid-layout">
          <div class="pd-detail-grid__image product-detail-img-flex">
            <?php if(!empty($product['featured_img'])): ?>
            <img src="<?= $path . $product['featured_img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-detail-img-max">
            <?php else: ?>
            <img src="" alt="<?= htmlspecialchars($product['name']) ?>" class="product-detail-img-max">
            <?php endif; ?>
          </div>
          <div class="pd-detail-grid__content product-detail-content-box">
            <h2 class="pd-detail-grid__title"><?= htmlspecialchars($product['name']) ?></h2>
            <?php if(!empty($product['price'])): ?>
            <span class="price-tag-style">&#8377; <?= htmlspecialchars($product['price']) ?></span>
            <?php endif; ?>
            <div class="pd-detail-grid__desc">
              <?php if(!empty($product['sdesc'])): ?>
              <?= $product['sdesc'] ?>
              <?php endif; ?>
              <?php if(!empty($product['cdesc'])): ?>
              <?= $product['cdesc'] ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php if(!empty($faqItems)): ?>
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
