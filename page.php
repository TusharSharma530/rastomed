<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== get slug from clean URL =====
$slug = trim(trim($_GET['slug'] ?? ''), '/');

// ===== slug ki same-named .php file hai to seedha chalao (page.php khud ko chhode) =====
if ($slug !== '' && basename($slug) === $slug && $slug !== 'page' && is_file(__DIR__ . '/' . $slug . '.php')) {
	require __DIR__ . '/' . $slug . '.php';
	exit;
}

// ===== load category row by slug =====
$pageRow = null;
if ($con && $slug !== '') {
	$escSlug = mysqli_real_escape_string($con, $slug);
	$rsPage = mysqli_query($con, "SELECT * FROM category WHERE c_url = '$escSlug' LIMIT 1");
	if ($rsPage && mysqli_num_rows($rsPage)) {
		$pageRow = mysqli_fetch_assoc($rsPage);
	}
}

// ===== custom page file override (c_page column) =====
if (!empty($pageRow['c_page'])) {
	$customFile = basename(trim((string) $pageRow['c_page']));
	if ($customFile !== '' && $customFile !== '.' && is_file(__DIR__ . '/' . $customFile)) {
		require __DIR__ . '/' . $customFile;
		exit;
	}
}

// ===== page not found =====
if (!$pageRow) {
	http_response_code(404);
	require __DIR__ . '/404.php';
	exit;
}

// ===== page meta =====
$pageTitle    = trim((string) $pageRow['c_name']) !== '' ? $pageRow['c_name'] : 'Page';
$pageSubtitle = (string) ($pageRow['sdesc'] ?? '');
$pageImage    = (string) ($pageRow['featured_img'] ?? '');

// ===== page description: plain text -> HTML, HTML -> as-is, empty -> fallback =====
$pageDesc = (string) ($pageRow['c_desc'] ?? '');
$pageContentHtml = $pageDesc;
if ($pageDesc !== '' && strpos($pageDesc, '<') === false) {
	$pageContentHtml = render_pages_description($pageDesc);
}
if (trim($pageContentHtml) === '') {
	$pageContentHtml = '<p class="legal-page__intro">Content for this page is coming soon.</p>';
}

// ===== banner (web_banner for this category) =====
$bannerBg = '';
$bannerVideo = '';
$rsBanner = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = " . (int) $pageRow['id'] . " AND status = 1 ORDER BY wb_order ASC LIMIT 1");
if ($rsBanner && ($bannerRow = mysqli_fetch_assoc($rsBanner))) {
	$bannerBg    = (string) ($bannerRow['wb_img'] ?? '');
	$bannerVideo = (string) ($bannerRow['wb_video'] ?? '');
}
if ($bannerBg === '' && $bannerVideo === '') {
	$bannerBg = 'assets/images/about-banner.jpg';
}

// ===== escaped vars (used many times in layout) =====
$eTitle       = htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8');
$eSubtitle    = htmlspecialchars($pageSubtitle, ENT_QUOTES, 'UTF-8');
$eImage       = htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8');
$eBannerBg    = htmlspecialchars($bannerBg, ENT_QUOTES, 'UTF-8');
$eBannerVideo = htmlspecialchars($bannerVideo, ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="about-banner"<?php if ($bannerBg !== ''): ?> style="background-image: url('<?= $eBannerBg ?>');"<?php endif; ?>>
      <?php if ($bannerVideo !== ''): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $eBannerVideo ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= $eTitle ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= $eTitle ?></span>
        </nav>
        <?php if ($pageSubtitle !== ''): ?>
        <p class="about-banner__desc" style="color:rgba(255,255,255,.9);margin-top:12px;"><?= $eSubtitle ?></p>
        <?php endif; ?>
      </div>
    </section>

    <?php if ($pageImage !== ''): ?>
    <section class="section pad-top-sm">
      <div class="container">
        <img src="<?= $path . $eImage ?>" alt="<?= $eTitle ?>" style="width:100%;height:auto;border-radius:16px;">
      </div>
    </section>
    <?php endif; ?>

    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <?= $pageContentHtml ?>
        </div>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
