<main>
    <section class="oia-section">
        <div class="container">
            <h1 class="oia-heading">Press News</h1>
            <div class="row g-3">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-sm-6">
                        <button type="button" class="press-news-card press-news-trigger" data-bs-toggle="modal" data-bs-target="#pressNewsPhotoModal" data-photo-src="<?= base_url('assets/images/news/news-' . $i . '.jpg') ?>" data-photo-alt="Press news photograph <?= $i ?>">
                            <img src="<?= base_url('assets/images/news/news-' . $i . '.jpg') ?>" alt="Press news photograph <?= $i ?>" class="press-news-photo">
                        </button>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="pressNewsPhotoModal" tabindex="-1" aria-hidden="true" aria-label="Press news image">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content postdoctoral-photo-modal">
            <div class="modal-body p-0 text-center">
                <div class="postdoctoral-image-wrap">
                    <button type="button" class="postdoctoral-photo-close" data-bs-dismiss="modal" aria-label="Close image">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img id="pressNewsModalImage" class="postdoctoral-modal-image" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('pressNewsPhotoModal').addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        const image = document.getElementById('pressNewsModalImage');
        image.src = trigger.getAttribute('data-photo-src');
        image.alt = trigger.getAttribute('data-photo-alt');
    });
</script>
