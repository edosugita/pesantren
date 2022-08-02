<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\JurnalModel;

class LandingPage extends BaseController
{
    public function __construct()
    {
        $this->jurnal = new JurnalModel();
        $this->jadwal = new JadwalModel();
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

        $jadwal = $this->jadwal->findAll();
        foreach ($jadwal as $data) {
            $events[] = [
                'title' => $data['materi'] . ' (' . $data['waktu'] . ')',
                'start' => $data['tgl_jadwal'],
                'end' => $data['tgl_jadwal'],
            ];
        }

        // dd($events);

        return view('LandingPage/Jadwal/index', ['title' => 'Jadwal Ta’lim', 'events' => json_encode($events)]);
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
