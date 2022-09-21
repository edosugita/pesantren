<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="nav nav-select flex-column me-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="v-pills-santri-tab" data-bs-toggle="pill" data-bs-target="#v-pills-santri" type="button" role="tab" aria-controls="v-pills-santri" aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="uil uil-user"></i>
                                </div>
                                Calon Santri
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-ayah-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ayah" type="button" role="tab" aria-controls="v-pills-ayah" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="uil uil-server-alt"></i>
                                </div>
                                Data Ayah
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-ibu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ibu" type="button" role="tab" aria-controls="v-pills-ibu" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="uil uil-server-alt"></i>
                                </div>
                                Data Ibu
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="v-pills-wali-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wali" type="button" role="tab" aria-controls="v-pills-wali" aria-selected="false">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="uil uil-server-alt"></i>
                                </div>
                                Data Wali
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-9">

                <form action="<?= base_url('/registrasi/add') ?>" method="post">
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
                    <?php if (isset($validation)) : ?>
                        <div class="col-12 mb-2">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <b>Gagal&nbsp;</b>melakukan mendaftar, mohon mengisi form dengan benar!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-santri" role="tabpanel" aria-labelledby="v-pills-santri-tab" tabindex="0">
                            <h5 style="color: #16181b;">Data Calon Santri</h5>
                            <hr class="mb-4" style="color: #16181b;">
                            <div class="mb-3">
                                <label>Nama <span style="color: red;">*</span></label>
                                <input type="text" name="nama_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= set_value('nama_santri') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nama_santri')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>NIK Santri <span style="color: red;">*</span></label>
                                <input type="number" name="nik_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= set_value('nik_santri') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nik_santri')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Tempat Lahir <span style="color: red;">*</span></label>
                                <input type="text" name="tmp_lahir" class="form-control <?= (isset($validation)) ? ($validation->hasError('tmp_lahir')) ? 'is-invalid' : null : null ?>" placeholder="ex: Malang" value="<?= set_value('tmp_lahir') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('tmp_lahir')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir <span style="color: red;">*</span></label>
                                <div class="input-affix m-b-10">
                                    <input type="date" class="form-control <?= (isset($validation)) ? ($validation->hasError('tgl_lahir')) ? 'is-invalid' : null : null ?>" name="tgl_lahir" value="<?= set_value('tgl_lahir') ?>">
                                    <div class="invalid-feedback">
                                        <?= (isset($validation)) ? ($validation->getError('tgl_lahir')) : null ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Semester <span style="color: red;">*</span></label>
                                <input type="number" name="semester" class="form-control <?= (isset($validation)) ? ($validation->hasError('semester')) ? 'is-invalid' : null : null ?>" placeholder="ex: 8" value="<?= set_value('semester') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('semester')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Agama <span style="color: red;">*</span></label>
                                <input type="text" name="agama" class="form-control <?= (isset($validation)) ? ($validation->hasError('agama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Islam" value="<?= set_value('agama') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('agama')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Gender <span style="color: red;">*</span></label>
                                <select class="form-select" name="gender">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Kewarganegaraan <span style="color: red;">*</span></label>
                                <input type="text" name="kewarganegaraan" class="form-control <?= (isset($validation)) ? ($validation->hasError('kewarganegaraan')) ? 'is-invalid' : null : null ?>" placeholder="ex: Indonesia" value="<?= set_value('kewarganegaraan') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('kewarganegaraan')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Tempat Pendidikan <span style="color: red;">*</span></label>
                                <input type="text" name="tmp_pendidikan" class="form-control <?= (isset($validation)) ? ($validation->hasError('tmp_pendidikan')) ? 'is-invalid' : null : null ?>" placeholder="ex: Universitas Negeri Malang" value="<?= set_value('tmp_pendidikan') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('tmp_pendidikan')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>No Handphone <span style="color: red;">*</span></label>
                                <input type="text" name="no_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= set_value('no_santri') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('no_santri')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Hobi <span style="color: red;">*</span></label>
                                <input type="text" name="hobi" class="form-control <?= (isset($validation)) ? ($validation->hasError('hobi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Sepak Bola" value="<?= set_value('hobi') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('hobi')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Alamat <span style="color: red;">*</span></label>
                                <input type="text" name="alamat_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= set_value('alamat_santri') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('alamat_santri')) : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ayah" role="tabpanel" aria-labelledby="v-pills-ayah-tab" tabindex="0">
                            <h5 style="color: #16181b;">Data Ayah</h5>
                            <hr class="mb-4" style="color: #16181b;">
                            <div class="mb-3">
                                <label>Nama <span style="color: red;">*</span></label>
                                <input type="text" name="nama_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= set_value('nama_ayah') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nama_ayah')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>NIK <span style="color: red;">*</span></label>
                                <input type="number" name="nik_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= set_value('nik_ayah') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nik_ayah')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan <span style="color: red;">*</span></label>
                                <input type="text" name="pekerjaan_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Dokter" value="<?= set_value('pekerjaan_ayah') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_ayah')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Penghasilan Ayah<span style="color: red;">*</span></label>
                                <select class="form-select" name="penghasilan_ayah">
                                    <option value="null">Pilih Penghasilan Ayah</option>
                                    <option value="Di Bawah Rp. 1.000.000">Di Bawah Rp. 1.000.000</option>
                                    <option value="Rp. 1.000.000 - 3.000.000">Rp. 1.000.000 - 3.000.000</option>
                                    <option value="Rp. 3.000.000 - 4.000.000">Rp. 3.000.000 - 4.000.000</option>
                                    <option value="Di Atas Rp. 5.000.000">Di Atas Rp. 5.000.000</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_ayah')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>No Handphone <span style="color: red;">*</span></label>
                                <input type="number" name="no_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= set_value('no_ayah') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('no_ayah')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Alamat <span style="color: red;">*</span></label>
                                <input type="text" name="alamat_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= set_value('alamat_ayah') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('alamat_ayah')) : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-ibu" role="tabpanel" aria-labelledby="v-pills-ibu-tab" tabindex="0">
                            <h5 style="color: #16181b;">Data Ibu</h5>
                            <hr class="mb-4" style="color: #16181b;">
                            <div class="mb-3">
                                <label>Nama <span style="color: red;">*</span></label>
                                <input type="text" name="nama_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= set_value('nama_ibu') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nama_ibu')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>NIK <span style="color: red;">*</span></label>
                                <input type="number" name="nik_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= set_value('nik_ibu') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nik_ibu')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan <span style="color: red;">*</span></label>
                                <input type="text" name="pekerjaan_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Ibu Rumah Tangga" value="<?= set_value('pekerjaan_ibu') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_ibu')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Penghasilan Ibu <span style="color: red;">*</span></label>
                                <select class="form-select" name="penghasilan_ibu">
                                    <option value="null">Pilih Penghasilan Ibu</option>
                                    <option value="Di Bawah Rp. 1.000.000">Di Bawah Rp. 1.000.000</option>
                                    <option value="Rp. 1.000.000 - 3.000.000">Rp. 1.000.000 - 3.000.000</option>
                                    <option value="Rp. 3.000.000 - 4.000.000">Rp. 3.000.000 - 4.000.000</option>
                                    <option value="Di Atas Rp. 5.000.000">Di Atas Rp. 5.000.000</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_ibu')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>No Handphone <span style="color: red;">*</span></label>
                                <input type="number" name="no_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= set_value('no_ibu') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('no_ibu')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Alamat <span style="color: red;">*</span></label>
                                <input type="text" name="alamat_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= set_value('alamat_ibu') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('alamat_ibu')) : null ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-wali" role="tabpanel" aria-labelledby="v-pills-wali-tab" tabindex="0">
                            <h5 style="color: #16181b;">Data Wali</h5>
                            <hr class="mb-4" style="color: #16181b;">
                            <div class="mb-3">
                                <label>Hubungan Wali</label>
                                <input type="text" name="hubungan_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('hubungan_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Saudara" value="<?= set_value('hubungan_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('hubungan_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= set_value('nama_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nama_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>NIK</label>
                                <input type="number" name="nik_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= set_value('nik_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('nik_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan Wali</label>
                                <input type="text" name="pekerjaan_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Ibu Rumah Tangga" value="<?= set_value('pekerjaan_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Penghasilan Wali</label>
                                <select class="form-select" name="penghasilan_wali">
                                    <option value="null">Pilih Penghasilan Wali</option>
                                    <option value="Di Bawah Rp. 1.000.000">Di Bawah Rp. 1.000.000</option>
                                    <option value="Rp. 1.000.000 - 3.000.000">Rp. 1.000.000 - 3.000.000</option>
                                    <option value="Rp. 3.000.000 - 4.000.000">Rp. 3.000.000 - 4.000.000</option>
                                    <option value="Di Atas Rp. 5.000.000">Di Atas Rp. 5.000.000</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>No Handphone</label>
                                <input type="number" name="no_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= set_value('no_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('no_wali')) : null ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <input type="text" name="alamat_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= set_value('alamat_wali') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('alamat_wali')) : null ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end ps-3 pe-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-santri-cancel btn-hover-santri" style="border: 1px solid #049F67 !important;" onclick="location.href='<?= base_url('/') ?>'">Cancel</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>