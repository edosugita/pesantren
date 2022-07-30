<?=
$this->extend('Layout/Auth/templates');
$this->section('content');
?>

<div class="app">
    <div class="auth-left">
        <div class="left-top">

        </div>
        <div class="left-center">
            <div class="left-text" style="margin-bottom: 0px;">
                <div class="left-top" style="margin-bottom: 20px;">
                    <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="">
                </div>
                <h2>Daftar Menjadi Santri</h2>
                <p>Siap menjadi perubah dan penutur zaman?</p>
            </div>

            <div class="left-form">
                <div class="form-group">
                    <button class="btn btn-santri btn-hover-santri" onclick="location.href='<?= base_url('/registrasi/add') ?>'">Daftar</button>
                </div>
            </div>
        </div>
        <div class="left-bottom">
            <p>Copyright © <?= date('Y'); ?> Pesantren Al-Mukmin.</p>
        </div>
    </div>
    <div class="auth-right">

    </div>
</div>

<?= $this->endSection(); ?>