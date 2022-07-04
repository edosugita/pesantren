<?php

namespace App\Controllers;

class AdminJadwal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jadwal'
        ];

        return view('Admin/JadwalTalim/index', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Jadwal'
        ];

        return view('Admin/JadwalTalim/editJadwal', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Jadwal'
        ];

        return view('Admin/JadwalTalim/deleteJadwal', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Jadwal'
        ];

        return view('Admin/JadwalTalim/cetakJadwal', $data);
    }
}
