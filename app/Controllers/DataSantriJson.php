<?php

namespace App\Controllers;

use App\Models\IndukSantriModel;

class DataSantriJson extends BaseController
{
    public function __construct()
    {
        $this->indukSantri = new IndukSantriModel();
    }

    public function index()
    {
        $nama = $this->request->getVar('nama');

        if ($nama == 'null') {
            $data = array(
                'nis' => 'null',
            );

            echo json_encode($data);
        } else {
            $dataSantri = $this->indukSantri->getNisSantri($nama);
            $data = array(
                'nis' => $dataSantri[0]['nis'],
            );

            echo json_encode($data);
        }
    }
}
