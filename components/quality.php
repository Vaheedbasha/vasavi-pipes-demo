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
                        Piping failure underground or inside concrete walls causes expensive damage. That is why Vasavi Plast applies rigorous quality testing at every extrusion stage.
                    </p>
                    <p class="secondary-text">
                        From raw material compounding to final CNC socket threading, our quality checks ensure your water lines, electrical wires, and submersible pumps stay protected for decades.
                    </p>
                </div>

                <div class="quality-checklist">
                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('shield-check') ?></span>
                        <div class="check-info">
                            <strong>Hydrostatic Pressure Burst Test</strong>
                            <span>Tested beyond rated working pressures (2.5, 4 &amp; 6 Kgf/cm²) to guarantee leak-free water transfer.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('check-circle') ?></span>
                        <div class="check-info">
                            <strong>Drop-Weight Impact Resistance</strong>
                            <span>Pipes resist heavy accidental impacts during handling, transport, and trench backfilling without cracking.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('gauge') ?></span>
                        <div class="check-info">
                            <strong>CNC Thread Gauge Calibration</strong>
                            <span>Square threads and rubber O-ring grooves are gauge-verified to hold heavy borewell pump strings safely.</span>
                        </div>
                    </div>

                    <div class="check-item interactive-check-item">
                        <span class="check-icon"><?= get_icon('layers') ?></span>
                        <div class="check-info">
                            <strong>Mirror-Smooth Bore (Low Hazen-Williams 'C' Factor)</strong>
                            <span>Friction-free inner wall prevents mineral scaling and reduces electric pumping costs by up to 20%.</span>
                        </div>
                    </div>
                </div>

                <div class="quality-standards-strip">
                    <div class="standards-label">Manufactured in Accordance with:</div>
                    <div class="standards-pills">
                        <span class="std-pill">IS 4985:2000 (uPVC Pipes)</span>
                        <span class="std-pill">IS 9537 Part-3 (Conduits)</span>
                        <span class="std-pill">ASTM-D-1785 (Threaded Pipes)</span>
                    </div>
                </div>
            </div>

            <div class="quality-visual reveal-on-scroll">
                <div class="quality-card interactive-card">
                    <?= render_media('assets/images/factory/extrusion-line.jpg', 'Quality Inspection and Extrusion Line at Guntakal Plant', 'aspect-4-3', 'QUALITY TESTING PLACEHOLDER', 'quality-media') ?>
                    <div class="quality-visual-caption">
                        <span class="caption-tag">100% Quality Inspection</span>
                        <span class="caption-text">Virgin polymer composition &amp; pressure test verification</span>
                    </div>
                </div>

                <div class="quality-quick-metric interactive-hover-box">
                    <div class="metric-icon"><?= get_icon('shield-check') ?></div>
                    <div class="metric-details">
                        <strong class="metric-num">50+ Years</strong>
                        <span class="metric-label">Estimated underground life under standard working pressures</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
