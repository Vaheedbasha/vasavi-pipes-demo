<?php
/**
 * Frontend Enquiry & RFQ Modal Dialog Component (Ultra-Compact, Non-Scrollable)
 * vasavi-pipes / components/enquiry-modal.php
 */
?>
<div class="modal-backdrop" id="enquiryModalBackdrop" aria-hidden="true"></div>

<div class="modal-dialog-wrap" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-container">
        <!-- Close Button -->
        <button type="button" class="modal-close-btn" id="modalCloseBtn" aria-label="Close enquiry dialog">
            <?= get_icon('x') ?>
        </button>

        <!-- Form View -->
        <div class="modal-content-panel" id="modalFormView">
            <div class="modal-header">
                <span class="modal-eyebrow">FACTORY DIRECT RFQ &amp; INQUIRY</span>
                <h3 class="modal-title" id="modalTitle">Request Product Quotation</h3>
            </div>

            <form class="modal-form" id="enquiryForm" novalidate>
                <div class="form-row form-row-2">
                    <div class="form-group">
                        <label for="enquiryName" class="form-label">Full Name / Firm <span class="required-star">*</span></label>
                        <input type="text" id="enquiryName" name="name" class="form-input" placeholder="e.g. Ramesh Traders" required autocomplete="name">
                        <span class="form-error-msg" id="nameError">Required</span>
                    </div>
                    <div class="form-group">
                        <label for="enquiryPhone" class="form-label">Phone / WhatsApp <span class="required-star">*</span></label>
                        <input type="tel" id="enquiryPhone" name="phone" class="form-input" placeholder="e.g. 99483 12666" required autocomplete="tel">
                        <span class="form-error-msg" id="phoneError">Valid 10-digit number required</span>
                    </div>
                </div>

                <div class="form-row form-row-2">
                    <div class="form-group">
                        <label for="enquiryProduct" class="form-label">Product / Category <span class="required-star">*</span></label>
                        <div class="select-wrapper">
                            <select id="enquiryProduct" name="product" class="form-select" required>
                                <option value="All Products / General Enquiry">All Products / General Enquiry</option>
                                <option value="uPVC Water Pipes">uPVC Water Pipes (IS 4985)</option>
                                <option value="Plumbing Pipes & Fittings">Plumbing Pipes &amp; Fittings</option>
                                <option value="Rigid PVC Electrical Conduits">Rigid PVC Electrical Conduits (IS 9537)</option>
                                <option value="Blue Threaded Column Pipes">Blue Threaded Column Pipes (ASTM-D-1785)</option>
                                <option value="Ivory Threaded Casing Pipes">Ivory Threaded Casing Pipes (ASTM-D-1785)</option>
                                <option value="Dealership & Wholesale Supply">Dealership &amp; Wholesale Supply</option>
                            </select>
                            <span class="select-arrow-icon" aria-hidden="true">
                                <?= get_icon('chevron-down') ?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="enquiryLocation" class="form-label">District / Location</label>
                        <input type="text" id="enquiryLocation" name="location" class="form-input" placeholder="e.g. Guntakal, Anantapur, Kurnool">
                    </div>
                </div>

                <div class="form-group form-group-requirement">
                    <label for="enquiryRequirement" class="form-label">Requirement Details / Consignment Size</label>
                    <input type="text" id="enquiryRequirement" name="requirement" class="form-input" placeholder="Specify sizes, pressure ratings, or quantity bundles...">
                </div>

                <div class="modal-form-actions modal-actions-grid">
                    <button type="submit" class="btn btn-primary modal-submit-btn" id="modalSubmitBtn">
                        <span>Submit Direct RFQ</span>
                        <?= get_icon('arrow-right', 'btn-icon-right') ?>
                    </button>
                    <button type="button" class="btn btn-whatsapp-direct" id="modalWhatsappBtn">
                        <i class="fa-icon fa-brands fa-whatsapp btn-icon-left" aria-hidden="true"></i>
                        <span>WhatsApp Quick Quote</span>
                    </button>
                </div>

                <div class="modal-footer-note">
                    <?= get_icon('shield-check', 'note-icon') ?>
                    <span>Direct factory quotation from Vasavi Pipes Guntakal Works desk.</span>
                </div>
            </form>
        </div>

        <!-- Success Confirmation View -->
        <div class="modal-content-panel modal-success-panel" id="modalSuccessView" style="display: none;">
            <div class="success-icon-badge">
                <?= get_icon('check-circle') ?>
            </div>
            <span class="modal-eyebrow text-success">ENQUIRY RECORDED SUCCESSFULLY</span>
            <h3 class="modal-title">Thank You, <span id="successCustomerName">Valued Client</span>!</h3>
            <p class="modal-subtitle">
                Your enquiry regarding <strong id="successProductName">Vasavi Piping Systems</strong> has been logged. Our sales desk will call you at <strong id="successCustomerPhone">+91</strong>.
            </p>
            <div class="success-details-card">
                <div class="success-row">
                    <span class="success-label">Reference ID:</span>
                    <strong class="success-value text-accent" id="successRefId">VAS-2026-8492</strong>
                </div>
                <div class="success-row">
                    <span class="success-label">Works Facility:</span>
                    <span class="success-value">Plot No. E-2, IDA, Gooty Road, Guntakal</span>
                </div>
            </div>
            <div class="modal-form-actions modal-actions-grid">
                <button type="button" class="btn btn-primary" id="modalSuccessCloseBtn">
                    <span>Done</span>
                </button>
                <button type="button" class="btn btn-ghost" id="modalResetBtn">
                    <span>Submit Another</span>
                </button>
            </div>
        </div>
    </div>
</div>
