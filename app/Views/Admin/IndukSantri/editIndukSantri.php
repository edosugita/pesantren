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
                        <h5>Edit Data Induk Santri</h5>
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
                                <div class="tab-content" id="pills-tabContent">

                                    <!-- --------------------------
                                    | INPUT DATA SANTRI           |
                                    ---- ------------------------->

                                    <div class="tab-pane fade show active" id="pills-santri" role="tabpanel" aria-labelledby="pills-santri-tab">
                                        <form action="">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="ex: Uswanto">
                                            </div>
                                            <div class="form-group">
                                                <label>NIS</label>
                                                <input type="number" class="form-control" placeholder="ex: 190645234">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="ex: Malang">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <div class="input-affix m-b-10">
                                                    <i class="prefix-icon anticon anticon-calendar"></i>
                                                    <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <input type="number" class="form-control" placeholder="ex: 8">
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="text" class="form-control" placeholder="ex: Islam">
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" placeholder="ex: Laki-laki">
                                            </div>
                                            <div class="form-group">
                                                <label>Kewarganegaraan</label>
                                                <input type="text" class="form-control" placeholder="ex: Indonesia">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Pendidikan</label>
                                                <input type="text" class="form-control" placeholder="ex: Universitas Negeri Malang">
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="text" class="form-control" placeholder="ex: 081234567890">
                                            </div>
                                            <div class="form-group">
                                                <label>Hobi</label>
                                                <input type="text" class="form-control" placeholder="ex: Sepak Bola">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151">
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end p-h-30">
                                                    <div class="row">
                                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
                                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- --------------------------
                                    | INPUT DATA AYAH             |
                                    ---- ------------------------->

                                    <div class="tab-pane fade" id="pills-ayah" role="tabpanel" aria-labelledby="pills-ayah-tab">
                                        <form action="">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="ex: Uswanto">
                                            </div>
                                            <div class="form-group">
                                                <label>No KK</label>
                                                <input type="number" class="form-control" placeholder="ex: 190645234">
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" class="form-control" placeholder="ex: Dokter">
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="number" class="form-control" placeholder="ex: 081234567890">
                                            </div>
                                            <div class="form-group">
                                                <label>Penghasilan</label>
                                                <input type="text" class="form-control" placeholder="ex: 10.000.000 - 20.000.000">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151">
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end p-h-30">
                                                    <div class="row">
                                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
                                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- --------------------------
                                    | INPUT DATA IBU              |
                                    ---- ------------------------->

                                    <div class="tab-pane fade" id="pills-ibu" role="tabpanel" aria-labelledby="pills-ibu-tab">
                                        <form action="">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="ex: Uswanto">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" class="form-control" placeholder="ex: 190645234">
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" class="form-control" placeholder="ex: Ibu Rumah Tangga">
                                            </div>
                                            <div class="form-group">
                                                <label>Pendidikan</label>
                                                <input type="text" class="form-control" placeholder="ex: SMA/MA/Sederajat">
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="number" class="form-control" placeholder="ex: 081234567890">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151">
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end p-h-30">
                                                    <div class="row">
                                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
                                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- --------------------------
                                    | INPUT DATA WALI             |
                                    ---- ------------------------->

                                    <div class="tab-pane fade" id="pills-wali" role="tabpanel" aria-labelledby="pills-wali-tab">
                                        <form action="">
                                            <div class="form-group">
                                                <label>Hubungan Wali</label>
                                                <input type="text" class="form-control" placeholder="ex: Saudara">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="ex: Uswanto">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" class="form-control" placeholder="ex: 190645234">
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" class="form-control" placeholder="ex: Ibu Rumah Tangga">
                                            </div>
                                            <div class="form-group">
                                                <label>Penghasilan</label>
                                                <input type="text" class="form-control" placeholder="ex: 10.000.000 - 20.000.000">
                                            </div>
                                            <div class="form-group">
                                                <label>No Handphone</label>
                                                <input type="number" class="form-control" placeholder="ex: 081234567890">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="ex: Jl. Mawar IV Joyogren, Dau, Malang 65151">
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end p-h-30">
                                                    <div class="row">
                                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>