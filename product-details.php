<?php
/**
 * Product Details Page - PharmaCorp Enterprise
 */
require_once __DIR__ . '/includes/components.php';

$product = [
    'name' => 'CardioShield Plus',
    'category' => 'Cardiovascular',
    'therapy' => 'Cardiology',
    'dosage_form' => 'Film-Coated Tablets',
    'strengths' => '5mg / 10mg / 20mg',
    'pack_size' => '30 Tablets Blister Pack',
    'prescription_type' => 'Prescription Only (Rx)',
    'shelf_life' => '36 Months',
    'storage' => 'Store below 30°C in a dry place. Protect from light.',
    'image' => 'assets/images/product-card-1.svg',
    'composition' => 'Each film-coated tablet contains: Amlodipine Besylate equivalent to Amlodipine 5mg/10mg, Atorvastatin Calcium equivalent to Atorvastatin 10mg/20mg.',
    'description' => 'CardioShield Plus is an advanced cardiovascular formulation designed to effectively manage hypertension and reduce cardiac risk factors in adult patients.',
    'long_description' => 'CardioShield Plus represents a breakthrough in dual-action cardiovascular therapy, combining two proven active ingredients in a single convenient daily oral dosage form. The synergistic action of Amlodipine and Atorvastatin provides dual arterial protection, simultaneously reducing systemic vascular resistance and optimizing lipid profiles. Manufactured under strict WHO-GMP cleanroom standards, each batch guarantees uniform dissolution velocity and bioequivalence.',
    'benefits' => [
        '24-hour continuous blood pressure regulation with once-daily dosing.',
        'Proven reduction in major adverse cardiovascular events (MACE).',
        'High bioavailability via engineered self-emulsifying solid oral matrix.',
        'Excellent clinical tolerability profile across diverse patient cohorts.',
        'Single-pill combination significantly improves long-term patient compliance.',
    ],
    'key_information' => [
        'Store below 30°C in original moisture-barrier packaging.',
        'Protect from direct sunlight and ambient humidity.',
        'Keep out of reach of unauthorized personnel and children.',
        'Strictly for prescription medical use under physician supervision.',
    ],
    'side_effects' => [
        'Mild headache (transient)',
        'Dizziness during initial titration',
        'Peripheral edema (infrequent)',
        'Abdominal comfort variations',
    ],
];

