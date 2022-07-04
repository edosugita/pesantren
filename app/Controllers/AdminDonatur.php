<?php

namespace App\Controllers;

class AdminDonatur extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Donatur'
        ];

        return view('Admin/Donatur/index', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Donatur'
        ];

        return view('Admin/Donatur/editDonatur', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Donatur'
        ];

        return view('Admin/Donatur/deleteDonatur', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Donatur'
        ];

        return view('Admin/Donatur/cetakDonatur', $data);
    }
}
