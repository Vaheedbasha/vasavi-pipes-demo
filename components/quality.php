<?php
/**
 * Quality Assurance Component (Material Verification & Standards Showcase)
 * vasavi-pipes / components/quality.php
 */
?>
<section class="section section-quality bg-light" id="quality">
    <div class="container">
        <div class="quality-grid">
            <div class="quality-content reveal-on-scroll">
                <div class="section-header">
                    <span class="section-label">QUALITY ASSURANCE</span>
                    <h2 class="section-title">Tested to Withstand High Pressure &amp; Harsh Soil</h2>
                </div>

                <div class="quality-body">
                    <p class="lead-text">
                        Piping failure underground or inside concrete structures causes extensive damage. That is why Vasavi Pipes applies continuous dimensional and pressure verification at every extrusion stage.
                    </p>
                    <p class="secondary-text">
                        From virgin polymer compounding through automated cooling to CNC socket threading, our inspection procedures ensure that water networks, electrical cabling, and submersible pump strings perform reliably in the field.
                    </p>
                </div>

                <div class="quality-checklist">
                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('shield-check') ?></span>
                        <div class="check-info">
                            <strong>Hydrostatic Pressure Testing</strong>
                            <span>Batches are hydrostatically pressure tested to verify burst strength and joint water-tightness before dispatch.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('check-circle') ?></span>
                        <div class="check-info">
                            <strong>Drop-Weight Impact Resistance</strong>
                            <span>Formulations withstand transit vibration and trench backfilling impact without hairline fractures.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('gauge') ?></span>
                        <div class="check-info">
                            <strong>CNC Thread Gauge Calibration</strong>
                            <span>Square threads and sealing ring seats on column pipes are gauge-calibrated for secure pump suspension.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('layers') ?></span>
                        <div class="check-info">
                            <strong>Smooth Bore Hydraulic Efficiency</strong>
                            <span>Low friction coefficient reduces pumping head loss and resists mineral encrustation over time.</span>
                        </div>
                    </div>
                </div>

                <div class="quality-standards-strip">
                    <div class="standards-label">Manufactured in Accordance with:</div>
                    <div class="standards-pills">
                        <span class="std-pill">IS 4985 (uPVC Water Pipes)</span>
                        <span class="std-pill">IS 9537 Part-3 (Electrical Conduits)</span>
                        <span class="std-pill">ASTM-D-1785 (Threaded Pipes)</span>
                    </div>
                </div>
            </div>

            <div class="quality-visual reveal-on-scroll">
                <div class="quality-card interactive-card">
                    <?= render_media('assets/images/factory/quality-lab.jpg', 'Quality Inspection and Hydrostatic Testing at Guntakal Plant', 'aspect-4-3', 'QUALITY TESTING LABORATORY', 'quality-media') ?>
                </div>

                <div class="quality-quick-metric interactive-hover-box">
                    <div class="metric-icon"><?= get_icon('shield-check') ?></div>
                    <div class="metric-details">
                        <strong class="metric-num">100% Virgin Polymer</strong>
                        <span class="metric-label">Zero recycled fillers, ensuring consistent wall strength and long-term durability</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
