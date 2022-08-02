<?php

namespace App\Controllers;

use App\Models\DonaturModel;

class AdminDonatur extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->donatur = new DonaturModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Donatur',
            'dataDonatur' => $this->donatur->orderBy('id', 'DESC')->findAll(),
        ];

        return view('Admin/Donatur/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Donatur'
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'no' => [
                    'rules' => 'required|integer|min_length[11]|max_length[13]',
                    'errors' => [
                        'required' => 'No Telepon harus di isi',
                        'integer' => 'No Telepon harus berupa angka',
                        'min_length' => 'No Telepon Ibu harus memiliki minimal 11 angka',
                        'max_length' => 'No Telepon Ibu harus memiliki maximal 13 angka',
                    ],
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alanat harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'nama' => $this->request->getVar('nama'),
                    'no_hp' => $this->request->getVar('no'),
                    'Alamat' => $this->request->getVar('alamat'),
                ];

                // dd($newData);

                $query = $this->donatur->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/donatur')->with('modalSuccess', 'Berhasil Menambah Data Donatur');
                }
            }
        }

        return view('Admin/Donatur/add', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Donatur',
            'dataDonatur' => $this->donatur->find($id),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'no' => [
                    'rules' => 'required|integer|min_length[11]|max_length[13]',
                    'errors' => [
                        'required' => 'No Telepon harus di isi',
                        'integer' => 'No Telepon harus berupa angka',
                        'min_length' => 'No Telepon Ibu harus memiliki minimal 11 angka',
                        'max_length' => 'No Telepon Ibu harus memiliki maximal 13 angka',
                    ],
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alanat harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'nama' => $this->request->getVar('nama'),
                    'no_hp' => $this->request->getVar('no'),
                    'Alamat' => $this->request->getVar('alamat'),
                ];

                // dd($newData);

                $query = $this->donatur->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/donatur')->with('modalSuccess', 'Berhasil Merubah Data Donatur');
                }
            }
        }

        return view('Admin/Donatur/edit', $data);
    }

    public function view($id)
    {
        $nama = $this->donatur->find($id);
        $data = [
            'title' => 'Data Donatur | ' . $nama['nama'],
            'dataDonatur' => $this->donatur->find($id),
        ];

        return view('Admin/Donatur/view', $data);
    }

    public function delete()
    {
        $data = [
            'title' => 'Delete Donatur'
        ];

        return view('Admin/Donatur/delete', $data);
    }

    public function cetak()
    {
        $data = $this->donatur->orderBy('id', 'DESC')->findAll();
        $i = 1;
        $html = '<table class="table table-hover table-borderless"> <thead style="background: #CDECE1;"><tr><th>No</th><th>Nama Donatur</th>
                                        <th>No Handphone</th>
                                        <th>Alamat</th></tr></thead><tbody>';
        foreach ($data as $data) {
            $html .= '<tr><td>' . $i++ . '</td><td>' . $data['nama'] . '</td><td>' . $data['no_hp'] . '</td><td>' . $data['Alamat'] . '</td></td></tr>';
        }

        $html .= '</tbody></table>';

        header('Content-Type:application/xls');
        header('Content-Disposition:attachment;filename=Donatur.xls');
        echo $html;
    }
}
