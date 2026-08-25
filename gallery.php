<?php
/**
 * Gallery Page - PharmaCorp Enterprise
 * Showcase of R&D facilities, manufacturing plants, quality labs, and corporate events
 */
require_once __DIR__ . '/includes/components.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Gallery', 'url' => 'gallery.php'],
];

$galleryItems = [
    [
        'title' => 'Advanced Cleanroom R&D Suite',
        'category' => 'labs',
        'categoryLabel' => 'R&D Labs',
        'image' => 'assets/images/gallery-1.svg',
        'description' => 'Class 10,000 sterile laboratory for molecular research and formulation stability testing.',
    ],
    [
        'title' => 'Automated Solid Oral Packaging Line',
        'category' => 'facilities',
        'categoryLabel' => 'Facilities',
        'image' => 'assets/images/gallery-2.svg',
        'description' => 'High-speed automated blister packaging and cartoning line with vision inspection system.',
    ],
    [
        'title' => 'Analytical Quality Assurance Lab',
        'category' => 'quality',
        'categoryLabel' => 'Quality Assurance',
        'image' => 'assets/images/gallery-3.svg',
        'description' => 'HPLC and dissolution testing suite for zero-defect batch validation.',
    ],
    [
        'title' => 'Global Healthcare Summit 2026',
        'category' => 'events',
        'categoryLabel' => 'Corporate Events',
        'image' => 'assets/images/gallery-4.svg',
        'description' => 'PharmaCorp executive delegation presenting new therapeutic breakthroughs.',
    ],
    [
        'title' => 'Enterprise R&D Facility Headquarters',
        'category' => 'facilities',
        'categoryLabel' => 'Facilities',
        'image' => 'assets/images/hero-enterprise.svg',
        'description' => 'Main corporate R&D complex situated in Science Park.',
    ],
    [
        'title' => 'WHO-GMP Certified Quality Seal',
        'category' => 'quality',
        'categoryLabel' => 'Quality Assurance',
        'image' => 'assets/images/quality-enterprise.svg',
        'description' => 'International certification seal assuring zero-defect pharmaceutical manufacturing.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore PharmaCorp corporate gallery showcasing state-of-the-art R&amp;D laboratories, manufacturing plants, and quality control facilities.">
  <title>Corporate &amp; Facility Gallery - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Page Hero -->
    <?= renderPageHero('Corporate &amp; Facility Gallery', $breadcrumbs, 'Take a visual tour of our state-of-the-art research laboratories, automated manufacturing infrastructure, and quality control suites.') ?>

    <section class="section">
      <div class="container">
        <!-- Filter Tabs -->
        <div class="gallery-filter">
          <button class="gallery-filter__btn active" data-filter="all">All Photos</button>
          <button class="gallery-filter__btn" data-filter="labs">R&amp;D Labs</button>
          <button class="gallery-filter__btn" data-filter="facilities">Facilities</button>
          <button class="gallery-filter__btn" data-filter="quality">Quality Assurance</button>
          <button class="gallery-filter__btn" data-filter="events">Corporate Events</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
          <?php foreach ($galleryItems as $item): ?>
            <div class="gallery-card reveal" data-category="<?= $item['category'] ?>">
              <div class="gallery-card__img-wrapper">
                <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?>" width="600" height="400" loading="lazy">
              </div>
              <div class="gallery-card__body">
                <span class="trust-pill gallery-trust-pill"><?= htmlspecialchars($item['categoryLabel']) ?></span>
                <h3 class="gallery-card__title"><?= htmlspecialchars($item['title']) ?></h3>
                <p class="gallery-card__desc"><?= htmlspecialchars($item['description']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterBtns = document.querySelectorAll('.gallery-filter__btn');
      const galleryCards = document.querySelectorAll('.gallery-card');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => b.classList.remove('active'));
          this.classList.add('active');

          const filter = this.getAttribute('data-filter');
          galleryCards.forEach(card => {
            if (filter === 'all' || card.getAttribute('data-category') === filter) {
              card.style.display = 'block';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
</body>
</html>
