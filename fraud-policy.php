<?php
require_once __DIR__ . '/manager/database/db.php';

// ===== page content from `pages` table =====
$pp = ['title' => 'Recruitment Fraud Policy', 'subtitle' => '', 'description' => ''];
$rsPp = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'fraud-policy'");
if ($rsPp && mysqli_num_rows($rsPp)) {
	$pp = mysqli_fetch_assoc($rsPp);
}

// ===== title / subtitle / description =====
$ppTitle    = trim((string) $pp['title']) !== '' ? $pp['title'] : 'Recruitment Fraud Policy';
$ppSubtitle = (string) ($pp['subtitle'] ?? '');
$ppDescHtml = trim((string) ($pp['description'] ?? ''));
if ($ppDescHtml !== '' && strpos($ppDescHtml, '<') === false) {
	$ppDescHtml = render_pages_description($ppDescHtml);
}

// ===== escaped vars =====
$eTitle    = htmlspecialchars($ppTitle, ENT_QUOTES, 'UTF-8');
$eSubtitle = htmlspecialchars($ppSubtitle, ENT_QUOTES, 'UTF-8');

require_once __DIR__ . '/includes/header.php';
?>

  <main>
    <section class="fraud-banner">
      <div class="container">
        <h1><?= $eTitle ?></h1>
      </div>
    </section>

    <section class="fraud-content">
      <?php if ($ppSubtitle !== ''): ?>
      <p><?= $eSubtitle ?></p>
      <?php endif; ?>
      <?= $ppDescHtml ?>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
