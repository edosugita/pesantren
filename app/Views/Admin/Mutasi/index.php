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
                        <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/mutasi/cetak') ?>"><i class="anticon anticon-printer m-r-15"></i>Cetak</a>
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
                                        <h5>Data Berhasil Ditambah atau Diperbarui</h5>
                                        <p><?= session()->getFlashdata('modalSuccess') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- STOP ALERT -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="box-mutasi1 mb-2"></div>
                            <p>Debit = Rp. <b><?= number_format($dataDebit, 2, ',', '.') ?></b></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box-mutasi2 mb-2"></div>
                            <p>Total Pemasukan = Rp. <b><?= $dataPemasukan[0]['nominal'] == null ? '0' : number_format($dataPemasukan[0]['nominal'], 2, ',', '.')  ?></b></p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="box-mutasi3 mb-2"></div>
                            <p>Total Pengeluaran = Rp. <b><?= $dataPengeluaran[0]['nominal'] == null ? '0' : number_format($dataPengeluaran[0]['nominal'], 2, ',', '.') ?></b></p>
                        </div>
                    </div>
                    <div class="row m-b-30">
                        <div class="col-12 d-flex justify-content-end p-h-30">
                            <div class="row">
                                <a class="btn btn-santri btn-hover-santri" href="<?= base_url('/admin/mutasi/add') ?>">Tambah Mutasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-10">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-hover table-borderless">
                                <thead style="background: #CDECE1;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Keperluan</th>
                                        <th>Nominal</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($dataMutasi as $data) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td>Rp. <?= number_format($data['nominal'], 2, ',', '.') ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['jenis'] ?></td>
                                            <td>
                                                <a class="btn btn-icon btn-hover btn-sm btn-rounded" href="<?= base_url('/admin/mutasi/' . $data['id'] . '/view') ?>">
                                                    <i class="anticon anticon-eye" style="color: #336CFB;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
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