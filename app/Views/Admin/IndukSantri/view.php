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
                        <h5>View Data Induk Santri</h5>
                    </div>
                    <hr>
                    <div class="m-t-10">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Data Santri</h6>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><?= $dataSantri[0]['nama_santri'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIS</td>
                                                        <td><?= $dataSantri[0]['nis'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir</td>
                                                        <td><?= $dataSantri[0]['tmp_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td><?= $dataSantri[0]['tgl_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Semester</td>
                                                        <td><?= $dataSantri[0]['semester'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><?= $dataSantri[0]['gender'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agama</td>
                                                        <td><?= $dataSantri[0]['agama'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kewarganegaraan</td>
                                                        <td><?= $dataSantri[0]['kewarganegaraan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Pendidikan</td>
                                                        <td><?= $dataSantri[0]['tmp_pendidikan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Handphone</td>
                                                        <td><?= $dataSantri[0]['no_hp_santri'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hobi</td>
                                                        <td><?= $dataSantri[0]['hobi_santri'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><?= $dataSantri[0]['alamat_santri'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-12 m-t-20">
                                        <h6>Data Ayah Kandung</h6>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><?= $dataSantri[0]['nama_ayah'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No KK</td>
                                                        <td><?= $dataSantri[0]['nik_ayah'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <td><?= $dataSantri[0]['pekerjaan_ayah'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Handphone</td>
                                                        <td><?= $dataSantri[0]['no_hp_ayah'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan</td>
                                                        <td><?= $dataSantri[0]['penghasilan_ayah'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><?= $dataSantri[0]['alamat_ayah'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Data Ibu Kandung</h6>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><?= $dataSantri[0]['nama_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No KK</td>
                                                        <td><?= $dataSantri[0]['nik_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <td><?= $dataSantri[0]['pekerjaan_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan</td>
                                                        <td><?= $dataSantri[0]['penghasilan_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No Handphone</td>
                                                        <td><?= $dataSantri[0]['no_hp_ibu'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td><?= $dataSantri[0]['alamat_ibu'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-12 m-t-20">
                                        <h6>Data Wali</h6>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Hubungan Wali</td>
                                                        <?php if ($dataSantri[0]['hubungan_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['hubungan_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <?php if ($dataSantri[0]['nama_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['nama_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>NIK</td>
                                                        <?php if ($dataSantri[0]['nik_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['nik_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <?php if ($dataSantri[0]['pekerjaan_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['pekerjaan_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan</td>
                                                        <?php if ($dataSantri[0]['penghasilan_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['penghasilan_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <?php if ($dataSantri[0]['alamat_wali'] == null) : ?>
                                                            <td>-</td>
                                                        <?php else : ?>
                                                            <td><?= $dataSantri[0]['alamat_wali'] ?></td>
                                                        <?php endif; ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH OBAT -->
<div class="modal fade" id="tambahObat">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form method="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kodeobat">Kode Obat</label>
                        <input type="text" class="form-control" id="kodeobat" placeholder="ex: KD01">
                    </div>
                    <div class="form-group">
                        <label for="namaobat">Nama Obat</label>
                        <input type="text" class="form-control" id="namaobat" placeholder="ex: Paramex">
                    </div>
                    <div class="form-group">
                        <label for="hargaobat">Harga Obat</label>
                        <input type="text" class="form-control" id="hargaobat" placeholder="ex: 100.000">
                    </div>
                    <div class="form-group">
                        <label for="satuanobat">Satuan</label>
                        <input type="text" class="form-control" id="satuanobat" placeholder="ex: PCS">
                    </div>
                    <div class="form-group">
                        <label for="penggunaanobat">Penggunaan Obat</label>
                        <input type="text" class="form-control" id="penggunaanobat" placeholder="ex: 1x Sehari">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-hover" style="border: 1px solid #336CFB; color: #336CFB;" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>