<?php

namespace App\Controllers;

use App\Models\CalonSantriModel;
use App\Models\DataSantriModel;

class AdminCalonSantri extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->calonSantri = new CalonSantriModel();
        $this->dataSantri = new DataSantriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Calon Santri',
            'dataSantriReg' => $this->calonSantri->findJoinAll(),
        ];

        return view('Admin/CalonSantri/index', $data);
    }

    public function view($id)
    {
        $data = [
            'title' => 'Calon Santri',
            'dataSantriReg' => $this->calonSantri->findJoinAllById($id),
        ];

        return view('Admin/CalonSantri/view', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Calon Santri',
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getVar('nik_wali') == null || $this->request->getVar('no_wali') == null) {
                $validation = $this->validate([
                    'nama_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Santri harus di isi',
                        ]
                    ],
                    'nik_santri' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]|is_unique[data_santri.nik_santri]',
                        'errors' => [
                            'required' => 'NIK Santri harus di isi',
                            'integer' => 'NIK Santri harus berupa angka',
                            'min_length' => 'NIK Santri harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Santri harus memiliki maximal 16 angka',
                            'is_unique' => 'NIK Santri sudah terdaftar',
                        ]
                    ],
                    'tmp_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Lahir Santri harus di isi',
                        ],
                    ],
                    'tgl_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tanggal Lahir Santri harus di isi',
                        ],
                    ],
                    'semester' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Semester Santri saat ini harus di isi',
                        ],
                    ],
                    'agama' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Agama Santri harus di isi',
                        ],
                    ],
                    'gender' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis Kelamin Santri harus di isi',
                        ],
                    ],
                    'kewarganegaraan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Kewarganegaraan Santri harus di isi',
                        ],
                    ],
                    'tmp_pendidikan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Pendidikan Santri saat ini harus di isi',
                        ],
                    ],
                    'no_santri' => [
                        'rules' => 'required|integer|min_length[11]|max_length[13]',
                        'errors' => [
                            'required' => 'No Telepon Santri harus di isi',
                            'integer' => 'No Telepon Santri harus berupa angka',
                            'min_length' => 'No Telepon Santri harus memiliki minimal 11 angka',
                            'max_length' => 'No Telepon Santri harus memiliki maximal 13 angka',
                        ],
                    ],
                    'hobi' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Hobi Santri Santri harus di isi',
                        ],
                    ],
                    'alamat_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Santri harus di isi',
                        ],
                    ],
                    'nama_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ayah harus di isi',
                        ]
                    ],
                    'nik_ayah' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ayah harus di isi',
                            'integer' => 'NIK Ayah harus berupa angka',
                            'min_length' => 'NIK Ayah harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ayah harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ayah harus di isi',
                        ]
                    ],
                    'no_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ayah harus di isi',
                        ]
                    ],
                    'penghasilan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ayah harus di isi',
                        ]
                    ],
                    'alamat_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ayah harus di isi',
                        ]
                    ],
                    'nama_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ibu harus di isi',
                        ]
                    ],
                    'nik_ibu' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ibu harus di isi',
                            'integer' => 'NIK Ibu harus berupa angka',
                            'min_length' => 'NIK Ibu harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ibu harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ibu harus di isi',
                        ]
                    ],
                    'penghasilan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ibu harus di isi',
                        ]
                    ],
                    'no_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ibu harus di isi',
                        ]
                    ],
                    'alamat_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ibu harus di isi',
                        ]
                    ],
                ]);
            } else {
                $validation = $this->validate([
                    'nama_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Santri harus di isi',
                        ]
                    ],
                    'nik_santri' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]|is_unique[data_santri.nik_santri]',
                        'errors' => [
                            'required' => 'NIK Santri harus di isi',
                            'integer' => 'NIK Santri harus berupa angka',
                            'min_length' => 'NIK Santri harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Santri harus memiliki maximal 16 angka',
                            'is_unique' => 'NIK Santri sudah terdaftar',
                        ]
                    ],
                    'tmp_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Lahir Santri harus di isi',
                        ],
                    ],
                    'tgl_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tanggal Lahir Santri harus di isi',
                        ],
                    ],
                    'semester' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Semester Santri saat ini harus di isi',
                        ],
                    ],
                    'agama' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Agama Santri harus di isi',
                        ],
                    ],
                    'gender' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis Kelamin Santri harus di isi',
                        ],
                    ],
                    'kewarganegaraan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Kewarganegaraan Santri harus di isi',
                        ],
                    ],
                    'tmp_pendidikan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Pendidikan Santri saat ini harus di isi',
                        ],
                    ],
                    'no_santri' => [
                        'rules' => 'required|integer|min_length[11]|max_length[13]',
                        'errors' => [
                            'required' => 'No Telepon Santri harus di isi',
                            'integer' => 'No Telepon Santri harus berupa angka',
                            'min_length' => 'No Telepon Santri harus memiliki minimal 11 angka',
                            'max_length' => 'No Telepon Santri harus memiliki maximal 13 angka',
                        ],
                    ],
                    'hobi' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Hobi Santri Santri harus di isi',
                        ],
                    ],
                    'alamat_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Santri harus di isi',
                        ],
                    ],
                    'nama_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ayah harus di isi',
                        ]
                    ],
                    'nik_ayah' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ayah harus di isi',
                            'integer' => 'NIK Ayah harus berupa angka',
                            'min_length' => 'NIK Ayah harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ayah harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ayah harus di isi',
                        ]
                    ],
                    'no_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ayah harus di isi',
                        ]
                    ],
                    'penghasilan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ayah harus di isi',
                        ]
                    ],
                    'alamat_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ayah harus di isi',
                        ]
                    ],
                    'nama_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ibu harus di isi',
                        ]
                    ],
                    'nik_ibu' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ibu harus di isi',
                            'integer' => 'NIK Ibu harus berupa angka',
                            'min_length' => 'NIK Ibu harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ibu harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ibu harus di isi',
                        ]
                    ],
                    'penghasilan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ibu harus di isi',
                        ]
                    ],
                    'no_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ibu harus di isi',
                        ]
                    ],
                    'alamat_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ibu harus di isi',
                        ]
                    ],
                    'nik_wali' => [
                        'rules' => 'integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'integer' => 'NIK Wali harus berupa angka',
                            'min_length' => 'NIK Wali harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Wali harus memiliki maximal 16 angka',
                        ]
                    ],
                    'no_wali' => [
                        'rules' => 'integer|min_length[11]|max_length[13]',
                        'errors' => [
                            'integer' => 'No Telepon Wali harus berupa angka',
                            'min_length' => 'No Telepon Wali harus memiliki minimal 11 angka',
                            'max_length' => 'No Telepon Wali harus memiliki maximal 13 angka',
                        ]
                    ],
                ]);
            }

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                if ($this->request->getVar('penghasilan_ayah') === 'null' || $this->request->getVar('penghasilan_ibu') === 'null') {
                    return redirect()->back()->with('fail', 'Penghasilan Ayah atau Ibu harus di Pilih!');
                }

                $register = date('yd') . mt_rand(100, 999);

                $newData = [
                    'nama_santri' => $this->request->getVar('nama_santri'),
                    'nik_santri' => $this->request->getVar('nik_santri'),
                    'tmp_lahir' => $this->request->getVar('tmp_lahir'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'semester' => $this->request->getVar('semester'),
                    'gender' => $this->request->getVar('gender'),
                    'agama' => $this->request->getVar('agama'),
                    'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
                    'tmp_pendidikan' => $this->request->getVar('tmp_pendidikan'),
                    'hobi_santri' => $this->request->getVar('hobi'),
                    'no_hp_santri' => $this->request->getVar('no_santri'),
                    'alamat_santri' => $this->request->getVar('alamat_santri'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'nik_ayah' => $this->request->getVar('nik_ayah'), // Belum ada di tabel
                    'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
                    'no_hp_ayah' => $this->request->getVar('no_ayah'),
                    'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'), // Belum ada di tabel
                    'alamat_ayah' => $this->request->getVar('alamat_ayah'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'nik_ibu' => $this->request->getVar('nik_ibu'), // Belum ada di tabel
                    'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
                    'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'), // Belum ada di tabel
                    'no_hp_ibu' => $this->request->getVar('no_ibu'),
                    'alamat_ibu' => $this->request->getVar('alamat_ibu'),
                    'hubungan_wali' => $this->request->getVar('hubungan_wali'), // Belum ada di tabel
                    'nama_wali' => $this->request->getVar('nama_wali'),
                    'nik_wali' => $this->request->getVar('nik_wali'), // Belum ada di tabel
                    'pekerjaan_wali' => $this->request->getVar('pekerjaan_wali'),
                    'penghasilan_wali' => $this->request->getVar('penghasilan_wali'), // Belum ada di tabel
                    'no_hp_wali' => $this->request->getVar('no_wali'),
                    'alamat_wali' => $this->request->getVar('alamat_wali'),
                ];

                // dd($newData);

                $query = $this->dataSantri->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    $getId = $this->dataSantri->getId($this->request->getVar('nama_santri'));
                    $superNewData = [
                        'no_register' => $register,
                        'id_data' => $getId[0]['id'],
                    ];
                    $newQuery = $this->calonSantri->insert($superNewData);
                    if (!$newQuery) {
                        return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                    } else {
                        return redirect()->to('/admin/calon-santri')->with('modalSuccess', 'Registrasi berhasil dilakukan!');
                    }
                }
            }
        }

        return view('Admin/CalonSantri/add', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Calon Santri',
            'dataSantriReg' => $this->calonSantri->findJoinAllById($id),
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getVar('nik_wali') == null || $this->request->getVar('no_wali') == null) {
                $validation = $this->validate([
                    'nama_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Santri harus di isi',
                        ]
                    ],
                    'nik_santri' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]|is_unique[data_santri.nik_santri]',
                        'errors' => [
                            'required' => 'NIK Santri harus di isi',
                            'integer' => 'NIK Santri harus berupa angka',
                            'min_length' => 'NIK Santri harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Santri harus memiliki maximal 16 angka',
                            'is_unique' => 'NIK Santri sudah terdaftar',
                        ]
                    ],
                    'tmp_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Lahir Santri harus di isi',
                        ],
                    ],
                    'tgl_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tanggal Lahir Santri harus di isi',
                        ],
                    ],
                    'semester' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Semester Santri saat ini harus di isi',
                        ],
                    ],
                    'agama' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Agama Santri harus di isi',
                        ],
                    ],
                    'gender' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis Kelamin Santri harus di isi',
                        ],
                    ],
                    'kewarganegaraan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Kewarganegaraan Santri harus di isi',
                        ],
                    ],
                    'tmp_pendidikan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Pendidikan Santri saat ini harus di isi',
                        ],
                    ],
                    'no_santri' => [
                        'rules' => 'required|integer|min_length[11]|max_length[13]',
                        'errors' => [
                            'required' => 'No Telepon Santri harus di isi',
                            'integer' => 'No Telepon Santri harus berupa angka',
                            'min_length' => 'No Telepon Santri harus memiliki minimal 11 angka',
                            'max_length' => 'No Telepon Santri harus memiliki maximal 13 angka',
                        ],
                    ],
                    'hobi' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Hobi Santri Santri harus di isi',
                        ],
                    ],
                    'alamat_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Santri harus di isi',
                        ],
                    ],
                    'nama_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ayah harus di isi',
                        ]
                    ],
                    'nik_ayah' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ayah harus di isi',
                            'integer' => 'NIK Ayah harus berupa angka',
                            'min_length' => 'NIK Ayah harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ayah harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ayah harus di isi',
                        ]
                    ],
                    'no_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ayah harus di isi',
                        ]
                    ],
                    'penghasilan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ayah harus di isi',
                        ]
                    ],
                    'alamat_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ayah harus di isi',
                        ]
                    ],
                    'nama_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ibu harus di isi',
                        ]
                    ],
                    'nik_ibu' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ibu harus di isi',
                            'integer' => 'NIK Ibu harus berupa angka',
                            'min_length' => 'NIK Ibu harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ibu harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ibu harus di isi',
                        ]
                    ],
                    'penghasilan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ibu harus di isi',
                        ]
                    ],
                    'no_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ibu harus di isi',
                        ]
                    ],
                    'alamat_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ibu harus di isi',
                        ]
                    ],
                ]);
            } else {
                $validation = $this->validate([
                    'nama_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Santri harus di isi',
                        ]
                    ],
                    'nik_santri' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]|is_unique[data_santri.nik_santri]',
                        'errors' => [
                            'required' => 'NIK Santri harus di isi',
                            'integer' => 'NIK Santri harus berupa angka',
                            'min_length' => 'NIK Santri harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Santri harus memiliki maximal 16 angka',
                            'is_unique' => 'NIK Santri sudah terdaftar',
                        ]
                    ],
                    'tmp_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Lahir Santri harus di isi',
                        ],
                    ],
                    'tgl_lahir' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tanggal Lahir Santri harus di isi',
                        ],
                    ],
                    'semester' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Semester Santri saat ini harus di isi',
                        ],
                    ],
                    'agama' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Agama Santri harus di isi',
                        ],
                    ],
                    'gender' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Jenis Kelamin Santri harus di isi',
                        ],
                    ],
                    'kewarganegaraan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Kewarganegaraan Santri harus di isi',
                        ],
                    ],
                    'tmp_pendidikan' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Tempat Pendidikan Santri saat ini harus di isi',
                        ],
                    ],
                    'no_santri' => [
                        'rules' => 'required|integer|min_length[11]|max_length[13]',
                        'errors' => [
                            'required' => 'No Telepon Santri harus di isi',
                            'integer' => 'No Telepon Santri harus berupa angka',
                            'min_length' => 'No Telepon Santri harus memiliki minimal 11 angka',
                            'max_length' => 'No Telepon Santri harus memiliki maximal 13 angka',
                        ],
                    ],
                    'hobi' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Hobi Santri Santri harus di isi',
                        ],
                    ],
                    'alamat_santri' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Santri harus di isi',
                        ],
                    ],
                    'nama_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ayah harus di isi',
                        ]
                    ],
                    'nik_ayah' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ayah harus di isi',
                            'integer' => 'NIK Ayah harus berupa angka',
                            'min_length' => 'NIK Ayah harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ayah harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ayah harus di isi',
                        ]
                    ],
                    'no_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ayah harus di isi',
                        ]
                    ],
                    'penghasilan_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ayah harus di isi',
                        ]
                    ],
                    'alamat_ayah' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ayah harus di isi',
                        ]
                    ],
                    'nama_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Nama Ibu harus di isi',
                        ]
                    ],
                    'nik_ibu' => [
                        'rules' => 'required|integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'required' => 'NIK Ibu harus di isi',
                            'integer' => 'NIK Ibu harus berupa angka',
                            'min_length' => 'NIK Ibu harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Ibu harus memiliki maximal 16 angka',
                        ]
                    ],
                    'pekerjaan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Pekerjaan Ibu harus di isi',
                        ]
                    ],
                    'penghasilan_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Penghasilan Ibu harus di isi',
                        ]
                    ],
                    'no_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'No Telepon Ibu harus di isi',
                        ]
                    ],
                    'alamat_ibu' => [
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Alamat Ibu harus di isi',
                        ]
                    ],
                    'nik_wali' => [
                        'rules' => 'integer|min_length[16]|max_length[16]',
                        'errors' => [
                            'integer' => 'NIK Wali harus berupa angka',
                            'min_length' => 'NIK Wali harus memiliki minimal 16 angka',
                            'max_length' => 'NIK Wali harus memiliki maximal 16 angka',
                        ]
                    ],
                ]);
            }

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                if ($this->request->getVar('penghasilan_ayah') === 'null' || $this->request->getVar('penghasilan_ibu') === 'null') {
                    return redirect()->back()->with('fail', 'Penghasilan Ayah atau Ibu harus di Pilih!');
                }

                $newData = [
                    'nama_santri' => $this->request->getVar('nama_santri'),
                    'nik_santri' => $this->request->getVar('nik_santri'),
                    'tmp_lahir' => $this->request->getVar('tmp_lahir'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'semester' => $this->request->getVar('semester'),
                    'gender' => $this->request->getVar('gender'),
                    'agama' => $this->request->getVar('agama'),
                    'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
                    'tmp_pendidikan' => $this->request->getVar('tmp_pendidikan'),
                    'hobi_santri' => $this->request->getVar('hobi'),
                    'no_hp_santri' => $this->request->getVar('no_santri'),
                    'alamat_santri' => $this->request->getVar('alamat_santri'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'nik_ayah' => $this->request->getVar('nik_ayah'), // Belum ada di tabel
                    'pekerjaan_ayah' => $this->request->getVar('pekerjaan_ayah'),
                    'no_hp_ayah' => $this->request->getVar('no_ayah'),
                    'penghasilan_ayah' => $this->request->getVar('penghasilan_ayah'), // Belum ada di tabel
                    'alamat_ayah' => $this->request->getVar('alamat_ayah'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'nik_ibu' => $this->request->getVar('nik_ibu'), // Belum ada di tabel
                    'pekerjaan_ibu' => $this->request->getVar('pekerjaan_ibu'),
                    'penghasilan_ibu' => $this->request->getVar('penghasilan_ibu'), // Belum ada di tabel
                    'no_hp_ibu' => $this->request->getVar('no_ibu'),
                    'alamat_ibu' => $this->request->getVar('alamat_ibu'),
                    'hubungan_wali' => $this->request->getVar('hubungan_wali'), // Belum ada di tabel
                    'nama_wali' => $this->request->getVar('nama_wali'),
                    'nik_wali' => $this->request->getVar('nik_wali'), // Belum ada di tabel
                    'pekerjaan_wali' => $this->request->getVar('pekerjaan_wali'),
                    'penghasilan_wali' => $this->request->getVar('penghasilan_wali'), // Belum ada di tabel
                    'no_hp_wali' => $this->request->getVar('no_wali'),
                    'alamat_wali' => $this->request->getVar('alamat_wali'),
                ];

                // dd($newData);

                $query = $this->dataSantri->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/calon-santri')->with('modalSuccess', 'Update data calon santri berhasil dilakukan!');
                }
            }
        }

        return view('Admin/CalonSantri/edit', $data);
    }

    public function delete($id)
    {
        $this->jadwal->delete($id);
        return redirect()->to('/admin/jadwal-talim')->with('modalSuccess', 'Jadwal Telah Berhasil di Hapus!');
    }

    public function cetak()
    {
        $data = $this->calonSantri->findJoinAll();
        $i = 1;
        $html = '<table class="table table-hover table-borderless"> <thead style="background: #CDECE1;"><tr><th>No</th><th>Nama Santri</th>
                                        <th>No Reg</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No. Telp</th>
                                        <th>Alamat</th></tr></thead><tbody>';
        foreach ($data as $data) {
            $html .= '<tr><td>' . $i++ . '</td><td>' . $data['nama_santri'] . '</td><td>' . $data['no_register'] . '</td><td>' . $data['gender'] . '</td><td>' . $data['no_hp_santri'] . '</td><td>' . $data['alamat_santri'] . '</td></td></tr>';
        }

        $html .= '</tbody></table>';

        header('Content-Type:application/xls');
        header('Content-Disposition:attachment;filename=CalonSantri.xls');
        echo $html;
    }
}
