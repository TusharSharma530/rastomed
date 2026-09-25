<?php
require_once __DIR__ . '/manager/database/db.php';

$slug = trim($_GET['slug'] ?? '');
$slug = trim($slug, '/');

$pageRow = null;
$pageType = '';
$notFound = true;

if ($con && $slug !== '') {
	$escSlug = mysqli_real_escape_string($con, $slug);

	$rsCat = mysqli_query($con, "SELECT * FROM category WHERE c_url = '$escSlug' LIMIT 1");
	if ($rsCat && mysqli_num_rows($rsCat)) {
		$pageRow = mysqli_fetch_assoc($rsCat);
		$pageType = 'category';
		$notFound = false;
	} else {
		$rsSub = mysqli_query($con, "SELECT * FROM sub_cat WHERE sc_url = '$escSlug' LIMIT 1");
		if ($rsSub && mysqli_num_rows($rsSub)) {
			$pageRow = mysqli_fetch_assoc($rsSub);
			$pageType = 'sub_cat';
			$notFound = false;
		} else {
			$rsChild = mysqli_query($con, "SELECT * FROM childcategory WHERE url = '$escSlug' LIMIT 1");
			if ($rsChild && mysqli_num_rows($rsChild)) {
				$pageRow = mysqli_fetch_assoc($rsChild);
				$pageType = 'childcategory';
				$notFound = false;
			}
		}
	}
}


if ($pageType === 'category' && !empty($pageRow['c_page'])) {
	$cPage = basename(trim((string) $pageRow['c_page']));
	if ($cPage !== '' && $cPage !== '.' && is_file(__DIR__ . '/' . $cPage)) {
		require __DIR__ . '/' . $cPage;
		exit;
	}
}

if ($pageType === 'category') {
	$pageTitle    = trim($pageRow['c_name']) !== '' ? $pageRow['c_name'] : 'Page';
	$pageSubtitle = (string)($pageRow['sdesc'] ?? '');
	$pageDesc     = (string)($pageRow['c_desc'] ?? '');
	$pageImage    = (string)($pageRow['featured_img'] ?? '');
	$pageMeta     = (string)($pageRow['meta_desc'] ?? '');
} elseif ($pageType === 'sub_cat') {
	$pageTitle    = trim($pageRow['sc_name']) !== '' ? $pageRow['sc_name'] : 'Page';
	$pageSubtitle = (string)($pageRow['sdesc'] ?? '');
	$pageDesc     = (string)($pageRow['sc_desc'] ?? '');
	$pageImage    = (string)($pageRow['featured_img'] ?? '');
	$pageMeta     = (string)($pageRow['meta_desc'] ?? '');
} elseif ($pageType === 'childcategory') {
	$pageTitle    = trim($pageRow['childcat']) !== '' ? $pageRow['childcat'] : 'Page';
	$pageSubtitle = '';
	$pageDesc     = (string)($pageRow['desc'] ?? '');
	$pageImage    = '';
	$pageMeta     = '';
} else {
	$pageTitle    = 'Page Not Found';
	$pageSubtitle = '';
	$pageDesc     = '';
	$pageImage    = '';
	$pageMeta     = '';
}

if ($pageDesc !== '' && strpos($pageDesc, '<') === false) {
	$pageDescHtml = render_pages_description($pageDesc);
} else {
	$pageDescHtml = $pageDesc;
}

$pageBanner = null;
if ($con && $pageRow) {
	$bannerCatId = 0;
	if ($pageType === 'category') {
		$bannerCatId = (int)$pageRow['id'];
	} elseif ($pageType === 'sub_cat') {
		$bannerCatId = (int)$pageRow['cat_id'];
	} elseif ($pageType === 'childcategory') {
		$bannerCatId = (int)$pageRow['cat_id'];
	}

	if ($bannerCatId > 0) {
		$rsBanner = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = {$bannerCatId} AND status = 1 ORDER BY wb_order ASC LIMIT 1");
		if ($rsBanner && mysqli_num_rows($rsBanner)) {
			$pageBanner = mysqli_fetch_assoc($rsBanner);
		}
	}
}

$bannerBg = '';
$bannerVideo = '';
if ($pageBanner) {
	if (!empty($pageBanner['wb_img'])) {
		$bannerBg = $pageBanner['wb_img'];
	}
	if (!empty($pageBanner['wb_video'])) {
		$bannerVideo = $pageBanner['wb_video'];
	}
}
if ($bannerBg === '' && $bannerVideo === '') {
	$bannerBg = 'assets/images/about-banner.jpg';
}

$pageParts = explode(' ', $pageTitle);
$pageLastWord = array_pop($pageParts);
$pageFirstWords = implode(' ', $pageParts);

require_once __DIR__ . '/includes/header.php';
?>

<?php if ($notFound): ?>
  <main>
    <section class="contact-banner">
      <div class="container contact-banner__content">
        <nav class="contact-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="contact-banner__breadcrumb-link">Home</a>
          <span class="contact-banner__breadcrumb-sep">&#9656;</span>
          <span class="contact-banner__breadcrumb-current">Not Found</span>
        </nav>
        <span class="contact-banner__label">ERROR 404</span>
        <h1 class="contact-banner__title">Page <span class="contact-banner__title-gradient">Not Found</span></h1>
        <p class="contact-banner__desc">The page you are looking for does not exist or has been moved.</p>
      </div>
    </section>

    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <p class="legal-page__intro">Go back to the homepage or use the main menu to find what you need.</p>
          <p><a class="btn btn--primary" href="index.php">Back to Home</a></p>
        </div>
      </div>
    </section>
  </main>
<?php else: ?>
  <main>
    <section class="about-banner"<?php if($bannerBg !== ''): ?> style="background-image: url('<?= $path . htmlspecialchars($bannerBg) ?>');"<?php endif; ?>>
      <?php if($bannerVideo !== ''): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $path . htmlspecialchars($bannerVideo) ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($pageTitle) ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($pageTitle) ?></span>
        </nav>
        <?php if ($pageSubtitle !== ''): ?>
        <p class="about-banner__desc" style="color:rgba(255,255,255,.9);margin-top:12px;"><?= htmlspecialchars($pageSubtitle) ?></p>
        <?php endif; ?>
      </div>
    </section>

    <?php if ($pageImage !== ''): ?>
    <section class="section pad-top-sm">
      <div class="container">
        <img src="<?= $path . htmlspecialchars($pageImage) ?>" alt="<?= htmlspecialchars($pageTitle) ?>" style="width:100%;height:auto;border-radius:16px;">
      </div>
    </section>
    <?php endif; ?>

    <?php if (trim($pageDescHtml) !== ''): ?>
    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <?= $pageDescHtml ?>
        </div>
      </div>
    </section>
    <?php else: ?>
    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <p class="legal-page__intro">Content for this page is coming soon.</p>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </main>
<?php endif; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>