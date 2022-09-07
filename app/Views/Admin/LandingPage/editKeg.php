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
                        <h5>Edit Kegiatan <b><?= $kegiatan['judul'] ?></b></h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <form action="<?= base_url('/admin/master/landing/kegiatan/edit/' . $kegiatan['id']) ?>" method="post" enctype="multipart/form-data" onsubmit="mySubmit()">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="gambarLama" value="<?= $kegiatan['gambar'] ?>">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control  <?= (isset($validation)) ? ($validation->hasError('judul')) ? 'is-invalid' : null : null ?>" placeholder="ex: Mengapa Membaca Alquran Harus dengan Tajwid dan Tartil?" name="judul" value="<?= $kegiatan['judul'] ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('judul')) : null ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label><br>
                                <div class="preview mt-3 mb-3">
                                    <img class="img-preview" src="<?= base_url('/assets/content/images/' . $kegiatan['gambar']) ?>" alt="">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= (isset($validation)) ? ($validation->hasError('gambar')) ? 'is-invalid' : null : null ?>" id="gambar" name="gambar" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= (isset($validation)) ? ($validation->getError('gambar')) : null ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar"><?= $kegiatan['gambar'] ?></label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <textarea name="articel" id="articelcontent" cols="1" rows="1" hidden></textarea>
                                <div id="editor">
                                    <?= $kegiatan['isi'] ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30">
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