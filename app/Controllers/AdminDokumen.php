<?php

namespace App\Controllers;

use App\Models\DokumenInstansiModel;
use App\Models\IndukSantriModel;
use App\Models\KopModel;
use Mpdf\Mpdf;
use Mpdf\Tag\SetHtmlPageHeader;

class AdminDokumen extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->kopSurat = new KopModel();
        $this->dokumenInstansi = new DokumenInstansiModel();
        $this->indukSantri = new IndukSantriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dokumen',
            'dataInstansi' => $this->dokumenInstansi->findDesc(),
        ];

        return view('Admin/Dokumen/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Dokumen',
        ];

        return view('Admin/Dokumen/add', $data);
    }

    function getRomawi($bln)
    {
        switch ($bln) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    public function instansi()
    {
        $data = [
            'title' => 'Tambah Dokumen Instansi',
            'kopSurat' => $this->kopSurat->findAll(),
        ];

        // 002/PPAM/I/2022 ( nomor keluar surat/kode kop/bulan/tahun)

        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'instansi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Instansi harus di isi',
                    ],
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alanat harus di isi',
                    ],
                ],
                'perihal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Keperluan harus di isi',
                    ],
                ],
                'tgl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                // KODE SURAT
                $kop = $this->request->getVar('kop');
                $rbulan = $this->getRomawi(date('n'));
                $tahun = date('Y');

                // GET MAX YEAR IN DB
                $maxYear = $this->dokumenInstansi->findMaxYear();

                // GET MAX NO BY JENIS SURAT
                $maxId = $this->dokumenInstansi->findMax($kop, $tahun);
                $max = $maxId[0]['no'];


                // GENERATE

                if (date('Y', strtotime($maxYear[0]['tanggal'])) !== $tahun) {
                    $max++;
                    $no = sprintf("%03s", $max);
                } else {
                    $max++;
                    $no = sprintf("%03s", $max);
                }

                // dd($no);

                $newData = [
                    'no' => $no,
                    'nomor_surat' => $no . '/' . $kop . '/' . $rbulan . '/' . $tahun,
                    'instansi_tujuan' => $this->request->getVar('instansi'),
                    'alamat_tujuan' => $this->request->getVar('alamat'),
                    'keperluan' => $this->request->getVar('perihal'),
                    'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tgl'))),
                    'jenis_surat' => $kop,
                ];

                // dd($newData);

                $query = $this->dokumenInstansi->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/dokumen')->with('modalSuccess', 'Berhasil Merubah Data Donatur');
                }
            }
        }

        return view('Admin/Dokumen/instansi', $data);
    }

    public function santri()
    {
        $data = [
            'title' => 'Tambah Dokumen Santri',
            'kopSurat' => $this->kopSurat->findAll(),
            'dataSantri' => $this->indukSantri->findJoinAll(),
        ];

        // 002/PPAM/I/2022 ( nomor keluar surat/kode kop/bulan/tahun)

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
                        'required' => 'nama harus di isi',
                    ],
                ],
                'instansi' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Instansi harus di isi',
                    ],
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alanat harus di isi',
                    ],
                ],
                'perihal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Keperluan harus di isi',
                    ],
                ],
                'tgl' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal harus di isi',
                    ],
                ],
                'tgl_mulai' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Izin Mulai harus di isi',
                    ],
                ],
                'tgl_akhir' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Diakhiri harus di isi',
                    ],
                ],
            ]);

            if (!$validation) {
                $data['validation'] = $this->validator;
            } else {
                // KODE SURAT
                $kop = $this->request->getVar('kop');
                $rbulan = $this->getRomawi(date('n'));
                $tahun = date('Y');

                // GET MAX YEAR IN DB
                $maxYear = $this->dokumenInstansi->findMaxYear();

                // GET MAX NO BY JENIS SURAT
                $maxId = $this->dokumenInstansi->findMax($kop, $tahun);
                $max = $maxId[0]['no'];


                // GENERATE

                if ($maxYear[0]['tanggal'] !== null) {
                    if (date('Y', strtotime($maxYear[0]['tanggal'])) !== $tahun) {
                        $max++;
                        $no = sprintf("%03s", $max);
                    } else {
                        $max++;
                        $no = sprintf("%03s", $max);
                    }
                    $no;
                } else {
                    $max++;
                    $no = sprintf("%03s", $max);
                }

                $newData = [
                    'no' => $no,
                    'nomor_surat' => $no . '/' . $kop . '/' . $rbulan . '/' . $tahun,
                    'nis' => $this->request->getVar('nis'),
                    'nama' => $this->request->getVar('nama'),
                    'instansi_tujuan' => $this->request->getVar('instansi'),
                    'alamat_tujuan' => $this->request->getVar('alamat'),
                    'keperluan' => $this->request->getVar('perihal'),
                    'tanggal' => date('Y-m-d', strtotime($this->request->getVar('tgl'))),
                    'jenis_surat' => $kop,
                    'tanggal_mulai' => date('Y-m-d', strtotime($this->request->getVar('tgl_mulai'))),
                    'tanggal_akhir' => date('Y-m-d', strtotime($this->request->getVar('tgl_akhir'))),
                ];

                // dd($newData);

                $query = $this->dokumenInstansi->insert($newData);

                if (!$query) {
                    return redirect()->back()->with('fail', 'Terdapat kesalahan, silahkan coba lagi!');
                } else {
                    return redirect()->to('/admin/dokumen')->with('modalSuccess', 'Berhasil Merubah Data Donatur');
                }
            }
        }

        return view('Admin/Dokumen/santri', $data);
    }

    function getHari($hari)
    {
        switch ($hari) {
            case 'Monday':
                return "Senin";
                break;
            case 'Tuesday':
                return "Selasa";
                break;
            case 'Wednesday':
                return "Rabu";
                break;
            case 'Thursday':
                return "Kamis";
                break;
            case 'Friday':
                return "Jumat";
                break;
            case 'Saturday':
                return "Sabtu";
                break;
            case 'Sunday':
                return "Ahad";
                break;
        }
    }

    public function cetakDocument($id)
    {
        $data = $this->dokumenInstansi->find($id);

        if ($data['tanggal_mulai'] == $data['tanggal_akhir']) {
            $getHari = $this->getHari(date('l', strtotime('tanggal_mulai')));
            $getTgl = date('d F Y', strtotime('tanggal_mulai'));
        } else {
            $getHari = $this->getHari(date('l', strtotime('tanggal_mulai'))) . ' s/d ' . $this->getHari(date('l', strtotime('tanggal_akhir')));
            $getHari = date('d', strtotime('tanggal_mulai')) . ' s/d ' . date('d F Y', strtotime('tanggal_akhir'));
        }

        $mpdf = new Mpdf(['setAutoTopMargin' => 'stretch', 'setAutoBottomMargin' => 'stretch']);

        $mpdf->SetHTMLHeader('
        <div>
            
            <p style="text-align: center;">
                <span style="font-size: 14pt; font-weight: bold; font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: #000000;">PONDOK PESANTREN AL - MUKMIN</span> <br>
                <span style="font-size: 14pt; font-weight: bold; font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: #00B050;">KOTA MALANG</span> <br>
                <span style="font-size: 11pt; font-weight: Arial, Helvetica, sans-serif; color: #000000;">Nomor Statistik Ponpes: 51005730041</span> <br>
                <span style="font-size: 11pt; font-weight: Arial, Helvetica, sans-serif; color: #000000;">Yayasan  Masjid Sayyidah Nur Muhammad Mu’minah</span> <br>
                <span style="font-size: 11pt; font-weight: Arial, Helvetica, sans-serif; color: #000000;">Sekretariat: Jl. Mandalawangi No. 09  Kel. Karangbesuki, Kec.Sukun, Malang</span> <br>
            </p>
            <div style="border-bottom: 1px solid #000000; margin-bottom:1px"><span></span></div>
            <div style="border-bottom: 3px solid #000000"><span></span></div>
        </div>
        ');

        $mpdf->WriteHTML('
        <div>
            <table style="width: 100%; margin: 0 !important">
                <tbody>
                    <tr>
                        <td style="line-height: 25pt">Nomor : ' . $data['nomor_surat'] . '</td>
                        <td style="text-align: right; line-height: 25pt">Malang, ' . date('d F Y', strtotime($data['tanggal'])) . '</td>
                    </tr>
                    <tr>
                        <td style="line-height: 25pt">Perihal : ' . $data['keperluan'] . '</td>
                    </tr>
                </tbody>
            </table>
            <p></p>
            <p style="margin-bottom: 0pt !important">Yth. ' . $data['instansi_tujuan'] . '</p>
            <p style="text-indent: 36pt;">Assalamualaikum Wr.Wb</p>
            <p style="text-indent: 36pt;">Puji syukur kehadirat Allah SWT atas nikmat, rahmat ,taufik dan hidayah-Nya. Semoga</p>
            <p> sholawta serta salam tetap tercurahkan kepada Rasulullah SAW</p>
            <p></p>
            <p style="text-indent: 36pt;">Dengan hormat, sehubungan dengan kegiatan Penempatan Santri Dakwah 2022 yang akan </p>
            <p>diselenggarakan pada :</p>
            <table class="table borderless" style="margin-left: 36pt;">
                <thead>
                    <tr>
                        <td style="line-height: 25pt">Hari</td>
                        <td style="line-height: 25pt">:</td>
                        <td style="line-height: 25pt">' . $getHari . '</td>
                    </tr>
                    <tr>
                        <td style="line-height: 25pt">Tanggal</td>
                        <td style="line-height: 25pt">:</td>
                        <td style="line-height: 25pt">' . date('d F Y', strtotime($data['tanggal'])) . '</td>
                    </tr>
                    </tr>
                    <tr>
                        <td style="line-height: 25pt">Tempat</td>
                        <td style="line-height: 25pt">:</td>
                        <td style="line-height: 25pt">' . $data['alamat_tujuan'] . '</td>
                    </tr>
                </thead>
            </table>
            <p style="text-indent: 36pt;">Maka sehubungan dengan kegiatan tersebut, kami memohonkan izin untuk mahasiswa yang </p>
            <p>bernama <b>' . $data['nama'] . '</b>, tidak dapat mengikuti latihan</p>
            <p></p>
            <p style="text-indent: 36pt;">Demikian surat permohonan izin ini kami buat, atas perhatiannya kami ucapkan terima kasih</p>
            <p style="text-indent: 36pt;">Jazakumullah Akhsanal Jaza’</p>
            <p style="text-indent: 36pt;">Wassalamualaikum Wr. Wb</p>
        </div>
        ');

        $this->response->setContentType('application/pdf');
        $mpdf->Output();
    }

    public function cetak()
    {
        $data = $this->dokumenInstansi->findDesc();
        $i = 1;
        $html = '<table class="table table-hover table-borderless"> <thead style="background: #CDECE1;"><tr><th>No</th><th>No Dokumen</th>
                                        <th>Keperluan</th>
                                        <th>Tujuan</th>
                                        <th>Tanggal</th></tr></thead><tbody>';
        foreach ($data as $data) {
            $html .= '<tr><td>' . $i++ . '</td><td>' . $data['nomor_surat'] . '</td><td>' . $data['keperluan'] . '</td><td>' . $data['instansi_tujuan'] . '</td><td>' .  $data['tanggal'] . '</td></td></tr>';
        }

        $html .= '</tbody></table>';

        $this->response->setContentType('application/xls');
        header('Content-Disposition:attachment;filename=Dokumen.xls');
        echo $html;
    }
}
