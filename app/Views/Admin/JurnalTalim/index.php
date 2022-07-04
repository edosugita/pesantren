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
                        <h5>Jurnal Ta’lim</h5>
                    </div>
                    <hr>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/jurnal-talim/add') ?>">Tambah Jadwal</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Jane Cooper</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Wade Warren</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Esther Howard</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Cameron Williamson</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Brooklyn Simmons</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Leslie Alexander</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Jenny Wilson</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Guy Hawkins</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Robert Fox</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-form" style="color: #049F67;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Cara Membaca Al Quran</td>
                                        <td>Jacob Jones</td>
                                        <td>Al Quran</td>
                                        <td>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                            </a>
                                            <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
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
<?= $this->endSection(); ?>