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
                        <h5>Jadwal Ta’lim</h5>
                        <a class="btn btn-santri btn-hover-santri" href=""><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <button class="btn btn-santri btn-hover-santri" data-toggle="modal" data-target="#tambahObat">Tambah Jadwal</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Materi Ta’lim</th>
                                        <th>Pemateri</th>
                                        <th>Tempat</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hadist</td>
                                        <td>Jane Cooper</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hadist</td>
                                        <td>Wade Warren</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Hadist</td>
                                        <td>Esther Howard</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Hadist</td>
                                        <td>Cameron Williamson</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Hadist</td>
                                        <td>Brooklyn Simmons</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Hadist</td>
                                        <td>Leslie Alexander</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Hadist</td>
                                        <td>Jenny Wilson</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Hadist</td>
                                        <td>Guy Hawkins</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Hadist</td>
                                        <td>Robert Fox</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Hadist</td>
                                        <td>Jacob Jones</td>
                                        <td>Aula</td>
                                        <td>Senin</td>
                                        <td>04.30 - 05.30</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/jadwal-talim/edit') ?>">
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Materi Ta’lim</label>
                        <input type="text" class="form-control" id="kodeobat" placeholder="ex: Jemes Harden">
                    </div>
                    <div class="form-group">
                        <label>Pemateri</label>
                        <input type="text" class="form-control" id="namaobat" placeholder="ex: 100000">
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="ex: 06/14/2022">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Hari</label>
                        <div>
                            <select class="select2">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <div>
                            <select class="select2">
                                <option value="05.30 - 06.30">05.30 - 06.30</option>
                                <option value="11.00 - 12.00">11.00 - 12.00</option>
                                <option value="14.30 - 15.30">14.30 - 15.30</option>
                                <option value="17.00 - 18.00">17.00 - 18.00</option>
                                <option value="19.00 - 20.00">19.00 - 20.00</option>
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