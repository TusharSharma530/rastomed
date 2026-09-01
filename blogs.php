<?php
/**
 * Blogs & Scientific Insights - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Blogs & Insights', 'url' => 'blogs.php'],
];

/*
$blogPosts = [
    [
        'id' => 1,
        'title' => 'Latest Trends in Pharmaceutical Industry in 2024',
        'category' => 'Pharma News',
        'date' => 'May 10, 2024',
        'image' => 'assets/images/blog-research.jpg',
        'excerpt' => 'Exploring the latest advancements and trends shaping the pharmaceutical industry.',
    ],
    [
        'id' => 2,
        'title' => '5 Simple Ways to Boost Your Immunity Naturally',
        'category' => 'Health Tips',
        'date' => 'May 05, 2024',
        'image' => 'assets/images/blog-health.jpg',
        'excerpt' => 'Natural approaches to strengthen your immune system and stay healthy.',
    ],
    [
        'id' => 3,
        'title' => 'How Quality Manufacturing Ensures Better Healthcare',
        'category' => 'Pharma Updates',
        'date' => 'April 28, 2024',
        'image' => 'assets/images/blog-manufacturing.jpg',
        'excerpt' => 'The role of quality manufacturing in delivering safe and effective medicines.',
    ],
];
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Scientific Insights - Expert technical articles, whitepapers, and scientific publications on pharmaceutical R&amp;D and regulatory standards.">
  <title>Blogs &amp; Scientific Insights - PharmaCorp Enterprise</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Blogs Banner -->
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">Blogs</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">Blogs</span>
        </nav>
      </div>
    </section>

    <section class="section blogs-sec-pad">
      <div class="container">
        <div class="blogs-grid" style="display:flex; justify-content:center;">
          <!--
          <?php // foreach ($blogPosts as $b): ?>
            <div class="blog-card reveal">
              <div class="blog-card__image">
                <img src="<?= $b['image'] ?>" alt="<?= htmlspecialchars($b['title']) ?>" width="400" height="220" loading="lazy">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__category"><?= htmlspecialchars($b['category']) ?></span>
                  <span class="blog-card__date"><?= htmlspecialchars($b['date']) ?></span>
                </div>
                <h3 class="blog-card__title"><?= htmlspecialchars($b['title']) ?></h3>
                <a href="blog-details.php?id=<?= $b['id'] ?>" class="blog-card__link">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
              </div>
            </div>
          <?php // endforeach; ?>
          -->
          <div class="blog-card reveal">
            <div class="blog-card__body" style="text-align:center; padding:60px 20px;">
              <h3 class="blog-card__title" style="font-size:1.8rem; color:#1a3c6e;">Coming Soon</h3>
              <p style="color:#666; margin-top:10px;">We are working on something amazing. Stay tuned!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
