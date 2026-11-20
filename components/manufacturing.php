<?php
/**
 * Manufacturing Section Component (Modern 4-Step Extrusion Flow)
 * vasavi-pipes / components/manufacturing.php
 */
?>
<section class="section section-manufacturing theme-dark" id="manufacturing">
    <div class="container">
        <div class="section-header text-center reveal-on-scroll">
            <span class="section-label section-label-light">ADVANCED MANUFACTURING</span>
            <h2 class="section-title text-white">Precision Extrusion at Our Guntakal Plant</h2>
            <p class="section-subtitle text-muted-light">
                Continuous twin-screw extrusion technology ensuring consistent wall thickness, seamless surfaces, and high burst strength.
            </p>
        </div>

        <div class="manufacturing-grid">
            <?php foreach ($manufacturing_cards as $mfg): ?>
                <div class="manufacturing-card interactive-mfg-card reveal-on-scroll">
                    <div class="mfg-visual">
                        <?= render_media($mfg['image'], $mfg['title'], 'aspect-16-10', $mfg['label'], 'mfg-media') ?>
                        <span class="mfg-step-badge">STEP <?= htmlspecialchars($mfg['step']) ?></span>
                    </div>
                    <div class="mfg-card-body">
                        <span class="mfg-category-label"><?= htmlspecialchars($mfg['label']) ?></span>
                        <h3 class="mfg-card-title"><?= htmlspecialchars($mfg['title']) ?></h3>
                        <p class="mfg-card-desc"><?= htmlspecialchars($mfg['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mfg-banner-strip reveal-on-scroll">
            <div class="mfg-strip-content">
                <div class="mfg-strip-icon"><?= get_icon('check-circle') ?></div>
                <div class="mfg-strip-text">
                    <strong>Strict Batch Quality Control:</strong> Every extrusion run is monitored for dimensional consistency and internal hydrostatic burst pressure before packing.
                </div>
            </div>
            <a href="#contact" class="btn btn-outline-light btn-sm">
                <span>Schedule Plant Visit</span>
                <?= get_icon('arrow-right', 'btn-icon-right') ?>
            </a>
        </div>
    </div>
</section>
