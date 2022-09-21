<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\AdminModel;
use App\Models\CalonSantriModel;
use App\Models\DataSantriModel;

class AdminAuth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->admin = new AdminModel();
        $this->santrireg = new DataSantriModel();
        $this->calonSantri = new CalonSantriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'name' => [
                    'rules' => 'required|is_not_unique[admin.username]',
                    'errors' => [
                        'required' => 'Username harus di isi',
                        'is_not_unique' => 'Username tidak terdaftar',
                    ]
                ],

                'password' => [
                    'rules' => 'required|min_length[3]|max_length[12]',
                    'errors' => [
                        'required' => 'Kata sandi harus di isi',
                        'min_length' => 'Kata sandi harus memiliki panjang karakter minimal 3',
                        'max_length' => 'Kata sandi harus memiliki panjang karakter maximal 12',
                    ]
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $nama = $this->request->getVar('name');
                $password = $this->request->getVar('password');

                if (!ctype_lower($nama)) {
                    session()->setFlashdata('fail', 'Username atau Kata sandi salah!');
                    return redirect()->back()->withInput();
                } else {
                    $admin_info = $this->admin->where('username', $nama)->first();
                    $check_password = Hash::check($password, $admin_info['password']);

                    if (!$check_password) {
                        session()->setFlashdata('fail', 'Kata sandi salah');
                        return redirect()->to('/admin/login')->withInput();
                    } else {
                        $check_password = Hash::check($password, $admin_info['password']);

                        if (!$check_password) {
                            session()->setFlashdata('fail', 'Username atau Kata sandi salah!');
                            return redirect()->to('/admin/login')->withInput();
                        } else {
                            $admin_id = $admin_info['id'];
                            session()->set('loggedUser', $admin_id);
                            return $this->data($admin_info);
                        }
                    }
                }
            }
        }

        return view('Auth/Admin/index', $data);
    }

    public function data($admin)
    {
        $data = [
            'id' => $admin['id'],
            'nama' => $admin['nama'],
            'username' => $admin['username'],
            'role' => $admin['role'],
        ];

        session()->set($data);
        return redirect()->to('/admin/dashboard')->with('success', 'Berhasil login');
    }

    public function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove(['loggedUser', 'id', 'nama', 'username', 'role']);
            return redirect()->to('/admin/login?access=out')->with('fail', 'Kamu berhasil keluar');
        }
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Daftar Santri',
        ];

        return view('LandingPage/Registrasi/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Daftar Santri',
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
                    session()->setFlashdata('fail', 'Penghasilan Ayah atau Ibu harus di Pilih!');
                    return redirect()->to('/registrasi/add')->withInput();
                }

                if ($this->request->getVar('nik_santri') == $this->request->getVar('nik_ayah') || $this->request->getVar('nik_santri') == $this->request->getVar('nik_ibu') || $this->request->getVar('nik_santri') == $this->request->getVar('nik_wali')) {
                    session()->setFlashdata('fail', 'NIK tidak boleh sama');
                    return redirect()->to('/registrasi/add')->withInput();
                }

                if ($this->request->getVar('nik_ayah') == $this->request->getVar('nik_santri') || $this->request->getVar('nik_ayah') == $this->request->getVar('nik_wali') || $this->request->getVar('nik_ayah') == $this->request->getVar('nik_ibu')) {
                    session()->setFlashdata('fail', 'NIK tidak boleh sama');
                    return redirect()->to('/registrasi/add')->withInput();
                }

                if ($this->request->getVar('nik_ibu') == $this->request->getVar('nik_santri') || $this->request->getVar('nik_ibu') == $this->request->getVar('nik_wali') || $this->request->getVar('nik_ibu') == $this->request->getVar('nik_ayah')) {
                    session()->setFlashdata('fail', 'NIK tidak boleh sama');
                    return redirect()->to('/registrasi/add')->withInput();
                }

                if ($this->request->getVar('nik_wali') == $this->request->getVar('nik_santri') || $this->request->getVar('nik_wali') == $this->request->getVar('nik_ibu') || $this->request->getVar('nik_wali') == $this->request->getVar('nik_ayah')) {
                    session()->setFlashdata('fail', 'NIK tidak boleh sama');
                    return redirect()->to('/registrasi/add')->withInput();
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

                $query = $this->santrireg->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    $getId = $this->santrireg->getId($this->request->getVar('nama_santri'));
                    $superNewData = [
                        'no_register' => $register,
                        'id_data' => $getId[0]['id'],
                    ];
                    $newQuery = $this->calonSantri->insert($superNewData);
                    if (!$newQuery) {
                        return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                    } else {
                        return redirect()->to('/')->with('modalSuccess', 'Registrasi Berhasil dilakukan');
                    }
                }
            }
        }

        return view('LandingPage/Registrasi/add', $data);
    }
}
