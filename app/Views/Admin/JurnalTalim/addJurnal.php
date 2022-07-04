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
                        <form action="">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="ex: Mengapa Membaca Alquran Harus dengan Tajwid dan Tartil?">
                            </div>
                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="number" class="form-control" placeholder="ex: Suswanto">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <div>
                                    <select class="select2" name="states[]" multiple="multiple">
                                        <option value="Al-Quran">Al-Quran</option>
                                        <option value="Hadist">Hadist</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                </div>
                            </div>
                            <div id="editor">
                                <p>Hello World!</p>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30">
                                    <div class="row">
                                        <button class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;">Cancel</button>
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