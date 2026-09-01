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
