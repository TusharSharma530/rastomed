<?php
/**
 * Blog Details Page - RastoMed Pharma
 */
?>
  <?php include __DIR__ . '/includes/header.php'; ?>
<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$blog = null;
if ($id && isset($con)) {
    $blogResult = mysqli_query($con, "SELECT * FROM blogs WHERE id = $id AND status = 1");
    if ($blogResult && mysqli_num_rows($blogResult)) {
        $blog = mysqli_fetch_assoc($blogResult);
    }
}

if (!$blog) {
    echo '<main><section class="section"><div class="container"><p>Blog not found.</p></div></section></main>';
    include __DIR__ . '/includes/footer.php';
    exit();
}

$blogsBanner = null;
if (isset($con)) {
    $bannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE category_id = 75 AND status = 1 ORDER BY wb_order ASC LIMIT 1");
    if ($bannerResult && mysqli_num_rows($bannerResult)) {
        $blogsBanner = mysqli_fetch_assoc($bannerResult);
    }
}
?>

  <main>
    <!-- Blog Details Banner -->
    <section class="about-banner" <?php if(!empty($blogsBanner['wb_img'])): ?>style="background-image: url('<?= $path . $blogsBanner['wb_img'] ?>');"<?php endif; ?>>
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title"><?= htmlspecialchars($blog['title']) ?></h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <a href="blogs.php" class="about-banner__breadcrumb-link">Blogs</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current"><?= htmlspecialchars($blog['title']) ?></span>
        </nav>
      </div>
    </section>

    <!-- Blog Details -->
    <section class="section product-detail-sec-pad">
      <div class="container" style="max-width: 900px;">
        <h1 class="pd-detail-grid__title" style="font-size: 2.2rem; font-weight: 800; color: #0D47A1; margin-bottom: 12px;"><?= htmlspecialchars($blog['title']) ?></h1>
        <?php if(!empty($blog['author'])): ?>
        <p style="font-size: 1.05rem; color: #555; margin-bottom: 20px;">By <?= htmlspecialchars($blog['author']) ?></p>
        <?php endif; ?>
        <hr style="border: 1px solid #ccc; margin-bottom: 30px;">
        <div class="pd-detail-grid__desc" style="font-size: 1rem; line-height: 1.8; color: #333;">
          <?php if(!empty($blog['sdesc'])): ?>
          <?= $blog['sdesc'] ?>
          <?php endif; ?>
          <?php if(!empty($blog['desc'])): ?>
          <?= $blog['desc'] ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
