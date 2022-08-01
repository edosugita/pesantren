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
                        <h5>Tambah Dokumen Keperluan Santri</h5>
                    </div>
                    <hr>
                    <form action="<?= base_url('/admin/dokumen/add/santri') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" id="nis" name="nis" class="form-control <?= (isset($validation)) ? ($validation->hasError('nis')) ? 'is-invalid' : null : null ?>" placeholder="NIS" readonly>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nis')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <select class="select2" name="nama" id="nama_santri" onclick="nisSantriDoc()">
                                <option value="null" selected>Pilih Nama Santri</option>
                                <?php foreach ($dataSantri as $data) : ?>
                                    <option value="<?= $data['nama_santri'] ?>"><?= $data['nama_santri'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Instansi atau Pihak Tujuan</label>
                            <input type="text" name="instansi" class="form-control <?= (isset($validation)) ? ($validation->hasError('instansi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Universitas Negeri malang" value="<?= set_value('instansi') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('instansi')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Instansi Tujuan</label>
                            <input type="text" name="alamat" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Buaya VI Malang" value="<?= set_value('alamat') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('alamat')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Keperluan</label>
                            <input type="text" name="perihal" class="form-control <?= (isset($validation)) ? ($validation->hasError('perihal')) ? 'is-invalid' : null : null ?>" placeholder="Keperluan" value="<?= set_value('perihal') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('perihal')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kop</label>
                            <select name="kop" class="select2">
                                <?php foreach ($kopSurat as $data) : ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pengajuan Surat</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl" class="form-control datepicker-input" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Izin Dimulai</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl_mulai" class="form-control datepicker-input" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl_mulai')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Izin Diakhiri</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl_akhir" class="form-control datepicker-input" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl_akhir')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                    <div class="row">
                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
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