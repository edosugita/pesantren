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
                        <h5>Donatur</h5>
                        <a class="btn btn-santri btn-hover-santri" href=""><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-santri btn-hover-santri" data-toggle="modal" data-target="#tambahObat">Tambah Donatur</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Donatur</th>
                                        <th>No Handphone</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jane Cooper</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Wade Warren</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Esther Howard</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Cameron Williamson</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Brooklyn Simmons</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Leslie Alexander</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Jenny Wilson</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tidak Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Guy Hawkins</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tidak Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Robert Fox</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tidak Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Jacob Jones</td>
                                        <td>0812345678</td>
                                        <td>Jl. Mawar 88 Mojokerto</td>
                                        <td>Tidak Tetap</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/donatur/edit') ?>">
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Donatur</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Donatur</label>
                        <input type="text" class="form-control" id="kodeobat" placeholder="ex: Jemes Harden">
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="text" class="form-control" id="namaobat" placeholder="ex: 081234567890">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="satuanobat" placeholder="ex: Jl Malang Raya">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div>
                            <select class="select2">
                                <option value="Tetap">Tetap</option>
                                <option value="Tidak Tetap">Tidak Tetap</option>
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