<?php
/**
 * Blogs & Insights Page - PharmaCorp Enterprise
 * Corporate articles, scientific research updates, and pharmaceutical trends
 */
require_once __DIR__ . '/includes/components.php';

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Blogs & Insights', 'url' => 'blogs.php'],
];

$blogPosts = [
    [
        'id' => 1,
        'title' => 'Breakthroughs in Solid Oral Dosage Formulations: Bioavailability Enhancement',
        'category' => 'R&D Insights',
        'slug' => 'breakthroughs-in-solid-oral-dosage',
        'date' => 'August 18, 2026',
        'readTime' => '5 min read',
        'author' => 'Dr. Rajesh Mehta',
        'authorRole' => 'VP of Formulation R&D',
        'image' => 'assets/images/blog-1.svg',
        'excerpt' => 'Exploring state-of-the-art lipid-based drug delivery systems (SEDDS) and hot-melt extrusion techniques for poorly soluble active pharmaceutical ingredients.',
    ],
    [
        'id' => 2,
        'title' => 'Navigating Global WHO-GMP & ISO 9001:2015 Compliance in Modern Pharma Plants',
        'category' => 'Regulatory',
        'slug' => 'navigating-global-gmp-compliance',
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
        'category' => 'Innovation',
        'slug' => 'role-of-ai-in-drug-discovery',
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
        'category' => 'Logistics',
        'slug' => 'ensuring-cold-chain-integrity',
        'date' => 'July 14, 2026',
        'readTime' => '4 min read',
        'author' => 'Sanjay Verma',
        'authorRole' => 'Director of Global Supply Chain',
        'image' => 'assets/images/gallery-2.svg',
        'excerpt' => 'Leveraging IoT temperature-logging sensors and validated thermal packaging solutions to preserve product potency across international transit hubs.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Scientific Blog - Insights on pharmaceutical R&amp;D, WHO-GMP compliance, drug discovery, and healthcare innovation.">
  <title>Blogs &amp; Scientific Insights - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: var(--space-8);
    }
    .blog-card {
      background: var(--color-surface);
      border-radius: var(--radius-xl);
      overflow: hidden;
      border: 1px solid var(--color-border);
      transition: transform var(--transition-base), box-shadow var(--transition-base);
      display: flex;
      flex-direction: column;
    }
    .blog-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-xl);
      border-color: var(--color-primary-light);
    }
    .blog-card__img-wrapper {
      width: 100%;
      height: 220px;
      overflow: hidden;
      background: var(--color-surface-alt);
    }
    .blog-card__img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform var(--transition-slow);
    }
    .blog-card:hover .blog-card__img-wrapper img {
      transform: scale(1.05);
    }
    .blog-card__body {
      padding: var(--space-6);
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .blog-card__meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: var(--space-3);
      font-size: var(--fs-xs);
      color: var(--color-text-muted);
    }
    .blog-card__title {
      font-size: var(--fs-h4);
      font-weight: var(--fw-bold);
      margin-bottom: var(--space-3);
      line-height: var(--lh-snug);
    }
    .blog-card__title a {
      color: var(--color-text);
    }
    .blog-card__title a:hover {
      color: var(--color-primary);
    }
    .blog-card__excerpt {
      font-size: var(--fs-small);
      color: var(--color-text-secondary);
      line-height: var(--lh-relaxed);
      margin-bottom: var(--space-6);
      flex-grow: 1;
    }
    .blog-card__footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: var(--space-4);
      border-top: 1px solid var(--color-border-light);
    }
    .blog-card__author {
      font-size: var(--fs-xs);
      font-weight: var(--fw-bold);
      color: var(--color-text-secondary);
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Page Hero -->
    <?= renderPageHero('Blogs &amp; Scientific Insights', $breadcrumbs, 'Explore expert articles, whitepapers, and updates on pharmaceutical R&amp;D, regulatory compliance, and medical innovations.') ?>

    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Articles &amp; Research</span>
          <h2 class="section__title">Latest Corporate &amp; Scientific News</h2>
        </div>

        <div class="blog-grid">
          <?php foreach ($blogPosts as $post): ?>
            <article class="blog-card reveal">
              <div class="blog-card__img-wrapper">
                <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" width="600" height="350" loading="lazy">
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="trust-pill" style="font-size:10px;"><?= htmlspecialchars($post['category']) ?></span>
                  <span><?= htmlspecialchars($post['date']) ?> &bull; <?= htmlspecialchars($post['readTime']) ?></span>
                </div>
                <h3 class="blog-card__title">
                  <a href="blog-details.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a>
                </h3>
                <p class="blog-card__excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
                <div class="blog-card__footer">
                  <span class="blog-card__author">By <?= htmlspecialchars($post['author']) ?></span>
                  <a href="blog-details.php?id=<?= $post['id'] ?>" class="card__link" style="font-size:var(--fs-xs);">
                    Read Article &rarr;
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="section section--alt">
      <div class="container">
        <div class="cta-clean">
          <div class="cta-clean__content">
            <h2 class="cta-clean__title">Subscribe to Scientific Updates</h2>
            <p class="cta-clean__text">Receive monthly digests on pharmaceutical regulatory filings, whitepapers, and therapeutic developments directly to your inbox.</p>
            <div class="cta-clean__buttons">
              <?= renderButton('Subscribe Now', 'contact.php', 'primary', 'lg') ?>
              <?= renderButton('Contact Editorial', 'contact.php', 'outline', 'lg') ?>
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
