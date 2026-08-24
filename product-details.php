<?php
/**
 * Product Details Page - PharmaCorp
 * Enhanced with full product detail layout
 */
require_once __DIR__ . '/includes/components.php';

$product = [
    'name' => 'CardioShield Plus',
    'category' => 'Cardiovascular',
    'therapy' => 'Cardiology',
    'dosage_form' => 'Tablets',
    'strengths' => '5mg / 10mg / 20mg',
    'pack_size' => '30 Tablets',
    'prescription_type' => 'Prescription',
    'composition' => 'Each film-coated tablet contains: Amlodipine Besylate equivalent to Amlodipine 5mg/10mg, Atorvastatin Calcium equivalent to Atorvastatin 10mg/20mg',
    'description' => 'CardioShield Plus is an advanced cardiovascular formulation designed to effectively manage hypertension and reduce cardiac risk factors in adult patients. Combining proven active ingredients with an advanced formulation for enhanced bioavailability.',
    'long_description' => 'CardioShield Plus represents a breakthrough in cardiovascular therapy, combining two powerful active ingredients in a single, convenient dosage form. The synergistic action of Amlodipine and Atorvastatin provides comprehensive cardiovascular protection, addressing both blood pressure management and lipid profile optimization. Manufactured under strict WHO-GMP guidelines, each tablet ensures consistent quality and reliable therapeutic outcomes.',
    'benefits' => [
        '24-hour blood pressure control with once-daily dosing',
        'Significant reduction in cardiovascular risk events',
        'Excellent tolerability with minimal side effects',
        'Suitable for monotherapy or combination therapy',
        'Available in multiple strengths for dose titration',
        'Convenient single-pill combination for improved compliance',
    ],
    'key_information' => [
        'Store below 30°C in a dry place',
        'Protect from light and moisture',
        'Keep out of reach of children',
        'For prescription use only',
    ],
    'side_effects' => [
        'Headache (common)',
        'Dizziness (common)',
        'Peripheral edema (uncommon)',
        'Abdominal pain (uncommon)',
    ],
];

