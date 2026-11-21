<?php
/**
 * Enquiry CTA Component (Interactive High-Conversion Rounded Banner)
 * vasavi-pipes / components/enquiry-cta.php
 */
?>
<section class="section section-enquiry-cta" id="enquiry">
    <div class="container">
        <div class="enquiry-card interactive-cta-card reveal-on-scroll">
            <div class="enquiry-card-glow" aria-hidden="true"></div>
            <div class="enquiry-card-content">
                <span class="enquiry-eyebrow">DIRECT FACTORY SUPPLY &amp; DEALERSHIP</span>
                <h2 class="enquiry-title">Ready for Reliable PVC Pipes at Factory Direct Terms?</h2>
                <p class="enquiry-description">
                    Connect directly with Vasavi Pipes Private Limited for product specifications, wholesale price lists, dealership terms, and prompt consignment dispatches from Guntakal.
                </p>
                <div class="enquiry-actions">
                    <button type="button" class="btn btn-primary btn-lg cta-main-btn" data-open-modal="enquiryModal" data-product="Dealership & Wholesale Supply">
                        <span>Request Wholesale Price List</span>
                        <?= get_icon('arrow-right', 'btn-icon-right') ?>
                    </button>
                    <a href="<?= htmlspecialchars($company_info['phone_tel']) ?>" class="btn btn-secondary-dark btn-lg cta-phone-btn">
                        <?= get_icon('phone', 'btn-icon-left') ?>
                        <span>Call: <?= htmlspecialchars($company_info['phone_display']) ?></span>
                    </a>
                </div>
                <div class="enquiry-footer-note">
                    <span><?= get_icon('map-pin', 'note-icon') ?> Plant: Plot No. E-2, IDA, Gooty Road, Guntakal · Serving AP, Karnataka &amp; Telangana</span>
                </div>
            </div>
        </div>
    </div>
</section>
