<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item">
                <a href="<?= base_url('/admin/dashboard') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <?php if (session()->get('role') == 'Master') : ?>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                            <i class="anticon anticon-idcard"></i>
                        </span>
                        <span class="title">Master</span>
                        <span class="arrow">
                            <i class="arrow-icon"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= base_url('/admin/master') ?>">
                                <span class="title">Master Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/master/kategori') ?>">
                                <span class="title">Master Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/master/kode-surat') ?>">
                                <span class="title">Master Kop Surat</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/master/semester') ?>">
                                <span class="title">Master Semester</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/master/landing') ?>">
                                <span class="title">Landing Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/induk-santri') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-compass"></i>
                        </span>
                        <span class="title">Induk Santri</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/calon-santri') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-hdd"></i>
                        </span>
                        <span class="title">Calon Santri</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (session()->get('role') == 'Master' || session()->get('role') == 'Bendahara') : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/infaq') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-wallet"></i>
                        </span>
                        <span class="title">Infaq</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (session()->get('role') == 'Master' || session()->get('role') == 'Sekretaris') : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/jadwal-talim') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-calendar"></i>
                        </span>
                        <span class="title">Jadwal Ta’lim</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/jurnal-talim') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-read"></i>
                        </span>
                        <span class="title">Jurnal Ta’lim</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (session()->get('role') == 'Master' || session()->get('role') == 'Bendahara') : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/mutasi') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-file-protect"></i>
                        </span>
                        <span class="title">Mutasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/donatur') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-idcard"></i>
                        </span>
                        <span class="title">Donatur</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (session()->get('role') == 'Master' || session()->get('role') == 'Sekretaris') : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/admin/dokumen') ?>">
                        <span class="icon-holder">
                            <i class="anticon anticon-folder-open"></i>
                        </span>
                        <span class="title">Dokumen</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!-- Side Nav END -->