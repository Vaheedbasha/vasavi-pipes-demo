<?php
/**
 * About Section Component (Simple English, High-Value Manufacturer Facts)
 * vasavi-pipes / components/about.php
 */
?>
<section class="section section-about bg-light" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual reveal-on-scroll">
                <div class="about-visual-card interactive-card">
                    <?= render_media('assets/images/factory/about-plant.jpg', 'Vasavi Plast Extrusion Facility in Guntakal', 'aspect-4-3', 'ABOUT IMAGE PLACEHOLDER', 'about-media') ?>
                    <div class="about-card-badge-floating">
                        <span class="badge-icon"><?= get_icon('shield-check') ?></span>
                        <div class="badge-text">
                            <strong>BIS &amp; ASTM Standards</strong>
                            <span>IS 4985 · IS 9537 · ASTM D-1785</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-content reveal-on-scroll">
                <div class="section-header">
                    <span class="section-label">ABOUT VASAVI PLAST · ESTABLISHED 2006</span>
                    <h2 class="section-title">18+ Years of Industrial Extrusion Excellence</h2>
                </div>

                <div class="about-body">
                    <p class="lead-text">
                        Established in 2006 by the Sathrasala family, Vasavi Plast Industries (Vasavi Pipes) is an established industrial manufacturer in Guntakal, Andhra Pradesh. We produce high-strength uPVC water pipes, rigid electrical conduits, and heavy-duty borewell column pipes.
                    </p>
                    <p class="secondary-text">
                        With over 18 years of proven field reliability, every pipe is extruded using 100% virgin polymer to deliver high burst resistance, zero scaling, and decades of leak-proof performance for agriculture, commercial construction, and plumbing infrastructure.
                    </p>
                </div>

                <div class="about-highlights-grid">
                    <div class="highlight-item interactive-hover-box">
                        <div class="highlight-icon">
                            <?= get_icon('layers') ?>
                        </div>
                        <div class="highlight-info">
                            <h4 class="highlight-title">100% Virgin Polymer</h4>
                            <p class="highlight-desc">Zero regrind fillers. Ensures high tensile strength and impact resistance.</p>
                        </div>
                    </div>

                    <div class="highlight-item interactive-hover-box">
                        <div class="highlight-icon">
                            <?= get_icon('shield-check') ?>
                        </div>
                        <div class="highlight-info">
                            <h4 class="highlight-title">Hydrostatic Tested</h4>
                            <p class="highlight-desc">Each batch tested up to 6 Kgf/cm² working pressures for leak-proof durability.</p>
                        </div>
                    </div>

                    <div class="highlight-item interactive-hover-box">
                        <div class="highlight-icon">
                            <?= get_icon('gears') ?>
                        </div>
                        <div class="highlight-info">
                            <h4 class="highlight-title">Precision CNC Threads</h4>
                            <p class="highlight-desc">Square-threaded jointing holds deep borewell submersible pump loads safely.</p>
                        </div>
                    </div>

                    <div class="highlight-item interactive-hover-box">
                        <div class="highlight-icon">
                            <?= get_icon('map-pin') ?>
                        </div>
                        <div class="highlight-info">
                            <h4 class="highlight-title">Guntakal Transit Hub</h4>
                            <p class="highlight-desc">Central rail and road connectivity for fast dispatches across AP, KA &amp; TS.</p>
                        </div>
                    </div>
                </div>

                <div class="about-actions">
                    <a href="#products" class="btn btn-primary btn-lg">
                        <span>Explore Product Range</span>
                        <?= get_icon('arrow-right', 'btn-icon-right') ?>
                    </a>
                    <a href="#contact" class="btn btn-ghost btn-lg">
                        <span>Contact Plant Office</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
