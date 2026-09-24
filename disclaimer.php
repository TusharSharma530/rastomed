<?php
require_once __DIR__ . '/includes/header.php';

$pp = ['title' => 'Disclaimer', 'subtitle' => '', 'description' => ''];
$sqlpp = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'disclaimer'");
if ($sqlpp && mysqli_num_rows($sqlpp)) {
	$pp = mysqli_fetch_assoc($sqlpp);
}

$ppTitle = trim($pp['title']) !== '' ? $pp['title'] : 'Disclaimer';
$ppSubtitle = $pp['subtitle'];
$ppDescriptionHtml = trim((string)($pp['description'] ?? ''));
if ($ppDescriptionHtml !== '' && strpos($ppDescriptionHtml, '<') === false) {
	$ppDescriptionHtml = render_pages_description($ppDescriptionHtml);
}

$ppParts = explode(' ', $ppTitle);
$ppLastWord = array_pop($ppParts);
$ppFirstWords = implode(' ', $ppParts);
?>

  <main>
    <section class="contact-banner">
      <div class="container contact-banner__content">
        <nav class="contact-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="contact-banner__breadcrumb-link">Home</a>
          <span class="contact-banner__breadcrumb-sep">&#9656;</span>
          <span class="contact-banner__breadcrumb-current"><?php echo htmlspecialchars($ppTitle); ?></span>
        </nav>
        <span class="contact-banner__label">LEGAL</span>
        <h1 class="contact-banner__title"><?php echo $ppParts ? htmlspecialchars($ppFirstWords) . ' ' : ''; ?><span class="contact-banner__title-gradient"><?php echo htmlspecialchars($ppLastWord); ?></span></h1>
        <?php if ($ppSubtitle !== ''): ?>
        <p class="contact-banner__desc"><?php echo htmlspecialchars($ppSubtitle); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
<?php if ($ppDescriptionHtml !== ''): ?>
          <?php echo $ppDescriptionHtml; ?>
<?php else: ?>
<?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
