<?php
/**
 * Reusable UI Components
 * PHP functions for generating consistent UI elements
 */

/**
 * Render a button
 */
function renderButton($text, $url = '#', $variant = 'primary', $size = '', $icon = '', $extraClass = '') {
    $class = 'btn btn--' . $variant;
    if ($size) $class .= ' btn--' . $size;
    if ($extraClass) $class .= ' ' . $extraClass;

    $iconHtml = '';
    if ($icon) {
        $iconHtml = '<span>' . $icon . '</span>';
    }

    if ($url) {
        return '<a href="' . $url . '" class="' . $class . '">' . $text . $iconHtml . '</a>';
    }
    return '<button class="' . $class . '">' . $text . $iconHtml . '</button>';
}

/**
 * Render a section header
 */
function renderSectionHeader($label, $title, $subtitle = '', $centered = true) {
    $alignClass = $centered ? ' text-center' : '';
    $subtitleHtml = $subtitle ? '<p class="section__subtitle">' . $subtitle . '</p>' : '';

    return '
    <div class="section__header' . $alignClass . '">
        <span class="section-label">' . $label . '</span>
        <h2 class="section__title">' . $title . '</h2>
        ' . $subtitleHtml . '
    </div>';
}

/**
 * Render a stat block
 */
function renderStat($number, $label) {
    return '
    <div class="stat">
        <div class="stat__number">' . $number . '</div>
        <div class="stat__label">' . $label . '</div>
    </div>';
}

/**
 * Render a card
 */
function renderCard($title, $text, $linkText = 'Learn More', $linkUrl = '#', $imageUrl = '', $imageAlt = '') {
    $imageHtml = '';
    if ($imageUrl) {
        $imageHtml = '<div class="card__image"><img src="' . $imageUrl . '" alt="' . $imageAlt . '"></div>';
    } else {
        $imageHtml = '<div class="card__image card-image-gradient"></div>';
    }

    return '
    <div class="card">
        ' . $imageHtml . '
        <div class="card__body">
            <h3 class="card__title">' . $title . '</h3>
            <p class="card__text">' . $text . '</p>
            <a href="' . $linkUrl . '" class="card__link">
                ' . $linkText . '
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>
    </div>';
}

/**
 * Render a product card
 */
function renderProductCard($title, $category, $description, $url = 'product-details.php', $badge = '', $icon = '&#9830;') {
    $badgeHtml = $badge ? '<span class="product-card__badge">' . $badge . '</span>' : '';

    return '
    <div class="product-card">
        ' . $badgeHtml . '
        <div class="product-card__image">
            <div class="product-card__image-placeholder">' . $icon . '</div>
        </div>
        <div class="product-card__body">
            <div class="product-card__category">' . $category . '</div>
            <h3 class="product-card__title">' . $title . '</h3>
            <p class="product-card__description">' . $description . '</p>
            <div class="product-card__footer">
                <a href="' . $url . '" class="card__link">
                    View Details
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>';
}

/**
 * Render a news card
 */
function renderNewsCard($title, $excerpt, $date, $category, $url = '#') {
    $day = date('d', strtotime($date));
    $month = date('M', strtotime($date));

    return '
    <div class="news-card">
        <div class="news-card__image card-image-gradient">
            <div class="news-card__date">
                <span class="news-card__date-day">' . $day . '</span>
                <span class="news-card__date-month">' . $month . '</span>
            </div>
        </div>
        <div class="news-card__body">
            <span class="news-card__category">' . $category . '</span>
            <h3 class="news-card__title"><a href="' . $url . '">' . $title . '</a></h3>
            <p class="news-card__excerpt">' . $excerpt . '</p>
        </div>
    </div>';
}

/**
 * Render a CTA block
 */
function renderCtaBlock($title, $text, $primaryText = 'CONTACT', $primaryUrl = 'contact.php', $secondaryText = 'View Products', $secondaryUrl = 'products.php') {
    return '
    <div class="cta-block">
        <div class="cta-block__content">
            <h2 class="cta-block__title">' . $title . '</h2>
            <p class="cta-block__text">' . $text . '</p>
            <div class="cta-block__buttons">
                ' . renderButton($primaryText, $primaryUrl, 'white', 'lg') . '
                ' . renderButton($secondaryText, $secondaryUrl, 'outline-white', 'lg') . '
            </div>
        </div>
    </div>';
}

/**
 * Render breadcrumbs
 */
function renderBreadcrumbs($items = []) {
    if (empty($items)) return '';

    $html = '<nav class="breadcrumb" aria-label="Breadcrumb">';
    foreach ($items as $index => $item) {
        if ($index > 0) {
            $html .= '<span class="breadcrumb__separator" aria-hidden="true">/</span>';
        }
        if ($index === count($items) - 1) {
            $html .= '<span class="breadcrumb__current" aria-current="page">' . $item['label'] . '</span>';
        } else {
            $html .= '<a href="' . $item['url'] . '" class="breadcrumb__link">' . $item['label'] . '</a>';
        }
    }
    $html .= '</nav>';

    return $html;
}

