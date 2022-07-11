<?=
$this->extend('Layout/Auth/templates');
$this->section('content');
?>

<div class="app">
    <div class="auth-left">
        <div class="left-top">
            <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="">
        </div>
        <div class="left-center">
            <div class="left-text">
                <h2>Sign in to your account</h2>
                <p>Awali Semua dengan membaca Basmallah</p>
            </div>
            <div class="left-form">
                <form action="">
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-user"></i>
                            <input type="text" class="form-control" placeholder="ex: master">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-lock"></i>
                            <input type="password" class="form-control" placeholder="password">
                            <i class="suffix-icon anticon anticon-eye"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-santri btn-hover-santri">Simpan</button>
                    </div>
                </form>
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