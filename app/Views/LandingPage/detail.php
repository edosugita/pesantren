<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <div class="container">
        <section>
            <div class="image-detail">
                <div class="img-d" style="background-image: url('<?= base_url('assets/content/images/' . $dataJurnal['gambar']) ?>');"></div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="post-date">
                                <div class="day">
                                    <span><?= date('l', strtotime($dataJurnal['tgl_jurnal'])) ?></span>
                                </div>
                                <div class="date">
                                    <span><?= date('d', strtotime($dataJurnal['tgl_jurnal'])) ?></span>
                                </div>
                                <div class="month">
                                    <span><?= date('F', strtotime($dataJurnal['tgl_jurnal'])) ?></span>
                                </div>

                                <div class="share">
                                    <span>Share On</span>
                                </div>
                                <div class="share-social-media">
                                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?= base_url($dataJurnal['slug']) ?>">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="share-social-media">
                                    <a target="_blank" href="http://twitter.com/share?text=Visit the link &url=<?= base_url($dataJurnal['slug']) ?>"">
                                                    <i class=" fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-10">
                    <h4 class="judul-detail"><?= $dataJurnal['judul'] ?></h4>
                    <div class="detail-info-jurnal"><?= $dataJurnal['articel'] ?></div>
                </div>
            </div>
        </section>
    </div>
</main>

<?= $this->endSection(); ?>