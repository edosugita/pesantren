<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\KategoriModel;

class MasterKategori extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Kategori',
            'dataKategori' => $this->kategori->orderBy('id', 'DESC')->findAll(),
        ];

        return view('Admin/MasterKategori/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Master Kategori',
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

                $query = $this->kategori->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/kategori')->with('modalSuccess', 'Kategori telah berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterKategori/add', $data);
    }

    public function edit($id)
    {
        $admin = $this->kategori->find($id);
        $data = [
            'title' => 'Edit Kategori | ' . $admin['nama'],
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

                $query = $this->kategori->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/kategori')->with('modalSuccess', 'Data telah berhasil diperbarui!');
                }
            }
        }

        return view('Admin/MasterKategori/edit', $data);
    }

    public function delete($id)
    {
        $this->kategori->delete($id);
        return redirect()->to('/admin/master/kategori')->with('modalSuccess', 'Data Telah Berhasil di Hapus!');
    }
}
