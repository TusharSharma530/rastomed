<?php
/**
 * Blog Article Detail View - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$postId = isset($_GET['id']) ? intval($_GET['id']) : 1;

$posts = [
    1 => [
        'id' => 1,
        'title' => 'Breakthroughs in Solid Oral Dosage Formulations: Bioavailability Enhancement',
        'category' => 'R&D Insights',
        'date' => 'August 18, 2026',
        'readTime' => '5 min read',
        'author' => 'Dr. Rajesh Mehta',
        'authorRole' => 'VP of Formulation R&D',
        'image' => 'assets/images/blog-1.jpg',
        'highlights' => [
            'Overcoming aqueous solubility barriers in BCS Class II & IV compounds.',
            'Implementation of Self-Emulsifying Drug Delivery Systems (SEDDS).',
            'Hot-Melt Extrusion (HME) for molecular amorphous solid dispersions.',
            '4-fold improvement in Cmax and AUC bioequivalence outcomes.',
        ],
        'content' => '
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Solid oral dosage forms, such as tablets and hard gelatin capsules, remain the gold standard of therapeutic drug administration worldwide. However, nearly 40% of newly synthesized active pharmaceutical ingredients (APIs) exhibit severe aqueous insolubility, posing critical challenges to gastrointestinal bioavailability.</p>

            <h3>The Challenge of Poorly Soluble APIs</h3>
            <p>Under the Biopharmaceutics Classification System (BCS), Class II (high permeability, low solubility) and Class IV (low permeability, low solubility) compounds require advanced solubilization technologies to achieve clinically effective plasma concentration profiles. Without enhanced drug delivery platforms, unformulated hydrophobic drugs suffer from erratic absorption and poor patient compliance.</p>

            <blockquote style="border-left:4px solid var(--color-primary); padding:var(--space-4) var(--space-6); background:var(--color-surface-alt); border-radius:var(--radius-md); font-style:italic; margin:var(--space-6) 0; font-size:var(--fs-body);">
                "By tailoring lipid-based microemulsion vectors, PharmaCorp formulation teams achieved consistent zero-order dissolution profiles across varied pH environments."
            </blockquote>

            <h3>Key Technological Breakthroughs at PharmaCorp R&D</h3>
            <p>At PharmaCorp R&D center, our analytical formulation scientists employ three primary technology platforms:</p>
            <ul>
                <li><strong>Self-Emulsifying Drug Delivery Systems (SEDDS):</strong> Isotropic liquid mixtures composed of synthetic triglycerides, lipophilic surfactants, and co-solvents that rapidly form isotropic oil-in-water microemulsions upon contact with gastric fluids.</li>
                <li><strong>Hot-Melt Extrusion (HME):</strong> Polymer matrix extrusion processing that disperses crystalline drug molecules into an amorphous state, preventing re-crystallization during shelf storage.</li>
                <li><strong>High-Pressure Nanocrystallization:</strong> Wet media milling reducing particle size dimensions below 200 nanometers, expanding total effective surface area according to the Noyes-Whitney dissolution equation.</li>
            </ul>

            <h3>Clinical Bioavailability Outcomes</h3>
            <p>In-vivo bioequivalence studies conducted under strict Good Clinical Practice (GCP) guidelines confirmed a 400% elevation in AUC values compared to conventional un-formulated reference standards, validating the commercial viability of SEDDS for our next-generation oral therapeutics.</p>
        ',
    ],
    2 => [
        'id' => 2,
        'title' => 'Navigating Global WHO-GMP & ISO 9001:2015 Compliance in Modern Pharma Plants',
        'category' => 'Regulatory',
        'date' => 'August 10, 2026',
        'readTime' => '7 min read',
        'author' => 'Priya Sharma',
        'authorRole' => 'Head of Global Quality Assurance',
        'image' => 'assets/images/blog-2.jpg',
        'highlights' => [
            'Enforcing ALCOA+ data integrity across electronic batch records.',
            'HVAC differential pressure and HEPA cleanroom environmental controls.',
            'Comprehensive CAPA workflows for zero-defect audit readiness.',
        ],
        'content' => '
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Quality Assurance in modern pharmaceutical manufacturing is a continuous operational discipline that guarantees every tablet, vial, and syrup meets international therapeutic specifications.</p>

            <h3>Core Compliance Pillars</h3>
            <p>PharmaCorp\'s Quality Management System (QMS) enforces strict standards across all manufacturing operations:</p>
            <ul>
                <li><strong>Data Integrity & ALCOA+ Standards:</strong> All analytical software and electronic batch record (eBR) systems comply with US FDA 21 CFR Part 11 regulations.</li>
                <li><strong>Cleanroom Environmental Validation:</strong> HEPA air filtration maintaining Class 10,000 (ISO Grade 7) HVAC differential pressure zones for non-sterile and sterile areas.</li>
                <li><strong>CAPA & Deviation Control:</strong> Automated corrective and preventive action workflows guaranteeing root cause identification for any batch variation.</li>
            </ul>
        ',
    ],
    3 => [
        'id' => 3,
        'title' => 'The Role of AI & Molecular Modeling in Accelerating Drug Discovery Pipelines',
        'category' => 'Innovation',
        'date' => 'July 28, 2026',
        'readTime' => '6 min read',
        'author' => 'Dr. Aris Thorne',
        'authorRole' => 'Chief Scientific Officer',
        'image' => 'assets/images/blog-3.jpg',
        'highlights' => [
            'Machine learning algorithms for target-ligand binding predictions.',
            'Reducing pre-clinical screening timelines by over 40%.',
            'AI-driven molecular simulation platforms.',
        ],
        'content' => '
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Artificial Intelligence is revolutionizing pharmaceutical drug discovery by enabling rapid virtual screening of millions of molecular candidates against therapeutic targets.</p>

            <h3>AI-Powered Drug Discovery</h3>
            <p>Machine learning algorithms can predict target-ligand binding affinities with remarkable accuracy, reducing early-stage pre-clinical screening timelines by over 40%.</p>
        ',
    ],
    4 => [
        'id' => 4,
        'title' => 'Ensuring Cold-Chain Integrity for Temperature-Sensitive Biologics & Vaccines',
        'category' => 'Logistics',
        'date' => 'July 14, 2026',
        'readTime' => '4 min read',
        'author' => 'Sanjay Verma',
        'authorRole' => 'Director of Global Supply Chain',
        'image' => 'assets/images/blog-4.jpg',
        'highlights' => [
            'IoT temperature-logging sensors for real-time monitoring.',
            'Validated thermal packaging solutions.',
            'International transit hub compliance.',
        ],
        'content' => '
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Maintaining cold-chain integrity is critical for preserving the potency and efficacy of temperature-sensitive biologics and vaccines throughout the supply chain.</p>

            <h3>Cold-Chain Technologies</h3>
            <p>Leveraging IoT temperature-logging sensors and validated thermal packaging solutions to preserve product potency across international transit hubs.</p>
        ',
    ],
    5 => [
        'id' => 5,
        'title' => 'Quality by Design (QbD) Approaches in Bioequivalent Generic Manufacturing',
        'category' => 'R&D Insights',
        'date' => 'June 30, 2026',
        'readTime' => '8 min read',
        'author' => 'Dr. Ananya Roy',
        'authorRole' => 'Principal Analytical Scientist',
        'image' => 'assets/images/blog-5.jpg',
        'highlights' => [
            'Design of Experiments (DoE) principles.',
            'Critical process parameters (CPPs) identification.',
            'Critical quality attributes (CQAs) in tablet compression.',
        ],
        'content' => '
            <p class="lead" style="font-size:var(--fs-h4); color:var(--color-text); line-height:var(--lh-relaxed); font-weight:500; margin-bottom:var(--space-6);">Quality by Design (QbD) is a systematic approach to pharmaceutical development that begins with predefined objectives and emphasizes product and process understanding.</p>

            <h3>QbD Implementation</h3>
            <p>Applying Design of Experiments (DoE) principles to identify critical process parameters (CPPs) and critical quality attributes (CQAs) in tablet compression.</p>
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
    <section class="section">
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
