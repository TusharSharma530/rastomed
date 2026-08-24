<?php
/**
 * Blog Article Detail Page - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$postId = isset($_GET['id']) ? intval($_GET['id']) : 1;

$posts = [
    1 => [
        'title' => 'Breakthroughs in Solid Oral Dosage Formulations: Bioavailability Enhancement',
        'category' => 'R&D Insights',
        'date' => 'August 18, 2026',
        'readTime' => '5 min read',
        'author' => 'Dr. Rajesh Mehta',
        'authorRole' => 'VP of Formulation R&D',
        'image' => 'assets/images/blog-1.svg',
        'content' => '
            <p>Solid oral dosage forms, such as tablets and hard gelatin capsules, remain the most widely accepted route of drug administration worldwide. However, nearly 40% of newly discovered active pharmaceutical ingredients (APIs) exhibit poor aqueous solubility, posing significant challenges to systemic bioavailability and clinical therapeutic outcomes.</p>

            <h3>Key Technological Breakthroughs</h3>
            <p>At PharmaCorp R&D, our scientists focus on several advanced solubilization technologies to overcome enteric absorption barriers:</p>
            <ul>
                <li><strong>Self-Emulsifying Drug Delivery Systems (SEDDS):</strong> Isotropic mixtures of oils, surfactants, and co-solvents that rapidly form fine oil-in-water microemulsions upon contact with gastrointestinal fluids.</li>
                <li><strong>Hot-Melt Extrusion (HME):</strong> Dispersing hydrophobic APIs into hydrophilic polymer matrices at a molecular level, creating stable amorphous solid dispersions.</li>
                <li><strong>Nanocrystallization:</strong> Media milling and high-pressure homogenization to reduce particle sizes to sub-micron scales, exponentially increasing surface area dissolution velocity according to the Noyes-Whitney equation.</li>
            </ul>

            <h3>Clinical Efficacy & Impact</h3>
            <p>Through validated in-vitro dissolution testing and bioequivalence clinical trials, our formulation team has demonstrated up to a 4-fold increase in Cmax and AUC for poorly soluble molecules, ensuring consistent therapeutic dosing for patients globally.</p>
        ',
    ],
    2 => [
        'title' => 'Navigating Global WHO-GMP & ISO 9001:2015 Compliance in Modern Pharma Plants',
        'category' => 'Regulatory',
        'date' => 'August 10, 2026',
        'readTime' => '7 min read',
        'author' => 'Priya Sharma',
        'authorRole' => 'Head of Global Quality Assurance',
        'image' => 'assets/images/blog-2.svg',
        'content' => '
            <p>Quality Assurance in pharmaceutical manufacturing is not merely a statutory obligation; it is a foundational pillar that safeguards patient lives across international markets. Modern automated manufacturing facilities must maintain continuous audit readiness.</p>

            <h3>Core Compliance Pillars</h3>
            <p>PharmaCorp’s Quality Management System (QMS) enforces strict standards across all manufacturing operations:</p>
            <ul>
                <li><strong>Data Integrity & ALCOA+ Standards:</strong> All analytical software and electronic batch record (eBR) systems comply with US FDA 21 CFR Part 11 regulations.</li>
                <li><strong>Cleanroom Environmental Validation:</strong> HEPA air filtration maintaining Class 10,000 (ISO Grade 7) HVAC differential pressure zones for non-sterile and sterile areas.</li>
                <li><strong>CAPA & Deviation Control:</strong> Automated corrective and preventive action workflows guaranteeing root cause identification for any batch variation.</li>
            </ul>
        ',
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
  <meta name="description" content="<?= htmlspecialchars($post['title']) ?> - PharmaCorp Scientific Blog">
  <title><?= htmlspecialchars($post['title']) ?> - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .article-container {
      max-width: 840px;
      margin: 0 auto;
    }
    .article-header {
      margin-bottom: var(--space-8);
    }
    .article-meta {
      display: flex;
      gap: var(--space-4);
      align-items: center;
      margin-bottom: var(--space-4);
      font-size: var(--fs-small);
      color: var(--color-text-muted);
    }
    .article-hero-img {
      width: 100%;
      height: 380px;
      border-radius: var(--radius-2xl);
      overflow: hidden;
      margin-bottom: var(--space-8);
      border: 1px solid var(--color-border);
    }
    .article-hero-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .article-content {
      font-size: var(--fs-body);
      line-height: var(--lh-relaxed);
      color: var(--color-text);
    }
    .article-content h3 {
      font-size: var(--fs-h3);
      margin: var(--space-8) 0 var(--space-4);
      color: var(--color-text);
    }
    .article-content p {
      margin-bottom: var(--space-6);
      color: var(--color-text-secondary);
    }
    .article-content ul {
      margin-bottom: var(--space-6);
      padding-left: var(--space-6);
      list-style-type: disc;
    }
    .article-content li {
      margin-bottom: var(--space-3);
      color: var(--color-text-secondary);
    }
    .author-box {
      display: flex;
      align-items: center;
      gap: var(--space-4);
      padding: var(--space-6);
      background: var(--color-surface-alt);
      border-radius: var(--radius-xl);
      margin-top: var(--space-10);
    }
    .author-box__avatar {
      width: 54px;
      height: 54px;
      border-radius: var(--radius-full);
      background: var(--color-primary);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="section">
      <div class="container article-container">
        <?= renderBreadcrumbs($breadcrumbs) ?>
        
        <header class="article-header" style="margin-top:var(--space-6);">
          <div class="article-meta">
            <span class="trust-pill"><?= htmlspecialchars($post['category']) ?></span>
            <span>Published <?= htmlspecialchars($post['date']) ?></span>
            <span>&bull; <?= htmlspecialchars($post['readTime']) ?></span>
          </div>
          <h1 class="hero__title" style="font-size:var(--fs-h1); text-align:left; margin-bottom:var(--space-4);">
            <?= htmlspecialchars($post['title']) ?>
          </h1>
        </header>

        <div class="article-hero-img">
          <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
        </div>

        <article class="article-content">
          <?= $post['content'] ?>

          <div class="author-box">
            <div class="author-box__avatar">
              <?= substr($post['author'], 4, 1) ?>
            </div>
            <div>
              <h4 style="font-weight:bold; font-size:var(--fs-h4);"><?= htmlspecialchars($post['author']) ?></h4>
              <p style="font-size:var(--fs-xs); color:var(--color-text-muted); margin:0;"><?= htmlspecialchars($post['authorRole']) ?></p>
            </div>
          </div>

          <div style="margin-top:var(--space-8); display:flex; justify-content:space-between; align-items:center;">
            <a href="blogs.php" class="btn btn--outline">&larr; Back to Blogs</a>
            <a href="contact.php" class="btn btn--primary">Contact Author</a>
          </div>
        </article>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
