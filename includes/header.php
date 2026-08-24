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

<!-- Top Bar - Logo + Contact Info -->
<div class="top-bar">
  <div class="container">
    <div class="top-bar__inner">
      <a href="index.php" class="top-bar__logo" aria-label="RastoMed Pharma Home">
        <img src="assets/images/rastomed.jpeg" alt="RastoMed Pharma" class="top-bar__logo-img">
      </a>
      <div class="top-bar__contact">
        <a href="tel:+918800336704" class="top-bar__contact-item">
          <span class="top-bar__contact-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <span class="top-bar__contact-text">
            <strong>+91 88003 36704</strong>
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
    <!-- Desktop Navigation -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- Header Actions -->
    <div class="header__actions">
      <?php include __DIR__ . '/theme-toggle.php'; ?>

      <a href="contact.php" class="header__cta">
        Enquiry
      </a>

      <!-- Mobile Menu Toggle -->
      <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
        <span class="mobile-menu-toggle__bar"></span>
        <span class="mobile-menu-toggle__bar"></span>
        <span class="mobile-menu-toggle__bar"></span>
      </button>
    </div>
  </div>
</header>
