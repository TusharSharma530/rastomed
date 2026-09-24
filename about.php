<?php
?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$aboutRow = null;
$aboutBanner = null;
if ($con) {
    $aboutResult = mysqli_query($con, "SELECT * FROM category WHERE id = 69 AND status = 1");
    if ($aboutResult && mysqli_num_rows($aboutResult)) {
        $aboutRow = mysqli_fetch_assoc($aboutResult);
    }
    $bannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 69 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
    if ($bannerResult && mysqli_num_rows($bannerResult)) {
        $aboutBanner = mysqli_fetch_assoc($bannerResult);
    }
}
$missionRow = null;
$visionRow = null;
if ($con) {
    $missionResult = mysqli_query($con, "SELECT * FROM category WHERE id = 73 AND status = 1");
    if ($missionResult && mysqli_num_rows($missionResult)) {
        $missionRow = mysqli_fetch_assoc($missionResult);
    }
    $visionResult = mysqli_query($con, "SELECT * FROM category WHERE id = 78 AND status = 1");
    if ($visionResult && mysqli_num_rows($visionResult)) {
        $visionRow = mysqli_fetch_assoc($visionResult);
    }
}
?>

  <main>
    <section class="about-banner"<?php if(!empty($aboutBanner['wb_img'])): ?> style="background-image: url('<?= $path . $aboutBanner['wb_img'] ?>');"<?php endif; ?>>
      <?php if(!empty($aboutBanner['wb_video'])): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $path . $aboutBanner['wb_video'] ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($aboutRow['c_name'] ?? 'About Us') ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($aboutRow['c_name'] ?? 'About Us') ?></span>
        </nav>
      </div>
    </section>

    <?php if ($aboutRow): ?>
    <section class="section pad-top-sm">
      <div class="container">
        <div class="grid-2-col">
          <div class="reveal reveal--left">
            <span class="section-label">Our Story</span>
            <?php
              $desc = str_replace("\n", ' ', $aboutRow['c_desc']);
              $paragraphs = array_filter(array_map('trim', explode("\n", str_replace("\\n", "\n", $aboutRow['c_desc']))));
              foreach ($paragraphs as $para) {
                  echo '<p class="about-p-desc">' . htmlspecialchars($para) . '</p>';
              }
            ?>
            
            <div class="about-btn-wrap">
              <?= renderButton('Our Products', 'products.php', 'primary') ?>
              <?= renderButton('CONTACT', 'contact.php', 'outline') ?>
            </div>
          </div>
          <div class="reveal reveal--right about-rel-pos">
            <div class="about-grad-box">
              <div class="about-inner-pad">
                <img src="<?= !empty($aboutRow['featured_img']) ? $path . $aboutRow['featured_img'] : 'assets/images/ourstory.jpeg' ?>" alt="<?= htmlspecialchars($aboutRow['c_name']) ?>" class="about-logo-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if ($missionRow || $visionRow): ?>
    <section class="section section--alt pad-bottom-sm about-mv-section">
      <div class="container">
        <?php if ($missionRow && trim($missionRow['c_name']) !== ''): ?>
        <h2 class="mv-section__title"><?= htmlspecialchars(trim($missionRow['sdesc']) !== '' ? $missionRow['sdesc'] : $missionRow['c_name']) ?></h2>
        <?php elseif ($visionRow && trim($visionRow['c_name']) !== ''): ?>
        <h2 class="mv-section__title"><?= htmlspecialchars($visionRow['c_name']) ?></h2>
        <?php endif; ?>

        <div class="mv-cards reveal">
          <?php
            $missionText = '';
            if ($missionRow) {
                $missionText = trim($missionRow['sdesc']) !== '' ? $missionRow['sdesc'] : $missionRow['c_desc'];
                $missionText = str_replace("\\n", "\n", $missionText);
            }
            $visionText = '';
            if ($visionRow) {
                $visionText = trim($visionRow['sdesc']) !== '' ? $visionRow['sdesc'] : $visionRow['c_desc'];
                $visionText = str_replace("\\n", "\n", $visionText);
            }
            $missionTitle = $missionRow ? $missionRow['c_name'] : 'Our Mission';
            $visionTitle = $visionRow ? $visionRow['c_name'] : 'Our Vision';
          ?>
          <?php if ($missionRow): ?>
          <div class="mv-card">
            <div class="mv-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
            </div>
            <div class="mv-card__content">
              <h3 class="mv-card__title"><?= htmlspecialchars($missionTitle) ?></h3>
              <p class="mv-card__text"><?= nl2br(htmlspecialchars($missionText)) ?></p>
            </div>
            <div class="mv-card__corner mv-card__corner--left"></div>
            <div class="mv-card__corner mv-card__corner--right"></div>
          </div>
          <?php endif; ?>

          <?php if ($visionRow): ?>
          <div class="mv-card">
            <div class="mv-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#1565C0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
            </div>
            <div class="mv-card__content">
              <h3 class="mv-card__title"><?= htmlspecialchars($visionTitle) ?></h3>
              <p class="mv-card__text"><?= nl2br(htmlspecialchars($visionText)) ?></p>
            </div>
            <div class="mv-card__corner mv-card__corner--left"></div>
            <div class="mv-card__corner mv-card__corner--right"></div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
