<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <!-- ALERT START -->
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show">
                <?= session()->getFlashdata('fail'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show">
                <?= session()->getFlashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('modalSuccess'))) : ?>
        <div class="modal fade" id="infaq-santri">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%; height:5px; --bs-progress-bar-bg: #038556 !important;">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                    <div class="modal-body text-center">
                        <img src="<?= base_url('/assets/img/success-image.svg') ?>" class="mb-5">
                        <h5>Data berhasil di proses</h5>
                        <p><?= session()->getFlashdata('modalSuccess') ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- ALERT STOP -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?= $display['display'] ?></h1>
            <p class="lead"><?= $lead['lead'] ?></p>
            <button class="btn-regis mt-4" onclick="location.href='<?= base_url('/registrasi') ?>'">Daftar Sekarang</button>
        </div>
    </div>

    <section class="lp-mobile-view">
        <div class="container">
            <h4><?= $display['display'] ?></h4>
            <p><?= $lead['lead'] ?></p>
            <button class="btn-m-register" onclick="location.href='<?= base_url('/registrasi') ?>'">Daftar Sekarang</button>
        </div>
    </section>

    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
                <div class="row">
                    <?php foreach ($info as $data) : ?>
                        <div class="col-sm col-6 text-center">
                            <img src="<?= base_url('assets/img/' . $data['gambar']) ?>">
                            <h6 class="mt-3"><?= $data['judul'] ?></h6>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded btn-info-d" data-id="<?= $data['id'] ?>" data-judul="<?= $data['judul'] ?>">
                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row about-me">
            <div class="col-lg-12">
                <div class="row align-items-center phone-ver">
                    <div class="col-md">
                        <h4 style="font-weight: 600;">Tentang Kami</h4>
                        <p class="mt-3"><?= $tentang['tentang'] ?></p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md">
                        <img class="img-about" src="<?= base_url('assets/img/img-about.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron-kegiatan">
        <div class="container">
            <div class="display-kegiatan">
                <h4 style="font-weight: 600;">Kegiatan</h4>
                <span>
                    <i class="fas fa-arrow-right"></i>
                </span>
            </div>
            <div class="lead-kegiatan">
                <div class="row">
                    <?php foreach ($kegiatan as $data) : ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-kegiatan">
                                <div class="img-kegiatan">
                                    <img src="<?= base_url('/assets/content/images/' . $data['gambar']) ?>" alt="">
                                </div>
                                <a href="<?= base_url('/kegiatan/' . $data['slug']) ?>" class="text-kegiatan">
                                    <span><?= $data['judul'] ?></span>
                                    <span>
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between">
            <h4 style="font-weight: 600;">Fasilitas</h4>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($fasilitas as $data) : ?>
                <div class="col-sm-6">
                    <div class="box-fasil">
                        <div class="title-fasil">
                            <h6><?= $data['judul'] ?></h6>
                            <i class="fas <?= $data['icon'] ?>"></i>
                        </div>
                        <p class="mt-3"><?= $data['isi'] ?></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>