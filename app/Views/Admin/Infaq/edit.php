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
                    <form action="<?= base_url('/admin/infaq/' . $infaqSantri[0]['id'] . '/edit') ?>" method="post" onsubmit="return confirm('Anda yakin ingin merubah data ini?');">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" id="nis" name="nis" class="form-control bg-white" value="<?= $infaqSantri[0]['nis'] ?>" readonly>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nis')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control bg-white" value="<?= $infaqSantri[0]['nama_santri'] ?>" readonly>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl" class="form-control datepicker-input" placeholder="ex: 06/14/2022" readonly style="background: white;" value="<?= date('m/d/Y', strtotime(str_replace("-", "/", $infaqSantri[0]['tgl']))) ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input type="text" name="semester" class="form-control" value="<?= $infaqSantri[0]['id_semester'] ?>" readonly>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('semester')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nominal" id="rupiah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nominal')) ? 'is-invalid' : null : null ?>" placeholder="ex: 1.000.000" value="<?= number_format($infaqSantri[0]['nominal'], 0, ',', '.') ?>">
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
                                    <button type="button" onclick="history.back()" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
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