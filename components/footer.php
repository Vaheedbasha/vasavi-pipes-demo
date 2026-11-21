<?php
/**
 * Footer Component (Modern Industrial Dark Footer)
 * vasavi-pipes / components/footer.php
 */
?>
<footer class="site-footer theme-dark" id="siteFooter">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand-col">
                <a href="#hero" class="footer-brand-link" aria-label="Vasavi Pipes Private Limited - Back to top">
                    <?= render_brand_logo(true) ?>
                </a>
                <p class="footer-tagline">
                    Vasavi Pipes Private Limited manufactures precision uPVC, conduit, and threaded borewell pipes with virgin polymer compounding at Guntakal, Andhra Pradesh.
                </p>
                <div class="footer-badge-pill">
                    <span class="badge-dot"></span>
                    <span>CIN: U45200AP2006PTC049993 · Inception 2006 · Guntakal, AP</span>
                </div>
            </div>

            <div class="footer-nav-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <?php foreach ($nav_items as $item): ?>
                        <li>
                            <a href="<?= htmlspecialchars($item['url']) ?>" class="footer-link">
                                <?= htmlspecialchars($item['name']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-products-col">
                <h4 class="footer-heading">Product Lines</h4>
                <ul class="footer-links">
                    <?php foreach ($products as $prod): ?>
                        <li>
                            <a href="#product-<?= htmlspecialchars($prod['id']) ?>" class="footer-link">
                                <?= htmlspecialchars($prod['name']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-contact-col">
                <h4 class="footer-heading">Plant &amp; Office</h4>
                <div class="footer-contact-items">
                    <div class="footer-contact-item">
                        <?= get_icon('factory', 'footer-item-icon') ?>
                        <span>Plot No. E-2, IDA, Gooty Road, Guntakal, AP - 515801</span>
                    </div>
                    <div class="footer-contact-item">
                        <?= get_icon('phone', 'footer-item-icon') ?>
                        <a href="tel:+919948312666" class="footer-contact-link">
                            +91 99483 12666 (WhatsApp)
                        </a>
                    </div>
                    <div class="footer-contact-item">
                        <?= get_icon('phone', 'footer-item-icon') ?>
                        <span class="footer-contact-text">
                            Office: 08552-226846 · Plant: 08552-223623
                        </span>
                    </div>
                    <div class="footer-contact-item">
                        <?= get_icon('mail', 'footer-item-icon') ?>
                        <a href="mailto:vasavipipes@gmail.com" class="footer-contact-link">
                            vasavipipes@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-flex">
                <p class="copyright-text">
                    &copy; <?= date('Y') ?> <?= htmlspecialchars(SITE_NAME) ?>. All rights reserved.
                </p>
                <div class="footer-bottom-standards">
                    <span>IS 4985</span> &bull; <span>IS 9537 Part-3</span> &bull; <span>ASTM-D-1785</span>
                </div>
                <a href="#hero" class="back-to-top" id="backToTop" aria-label="Back to top of page">
                    <span>Back to Top</span>
                    <?= get_icon('arrow-up', 'btt-icon') ?>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons (Fixed Bottom-Right Stack) -->
<aside class="floating-actions-stack" aria-label="Quick Navigation and Contact Actions">
    <!-- Floating Back to Top Button (Triggered when scrolled past hero) -->
    <button type="button" 
            class="floating-btt-btn" 
            id="floatingBackToTopBtn" 
            aria-label="Scroll back to top of page" 
            title="Back to top">
        <?= get_icon('arrow-up', 'btt-floating-icon') ?>
    </button>

    <!-- Floating WhatsApp Action Button -->
    <a href="https://wa.me/919948312666?text=<?= urlencode('Hi Vasavi Pipes, I would like to get a product price quotation and dealership details.') ?>" 
       target="_blank" 
       rel="noopener noreferrer" 
       class="floating-whatsapp-btn" 
       id="floatingWhatsappBtn"
       title="Chat with Vasavi Pipes on WhatsApp">
        <?= render_whatsapp_icon('whatsapp-float-icon') ?>
        <span class="whatsapp-float-tooltip">Chat on WhatsApp</span>
    </a>
</aside>