$relatedProducts = [
    [
        'id' => 2,
        'name' => 'RespiCare Forte',
        'category' => 'General Medicine',
        'description' => 'Comprehensive respiratory therapy for asthma and COPD management.',
        'image' => 'assets/images/product-card-2.svg',
    ],
    [
        'id' => 3,
        'name' => 'NeuroBalance',
        'category' => 'Neurology',
        'description' => 'Innovative neurological treatment for neuropathic pain and mood stabilization.',
        'image' => 'assets/images/product-card-3.svg',
    ],
    [
        'id' => 5,
        'name' => 'GastroEase',
        'category' => 'Gastroenterology',
        'description' => 'Effective gastrointestinal care solution for GERD and acid peptic disorders.',
        'image' => 'assets/images/product-card-5.svg',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($product['name']) ?> - Specification sheet, composition, dosage, and regulatory info.">
  <title><?= htmlspecialchars($product['name']) ?> - PharmaCorp Enterprise</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <style>
    .product-spec-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: var(--space-4);
      margin-bottom: var(--space-6);
    }
    .product-spec-item {
      background: var(--color-surface-alt);
      border-radius: var(--radius-lg);
      padding: var(--space-4);
      border: 1px solid var(--color-border-light);
    }
    .product-spec-label {
      font-size: var(--fs-xs);
      color: var(--color-text-muted);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-weight: bold;
      margin-bottom: 0.25rem;
    }
    .product-spec-val {
      font-size: var(--fs-small);
      font-weight: bold;
      color: var(--color-text);
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero($product['name'], [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Products', 'url' => 'products.php'],
      ['label' => $product['name'], 'url' => 'product-details.php'],
    ], 'WHO-GMP & ISO 9001:2015 Approved Commercial Formulation') ?>

    <!-- ========== PRODUCT OVERVIEW ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1.2fr; gap:clamp(2rem, 5vw, 4rem); align-items:start;" class="contact-grid">
          
          <!-- Product Packaging Image -->
          <div class="reveal reveal--left">
            <div style="background:var(--color-surface); border-radius:var(--radius-2xl); overflow:hidden; border:1px solid var(--color-border); box-shadow:var(--shadow-xl); position:relative;">
              <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?> Packaging Render" style="width:100%; height:auto; display:block;">
              <div style="position:absolute; top:var(--space-4); left:var(--space-4); display:flex; gap:var(--space-2);">
                <span class="trust-pill" style="background:var(--color-primary); color:#fff; border:none;"><?= htmlspecialchars($product['category']) ?></span>
                <span class="trust-pill" style="background:#10b981; color:#fff; border:none;">WHO-GMP Certified</span>
              </div>
            </div>
          </div>

          <!-- Product Details & Specs -->
          <div class="reveal reveal--right">
            <div style="display:flex; gap:var(--space-3); align-items:center; margin-bottom:var(--space-2);">
              <span class="trust-pill"><?= htmlspecialchars($product['therapy']) ?></span>
              <span style="font-size:var(--fs-xs); color:var(--color-text-muted); font-weight:bold;"><?= htmlspecialchars($product['prescription_type']) ?></span>
            </div>
            <h1 style="font-size:var(--fs-h1); font-weight:bold; margin-bottom:var(--space-4); line-height:var(--lh-snug);"><?= htmlspecialchars($product['name']) ?></h1>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); font-size:var(--fs-body); margin-bottom:var(--space-6);">
              <?= htmlspecialchars($product['description']) ?>
            </p>

            <!-- Specifications Table Grid -->
            <div class="product-spec-grid">
              <div class="product-spec-item">
                <div class="product-spec-label">Dosage Form</div>
                <div class="product-spec-val"><?= htmlspecialchars($product['dosage_form']) ?></div>
              </div>
              <div class="product-spec-item">
                <div class="product-spec-label">Available Strengths</div>
                <div class="product-spec-val"><?= htmlspecialchars($product['strengths']) ?></div>
              </div>
              <div class="product-spec-item">
                <div class="product-spec-label">Packaging Pack Size</div>
                <div class="product-spec-val"><?= htmlspecialchars($product['pack_size']) ?></div>
              </div>
              <div class="product-spec-item">
                <div class="product-spec-label">Commercial Shelf Life</div>
                <div class="product-spec-val"><?= htmlspecialchars($product['shelf_life']) ?></div>
              </div>
            </div>

            <!-- Active Composition -->
            <div style="margin-bottom:var(--space-6);">
              <h3 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-2);">Active Formulation Composition</h3>
              <p style="font-size:var(--fs-small); color:var(--color-text-secondary); background:var(--color-surface-alt); padding:var(--space-4); border-radius:var(--radius-lg); border:1px solid var(--color-border-light); line-height:1.5;">
                <?= htmlspecialchars($product['composition']) ?>
              </p>
            </div>

            <!-- CTAs -->
            <div style="display:flex; gap:var(--space-4); flex-wrap:wrap;">
              <a href="contact.php?subject=Specification+Sheet+Request+for+<?= urlencode($product['name']) ?>" class="btn btn--primary btn--lg">
                Request COA &amp; Commercial Quotation
              </a>
              <button class="btn btn--outline btn--lg" onclick="alert('Downloading Certificate of Analysis (COA) PDF Dossier...');">
                📄 COA Dossier (PDF)
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== DETAILED DOSSIER & SIDEBAR ========== -->
    <section class="section section--alt">
      <div class="container">
        <div style="display:grid; grid-template-columns:2.2fr 1fr; gap:var(--space-10);" class="contact-grid">
          <div>
            <!-- Description -->
            <div class="reveal" style="margin-bottom:var(--space-8);">
              <h2 style="font-size:var(--fs-h3); font-weight:bold; margin-bottom:var(--space-4);">Product Description &amp; Mechanism</h2>
              <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed);">
                <?= htmlspecialchars($product['long_description']) ?>
              </p>
            </div>

            <!-- Key Benefits -->
            <div class="reveal" style="margin-bottom:var(--space-8);">
              <h3 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-4);">Clinical &amp; Therapeutic Benefits</h3>
              <ul style="display:flex; flex-direction:column; gap:var(--space-3);">
                <?php foreach ($product['benefits'] as $benefit): ?>
                  <li style="display:flex; align-items:flex-start; gap:var(--space-3); color:var(--color-text-secondary);">
                    <span style="width:22px; height:22px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(16, 185, 129, 0.15); border-radius:var(--radius-full); color:#10b981; font-size:0.75rem; font-weight:bold;">✓</span>
                    <?= htmlspecialchars($benefit) ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Storage & Handling -->
            <div class="reveal">
              <h3 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-4);">Storage &amp; Regulatory Guidance</h3>
              <ul style="display:flex; flex-direction:column; gap:var(--space-3);">
                <?php foreach ($product['key_information'] as $info): ?>
                  <li style="display:flex; align-items:flex-start; gap:var(--space-3); color:var(--color-text-secondary);">
                    <span style="width:22px; height:22px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(13, 110, 253, 0.15); border-radius:var(--radius-full); color:var(--color-primary); font-size:0.75rem; font-weight:bold;">i</span>
                    <?= htmlspecialchars($info) ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <!-- Download & Inquiry Sidebar -->
          <div class="reveal">
            <div style="background:var(--color-surface); border:1px solid var(--color-border); border-radius:var(--radius-2xl); padding:var(--space-6); box-shadow:var(--shadow-md); position:sticky; top:calc(var(--header-height) + var(--space-6));">
              <h3 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-3);">Dossier Downloads</h3>
              <p style="font-size:var(--fs-small); color:var(--color-text-muted); margin-bottom:var(--space-5);">
                Download official technical data sheets and analytical specifications for regulatory submissions.
              </p>

              <div style="display:flex; flex-direction:column; gap:var(--space-3); margin-bottom:var(--space-6);">
                <a href="#" class="btn btn--outline btn--sm" style="text-align:left; display:flex; justify-content:space-between; align-items:center;">
                  <span>📥 Technical Specification (PDF)</span>
                  <span>1.2 MB</span>
                </a>
                <a href="#" class="btn btn--outline btn--sm" style="text-align:left; display:flex; justify-content:space-between; align-items:center;">
                  <span>📥 Prescribing Leaflet (PDF)</span>
                  <span>850 KB</span>
                </a>
                <a href="#" class="btn btn--outline btn--sm" style="text-align:left; display:flex; justify-content:space-between; align-items:center;">
                  <span>📥 Material Safety Sheet (MSDS)</span>
                  <span>620 KB</span>
                </a>
              </div>

              <?= renderButton('Inquire For Turnkey Supply', 'contact.php', 'primary', 'w-full') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== SIMILAR FORMULATIONS ========== -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section-label">Therapeutic Portfolio</span>
          <h2 class="section__title">Related Formulations</h2>
        </div>
        <div class="rd-grid">
          <?php foreach ($relatedProducts as $rp): ?>
            <div class="rd-card reveal">
              <div style="width:100%; height:160px; border-radius:var(--radius-md); overflow:hidden; margin-bottom:var(--space-4); background:var(--color-surface-alt);">
                <img src="<?= $rp['image'] ?>" alt="<?= htmlspecialchars($rp['name']) ?>" style="width:100%; height:100%; object-fit:cover;">
              </div>
              <span class="trust-pill" style="font-size:10px; margin-bottom:var(--space-2);"><?= htmlspecialchars($rp['category']) ?></span>
              <h4 style="font-size:var(--fs-h4); font-weight:bold; margin-bottom:var(--space-2);"><?= htmlspecialchars($rp['name']) ?></h4>
              <p class="rd-card__text" style="font-size:var(--fs-small); margin-bottom:var(--space-4);"><?= htmlspecialchars($rp['description']) ?></p>
              <a href="product-details.php?id=<?= $rp['id'] ?>" class="card__link" style="font-size:var(--fs-xs);">View Specifications &rarr;</a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
