<?php
/**
 * Product Portfolio Component (Segmented Desktop Pills & Native Mobile Select Dropdown)
 * vasavi-pipes / components/products.php
 */
?>
<section class="section section-products" id="products">
    <div class="container">
        <div class="section-header text-center reveal-on-scroll">
            <span class="section-label">OUR PRODUCT RANGE</span>
            <h2 class="section-title">Engineered for High Pressure &amp; Long Life</h2>
            <p class="section-subtitle">
                Manufactured with 100% virgin polymer compounding for agricultural, plumbing, and electrical installations.
            </p>
        </div>

        <!-- Product Category Filters (Dual Viewport Architecture) -->
        <div class="product-filter-wrap text-center reveal-on-scroll">
            
            <!-- Desktop Segmented Tabs (Visible on >= 640px) -->
            <div class="product-filter-tabs desktop-filter-tabs" role="tablist" aria-label="Product Categories">
                <?php foreach ($product_filters as $i => $filter): ?>
                    <button type="button" 
                            class="filter-tab-btn <?= $i === 0 ? 'active' : '' ?>" 
                            data-filter="<?= htmlspecialchars($filter['id']) ?>"
                            role="tab"
                            id="tab-<?= htmlspecialchars($filter['id']) ?>"
                            aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                        <span><?= htmlspecialchars($filter['name']) ?></span>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Native Select Dropdown (Visible on < 640px) -->
            <div class="mobile-filter-container">
                <label for="mobileProductFilter" class="mobile-filter-label">Product Category</label>
                <div class="mobile-select-custom-wrapper">
                    <select id="mobileProductFilter" class="mobile-product-select" aria-label="Product Category">
                        <?php foreach ($product_filters as $filter): ?>
                            <option value="<?= htmlspecialchars($filter['id']) ?>">
                                <?= htmlspecialchars($filter['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <span class="mobile-select-arrow" aria-hidden="true">
                        <?= get_icon('chevron-down') ?>
                    </span>
                </div>
            </div>

        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
            <?php foreach ($products as $idx => $prod): ?>
                <article class="product-card interactive-product-card reveal-on-scroll" 
                         data-category="<?= htmlspecialchars($prod['filter_group']) ?>"
                         id="product-<?= htmlspecialchars($prod['id']) ?>">
                    
                    <div class="product-top-accent"></div>

                    <div class="product-visual">
                        <?= render_media($prod['image'], $prod['name'], 'aspect-4-3', $prod['placeholder_label'], 'product-media') ?>
                        <div class="product-badge-group">
                            <span class="product-badge"><?= htmlspecialchars($prod['badge']) ?></span>
                        </div>
                    </div>

                    <div class="product-card-body">
                        <div class="product-meta-header">
                            <span class="product-meta-category"><?= htmlspecialchars($prod['category']) ?></span>
                            <span class="product-meta-id">0<?= $idx + 1 ?></span>
                        </div>
                        
                        <h3 class="product-name"><?= htmlspecialchars($prod['name']) ?></h3>
                        <p class="product-summary"><?= htmlspecialchars($prod['summary']) ?></p>

                        <?php if (!empty($prod['applications']) && is_array($prod['applications'])): ?>
                            <div class="product-applications-group">
                                <span class="app-group-label">Verified Applications:</span>
                                <div class="app-chip-list">
                                    <?php foreach ($prod['applications'] as $app): ?>
                                        <span class="app-chip">
                                            <?= get_icon('check', 'app-chip-icon') ?>
                                            <span><?= htmlspecialchars($app) ?></span>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="product-card-footer">
                            <button type="button" 
                                    class="btn btn-primary btn-block btn-product-enquire"
                                    data-open-modal="enquiryModal"
                                    data-product="<?= htmlspecialchars($prod['name']) ?>"
                                    aria-label="Enquire about <?= htmlspecialchars($prod['name']) ?>">
                                <span>Enquire About This Product</span>
                                <?= get_icon('arrow-right', 'btn-icon-right') ?>
                            </button>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Dealership & Wholesale Supply Banner -->
        <div class="products-cta-wrap reveal-on-scroll">
            <div class="products-cta-box interactive-banner">
                <div class="cta-box-text">
                    <span class="cta-eyebrow">WHOLESALE &amp; DEALERSHIP SUPPLY</span>
                    <h3 class="cta-box-title">Become an Authorized Vasavi Pipes Dealer</h3>
                    <p class="cta-box-desc">
                        Direct factory supply, prompt consignment dispatch from Guntakal junction, and competitive wholesale pricing for regional hardware merchants and contractors.
                    </p>
                </div>
                <div class="cta-box-actions">
                    <button type="button" class="btn btn-primary btn-lg cta-box-btn" data-open-modal="enquiryModal" data-product="Dealership & Wholesale Supply">
                        <span>Apply for Dealership</span>
                        <?= get_icon('arrow-right', 'btn-icon-right') ?>
                    </button>
                    <a href="<?= htmlspecialchars($company_info['phone_tel']) ?>" class="btn btn-outline-light btn-lg">
                        <?= get_icon('phone', 'btn-icon-left') ?>
                        <span>Call Factory Office</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
