<?php
/**
 * News Page - PharmaCorp
 * Company News, Healthcare, Research & Innovation
 */
require_once __DIR__ . '/includes/components.php';

$newsArticles = [
    [
        'id' => 1,
        'title' => 'PharmaCorp Launches New Cardiovascular Therapy',
        'excerpt' => 'A breakthrough medication for managing chronic heart conditions, developed through years of dedicated research.',
        'date' => '2026-08-15',
        'category' => 'Product Launch',
        'content' => '<p>PharmaCorp is proud to announce the launch of its latest cardiovascular therapy, representing a significant advancement in the treatment of chronic heart conditions.</p><p>Developed through years of dedicated research and clinical trials, this new medication offers improved efficacy and patient compliance compared to existing treatment options.</p><p>The product has received regulatory approvals in multiple markets and is expected to be available through healthcare providers in the coming months.</p>',
    ],
    [
        'id' => 2,
        'title' => 'Expanding Manufacturing Capacity in India',
        'excerpt' => 'New state-of-the-art facility to increase production capacity, supporting growing global demand for quality medicines.',
        'date' => '2026-07-28',
        'category' => 'Company News',
        'content' => '<p>PharmaCorp has announced a significant expansion of its manufacturing capabilities in India with the inauguration of a new state-of-the-art production facility.</p><p>The new facility will increase the company\'s overall production capacity by 40%, enabling PharmaCorp to better serve the growing global demand for quality pharmaceutical products.</p><p>The facility incorporates the latest manufacturing technologies and sustainability features, reflecting the company\'s commitment to both excellence and environmental responsibility.</p>',
    ],
    [
        'id' => 3,
        'title' => 'R&D Partnership with Global Research Institute',
        'excerpt' => 'Collaborative research initiative focused on developing next-generation therapies for rare diseases.',
        'date' => '2026-07-10',
        'category' => 'Research',
        'content' => '<p>PharmaCorp has entered into a strategic research partnership with a leading global research institute to develop innovative therapies for rare diseases.</p><p>This collaboration combines PharmaCorp\'s pharmaceutical expertise with the institute\'s cutting-edge research capabilities, aiming to address unmet medical needs in the rare disease space.</p><p>The partnership will focus on drug discovery and development across multiple therapeutic areas, with an initial emphasis on neurological and metabolic rare diseases.</p>',
    ],
    [
        'id' => 4,
        'title' => 'Quarterly Results Show Strong Growth',
        'excerpt' => 'Financial performance driven by expanding product portfolio and international market penetration.',
        'date' => '2026-06-20',
        'category' => 'Company News',
        'content' => '<p>PharmaCorp has reported strong quarterly results, reflecting the company\'s continued growth trajectory and successful market expansion strategies.</p><p>Key highlights include a significant increase in revenue driven by the expanding product portfolio and successful entry into new international markets.</p><p>The company remains focused on its long-term growth strategy, with continued investment in R&D and manufacturing capabilities.</p>',
    ],
    [
        'id' => 5,
        'title' => 'Innovation in Drug Delivery Systems',
        'excerpt' => 'New formulation technologies improve bioavailability and patient compliance across therapeutic areas.',
        'date' => '2026-06-05',
        'category' => 'Innovation',
        'content' => '<p>PharmaCorp\'s R&D team has made significant breakthroughs in drug delivery technology, developing novel formulations that improve bioavailability and patient compliance.</p><p>These innovations span multiple therapeutic areas and represent the company\'s commitment to improving patient outcomes through scientific advancement.</p><p>The new delivery systems are expected to be incorporated into upcoming product launches, providing patients with more effective and convenient treatment options.</p>',
    ],
    [
        'id' => 6,
        'title' => 'Community Health Initiative Reaches Milestone',
        'excerpt' => 'Free health camps and medicine donations have reached underserved communities across rural regions.',
        'date' => '2026-05-18',
        'category' => 'Healthcare',
        'content' => '<p>PharmaCorp\'s community health initiative has reached a significant milestone, providing free healthcare services and medicine donations to underserved communities across rural regions.</p><p>The initiative, launched as part of the company\'s corporate social responsibility program, has benefited thousands of individuals who previously had limited access to quality healthcare.</p><p>PharmaCorp remains committed to expanding this initiative and making quality healthcare accessible to all.</p>',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Latest news, press releases, and updates from PharmaCorp.">
  <title>News & Updates - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('News & Updates', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'News', 'url' => 'news.php'],
    ], 'Stay informed about PharmaCorp milestones, industry developments, and healthcare innovations.') ?>

    <!-- ========== NEWS GRID ========== -->
    <section class="section">
      <div class="container">
        <div class="grid grid--3 reveal">
          <?php foreach ($newsArticles as $article): ?>
            <?php
            $day = date('d', strtotime($article['date']));
            $month = date('M', strtotime($article['date']));
            $escapedContent = htmlspecialchars($article['content']);
            $escapedTitle = htmlspecialchars($article['title']);
            $escapedCategory = htmlspecialchars($article['category']);
            $escapedDate = date('F j, Y', strtotime($article['date']));
            ?>
            <div class="news-card">
              <div class="news-card__image" style="background: linear-gradient(135deg, var(--color-surface-alt), var(--color-surface));">
                <div class="news-card__date">
                  <span class="news-card__date-day"><?= $day ?></span>
                  <span class="news-card__date-month"><?= $month ?></span>
                </div>
              </div>
              <div class="news-card__body">
                <span class="news-card__category"><?= $article['category'] ?></span>
                <h3 class="news-card__title"><?= $article['title'] ?></h3>
                <p class="news-card__excerpt"><?= $article['excerpt'] ?></p>
                <button class="card__link" style="margin-top:var(--space-3); cursor:pointer; background:none; border:none; padding:0; font-family:inherit;"
                  data-news-trigger
                  data-news-category="<?= $escapedCategory ?>"
                  data-news-title="<?= $escapedTitle ?>"
                  data-news-date="<?= $escapedDate ?>"
                  data-news-content="<?= $escapedContent ?>">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                  </svg>
                </button>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="section">
      <div class="container">
        <?= renderCtaBlock(
          'Media Inquiries',
          'For press inquiries, media relations, and interview requests, please contact our communications team.'
        ) ?>
      </div>
    </section>
  </main>

  <!-- ========== NEWS MODAL ========== -->
  <div id="newsModal" class="news-modal">
    <div class="news-modal__overlay"></div>
    <div class="news-modal__content">
      <button class="news-modal__close" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"/>
          <line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
      <span class="news-modal__category"></span>
      <h2 class="news-modal__title"></h2>
      <p class="news-modal__date"></p>
      <div class="news-modal__body"></div>
    </div>
  </div>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
