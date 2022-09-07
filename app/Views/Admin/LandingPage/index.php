<?=
$this->extend('Layout/Admin/templates');
$this->section('css');
?>

<link rel="stylesheet" href="<?= base_url('assets/css/landingpage.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/adminLanding.css') ?>">

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- START ALERT -->
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?= session()->getFlashdata('fail'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('modalSuccess'))) : ?>
                        <div class="modal fade" id="infaq-santri">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
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
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <p>Jika ingin melakukan perubahan pada tmpilan text di landing page dapat dilakukan dengan "<b>klik</b>" bagian text yang ingin dirubah</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- STOP ALERT -->

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <form action="/admin/master/landing/title" method="post">
                                <div class="d-flex">
                                    <input class="display-4 display-input" name="title" type="text" placeholder="Title" value="<?= $display['display'] ?>">
                                    <button class="btn btn-primary display-button">Save</button>
                                </div>
                            </form>
                            <form action="/admin/master/landing/lead" method="post">
                                <div class="d-flex">
                                    <input class="lead display-input" name="title" type="text" placeholder="Sub Title" value="<?= $lead['lead'] ?>">
                                    <button class="btn btn-primary display-button">Save</button>
                                </div>
                            </form>
                            <button class="btn-regis mt-4">Daftar Sekarang</button>
                        </div>
                    </div>

                    <section class="lp-mobile-view">
                        <div class="container">
                            <h4>Mari Bergabung Bersama <span style="color: #038456;">Kami</span></h4>
                            <p>Generasi hebat, Generasi tangguh Jaya Jaya Jaya!</p>
                            <button class="btn-m-register">Daftar Sekarang</button>
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
                                        <form action="/admin/master/landing/tentang" method="post">
                                            <div class="d-flex">
                                                <textarea class="display-input" rows="10" cols="50" name="title"><?= $tentang['tentang'] ?></textarea>
                                                <button class="btn btn-primary display-button">Save</button>
                                            </div>
                                        </form>
                                        <p class="mt-3"> </p>
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
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#kegiatan">Add</button>
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
                                                <div class="bg-white w-100 p-3 d-flex justify-content-end">
                                                    <a class="btn btn-icon btn-hover btn-sm btn-rounded btn-edit-keg" href="<?= base_url('/admin/master/landing/kegiatan/edit/' . $data['id']) ?>">
                                                        <i class="anticon anticon-form" style="color: #049F67;"></i>
                                                    </a>
                                                    <button class="btn btn-icon btn-hover btn-sm btn-rounded btn-hapus-keg" style="cursor: pointer;" data-id="<?= $data['id'] ?>" data-judul="<?= $data['judul'] ?>">
                                                        <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h4 style="font-weight: 600;">Fasilitas</h4>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#fasilitas">Add</button>
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
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/master/landing/fasilitas/' . $data['id'] . '/edit') ?>">
                                            <i class="anticon anticon-form" style="color: #049F67;"></i>
                                        </a>
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded btn-hapus-fasil" style="cursor: pointer;" data-id="<?= $data['id'] ?>" data-judul="<?= $data['judul'] ?>">
                                            <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- MODAL INFO -->
<div class="modal fade" id="info">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fasilitasTitle">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="<?= base_url('/admin/master/landing/update') ?>" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <input type="text" name="id" class="id-info" hidden>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control judul-info" placeholder="ex: Olahraga" name="judul">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL KEGIATAN -->
<div class="modal fade" id="kegiatan">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kegiatanTitle">Tambah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="<?= base_url('/admin/master/landing') ?>" method="post" enctype="multipart/form-data" onsubmit="mySubmit()">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('judul')) ? 'is-invalid' : null : null ?>" placeholder="ex: Olahraga" name="judul" value="<?= set_value('judul') ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('judul')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
                        <div class="preview mt-3 mb-3">
                            <img class="img-preview" alt="">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= (isset($validation)) ? ($validation->hasError('gambar')) ? 'is-invalid' : null : null ?>" id="gambar" name="gambar" onchange="previewImg()" value="<?= set_value('gambar') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('gambar')) : null ?>
                            </div>
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                        </div>
                    </div>
                    <textarea name="articel" id="articelcontent" cols="1" rows="1" hidden></textarea>
                    <div id="editor">
                        <p>Hello World!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL DELETE KEGIATAN -->
