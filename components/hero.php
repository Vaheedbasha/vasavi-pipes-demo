<?php
/**
 * Hero Section Component (Clean Overlay Hero, Uncluttered Background)
 * vasavi-pipes / components/hero.php
 */
$hero_bg_image = 'assets/images/hero-bg.jpg';
?>
<section class="section section-hero hero-overlay-mode" id="hero">
    <div class="hero-bg-layer" aria-hidden="true" style="background-image: linear-gradient(90deg, rgba(14, 18, 22, 0.92) 0%, rgba(14, 18, 22, 0.72) 50%, rgba(14, 18, 22, 0.38) 100%), url('<?= htmlspecialchars($hero_bg_image) ?>'); background-size: cover; background-position: center right;">
        <div class="hero-pattern-grid"></div>
    </div>

    <div class="container hero-container">
        <div class="hero-content-wrap reveal-on-scroll">
            <div class="hero-meta-pill">
                <span class="hero-pill-dot"></span>
                <span class="eyebrow eyebrow-light">BIS &amp; ASTM CERTIFIED</span>
                <span class="meta-divider" aria-hidden="true">·</span>
                <span class="location-badge-light">
                    <?= get_icon('map-pin', 'location-icon') ?>
                    <?= htmlspecialchars($company_info['location_short']) ?>
                </span>
            </div>

            <h1 class="hero-title hero-title-overlay">
                Piping Solutions Built for Tough Conditions.
            </h1>

            <p class="hero-description hero-desc-overlay">
                Vasavi Plast Industries manufactures high-grade uPVC water pipes, electrical conduits, and borewell column pipes in Guntakal, Andhra Pradesh. Built with virgin polymers for leak-free, long-lasting performance.
            </p>

            <div class="hero-actions">
                <a href="#products" class="btn btn-primary btn-lg hero-btn-primary">
                    <span>Explore Products</span>
                    <?= get_icon('arrow-right', 'btn-icon-right') ?>
                </a>
            </div>
        </div>
    </div>
</section>
