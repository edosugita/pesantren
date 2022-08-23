<?=
$this->extend('Layout/Admin/templates');
$this->section('css');
?>

<link rel="stylesheet" href="<?= base_url('assets/css/landingpage.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/adminLanding.css') ?>">

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- START ALERT -->
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
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show">
                                <?= session()->getFlashdata('success'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('modalSuccess'))) : ?>
                        <div class="modal fade" id="infaq-santri">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="border-radius: 12px; overflow:hidden;">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="<?= base_url('/assets/img/success-image.svg') ?>" class="mb-5">
                                        <h5>Data berhasil di proses</h5>
                                        <p><?= session()->getFlashdata('modalSuccess') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- STOP ALERT -->

                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <form action="" method="post">
                                <div class="d-flex">
                                    <input class="display-4 display-input" type="text" placeholder="Title" value="<?= $display['display'] ?>">
                                    <button class="btn btn-primary display-button">Save</button>
                                </div>
                            </form>
                            <form action="" method="post">
                                <div class="d-flex">
                                    <input class="lead display-input" type="text" placeholder="Sub Title" value="<?= $lead['lead'] ?>">
                                    <button class="btn btn-primary display-button">Save</button>
                                </div>
                            </form>
                            <button class="btn-regis mt-4">Daftar Sekarang</button>
                        </div>
                    </div>

                    <section class="lp-mobile-view">
                        <div class="container">
                            <h4>Mari Bergabung Bersama <span style="color: #038456;">Kami</span></h4>
                            <p>Generasi hebat, Generasi tangguh Jaya Jaya Jaya!</p>
                            <button class="btn-m-register">Daftar Sekarang</button>
                        </div>
                    </section>

                    <div class=" container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 info-panel">
                                <div class="row">
                                    <div class="col-sm col-6 text-center">
                                        <img src="<?= base_url('assets/img/icon-user-info.png') ?>" alt="Icon Naungan">
                                        <h6 class="mt-3">Dibawah naungan <br> Gus Naim</h6>
                                        <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                    </div>
                                    <div class="col-sm col-6 text-center">
                                        <img src="<?= base_url('assets/img/icon-book-info.png') ?>" alt="Icon Kajian">
                                        <h6 class="mt-3">Kajian <br> Kitab Rutin</h6>
                                        <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                    </div>
                                    <div class="col-sm col-6 text-center">
                                        <img src="<?= base_url('assets/img/icon-layer-info.png') ?>" alt="Icon Kurikulum">
                                        <h6 class="mt-3">Terintegrasi kurikulum <br> terbaru</h6>
                                        <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                    </div>
                                    <div class="col-sm col-6 text-center">
                                        <img src="<?= base_url('assets/img/icon-graph-info.png') ?>" alt="Icon Perkembangan">
                                        <h6 class="mt-3">Pemantauan <br> Perkembangan</h6>
                                        <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row about-me">
                            <div class="col-lg-12">
                                <div class="row align-items-center phone-ver">
                                    <div class="col-md">
                                        <h4 style="font-weight: 600;">Tentang Kami</h4>
                                        <form action="" method="post">
                                            <div class="d-flex">
                                                <textarea class="display-input" rows="10" cols="50"><?= $tentang['tentang'] ?></textarea>
                                                <button class="btn btn-primary display-button">Save</button>
                                            </div>
                                        </form>
                                        <p class="mt-3"> </p>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md">
                                        <img class="img-about" src="<?= base_url('assets/img/img-about.png') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="jumbotron-kegiatan">
                        <div class="container">
                            <div class="display-kegiatan">
                                <h4 style="font-weight: 600;">Kegiatan</h4>
                                <button class="btn btn-primary">Add</button>
                            </div>
                            <div class="lead-kegiatan">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="box-kegiatan">
                                            <div class="text-kegiatan-active">
                                                <span>Kajian Rutin</span>
                                                <span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="box-kegiatan">
                                            <div class="text-kegiatan">
                                                <span>Membaca Quran</span>
                                                <span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="box-kegiatan">
                                            <div class="text-kegiatan">
                                                <span>Mengajar TPQ</span>
                                                <span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="box-kegiatan">
                                            <div class="text-kegiatan">
                                                <span>Olahraga</span>
                                                <span>
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h4 style="font-weight: 600;">Fasilitas</h4>
                        <button class="btn btn-primary">Add</button>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="box-fasil">
                                <div class="title-fasil">
                                    <svg width="43" height="40" viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.0084 6.19806C21.8727 6.07095 21.6923 6 21.5046 6C21.3168 6 21.1364 6.07095 21.0007 6.19806L4.22777 21.895C4.15654 21.9618 4.09987 22.042 4.06119 22.1308C4.02251 22.2196 4.00262 22.3152 4.00273 22.4118L4 37.1439C4 37.9014 4.30716 38.6278 4.85392 39.1635C5.40067 39.6991 6.14223 40 6.91545 40H15.6709C16.0575 40 16.4283 39.8495 16.7017 39.5817C16.9751 39.3139 17.1286 38.9507 17.1286 38.5719V26.4335C17.1286 26.2442 17.2054 26.0625 17.3421 25.9286C17.4788 25.7947 17.6642 25.7195 17.8575 25.7195H25.1461C25.3394 25.7195 25.5248 25.7947 25.6615 25.9286C25.7982 26.0625 25.875 26.2442 25.875 26.4335V38.5719C25.875 38.9507 26.0286 39.3139 26.302 39.5817C26.5753 39.8495 26.9461 40 27.3327 40H36.0845C36.8578 40 37.5993 39.6991 38.1461 39.1635C38.6928 38.6278 39 37.9014 39 37.1439V22.4118C39.0001 22.3152 38.9802 22.2196 38.9415 22.1308C38.9029 22.042 38.8462 21.9618 38.775 21.895L22.0084 6.19806Z" fill="#038556" />
                                        <path d="M42.5439 18.5613L35.8431 12.3004V2.79972C35.8431 2.42846 35.6921 2.0724 35.4233 1.80987C35.1545 1.54735 34.7899 1.39986 34.4098 1.39986H30.1098C29.7297 1.39986 29.3651 1.54735 29.0963 1.80987C28.8275 2.0724 28.6765 2.42846 28.6765 2.79972V5.59945L23.4878 0.754175C23.0023 0.274723 22.2803 0 21.5 0C20.7224 0 20.0022 0.274723 19.5166 0.75505L0.462283 18.5595C-0.0949241 19.0845 -0.164799 19.948 0.342241 20.5167C0.469567 20.6603 0.625468 20.777 0.800458 20.8598C0.975447 20.9427 1.16586 20.9899 1.36012 20.9985C1.55438 21.0072 1.74841 20.9772 1.93041 20.9103C2.11241 20.8434 2.27857 20.7411 2.41878 20.6095L21.0073 3.26168C21.1406 3.13707 21.3181 3.06753 21.5027 3.06753C21.6872 3.06753 21.8647 3.13707 21.9981 3.26168L40.5883 20.6095C40.8622 20.8659 41.229 21.0059 41.6083 20.9987C41.9877 20.9915 42.3486 20.8377 42.612 20.571C43.1621 20.0145 43.1164 19.0959 42.5439 18.5613Z" fill="#038556" />
                                    </svg>
                                    <h6>Tempat Tinggal Nyaman</h6>
                                </div>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui suscipit mi quis blandit sodales. Praesent faucibus magna libero, vel tempus arcu bibendum quis. </p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" style="margin-right: 10px;"><i class="anticon anticon-edit"></i></button>
                                    <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box-fasil">
                                <div class="title-fasil">
                                    <svg width="42" height="30" viewBox="0 0 42 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 8.78155L3.81818 12.6394C13.3064 3.05256 28.6936 3.05256 38.1818 12.6394L42 8.78155C30.4118 -2.92718 11.6073 -2.92718 0 8.78155ZM15.2727 24.2131L21 30L26.7273 24.2131C23.5773 21.0111 18.4418 21.0111 15.2727 24.2131ZM7.63636 16.4973L11.4545 20.3552C16.7236 15.0313 25.2764 15.0313 30.5455 20.3552L34.3636 16.4973C26.9945 9.0516 15.0245 9.0516 7.63636 16.4973Z" fill="#038556" />
                                    </svg>
                                    <h6>Wifi Cepat dan Luas</h6>
                                </div>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui suscipit mi quis blandit sodales. Praesent faucibus magna libero, vel tempus arcu bibendum quis. </p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" style="margin-right: 10px;"><i class="anticon anticon-edit"></i></button>
                                    <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box-fasil">
                                <div class="title-fasil">
                                    <svg width="28" height="40" viewBox="0 0 28 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.8867 0.411207C14.7771 0.282245 14.6412 0.178718 14.4883 0.107736C14.3353 0.0367537 14.1689 0 14.0005 0C13.8321 0 13.6657 0.0367537 13.5127 0.107736C13.3597 0.178718 13.2238 0.282245 13.1143 0.411207C10.0363 4.04093 0 16.5896 0 25.885C0 34.5471 5.40944 40 14 40C22.5906 40 28 34.5471 28 25.885C28 16.5896 17.9637 4.04093 14.8867 0.411207V0.411207ZM15.5556 34.9029C15.3687 34.9033 15.1845 34.8585 15.0184 34.7721C14.8523 34.6858 14.7092 34.5605 14.6012 34.4068C14.4931 34.2531 14.4233 34.0755 14.3975 33.8889C14.3717 33.7023 14.3908 33.5122 14.4531 33.3346C14.5326 33.1028 14.6827 32.9023 14.8818 32.7615C15.081 32.6207 15.3191 32.5468 15.5624 32.5504C17.1066 32.547 18.5867 31.927 19.6786 30.8261C20.7706 29.7252 21.3856 28.2329 21.3889 26.676C21.3853 26.4308 21.4586 26.1907 21.5982 25.9899C21.7379 25.789 21.9368 25.6378 22.1667 25.5576C22.3428 25.4948 22.5314 25.4755 22.7165 25.5015C22.9015 25.5275 23.0777 25.5979 23.2302 25.7069C23.3826 25.8158 23.5069 25.9601 23.5925 26.1275C23.6782 26.295 23.7226 26.4807 23.7222 26.6691C23.7199 28.8521 22.8587 30.9451 21.3277 32.4887C19.7967 34.0323 17.7208 34.9006 15.5556 34.9029Z" fill="#038556" />
                                    </svg>
                                    <h6>Air Bersih</h6>
                                </div>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui suscipit mi quis blandit sodales. Praesent faucibus magna libero, vel tempus arcu bibendum quis. </p>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary" style="margin-right: 10px;"><i class="anticon anticon-edit"></i></button>
                                    <button class="btn btn-danger"><i class="anticon anticon-delete"></i></button>
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

<?= $this->endSection(); ?>