/**
 * Render a badge
 */
function renderBadge($text, $variant = 'primary') {
    return '<span class="badge badge--' . $variant . '">' . $text . '</span>';
}

/**
 * Render page hero section
 */
function renderPageHero($title, $breadcrumbs = [], $subtitle = '') {
    $breadcrumbHtml = '';
    if (!empty($breadcrumbs)) {
        $breadcrumbHtml = renderBreadcrumbs($breadcrumbs);
    }
    $subtitleHtml = $subtitle ? '<p class="footer-subtitle-style">' . $subtitle . '</p>' : '';

    return '
    <section class="page-hero page-hero--banner">
        <div class="container page-hero__content">
            <h1 class="page-hero__title">' . $title . '</h1>
            ' . $subtitleHtml . '
            ' . $breadcrumbHtml . '
        </div>
    </section>';
}

/**
 * Render an animated stat block
 */
function renderAnimatedStat($number, $label, $prefix = '', $suffix = '') {
    return '
    <div class="stat">
        <div class="stat__number" data-target="' . intval($number) . '" data-prefix="' . $prefix . '" data-suffix="' . $suffix . '">' . $prefix . '0' . $suffix . '</div>
        <div class="stat__label">' . $label . '</div>
    </div>';
}

/**
 * Render a value card
 */
function renderValueCard($icon, $title, $description) {
    return '
    <div class="value-card">
        <div class="value-card__icon">' . $icon . '</div>
        <h3 class="value-card__title">' . $title . '</h3>
        <p class="value-card__desc">' . $description . '</p>
    </div>';
}

/**
 * Render a feature card (Why Choose Us)
 */
function renderFeatureCard($icon, $title, $description) {
    return '
    <div class="feature-card">
        <div class="feature-card__icon">' . $icon . '</div>
        <div>
            <h4 class="feature-card__title">' . $title . '</h4>
            <p class="feature-card__desc">' . $description . '</p>
        </div>
    </div>';
}

/**
 * Render a therapeutic area card
 */
function renderTherapyCard($icon, $name, $count) {
    return '
    <div class="therapy-card">
        <div class="therapy-card__icon">' . $icon . '</div>
        <div>
            <div class="therapy-card__name">' . $name . '</div>
            <div class="therapy-card__count">' . $count . '</div>
        </div>
    </div>';
}

/**
 * Render a quality feature
 */
function renderQualityFeature($icon, $title, $description) {
    return '
    <div class="quality-feature">
        <div class="quality-feature__icon">' . $icon . '</div>
        <div>
            <h4 class="quality-feature__title">' . $title . '</h4>
            <p class="quality-feature__desc">' . $description . '</p>
        </div>
    </div>';
}

/**
 * Render a milestone card
 */
function renderMilestoneCard($year, $title, $description) {
    return '
    <div class="milestone-card">
        <div class="milestone-card__year">' . $year . '</div>
        <h4 class="milestone-card__title">' . $title . '</h4>
        <p class="milestone-card__desc">' . $description . '</p>
    </div>';
}

/**
 * Render a filterable product card
 */
function renderFilterableProductCard($product) {
    $id = $product['id'] ?? 0;
    $name = $product['name'] ?? '';
    $category = $product['category'] ?? '';
    $therapy = $product['therapy'] ?? '';
    $description = $product['description'] ?? '';
    $badge = $product['badge'] ?? '';
    $icon = $product['icon'] ?? '&#9830;';
    $image = $product['image'] ?? '';
    $url = $product['url'] ?? 'product-details.php';

    $badgeHtml = $badge ? '<span class="product-card__badge">' . $badge . '</span>' : '';

    $imageHtml = '';
    if ($image) {
        $imageHtml = '
        <div class="product-card__image-enterprise">
            <img src="' . htmlspecialchars($image) . '" alt="' . htmlspecialchars($name) . ' Packaging" loading="lazy">
        </div>';
    } else {
        $imageHtml = '
        <div class="product-card__image">
            <div class="product-card__image-placeholder">' . $icon . '</div>
        </div>';
    }

    return '
    <div class="product-card product-card--visible" data-product="' . $id . '" data-name="' . htmlspecialchars($name) . '" data-category="' . htmlspecialchars($category) . '" data-therapy="' . htmlspecialchars($therapy) . '">
        ' . $badgeHtml . '
        ' . $imageHtml . '
        <div class="product-card__body">
            <h3 class="product-card__title">' . htmlspecialchars($name) . '</h3>
            <p class="product-card__price product-price-h4">&#8377; 655</p>
            <div class="product-card__footer">
                <a href="' . $url . '" class="card__link">
                    View Specifications
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>';
}

/**
 * Render a sustainability card
 */
function renderSustainCard($icon, $title, $description, $color = 'green') {
    $iconClass = 'sustain-card__icon sustain-card__icon--' . $color;
    return '
    <div class="sustain-card">
        <div class="' . $iconClass . '">' . $icon . '</div>
        <h4 class="sustain-card__title">' . $title . '</h4>
        <p class="sustain-card__desc">' . $description . '</p>
    </div>';
}

?>
