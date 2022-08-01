<?=
$this->extend('Layout/Admin/templates');
$this->section('content');
?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Edit Data Infaq Santri</h5>
                    </div>
                    <hr>
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
                    <!-- STOP ALERT -->
                    <form action="<?= base_url('/admin/infaq/add') ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" id="nis" name="nis" class="form-control <?= (isset($validation)) ? ($validation->hasError('nis')) ? 'is-invalid' : null : null ?>" placeholder="NIS" readonly>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nis')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <select class="select2" name="nama" id="nama_santri" onclick="nisSantri()">
                                <option value="null" selected>Pilih Nama Santri</option>
                                <?php foreach ($indukSantri as $data) : ?>
                                    <option value="<?= $data['nama_santri'] ?>"><?= $data['nama_santri'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl" class="form-control datepicker-input" placeholder="ex: 06/14/2022" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <select name="semester" class="select2">
                                <option value="null" selected>Pilih Semester</option>
                                <?php foreach ($semester as $data) : ?>
                                    <option value="<?= $data['tingkat'] ?>"><?= $data['tingkat'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('semester')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nominal" id="rupiah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nominal')) ? 'is-invalid' : null : null ?>" placeholder="ex: 1.000.000" value="<?= set_value('nominal') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nominal')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select2" name="status">
                                <option value="Lunas">Lunas</option>
                                <option value="Tidak Lunas">Tdak Lunas</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('status')) : null ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                <div class="row">
                                    <button type="button" onclick="location.href='<?= base_url('/admin/infaq') ?>'" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
                                    <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>