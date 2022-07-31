<?php

namespace App\Controllers;

use App\Models\IndukSantriModel;
use App\Models\InfaqModel;
use App\Models\SemesterModel;

class AdminInfaq extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->indukSantri = new IndukSantriModel();
        $this->semester = new SemesterModel();
        $this->infaqSantri = new InfaqModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Infaq Santri',
            'infaqSantri' => $this->infaqSantri->findSum(),
        ];

        return view('Admin/Infaq/index', $data);
    }

    public function view($id)
    {
        $data = [
            'title' => 'Infaq Santri',
            'infaqSantri' => $this->infaqSantri->findJoinAll($id),
        ];

        return view('Admin/Infaq/view', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Infaq',
            'dataSantri' => $this->indukSantri->findJoinAll(),
            'semester' => $this->semester->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIS harus di isi',
                    ],
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'tgl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'semester' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Semester harus di isi',
                    ],
                ],
                'nominal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nominal harus di isi',
                    ],
                ],
                'status' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                if ($this->request->getVar('nama') === 'null' || $this->request->getVar('semester') === 'null') {
                    return redirect()->back()->with('fail', 'Nama Santri atau Semester harus di isi');
                }

                $hasilTgl = date("Y-m-d", strtotime($this->request->getVar('tgl')));

                // dd($hasilTgl);

                $newData = [
                    'nis' => $this->request->getVar('nis'),
                    'id_semester' => $this->request->getVar('semester'),
                    'nominal' => str_replace(".", "", $this->request->getVar('nominal')),
                    'tgl' => $hasilTgl,
                    'status' => $this->request->getVar('status'),
                ];

                // dd($newData);

                $query = $this->infaqSantri->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/infaq')->with('modalSuccess', 'Data Infaq Berhasil Ditambah');
                }
            }
        }

        return view('Admin/Infaq/add', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Infaq',
            'infaqSantri' => $this->infaqSantri->findOneJoinAll($id),
            'semester' => $this->semester->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIS harus di isi',
                    ],
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'tgl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'semester' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Semester harus di isi',
                    ],
                ],
                'nominal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nominal harus di isi',
                    ],
                ],
                'status' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                if ($this->request->getVar('nama') === 'null' || $this->request->getVar('semester') === 'null') {
                    return redirect()->back()->with('fail', 'Nama Santri atau Semester harus di isi');
                }

                $hasilTgl = date("Y-m-d", strtotime($this->request->getVar('tgl')));
                // dd($hasilTgl);

                $newData = [
                    'nis' => $this->request->getVar('nis'),
                    'id_semester' => $this->request->getVar('semester'),
                    'nominal' => str_replace(".", "", $this->request->getVar('nominal')),
                    'tgl' => $hasilTgl,
                    'status' => $this->request->getVar('status'),
                ];

                // dd($newData);

                $query = $this->infaqSantri->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/infaq/' . $this->request->getVar('nis') . '/view')->with('modalSuccess', 'Data Infaq Berhasil Diperbarui');
                }
            }
        }

        return view('Admin/Infaq/edit', $data);
    }

    public function delete()
    {
        $data = [
            'title' => 'Delete Infaq'
        ];

        return view('Admin/Infaq/delete', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Infaq'
        ];

        return view('Admin/Infaq/cetak', $data);
    }
}
