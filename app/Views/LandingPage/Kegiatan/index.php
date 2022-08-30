<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <div class="container">
        <section>
            <div class="image-detail">
                <div class="img-d" style="background-image: url('<?= base_url('assets/content/images/' . $dataKegiatan['gambar']) ?>');"></div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class=" col-md-12">
                    <h4 class="judul-detail text-center mb-5"><?= $dataKegiatan['judul'] ?></h4>
                    <div class="detail-info-jurnal"><?= $dataKegiatan['isi'] ?></div>
                </div>
            </div>
        </section>
    </div>
</main>

<?= $this->endSection(); ?>