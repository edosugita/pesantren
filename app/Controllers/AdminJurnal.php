<?php

namespace App\Controllers;

class AdminJurnal extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Jurnal Talim'
        ];

        return view('Admin/JurnalTalim/index', $data);
    }

    public function viewPage()
    {
        $data = [
            'title' => 'Jurnal Talim'
        ];

        return view('Admin/JurnalTalim/viewJurnal', $data);
    }

    public function editPage()
    {
        $data = [
            'title' => 'Edit Jurnal Talim'
        ];

        return view('Admin/JurnalTalim/editJurnal', $data);
    }

    public function deletePage()
    {
        $data = [
            'title' => 'Delete Jurnal Talim'
        ];

        return view('Admin/JurnalTalim/deleteJurnal', $data);
    }
}
