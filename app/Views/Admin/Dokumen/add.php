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
                        <h5>Tambah Dokumen</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dokumen">
                                <div class="dokumen-img">
                                    <img src="<?= base_url('/assets/img/surat-instansi.svg') ?>" alt="">
                                </div>
                                <div class="dokumen-text mt-5">
                                    <p class="title">Surat Keperluan Instansi</p>
                                    <p class="text">Surat-surat terkait keperluan pesantren untuk sesama intansi atau ke pemerintahan</p>
                                </div>
                                <button type="button" class="btn btn-santri btn-hover-santri w-100" onclick="location.href='<?= base_url('/admin/dokumen/add/instansi') ?>'">Ajukan</button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dokumen">
                                <div class="dokumen-img">
                                    <img src="<?= base_url('/assets/img/surat-santri.svg') ?>" alt="">
                                </div>
                                <div class="dokumen-text mt-5">
                                    <p class="title">Surat Keperluan Santri</p>
                                    <p class="text">Surat-surat terkait keperluan santri untuk melakukan tugas pembelajaran di masyarakat</p>
                                </div>
                                <button type="button" class="btn btn-santri btn-hover-santri w-100" onclick="location.href='<?= base_url('/admin/dokumen/add/santri') ?>'">Ajukan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>