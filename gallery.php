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
  <style>
    .gallery-filter {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: var(--space-3);
      margin-bottom: var(--space-8);
    }
    .gallery-filter__btn {
      padding: 0.5rem 1.25rem;
      border-radius: var(--radius-full);
      font-size: var(--fs-small);
      font-weight: var(--fw-bold);
      background: var(--color-surface-alt);
      color: var(--color-text-secondary);
      border: 1px solid var(--color-border);
      transition: all var(--transition-fast);
      cursor: pointer;
    }
    .gallery-filter__btn:hover,
    .gallery-filter__btn.active {
      background: var(--color-primary);
      color: #ffffff;
      border-color: var(--color-primary);
    }
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: var(--space-8);
    }
    .gallery-card {
      background: var(--color-surface);
      border-radius: var(--radius-xl);
      overflow: hidden;
      border: 1px solid var(--color-border);
      transition: transform var(--transition-base), box-shadow var(--transition-base);
    }
    .gallery-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-xl);
      border-color: var(--color-primary-light);
    }
    .gallery-card__img-wrapper {
      position: relative;
      width: 100%;
      height: 240px;
      overflow: hidden;
      background: var(--color-surface-alt);
    }
    .gallery-card__img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform var(--transition-slow);
    }
    .gallery-card:hover .gallery-card__img-wrapper img {
      transform: scale(1.05);
    }
    .gallery-card__body {
      padding: var(--space-6);
    }
    .gallery-card__title {
      font-size: var(--fs-h4);
      font-weight: var(--fw-bold);
      margin-bottom: var(--space-2);
    }
    .gallery-card__desc {
      font-size: var(--fs-small);
      color: var(--color-text-secondary);
      line-height: var(--lh-normal);
    }
  </style>
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
                <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-2);"><?= htmlspecialchars($item['categoryLabel']) ?></span>
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
