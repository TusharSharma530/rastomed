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
            <p class="lead article-lead">Exploring the latest advancements and trends shaping the pharmaceutical industry in 2024 and beyond.</p>

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
            <p class="lead article-lead">Natural approaches to strengthen your immune system and stay healthy throughout the year.</p>

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
            <p class="lead article-lead">The role of quality manufacturing in delivering safe and effective medicines to patients worldwide.</p>

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

$relatedPosts = [
    [
        'id' => 3,
        'title' => 'How Quality Manufacturing Ensures Better Healthcare',
        'category' => 'Pharma Updates',
        'date' => 'April 28, 2024',
        'image' => 'assets/images/blog-manufacturing.jpg',
    ],
    [
        'id' => 2,
        'title' => '5 Simple Ways to Boost Your Immunity Naturally',
        'category' => 'Health Tips',
        'date' => 'May 05, 2024',
        'image' => 'assets/images/blog-health.jpg',
    ],
];

$post = isset($posts[$postId]) ? $posts[$postId] : $posts[1];

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
    <section class="section">
      <div class="container article-wrapper">
        <?= renderBreadcrumbs($breadcrumbs) ?>
        
        <header class="blog-header">
          <div class="blog-header__meta">
            <span class="trust-pill"><?= htmlspecialchars($post['category']) ?></span>
            <span class="blog-header__date"><?= htmlspecialchars($post['date']) ?> &bull; <?= htmlspecialchars($post['readTime']) ?></span>
          </div>
          <h1 class="hero__title blog-header__title">
            <?= htmlspecialchars($post['title']) ?>
          </h1>
          <div class="blog-author">
            <div class="blog-author__avatar">
              <?= substr($post['author'], 4, 1) ?>
            </div>
            <div>
              <strong class="blog-author__name"><?= htmlspecialchars($post['author']) ?></strong>
              <span class="blog-author__role"><?= htmlspecialchars($post['authorRole']) ?></span>
            </div>
          </div>
        </header>

        <!-- Main Banner Image -->
        <div class="blog-featured-image">
          <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="blog-featured-img">
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
        <article class="article-content blog-content">
          <?= $post['content'] ?>
        </article>

        <!-- Navigation Bar -->
        <div class="blog-nav">
          <a href="blogs.php" class="btn btn--outline">&larr; Back to Articles</a>
          <a href="contact.php?subject=Inquiry+on+<?= urlencode($post['title']) ?>" class="btn btn--primary">Inquire With Author &rarr;</a>
        </div>

        <!-- Related Articles -->
        <div class="blog-related">
          <h3 class="blog-related__title">Related Scientific Insights</h3>
          <div class="blogs-grid">
            <?php foreach ($relatedPosts as $rel): ?>
              <div class="blog-card reveal">
                <div class="blog-card__image">
                  <img src="<?= $rel['image'] ?>" alt="<?= htmlspecialchars($rel['title']) ?>" width="400" height="220" loading="lazy">
                </div>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <span class="blog-card__category"><?= htmlspecialchars($rel['category']) ?></span>
                    <span class="blog-card__date"><?= htmlspecialchars($rel['date']) ?></span>
                  </div>
                  <h3 class="blog-card__title"><?= htmlspecialchars($rel['title']) ?></h3>
                  <a href="blog-details.php?id=<?= $rel['id'] ?>" class="blog-card__link">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
