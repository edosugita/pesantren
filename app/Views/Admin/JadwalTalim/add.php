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
                        <h5>Tambah Jadwal Ta’lim</h5>
                    </div>
                    <hr>
                    <form method="post" action="<?= base_url('/admin/jadwal-talim/add') ?>">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>Pemateri</label>
                            <input type="text" name="nama" class="form-control  <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Gus Naim" value="<?= set_value('nama') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Materi Ta’lim</label>
                            <input type="text" name="materi" class="form-control  <?= (isset($validation)) ? ($validation->hasError('materi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Hadist" value="<?= set_value('materi') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('materi')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Kitab</label>
                            <input type="text" name="nama_kitab" class="form-control  <?= (isset($validation)) ? ($validation->hasError('nama_kitab')) ? 'is-invalid' : null : null ?>" placeholder="ex: Hadist" value="<?= set_value('nama_kitab') ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama_kitab')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="select2  <?= (isset($validation)) ? ($validation->hasError('kategori')) ? 'is-invalid' : null : null ?>">
                                <?php foreach ($dataKategori as $data) : ?>
                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('kategori')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" name="tgl_jadwal" class="form-control  <?= (isset($validation)) ? ($validation->hasError('tgl_jadwal')) ? 'is-invalid' : null : null ?> datepicker-input" placeholder="ex: 06/14/2022" readonly style="background: white;" value="<?= date('m/d/Y') ?>">
                            </div>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('tgl_jadwal')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Hari</label>
                            <select class="select2" name="hari">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum’at">Jum’at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('hari')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Waktu</label>
                            <select class="select2" name="waktu">
                                <option value="05.30 - 06.30">05.30 - 06.30</option>
                                <option value="11.00 - 12.00">11.00 - 12.00</option>
                                <option value="14.30 - 15.30">14.30 - 15.30</option>
                                <option value="17.00 - 18.00">17.00 - 18.00</option>
                                <option value="19.00 - 20.00">19.00 - 20.00</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('waktu')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Lokasi / Tempat</label>
                            <input type="text" name="lokasi" class="form-control <?= (isset($validation)) ? ($validation->hasError('lokasi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Masjid" value="<?= set_value('lokasi') ?>">
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                <div class="row">
                                    <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
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