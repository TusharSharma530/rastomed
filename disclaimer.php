<!-- DEMO CONTENT — Legal team review required before production -->
<?php
/**
 * Disclaimer Page - PharmaCorp
 * Premium legal document layout with sticky sidebar navigation
 */
require_once __DIR__ . '/includes/components.php';

$sections = [
    ['id' => 'general', 'title' => 'General Information'],
    ['id' => 'medical', 'title' => 'Medical Information Disclaimer'],
    ['id' => 'product', 'title' => 'Product Information'],
    ['id' => 'no-medical-advice', 'title' => 'No Medical Advice'],
    ['id' => 'external-links', 'title' => 'External Links'],
    ['id' => 'accuracy', 'title' => 'Accuracy of Information'],
    ['id' => 'limitation', 'title' => 'Limitation of Liability'],
    ['id' => 'regulatory', 'title' => 'Regulatory Disclaimer'],
    ['id' => 'contact', 'title' => 'Contact Information'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Disclaimer — Important legal notices regarding our website, products, and services.">
  <title>Disclaimer - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="about-banner">
      <div class="about-banner__overlay"></div>
      <div class="container about-banner__content">
        <h1 class="about-banner__title">Disclaimer</h1>
        <nav class="about-banner__breadcrumb" aria-label="Breadcrumb">
          <a href="index.php" class="about-banner__breadcrumb-link">Home</a>
          <span class="about-banner__breadcrumb-sep">&#9656;</span>
          <span class="about-banner__breadcrumb-current">Disclaimer</span>
        </nav>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="legal-layout">

          <!-- Sidebar Navigation -->
          <aside class="legal-sidebar" aria-label="Disclaimer navigation">
            <div class="legal-sidebar__inner">
              <div class="legal-sidebar__header">
                <span class="legal-sidebar__label">Contents</span>
              </div>
              <nav class="legal-sidebar__nav">
                <?php foreach ($sections as $s): ?>
                  <a href="#<?= $s['id'] ?>" class="legal-sidebar__link">
                    <?= $s['title'] ?>
                  </a>
                <?php endforeach; ?>
              </nav>
              <div class="legal-sidebar__meta">
                <p>Last Updated: August 23, 2026</p>
              </div>
            </div>
          </aside>

          <!-- Main Content -->
          <div class="legal-content">

            <div class="legal-content__header reveal">
              <div class="legal-content__updated">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                Last Updated: August 23, 2026
              </div>
              <p class="legal-content__intro">
                The information provided on the PharmaCorp website is for general informational purposes only. Please read this disclaimer carefully before using our website or relying on any content herein.
              </p>
            </div>

            <!-- Section 1 -->
            <article id="general" class="legal-section reveal">
              <h2 class="legal-section__title">General Information</h2>
              <div class="legal-section__body">
                <p>
                  All information, content, and materials on this website are provided on an "as is" and "as available" basis without any warranties or representations of any kind, whether express or implied. PharmaCorp makes no warranty or guarantee regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on this site.
                </p>
                <p>
                  The content published on this website is intended to provide general information about PharmaCorp, our products, services, and operations. It should not be relied upon as the sole basis for making decisions without consulting more accurate, complete, or timely sources of information.
                </p>
                <p>
                  PharmaCorp expressly disclaims all liability for any errors or omissions in the content of this site and for any losses, injuries, or damages arising from the use of or reliance on any information provided herein.
                </p>
              </div>
            </article>

            <!-- Section 2 -->
            <article id="medical" class="legal-section reveal">
              <h2 class="legal-section__title">Medical Information Disclaimer</h2>
              <div class="legal-section__body">
                <div class="legal-callout">
                  <div class="legal-callout__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                  </div>
                  <div class="legal-callout__content">
                    <strong>Important Notice:</strong> The content on this website is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of a qualified healthcare provider with any questions regarding a medical condition.
                  </div>
                </div>
                <p>
                  PharmaCorp is a pharmaceutical company that develops and manufactures healthcare products. While we endeavor to provide accurate and up-to-date information about our products and therapeutic areas, the medical and health-related content on this website is presented for informational purposes only.
                </p>
                <p>
                  Nothing on this website should be construed as promoting or endorsing the use of any pharmaceutical product without proper medical supervision or in a manner inconsistent with its approved labeling.
                </p>
              </div>
            </article>

            <!-- Section 3 -->
            <article id="product" class="legal-section reveal">
              <h2 class="legal-section__title">Product Information</h2>
              <div class="legal-section__body">
                <p>
                  Product information displayed on this website is intended for general reference and may not reflect the most current developments. Product availability, indications, dosing, contraindications, and safety information may vary by country and are subject to local regulatory approvals.
                </p>
                <p>
                  The product information presented on this site is not a substitute for the complete prescribing information, package inserts, or other official product documentation approved by relevant regulatory authorities in your jurisdiction.
                </p>
                <p>
                  Healthcare professionals should always refer to the approved prescribing information and consult local regulatory guidelines before prescribing or dispensing any pharmaceutical product. Patients should consult their healthcare provider before starting, stopping, or modifying any medication regimen.
                </p>
              </div>
            </article>

            <!-- Section 4 -->
            <article id="no-medical-advice" class="legal-section reveal">
              <h2 class="legal-section__title">No Medical Advice</h2>
              <div class="legal-section__body">
                <p>
                  No doctor-patient, pharmacist-patient, or any other healthcare professional-patient relationship is created through the use of this website. The information provided herein does not constitute medical advice and should not be used as a basis for self-diagnosis or self-treatment.
                </p>
                <p>
                  In the event of a medical emergency, contact your local emergency services immediately. Never disregard professional medical advice or delay in seeking treatment because of something you have read on this website.
                </p>
                <p>
                  If you are a patient, the information on this website should not be used as a substitute for the advice of your physician, pharmacist, or other qualified healthcare professional. If you are a healthcare professional, the information is provided to support your clinical judgment and does not replace your professional responsibility to evaluate each patient individually.
                </p>
              </div>
            </article>

            <!-- Section 5 -->
            <article id="external-links" class="legal-section reveal">
              <h2 class="legal-section__title">External Links</h2>
              <div class="legal-section__body">
                <p>
                  This website may contain hyperlinks to websites operated by third parties. These links are provided for your convenience and informational purposes only. PharmaCorp does not endorse, control, or assume responsibility for the content, privacy practices, or accuracy of information on any external website.
                </p>
                <p>
                  When you click on a link to an external website, you leave our site and do so entirely at your own risk. We encourage you to read the terms and conditions and privacy policies of any third-party website you visit.
                </p>
                <p>
                  PharmaCorp has no control over and assumes no responsibility for the content, policies, or practices of any third-party websites or services.
                </p>
              </div>
            </article>

            <!-- Section 6 -->
            <article id="accuracy" class="legal-section reveal">
              <h2 class="legal-section__title">Accuracy of Information</h2>
              <div class="legal-section__body">
                <p>
                  While we make reasonable efforts to ensure that the information on this website is accurate and current, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the website or the information, products, services, or related graphics contained on the website.
                </p>
                <p>
                  Any reliance you place on such information is therefore strictly at your own risk. PharmaCorp disclaims all liability for any loss or damage arising from reliance on the information contained herein.
                </p>
                <p>
                  We reserve the right to make changes, corrections, and improvements to the information, products, and services offered on this website at any time without prior notice.
                </p>
              </div>
            </article>

            <!-- Section 7 -->
            <article id="limitation" class="legal-section reveal">
              <h2 class="legal-section__title">Limitation of Liability</h2>
              <div class="legal-section__body">
                <p>
                  To the fullest extent permitted by applicable law, PharmaCorp, its directors, officers, employees, agents, and affiliates shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses resulting from:
                </p>
                <ul class="legal-list">
                  <li>Your access to, use of, or inability to access or use this website</li>
                  <li>Any conduct or content of any third party on the website</li>
                  <li>Any content obtained from the website</li>
                  <li>Unauthorized access, use, or alteration of your transmissions or content</li>
                </ul>
                <p>
                  In no event shall our total aggregate liability exceed the amount you paid to PharmaCorp, if any, in the past six months for the services giving rise to the claim.
                </p>
              </div>
            </article>

            <!-- Section 8 -->
            <article id="regulatory" class="legal-section reveal">
              <h2 class="legal-section__title">Regulatory Disclaimer</h2>
              <div class="legal-section__body">
                <p>
                  PharmaCorp operates in compliance with applicable pharmaceutical regulations in the jurisdictions where it conducts business. However, the regulatory status of products and services described on this website may vary by country or region.
                </p>
                <p>
                  Nothing on this website should be interpreted as an offer to sell or solicitation to buy any pharmaceutical product in any jurisdiction where such offer or solicitation would be unlawful. The products described on this website may not be approved for marketing in all countries.
                </p>
                <p>
                  Users of this website are responsible for compliance with all applicable local, national, and international laws and regulations pertaining to pharmaceutical products and healthcare services.
                </p>
              </div>
            </article>

            <!-- Section 9 -->
            <article id="contact" class="legal-section reveal">
              <h2 class="legal-section__title">Contact Information</h2>
              <div class="legal-section__body">
                <p>
                  If you have any questions or concerns about this Disclaimer, please contact our legal department:
                </p>
                <div class="legal-contact-card">
                  <div class="legal-contact-card__row">
                    <span class="legal-contact-card__label">Legal Department</span>
                    <span>info@rastomedpharma.com</span>
                  </div>
                  <div class="legal-contact-card__row">
                    <span class="legal-contact-card__label">Phone</span>
                    <span>+91 9410666599 (WhatsApp) | +91 7906752047</span>
                  </div>
                  <div class="legal-contact-card__row">
                    <span class="legal-contact-card__label">Postal Address</span>
                    <span>RastoMed Pharma<br>353, Shivaji Road<br>Meerut, Uttar Pradesh-250001</span>
                  </div>
                </div>
              </div>
            </article>

          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
