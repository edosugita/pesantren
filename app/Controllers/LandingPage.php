<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
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
        $data = [
            'title' => 'Jurnal Ta’lim'
        ];

        return view('LandingPage/jurnal', $data);
    }

    public function Detailjurnal()
    {
        $data = [
            'title' => ' Detail Jurnal Ta’lim'
        ];

        return view('LandingPage/detail', $data);
    }
}
