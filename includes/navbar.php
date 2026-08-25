<?php
/**
 * Navigation Bar Component
 * Desktop nav + Mobile nav
 */

$currentPage = basename($_SERVER['PHP_SELF'], '.php');

$navItems = [
    [
        'label' => 'Home',
        'url' => 'index.php',
        'key' => 'index',
    ],
    [
        'label' => 'About Us',
        'url' => 'about.php',
        'key' => 'about',
    ],
    [
        'label' => 'Products',
        'url' => 'products.php',
        'key' => 'products',
    ],
    [
        'label' => 'Careers',
        'url' => 'careers.php',
        'key' => 'careers',
    ],
    [
        'label' => 'Blogs',
        'url' => 'blogs.php',
        'key' => 'blogs',
    ],
    [
        'label' => 'Contact Us',
        'url' => 'contact.php',
        'key' => 'contact',
    ],
];
?>

<!-- Desktop Navigation -->
<nav class="nav" aria-label="Main navigation">
  <?php foreach ($navItems as $item): ?>
    <a href="<?= $item['url'] ?>" class="nav__link <?= $currentPage === $item['key'] ? 'nav__link--active' : '' ?>">
      <?= $item['label'] ?>
    </a>
  <?php endforeach; ?>
</nav>

<!-- Mobile Navigation -->
<div class="mobile-nav" aria-hidden="true">
  <?php foreach ($navItems as $item): ?>
    <a href="<?= $item['url'] ?>" class="mobile-nav__link <?= $currentPage === $item['key'] ? 'mobile-nav__link--active' : '' ?>">
      <?= $item['label'] ?>
    </a>
  <?php endforeach; ?>

  <div class="mobile-nav__actions">
    <?php include __DIR__ . '/theme-toggle.php'; ?>
    <a href="contact.php" class="mobile-nav__cta">Enquire Now</a>
  </div>
</div>

<!-- Overlay -->
<div class="overlay" aria-hidden="true"></div>
