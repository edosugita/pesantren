<?php

namespace App\Controllers;

class AdminCalonSantri extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Calon Santri'
        ];

        return view('Admin/CalonSantri/index', $data);
    }

    public function viewPage()
    {
        $data = [
            'title' => 'Calon Santri'
        ];

        return view('Admin/CalonSantri/viewCalonSantri', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Calon Santri'
        ];

        return view('Admin/CalonSantri/editCalonSantri', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Calon Santri'
        ];

        return view('Admin/CalonSantri/deleteCalonSantri', $data);
    }

    public function cetakPage()
    {
        $data = [
            'title' => 'Cetak Calon Santri'
        ];

        return view('Admin/CalonSantri/cetakCalonSantri', $data);
    }
}
