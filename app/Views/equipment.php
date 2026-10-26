<main>
    <section class="oia-section">
        <div class="container">
            <div class="oia-section-heading mb-5">
                <p class="oia-person-role mb-2">Research Laboratories @ YVU</p>
                <h1 class="oia-heading">Research Equipment at YVU</h1>
                <p class="oia-lead mb-0">Yogi Vemana University’s research facilities include major analytical instruments and research equipment. The list below is drawn from the equipment overview provided by the University.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <section class="equipment-card h-100" aria-labelledby="central-facility-heading">
                        <p class="equipment-eyebrow">Shared research infrastructure</p>
                        <h2 id="central-facility-heading" class="equipment-heading">Major Equipment at the University Central Facility</h2>
                        <p class="equipment-note">Selected equipment shown in the University overview</p>
                        <ul class="equipment-list">
                            <li>X-Ray Diffraction <span class="equipment-tag">DST-FIST sponsored</span></li>
                            <li>Compact Potentiostat + EIS <span class="equipment-tag">RUSA</span></li>
                            <li>Fourier Transform Infrared Spectroscopy <span class="equipment-tag">RUSA</span></li>
                            <li>Scanning Electron Microscopy <span class="equipment-tag">RUSA</span></li>
                        </ul>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="equipment-card h-100" aria-labelledby="rusa-heading">
                        <p class="equipment-eyebrow">Instrumentation facility</p>
                        <h2 id="rusa-heading" class="equipment-heading">RUSA Instrumentation Facility</h2>
                        <ul class="equipment-list">
                            <li>Gas Chromatograph (with TCD)</li>
                            <li>UV-Visible DR Spectrometer</li>
                            <li>Chemical Vapour Deposition</li>
                            <li>Solar Simulator</li>
                            <li>Pilot-Scale Photoreactor</li>
                        </ul>
                    </section>
                </div>
            </div>

            <p class="equipment-footnote mt-4 mb-0">The University overview describes these as selected examples; it does not provide instrument specifications.</p>

            <?php
            $equipmentPhotos = [
                ['file' => 'image1.jpeg', 'caption' => 'Flow Cytometer'],
                ['file' => 'image2.jpeg', 'caption' => 'Laboratory equipment'],
                ['file' => 'image3.jpeg', 'caption' => 'Electrochemical Analyzer'],
                ['file' => 'image4.jpeg', 'caption' => 'Laboratory equipment'],
                ['file' => 'image5.jpeg', 'caption' => 'Laboratory equipment'],
                ['file' => 'image6.jpeg', 'caption' => 'Laboratory equipment'],
                ['file' => 'image7.jpeg', 'caption' => 'Compact Potentiostat + EIS'],
                ['file' => 'image8.png', 'caption' => 'X-Ray Diffraction'],
                ['file' => 'image9.jpeg', 'caption' => 'Scanning Electron Microscopy'],
                ['file' => 'image10.jpeg', 'caption' => 'Fourier Transform Infrared Spectroscopy'],
                ['file' => 'image11.jpeg', 'caption' => 'RUSA Instrumentation Facility'],
                ['file' => 'image13.jpeg', 'caption' => 'UV-Visible DR Spectrometer'],
                ['file' => 'image14.jpeg', 'caption' => 'Chemical Vapour Deposition'],
                ['file' => 'image15.jpeg', 'caption' => 'Gas Chromatograph'],
                ['file' => 'image16.jpeg', 'caption' => 'Pilot-Scale Photoreactor'],
                ['file' => 'image17.png', 'caption' => 'Research laboratory'],
                ['file' => 'image18.png', 'caption' => 'Research laboratory'],
                ['file' => 'image19.png', 'caption' => 'Solar Simulator'],
            ];
            ?>
            <section class="equipment-gallery-section mt-5" aria-labelledby="equipment-gallery-heading">
                <div class="oia-section-heading mb-4">
                    <h2 id="equipment-gallery-heading" class="equipment-heading">Equipment and Facility Photos</h2>
                    <p class="equipment-note mb-0">Photographs from the supplied University presentation.</p>
                </div>
                <div class="row g-3">
                    <?php foreach ($equipmentPhotos as $photo): ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <figure class="equipment-photo-card h-100 mb-0">
                                <img src="<?= base_url('assets/images/equipment/' . $photo['file']) ?>"
                                     alt="<?= esc($photo['caption']) ?>"
                                     loading="lazy">
                                <figcaption><?= esc($photo['caption']) ?></figcaption>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </section>
</main>
