<?php
/**
 * Careers Page - RastoMed Pharma
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Build your career at RastoMed Pharma Private Limited.">
  <title>Careers - RastoMed Pharma</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Hero Banner -->
    <section class="career-hero">
      <img src="assets/images/career-hero.jpg" alt="Career at RastoMed Pharma" class="career-hero__bg">
      <div class="career-hero__overlay"></div>
      <div class="career-hero__content">
        <span class="career-hero__badge">Job openings</span>
        <h1 class="career-hero__title">Shape Your Career With the Right Opportunity</h1>
      </div>
    </section>

    <!-- No Openings -->
    <section class="career-no-jobs">
      <div class="container">
        <div class="career-no-jobs__card">
          <div class="career-no-jobs__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            <span class="career-no-jobs__cross">&times;</span>
          </div>
          <h2 class="career-no-jobs__title">We are currently not hiring for any positions.</h2>
          <p class="career-no-jobs__text">But we are always looking for talented people. Send us your resume and we will keep it on file for future opportunities.</p>
          <a href="apply.php" class="career-no-jobs__btn">Send Your Resume</a>
        </div>
      </div>
    </section>

    <!-- How We Bring Talent Onboard -->
    <section class="career-process">
      <div class="container">
        <div class="career-process__header">
          <div>
            <h2 class="career-process__title">How We Bring Talent Onboard at RastoMed Pharma</h2>
            <p class="career-process__subtitle">5 Steps to Start Your Journet at <strong>Rastomed</strong></p>
          </div>
          <div class="career-process__nav">
            <button class="career-process__nav-btn" aria-label="Previous">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
            </button>
            <button class="career-process__nav-btn" aria-label="Next">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </button>
          </div>
        </div>
        <div class="career-process__steps" id="careerSteps">
          <div class="career-step-card">
            <div class="career-step-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </div>
            <h3 class="career-step-card__title">Apply</h3>
            <p class="career-step-card__desc">Submit your application for a role that matches your interest and expertise.</p>
          </div>
          <div class="career-step-card">
            <div class="career-step-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <h3 class="career-step-card__title">Assessment<br>Round</h3>
            <p class="career-step-card__desc">Complete a short technical or functional test based on the role.</p>
          </div>
          <div class="career-step-card">
            <div class="career-step-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="12" y1="8" x2="12" y2="8.01"/><line x1="8" y1="8" x2="8" y2="8.01"/><line x1="16" y1="8" x2="16" y2="8.01"/></svg>
            </div>
            <h3 class="career-step-card__title">Personal<br>Interview</h3>
            <p class="career-step-card__desc">A one-on-one discussion to understand your fit and potential.</p>
          </div>
          <div class="career-step-card">
            <div class="career-step-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <h3 class="career-step-card__title">HR<br>Discussion</h3>
            <p class="career-step-card__desc">Go over expectations, culture, and any queries you have.</p>
          </div>
          <div class="career-step-card">
            <div class="career-step-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><path d="M9 15l2 2 4-4"/></svg>
            </div>
            <h3 class="career-step-card__title">Final<br>Evaluation</h3>
            <p class="career-step-card__desc">Internal review and final decision. You'll hear from us shortly.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Job Alert CTA -->
    <section class="career-cta">
      <div class="container">
        <div class="career-cta__card">
          <h2 class="career-cta__title">Create a job alert and stay tuned for future openings tailored to your expertise.</h2>
          <a href="apply.php" class="career-cta__btn">CREATE A JOB ALERT</a>
        </div>
      </div>
    </section>

    <!-- Know More About Us -->
    <section class="career-know-more">
      <div class="container">
        <h2 class="career-know-more__title">Know more about us</h2>
        <div class="career-know-more__grid">
          <a href="index.php" class="career-know-more__card">
            <span>Home</span>
            <span class="career-know-more__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
            </span>
          </a>
          <a href="about.php" class="career-know-more__card">
            <span>About Us</span>
            <span class="career-know-more__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
            </span>
          </a>
          <a href="products.php" class="career-know-more__card">
            <span>Products</span>
            <span class="career-know-more__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
            </span>
          </a>
          <a href="blogs.php" class="career-know-more__card">
            <span>Blogs</span>
            <span class="career-know-more__arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
