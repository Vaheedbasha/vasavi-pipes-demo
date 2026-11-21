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
                <span class="eyebrow eyebrow-light">INCORPORATED 2006</span>
                <span class="meta-divider" aria-hidden="true">·</span>
                <span class="location-badge-light">
                    <?= get_icon('map-pin', 'location-icon') ?>
                    <?= htmlspecialchars($company_info['location_short']) ?>
                </span>
            </div>

            <h1 class="hero-title hero-title-overlay">
                Piping Solutions Engineered for Enduring Performance.
            </h1>

            <p class="hero-description hero-desc-overlay">
                Vasavi Pipes Private Limited manufactures precision uPVC water pipes, rigid electrical conduits, and threaded borewell pipes in Guntakal, Andhra Pradesh. Extruded with virgin polymer formulations for agricultural, plumbing, and industrial infrastructure.
            </p>

            <div class="hero-actions">
                <a href="#products" class="btn btn-primary btn-lg hero-btn-primary">
                    <span>Explore Products</span>
                    <?= get_icon('arrow-right', 'btn-icon-right') ?>
                </a>
                <a href="#about" class="btn btn-outline-light btn-lg">
                    <span>About Company</span>
                </a>
            </div>
        </div>
    </div>
</section>
