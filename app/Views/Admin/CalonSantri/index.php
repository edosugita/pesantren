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
                        <h5>Data Calon Santri</h5>
                        <a class="btn btn-santri btn-hover-santri" href=""><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
                    </div>
                    <hr>
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
                    <!-- STOP ALERT -->
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/calon-santri/add') ?>">Tambah Santri</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Santri</th>
                                        <th>No Reg</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Telp</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($dataSantriReg as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data['nama_santri'] ?></td>
                                            <td><?= $data['no_register'] ?></td>
                                            <td><?= $data['gender'] ?></td>
                                            <td><?= $data['no_hp_santri'] ?></td>
                                            <td><?= $data['alamat_santri'] ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/calon-santri/' . $data['id'] . '/view') ?>">
                                                    <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                                </a>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/calon-santri/' . $data['id'] . '/edit') ?>">
                                                    <i class="anticon anticon-form" style="color: #049F67;"></i>
                                                </a>
                                                <!-- <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="#">
                                                    <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                </a> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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