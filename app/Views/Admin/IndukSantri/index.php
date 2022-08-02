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
                        <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/induk-santri/cetak') ?>"><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
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
                                <button type="button" class="btn btn-santri btn-hover-santri" data-toggle="modal" data-target="#dataSantri">Tambah Santri</button>
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
                                    <?php $i = 1 ?>
                                    <?php foreach ($dataSantri as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data['nis'] ?></td>
                                            <td><?= $data['nama_santri'] ?></td>
                                            <td><?= $data['tmp_lahir'] ?></td>
                                            <td><?= $data['semester'] ?></td>
                                            <td>Aktif</td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/' . $data['id'] . '/view') ?>">
                                                    <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                                </a>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/induk-santri/' . $data['id'] . '/edit') ?>">
                                                    <i class="anticon anticon-form" style="color: #049F67;"></i>
                                                </a>
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

<div class="modal fade" id="dataSantri">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dataSantriTitle">Jenis Santri</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <label>Pilih Jenis Santri</label><br>
                <div>
                    <div class="row">
                        <button type="button" class="btn btn-santri btn-hover-santri w-100 mt-2 mb-2" onclick="location.href='<?= base_url('/admin/induk-santri/add') ?>'">Tambah Santri Lama</button>
                        <button type="button" class="btn btn-santri btn-hover-santri w-100 mt-2" onclick="location.href='<?= base_url('/admin/induk-santri/add/baru') ?>'">Tambah Santri Baru</button>
                    </div>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-hover-santri" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>