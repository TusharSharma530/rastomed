<!-- DEMO CONTENT — Legal team review required before production -->
<?php
/**
 * Privacy Policy Page - PharmaCorp
 * Premium legal document layout with sticky sidebar navigation
 */
require_once __DIR__ . '/includes/components.php';

$sections = [
    ['id' => 'introduction', 'number' => '1', 'title' => 'Introduction'],
    ['id' => 'information-collected', 'number' => '2', 'title' => 'Information We Collect'],
    ['id' => 'how-information-used', 'number' => '3', 'title' => 'How Information Is Used'],
    ['id' => 'cookies', 'number' => '4', 'title' => 'Cookies'],
    ['id' => 'data-security', 'number' => '5', 'title' => 'Data Security'],
    ['id' => 'third-party', 'number' => '6', 'title' => 'Third-Party Services'],
    ['id' => 'user-rights', 'number' => '7', 'title' => 'User Rights'],
    ['id' => 'data-retention', 'number' => '8', 'title' => 'Data Retention'],
    ['id' => 'policy-updates', 'number' => '9', 'title' => 'Policy Updates'],
    ['id' => 'contact', 'number' => '10', 'title' => 'Contact Information'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PharmaCorp Privacy Policy — How we collect, use, and protect your personal information.">
  <title>Privacy Policy - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero('Privacy Policy', [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Privacy Policy', 'url' => 'privacy-policy.php'],
    ], 'Your privacy matters to us. This policy explains how we handle your data.') ?>

    <section class="section">
      <div class="container">
        <div class="legal-layout">

          <!-- Sidebar Navigation -->
          <aside class="legal-sidebar" aria-label="Policy navigation">
            <div class="legal-sidebar__inner">
              <div class="legal-sidebar__header">
                <span class="legal-sidebar__label">On This Page</span>
              </div>
              <nav class="legal-sidebar__nav">
                <?php foreach ($sections as $s): ?>
                  <a href="#<?= $s['id'] ?>" class="legal-sidebar__link">
                    <span class="legal-sidebar__number"><?= $s['number'] ?></span>
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
                PharmaCorp ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy describes how we collect, use, store, share, and protect your personal information when you visit our website, use our services, or interact with us in any capacity.
              </p>
            </div>

            <!-- Section 1 -->
            <article id="introduction" class="legal-section reveal">
              <div class="legal-section__number">1</div>
              <h2 class="legal-section__title">Introduction</h2>
              <div class="legal-section__body">
                <p>
                  Welcome to PharmaCorp. We value your trust and are committed to safeguarding the personal information you share with us. This Privacy Policy applies to all websites, applications, and services operated by PharmaCorp and its affiliated entities worldwide.
                </p>
                <p>
                  By accessing or using our website and services, you acknowledge that you have read, understood, and agree to the practices described in this policy. If you do not agree with any part of this policy, we respectfully ask that you discontinue use of our website and services.
                </p>
                <p>
                  This policy is designed to comply with applicable data protection regulations, including the General Data Protection Regulation (GDPR), the California Consumer Privacy Act (CCPA), and other relevant jurisdictional requirements. We encourage you to review this policy periodically to stay informed about how we protect your information.
                </p>
              </div>
            </article>

            <!-- Section 2 -->
            <article id="information-collected" class="legal-section reveal">
              <div class="legal-section__number">2</div>
              <h2 class="legal-section__title">Information We Collect</h2>
              <div class="legal-section__body">
                <p>We collect various categories of information to provide and improve our services. The types of information we may collect include:</p>

                <h3 class="legal-section__subtitle">Personal Identification Information</h3>
                <p>
                  When you voluntarily submit forms on our website, subscribe to newsletters, request product information, or contact us, we may collect personal details such as your full name, email address, phone number, professional title, organization name, and mailing address.
                </p>

                <h3 class="legal-section__subtitle">Professional Information</h3>
                <p>
                  For healthcare professionals and business partners, we may collect additional professional details including specialty, license number, institution affiliation, and professional credentials relevant to our interactions.
                </p>

                <h3 class="legal-section__subtitle">Technical and Usage Data</h3>
                <p>
                  When you visit our website, we automatically collect certain technical information, including your IP address, browser type and version, operating system, referral URLs, pages viewed, links clicked, time spent on pages, and navigation patterns. This data is collected through server logs and analytics tools.
                </p>

                <h3 class="legal-section__subtitle">Cookies and Tracking Technologies</h3>
                <p>
                  We use cookies, web beacons, and similar technologies to enhance your browsing experience, analyze site traffic, and understand user behavior. Please refer to Section 4 for detailed information about our use of cookies.
                </p>
              </div>
            </article>

            <!-- Section 3 -->
            <article id="how-information-used" class="legal-section reveal">
              <div class="legal-section__number">3</div>
              <h2 class="legal-section__title">How Information Is Used</h2>
              <div class="legal-section__body">
                <p>We use the information we collect for purposes that include but are not limited to:</p>

                <ul class="legal-list">
                  <li>
                    <strong>Service Delivery:</strong> To respond to your inquiries, fulfill information requests, provide customer support, and deliver the services you have requested from us.
                  </li>
                  <li>
                    <strong>Communication:</strong> To send you relevant updates about our products, services, research developments, and company news, only when you have opted in to receive such communications.
                  </li>
                  <li>
                    <strong>Website Improvement:</strong> To analyze usage patterns, diagnose technical issues, monitor website performance, and enhance the functionality and user experience of our digital platforms.
                  </li>
                  <li>
                    <strong>Regulatory Compliance:</strong> To comply with legal obligations, regulatory requirements, industry standards, and pharmacovigilance reporting obligations applicable to pharmaceutical operations.
                  </li>
                  <li>
                    <strong>Security:</strong> To detect, prevent, and address fraud, unauthorized access, and other potentially prohibited or illegal activities that may compromise the integrity of our services.
                  </li>
                  <li>
                    <strong>Business Operations:</strong> To conduct internal analytics, generate aggregated statistical data, and support general business operations and strategic planning.
                  </li>
                </ul>
              </div>
            </article>

            <!-- Section 4 -->
            <article id="cookies" class="legal-section reveal">
              <div class="legal-section__number">4</div>
              <h2 class="legal-section__title">Cookies</h2>
              <div class="legal-section__body">
                <p>
                  Our website uses cookies to distinguish you from other visitors and to provide a personalized browsing experience. A cookie is a small text file stored on your device when you visit a website.
                </p>

                <h3 class="legal-section__subtitle">Types of Cookies We Use</h3>
                <ul class="legal-list">
                  <li>
                    <strong>Essential Cookies:</strong> Required for the website to function correctly. These enable core features such as navigation, secure areas access, and theme preferences.
                  </li>
                  <li>
                    <strong>Analytics Cookies:</strong> Help us understand how visitors interact with our website by collecting anonymous usage data. This helps us improve site performance and content relevance.
                  </li>
                  <li>
                    <strong>Preference Cookies:</strong> Allow the website to remember choices you make, such as your language preference, region, or display settings, to provide enhanced functionality.
                  </li>
                </ul>

                <h3 class="legal-section__subtitle">Managing Cookies</h3>
                <p>
                  You can control and manage cookies through your browser settings. Most browsers allow you to refuse or accept cookies, delete existing cookies, and set preferences for certain websites. Please note that disabling certain cookies may impact the functionality of our website.
                </p>
              </div>
            </article>

            <!-- Section 5 -->
            <article id="data-security" class="legal-section reveal">
              <div class="legal-section__number">5</div>
              <h2 class="legal-section__title">Data Security</h2>
              <div class="legal-section__body">
                <p>
                  We implement robust technical, administrative, and organizational safeguards designed to protect your personal information against unauthorized access, alteration, disclosure, or destruction. Our security measures include:
                </p>
                <ul class="legal-list">
                  <li>Encryption of data in transit using industry-standard TLS/SSL protocols</li>
                  <li>Secure storage systems with access controls and authentication mechanisms</li>
                  <li>Regular security assessments and vulnerability testing</li>
                  <li>Employee training on data protection and information security best practices</li>
                  <li>Incident response procedures to promptly address any security breaches</li>
                </ul>
                <p>
                  While we strive to protect your personal information, no method of electronic transmission or storage is completely secure. We cannot guarantee absolute security but are committed to promptly notifying affected parties in the event of a data breach, in accordance with applicable law.
                </p>
              </div>
            </article>

            <!-- Section 6 -->
            <article id="third-party" class="legal-section reveal">
              <div class="legal-section__number">6</div>
              <h2 class="legal-section__title">Third-Party Services</h2>
              <div class="legal-section__body">
                <p>
                  We may engage trusted third-party service providers to perform functions on our behalf, such as website hosting, analytics, email delivery, and customer support tools. These service providers have access to personal information only as needed to perform their designated functions and are contractually obligated to protect your data.
                </p>
                <p>
                  We do not sell, trade, or rent your personal information to third parties for their independent marketing purposes. We may share anonymized, aggregated data that cannot be used to identify you individually for research, statistical, or business improvement purposes.
                </p>
                <p>
                  In certain circumstances, we may be required to disclose your personal information if required by law, regulation, legal process, or governmental request, or to protect the rights, property, or safety of PharmaCorp, our users, or the public.
                </p>
              </div>
            </article>

            <!-- Section 7 -->
            <article id="user-rights" class="legal-section reveal">
              <div class="legal-section__number">7</div>
              <h2 class="legal-section__title">User Rights</h2>
              <div class="legal-section__body">
                <p>Depending on your location and applicable laws, you may have the following rights regarding your personal data:</p>

                <ul class="legal-list">
                  <li>
                    <strong>Right of Access:</strong> The right to request a copy of the personal data we hold about you and to receive information about how it is processed.
                  </li>
                  <li>
                    <strong>Right to Rectification:</strong> The right to request correction of inaccurate or incomplete personal data we maintain about you.
                  </li>
                  <li>
                    <strong>Right to Erasure:</strong> The right to request deletion of your personal data, subject to our legal obligations and legitimate business needs.
                  </li>
                  <li>
                    <strong>Right to Restrict Processing:</strong> The right to request that we limit the processing of your personal data under certain circumstances.
                  </li>
                  <li>
                    <strong>Right to Data Portability:</strong> The right to receive your personal data in a structured, commonly used, and machine-readable format.
                  </li>
                  <li>
                    <strong>Right to Object:</strong> The right to object to the processing of your personal data for direct marketing or other specific purposes.
                  </li>
                </ul>

                <p>
                  To exercise any of these rights, please contact us using the details provided in Section 10. We will respond to your request within the timeframes required by applicable law.
                </p>
              </div>
            </article>

            <!-- Section 8 -->
            <article id="data-retention" class="legal-section reveal">
              <div class="legal-section__number">8</div>
              <h2 class="legal-section__title">Data Retention</h2>
              <div class="legal-section__body">
                <p>
                  We retain your personal information only for as long as necessary to fulfill the purposes for which it was collected, including to satisfy any legal, regulatory, accounting, or reporting requirements.
                </p>
                <p>
                  To determine the appropriate retention period, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorized use or disclosure, the purposes for which we process the data, and applicable legal requirements.
                </p>
                <p>
                  When your personal data is no longer required, it will be securely deleted or anonymized so that it can no longer be associated with you. In certain cases, we may retain anonymized data for statistical or research purposes indefinitely.
                </p>
              </div>
            </article>

            <!-- Section 9 -->
            <article id="policy-updates" class="legal-section reveal">
              <div class="legal-section__number">9</div>
              <h2 class="legal-section__title">Policy Updates</h2>
              <div class="legal-section__body">
                <p>
                  We may update this Privacy Policy from time to time to reflect changes in our practices, technologies, legal requirements, or other factors. When we make material changes, we will revise the "Last Updated" date at the top of this page and, where appropriate, notify you via email or a prominent notice on our website.
                </p>
                <p>
                  We encourage you to review this policy periodically to stay informed about how we protect your information. Your continued use of our website and services after any changes to this policy constitutes your acceptance of the updated terms.
                </p>
              </div>
            </article>

            <!-- Section 10 -->
            <article id="contact" class="legal-section reveal">
              <div class="legal-section__number">10</div>
              <h2 class="legal-section__title">Contact Information</h2>
              <div class="legal-section__body">
                <p>
                  If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us at:
                </p>
                <div class="legal-contact-card">
                  <div class="legal-contact-card__row">
                    <span class="legal-contact-card__label">Data Protection Officer</span>
                    <span>privacy@pharmacorp.com</span>
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
