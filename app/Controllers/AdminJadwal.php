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

    public function delete($id)
    {
        $this->jadwal->delete($id);
        return redirect()->to('/admin/jadwal-talim')->with('modalSuccess', 'Jadwal Telah Berhasil di Hapus!');
    }

    public function cetak()
    {
        $data = $this->jadwal->findJoinAll();
        $i = 1;
        $html = '<table class="table table-hover table-borderless"> <thead style="background: #CDECE1;"><tr><th>No</th><th>Pemateri</th>
                                        <th>Materi Ta’lim</th>
                                        <th>Tempat</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Tanggal Pelaksana</th></tr></thead><tbody>';
        foreach ($data as $data) {
            $html .= '<tr><td>' . $i++ . '</td><td>' . $data['pembicara'] . '</td><td>' . $data['materi'] . '</td><td>' . $data['tempat'] . '</td><td>' . $data['hari'] . '</td><td>' . $data['waktu'] . '</td><td>' . $data['tgl_jadwal'] . '</td></td></tr>';
        }

        $html .= '</tbody></table>';

        header('Content-Type:application/xls');
        header('Content-Disposition:attachment;filename=JadwalTaklim.xls');
        echo $html;
    }
}
