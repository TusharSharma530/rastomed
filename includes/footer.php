<?php
/**
 * Footer Component
 * Complete corporate footer with columns, contact info, social links, and legal
 */
?>
<footer class="footer" role="contentinfo">
  <div class="container">
    <!-- Footer Main -->
    <div class="footer__main">

      <!-- Brand Column -->
      <div class="footer__brand">
        <a href="index.php" class="footer__logo" aria-label="PharmaCorp Home">
          <span class="footer__logo-icon">P</span>
          <span class="footer__logo-text">Pharma<span>Corp</span></span>
        </a>
        <p class="footer__description">
          Advancing healthcare through scientific innovation, quality manufacturing, and a commitment to improving lives worldwide.
        </p>

        <!-- Contact Info -->
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span>123 Pharma Avenue, Science Park<br>Mumbai, Maharashtra 400001, India</span>
        </div>
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
          <span>info@pharmacorp.com</span>
        </div>
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
          </svg>
          <span>+91 22 1234 5678</span>
        </div>

        <!-- Social Links -->
        <div class="footer__social">
          <a href="#" class="footer__social-link" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
              <rect x="2" y="9" width="4" height="12"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
          <a href="#" class="footer__social-link" aria-label="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
          </a>
          <a href="#" class="footer__social-link" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
          </a>
          <a href="#" class="footer__social-link" aria-label="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Company Column -->
      <div class="footer__column">
        <h4 class="footer__column-title">Company</h4>
        <a href="about.php" class="footer__link">About Us</a>
        <a href="about.php#leadership" class="footer__link">Leadership</a>
        <a href="about.php#sustainability" class="footer__link">Sustainability</a>
        <a href="quality.php" class="footer__link">Quality</a>
        <a href="research.php" class="footer__link">R&D</a>
        <a href="manufacturing.php" class="footer__link">Manufacturing</a>
      </div>

      <!-- Products Column -->
      <div class="footer__column">
        <h4 class="footer__column-title">Products</h4>
        <a href="products.php" class="footer__link">Portfolio</a>
        <a href="products.php#therapeutic" class="footer__link">Therapeutic Areas</a>
        <a href="products.php#categories" class="footer__link">Categories</a>
        <a href="products.php#launches" class="footer__link">New Launches</a>
      </div>

      <!-- Careers Column -->
      <div class="footer__column">
        <h4 class="footer__column-title">Careers</h4>
        <a href="careers.php" class="footer__link">Join Our Team</a>
        <a href="careers.php#openings" class="footer__link">Open Positions</a>
        <a href="careers.php#culture" class="footer__link">Life at PharmaCorp</a>
        <a href="news.php" class="footer__link">News</a>
      </div>

      <!-- Support Column -->
      <div class="footer__column">
        <h4 class="footer__column-title">Support</h4>
        <a href="contact.php" class="footer__link">Contact Us</a>
        <a href="contact.php#faq" class="footer__link">FAQs</a>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom">
      <p class="footer__copyright">
        &copy; <?= date('Y') ?> PharmaCorp. All rights reserved.
      </p>
      <div class="footer__legal">
        <a href="privacy-policy.php" class="footer__legal-link">Privacy Policy</a>
        <a href="disclaimer.php" class="footer__legal-link">Disclaimer</a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="12" y1="19" x2="12" y2="5"/>
    <polyline points="5 12 12 5 19 12"/>
  </svg>
</button>
