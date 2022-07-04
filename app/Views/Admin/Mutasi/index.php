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
                        <h5>Mutasi Keuangan</h5>
                        <a class="btn btn-santri btn-hover-santri" href=""><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-santri btn-hover-santri" data-toggle="modal" data-target="#tambahObat">Tambah Mutasi</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Perihal</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Uang Donatur</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Uang Donatur</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Membeli Semen</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Infaq santri 4 bulan</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>Out</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Infaq santri 4 bulan</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Infaq santri 4 bulan</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Dividen saham</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Uang donatur banyuwangi</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>In</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Membeli perusahaan baru</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>out</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dividen saham</td>
                                        <td>$576.28</td>
                                        <td>1/28/17</td>
                                        <td>Out</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH OBAT -->
<div class="modal fade" id="tambahObat">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Mutasi Keuangan</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" class="form-control" placeholder="ex: Pembangunan">
                    </div>
                    <div class="form-group">
                        <label>Nominal</label>
                        <input type="text" class="form-control" placeholder="ex: 1000000">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div>
                            <select class="select2">
                                <option value="In">In</option>
                                <option value="Out">Out</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
                    <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>