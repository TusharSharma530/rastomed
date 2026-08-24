<?php
/**
 * Blogs & Scientific Insights - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Blogs & Insights', 'url' => 'blogs.php'],
];

$featuredPost = [
    'id' => 1,
    'title' => 'Breakthroughs in Solid Oral Dosage Formulations: Bioavailability Enhancement & SEDDS Technologies',
    'category' => 'R&D Insights',
    'date' => 'August 18, 2026',
    'readTime' => '5 min read',
    'author' => 'Dr. Rajesh Mehta',
    'authorRole' => 'VP of Formulation R&D',
    'image' => 'assets/images/blog-1.svg',
    'excerpt' => 'Exploring state-of-the-art self-emulsifying drug delivery systems (SEDDS) and hot-melt extrusion techniques for poorly soluble active pharmaceutical ingredients (APIs). Discover how our scientists achieved a 4-fold increase in drug absorption.',
];

$blogPosts = [
    [
        'id' => 2,
        'title' => 'Navigating Global WHO-GMP & ISO 9001:2015 Compliance in Modern Pharma Plants',
        'category' => 'regulatory',
        'categoryLabel' => 'Regulatory',
        'date' => 'August 10, 2026',
        'readTime' => '7 min read',
        'author' => 'Priya Sharma',
        'authorRole' => 'Head of Global Quality Assurance',
        'image' => 'assets/images/blog-2.svg',
        'excerpt' => 'A comprehensive guide on maintaining zero-defect audit readiness across international health authority inspections including EU-GMP and US FDA regulatory standards.',
    ],
    [
        'id' => 3,
        'title' => 'The Role of AI & Molecular Modeling in Accelerating Drug Discovery Pipelines',
        'category' => 'innovation',
        'categoryLabel' => 'Innovation',
        'date' => 'July 28, 2026',
        'readTime' => '6 min read',
        'author' => 'Dr. Aris Thorne',
        'authorRole' => 'Chief Scientific Officer',
        'image' => 'assets/images/blog-3.svg',
        'excerpt' => 'How machine learning algorithms predict target-ligand binding affinities, reducing early-stage pre-clinical screening timelines by over 40%.',
    ],
    [
        'id' => 4,
        'title' => 'Ensuring Cold-Chain Integrity for Temperature-Sensitive Biologics & Vaccines',
        'category' => 'logistics',
        'categoryLabel' => 'Logistics',
        'date' => 'July 14, 2026',
        'readTime' => '4 min read',
        'author' => 'Sanjay Verma',
        'authorRole' => 'Director of Global Supply Chain',
        'image' => 'assets/images/gallery-2.svg',
        'excerpt' => 'Leveraging IoT temperature-logging sensors and validated thermal packaging solutions to preserve product potency across international transit hubs.',
    ],
    [
        'id' => 5,
        'title' => 'Quality by Design (QbD) Approaches in Bioequivalent Generic Manufacturing',
        'category' => 'rd',
        'categoryLabel' => 'R&D Insights',
        'date' => 'June 30, 2026',
        'readTime' => '8 min read',
        'author' => 'Dr. Ananya Roy',
        'authorRole' => 'Principal Analytical Scientist',
        'image' => 'assets/images/gallery-3.svg',
        'excerpt' => 'Applying Design of Experiments (DoE) principles to identify critical process parameters (CPPs) and critical quality attributes (CQAs) in tablet compression.',
    ],
];
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
  <style>
    .featured-blog-card {
      background: var(--color-surface);
      border: 1px solid var(--color-border);
      border-radius: var(--radius-2xl);
      overflow: hidden;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: var(--space-6);
      box-shadow: var(--shadow-xl);
      margin-bottom: var(--space-12);
      transition: transform var(--transition-base);
    }
    @media (max-width: 992px) {
      .featured-blog-card {
        grid-template-columns: 1fr;
      }
    }
    .featured-blog-card:hover {
      transform: translateY(-4px);
      border-color: var(--color-primary-light);
    }
    .featured-blog-img {
      width: 100%;
      height: 100%;
      min-height: 320px;
      object-fit: cover;
    }
    .featured-blog-content {
      padding: var(--space-8);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .blog-filter-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: var(--space-4);
      margin-bottom: var(--space-8);
      padding-bottom: var(--space-4);
      border-bottom: 1px solid var(--color-border-light);
    }
    .blog-filter-pills {
      display: flex;
      gap: var(--space-2);
      flex-wrap: wrap;
    }
    .blog-filter-pill {
      padding: 0.4rem 1.1rem;
      border-radius: var(--radius-full);
      font-size: var(--fs-small);
      font-weight: var(--fw-bold);
      background: var(--color-surface-alt);
      color: var(--color-text-secondary);
      border: 1px solid var(--color-border);
      cursor: pointer;
      transition: all var(--transition-fast);
    }
    .blog-filter-pill:hover,
    .blog-filter-pill.active {
      background: var(--color-primary);
      color: #ffffff;
      border-color: var(--color-primary);
    }
    .blog-search-box {
      position: relative;
      min-width: 280px;
    }
    .blog-search-input {
      width: 100%;
      padding: 0.5rem 1rem 0.5rem 2.5rem;
      border-radius: var(--radius-full);
      border: 1px solid var(--color-border);
      background: var(--color-surface);
      color: var(--color-text);
      font-size: var(--fs-small);
    }
    .blog-search-icon {
      position: absolute;
      left: 0.85rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--color-text-muted);
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Page Hero -->
    <?= renderPageHero('Scientific Insights &amp; Publications', $breadcrumbs, 'In-depth research papers, pharmaceutical whitepapers, and regulatory updates written by PharmaCorp scientists and industry experts.') ?>

    <section class="section">
      <div class="container">
        <!-- FEATURED POST SPOTLIGHT -->
        <div class="featured-blog-card reveal">
          <div style="overflow:hidden;">
            <img src="<?= $featuredPost['image'] ?>" alt="<?= htmlspecialchars($featuredPost['title']) ?>" class="featured-blog-img">
          </div>
          <div class="featured-blog-content">
            <div style="display:flex; gap:var(--space-3); align-items:center; margin-bottom:var(--space-3);">
              <span class="trust-pill"><?= htmlspecialchars($featuredPost['category']) ?></span>
              <span style="font-size:var(--fs-xs); color:var(--color-text-muted);"><?= htmlspecialchars($featuredPost['date']) ?> &bull; <?= htmlspecialchars($featuredPost['readTime']) ?></span>
            </div>
            <h2 style="font-size:var(--fs-h3); font-weight:bold; margin-bottom:var(--space-3); line-height:var(--lh-snug);">
              <a href="blog-details.php?id=<?= $featuredPost['id'] ?>" style="color:var(--color-text);"><?= htmlspecialchars($featuredPost['title']) ?></a>
            </h2>
            <p style="font-size:var(--fs-body); color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              <?= htmlspecialchars($featuredPost['excerpt']) ?>
            </p>
            <div style="display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong style="display:block; font-size:var(--fs-small); color:var(--color-text);"><?= htmlspecialchars($featuredPost['author']) ?></strong>
                <span style="font-size:var(--fs-xs); color:var(--color-text-muted);"><?= htmlspecialchars($featuredPost['authorRole']) ?></span>
              </div>
              <a href="blog-details.php?id=<?= $featuredPost['id'] ?>" class="btn btn--primary btn--sm">
                Read Article &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- FILTER & SEARCH BAR -->
        <div class="blog-filter-bar">
          <div class="blog-filter-pills">
            <button class="blog-filter-pill active" data-filter="all">All Articles</button>
            <button class="blog-filter-pill" data-filter="rd">R&amp;D Insights</button>
            <button class="blog-filter-pill" data-filter="regulatory">Regulatory</button>
            <button class="blog-filter-pill" data-filter="innovation">Innovation</button>
            <button class="blog-filter-pill" data-filter="logistics">Logistics</button>
          </div>
          <div class="blog-search-box">
            <svg class="blog-search-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input type="text" id="blogSearch" class="blog-search-input" placeholder="Search scientific articles...">
          </div>
        </div>

        <!-- ARTICLES GRID -->
        <div class="rd-grid" id="blogGrid">
          <?php foreach ($blogPosts as $post): ?>
            <article class="rd-card reveal blog-post-item" data-category="<?= $post['category'] ?>">
              <div style="width:100%; height:180px; border-radius:var(--radius-lg); overflow:hidden; margin-bottom:var(--space-4);">
                <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:var(--space-3);">
                <span class="trust-pill" style="font-size:10px;"><?= htmlspecialchars($post['categoryLabel']) ?></span>
                <span style="font-size:var(--fs-xs); color:var(--color-text-muted);"><?= htmlspecialchars($post['date']) ?></span>
              </div>
              <h3 class="rd-card__title" style="font-size:var(--fs-h4); margin-bottom:var(--space-3); line-height:var(--lh-snug);">
                <a href="blog-details.php?id=<?= $post['id'] ?>" style="color:var(--color-text);"><?= htmlspecialchars($post['title']) ?></a>
              </h3>
              <p class="rd-card__text" style="font-size:var(--fs-small); margin-bottom:var(--space-5); flex-grow:1;">
                <?= htmlspecialchars($post['excerpt']) ?>
              </p>
              <div style="display:flex; justify-content:space-between; align-items:center; padding-top:var(--space-3); border-top:1px solid var(--color-border-light);">
                <span style="font-size:var(--fs-xs); font-weight:bold; color:var(--color-text-secondary);"><?= htmlspecialchars($post['author']) ?></span>
                <a href="blog-details.php?id=<?= $post['id'] ?>" class="card__link" style="font-size:var(--fs-xs);">Read &rarr;</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterPills = document.querySelectorAll('.blog-filter-pill');
      const posts = document.querySelectorAll('.blog-post-item');
      const searchInput = document.getElementById('blogSearch');

      filterPills.forEach(pill => {
        pill.addEventListener('click', function() {
          filterPills.forEach(p => p.classList.remove('active'));
          this.classList.add('active');
          const filter = this.getAttribute('data-filter');

          posts.forEach(post => {
            if (filter === 'all' || post.getAttribute('data-category') === filter) {
              post.style.display = 'block';
            } else {
              post.style.display = 'none';
            }
          });
        });
      });

      if (searchInput) {
        searchInput.addEventListener('input', function() {
          const val = this.value.toLowerCase();
          posts.forEach(post => {
            const title = post.querySelector('.rd-card__title').innerText.toLowerCase();
            const excerpt = post.querySelector('.rd-card__text').innerText.toLowerCase();
            if (title.includes(val) || excerpt.includes(val)) {
              post.style.display = 'block';
            } else {
              post.style.display = 'none';
            }
          });
        });
      }
    });
  </script>
</body>
</html>
