<?php

namespace App\Controllers;

use App\Models\JurnalModel;
use App\Models\KategoriModel;

class AdminJurnal extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->kategori = new KategoriModel();
        $this->jurnal = new JurnalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jurnal Talim',
            'dataJurnal' => $this->jurnal->findJoinAll(),
        ];

        return view('Admin/JurnalTalim/index', $data);
    }

    public function view($slug)
    {
        $data = [
            'title' => 'Jurnal Talim',
            'dataJurnal' => $this->jurnal->getSlug($slug),
        ];

        return view('Admin/JurnalTalim/view', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Jurnal Talim',
            'dataKategori' => $this->kategori->findAll(),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'penulis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama penulis harus di isi',
                    ],
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ketegori harus di pilih',
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

                $a = $this->request->getVar('kategori');
                $kategori = $this->kategori->getIdKategori($a);

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
                    'id_kategori' => $kategori[0]['id'],
                    'penulis' => $this->request->getVar('penulis'),
                    'gambar' => $namaSampul,
                    'articel' => $articel,
                    'tgl_jurnal' => date('Y-m-d'),
                ];

                // dd($newData);

                $query = $this->jurnal->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/jurnal-talim')->with('modalSuccess', 'Jurnal Telah Berhasil di Tambahkan!');
                }
            }
        }

        return view('Admin/JurnalTalim/add', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Jurnal Talim',
            'dataKategori' => $this->kategori->findAll(),
            'dataJurnal' => $this->jurnal->find($id),
        ];

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Judul harus di isi',
                    ],
                ],
                'penulis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama penulis harus di isi',
                    ],
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Ketegori harus di pilih',
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

                $a = $this->request->getVar('kategori');
                $kategori = $this->kategori->getIdKategori($a);

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
                    'id_kategori' => $kategori[0]['id'],
                    'penulis' => $this->request->getVar('penulis'),
                    'gambar' => $namaSampul,
                    'articel' => $articel,
                ];

                // dd($newData);

                $query = $this->jurnal->update($id, $newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/jurnal-talim')->with('modalSuccess', 'Jurnal Telah Berhasil di Ubah!');
                }
            }
        }

        return view('Admin/JurnalTalim/edit', $data);
    }

    public function delete($id)
    {
        $gambar = $this->jurnal->find($id);
        unlink('assets/content/images/' . $gambar['gambar']);
        $this->jurnal->delete($id);
        return redirect()->to('/admin/jurnal-talim')->with('modalSuccess', 'Jurnal Telah Berhasil di Hapus!');
    }
}
