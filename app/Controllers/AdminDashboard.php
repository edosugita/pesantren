<?php

namespace App\Controllers;

use App\Models\CalonSantriModel;
use App\Models\DokumenInstansiModel;
use App\Models\IndukSantriModel;
use App\Models\MutasiModel;

class AdminDashboard extends BaseController
{
    public function __construct()
    {
        $this->dataSantri = new IndukSantriModel();
        $this->dataCalonSantri = new CalonSantriModel();
        $this->dokumen = new DokumenInstansiModel();
        $this->mutasi = new MutasiModel();
    }

    public function index()
    {
        $induk = $this->dataSantri->getChart();
        foreach ($induk as $data) {
            $tahun[] = $data['tahun_induk'];
            $santri[] = $data['id'];
        }

        $pemasukan = $this->mutasi->findPemasukan();
        $pengeluaran = $this->mutasi->findPengeluaran();

        $pem = $pemasukan[0]['nominal'] == null ? '0' : $pemasukan[0]['nominal'];
        $pen =  $pengeluaran[0]['nominal'] == null ? '0' : $pengeluaran[0]['nominal'];

        // dd($tahun);
        $data = [
            'title' => 'Dashboard',
            'dataSantri' => $this->dataSantri->findCount(),
            'dataCalonSantri' => $this->dataCalonSantri->findCount(),
            'dokumen' => $this->dokumen->findCount(),
            'dataPemasukan' => $pemasukan,
            'dataPengeluaran' => $pengeluaran,
            'dataDebit' => $pem - $pen,
            'tahun' => $tahun,
            'santri' => $santri,
        ];

        return view('Admin/Dashboard/index', $data);
    }

    public function chart()
    {
        $induk = $this->dataSantri->getChart();
        foreach ($induk as $data) {
            $tahun[] = $data['tahun_induk'];
            $santri[] = $data['id'];
        }

        $data = [
            'tahun' => $tahun,
            'santri' => $santri,
        ];

        echo json_encode($data);
    }
}
