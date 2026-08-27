<?php
/**
 * Footer Component
 * RastoMed Pharma corporate footer
 */
?>
<footer class="footer" role="contentinfo">
  <div class="container">
    <!-- Footer Main -->
    <div class="footer__main">

      <!-- Brand Column -->
      <div class="footer__brand">
        <a href="index.php" class="footer__logo" aria-label="RastoMed Pharma Home">
          <img src="assets/images/rastomed.png" alt="RastoMed Pharma" class="footer-logo-box">
        </a>
        <p class="footer__description">
          We are dedicated to providing high-quality medicines that improve lives and build a healthier tomorrow.
        </p>
      
        <div class="footer__social">
          <a href="https://www.linkedin.com/company/rastomed-pharma/" target="_blank" class="footer__social-link" aria-label="LinkedIn">
            <img src="assets/images/linkedin.png" alt="LinkedIn" class="footer-icon-img">
          </a>
          <a href="https://x.com/RastoMedPharma" target="_blank" class="footer__social-link" aria-label="X (Twitter)">
            <img src="assets/images/x-twitter.svg" alt="X" class="footer-twitter-img">
          </a>
          <a href="https://www.instagram.com/rastomedpharma?igsh=MTZqa3VmNWljNXBuYQ==" target="_blank" class="footer__social-link" aria-label="Instagram">
            <img src="assets/images/instagram.png" alt="Instagram" class="footer-icon-img">
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer__column">
        <h4 class="footer__column-title">Quick Links</h4>
        <a href="index.php" class="footer__link">Home</a>
        <a href="about.php" class="footer__link">About Us</a>
        <a href="products.php" class="footer__link">Products</a>
        <a href="careers.php" class="footer__link">Careers</a>
        <a href="blogs.php" class="footer__link">Blogs</a>
        <a href="contact.php" class="footer__link">CONTACT</a>
      </div>

      <!-- Our Products -->
      <div class="footer__column">
        <h4 class="footer__column-title">Our Products</h4>
        <a href="product-details.php?id=1" class="footer__link">CoRast-Q10</a>
      </div>

      <!-- Resources -->
      <div class="footer__column">
        <h4 class="footer__column-title">Resources</h4>
        <a href="careers.php" class="footer__link">Careers</a>
        <a href="privacy-policy.php" class="footer__link">Privacy Policy</a>
        <a href="disclaimer.php" class="footer__link">Disclaimer</a>
        <a href="fraud-policy.php" class="footer__link">Fraud Policy</a>
      </div>

      <!-- CONTACT -->
      <div class="footer__column">
        <h4 class="footer__column-title">CONTACT</h4>
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>353, Shivaji Road, Meerut,<br>Uttar Pradesh-250001</span>
        </div>
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          <span>+91 9410666599<br>+91 7906752047</span>
        </div>
        <div class="footer__contact-item">
          <svg class="footer__contact-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          <span>info@rastomedpharma.com</span>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom">
      <p class="footer__copyright">
        &copy; <?= date('Y') ?> RastoMed Pharma Private Limited. All Rights Reserved.
      </p>
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

<!-- Enquiry Floating Button -->
<div class="enquiry-float">
  <a href="https://wa.me/919410666599" target="_blank" class="enquiry-float__btn whatsapp-float__btn" aria-label="Chat on WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    WhatsApp
  </a>
  <button class="enquiry-float__btn" id="enquiryBtn" aria-label="Send enquiry">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
    Enquiry
  </button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" class="enquiry-modal">
  <div class="enquiry-modal__overlay"></div>
  <div class="enquiry-modal__content">
    <button class="enquiry-modal__close" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <h3 class="enquiry-modal__title">Send Enquiry</h3>
    <p class="enquiry-modal__subtitle">Fill out the form below and our team will get back to you.</p>
    <form id="enquiryForm" class="enquiry-modal__form">
      <div class="form-group">
        <label class="form-label" for="enqName">Name *</label>
        <input type="text" id="enqName" class="form-input" placeholder="Your full name" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="enqMobile">Mobile *</label>
        <input type="tel" id="enqMobile" class="form-input" placeholder="+91 9410666599" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="enqEmail">Email</label>
        <input type="email" id="enqEmail" class="form-input" placeholder="your@email.com">
      </div>
      <div class="form-group">
        <label class="form-label" for="enqMessage">Message</label>
        <textarea id="enqMessage" class="form-input textarea-enq-resize" rows="3" placeholder="Your message..."></textarea>
      </div>
      <button type="submit" class="btn btn--primary btn--lg width-100">Submit Enquiry</button>
    </form>
    <div id="enquirySuccess" class="enquiry-modal__success">
      <div class="enquiry-modal__success-icon">&#10003;</div>
      <h3>Thank You!</h3>
      <p>Your enquiry has been submitted. Our team will contact you shortly.</p>
    </div>
  </div>
</div>
