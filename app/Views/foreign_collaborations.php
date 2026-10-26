<main>
    <section class="oia-section">
        <div class="container">
            <div class="oia-section-heading mb-4">
                <p class="oia-person-role mb-2">Yogi Vemana University, Kadapa</p>
                <h1 class="oia-heading">Foreign Collaborations</h1>
                <p class="oia-lead mb-0">Yogi Vemana University collaborates with more than 50 international institutions.</p>
            </div>

            <?php
            $internationalPartnerLogos = [
                'partner-11.gif', 'partner-13.png', 'partner-19.png', 'partner-05.gif',
                'partner-03.png', 'partner-01.png', 'partner-09.png', 'partner-04.png',
                'partner-08.png', 'partner-06.png', 'partner-16.png', 'partner-02.png',
                'partner-17.png', 'partner-10.jpeg', 'partner-07.jpeg', 'partner-12.png',
                'partner-15.png', 'partner-14.png',
            ];
            ?>
            <div class="row g-4" aria-label="International partner universities">
                <?php foreach ($internationalPartnerLogos as $index => $logo): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <article class="international-partner-card h-100">
                            <img src="<?= base_url('assets/images/foreign-collaborations/universities/' . $logo) ?>"
                                 alt="International partner university logo <?= $index + 1 ?>" loading="lazy">
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
