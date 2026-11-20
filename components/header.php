<?php
/**
 * Header Component (Modern Floating Glass Header)
 * vasavi-pipes / components/header.php
 */
?>
<header class="site-header" id="siteHeader">
    <div class="header-container container">
        <a href="#hero" class="brand-link" aria-label="Vasavi Plast Industries - Home">
            <?= render_brand_logo(false) ?>
        </a>

        <div class="desktop-nav-wrapper">
            <?php include __DIR__ . '/navbar.php'; ?>
        </div>

        <div class="header-actions">
            <a href="#contact" class="btn btn-primary btn-sm header-cta">
                <span>Dealer Enquiries</span>
                <?= get_icon('arrow-right', 'btn-icon-right') ?>
            </a>
            <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-controls="mobileNavDrawer" aria-expanded="false" aria-label="Toggle navigation menu">
                <span class="icon-open"><?= get_icon('menu') ?></span>
                <span class="icon-close"><?= get_icon('x') ?></span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-drawer" id="mobileNavDrawer" aria-hidden="true">
        <div class="mobile-nav-inner container">
            <div class="mobile-nav-header">
                <div class="mobile-brand">
                    <?= render_brand_logo(false) ?>
                </div>
                <button type="button" class="drawer-close-btn" id="mobileDrawerClose" aria-label="Close navigation menu">
                    <?= get_icon('x') ?>
                </button>
            </div>
            <ul class="mobile-nav-list">
                <?php foreach ($nav_items as $item): ?>
                    <li class="mobile-nav-item">
                        <a href="<?= htmlspecialchars($item['url']) ?>" class="mobile-nav-link">
                            <span><?= htmlspecialchars($item['name']) ?></span>
                            <?= get_icon('arrow-right', 'mobile-arrow') ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="mobile-nav-footer">
                <a href="#contact" class="btn btn-primary btn-block">
                    <span>Dealer Enquiries</span>
                    <?= get_icon('arrow-right', 'btn-icon-right') ?>
                </a>
            </div>
        </div>
    </div>
    <div class="mobile-nav-backdrop" id="mobileNavBackdrop" aria-hidden="true"></div>
</header>
