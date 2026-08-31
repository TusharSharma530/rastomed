<?php
/**
 * Blog Article Detail View - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$postId = isset($_GET['id']) ? intval($_GET['id']) : 1;

$posts = [
    1 => [
        'id' => 1,
        'title' => 'Latest Trends in Pharmaceutical Industry in 2024',
        'category' => 'Pharma News',
        'date' => 'May 10, 2024',
        'readTime' => '5 min read',
        'author' => 'RastoMed Pharma',
        'authorRole' => 'Industry Insights',
        'image' => 'assets/images/blog-research.jpg',
        'highlights' => [
            'Latest pharmaceutical industry trends for 2024.',
            'Innovation and technology advancements.',
            'Market growth and opportunities.',
        ],
        'content' => '
            <p class="lead lead-p-blog">Exploring the latest advancements and trends shaping the pharmaceutical industry in 2024 and beyond.</p>

            <h3>Industry Overview</h3>
            <p>The pharmaceutical industry continues to evolve with new technologies, regulatory changes, and shifting market dynamics. This article explores the key trends that are shaping the future of healthcare and pharmaceutical manufacturing.</p>

            <h3>Key Trends</h3>
            <ul>
                <li><strong>Digital Transformation:</strong> AI and machine learning are revolutionizing drug discovery and development processes.</li>
                <li><strong>Sustainability:</strong> Green manufacturing practices are becoming industry standards.</li>
                <li><strong>Personalized Medicine:</strong> Tailored treatments based on genetic profiles are gaining momentum.</li>
            </ul>
        ',
    ],
    2 => [
        'id' => 2,
        'title' => '5 Simple Ways to Boost Your Immunity Naturally',
        'category' => 'Health Tips',
        'date' => 'May 05, 2024',
        'readTime' => '4 min read',
        'author' => 'RastoMed Pharma',
        'authorRole' => 'Health & Wellness',
        'image' => 'assets/images/blog-health.jpg',
        'highlights' => [
            'Natural approaches to strengthen immunity.',
            'Diet and lifestyle tips for better health.',
            'Supplements that support immune function.',
        ],
        'content' => '
            <p class="lead lead-p-blog">Natural approaches to strengthen your immune system and stay healthy throughout the year.</p>

            <h3>Simple Ways to Boost Immunity</h3>
            <p>A strong immune system is your body\'s first line of defense against infections and diseases. Here are five simple and effective ways to naturally boost your immunity.</p>

            <ul>
                <li><strong>Balanced Diet:</strong> Eat a variety of fruits, vegetables, and whole grains rich in vitamins and minerals.</li>
                <li><strong>Regular Exercise:</strong> Physical activity helps improve circulation and immune response.</li>
                <li><strong>Adequate Sleep:</strong> Aim for 7-8 hours of quality sleep each night.</li>
                <li><strong>Stay Hydrated:</strong> Drink plenty of water throughout the day.</li>
                <li><strong>Manage Stress:</strong> Practice relaxation techniques like meditation and deep breathing.</li>
            </ul>
        ',
    ],
    3 => [
        'id' => 3,
        'title' => 'How Quality Manufacturing Ensures Better Healthcare',
        'category' => 'Pharma Updates',
        'date' => 'April 28, 2024',
        'readTime' => '5 min read',
        'author' => 'RastoMed Pharma',
        'authorRole' => 'Quality Assurance',
        'image' => 'assets/images/blog-manufacturing.jpg',
        'highlights' => [
            'Role of quality manufacturing in healthcare.',
            'GMP standards and compliance.',
            'Ensuring safe and effective medicines.',
        ],
        'content' => '
            <p class="lead lead-p-blog">The role of quality manufacturing in delivering safe and effective medicines to patients worldwide.</p>

            <h3>Quality Manufacturing Standards</h3>
            <p>Quality manufacturing is the cornerstone of pharmaceutical production. It ensures that every product meets the highest standards of safety, efficacy, and consistency.</p>

            <ul>
                <li><strong>GMP Compliance:</strong> Following Good Manufacturing Practices ensures consistent product quality.</li>
                <li><strong>Quality Control:</strong> Rigorous testing at every stage of production.</li>
                <li><strong>Documentation:</strong> Comprehensive records for traceability and accountability.</li>
            </ul>
        ',
    ],
];

$post = isset($posts[$postId]) ? $posts[$postId] : $posts[1];

$relatedPosts = array_values(array_filter($posts, fn($p) => $p['id'] != $postId));

$breadcrumbs = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Blogs', 'url' => 'blogs.php'],
    ['label' => $post['category'], 'url' => 'blogs.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($post['title']) ?> - PharmaCorp Scientific Publication.">
  <title><?= htmlspecialchars($post['title']) ?> - PharmaCorp Enterprise</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="section article-section-padding">
      <div class="container">
        <div class="article-wrapper">
          <?= renderBreadcrumbs($breadcrumbs) ?>
          
          <header class="article-header-margin">
            <div class="article-meta-flex">
              <span class="trust-pill"><?= htmlspecialchars($post['category']) ?></span>
              <span class="article-date-muted"><?= htmlspecialchars($post['date']) ?> &bull; <?= htmlspecialchars($post['readTime']) ?></span>
            </div>
            <h1 class="hero__title article-main-title">
              <?= htmlspecialchars($post['title']) ?>
            </h1>
            <div class="article-author-flex">
              <div class="article-author-circle">
                <?= substr($post['author'], 4, 1) ?>
              </div>
              <div>
                <strong class="article-author-strong"><?= htmlspecialchars($post['author']) ?></strong>
                <span class="article-author-span"><?= htmlspecialchars($post['authorRole']) ?></span>
              </div>
            </div>
          </header>

          <!-- Main Banner Image -->
          <div class="article-banner-wrap">
            <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
          </div>

          <!-- Key Takeaways Box -->
          <?php if (!empty($post['highlights'])): ?>
            <div class="highlights-box">
              <h4>Key Article Highlights</h4>
              <ul>
                <?php foreach ($post['highlights'] as $highlight): ?>
                  <li><?= htmlspecialchars($highlight) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <!-- Content -->
          <article class="article-content article-body-content">
            <?= $post['content'] ?>
          </article>

          <!-- Navigation Bar -->
          <div class="article-nav-bar">
            <a href="blogs.php" class="btn btn--outline">&larr; Back to Articles</a>
            <a href="contact.php?subject=Inquiry+on+<?= urlencode($post['title']) ?>" class="btn btn--primary">Inquire With Author &rarr;</a>
          </div>

          <!-- Related Articles -->
          <div class="related-insights-wrap">
            <h3 class="related-insights-title">Related Scientific Insights</h3>
            <div class="related-insights-grid">
              <?php foreach ($relatedPosts as $rel): ?>
                <div class="rd-card">
                  <div class="related-item-img">
                    <img src="<?= $rel['image'] ?>" alt="<?= htmlspecialchars($rel['title']) ?>">
                  </div>
                  <span class="trust-pill related-item-pill"><?= htmlspecialchars($rel['category']) ?></span>
                  <h4 class="related-item-heading">
                    <a href="blog-details.php?id=<?= $rel['id'] ?>"><?= htmlspecialchars($rel['title']) ?></a>
                  </h4>
                  <a href="blog-details.php?id=<?= $rel['id'] ?>" class="card__link related-item-link">Read &rarr;</a>
                </div>
              <?php endforeach; ?>
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
