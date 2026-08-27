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
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Exploring the latest advancements and trends shaping the pharmaceutical industry in 2024 and beyond.</p>

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
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Natural approaches to strengthen your immune system and stay healthy throughout the year.</p>

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
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">The role of quality manufacturing in delivering safe and effective medicines to patients worldwide.</p>

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
        'title' => 'The Role of AI & Molecular Modeling in Drug Discovery',
        'category' => 'Innovation',
        'date' => 'July 28, 2026',
        'image' => 'assets/images/blog-3.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Navigating Global WHO-GMP Compliance',
        'category' => 'Regulatory',
        'date' => 'August 10, 2026',
        'image' => 'assets/images/blog-2.jpg',
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
  <style>
    .article-wrapper {
      max-width: 860px;
      margin: 0 auto;
    }
    .highlights-box {
      background: var(--color-surface-alt);
      border-left: 4px solid var(--color-primary);
      border-radius: var(--radius-xl);
      padding: var(--space-6) var(--space-8);
      margin-bottom: var(--space-8);
    }
    .highlights-box h4 {
      font-size: var(--fs-body);
      font-weight: var(--fw-bold);
      margin-bottom: var(--space-3);
      color: var(--color-primary);
    }
    .highlights-box ul {
      list-style-type: none;
      padding: 0;
    }
    .highlights-box li {
      position: relative;
      padding-left: 1.5rem;
      margin-bottom: var(--space-2);
      font-size: var(--fs-small);
      color: var(--color-text);
    }
    .highlights-box li::before {
      content: '✓';
      position: absolute;
      left: 0;
      color: var(--color-primary);
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="section" style="padding: clamp(0.5rem, 1vw, 1rem) 0 clamp(1.5rem, 3vw, 2rem);">
      <div class="container article-wrapper">
        <?= renderBreadcrumbs($breadcrumbs) ?>
        
        <header style="margin-top:var(--space-6); margin-bottom:var(--space-8);">
          <div style="display:flex; gap:var(--space-3); align-items:center; margin-bottom:var(--space-3);">
            <span class="trust-pill"><?= htmlspecialchars($post['category']) ?></span>
            <span style="font-size:var(--fs-xs); color:var(--color-text-muted);"><?= htmlspecialchars($post['date']) ?> &bull; <?= htmlspecialchars($post['readTime']) ?></span>
          </div>
          <h1 class="hero__title" style="font-size:var(--fs-h1); text-align:left; line-height:var(--lh-snug); margin-bottom:var(--space-4);">
            <?= htmlspecialchars($post['title']) ?>
          </h1>
          <div style="display:flex; align-items:center; gap:var(--space-4);">
            <div style="width:44px; height:44px; border-radius:var(--radius-full); background:var(--color-primary); color:#ffffff; font-weight:bold; display:flex; align-items:center; justify-content:center;">
              <?= substr($post['author'], 4, 1) ?>
            </div>
            <div>
              <strong style="display:block; font-size:var(--fs-small); color:var(--color-text);"><?= htmlspecialchars($post['author']) ?></strong>
              <span style="font-size:var(--fs-xs); color:var(--color-text-muted);"><?= htmlspecialchars($post['authorRole']) ?></span>
            </div>
          </div>
        </header>

        <!-- Main Banner Image -->
        <div style="width:100%; height:380px; border-radius:var(--radius-2xl); overflow:hidden; margin-bottom:var(--space-8); border:1px solid var(--color-border); box-shadow:var(--shadow-lg);">
          <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>" style="width:100%; height:100%; object-fit:cover;">
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
        <article class="article-content" style="font-size:var(--fs-body); line-height:var(--lh-relaxed); color:var(--color-text-secondary);">
          <?= $post['content'] ?>
        </article>

        <!-- Navigation Bar -->
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:var(--space-10); padding-top:var(--space-6); border-top:1px solid var(--color-border);">
          <a href="blogs.php" class="btn btn--outline">&larr; Back to Articles</a>
          <a href="contact.php?subject=Inquiry+on+<?= urlencode($post['title']) ?>" class="btn btn--primary">Inquire With Author &rarr;</a>
        </div>

        <!-- Related Articles -->
        <div style="margin-top:var(--space-12);">
          <h3 style="font-size:var(--fs-h3); font-weight:bold; margin-bottom:var(--space-6);">Related Scientific Insights</h3>
          <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:var(--space-6);">
            <?php foreach ($relatedPosts as $rel): ?>
              <div class="rd-card">
                <div style="width:100%; height:140px; border-radius:var(--radius-md); overflow:hidden; margin-bottom:var(--space-3);">
                  <img src="<?= $rel['image'] ?>" alt="<?= htmlspecialchars($rel['title']) ?>" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-2);"><?= htmlspecialchars($rel['category']) ?></span>
                <h4 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-2); line-height:var(--lh-snug);">
                  <a href="blog-details.php?id=<?= $rel['id'] ?>" style="color:var(--color-text);"><?= htmlspecialchars($rel['title']) ?></a>
                </h4>
                <a href="blog-details.php?id=<?= $rel['id'] ?>" class="card__link" style="font-size:var(--fs-xs);">Read &rarr;</a>
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
