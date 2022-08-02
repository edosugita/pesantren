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
                        <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/calon-santri/cetak') ?>"><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
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
                    <?php if (!empty(session()->getFlashdata('modalSuccess'))) : ?>
                        <div class="modal fade" id="infaq-santri">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?= base_url('/assets/img/success-image.svg') ?>" class="mb-5">
                                        <h5>Data berhasil di proses</h5>
                                        <p><?= session()->getFlashdata('modalSuccess') ?></p>
                                    </div>
                                </div>
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
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" style="cursor: pointer;" data-toggle="modal" data-target="#delete">
                                                    <i class="anticon anticon-delete" style="color: #BF0603;"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="delete">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                                                    <div class="modal-body text-center">
                                                        <img src="<?= base_url('/assets/img/delete.svg') ?>" class="mb-5">
                                                        <h5>Apakah anda ingin menghapus data ini?</h5>
                                                        <p>Apakah anda ingin menghapus data ini? Tolong konfirmasi jika anda ingin mengahapusnya</p>
                                                    </div>
                                                    <form action="<?= base_url('/admin/calon-santri/delete/' . $data['id']) ?>" method="post">
                                                        <div class="row" style="padding: 0 20px 20px 20px;">
                                                            <div class="col-6">
                                                                <button type="button" class="btn btn-hover-santri w-100" style="border: 1px solid #049F67; color: #049F67;" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <button type="submit" class="btn btn-santri btn-hover-santri" style="width: 100% !important;">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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