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
                        <h5>Tambah Jurnal Ta’lim</h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <form action="<?= base_url('/admin/jurnal-talim/add') ?>" method="post" enctype="multipart/form-data" onsubmit="mySubmit()">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('judul')) ? 'is-invalid' : null : null ?>" placeholder="ex: Mengapa Membaca Alquran Harus dengan Tajwid dan Tartil?" name="judul" value="<?= set_value('judul') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('judul')) : null ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('penulis')) ? 'is-invalid' : null : null ?>" placeholder="ex: Suswanto" name="penulis" value="<?= set_value('penulis') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('penulis')) : null ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <div>
                                    <select class="select2" name="kategori" value="<?= set_value('') ?>">
                                        <?php foreach ($dataKategori as $data) : ?>
                                            <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label><br>
                                <div class="preview mt-3 mb-3">
                                    <img class="img-preview" alt="">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= (isset($validation)) ? ($validation->hasError('gambar')) ? 'is-invalid' : null : null ?>" id="gambar" name="gambar" onchange="previewImg()" value="<?= set_value('gambar') ?>">
                                    <div class="invalid-feedback">
                                        <?= (isset($validation)) ? ($validation->getError('gambar')) : null ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                </div>
                            </div>
                            <textarea name="articel" id="articelcontent" cols="1" rows="1" hidden></textarea>
                            <div id="editor">
                                <p>Hello World!</p>
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