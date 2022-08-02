<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <section>
        <div class="jumbotron-jurnal" style=" background-image: url(<?= base_url('assets/content/images/' . $jurnalTerbaru['gambar']) ?>);">
            <div class="container">
                <div class="display-jurnal">
                    <span>Kajian Terbaru</span>
                    <h4><?= $jurnalTerbaru['judul'] ?></h4>
                </div>
                <div class="p-lead">
                    <div class="lead-jurnal"><?= $jurnalTerbaru['articel'] ?></div>
                </div>
                <button class="btn-regis mt-4" onclick="location.href='<?= base_url('/jurnal/view/' . $jurnalTerbaru['slug']) ?>'">Read more</button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <!-- <div class="title-info-jurnal">
                <h4 style="font-weight: 700; color: #1D242A">Al Quran</h4>
                <span>See All</span>
            </div> -->
            <div class="content-info-jurnal">
                <div class="row">
                    <?php foreach ($dataJurnal as $data) : ?>
                        <div class="col-lg col-md-6">
                            <div class="card-jurnal">
                                <div class="image-jurnal">
                                    <img src="<?= base_url('assets/content/images/' . $data['gambar']) ?>" alt="">
                                </div>
                                <div class="text-jurnal">
                                    <div class="info-jurnal">
                                        <p><?= date('d/m/Y', strtotime($data['tgl_jurnal'])) ?></p>
                                        <p><?= $data['nama_kategori'] ?></p>
                                    </div>
                                    <div class="judul-jurnal">
                                        <h4><?= $data['judul'] ?></h4>
                                    </div>
                                    <div class="isi-jurnal">
                                        <?= $data['articel'] ?>
                                    </div>

                                    <div class="read-more-jurnal" onclick="location.href='<?= base_url('/jurnal/view/' . $data['slug']) ?>'">
                                        <span>Read More</span>
                                        <span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
</main>

<?= $this->endSection(); ?>