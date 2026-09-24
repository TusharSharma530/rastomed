<?php
/**
 * Disclaimer Page - RastoMed Pharma (dynamic)
 */
require_once __DIR__ . '/includes/header.php';

$pp = ['title' => 'Disclaimer', 'subtitle' => '', 'description' => ''];
$sqlpp = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'disclaimer'");
if ($sqlpp && mysqli_num_rows($sqlpp)) {
	$pp = mysqli_fetch_assoc($sqlpp);
}

$ppTitle = trim($pp['title']) !== '' ? $pp['title'] : 'Disclaimer';
$ppSubtitle = $pp['subtitle'];
$ppDescriptionHtml = render_pages_description($pp['description']);

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
          <article class="legal-page__section">
            <h2>Contact Us</h2>
            <p>If you have any questions regarding this Disclaimer, please contact us:</p>
            <p><strong>RastoMed Pharma</strong><br>
            Email: <a href="mailto:info@rastomedpharma.com">info@rastomedpharma.com</a><br>
            Website: <a href="https://www.rastomedpharma.com">www.rastomedpharma.com</a></p>
          </article>
<?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
