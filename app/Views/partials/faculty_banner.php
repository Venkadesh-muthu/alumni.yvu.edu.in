<section aria-label="Faculty visits banner">
    <div id="facultyBannerCarousel" class="carousel slide carousel-fade faculty-banner" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-inner">
            <?php
            $slides = [
                ['file' => 'main-slider-1.jpeg'],
                ['file' => 'main-slider-2.jpeg'],
                ['file' => 'main-slider-3.jpeg', 'caption' => 'Overview of Drug Development and Career Guidance on 16th July 2026'],
                ['file' => 'main-slider-4.jpeg', 'caption' => 'SEMINAR on Towards Building International Collaborations 5th August 2026'],
                ['file' => 'main-slider-5.jpg', 'caption' => 'Prof. P. Vasu Govardhana Reddy met President of Germany, Frank-Walter Steinmeier AvH Alumni Meeting, Berlin, 26th June, 2025, Germany'],
                ['file' => 'main-slider-6.jpeg', 'caption' => 'Prof. L. S. Sarma Visited National Taiwan University of Science and Technology, Taiwan during 1st to 31st July 2024'],
                ['file' => 'main-slider-7.jpg', 'caption' => 'German Chemical Society (GDCh) Chemical Colloquium, held at Clausthal University of Technology, Germany, on 5 June 2025'],
                ['file' => 'main-slider-8.jpg', 'caption' => 'Prof. M. V. Shankar, Brain Pool Fellowship Program, a Government of South Korea, South Korea'],
                ['file' => 'main-slider-9.jpg', 'caption' => '9th Asian Symposium on Advanced Materials (ASAM-9) November 5~8, 2025 at the Haeundae Central Hotel, Busan, South Korea'],
            ];
            ?>
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item<?= $index === 0 ? ' active' : '' ?>">
                    <img src="<?= base_url('assets/images/main-slider/' . $slide['file']) ?>" class="d-block hero-carousel-img" alt="">
                    <?php if (isset($slide['caption'])): ?>
                        <div class="faculty-banner-caption">
                            <p><?= esc($slide['caption']) ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#facultyBannerCarousel" data-bs-slide="prev" aria-label="Previous banner">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#facultyBannerCarousel" data-bs-slide="next" aria-label="Next banner">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
