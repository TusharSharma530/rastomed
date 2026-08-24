# PharmaCorp - Premium Pharmaceutical Corporate Website

A high-quality frontend demo for a pharmaceutical corporate website, built with PHP templating, modern CSS, and vanilla JavaScript.

## Overview

This is a **frontend-only** project designed for client presentation. PHP is used solely for templating and reusable components — no database, backend APIs, or server-side functionality.

## Features

- **Design System**: Comprehensive CSS variables for colors, typography, spacing, shadows, and transitions
- **Light/Dark Mode**: Smooth theme switching with localStorage persistence and system preference detection
- **Responsive Design**: Fully responsive across all breakpoints (320px to 1440px+)
- **Sticky Header**: Animated header with scroll behavior and mobile hamburger menu
- **Reusable Components**: PHP functions for buttons, cards, badges, stats, CTA blocks, breadcrumbs, and more
- **Scroll Animations**: Intersection Observer-based reveal animations
- **Accessibility**: Focus states, ARIA labels, keyboard navigation support, reduced motion support
- **Print Styles**: Clean print layout

## Project Structure

```
pharma-demo/
├── index.php              # Homepage
├── about.php              # About page
├── products.php           # Products listing
├── product-details.php    # Product detail page
├── gallery.php            # Corporate & facility gallery
├── careers.php            # Careers page & open positions
├── blogs.php              # Blogs & scientific insights listing
├── blog-details.php       # Blog article detail view
├── contact.php            # Contact form
├── privacy-policy.php     # Privacy policy
├── disclaimer.php         # Disclaimer
├── includes/
│   ├── header.php         # Site header
│   ├── navbar.php         # Navigation (desktop + mobile)
│   ├── footer.php         # Site footer
│   ├── theme-toggle.php   # Light/dark toggle
│   └── components.php     # Reusable UI components
├── assets/
│   ├── css/
│   │   ├── style.css      # Design system & core styles
│   │   └── responsive.css # Responsive breakpoints
│   └── js/
│       └── script.js      # Interactive functionality
└── README.md
```

## Setup

### Using PHP Built-in Server

```bash
cd pharma-demo
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

### Using XAMPP/WAMP

1. Copy the `pharma-demo` folder to your web server's root directory (e.g., `htdocs` for XAMPP)
2. Start Apache
3. Navigate to `http://localhost/pharma-demo`

## Pages

| Page | File | Description |
|------|------|-------------|
| Home | `index.php` | Enterprise hero, metrics, products, R&D spotlight, CTA |
| About | `about.php` | Story, vision, leadership, global presence |
| Products | `products.php` | Portfolio, therapeutic areas, new launches |
| Product Details | `product-details.php` | Individual product information |
| Gallery | `gallery.php` | Facility photos, R&D labs, events showcase |
| Careers | `careers.php` | Job openings, company culture, apply form |
| Blogs | `blogs.php` | Articles, research whitepapers, R&D insights |
| Blog Details | `blog-details.php` | Individual article detail view |
| Contact | `contact.php` | Contact form, info, map placeholder |
| Privacy Policy | `privacy-policy.php` | Legal privacy information |
| Disclaimer | `disclaimer.php` | Legal disclaimer |

## Design Tokens

The design system uses CSS custom properties defined in `:root` and `[data-theme="dark"]`:

- **Colors**: Primary (teal), Secondary (blue), Accent (green), with full light/dark variants
- **Typography**: Plus Jakarta Sans + Inter, with responsive `clamp()` sizing
- **Spacing**: Consistent scale from 0.25rem to 8rem
- **Shadows**: 5-level shadow system
- **Transitions**: Fast (150ms), Base (250ms), Slow (350ms), Spring (500ms)

## Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## Notes

- All images are represented as gradient placeholders
- Forms are frontend-only (demo submission)
- No external dependencies beyond Google Fonts
- No build tools required
