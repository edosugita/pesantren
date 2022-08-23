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
                        <h5>Edit Data Donatur</h5>
                    </div>
                    <hr>
                    <form action="<?= base_url('/admin/donatur/' . $dataDonatur['id'] . '/edit') ?>" method="post" onsubmit="return confirm('Anda yakin ingin merubah data ini?');">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama Donatur</label>
                            <input type="text" name="nama" class="form-control <?= (isset($validation)) ? ($validation->hasError('nama')) ? 'is-invalid' : null : null ?>" placeholder="ex: Uswanto" value="<?= $dataDonatur['nama'] ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('nama')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No Handphone</label>
                            <input type="number" name="no" class="form-control <?= (isset($validation)) ? ($validation->hasError('no')) ? 'is-invalid' : null : null ?>" placeholder="ex: 081234567890" value="<?= $dataDonatur['no_hp'] ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('no')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control <?= (isset($validation)) ? ($validation->hasError('alamat')) ? 'is-invalid' : null : null ?>" placeholder="ex: Jl. Buaya VI Malang" value="<?= $dataDonatur['Alamat'] ?>">
                            <div class="invalid-feedback">
                                <?= (isset($validation)) ? ($validation->getError('alamat')) : null ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
                                    <div class="row">
                                        <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>