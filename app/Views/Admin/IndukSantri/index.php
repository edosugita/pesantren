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
                        <h5>Data Induk Santri</h5>
                        <a class="btn btn-santri btn-hover-santri" href=""><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-santri btn-hover-santri" data-toggle="modal" data-target="#tambahObat">Tambah Santri</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Santri</th>
                                        <th>Asal</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>190535646001</td>
                                        <td>Jane Cooper</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>190535646002</td>
                                        <td>Wade Warren</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>190535646003</td>
                                        <td>Esther Howard</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>190535646004</td>
                                        <td>Cameron Williamson</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>190535646005</td>
                                        <td>Brooklyn Simmons</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>190535646006</td>
                                        <td>Leslie Alexander</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>190535646007</td>
                                        <td>Jenny Wilson</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>190535646008</td>
                                        <td>Guy Hawkins</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>190535646009</td>
                                        <td>Robert Fox</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>190535646010</td>
                                        <td>Jacob Jones</td>
                                        <td>Malang</td>
                                        <td>6</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/view') ?>">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kodeobat">Kode Obat</label>
                        <input type="text" class="form-control" id="kodeobat" placeholder="ex: KD01">
                    </div>
                    <div class="form-group">
                        <label for="namaobat">Nama Obat</label>
                        <input type="text" class="form-control" id="namaobat" placeholder="ex: Paramex">
                    </div>
                    <div class="form-group">
                        <label for="hargaobat">Harga Obat</label>
                        <input type="text" class="form-control" id="hargaobat" placeholder="ex: 100.000">
                    </div>
                    <div class="form-group">
                        <label for="satuanobat">Satuan</label>
                        <input type="text" class="form-control" id="satuanobat" placeholder="ex: PCS">
                    </div>
                    <div class="form-group">
                        <label for="penggunaanobat">Penggunaan Obat</label>
                        <input type="text" class="form-control" id="penggunaanobat" placeholder="ex: 1x Sehari">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-hover" style="border: 1px solid #336CFB; color: #336CFB;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>