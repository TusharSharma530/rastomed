<?php
if (!isset($con)) {
    require_once __DIR__ . '/../manager/database/db.php';
}
if (!isset($renderButton)) {
    require_once __DIR__ . '/components.php';
}
$siteBase = '/rastomed/';
if (!empty($_SERVER['SCRIPT_NAME'])) {
    $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $dir = rtrim($dir, '/');
    if ($dir !== '' && $dir !== '/') {
        $siteBase = $dir . '/';
    } else {
        $siteBase = '/';
    }
}
$scriptVersion = file_exists(__DIR__ . '/../assets/js/script.js') ? filemtime(__DIR__ . '/../assets/js/script.js') : time();
?>
<script>
window.SITE_BASE = <?php echo json_encode($siteBase); ?>;
</script>
<script>
(function(){
  var t = localStorage.getItem('pharma-theme');
  if(t){ document.documentElement.setAttribute('data-theme', t); }
  else if(window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches){
    document.documentElement.setAttribute('data-theme', 'dark');
  }
})();
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Learn about RastoMed Pharma Private Limited - our history, leadership, vision, and mission to advance healthcare.">
  <title><?= htmlspecialchars($pageTitle ?? 'About Us - RastoMed Pharma Private Limited', ENT_QUOTES, 'UTF-8') ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<div class="preloader" id="preloader">
  <div class="preloader__capsule">
    <svg class="preloader__svg" viewBox="0 0 200 80" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="leftGrad" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#0D47A1"/>
          <stop offset="100%" stop-color="#1565C0"/>
        </linearGradient>
        <linearGradient id="rightGrad" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#E3F2FD"/>
          <stop offset="100%" stop-color="#ffffff"/>
        </linearGradient>
        <filter id="glow">
          <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
          <feMerge>
            <feMergeNode in="coloredBlur"/>
            <feMergeNode in="SourceGraphic"/>
          </feMerge>
        </filter>
      </defs>
      <!-- Left capsule half -->
      <g class="preloader__capsule-left">
        <path d="M15,25 L80,25 Q85,25 85,30 L85,50 Q85,55 80,55 L15,55 Q5,55 5,40 Q5,25 15,25 Z" fill="url(#leftGrad)" filter="url(#glow)"/>
      </g>
      <!-- Right capsule half -->
      <g class="preloader__capsule-right">
        <path d="M120,25 L185,25 Q195,25 195,40 Q195,55 185,55 L120,55 Q115,55 115,50 L115,30 Q115,25 120,25 Z" fill="url(#rightGrad)" stroke="#1565C0" stroke-width="1.5" filter="url(#glow)"/>
      </g>
      <!-- Crossing lines with glow -->
      <line class="preloader__line preloader__line--1" x1="30" y1="32" x2="170" y2="48" stroke="#ffffff" stroke-width="1" opacity="0.6" filter="url(#glow)"/>
      <line class="preloader__line preloader__line--2" x1="30" y1="48" x2="170" y2="32" stroke="#ffffff" stroke-width="1" opacity="0.6" filter="url(#glow)"/>
      <!-- Center dot -->
      <circle class="preloader__dot" cx="100" cy="40" r="3" fill="#ffffff" opacity="0.8"/>
    </svg>
  </div>
  <p class="preloader__text">RastoMed Pharma</p>
  <div class="preloader__bar">
    <div class="preloader__bar-fill"></div>
  </div>
</div>

<!-- Top Bar - Logo + Contact Info -->
<div class="top-bar">
  <div class="container">
    <div class="top-bar__inner">
      <a href="index.php" class="top-bar__logo" aria-label="<?= htmlspecialchars($websitename) ?> Home">
        <?php if(!empty($logo)): ?>
        <img src="<?= htmlspecialchars($path . $logo) ?>" alt="<?= htmlspecialchars($websitename) ?>" class="top-bar__logo-img">
        <?php else: ?>
        <img src="assets/images/rastomed.png" alt="<?= htmlspecialchars($websitename) ?>" class="top-bar__logo-img">
        <?php endif; ?>
      </a>
      <div class="top-bar__contact">
        <?php if(!empty($contactno)): ?>
        <a href="tel:+91<?= htmlspecialchars($contactno) ?>" class="top-bar__contact-item">
          <span class="top-bar__contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <span class="top-bar__contact-text">
            <strong>+91 <?= htmlspecialchars($contactno) ?></strong>
            <small>Call Us</small>
          </span>
        </a>
        <?php endif; ?>
        <?php if(!empty($emailid)): ?>
        <a href="mailto:<?= htmlspecialchars($emailid) ?>" class="top-bar__contact-item">
          <span class="top-bar__contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </span>
          <span class="top-bar__contact-text">
            <strong><?= htmlspecialchars($emailid) ?></strong>
            <small>Mail Us</small>
          </span>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Navigation Bar -->
