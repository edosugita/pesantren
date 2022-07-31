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
                        <h5>Data Donatur <?= $dataDonatur['nama'] ?></h5>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Nama Donatur</label>
                        <p><?= $dataDonatur['nama'] ?></p>
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <p><?= $dataDonatur['no_hp'] ?></p>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <p><?= $dataDonatur['Alamat'] ?></p>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                <div class="row">
                                    <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>