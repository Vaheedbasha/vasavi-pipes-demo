<?php
/**
 * Vasavi Plast Industries - Helper Functions
 */

/**
 * Render Font Awesome Free Icon
 */
function get_icon($name, $class = '') {
    $fa_map = [
        'menu' => 'fa-solid fa-bars',
        'x' => 'fa-solid fa-xmark',
        'map-pin' => 'fa-solid fa-location-dot',
        'phone' => 'fa-solid fa-phone',
        'mail' => 'fa-solid fa-envelope',
        'package' => 'fa-solid fa-box-open',
        'layers' => 'fa-solid fa-layer-group',
        'factory' => 'fa-solid fa-industry',
        'shield-check' => 'fa-solid fa-shield-halved',
        'arrow-right' => 'fa-solid fa-arrow-right',
        'arrow-up' => 'fa-solid fa-arrow-up',
        'image' => 'fa-solid fa-image',
        'droplets' => 'fa-solid fa-droplet',
        'zap' => 'fa-solid fa-bolt',
        'building-2' => 'fa-solid fa-building',
        'clock' => 'fa-solid fa-clock',
        'check-circle' => 'fa-solid fa-circle-check',
        'tool' => 'fa-solid fa-gears',
        'gears' => 'fa-solid fa-gears',
        'gauge' => 'fa-solid fa-gauge-high',
        'wrench' => 'fa-solid fa-wrench',
        'whatsapp' => 'fa-brands fa-whatsapp',
    ];

    $fa_class = isset($fa_map[$name]) ? $fa_map[$name] : 'fa-solid fa-' . htmlspecialchars($name);
    $extra_classes = $class ? ' ' . htmlspecialchars($class) : '';

    return sprintf(
        '<i class="fa-icon %s%s" aria-hidden="true"></i>',
        $fa_class,
        $extra_classes
    );
}

/**
 * Render standard replaceable image placeholder
 * Pure HTML/CSS container, zero SVG image files inside
 */
function render_placeholder($label, $aspect_class = 'aspect-16-9', $extra_class = '', $sub_label = 'Replace with photograph') {
    return sprintf(
        '<div class="image-placeholder %s %s" role="region" aria-label="%s">
            <div class="placeholder-content">
                <div class="placeholder-icon-badge">%s</div>
                <div class="placeholder-text-group">
                    <span class="placeholder-label">%s</span>
                    <span class="placeholder-hint">%s</span>
                </div>
            </div>
        </div>',
        htmlspecialchars($aspect_class),
        htmlspecialchars($extra_class),
        htmlspecialchars($label),
        get_icon('image', 'placeholder-icon'),
        htmlspecialchars($label),
        htmlspecialchars($sub_label)
    );
}

/**
 * Render Media Asset (Real image if exists, else clean placeholder)
 */
function render_media($path, $alt, $aspect_class = 'aspect-4-3', $placeholder_label = '', $extra_class = '') {
    $full_path = __DIR__ . '/../' . ltrim($path, '/');
    if (!empty($path) && file_exists($full_path)) {
        return sprintf(
            '<div class="media-container %s %s">
                <img src="%s" alt="%s" class="media-photo" loading="lazy">
            </div>',
            htmlspecialchars($aspect_class),
            htmlspecialchars($extra_class),
            htmlspecialchars($path),
            htmlspecialchars($alt)
        );
    }

    return render_placeholder($placeholder_label ?: $alt, $aspect_class, $extra_class);
}

/**
 * Render Official WhatsApp Brand Font Awesome Icon
 */
function render_whatsapp_icon($class = 'whatsapp-official-icon') {
    return sprintf(
        '<i class="fa-brands fa-whatsapp %s" aria-hidden="true"></i>',
        htmlspecialchars($class)
    );
}

/**
 * Render Company Brand Identity (Official logo image if exists, else framed corporate mark)
 */
function render_brand_logo($is_footer = false) {
    $logo_file = $is_footer ? 'assets/images/logo/logo-dark.png' : 'assets/images/logo/logo.png';
    $full_path = __DIR__ . '/../' . $logo_file;

    if (file_exists($full_path)) {
        return sprintf(
            '<img src="%s" alt="Vasavi Plast Industries - PVC Pipes &amp; Fittings" class="brand-logo-img%s" height="46">',
            htmlspecialchars($logo_file),
            $is_footer ? ' brand-logo-footer' : ''
        );
    }

    $fallback_file = __DIR__ . '/../assets/images/logo/logo.png';
    if (file_exists($fallback_file)) {
        return sprintf(
            '<img src="assets/images/logo/logo.png" alt="Vasavi Plast Industries - PVC Pipes &amp; Fittings" class="brand-logo-img%s" height="46">',
            $is_footer ? ' brand-logo-footer' : ''
        );
    }

    // Fallback CSS framed mark matching spec
    $modifier = $is_footer ? ' brand-framed-dark' : ' brand-framed-light';
    return sprintf(
        '<div class="brand-framed%s" aria-label="Vasavi Plast Industries - PVC Pipes and Fittings">
            <div class="brand-frame-box">
                <span class="brand-name-text">VASAVI</span>
                <span class="brand-sub-text">PVC PIPES &amp; FITTINGS</span>
            </div>
        </div>',
        $modifier
    );
}