<div class="modal fade" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
            <div class="modal-body text-center">
                <img src="<?= base_url('/assets/img/delete.svg') ?>" class="mb-5">
                <h5 class="judul-keg"></h5>
                <p>Apakah anda ingin menghapus data ini? Tolong konfirmasi jika anda ingin mengahapusnya</p>
            </div>
            <form action="<?= base_url('/admin/master/landing/kegiatan/delete') ?>" method="post">
                <input type="text" class="idKegiatan" name="id" hidden>
                <div class="row" style="padding: 0 20px 20px 20px;">
                    <div class="col-6">
                        <button type="button" class="btn btn-hover-santri w-100" style="border: 1px solid #049F67; color: #049F67;" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-santri btn-hover-santri" style="width: 100% !important;">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL FASILITAS -->
<div class="modal fade" id="fasilitas">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fasilitasTitle">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="<?= base_url('/admin/master/landing/fasilitas') ?>" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Keunggulan</label>
                        <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('judul')) ? 'is-invalid' : null : null ?>" placeholder="ex: Olahraga" name="judul" value="<?= set_value('judul') ?>">
                        <div class="invalid-feedback">
                            <?= (isset($validation)) ? ($validation->getError('judul')) : null ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="m-b-15">
                            <label>Icon</label>
                            <select class="select2" name="icon">
                                <option value="fa-car">Garasi</option>
                                <option value="fa-wifi">Wifi</option>
                                <option value="fa-home">Rumah</option>
                                <option value="fa-clock">Jam</option>
                                <option value="fa-bed">Kasur</option>
                                <option value="fa-Book">Buku</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <textarea name="isi" class="form-control" aria-label="With textarea" placeholder="ex: fasilitas yang memadai..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL DELETE FASILITAS -->
<div class="modal fade" id="delete-fasil">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
            <div class="modal-body text-center">
                <img src="<?= base_url('/assets/img/delete.svg') ?>" class="mb-5">
                <h5 class="judul"></h5>
                <p>Apakah anda ingin menghapus data ini? Tolong konfirmasi jika anda ingin mengahapusnya</p>
            </div>
            <form action="<?= base_url('/admin/master/landing/fasilitas/delete') ?>" method="post">
                <input type="text" class="idFasilitas" name="id" hidden>
                <div class="row" style="padding: 0 20px 20px 20px;">
                    <div class="col-6">
                        <button type="button" class="btn btn-hover-santri w-100" style="border: 1px solid #049F67; color: #049F67;" data-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-santri btn-hover-santri" style="width: 100% !important;">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script>
    // EDIT INFO
    $('.btn-info-d').on('click', function() {
        // get data from button edit
        const id = $(this).data('id');
        const judul = $(this).data('judul');
        // Set data to Form Edit
        $('.judul-info').val(judul);
        $('.id-info').val(id);
        // Call Modal Edit
        $('#info').modal('show');
    });

    // DELETE KEGIATAN
    $('.btn-hapus-keg').on('click', function() {
        // get data from button edit
        const id = $(this).data('id');
        const judul = $(this).data('judul');
        // Set data to Form Edit
        $('.judul-keg').html('Apakah anda ingin menghapus data <b>' + judul + '</b>?');
        $('.idKegiatan').val(id);
        // Call Modal Edit
        $('#delete').modal('show');
    });

    // DELETE FASILITAS
    $('.btn-hapus-fasil').on('click', function() {
        // get data from button edit
        const id = $(this).data('id');
        const judul = $(this).data('judul');
        // Set data to Form Edit
        $('.judul').html('Apakah anda ingin menghapus data <b>' + judul + '</b>?');
        $('.idFasilitas').val(id);
        // Call Modal Edit
        $('#delete-fasil').modal('show');
    });
</script>
<?= $this->endSection(); ?>