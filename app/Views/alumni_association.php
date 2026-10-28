<style>
    #alumni-association .oia-section-heading {
    display: block;
    width: 100%;
    text-align: center !important;
}

#alumni-association .oia-heading,
#alumni-association .oia-person-role {
    text-align: center !important;
}
</style>
<section class="oia-section oia-section-soft" id="alumni-association">
    <div class="container">

        <!-- ===== SECTION HEADING ===== -->
        <div class="oia-section-heading text-center w-100 mx-auto mb-5">
            <p class="oia-person-role text-center">
                Yogi Vemana University
            </p>

            <h1 class="oia-heading text-center w-100">
                Alumni Association
            </h1>

            <p class="text-muted text-center mb-0">
                Registration No. 192 of 2020
            </p>
        </div>

        <!-- ===== OFFICE BEARERS ===== -->
        <div class="row g-4 mb-5">

            <!-- PRESIDENT -->
            <div class="col-sm-6 col-lg-4">
                <article class="oia-person-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>

                    <p class="oia-person-role">President</p>
                    <h2>Dr. T. Suresh Babu</h2>
                </article>
            </div>

            <!-- GENERAL SECRETARY -->
            <div class="col-sm-6 col-lg-4">
                <article class="oia-person-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>

                    <p class="oia-person-role">General Secretary</p>
                    <h2>P. Chitti Babu</h2>

                    <div class="mt-3">
                        <p class="mb-2">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>
                            <a href="tel:8008006630" class="text-decoration-none">
                                8008006630
                            </a>
                        </p>

                        <p class="mb-0">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>
                            <a href="tel:9030955439" class="text-decoration-none">
                                9030955439
                            </a>
                        </p>
                    </div>
                </article>
            </div>

            <!-- VICE PRESIDENT -->
            <div class="col-sm-6 col-lg-4">
                <article class="oia-person-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>

                    <p class="oia-person-role">Vice President</p>
                    <h2>N. Manasa</h2>
                </article>
            </div>

            <!-- JOINT SECRETARY -->
            <div class="col-sm-6 col-lg-4">
                <article class="oia-person-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>

                    <p class="oia-person-role">Joint Secretary</p>
                    <h2>Dr. P. Suresh Yadav</h2>
                </article>
            </div>

            <!-- TREASURER -->
            <div class="col-sm-6 col-lg-4">
                <article class="oia-person-card h-100 text-center p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>

                    <p class="oia-person-role">Treasurer</p>
                    <h2>M. Sasi Kumar Naiak</h2>
                </article>
            </div>

        </div>

        <!-- ===== ADVISORS ===== -->
        <div class="mb-5">

            <div class="oia-section-heading text-center w-100 mx-auto mb-4">
                <h2 class="oia-heading text-center w-100">
                    Advisors
                </h2>
            </div>

            <div class="row g-4">

                <?php
                $advisors = [
                    'Dr. S. Govardhana Naidu',
                    'Dr. Y. Subbarayudu',
                    'Dr. G. Vijaya Bharathi',
                    'Dr. N. Chinna Gangi Reddy',
                    'B. P. Santhosh Kumar',
                ];
                ?>

                <?php foreach ($advisors as $advisor): ?>
                    <div class="col-sm-6 col-lg-4">
                        <article class="oia-person-card h-100 text-center p-4">
                            <div class="mb-3">
                                <i class="bi bi-person-circle fs-1 text-primary"></i>
                            </div>

                            <p class="oia-person-role">Advisor</p>
                            <h2><?= esc($advisor) ?></h2>
                        </article>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <!-- ===== EXECUTIVE MEMBERS ===== -->
        <div>

            <div class="oia-section-heading text-center w-100 mx-auto mb-4">
                <h2 class="oia-heading text-center w-100">
                    Executive Members
                </h2>
            </div>

            <?php
            $executiveMembers = [
                'G. Ramasudha',
                'Dr. M. Pramod Kumar',
                'M. Nagarjuna Reddy',
                'Dr. B. Muralidhara Reddy',
                'Dr. B. Raghavendhra',
                'Dr. D. Prasad Reddy',
                'T. Manohar',
                'Dr. N. Rajesh',
                'Dr. N. Siva Gangi Reddy',
                'G. Siva Sankar',
                'Dr. G. Krishna Kumar',
            ];
            ?>

            <div class="bg-white rounded-4 shadow-sm p-3 p-md-4">
                <div class="row g-3">

                    <?php foreach ($executiveMembers as $index => $member): ?>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center border rounded-3 p-3 h-100">

                                <span class="badge bg-primary rounded-circle me-3">
                                    <?= $index + 1 ?>
                                </span>

                                <span class="fw-semibold">
                                    <?= esc($member) ?>
                                </span>

                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>

    </div>
</section>
