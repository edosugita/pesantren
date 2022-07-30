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

    public function edit()
    {
        $data = [
            'title' => 'Edit Jadwal'
        ];

        return view('Admin/JadwalTalim/edit', $data);
    }

    public function delete()
    {
        $data = [
            'title' => 'Delete Jadwal'
        ];

        return view('Admin/JadwalTalim/delete', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Jadwal'
        ];

        return view('Admin/JadwalTalim/cetak', $data);
    }
}
