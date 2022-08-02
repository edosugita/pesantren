<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\KategoriModel;
use App\Models\KopModel;

class MasterKop extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->kop = new KopModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Kop Surat',
            'dataKop' => $this->kop->orderBy('id', 'DESC')->findAll(),
        ];

        return view('Admin/MasterKop/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Master Kop Surat',
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'nama' => $this->request->getVar('name'),
                ];

                $query = $this->kop->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/kode-surat')->with('modalSuccess', 'Data telah berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterKop/add', $data);
    }

    public function edit($id)
    {
        $admin = $this->kop->find($id);
        $data = [
            'title' => 'Edit Kop Surat | ' . $admin['nama'],
            'dataAdmin' => $admin,
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ]
                ],
            ]);
            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'nama' => $this->request->getVar('name'),
                ];

                $query = $this->kop->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/kode-surat')->with('modalSuccess', 'Data telah berhasil diperbarui!');
                }
            }
        }

        return view('Admin/MasterKop/edit', $data);
    }

    public function delete($id)
    {
        $this->kop->delete($id);
        return redirect()->to('/admin/master/kode-surat')->with('modalSuccess', 'Data Telah Berhasil di Hapus!');
    }
}
