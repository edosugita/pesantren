<?php

namespace App\Controllers;

use App\Models\JurnalModel;

class LandingPage extends BaseController
{
    public function __construct()
    {
        $this->jurnal = new JurnalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pesantren'
        ];

        return view('LandingPage/index', $data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal Ta’lim',
        ];

        return view('LandingPage/jadwal', $data);
    }

    public function jurnal()
    {
        $terbaru = $this->jurnal->findMax();
        $data = [
            'title' => 'Jurnal Ta’lim',
            'dataJurnal' => $this->jurnal->findJoinAll(),
            'jurnalTerbaru' => $this->jurnal->findMaxById($terbaru['id']),
        ];

        return view('LandingPage/jurnal', $data);
    }

    public function Detailjurnal($slug)
    {
        $data = [
            'title' => ' Detail Jurnal Ta’lim',
            'dataJurnal' => $this->jurnal->getSlug($slug),
        ];

        return view('LandingPage/detail', $data);
    }
}
