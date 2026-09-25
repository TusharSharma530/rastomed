<?php
require_once __DIR__ . '/includes/header.php';

$homeBannerVideo = '';
$homeBannerImg = '';
$homeBannerResult = mysqli_query($con, "SELECT * FROM web_banner WHERE id = 8 AND status = 1 LIMIT 1");
if ($homeBannerResult && mysqli_num_rows($homeBannerResult)) {
    $homeBannerRow = mysqli_fetch_assoc($homeBannerResult);
    $homeBannerVideo = $homeBannerRow['wb_video'] ?? '';
    $homeBannerImg = $homeBannerRow['wb_img'] ?? '';
}

$heroTitle = '';
$heroSubtitle = '';
$heroCatResult = mysqli_query($con, "SELECT * FROM category WHERE id = 76 AND status = 1 LIMIT 1");
if ($heroCatResult && mysqli_num_rows($heroCatResult)) {
    $heroCatRow = mysqli_fetch_assoc($heroCatResult);
    $heroTitle = $heroCatRow['c_name'] ?? '';
    $heroSubtitle = $heroCatRow['sdesc'] ?? '';
}

$aboutTitle = '';
$aboutDesc = '';
$aboutImg = '';
$aboutCatResult = mysqli_query($con, "SELECT * FROM category WHERE id = 77 AND status = 1 LIMIT 1");
if ($aboutCatResult && mysqli_num_rows($aboutCatResult)) {
    $aboutCatRow = mysqli_fetch_assoc($aboutCatResult);
    $aboutTitle = $aboutCatRow['c_name'] ?? '';
    $aboutDesc = $aboutCatRow['c_desc'] ?? '';
    $aboutImg = $aboutCatRow['featured_img'] ?? '';
}

$ourProducts = [];
$homeProductsResult = mysqli_query($con, "SELECT * FROM products WHERE status = 1 ORDER BY `order` ASC, id DESC");
if ($homeProductsResult && mysqli_num_rows($homeProductsResult)) {
    while ($rwProd = mysqli_fetch_assoc($homeProductsResult)) {
        $ourProducts[] = $rwProd;
    }
}

$siteSettings = [];
$homeSettingsResult = mysqli_query($con, "SELECT * FROM settings WHERE id = 1 LIMIT 1");
if ($homeSettingsResult && mysqli_num_rows($homeSettingsResult)) {
    $siteSettings = mysqli_fetch_assoc($homeSettingsResult);
}

$testimonials = [];
$homeTestimonialsResult = mysqli_query($con, "SELECT * FROM testimonials WHERE status = 1 ORDER BY `order` ASC, id ASC");
if ($homeTestimonialsResult && mysqli_num_rows($homeTestimonialsResult)) {
    while ($rwTc = mysqli_fetch_assoc($homeTestimonialsResult)) {
        $tcName = trim(strip_tags($rwTc['title']));
        $tcInitials = '';
        if ($tcName !== '') {
            $tcParts = preg_split('/\s+/', $tcName);
            $tcInitials = strtoupper(substr($tcParts[0], 0, 1));
            if (count($tcParts) > 1) {
                $tcInitials .= strtoupper(substr(end($tcParts), 0, 1));
            }
        }
        $testimonials[] = [
            'quote' => trim(preg_replace('/\s+/', ' ', strip_tags($rwTc['desc']))),
            'name' => $tcName,
            'role' => trim(strip_tags($rwTc['heading'])),
            'avatar' => $tcInitials ?: 'T',
        ];
    }
}

