<?php

namespace App\Controllers;

use App\Models\MutasiModel;

class AdminMutasi extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->mutasi = new MutasiModel();
    }

    public function index()
    {
        $pemasukan = $this->mutasi->findPemasukan();
        $pengeluaran = $this->mutasi->findPengeluaran();

        $pem = $pemasukan[0]['nominal'] == null ? '0' : $pemasukan[0]['nominal'];
        $pen =  $pengeluaran[0]['nominal'] == null ? '0' : $pengeluaran[0]['nominal'];

        $data = [
            'title' => 'Mutasi',
            'dataMutasi' => $this->mutasi->findAll(),
            'dataPemasukan' => $pemasukan,
            'dataPengeluaran' => $pengeluaran,
            'dataDebit' => $pem - $pen,
        ];

        return view('Admin/Mutasi/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Edit Mutasi'
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'nominal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nominal harus di isi',
                    ],
                ],
                'tgl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'jenis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $hasilTgl = date("Y-m-d", strtotime($this->request->getVar('tgl')));

                $newData = [
                    'nama' => $this->request->getVar('nama'),
                    'nominal' => str_replace(".", "", $this->request->getVar('nominal')),
                    'tanggal' => $hasilTgl,
                    'jenis' => $this->request->getVar('jenis'),
                ];

                // dd($newData);

                $query = $this->mutasi->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/mutasi')->with('modalSuccess', 'Berhasil Menambah Data Mutasi');
                }
            }
        }

        return view('Admin/Mutasi/add', $data);
    }

    public function view($id)
    {
        $data = [
            'title' => 'Data Mutasi',
            'dataMutasi' => $this->mutasi->find($id),
        ];
        return view('Admin/Mutasi/view', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Mutasi'
        ];

        return view('Admin/Mutasi/cetakMutasi', $data);
    }
}
