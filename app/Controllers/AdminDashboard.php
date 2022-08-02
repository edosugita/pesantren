<?php

namespace App\Controllers;

use App\Models\CalonSantriModel;
use App\Models\DokumenInstansiModel;
use App\Models\IndukSantriModel;

class AdminDashboard extends BaseController
{
    public function __construct()
    {
        $this->dataSantri = new IndukSantriModel();
        $this->dataCalonSantri = new CalonSantriModel();
        $this->dokumen = new DokumenInstansiModel();
    }

    public function index()
    {
        $induk = $this->dataSantri->getChart();
        foreach ($induk as $data) {
            $tahun[] = $data['tahun_induk'];
            $santri[] = $data['id'];
        }

        // dd($tahun);
        $data = [
            'title' => 'Dashboard',
            'dataSantri' => $this->dataSantri->findCount(),
            'dataCalonSantri' => $this->dataCalonSantri->findCount(),
            'dokumen' => $this->dokumen->findCount(),
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
