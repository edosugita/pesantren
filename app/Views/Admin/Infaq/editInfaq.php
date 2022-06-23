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
                    <form method="">
                        <div class="form-group">
                            <label>Nama</label>
                            <select class="select2">
                                <option value="AP">Uswanto</option>
                                <option value="NL">Gus Naim</option>
                                <option value="BN">Ustadz Roni</option>
                                <option value="HL">Uswanti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" class="form-control" placeholder="ex: 1.000.000">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Infaq Bulan</label>
                            <input type="text" class="form-control" placeholder="ex: Juli">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="Lunas">Lunas</option>
                                <option value="Tidak Lunas">Tdak Lunas</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
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

<?= $this->endSection(); ?>