<?php
http_response_code(404);
require_once __DIR__ . '/includes/header.php';
?>
  <main>
    <section class="contact-banner">
      <div class="container contact-banner__content">
        <nav class="contact-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="contact-banner__breadcrumb-link">Home</a>
          <span class="contact-banner__breadcrumb-sep">&#9656;</span>
          <span class="contact-banner__breadcrumb-current">Not Found</span>
        </nav>
        <span class="contact-banner__label">ERROR 404</span>
        <h1 class="contact-banner__title">Page <span class="contact-banner__title-gradient">Not Found</span></h1>
        <p class="contact-banner__desc">The page you are looking for does not exist or has been moved.</p>
      </div>
    </section>

    <section class="legal-page">
      <div class="container">
        <div class="legal-page__content">
          <p class="legal-page__intro">Go back to the homepage or use the main menu to find what you need.</p>
          <p><a class="btn btn--primary" href="index.php">Back to Home</a></p>
        </div>
      </div>
    </section>
  </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
