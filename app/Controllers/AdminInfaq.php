<?php

namespace App\Controllers;

class AdminInfaq extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Infaq'
        ];

        return view('Admin/Infaq/index', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Infaq'
        ];

        return view('Admin/Infaq/editInfaq', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Infaq'
        ];

        return view('Admin/Infaq/deleteInfaq', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Infaq'
        ];

        return view('Admin/Infaq/cetakInfaq', $data);
    }
}
