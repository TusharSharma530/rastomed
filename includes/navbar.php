<?php
/**
 * Navigation Bar Component
 * Desktop nav with dropdowns + Mobile nav
 */

$currentPage = basename($_SERVER['PHP_SELF'], '.php');

$navItems = [
    [
        'label' => 'Home',
        'url' => 'index.php',
        'key' => 'index',
    ],
    [
        'label' => 'About',
        'url' => 'about.php',
        'key' => 'about',
    ],
    [
        'label' => 'Products',
        'url' => 'products.php',
        'key' => 'products',
        'hasDropdown' => true,
        'dropdown' => [
            ['label' => 'All Products', 'url' => 'products.php', 'icon' => '&#9830;'],
            ['label' => 'Gastro', 'url' => 'products.php', 'icon' => '&#129516;'],
            ['label' => 'Gynae', 'url' => 'products.php', 'icon' => '&#9792;'],
            ['label' => 'Ortho', 'url' => 'products.php', 'icon' => '&#129462;'],
            ['label' => 'General Care', 'url' => 'products.php', 'icon' => '&#128138;'],
        ]
    ],
    [
        'label' => 'Gallery',
        'url' => 'gallery.php',
        'key' => 'gallery',
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
        'label' => 'Contact',
        'url' => 'contact.php',
        'key' => 'contact',
    ],
];
?>

<!-- Desktop Navigation -->
<nav class="nav" aria-label="Main navigation">
  <?php foreach ($navItems as $item): ?>
    <?php if (!empty($item['hasDropdown'])): ?>
      <div class="nav__dropdown-wrapper">
        <a href="<?= $item['url'] ?>"
           class="nav__link nav__link--has-dropdown <?= $currentPage === $item['key'] ? 'nav__link--active' : '' ?>"
           aria-haspopup="true"
           aria-expanded="false">
          <?= $item['label'] ?>
          <svg class="nav__dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
          </svg>
        </a>
        <div class="nav__dropdown" role="menu">
          <?php foreach ($item['dropdown'] as $dropdownItem): ?>
            <a href="<?= $dropdownItem['url'] ?>" class="nav__dropdown-link" role="menuitem">
              <span class="nav__dropdown-link-icon"><?= $dropdownItem['icon'] ?></span>
              <?= $dropdownItem['label'] ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php else: ?>
      <a href="<?= $item['url'] ?>" class="nav__link <?= $currentPage === $item['key'] ? 'nav__link--active' : '' ?>">
        <?= $item['label'] ?>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>
</nav>

<!-- Mobile Navigation -->
<div class="mobile-nav" aria-hidden="true">
  <?php foreach ($navItems as $item): ?>
    <?php if (!empty($item['hasDropdown'])): ?>
      <a href="<?= $item['url'] ?>" class="mobile-nav__link mobile-nav__link--has-sub <?= $currentPage === $item['key'] ? 'mobile-nav__link--active' : '' ?>">
        <?= $item['label'] ?>
        <svg class="mobile-nav__toggle-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="6 9 12 15 18 9"/>
        </svg>
      </a>
      <div class="mobile-nav__sub-links">
        <?php foreach ($item['dropdown'] as $dropdownItem): ?>
          <a href="<?= $dropdownItem['url'] ?>" class="mobile-nav__sub-link">
            <?= $dropdownItem['label'] ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <a href="<?= $item['url'] ?>" class="mobile-nav__link <?= $currentPage === $item['key'] ? 'mobile-nav__link--active' : '' ?>">
        <?= $item['label'] ?>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>

  <div class="mobile-nav__actions">
    <?php include __DIR__ . '/theme-toggle.php'; ?>
    <a href="contact.php" class="mobile-nav__cta">Get in Touch</a>
  </div>
</div>

<!-- Overlay -->
<div class="overlay" aria-hidden="true"></div>
