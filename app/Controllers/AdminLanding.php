<?php

namespace App\Controllers;

use App\Models\DisplayModel;
use App\Models\FasilitasModel;
use App\Models\InfoModel;
use App\Models\KegiatanModel;
use App\Models\LeadModel;
use App\Models\TentangModel;

class AdminLanding extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->display = new DisplayModel();
        $this->lead = new LeadModel();
        $this->tentang = new TentangModel();
        $this->kegiatan = new KegiatanModel();
        $this->fasilitas = new FasilitasModel();
        $this->info = new InfoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Edit Landing Page',
            'display' => $this->display->first(),
            'lead' => $this->lead->first(),
            'tentang' => $this->tentang->first(),
            'kegiatan' => $this->kegiatan->findAll(),
            'fasilitas' => $this->fasilitas->findAll(),
            'info' => $this->info->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'gambar' => [
                    'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $fileSampul = $this->request->getFile('gambar');
                $namaSampul = $fileSampul->getRandomName();
                $fileSampul->move('assets/content/images', $namaSampul);

                $slug = url_title($this->request->getVar('judul'), '-', true);

                $a = preg_replace('#<div class="ql-editor" data-gramm="false" contenteditable="true">#', '', $this->request->getVar('articel'));
                $b = preg_replace('#</div>#', '', $a);
                $c = preg_replace('#<div class="ql-clipboard" contenteditable="true" tabindex="-1">#', '', $b);
                $d = preg_replace('#<div class="ql-tooltip ql-hidden">#', '', $c);
                $e = preg_replace('#<a class="ql-preview" target="_blank" href="about:blank">(.*?)</a>#', '', $d);
                $f = preg_replace('#<a class="ql-action">(.*?)</a><a class="ql-remove">(.*?)</a>#', '', $e);
                $articel = preg_replace('#<input (.*?)>#', '', $f);

                // dd($this->request->getVar('articel'));

                $newData = [
                    'judul' => $this->request->getVar('judul'),
                    'slug' => $slug,
                    'gambar' => $namaSampul,
                    'isi' => $articel,
                ];

                // dd($newData);

                $query = $this->kegiatan->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Kegiatan Telah Berhasil di Tambahkan!');
                }
            }
        }

        return view('Admin/LandingPage/index', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() == 'post') {
            $id = $this->request->getVar('id');
            $newData = [
                'judul' => $this->request->getVar('judul'),
            ];

            if ($newData == '') {
                return redirect()->to('/admin/master/landing')->with('fail', 'Judul tidak boleh kosong!');
            } else {
                $query = $this->info->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di perbarui!');
                }
            }
        }
    }

    public function editKeg($id)
    {
        $data = [
            'title' => 'Edit Landing Page',
            'kegiatan' => $this->kegiatan->find($id),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'gambar' => [
                    'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $fileSampul = $this->request->getFile('gambar');

                if ($fileSampul->getError() == 4) {
                    $namaSampul = $this->request->getVar('gambarLama');
                } else {
                    $namaSampul = $fileSampul->getRandomName();
                    $fileSampul->move('assets/content/images', $namaSampul);
                    unlink('assets/content/images/' . $this->request->getVar('gambarLama'));
                }

                $slug = url_title($this->request->getVar('judul'), '-', true);

                $a = preg_replace('#<div class="ql-editor" data-gramm="false" contenteditable="true">#', '', $this->request->getVar('articel'));
                $b = preg_replace('#</div>#', '', $a);
                $c = preg_replace('#<div class="ql-clipboard" contenteditable="true" tabindex="-1">#', '', $b);
                $d = preg_replace('#<div class="ql-tooltip ql-hidden">#', '', $c);
                $e = preg_replace('#<a class="ql-preview" target="_blank" href="about:blank">(.*?)</a>#', '', $d);
                $f = preg_replace('#<a class="ql-action">(.*?)</a><a class="ql-remove">(.*?)</a>#', '', $e);
                $articel = preg_replace('#<input (.*?)>#', '', $f);

                $newData = [
                    'judul' => $this->request->getVar('judul'),
                    'slug' => $slug,
                    'gambar' => $namaSampul,
                    'isi' => $articel,
                ];

                // dd($newData);

                $query = $this->kegiatan->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Kegiatan Telah Berhasil di perbarui!');
                }
            }
        }

        return view('Admin/LandingPage/editKeg', $data);
    }

    public function display()
    {
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'display' => $this->request->getVar('title'),
            ];

            // dd($newData);
            $id = 1;

            $query = $this->display->update($id, $newData);

            if (!$query) {
                return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
            } else {
                return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di perbarui!');
            }
        }
    }

    public function lead()
    {
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'lead' => $this->request->getVar('title'),
            ];

            // dd($newData);
            $id = 1;

            $query = $this->lead->update($id, $newData);

            if (!$query) {
                return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
            } else {
                return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di perbarui!');
            }
        }
    }

    public function tentang()
    {
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'tentang' => $this->request->getVar('title'),
            ];

            // dd($newData);
            $id = 1;

            $query = $this->tentang->update($id, $newData);

            if (!$query) {
                return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
            } else {
                return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di perbarui!');
            }
        }
    }

    public function fasilitas()
    {
        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'isi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penjelasan fasilitas harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'judul' => $this->request->getVar('judul'),
                    'icon' => $this->request->getVar('icon'),
                    'isi' => $this->request->getVar('isi'),
                ];

                // dd($newData);

                $query = $this->fasilitas->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Fasilitas Telah Berhasil di Tambahkan!');
                }
            }
        }
    }

    public function editFasil($id)
    {
        $data = [
            'title' => 'Edit Landing Page',
            'fasilitas' => $this->fasilitas->find($id),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'isi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Penjelasan fasilitas harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                $newData = [
                    'judul' => $this->request->getVar('judul'),
                    'icon' => $this->request->getVar('icon'),
                    'isi' => $this->request->getVar('isi'),
                ];

                // dd($newData);

                $query = $this->fasilitas->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Fasilitas Telah Berhasil di Tambahkan!');
                }
            }
        }
        return view('Admin/LandingPage/editFasil', $data);
    }

    public function deleteFasil()
    {
        $id = $this->request->getVar('id');
        // dd($id);
        $this->fasilitas->delete($id);
        return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di Hapus!');
    }

    public function deleteKeg()
    {
        $id = $this->request->getVar('id');
        $this->kegiatan->delete($id);
        return redirect()->to('/admin/master/landing')->with('modalSuccess', 'Data Telah Berhasil di Hapus!');
    }
}
