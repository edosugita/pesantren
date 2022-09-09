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
                        <h5>Tambah Data Mutasi</h5>
                    </div>
                    <hr>
                    <form action="<?= base_url('/admin/mutasi/add') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama Keperluan</label>
                            <input type="text" name="nama" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Pembelian Semen" value="<?= set_value('nama') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
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
                            <label>Jenis</label>
                            <select name="jenis" class="select2">
                                <option value="Pemasukan">Pemasukan</option>
                                <option value="Pengeluaran">Pengeluaran</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('jenis')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                    <div class="row">
                                        <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                    </div>
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