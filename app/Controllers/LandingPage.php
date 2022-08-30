<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\JurnalModel;
use App\Models\DisplayModel;
use App\Models\FasilitasModel;
use App\Models\InfoModel;
use App\Models\KegiatanModel;
use App\Models\LeadModel;
use App\Models\TentangModel;

class LandingPage extends BaseController
{
    public function __construct()
    {
        $this->jurnal = new JurnalModel();
        $this->jadwal = new JadwalModel();
        $this->display = new DisplayModel();
        $this->lead = new LeadModel();
        $this->tentang = new TentangModel();
        $this->kegiatan = new KegiatanModel();
        $this->fasilitas = new FasilitasModel();
        $this->info = new InfoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pesantren',
            'display' => $this->display->first(),
            'lead' => $this->lead->first(),
            'tentang' => $this->tentang->first(),
            'kegiatan' => $this->kegiatan->findAll(),
            'fasilitas' => $this->fasilitas->findAll(),
            'info' => $this->info->findAll(),
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

    public function Detailkegiatan($slug)
    {
        $data = [
            'title' => ' Detail Jurnal Ta’lim',
            'dataKegiatan' => $this->kegiatan->getSlug($slug),
        ];

        return view('LandingPage/Kegiatan/index', $data);
    }
}
