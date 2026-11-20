<?php
/**
 * Product Portfolio Component (Interactive Category Filtering & Spec Cards)
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

        <!-- Interactive Category Filter Tabs -->
        <div class="product-filter-wrap text-center reveal-on-scroll">
            <div class="product-filter-tabs" role="tablist" aria-label="Product Categories">
                <?php foreach ($product_filters as $i => $filter): ?>
                    <button type="button" 
                            class="filter-tab-btn <?= $i === 0 ? 'active' : '' ?>" 
                            data-filter="<?= htmlspecialchars($filter['id']) ?>"
                            role="tab"
                            aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                        <span><?= htmlspecialchars($filter['name']) ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="productsGrid">
            <?php foreach ($products as $idx => $prod): ?>
                <article class="product-card interactive-product-card reveal-on-scroll" 
                         data-category="<?= htmlspecialchars($prod['filter_group']) ?>"
                         id="product-<?= htmlspecialchars($prod['id']) ?>">
                    
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
                        <p class="product-description"><?= htmlspecialchars($prod['desc']) ?></p>

                        <?php if (!empty($prod['specs']) && is_array($prod['specs'])): ?>
                            <div class="product-specs-grid">
                                <?php foreach ($prod['specs'] as $specKey => $specVal): ?>
                                    <div class="spec-cell">
                                        <span class="spec-label"><?= htmlspecialchars($specKey) ?></span>
                                        <strong class="spec-val"><?= htmlspecialchars($specVal) ?></strong>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="product-card-footer">
                            <a href="#contact" 
                               class="btn btn-primary btn-sm btn-block btn-product-enquire"
                               aria-label="Enquire about <?= htmlspecialchars($prod['name']) ?>">
                                <span>Enquire for Pricing</span>
                                <?= get_icon('arrow-right', 'btn-icon-right') ?>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Dealership & Wholesale Banner -->
        <div class="products-cta-wrap reveal-on-scroll">
            <div class="products-cta-box interactive-banner">
                <div class="cta-box-text">
                    <span class="cta-eyebrow">WHOLESALE &amp; DEALERSHIP SUPPLY</span>
                    <h3 class="cta-box-title">Become an Authorized Vasavi Pipes Dealer</h3>
                    <p class="cta-box-desc">
                        Direct factory supply, prompt consignment dispatch from Guntakal junction, and competitive wholesale pricing for hardware merchants and contractors.
                    </p>
                </div>
                <div class="cta-box-actions">
                    <a href="#contact" class="btn btn-primary btn-lg cta-box-btn">
                        <span>Apply for Dealership</span>
                        <?= get_icon('arrow-right', 'btn-icon-right') ?>
                    </a>
                    <a href="<?= htmlspecialchars($company_info['phone_tel']) ?>" class="btn btn-outline-light btn-lg">
                        <?= get_icon('phone', 'btn-icon-left') ?>
                        <span>Call Factory Office</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
