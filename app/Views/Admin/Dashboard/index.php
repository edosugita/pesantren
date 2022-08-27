<?=
$this->extend('Layout/Admin/templates');
$this->section('content');
?>

<div class="main-content">
    <div class="row">
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
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-team"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0"><?= $dataSantri[0]['id'] ?></h2>
                            <p class="m-b-0 text-muted">Jumlah Santri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-user-add"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0"><?= $dataCalonSantri[0]['id'] ?></h2>
                            <p class="m-b-0 text-muted">Jumlah Calon Santri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                            <i class="anticon anticon-wallet"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">Rp. <?= number_format($dataDebit, 2, ',', '.') ?></h2>
                            <p class="m-b-0 text-muted">Saldo Pondok</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                            <i class="anticon anticon-folder-open"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0"><?= $dokumen[0]['id'] ?></h2>
                            <p class="m-b-0 text-muted">Dokumen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Grafik Data Santri</h5>
                    </div>
                    <div class="m-t-50" style="height: 330px">
                        <canvas class="chart" id="revenue-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="m-b-0">Keuangan</h5>
                    <div class="m-v-60 text-center" style="height: 200px">
                        <canvas class="chart" id="customers-chart"></canvas>
                    </div>
                    <div class="row border-top p-t-10">
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="media align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0" style="font-size: 21px;"><?= number_format($dataDebit, 2, ',', '.') ?></h4>
                                        <p class="m-b-0 muted">Debit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="media align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0" style="font-size: 21px;"><?= number_format($dataPemasukan[0]['nominal'], 2, ',', '.') ?></h4>
                                        <p class="m-b-0 muted">Pemasukan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="media align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <div class="m-l-5">
                                        <h4 class="m-b-0" style="font-size: 21px;"><?= number_format($dataPengeluaran[0]['nominal'], 2, ',', '.') ?></h4>
                                        <p class="m-b-0 muted">Pengeluaran</p>
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

<?= $this->section('js'); ?>
<script>
    const revenueChartConfig = new Chart(document.getElementById("revenue-chart").getContext('2d'), {
        type: 'line',
        data: {
            labels: <?= json_encode($tahun) ?>,
            datasets: [{
                label: 'Series A',
                backgroundColor: 'rgba(255, 255, 255, 0)',
                borderColor: '#3f87f5',
                pointBackgroundColor: '#3f87f5',
                pointBorderColor: '#ffffff',
                pointHoverBackgroundColor: 'rgba(63, 135, 245, 0.15)',
                pointHoverBorderColor: 'rgba(63, 135, 245, 0.15)',
                data: <?= json_encode($santri) ?>
            }]
        },
        options: {
            legend: {
                display: false
            },
            maintainAspectRatio: false,
            responsive: true,
            hover: {
                mode: 'nearest',
                intersect: true
            },
            tooltips: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    gridLines: [{
                        display: false,
                    }],
                    ticks: {
                        display: true,
                        fontColor: '#77838f',
                        fontSize: 13,
                        padding: 10
                    }
                }],
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        drawTicks: false,
                        borderDash: [3, 4],
                        zeroLineWidth: 1,
                        zeroLineBorderDash: [3, 4]
                    },
                    ticks: {
                        display: true,
                        max: 100,
                        stepSize: 20,
                        fontColor: '#77838f',
                        fontSize: 13,
                        padding: 10
                    }
                }],
            }
        }
    });

    const customersChartConfig = new Chart(document.getElementById("customers-chart").getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: ['Debit', 'Pemasukan', 'Pengeluaran'],
            datasets: [{
                label: 'Series A',
                backgroundColor: ["#05c9a7", '#886cff', '#ffc107'],
                pointBackgroundColor: ["#05c9a7", '#886cff', '#ffc107'],
                data: [<?= $dataDebit . ',' . $dataPemasukan[0]['nominal'] . ',' . $dataPengeluaran[0]['nominal'] ?>]
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 75,
            maintainAspectRatio: false
        }
    });
</script>
<?= $this->endSection(); ?>