<?php

namespace App\Controllers;

class AdminMutasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mutasi'
        ];

        return view('Admin/Mutasi/index', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Mutasi'
        ];

        return view('Admin/Mutasi/editMutasi', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Mutasi'
        ];

        return view('Admin/Mutasi/deleteMutasi', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Mutasi'
        ];

        return view('Admin/Mutasi/cetakMutasi', $data);
    }
}
