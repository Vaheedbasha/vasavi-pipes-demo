# Vasavi Plast Industries — Corporate Website Redesign Concept

A modern, responsive, corporate industrial single-page website concept for **Vasavi Plast Industries**, PVC pipe and fittings manufacturer based in Guntakal, Andhra Pradesh.

---

## 1. Project Overview

* **Project Scope:** Strict Single-Page Homepage (`index.php`)
* **Technology Stack:** PHP 8+, Semantic HTML5, Custom CSS3, Vanilla JavaScript (No React, Tailwind, Bootstrap, or jQuery)
* **Design Vision:** Modern Industrial Corporate with an engineered charcoal, orange-red (`#D94724`), and light grey palette.
* **Target Environment:** XAMPP on Windows / Hostinger-compatible PHP hosting.

---

## 2. Directory Architecture

```text
vas-pipes/
├── index.php                      # Main orchestrator & semantic HTML5 skeleton
├── README.md                      # Setup instructions & project notes
├── vasavi-project-overview.md     # Approved project requirements
├── vasavi-ui-ux-technical-spec.md # Technical & design specification
│
├── includes/
│   ├── config.php                 # Site constants, metadata, products & applications data
│   └── functions.php              # Lucide icon renderer, image placeholder helper, logo renderer
│
├── components/
│   ├── header.php                 # Section 01: Sticky header with brand mark & mobile toggle
│   ├── navbar.php                 # Navigation items
│   ├── hero.php                   # Section 02: Eyebrow, headline, copy, dual CTAs, location
│   ├── about.php                  # Section 03: Editorial 2-column layout, intro copy & placeholder
│   ├── products.php               # Section 04: 5-product grid (uPVC, Plumbing, Conduits, Threaded)
│   ├── applications.php           # Section 05: Application categories grid (Plumbing, Electrical, Water)
│   ├── manufacturing.php          # Section 06: Dark charcoal section, 3 facility/process placeholders
│   ├── quality.php                # Section 07: Quality commitment copy & compliance notice
│   ├── enquiry-cta.php            # Section 08: Orange-red & charcoal conversion callout
│   ├── contact.php                # Section 09: Contact info, direct tel/mailto links, map placeholder
│   └── footer.php                 # Section 10: Brand statement, quick links, category links, copyright
│
└── assets/
    ├── css/
    │   ├── style.css              # Reset, typography, design tokens, desktop layouts
    │   └── responsive.css         # Breakpoint rules (mobile, tablet, desktop, wide desktop)
    ├── js/
    │   └── main.js                # Sticky header, accessible mobile drawer, smooth scroll, scrollspy
    └── images/
        ├── logo/                  # Destination for official company logo image file
        ├── products/              # Destination for verified product photography
        ├── factory/               # Destination for official plant/machinery photography
        └── applications/          # Destination for verified on-site installation photography
```

---

## 3. Local Development Setup (XAMPP / PHP)

### Option A: Using the PHP Built-in Server (Recommended for instant testing)
1. Open PowerShell or Terminal in the project root:
   ```powershell
   cd D:\vas-pipes
   ```
2. Start the PHP server:
   ```powershell
   php -S localhost:8000
   ```
3. Open your browser and navigate to:
   ```text
   http://localhost:8000
   ```

### Option B: Using XAMPP Apache
1. Copy or symlink the `vas-pipes` directory into your XAMPP `htdocs` folder:
   ```text
   C:\xampp\htdocs\vasavi-plast\
   ```
2. Start the **Apache** service from the XAMPP Control Panel.
3. Open your browser and navigate to:
   ```text
   http://localhost/vasavi-plast/
   ```

---

## 4. How to Update Assets & Content

### A. Company Logo Replacement
When the official logo file is available:
1. Save the file as `logo.png` (or `.jpg`, `.webp`) in `assets/images/logo/logo.png`.
2. The `render_brand_logo()` helper in `includes/functions.php` automatically detects the image file and replaces the CSS framed mark without code modification.

### B. Image Placeholder Replacement
All placeholders are built with standard CSS containers and aspect ratios (`aspect-16-9`, `aspect-4-3`, `aspect-16-10`).
To replace any placeholder with a real photograph:
```php
<!-- Replace this placeholder block: -->
<?= render_placeholder('PRODUCT IMAGE 01', 'aspect-4-3', 'product-placeholder') ?>

<!-- With an img tag: -->
<img src="assets/images/products/upvc-pipe.jpg" alt="uPVC Pipes - Vasavi Plast" class="product-img aspect-4-3">
```

### C. Content Requiring Official Company Verification
Before presenting the website as fully live, verify:
1. **Official Street Address:** In `includes/config.php` (`$company_info['address']`).
2. **Direct Phone Numbers:** In `includes/config.php` (`$company_info['phone_display']` and `phone_tel`).
3. **Official Email:** In `includes/config.php` (`$company_info['email']`).
4. **Certifications & Standards:** No ISO, BIS, or ISI badges have been fabricated; add these into `components/quality.php` once verified copies of certifications are provided.
