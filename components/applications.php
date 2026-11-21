<?php
/**
 * Applications Section Component (Interactive Sector Grid)
 * vasavi-pipes / components/applications.php
 */
?>
<section class="section section-applications" id="applications">
    <div class="container">
        <div class="section-header text-center reveal-on-scroll">
            <span class="section-label">APPLICATION SECTORS</span>
            <h2 class="section-title">Engineered for Every Critical Sector</h2>
            <p class="section-subtitle">
                From deep agricultural borewells to high-rise building plumbing and concealed electrical safety systems.
            </p>
        </div>

        <div class="applications-grid">
            <?php foreach ($applications as $app): ?>
                <div class="application-card interactive-app-card reveal-on-scroll">
                    <div class="app-card-top">
                        <div class="app-icon-badge">
                            <?= get_icon($app['icon'], 'app-icon') ?>
                        </div>
                        <span class="app-tag"><?= htmlspecialchars($app['tag']) ?></span>
                    </div>

                    <h3 class="app-title"><?= htmlspecialchars($app['title']) ?></h3>
                    <p class="app-description"><?= htmlspecialchars($app['desc']) ?></p>

                    <div class="app-card-foot">
                        <span class="app-feature-badge">
                            <?= get_icon('check-circle', 'badge-check') ?>
                            <?= htmlspecialchars(isset($app['metric']) ? $app['metric'] : (isset($app['feature']) ? $app['feature'] : 'Standard Quality')) ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="applications-notice reveal-on-scroll">
            <div class="notice-card interactive-notice">
                <div class="notice-icon-box">
                    <?= get_icon('shield-check', 'notice-icon') ?>
                </div>
                <div class="notice-text-content">
                    <h4 class="notice-title">Contractor &amp; Project Supply Assistance</h4>
                    <p class="notice-text">
                        Planning an agricultural irrigation line, commercial plumbing layout, or electrical conduit installation? Contact our Guntakal plant desk for consignment schedules and technical guidance.
                    </p>
                </div>
                <a href="#contact" class="btn btn-primary btn-sm notice-action-btn">
                    <span>Contact Plant Desk</span>
                    <?= get_icon('arrow-right', 'btn-icon-right') ?>
                </a>
            </div>
        </div>
    </div>
</section>
