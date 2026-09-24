<?php
/**
 * Recruitment Fraud Policy Page - RastoMed Pharma (dynamic)
 */
require_once __DIR__ . '/includes/header.php';

$pp = ['title' => 'Recruitment Fraud Policy', 'subtitle' => '', 'description' => ''];
$sqlpp = mysqli_query($con, "SELECT * FROM `pages` WHERE slug = 'fraud-policy'");
if ($sqlpp && mysqli_num_rows($sqlpp)) {
	$pp = mysqli_fetch_assoc($sqlpp);
}

$ppTitle = trim($pp['title']) !== '' ? $pp['title'] : 'Recruitment Fraud Policy';
$ppSubtitle = $pp['subtitle'];
$ppDescriptionHtml = render_pages_description($pp['description']);
?>

  <main>
    <section class="fraud-banner">
      <div class="container">
        <h1><?php echo htmlspecialchars($ppTitle); ?></h1>
      </div>
    </section>

    <section class="fraud-content">
<?php if ($ppSubtitle !== ''): ?>
      <p><?php echo htmlspecialchars($ppSubtitle); ?></p>
<?php endif; ?>
<?php if ($ppDescriptionHtml !== ''): ?>
      <?php echo $ppDescriptionHtml; ?>
<?php else: ?>
      <p>If you receive a suspicious recruitment communication using the name or identity of RastoMed Pharma, please report it to us at:</p>
      <p><strong>Email:</strong> <a href="mailto:info@rastomedpharma.com">info@rastomedpharma.com</a></p>
<?php endif; ?>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
