<?php
/**
 * Header Component
 * Contains logo, navigation, theme toggle, mobile menu
 */
?>
<script>
(function(){
  var t=localStorage.getItem('pharma-theme');
  if(t){document.documentElement.setAttribute('data-theme',t);}
  else if(window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches){document.documentElement.setAttribute('data-theme','dark');}
})();
</script>
<header class="header" role="banner">
  <div class="header__inner">
    <!-- Logo -->
    <a href="index.php" class="header__logo" aria-label="PharmaCorp Home">
      <span class="header__logo-icon">P</span>
      <span class="header__logo-text">Pharma<span>Corp</span></span>
    </a>

    <!-- Desktop Navigation -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- Header Actions -->
    <div class="header__actions">
      <?php include __DIR__ . '/theme-toggle.php'; ?>

      <a href="contact.php" class="header__cta">
        Get in Touch
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"/>
          <polyline points="12 5 19 12 12 19"/>
        </svg>
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
