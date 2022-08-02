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
                        <h5>Tambah Semester</h5>
                    </div>
                    <hr>
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
                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <b>Gagal&nbsp;</b>menambah data, mohon mengisi form dengan benar!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="m-t-10">
                        <form action="<?= base_url('/admin/master/semester/add') ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text" class="form-control <?= (isset($validation)) ? ($validation->hasError('name')) ? 'is-invalid' : null : null ?>" placeholder="ex: 1" name="name" value="<?= set_value('name') ?>">
                                <div class="invalid-feedback">
                                    <?= (isset($validation)) ? ($validation->getError('name')) : null ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end p-h-30">
                                    <div class="row">
                                        <button type="button" class="btn m-r-10 btn-hover-santri" style="border: 1px solid #049F67; color: #049F67;" onclick="history.go(-1);">Cancel</button>
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