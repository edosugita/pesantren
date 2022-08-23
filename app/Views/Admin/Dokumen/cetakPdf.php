<?=
$this->extend('Layout/Auth/templates');
$this->section('content');
?>

<main>
    <table class="table table-borderless">
        <thead>
            <tr>
                <td style="text-align: left;">Nomor: <?= $dataInstansi['nomor_surat'] ?></td>
                <td style="text-align: right;">Malang, <?= date('d F Y', strtotime($dataInstansi['tanggal'])) ?></td>
            </tr>
            <tr>
                <td>Perihal: <?= $dataInstansi['keperluan'] ?></td>
            </tr>
        </thead>
    </table>
    <p style="margin-left: 20px">Yth. Pelatih PSHT UIN Maliki Malang</p>
    <p>Assalamualaikum Wr.Wb</p>
    <p style="padding-left: 30px;">Puji syukur kehadirat Allah SWT atas nikmat, rahmat ,taufik dan hidayah-Nya. Semoga sholawta serta salam tetap tercurahkan kepada Rasulullah SAW</p>
</main>

<?= $this->endSection() ?>