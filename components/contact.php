<?php
/**
 * Contact Section Component (Verified Factory Details & Logistics Hub)
 * vasavi-pipes / components/contact.php
 */
?>
<section class="section section-contact bg-light" id="contact">
    <div class="container">
        <div class="section-header text-center reveal-on-scroll">
            <span class="section-label">CONTACT US</span>
            <h2 class="section-title">Get in Touch with Our Plant Office</h2>
            <p class="section-subtitle">
                Visit our factory in Guntakal or connect directly via phone or email for price lists and dealership inquiries.
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-info-col reveal-on-scroll">
                <div class="contact-info-card interactive-card">
                    <div class="company-badge-header">
                        <?= render_brand_logo(false) ?>
                        <div class="company-sub-badge">
                            <span class="status-dot"></span>
                            <span>Manufacturing Plant &amp; Head Office</span>
                        </div>
                    </div>

                    <div class="contact-channels">
                        <div class="contact-item interactive-contact-item">
                            <div class="contact-icon">
                                <?= get_icon('map-pin') ?>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Plant &amp; Registered Office Address</span>
                                <p class="contact-value">
                                    Plot No. E-2, Industrial Development Area, Gooty Road, Guntakal, Dist. Anantapur, Andhra Pradesh - 515801, India
                                </p>
                            </div>
                        </div>

                        <div class="contact-item interactive-contact-item">
                            <div class="contact-icon">
                                <?= get_icon('phone') ?>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Direct Contact Numbers</span>
                                <div class="contact-phones">
                                    <a href="tel:+919948312666" class="contact-link contact-phone-primary">
                                        <strong>Mobile / WhatsApp:</strong> +91 99483 12666
                                    </a>
                                    <span class="contact-phone-sub">
                                        <strong>Office:</strong> +91-08552-226846 &nbsp;|&nbsp; <strong>Factory:</strong> +91-08552-223623
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="contact-item interactive-contact-item">
                            <div class="contact-icon">
                                <?= get_icon('mail') ?>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Official Email</span>
                                <a href="mailto:vasavipipes@gmail.com" class="contact-link">
                                    vasavipipes@gmail.com
                                </a>
                                <span class="contact-subtext">Send RFQs, bulk orders, and dealership enquiries</span>
                            </div>
                        </div>

                        <div class="contact-item interactive-contact-item">
                            <div class="contact-icon">
                                <?= get_icon('clock') ?>
                            </div>
                            <div class="contact-details">
                                <span class="contact-label">Working Hours</span>
                                <span class="contact-value">Monday – Saturday: 9:00 AM – 6:30 PM IST</span>
                                <span class="contact-subtext">Dispatches operate on all working business days</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card-footer">
                        <a href="mailto:vasavipipes@gmail.com?subject=Wholesale%20Product%20Enquiry%20-%20Vasavi%20Plast" 
                           class="btn btn-primary btn-block">
                            <?= get_icon('mail', 'btn-icon-left') ?>
                            <span>Send Factory Email Enquiry</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-map-col reveal-on-scroll">
                <div class="map-card interactive-card">
                    <div class="map-header">
                        <div class="map-title-wrap">
                            <span class="map-tag">CENTRAL FREIGHT JUNCTION</span>
                            <h3 class="map-heading">Guntakal, Andhra Pradesh</h3>
                        </div>
                        <span class="map-pin-pill">
                            <?= get_icon('map-pin', 'pill-icon') ?>
                            PIN: 515801
                        </span>
                    </div>

                    <div class="map-visual-wrap google-map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.0028503442127!2d77.41551267416074!3d15.158188163184054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb6ef25a34045bf%3A0x2aa154d494e62974!2sVasavi%20Plast%20Industries!5e0!3m2!1sen!2sin!4v1795156278908!5m2!1sen!2sin" 
                                width="100%" 
                                height="320" 
                                style="border:0; border-radius: 14px; display: block;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="strict-origin-when-cross-origin"
                                title="Vasavi Plast Industries Plant Location">
                        </iframe>
                    </div>

                    <div class="map-footer-details">
                        <div class="route-info">
                            <strong>Direct Road &amp; Rail Consignment Dispatch:</strong>
                            <p>Located in the premier transit junction of South Central India, enabling same-day and next-day bulk pipe dispatches across Rayalaseema, Eastern Karnataka, and Telangana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
