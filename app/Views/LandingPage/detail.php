<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <div class="container">
        <section>
            <div class="image-detail">
                <img src="<?= base_url('assets/img/j-banner.png') ?>" alt="">
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="post-date">
                                <div class="day">
                                    <span>Tuesday</span>
                                </div>
                                <div class="date">
                                    <span>7</span>
                                </div>
                                <div class="month">
                                    <span>June</span>
                                </div>

                                <div class="share">
                                    <span>Share On</span>
                                </div>
                                <div class="share-social-media">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="share-social-media">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="share-social-media">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <h4 class="judul-detail">Mengapa Membaca Alquran Haru dengan Tajwid dan Tartil?</h4>
                    <p class="detail-info-jurnal">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo vestibulum dui, et scelerisque massa sollicitudin in. Fusce sit amet erat eleifend, maximus tortor non, rutrum erat. Pellentesque eget fringilla enim. Curabitur ultricies nisi dignissim velit rhoncus, sit amet vestibulum urna gravida. Proin vestibulum nisi ante, ut rhoncus dolor dictum feugiat. Ut sed felis quam. Praesent malesuada neque ut sem convallis ullamcorper. Nunc ultrices diam ante, sed suscipit velit condimentum fringilla.
                        <br><br>
                        Phasellus blandit sit amet augue quis hendrerit. Quisque in laoreet augue, non congue est. Aenean velit augue, pretium non metus eu, luctus accumsan ipsum. Maecenas mollis, libero in consectetur rutrum, mauris massa blandit ligula, et ultricies velit metus eget enim. In luctus pretium justo eget sollicitudin. Sed efficitur tortor sed ante feugiat, non scelerisque sem maximus. Praesent blandit fringilla lobortis. Phasellus gravida at mi gravida tempor. Fusce aliquam sollicitudin vulputate. Sed pretium, nisi eget interdum viverra, tellus tellus tempus augue, ut tincidunt ex magna a sem. Quisque ultricies lacus eget lectus tempus hendrerit.
                        <br><br>
                        Aenean rutrum, massa id aliquet tempus, nisl dolor tincidunt mi, quis volutpat velit turpis lobortis nunc. Ut ante neque, porta nec turpis bibendum, mattis aliquet felis. Nullam et ante eget nisl ornare pellentesque. Phasellus egestas vitae ante in porttitor. Pellentesque in massa in purus viverra malesuada eu ac diam. Vestibulum eget risus lacus. Donec varius commodo aliquet. Morbi mattis odio pellentesque augue rutrum, quis auctor elit euismod. Vivamus eu imperdiet mi. Integer magna dolor, accumsan non augue at, facilisis sollicitudin lacus. Integer vulputate elit ac pretium maximus.
                        <br><br>
                        Aliquam sagittis mattis est ut vehicula. Aliquam in elit nulla. Fusce eget tortor nec neque interdum pharetra. Praesent a velit mi. Ut auctor nisi in sapien fermentum, a cursus ex imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis quis sodales erat, ut maximus elit. In ac elementum nunc, ac pulvinar nunc. Integer ultrices vestibulum tempor. Etiam non vestibulum lorem, quis luctus magna.
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>

<?= $this->endSection(); ?>