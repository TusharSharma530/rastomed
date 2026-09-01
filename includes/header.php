<?php
/**
 * Header Component
 * Top info bar + Logo, navigation, theme toggle, mobile menu
 */
?>
<script>
(function(){
  var t=localStorage.getItem('pharma-theme');
  if(t){document.documentElement.setAttribute('data-theme',t);}
  else if(window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches){document.documentElement.setAttribute('data-theme','dark');}
})();
</script>

<!-- Preloader -->
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
      <a href="index.php" class="top-bar__logo" aria-label="RastoMed Pharma Home">
        <img src="assets/images/rastomed.png" alt="RastoMed Pharma" class="top-bar__logo-img">
      </a>
      <div class="top-bar__contact">
        <a href="tel:+919410666599" class="top-bar__contact-item">
          <span class="top-bar__contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <span class="top-bar__contact-text">
            <strong>+91 9410666599</strong>
            <small>Call Us</small>
          </span>
        </a>
        <a href="mailto:info@rastomedpharma.com" class="top-bar__contact-item">
          <span class="top-bar__contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </span>
          <span class="top-bar__contact-text">
            <strong>info@rastomedpharma.com</strong>
            <small>Mail Us</small>
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Navigation Bar -->
<header class="header" role="banner">
  <div class="header__inner">
    <!-- Mobile Logo -->
    <a href="index.php" class="header__logo-mobile" aria-label="RastoMed Pharma Home">
      <img src="assets/images/rastomed.png" alt="RastoMed Pharma" class="header-logo-brand">
    </a>

    <!-- Desktop Navigation -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- Header Actions -->
    <div class="header__actions">
      <?php include __DIR__ . '/theme-toggle.php'; ?>

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
  <button class="mobile-nav__close" aria-label="Close menu">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
  <?php foreach ($navItems ?? [] as $item): ?>
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
    <a href="contact.php" class="mobile-nav__cta">Enquire Now</a>
  </div>
</div>

<!-- Overlay (outside header for proper fixed positioning) -->
<div class="overlay" aria-hidden="true"></div>
