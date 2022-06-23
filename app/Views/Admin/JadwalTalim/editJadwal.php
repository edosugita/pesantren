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
                        <h5>Edit Data Jadwal Ta’lim</h5>
                    </div>
                    <hr>
                    <form method="">

                        <div class="form-group">
                            <label>Materi Ta’lim</label>
                            <input type="text" class="form-control" placeholder="ex: Hadist">
                        </div>
                        <div class="form-group">
                            <label>Pemateri</label>
                            <input type="text" class="form-control" placeholder="ex: Gus Naim">
                        </div>
                        <div class="form-group">
                            <label>Hari</label>
                            <select class="form-control">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum’at">Jum’at</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Waktu</label>
                            <select class="form-control">
                                <option value="05.30 - 06.30">05.30 - 06.30</option>
                                <option value="11.00 - 12.00">11.00 - 12.00</option>
                                <option value="14.30 - 15.30">14.30 - 15.30</option>
                                <option value="17.00 - 18.00">17.00 - 18.00</option>
                                <option value="19.00 - 20.00">19.00 - 20.00</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end p-h-30 m-t-20">
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

<?= $this->endSection(); ?>