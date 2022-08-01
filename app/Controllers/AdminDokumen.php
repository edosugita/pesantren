<?php

namespace App\Controllers;

class AdminDokumen extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $data = [
            'title' => 'Dokumen',
        ];

        return view('Admin/Dokumen/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Dokumen',
        ];

        return view('Admin/Dokumen/add', $data);
    }

    public function instansi()
    {
        $data = [
            'title' => 'Tambah Dokumen Instansi',
        ];

        return view('Admin/Dokumen/instansi', $data);
    }
}
