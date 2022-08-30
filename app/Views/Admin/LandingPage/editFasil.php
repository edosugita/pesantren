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
                        <h5>Edit fasilitas <b><?= $fasilitas['judul'] ?></b></h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <form action="<?= base_url('/admin/master/landing/fasilitas/' . $fasilitas['id'] . '/edit') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('judul')) ? 'is-invalid' : null : null ?>" placeholder="ex: Olahraga" name="judul" value="<?= $fasilitas['judul'] ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('judul')) : null ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="m-b-15">
                                    <label>Icon</label>
                                    <select class="select2" name="icon">
                                        <option value="fa-car">Garasi</option>
                                        <option value="fa-wifi">Wifi</option>
                                        <option value="fa-home">Rumah</option>
                                        <option value="fa-clock">Jam</option>
                                        <option value="fa-bed">Kasur</option>
                                        <option value="fa-Book">Buku</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea name="isi" class="form-control" aria-label="With textarea" placeholder="ex: fasilitas yang memadai..."><?= $fasilitas['isi'] ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30 mt-4">
                                    <div class="row">
                                        <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>