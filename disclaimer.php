<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== page content from `pages` table =====
$pp = ['title' => 'Disclaimer', 'subtitle' => '', 'description' => ''];
$rsPp = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'disclaimer'");
if ($rsPp && mysqli_num_rows($rsPp)) {
	$pp = mysqli_fetch_assoc($rsPp);
}

// ===== title / subtitle / description =====
$ppTitle    = trim((string) $pp['title']) !== '' ? $pp['title'] : 'Disclaimer';
$ppSubtitle = (string) ($pp['subtitle'] ?? '');
$ppDescHtml = trim((string) ($pp['description'] ?? ''));
if ($ppDescHtml !== '' && strpos($ppDescHtml, '<') === false) {
	$ppDescHtml = render_pages_description($ppDescHtml);
}

// ===== split title: first words plain, last word gradient =====
$ppParts = explode(' ', $ppTitle);
$ppLastWord = array_pop($ppParts);
$ppFirstWords = implode(' ', $ppParts);

// ===== escaped vars =====
$eTitle      = htmlspecialchars($ppTitle, ENT_QUOTES, 'UTF-8');
$eSubtitle   = htmlspecialchars($ppSubtitle, ENT_QUOTES, 'UTF-8');
$eFirstWords = htmlspecialchars($ppFirstWords, ENT_QUOTES, 'UTF-8');
$eLastWord   = htmlspecialchars($ppLastWord, ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="contact-banner">
      <div class="container contact-banner__content">
        <nav class="contact-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="contact-banner__breadcrumb-link">Home</a>
          <span class="contact-banner__breadcrumb-sep">&#9656;</span>
          <span class="contact-banner__breadcrumb-current"><?= $eTitle ?></span>
        </nav>
        <span class="contact-banner__label">LEGAL</span>
        <h1 class="contact-banner__title"><?= $ppParts ? $eFirstWords . ' ' : '' ?><span class="contact-banner__title-gradient"><?= $eLastWord ?></span></h1>
        <?php if ($ppSubtitle !== ''): ?>
        <p class="contact-banner__desc"><?= $eSubtitle ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <?= $ppDescHtml ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
