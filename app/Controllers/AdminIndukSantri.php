<?php

namespace App\Controllers;

class AdminIndukSantri extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Induk Santri'
        ];

        return view('Admin/IndukSantri/index', $data);
    }

    public function viewPage()
    {
        $data = [
            'title' => 'Induk Santri'
        ];

        return view('Admin/IndukSantri/viewIndukSantri', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Induk Santri'
        ];

        return view('Admin/IndukSantri/editIndukSantri', $data);
    }

    public function addPage()
    {
        $data = [
            'title' => 'Tambah Induk Santri'
        ];

        return view('Admin/IndukSantri/addIndukSantri', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Induk Santri'
        ];

        return view('Admin/IndukSantri/deleteIndukSantri', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Induk Santri'
        ];

        return view('Admin/IndukSantri/cetakIndukSantri', $data);
    }
}