?>

  <main>
  
    <section class="home-hero-banner">
      <?php if(!empty($homeBannerVideo)): ?>
      <video id="heroVideo" class="home-hero-video-bg" autoplay loop muted playsinline webkit-playsinline preload="auto" <?php if(!empty($homeBannerImg)): ?>poster="<?= $path . $homeBannerImg ?>"<?php else: ?>poster=""<?php endif; ?>>
        <source src="<?= $path . $homeBannerVideo ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <?php endif; ?>
      <div class="home-hero-overlay"></div>
      <div class="container home-hero-content-container">
        <div class="home-hero-content">
          <span class="home-hero-badge">RastoMed Pharma Private Limited</span>
          <h1 class="home-hero-title"><?= htmlspecialchars($heroTitle) ?></h1>
          <p class="home-hero-subtitle"><?= htmlspecialchars($heroSubtitle) ?></p>
          
      
          <div class="home-hero-features">
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes shieldPulse {
                      0%, 100% { transform: scale(1); }
                      50% { transform: scale(1.05); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <g style="transform-origin: 50px 48px; animation: shieldPulse 3s infinite ease-in-out;">
                    <path d="M50 24 L68 31 C68 49 59 62 50 68 C41 62 32 49 32 31 Z" fill="none" stroke="#0d47a1" stroke-width="3.8" stroke-linejoin="round" stroke-linecap="round" />
                    <path d="M46 38 H54 V44 H60 V52 H54 V58 H46 V52 H40 V44 H46 Z" fill="#0d47a1" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Trusted<br>Quality</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes heartBeat {
                      0%, 100% { transform: scale(1); }
                      14% { transform: scale(1.15); }
                      28% { transform: scale(1); }
                      42% { transform: scale(1.1); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <path d="M50 46 C50 46 33 35 33 27 C33 21 38 17 44 19 C47 20 50 23 50 23 C50 23 53 20 56 19 C62 17 67 21 67 27 C67 35 50 46 50 46 Z" fill="#0d47a1" style="transform-origin: 50px 32px; animation: heartBeat 2.2s infinite ease-in-out;" />
                  <path d="M28 56 C34 52 42 54 48 58 L54 62 C58 64 64 62 68 56 C70 52 67 49 63 50 L54 53 C50 54 45 49 40 49 C34 49 28 56 28 56 Z" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M24 65 C29 61 38 59 48 64" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" />
                </svg>
              </div>
              <span class="hero-feature-label">Better<br>Health</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes waveGrid {
                      0%, 100% { opacity: 0.75; }
                      50% { opacity: 1; }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <circle cx="50" cy="50" r="22" fill="none" stroke="#0d47a1" stroke-width="3.5" />
                  <g style="animation: waveGrid 3s infinite ease-in-out;">
                    <line x1="28" y1="50" x2="72" y2="50" fill="none" stroke="#0d47a1" stroke-width="2.2" stroke-linecap="round" />
                    <line x1="50" y1="28" x2="50" y2="72" fill="none" stroke="#0d47a1" stroke-width="2.2" stroke-linecap="round" />
                    <ellipse cx="50" cy="50" rx="14" ry="22" fill="none" stroke="#0d47a1" stroke-width="2.2" />
                    <ellipse cx="50" cy="50" rx="22" ry="12" fill="none" stroke="#0d47a1" stroke-width="2.2" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Global<br>Presence</span>
            </div>
            <div class="hero-feature-item">
              <div class="hero-feature-gif-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100%" height="100%">
                  <style>
                    @keyframes pulseBeam {
                      0%, 100% { opacity: 0.25; transform: scaleY(0.95); }
                      50% { opacity: 0.9; transform: scaleY(1.05); }
                    }
                    @keyframes gearTurn {
                      0% { transform: rotate(0deg); }
                      100% { transform: rotate(360deg); }
                    }
                    @keyframes floatAtom {
                      0%, 100% { transform: translateY(0); }
                      50% { transform: translateY(-3px); }
                    }
                  </style>
                  <circle cx="50" cy="50" r="47" fill="none" stroke="#90caf9" stroke-width="2" opacity="0.85" />
                  <circle cx="50" cy="50" r="42" fill="none" stroke="#0d47a1" stroke-width="2.5" />
                  <g style="transform-origin: 50px 50px; animation: floatAtom 3s infinite ease-in-out;">
                    <path d="M30 72 H70 V75 H30 Z" fill="#0d47a1" />
                    <path d="M38 68 H62 V72 H38 Z" fill="#0d47a1" />
                    <rect x="42" y="62" width="16" height="6" rx="2" fill="#0d47a1" />
                    <rect x="34" y="55" width="32" height="4" rx="1" fill="#0d47a1" />
                    <path d="M60 62 C60 44 65 34 52 25 C45 20 38 26 38 32 C38 36 42 38 46 38 C50 38 52 35 52 32 C52 28 48 27 46 27 C54 27 54 44 54 55" fill="none" stroke="#0d47a1" stroke-width="3.5" stroke-linecap="round" />
                    <path d="M42 22 L49 33 C49 33 46 35 43 37 L36 26 Z" fill="#0d47a1" />
                    <path d="M42 39 L47 47 H41 L37 40 Z" fill="#0d47a1" />
                    <path d="M48 37 L52 45 H48 L45 38 Z" fill="#0d47a1" />
                    <circle cx="54" cy="46" r="3.5" fill="#0d47a1" style="transform-origin: 54px 46px; animation: gearTurn 6s linear infinite;" stroke="#90caf9" stroke-width="1" />
                    <circle cx="50" cy="62" r="3" fill="#1565c0" />
                    <polygon points="44,55 56,55 51,47 45,47" fill="#90caf9" style="transform-origin: 50px 51px; animation: pulseBeam 2s infinite ease-in-out;" />
                  </g>
                </svg>
              </div>
              <span class="hero-feature-label">Driven by<br>Innovation</span>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <section class="about-section">
      <div class="container">
        <div class="about-section__grid">
          <div class="about-section__images">
            <div class="about-section__img about-section__img--1">
              <img src="<?= !empty($aboutImg) ? $path . $aboutImg : '' ?>" alt="<?= htmlspecialchars($aboutTitle) ?>" width="400" height="350">
            </div>
          </div>
          <div class="about-section__content">
            <h2 class="about-section__title"><?= htmlspecialchars($aboutTitle) ?></h2>
            <?php
            $aboutParagraphs = array_filter(array_map('trim', explode("\n", str_replace("\\n", "\n", $aboutDesc))));
            foreach ($aboutParagraphs as $aboutPara):
            ?>
            <p class="about-section__text"><?= htmlspecialchars($aboutPara) ?></p>
            <?php endforeach; ?>
            <a href="about.php" class="about-section__btn">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

  
    <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <h3 class="our-products-title">Our Products</h3>
          </div>
          <a href="products.php" class="our-products-viewall">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
        <div class="our-products-slider">
          <div class="our-products-track">
            <?php foreach ($ourProducts as $product): ?>
              <div class="our-product-card">
                <div class="our-product-card__image">
                  <?php if(!empty($product['featured_img'])): ?>
                  <img src="<?= $path . $product['featured_img'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                  <?php else: ?>
                  <img src="" alt="<?= htmlspecialchars($product['name']) ?>" loading="lazy">
                  <?php endif; ?>
                  <a href="product-details.php?id=<?= (int)$product['id'] ?>" class="our-product-card__plus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                  </a>
                </div>
                <div class="our-product-card__body">
                  <div class="flex-between-gap3">
                <div>
                  <h3 class="our-product-card__title margin-0-left"><?= htmlspecialchars($product['name']) ?></h3>
                  <?php if(!empty($product['price'])): ?>
                  <span class="price-tag-style">&#8377; <?= htmlspecialchars($product['price']) ?></span>
                  <?php endif; ?>
                </div>
                <div>
                  <a href="product-details.php?id=<?= (int)$product['id'] ?>" class="our-product-card__btn">Read More</a>
                </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section our-products-section">
      <div class="container">
        <div class="our-products-header">
          <div>
            <span class="our-products-label">TESTIMONIALS</span>
            <h3 class="our-products-title">What Our Clients Say</h3>
          </div>
          <div class="testimonials-arrows">
            <button class="testimonials-arrow testimonials-arrow--prev" aria-label="Previous">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
            </button>
            <button class="testimonials-arrow testimonials-arrow--next" aria-label="Next">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
          </div>
        </div>
        <div class="testimonials-carousel">
          <div class="testimonials-track">
            <?php foreach ($testimonials as $t): ?>
              <div class="testimonial-card-clean reveal">
                <div class="testimonial-card-clean__quote-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/></svg>
                </div>
                <div class="testimonial-card-clean__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testimonial-card-clean__quote"><?= htmlspecialchars($t['quote']) ?></p>
                <div class="testimonial-card-clean__author">
                  <div class="testimonial-card-clean__avatar"><?= $t['avatar'] ?></div>
                  <div>
                    <div class="testimonial-card-clean__name"><?= htmlspecialchars($t['name']) ?></div>
                    <div class="testimonial-card-clean__role"><?= htmlspecialchars($t['role']) ?></div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="testimonials-nav">
            <?php foreach ($testimonials as $tIndex => $t): ?>
            <button class="testimonials-nav__dot<?= $tIndex === 0 ? ' testimonials-nav__dot--active' : '' ?>" aria-label="Slide <?= $tIndex + 1 ?>"></button>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section pad-20-section">
      <div class="container">
        <div class="map-contact-grid">
          <div class="map-wrapper reveal reveal--left">
            <?php $homeMapSrc = trim($siteSettings['map_iframe'] ?? ''); ?>
            <?php if (!empty($homeMapSrc)): ?>
            <iframe
              src="<?= htmlspecialchars($homeMapSrc) ?>"
              width="100%"
              height="450"
              class="map-iframe-no-border border-radius-2xl-box"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="<?= htmlspecialchars($siteSettings['web_name'] ?? 'Location') ?> Location Map">
            </iframe>
            <?php endif; ?>
          </div>
          <div class="map-contact-info reveal reveal--right">
            <span class="our-products-label">GET IN TOUCH</span>
            <h3 class="our-products-title">We Are Here to Help You</h3>
            <?php
            $homeAddress = trim($siteSettings['address'] ?? '');
            $homePhone1 = trim($siteSettings['contact_no'] ?? '');
            $homePhone2 = trim($siteSettings['alternate_no'] ?? '');
            $homeEmail = trim($siteSettings['email_id'] ?? '');
            $homePhone1Full = ($homePhone1 !== '' && strpos($homePhone1, '+') === false && strpos($homePhone1, '91') !== 0) ? '+91 ' . $homePhone1 : $homePhone1;
            $homePhone2Full = ($homePhone2 !== '' && strpos($homePhone2, '+') === false && strpos($homePhone2, '91') !== 0) ? '+91 ' . $homePhone2 : $homePhone2;
            $homeHours = trim($siteSettings['opening_hour'] ?? '');
            if ($homeHours === '') { $homeHours = ''; }
            $homeHoursAt = strpos($homeHours, ',');
            $homeHoursDay = $homeHoursAt !== false ? trim(substr($homeHours, 0, $homeHoursAt)) : $homeHours;
            $homeHoursTime = $homeHoursAt !== false ? trim(substr($homeHours, $homeHoursAt + 1)) : '';
            ?>
            <?php if (!empty($homeAddress)): ?>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong><?= htmlspecialchars(trim($siteSettings['web_name'] ?? '')) ?></strong>
                <p><?= nl2br(htmlspecialchars($homeAddress)) ?></p>
              </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($homePhone1) || !empty($homePhone2)): ?>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="map-contact-item__text">
                <?php if (!empty($homePhone1)): ?>
                <strong><?= htmlspecialchars($homePhone1Full) ?></strong>
                <?php endif; ?>
                <?php if (!empty($homePhone2)): ?>
                <strong><?= htmlspecialchars($homePhone2Full) ?></strong>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($homeEmail)): ?>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong><?= htmlspecialchars($homeEmail) ?></strong>
              </div>
            </div>
            <?php endif; ?>
            <div class="map-contact-item">
              <div class="map-contact-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="map-contact-item__text">
                <strong><?= htmlspecialchars($homeHoursDay) ?></strong>
                <?php if ($homeHoursTime !== ''): ?>
                <p><?= htmlspecialchars($homeHoursTime) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- 9. FOOTER -->
  <?php include __DIR__ . '/includes/footer.php'; ?>
