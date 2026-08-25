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
 * Render page hero section
 */
function renderPageHero($title, $breadcrumbs = [], $subtitle = '') {
    $breadcrumbHtml = '';
    if (!empty($breadcrumbs)) {
        $breadcrumbHtml = renderBreadcrumbs($breadcrumbs);
    }
    $subtitleHtml = $subtitle ? '<p style="color:rgba(255,255,255,0.85); font-size:var(--fs-body); max-width:600px; margin:0 auto var(--space-6); line-height:var(--lh-relaxed);">' . $subtitle . '</p>' : '';

    return '
    <section class="page-hero page-hero--banner">
        <div class="container page-hero__content">
            <h1 class="page-hero__title">' . $title . '</h1>
            ' . $subtitleHtml . '
            ' . $breadcrumbHtml . '
        </div>
    </section>';
}

?>
