<?php

namespace App\Controllers;

use App\Models\SemesterModel;

class MasterSemester extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->semester = new SemesterModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Master Semester',
            'dataKop' => $this->semester->orderBy('id', 'DESC')->findAll(),
        ];

        return view('Admin/MasterSemester/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Master Semester',
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'name' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Semester harus di isi',
                        'integer' => 'Semester harus berupa angka'
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'tingkat' => $this->request->getVar('name'),
                ];

                $query = $this->semester->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/semester')->with('modalSuccess', 'Data telah berhasil ditambahkan!');
                }
            }
        }

        return view('Admin/MasterSemester/add', $data);
    }

    public function edit($id)
    {
        $admin = $this->semester->find($id);
        $data = [
            'title' => 'Edit Semester | ' . $admin['tingkat'],
            'dataAdmin' => $admin,
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'name' => [
                    'rules' => 'required|integer',
                    'errors' => [
                        'required' => 'Semester harus di isi',
                        'integer' => 'Semester harus berupa angka'
                    ]
                ],
            ]);
            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'tingkat' => $this->request->getVar('name'),
                ];

                $query = $this->semester->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/semester')->with('modalSuccess', 'Data telah berhasil diperbarui!');
                }
            }
        }

        return view('Admin/MasterSemester/edit', $data);
    }

    public function delete($id)
    {
        $this->semester->delete($id);
        return redirect()->to('/admin/master/semester')->with('modalSuccess', 'Data Telah Berhasil di Hapus!');
    }
}
