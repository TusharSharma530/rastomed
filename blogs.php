<?php

?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$blogsRow = null;
$blogsBanner = null;
$allBlogs = [];
if (isset($con)) {
    $blogCatResult = mysqli_query($con, "SELECT * FROM category WHERE id = 75 AND status = 1");
    if ($blogCatResult && mysqli_num_rows($blogCatResult)) {
        $blogsRow = mysqli_fetch_assoc($blogCatResult);
    }
    $bannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 75 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
    if ($bannerResult && mysqli_num_rows($bannerResult)) {
        $blogsBanner = mysqli_fetch_assoc($bannerResult);
    }
    $blogsResult = mysqli_query($con, "SELECT * FROM blogs WHERE status = 1 ORDER BY id DESC");
    if ($blogsResult && mysqli_num_rows($blogsResult)) {
        while ($rw = mysqli_fetch_assoc($blogsResult)) {
            $allBlogs[] = $rw;
        }
    }
}
?>

  <main>
    
    <section class="about-banner"<?php if(!empty($blogsBanner['wb_img'])): ?> style="background-image: url('<?= $path . $blogsBanner['wb_img'] ?>');"<?php endif; ?>>
      <?php if(!empty($blogsBanner['wb_video'])): ?>
      <video class="banner-bg-video" autoplay muted loop playsinline>
        <source src="<?= $path . $blogsBanner['wb_video'] ?>">
      </video>
      <?php endif; ?>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($blogsRow['c_name'] ?? 'Blogs') ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($blogsRow['c_name'] ?? 'Blogs') ?></span>
        </nav>
      </div>
    </section>

    <section class="section blogs-sec-pad">
      <div class="container">
        <div class="blogs-grid" style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
<?php if (!empty($allBlogs)) { foreach ($allBlogs as $blog) { ?>
          <div class="blog-card reveal">
            <div class="blog-card__image">
              <?php if(!empty($blog['file'])): ?>
              <img src="<?= $path . $blog['file'] ?>" alt="<?= htmlspecialchars($blog['title']) ?>" width="400" height="220" loading="lazy">
              <?php else: ?>
              <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <h3 class="blog-card__title"><?= htmlspecialchars($blog['title']) ?></h3>
              <?php if(!empty($blog['date'])): ?>
              <div class="blog-card__meta">
                <span class="blog-card__date"><?= htmlspecialchars($blog['date']) ?></span>
              </div>
              <?php endif; ?>
              <a href="blog-details.php?id=<?= $blog['id'] ?>" class="blog-card__link">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
<?php } } else { ?>
          <div class="blog-card reveal">
            <div class="blog-card__body" style="text-align:center; padding:60px 20px;">
              <h3 class="blog-card__title coming-soon-title">Coming Soon</h3>
              <p class="coming-soon-text">We are working on something amazing. Stay tuned!</p>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
