<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== blog by id =====
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$blog = null;
if ($id) {
	$rsBlog = mysqli_query($con, "SELECT * FROM blogs WHERE id = $id AND status = 1");
	if ($rsBlog && mysqli_num_rows($rsBlog)) {
		$blog = mysqli_fetch_assoc($rsBlog);
	}
}

// ===== blog not found =====
if (!$blog) {
	require_once __DIR__ . '/includes/header.php';
	echo '<main><section class="section"><div class="container"><p>Blog not found.</p></div></section></main>';
	include __DIR__ . '/includes/footer.php';
	exit();
}

// ===== blogs banner 
$blogsBanner = null;
$rsBanner = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 75 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
if ($rsBanner && mysqli_num_rows($rsBanner)) {
	$blogsBanner = mysqli_fetch_assoc($rsBanner);
}

// ===== blog texts =====
$blogSdesc = trim((string) ($blog['sdesc'] ?? ''));

// ===== blogs description : HTML from TinyMCE -> as-is, plain text -> formatted =====
$blogDescRaw = (string) ($blog['desc'] ?? '');
if (strpos($blogDescRaw, '<') !== false && strpos($blogDescRaw, '>') !== false) {
	$blogDescHtml = $blogDescRaw;
} else {
	$blogDescHtml = render_pages_description($blogDescRaw, [
		'intro' => false,
		'article' => false,
		'list_class' => '',
	]);
}

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="about-banner"<?php if ((string) ($blogsBanner['wb_img'] ?? '') !== ''): ?> style="background-image: url('<?= htmlspecialchars((string) $blogsBanner['wb_img'], ENT_QUOTES, 'UTF-8') ?>');"<?php endif; ?>>
      <?php if ((string) ($blogsBanner['wb_video'] ?? '') !== ''): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= htmlspecialchars((string) $blogsBanner['wb_video'], ENT_QUOTES, 'UTF-8') ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <a href="blogs.php" class="about-banner__breadcrumb-link">Blogs</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8') ?></span>
        </nav>
      </div>
    </section>

    <!-- Blog Details -->
    <section class="section product-detail-sec-pad">
      <div class="container" style="max-width: 900px;">
        <h1 class="pd-detail-grid__title" style="font-size: 2.2rem; font-weight: 800; color: #0D47A1; margin-bottom: 12px;"><?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <?php if ((string) ($blog['author'] ?? '') !== ''): ?>
        <p style="font-size: 1.05rem; color: #555; margin-bottom: 20px;">By <?= htmlspecialchars($blog['author'] ?? '', ENT_QUOTES, 'UTF-8') ?></p>
        <?php endif; ?>
        <hr style="border: 1px solid #ccc; margin-bottom: 30px;">
        <div class="pd-detail-grid__desc">
          <?php if ($blogSdesc !== ''): ?>
          <p><?= nl2br(htmlspecialchars(pages_plain_input($blogSdesc), ENT_QUOTES, 'UTF-8')) ?></p>
          <?php endif; ?>
          <?php if ($blogDescHtml !== ''): ?>
          <?= $blogDescHtml ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
