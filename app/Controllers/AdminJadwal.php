<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\KategoriModel;

class AdminJadwal extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->kategori = new KategoriModel();
        $this->jadwal = new JadwalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jadwal',
            'dataKategori' => $this->jadwal->findJoinAll(),
        ];

        return view('Admin/JadwalTalim/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Jadwal',
            'dataKategori' => $this->kategori->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'materi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi harus di isi',
                    ],
                ],
                'nama_kitab' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Kitab harus di isi',
                    ],
                ],
                'tgl_jadwal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori harus di isi',
                    ],
                ],
                'hari' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hari harus di isi',
                    ],
                ],
                'waktu' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status harus di isi',
                    ],
                ],
                'lokasi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Lokasi harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $hasilTgl = date("Y-m-d", strtotime($this->request->getVar('tgl_jadwal')));
                $a = $this->request->getVar('kategori');
                $kategori = $this->kategori->getIdKategori($a);

                $newData = [
                    'pembicara' => $this->request->getVar('nama'),
                    'materi' => $this->request->getVar('materi'),
                    'nama_kitab' => $this->request->getVar('nama_kitab'),
                    'id_kategori' => $kategori[0]['id'],
                    'tgl_jadwal' => $hasilTgl,
                    'hari' => $this->request->getVar('hari'),
                    'waktu' => $this->request->getVar('waktu'),
                    'tempat' => $this->request->getVar('lokasi'),
                ];

                // dd($newData);

                $query = $this->jadwal->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/jadwal-talim')->with('modalSuccess', 'Berhasil menambahkan Jadwal Ta’lim');
                }
            }
        }

        return view('Admin/JadwalTalim/add', $data);
    }

    public function edit($id)
    {
        $dataValue = $this->jadwal->find($id);
        $data = [
            'title' => 'Edit Jadwal',
            'dataJadwal' => $dataValue,
            'dataKategori' => $this->kategori->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus di isi',
                    ],
                ],
                'materi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Materi harus di isi',
                    ],
                ],
                'nama_kitab' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Kitab harus di isi',
                    ],
                ],
                'tgl_jadwal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori harus di isi',
                    ],
                ],
                'hari' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hari harus di isi',
                    ],
                ],
                'waktu' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status harus di isi',
                    ],
                ],
                'lokasi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Lokasi harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $hasilTgl = date("Y-m-d", strtotime($this->request->getVar('tgl_jadwal')));
                $a = $this->request->getVar('kategori');
                $kategori = $this->kategori->getIdKategori($a);

                $newData = [
                    'pembicara' => $this->request->getVar('nama'),
                    'materi' => $this->request->getVar('materi'),
                    'nama_kitab' => $this->request->getVar('nama_kitab'),
                    'id_kategori' => $kategori[0]['id'],
                    'tgl_jadwal' => $hasilTgl,
                    'hari' => $this->request->getVar('hari'),
                    'waktu' => $this->request->getVar('waktu'),
                    'tempat' => $this->request->getVar('lokasi'),
                ];

                // dd($newData);

                $query = $this->jadwal->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/jadwal-talim')->with('modalSuccess', 'Berhasil merubah Jadwal Ta’lim');
                }
            }
        }

        return view('Admin/JadwalTalim/edit', $data);
    }

    public function delete()
    {
        $data = [
            'title' => 'Delete Jadwal'
        ];

        return view('Admin/JadwalTalim/delete', $data);
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak Jadwal'
        ];

        return view('Admin/JadwalTalim/cetak', $data);
    }
}