$relatedProducts = [
    ['name' => 'RespiCare Forte', 'category' => 'Respiratory', 'description' => 'Comprehensive respiratory therapy for asthma and COPD management.', 'icon' => '&#9736;'],
    ['name' => 'NeuroBalance', 'category' => 'Neurology', 'description' => 'Innovative neurological treatment for neuropathic pain.', 'icon' => '&#9883;'],
    ['name' => 'GastroEase', 'category' => 'Gastroenterology', 'description' => 'Effective gastrointestinal treatment for GERD.', 'icon' => '&#9733;'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $product['name'] ?> - <?= $product['description'] ?>">
  <title><?= $product['name'] ?> - PharmaCorp</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <?= renderPageHero($product['name'], [
      ['label' => 'Home', 'url' => 'index.php'],
      ['label' => 'Products', 'url' => 'products.php'],
      ['label' => $product['name'], 'url' => 'product-details.php'],
    ]) ?>

    <!-- ========== PRODUCT OVERVIEW ========== -->
    <section class="section">
      <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:clamp(2rem, 5vw, 5rem); align-items:start;">
          <!-- Product Image -->
          <div class="reveal reveal--left">
            <div style="background:linear-gradient(135deg, var(--color-surface-alt), var(--color-surface)); border-radius:var(--radius-2xl); aspect-ratio:1; display:flex; align-items:center; justify-content:center; border:1px solid var(--color-border-light); position:relative;">
              <div style="text-align:center; padding:var(--space-8);">
                <div style="width:140px; height:140px; margin:0 auto var(--space-4); background:linear-gradient(135deg, var(--color-primary), var(--color-primary-dark)); border-radius:var(--radius-2xl); display:flex; align-items:center; justify-content:center; color:#fff; font-size:3.5rem;">&#9829;</div>
                <p style="color:var(--color-text-muted); font-size:var(--fs-small);">Product Image</p>
              </div>
              <!-- Badges -->
              <div style="position:absolute; top:var(--space-4); left:var(--space-4); display:flex; gap:var(--space-2);">
                <?= renderBadge($product['category'], 'primary') ?>
                <?= renderBadge('Best Seller', 'success') ?>
              </div>
            </div>
          </div>

          <!-- Product Info -->
          <div class="reveal reveal--right">
            <h1 style="font-size:var(--fs-h1); margin-bottom:var(--space-4);"><?= $product['name'] ?></h1>
            <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-6);">
              <?= $product['description'] ?>
            </p>

            <!-- Specifications Grid -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:var(--space-4); margin-bottom:var(--space-6);">
              <div class="product-detail__spec">
                <div class="product-detail__spec-label">Dosage Form</div>
                <div class="product-detail__spec-value"><?= $product['dosage_form'] ?></div>
              </div>
              <div class="product-detail__spec">
                <div class="product-detail__spec-label">Strengths</div>
                <div class="product-detail__spec-value"><?= $product['strengths'] ?></div>
              </div>
              <div class="product-detail__spec">
                <div class="product-detail__spec-label">Pack Size</div>
                <div class="product-detail__spec-value"><?= $product['pack_size'] ?></div>
              </div>
              <div class="product-detail__spec">
                <div class="product-detail__spec-label">Category</div>
                <div class="product-detail__spec-value"><?= $product['prescription_type'] ?></div>
              </div>
              <div class="product-detail__spec" style="grid-column:1/-1;">
                <div class="product-detail__spec-label">Therapeutic Area</div>
                <div class="product-detail__spec-value"><?= $product['therapy'] ?></div>
              </div>
            </div>

            <!-- Composition -->
            <div style="margin-bottom:var(--space-6);">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-3);">Composition</h3>
              <p style="color:var(--color-text-secondary); line-height:var(--lh-normal); font-size:var(--fs-small); background:var(--color-surface-alt); padding:var(--space-4); border-radius:var(--radius-lg); border:1px solid var(--color-border-light);">
                <?= $product['composition'] ?>
              </p>
            </div>

            <!-- Actions -->
            <div style="display:flex; gap:var(--space-4);">
              <?= renderButton('Request Information', 'contact.php', 'primary', 'lg') ?>
              <?= renderButton('Download Brochure', '#', 'ghost', 'lg') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== DESCRIPTION & SIDEBAR ========== -->
    <section class="section section--alt">
      <div class="container">
        <div style="display:grid; grid-template-columns:2fr 1fr; gap:var(--space-12);">
          <div>
            <!-- Description -->
            <div class="reveal" style="margin-bottom:var(--space-8);">
              <h2 style="font-size:var(--fs-h3); margin-bottom:var(--space-5);">Product Description</h2>
              <p style="color:var(--color-text-secondary); line-height:var(--lh-relaxed); margin-bottom:var(--space-4);">
                <?= $product['long_description'] ?>
              </p>
            </div>

            <!-- Key Benefits -->
            <div class="reveal" style="margin-bottom:var(--space-8);">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-4);">Key Benefits</h3>
              <ul style="display:flex; flex-direction:column; gap:var(--space-3);">
                <?php foreach ($product['benefits'] as $benefit): ?>
                  <li style="display:flex; align-items:flex-start; gap:var(--space-3); color:var(--color-text-secondary);">
                    <span style="width:22px; height:22px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-primary-rgb), 0.1); border-radius:var(--radius-full); color:var(--color-primary); font-size:0.7rem; margin-top:2px;">&#10003;</span>
                    <?= $benefit ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Key Information -->
            <div class="reveal" style="margin-bottom:var(--space-8);">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-4);">Key Information</h3>
              <ul style="display:flex; flex-direction:column; gap:var(--space-3);">
                <?php foreach ($product['key_information'] as $info): ?>
                  <li style="display:flex; align-items:flex-start; gap:var(--space-3); color:var(--color-text-secondary);">
                    <span style="width:22px; height:22px; flex-shrink:0; display:flex; align-items:center; justify-content:center; background:rgba(var(--color-warning), 0.1); border-radius:var(--radius-full); color:var(--color-warning); font-size:0.7rem; margin-top:2px;">&#9888;</span>
                    <?= $info ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <!-- Side Effects -->
            <div class="reveal">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-4);">Possible Side Effects</h3>
              <p style="color:var(--color-text-muted); font-size:var(--fs-small); margin-bottom:var(--space-3);">Like all medicines, this product may cause side effects, although not everybody gets them.</p>
              <ul style="display:flex; flex-direction:column; gap:var(--space-2);">
                <?php foreach ($product['side_effects'] as $effect): ?>
                  <li style="display:flex; align-items:center; gap:var(--space-2); color:var(--color-text-secondary); font-size:var(--fs-small);">
                    <span style="width:6px; height:6px; flex-shrink:0; background:var(--color-text-muted); border-radius:var(--radius-full);"></span>
                    <?= $effect ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <!-- Sidebar -->
          <div class="reveal">
            <div style="background:var(--color-surface); border:1px solid var(--color-border-light); border-radius:var(--radius-xl); padding:var(--space-6); position:sticky; top:calc(var(--header-height) + var(--space-6));">
              <h3 style="font-size:var(--fs-h4); margin-bottom:var(--space-4);">Need Help?</h3>
              <p style="font-size:var(--fs-small); color:var(--color-text-muted); margin-bottom:var(--space-5); line-height:var(--lh-normal);">
                Our team can provide detailed product information, samples, and answer your questions.
              </p>
              <?= renderButton('Contact Sales', 'contact.php', 'primary', 'w-full') ?>

              <div style="margin-top:var(--space-6); padding-top:var(--space-5); border-top:1px solid var(--color-border-light);">
                <h4 style="font-size:var(--fs-body); font-weight:var(--fw-semibold); margin-bottom:var(--space-3);">Product Downloads</h4>
                <div style="display:flex; flex-direction:column; gap:var(--space-2);">
                  <a href="#" style="display:flex; align-items:center; gap:var(--space-2); font-size:var(--fs-small); color:var(--color-primary); text-decoration:none; padding:var(--space-2); border-radius:var(--radius-md); transition:background var(--transition-fast);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Product Brochure (PDF)
                  </a>
                  <a href="#" style="display:flex; align-items:center; gap:var(--space-2); font-size:var(--fs-small); color:var(--color-primary); text-decoration:none; padding:var(--space-2); border-radius:var(--radius-md); transition:background var(--transition-fast);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Prescribing Information
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== RELATED PRODUCTS ========== -->
    <section class="section">
      <div class="container">
        <?= renderSectionHeader('Related Products', 'Explore Similar Products', '') ?>
        <div class="grid grid--3 reveal">
          <?php foreach ($relatedProducts as $rp): ?>
            <?= renderProductCard($rp['name'], $rp['category'], $rp['description'], 'product-details.php', '', $rp['icon']) ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>
</html>
