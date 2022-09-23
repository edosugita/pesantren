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
                        <h5>Edit Data Calon Santri</h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <ul class="nav nav-select flex-column" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-santri-tab" data-toggle="pill" href="#pills-santri" role="tab" aria-controls="pills-santri" aria-selected="true">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <i class="anticon anticon-user" style="font-size: 18px;"></i>
                                                </div>
                                                Data Santri
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ayah-tab" data-toggle="pill" href="#pills-ayah" role="tab" aria-controls="pills-ayah" aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <i class="anticon anticon-database" style="font-size: 18px;"></i>
                                                </div>
                                                Data Ayah
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-ibu-tab" data-toggle="pill" href="#pills-ibu" role="tab" aria-controls="pills-ibu" aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <i class="anticon anticon-database" style="font-size: 18px;"></i>
                                                </div>
                                                Data Ibu
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-wali-tab" data-toggle="pill" href="#pills-wali" role="tab" aria-controls="pills-wali" aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="m-r-10">
                                                    <i class="anticon anticon-database" style="font-size: 18px;"></i>
                                                </div>
                                                Data Wali
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <form action="<?= base_url('/admin/calon-santri/' . $dataSantriReg[0]['id'] . '/edit') ?>" method="post" onsubmit="return confirm('Anda yakin ingin merubah data ini?');">
                                    <?= csrf_field(); ?>
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
                                    <?php if (isset($validation)) : ?>
                                        <div class="col-12 mb-2">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <!-- <b>Gagal&nbsp;</b>melakukan mendaftar, mohon mengisi form dengan benar! -->
                                                <?= $validation->listErrors() ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- STOP ALERT -->
                                    <div class="tab-content" id="pills-tabContent">

                                        <!-- --------------------------
                                        | INPUT DATA SANTRI           |
                                        ---- ------------------------->
                                        <div class="tab-pane fade show active" id="pills-santri" role="tabpanel" aria-labelledby="pills-santri-tab">
                                            <div class="form-group">
                                                <label>No Register</label>
                                                <input type="text" class="form-control" value="<?= $dataSantriReg[0]['no_register'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= $dataSantriReg[0]['nama_santri'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nama_santri')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik_lama" value="<?= $dataSantriReg[0]['nik_santri'] ?>" hidden>
                                                <input type="number" name="nik_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= $dataSantriReg[0]['nik_santri'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nik_santri')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tmp_lahir" class="form-control <?= (isset($validation)) ? ($validation->hasError('tmp_lahir')) ? 'is-invalid' : null : null ?>" placeholder="ex: Malang" value="<?= $dataSantriReg[0]['tmp_lahir'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('tmp_lahir')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control <?= (isset($validation)) ? ($validation->hasError('tgl_lahir')) ? 'is-invalid' : null : null ?>" name="tgl_lahir" value="<?= $dataSantriReg[0]['tgl_lahir'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('tgl_lahir')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <input type="number" name="semester" class="form-control <?= (isset($validation)) ? ($validation->hasError('semester')) ? 'is-invalid' : null : null ?>" placeholder="ex: 8" value="<?= $dataSantriReg[0]['semester'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('semester')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="text" name="agama" class="form-control <?= (isset($validation)) ? ($validation->hasError('agama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Islam" value="<?= $dataSantriReg[0]['agama'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('agama')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="select2" name="gender">
                                                    <option value="Laki-laki" <?= $dataSantriReg[0]['gender'] == 'Laki-laki' ? 'selected' : ''  ?>>Laki-laki</option>
                                                    <option value="Perempuan" <?= $dataSantriReg[0]['gender'] == 'Perempuan' ? 'selected' : ''  ?>>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kewarganegaraan</label>
                                                <input type="text" name="kewarganegaraan" class="form-control <?= (isset($validation)) ? ($validation->hasError('kewarganegaraan')) ? 'is-invalid' : null : null ?>" placeholder="ex: Indonesia" value="<?= $dataSantriReg[0]['kewarganegaraan'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('kewarganegaraan')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Pendidikan</label>
                                                <input type="text" name="tmp_pendidikan" class="form-control <?= (isset($validation)) ? ($validation->hasError('tmp_pendidikan')) ? 'is-invalid' : null : null ?>" placeholder="ex: Universitas Negeri Malang" value="<?= $dataSantriReg[0]['tmp_pendidikan'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('tmp_pendidikan')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="text" name="no_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= $dataSantriReg[0]['no_hp_santri'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('no_santri')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Hobi</label>
                                                <input type="text" name="hobi" class="form-control <?= (isset($validation)) ? ($validation->hasError('hobi')) ? 'is-invalid' : null : null ?>" placeholder="ex: Sepak Bola" value="<?= $dataSantriReg[0]['hobi_santri'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('hobi')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_santri" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_santri')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= $dataSantriReg[0]['alamat_santri'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('alamat_santri')) : null ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- --------------------------
                                        | INPUT DATA AYAH             |
                                        ---- ------------------------->

                                        <div class="tab-pane fade" id="pills-ayah" role="tabpanel" aria-labelledby="pills-ayah-tab">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= $dataSantriReg[0]['nama_ayah'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nama_ayah')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= $dataSantriReg[0]['nik_ayah'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nik_ayah')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Dokter" value="<?= $dataSantriReg[0]['pekerjaan_ayah'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_ayah')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Penghasilan Ayah</label>
                                                <select class="select2" name="penghasilan_ayah">
                                                    <option value="null">Pilih Penghasilan Ayah</option>
                                                    <option value="Di Bawah Rp. 1.000.000" <?= $dataSantriReg[0]['penghasilan_ayah'] == 'Di Bawah Rp. 1.000.000' ? 'selected' : '' ?>>Di Bawah Rp. 1.000.000</option>
                                                    <option value="Rp. 1.000.000 - 3.000.000" <?= $dataSantriReg[0]['penghasilan_ayah'] == 'Rp. 1.000.000 - 3.000.000' ? 'selected' : '' ?>>Rp. 1.000.000 - 3.000.000</option>
                                                    <option value="Rp. 3.000.000 - 4.000.000" <?= $dataSantriReg[0]['penghasilan_ayah'] == 'Rp. 3.000.000 - 4.000.000' ? 'selected' : '' ?>>Rp. 3.000.000 - 4.000.000</option>
                                                    <option value="Di Atas Rp. 5.000.000" <?= $dataSantriReg[0]['penghasilan_ayah'] == 'Di Atas Rp. 5.000.000' ? 'selected' : '' ?>>Di Atas Rp. 5.000.000</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_ayah')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="text" name="no_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= $dataSantriReg[0]['no_hp_ayah'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('no_ayah')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_ayah" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_ayah')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= $dataSantriReg[0]['alamat_ayah'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('alamat_ayah')) : null ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- --------------------------
                                        | INPUT DATA IBU              |
                                        ---- ------------------------->

                                        <div class="tab-pane fade" id="pills-ibu" role="tabpanel" aria-labelledby="pills-ibu-tab">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= $dataSantriReg[0]['nama_ibu'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nama_ibu')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= $dataSantriReg[0]['nik_ibu'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nik_ibu')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Ibu Rumah Tangga" value="<?= $dataSantriReg[0]['pekerjaan_ibu'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_ibu')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Penghasilan Ibu</label>
                                                <select class="select2" name="penghasilan_ibu">
                                                    <option value="null">Pilih Penghasilan Ibu</option>
                                                    <option value="Di Bawah Rp. 1.000.000" <?= $dataSantriReg[0]['penghasilan_ibu'] == 'Di Bawah Rp. 1.000.000' ? 'selected' : '' ?>>Di Bawah Rp. 1.000.000</option>
                                                    <option value="Rp. 1.000.000 - 3.000.000" <?= $dataSantriReg[0]['penghasilan_ibu'] == 'Rp. 1.000.000 - 3.000.000' ? 'selected' : '' ?>>Rp. 1.000.000 - 3.000.000</option>
                                                    <option value="Rp. 3.000.000 - 4.000.000" <?= $dataSantriReg[0]['penghasilan_ibu'] == 'Rp. 3.000.000 - 4.000.000' ? 'selected' : '' ?>>Rp. 3.000.000 - 4.000.000</option>
                                                    <option value="Di Atas Rp. 5.000.000" <?= $dataSantriReg[0]['penghasilan_ibu'] == 'Di Atas Rp. 5.000.000' ? 'selected' : '' ?>>Di Atas Rp. 5.000.000</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_ibu')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="text" name="no_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= $dataSantriReg[0]['no_hp_ibu'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('no_ibu')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_ibu" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_ibu')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= $dataSantriReg[0]['alamat_ibu'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('alamat_ibu')) : null ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- --------------------------
                                        | INPUT DATA WALI             |
                                        ---- ------------------------->

                                        <div class="tab-pane fade" id="pills-wali" role="tabpanel" aria-labelledby="pills-wali-tab">
                                            <div class="form-group">
                                                <label>Hubungan Wali</label>
                                                <input type="text" name="hubungan_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('hubungan_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Saudara" value="<?= $dataSantriReg[0]['hubungan_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('hubungan_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= $dataSantriReg[0]['nama_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nama_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" name="nik_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('nik_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: 190645234" value="<?= $dataSantriReg[0]['nik_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('nik_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan Wali</label>
                                                <input type="text" name="pekerjaan_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('pekerjaan_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: 10.000.000 - 20.000.000" value="<?= $dataSantriReg[0]['pekerjaan_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('pekerjaan_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekenghasilan</label>
                                                <select class="select2" name="penghasilan_wali">
                                                    <option value="null">Pilih Penghasilan Wali</option>
                                                    <option value="Di Bawah Rp. 1.000.000" <?= $dataSantriReg[0]['penghasilan_wali'] == 'Di Bawah Rp. 1.000.000' ? 'selected' : '' ?>>Di Bawah Rp. 1.000.000</option>
                                                    <option value="Rp. 1.000.000 - 3.000.000" <?= $dataSantriReg[0]['penghasilan_wali'] == 'Rp. 1.000.000 - 3.000.000' ? 'selected' : '' ?>>Rp. 1.000.000 - 3.000.000</option>
                                                    <option value="Rp. 3.000.000 - 4.000.000" <?= $dataSantriReg[0]['penghasilan_wali'] == 'Rp. 3.000.000 - 4.000.000' ? 'selected' : '' ?>>Rp. 3.000.000 - 4.000.000</option>
                                                    <option value="Di Atas Rp. 5.000.000" <?= $dataSantriReg[0]['penghasilan_wali'] == 'Di Atas Rp. 5.000.000' ? 'selected' : '' ?>>Di Atas Rp. 5.000.000</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('penghasilan_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="text" name="no_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('no_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= $dataSantriReg[0]['no_hp_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('no_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_wali" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat_wali')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151" value="<?= $dataSantriReg[0]['alamat_wali'] ?>">
                                                <div class="invalid-feedback">
                                                    <?= (isset($validation)) ? ($validation->getError('alamat_wali')) : null ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end p-h-30">
                                                    <div class="row">
                                                        <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="location.href='<?= base_url('/admin/calon-santri') ?>'">Cancel</button>
                                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                                    </div>
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
        </div>
    </div>
</div>

<?= $this->endSection(); ?>