<header class="header" role="banner">
  <div class="header__inner">
    <!-- Mobile Logo -->
    <a href="index.php" class="header__logo-mobile" aria-label="<?= htmlspecialchars($websitename) ?> Home">
      <?php if(!empty($logo)): ?>
      <img src="<?= htmlspecialchars($path . $logo) ?>" alt="<?= htmlspecialchars($websitename) ?>" class="header-logo-brand">
      <?php else: ?>
      <img src="assets/images/rastomed.png" alt="<?= htmlspecialchars($websitename) ?>" class="header-logo-brand">
      <?php endif; ?>
    </a>

    <!-- Desktop Navigation -->
    <?php 
    $navbar_path = __DIR__ . '/navbar.php';
    if (file_exists($navbar_path)) {
        include $navbar_path;
    }
    ?>

    <!-- Header Actions -->
    <div class="header__actions">
      <?php 
      $theme_toggle_path = __DIR__ . '/theme-toggle.php';
      if (file_exists($theme_toggle_path)) {
          include $theme_toggle_path;
      }
      ?>

      <button type="button" class="header__cta" id="headerEnquiryBtn">
        Enquiry
      </button>

      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
        <span class="mobile-menu-toggle__bar"></span>
        <span class="mobile-menu-toggle__bar"></span>
        <span class="mobile-menu-toggle__bar"></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation (outside header for proper fixed positioning) -->
<div class="mobile-nav" aria-hidden="true">
  <div class="mobile-nav__top">
    <a href="index.php" class="mobile-nav__logo" aria-label="<?= htmlspecialchars($websitename) ?> Home">
      <?php if(!empty($logo)): ?>
      <img src="<?= htmlspecialchars($path . $logo) ?>" alt="<?= htmlspecialchars($websitename) ?>">
      <?php else: ?>
      <img src="assets/images/rastomed.png" alt="<?= htmlspecialchars($websitename) ?>">
      <?php endif; ?>
    </a>
    <button class="mobile-nav__close" aria-label="Close menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  
  <?php foreach ($navItems as $item): ?>
    <?php 
      $itemUrl = $item['url'] ?? '#';
      $itemLabel = $item['label'] ?? '';
      $itemKey = $item['key'] ?? '';
      $hasDropdown = !empty($item['hasDropdown']);
      $isActive = ($currentPage === $itemKey);
    ?>
    <?php if ($hasDropdown): ?>
      <a href="<?= htmlspecialchars($itemUrl, ENT_QUOTES, 'UTF-8') ?>" class="mobile-nav__link mobile-nav__link--has-sub <?= $isActive ? 'mobile-nav__link--active' : '' ?>">
        <?= htmlspecialchars($itemLabel, ENT_QUOTES, 'UTF-8') ?>
        <svg class="mobile-nav__toggle-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="6 9 12 15 18 9"/>
        </svg>
      </a>
      <div class="mobile-nav__sub-links">
        <?php foreach ($item['dropdown'] as $dropdownItem): ?>
          <a href="<?= htmlspecialchars($dropdownItem['url'] ?? '#', ENT_QUOTES, 'UTF-8') ?>" class="mobile-nav__sub-link">
            <?= htmlspecialchars($dropdownItem['label'] ?? '', ENT_QUOTES, 'UTF-8') ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <a href="<?= htmlspecialchars($itemUrl, ENT_QUOTES, 'UTF-8') ?>" class="mobile-nav__link <?= $isActive ? 'mobile-nav__link--active' : '' ?>">
        <?= htmlspecialchars($itemLabel, ENT_QUOTES, 'UTF-8') ?>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>

  <div class="mobile-nav__actions">
    <a href="contact.php" class="mobile-nav__cta">Enquire Now</a>
  </div>
</div>

<!-- Overlay (outside header for proper fixed positioning) -->
<div class="overlay" aria-hidden="true"></div>

<script src="assets/js/script.js?v=<?php echo (int)$scriptVersion; ?>"></script>
