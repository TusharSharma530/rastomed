<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== blogs category (id = 75) + banner =====
$blogCatId = 75;
$blogsRow = fetch_one_row($con, "SELECT * FROM category WHERE id = $blogCatId AND status = 1");
$blogsBanner = fetch_one_row($con, "SELECT * FROM web_banner WHERE category_id = $blogCatId AND status = 1 ORDER BY wb_order ASC LIMIT 1");

// ===== blog list =====
$allBlogs = [];
$rsBlogs = mysqli_query($con, "SELECT * FROM blogs WHERE status = 1 ORDER BY id DESC");
if ($rsBlogs) {
	while ($rw = mysqli_fetch_assoc($rsBlogs)) {
		$allBlogs[] = $rw;
	}
}

// ===== escaped vars =====
$eBlogsName = htmlspecialchars((string) ($blogsRow['c_name'] ?? 'Blogs'), ENT_QUOTES, 'UTF-8');
$eBannerBg  = htmlspecialchars((string) ($blogsBanner['wb_img'] ?? ''), ENT_QUOTES, 'UTF-8');
$eBannerVid = htmlspecialchars((string) ($blogsBanner['wb_video'] ?? ''), ENT_QUOTES, 'UTF-8');

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
        <h1 class="about-banner__title"><?= $eBlogsName ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= $eBlogsName ?></span>
        </nav>
      </div>
    </section>

    <section class="section blogs-sec-pad">
      <div class="container">
        <div class="blogs-grid" style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
<?php if (empty($allBlogs)) { ?>
          <div class="blog-card reveal">
            <div class="blog-card__body" style="text-align:center; padding:60px 20px;">
              <h3 class="blog-card__title coming-soon-title">Coming Soon</h3>
              <p class="coming-soon-text">We are working on something amazing. Stay tuned!</p>
            </div>
          </div>
<?php } else { foreach ($allBlogs as $blog) {
	$eBlogTitle = htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8');
	$eBlogFile  = htmlspecialchars((string) $blog['file'], ENT_QUOTES, 'UTF-8');
	$eBlogDate  = htmlspecialchars((string) $blog['date'], ENT_QUOTES, 'UTF-8');
	$blogUrl    = 'blog-details.php?id=' . (int) $blog['id'];
?>
          <div class="blog-card reveal">
            <div class="blog-card__image">
              <?php if ($eBlogFile !== ''): ?>
              <img src="<?= $path . $eBlogFile ?>" alt="<?= $eBlogTitle ?>" width="400" height="220" loading="lazy">
              <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <h3 class="blog-card__title"><?= $eBlogTitle ?></h3>
              <?php if ($eBlogDate !== ''): ?>
              <div class="blog-card__meta">
                <span class="blog-card__date"><?= $eBlogDate ?></span>
              </div>
              <?php endif; ?>
              <a href="<?= $blogUrl ?>" class="blog-card__link">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
<?php } } ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
