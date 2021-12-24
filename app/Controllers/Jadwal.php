<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\StasiunModel;

class Jadwal extends BaseController
{
    protected $jadwalModel;
    protected $stasiunModel;
    public function __construct()
    {
        $this->jadwalModel = new JadwalModel();
        $this->stasiunModel = new StasiunModel();
    }

    public function index()
    {
        $jadwal = $this->jadwalModel->data_jadwal();
        $data = [
            'title' => 'Data Jadwal',
            'jadwal' => $jadwal
        ];
        echo view('admin/jadwal/index2', $data);
    }

    public function detail($id_ka)
    {
        // $stasiun = $this->stasiunModel->getStasiun();
        $jadwal = $this->jadwalModel->getJdwlDetail($id_ka);
        $data['jadwal'] = $jadwal[0];
        // $data = [
        //     'jadwal' => $jadwal,
        //     'asal' => $stasiun, 'tujuan' => $stasiun
        // ];
        echo view('admin/jadwal/detailJadwal', $data);
    }

    public function tambah()
    {
        $stasiun = $this->stasiunModel->getStasiun();
        $data = [
            'title' => 'Tambah Data Jadwal Tiket',
            'asal' => $stasiun, 'tujuan' => $stasiun
        ];
        echo view('admin/jadwal/tambahJadwal2', $data);
    }
    public function simpan()
    {
        $this->jadwalModel->save([
            'nama_ka'        => $this->request->getVar('nama_ka'),
            'asal'           => $this->request->getVar('asal'),
            'tujuan'         => $this->request->getVar('tujuan'),
            'tgl_berangkat'  => $this->request->getVar('tgl_berangkat'),
            'tgl_sampai'     => $this->request->getVar('tgl_sampai'),
            'jam_berangkat'  => $this->request->getVar('jam_berangkat'),
            'jam_tiba'       => $this->request->getVar('jam_tiba'),
            'kelas'          => $this->request->getVar('kelas'),
            'harga'          => $this->request->getVar('harga'),
            'stok'           => $this->request->getVar('stok')
        ]);
        echo '<script>
            alert("Data berhasil ditambahkan");
            window.location="' . base_url('Jadwal') . '"
        </script>';
    }

    public function edit($id_ka)
    {
        $stasiun = $this->stasiunModel->getStasiun();
        $jadwal = $this->jadwalModel->data_jadwal($id_ka)[0];
        $data = [
            'title'    => 'Ubah Data Jadwal Tiket',
            'jadwal' => $jadwal,
            'asal' => $stasiun, 'tujuan' => $stasiun
        ];
        echo view('admin/jadwal/editJadwal2', $data);
    }
    public function update()
    {
        $id_ka = $this->request->getVar('id_ka');
        $data = [
            'nama_ka'        => $this->request->getVar('nama_ka'),
            'asal'           => $this->request->getVar('asal'),
            'tujuan'         => $this->request->getVar('tujuan'),
            'tgl_berangkat'  => $this->request->getVar('tgl_berangkat'),
            'tgl_sampai'     => $this->request->getVar('tgl_sampai'),
            'jam_berangkat'  => $this->request->getVar('jam_berangkat'),
            'jam_tiba'       => $this->request->getVar('jam_tiba'),
            'kelas'          => $this->request->getVar('kelas'),
            'harga'          => $this->request->getVar('harga'),
            'stok'           => $this->request->getVar('stok')
        ];

        $this->jadwalModel->update_data($data, $id_ka);
        echo '<script>
            alert("Data berhasil diubah");
            window.location="' . base_url('Jadwal') . '"
        </script>';
    }

    public function delete($id_ka)
    {
        $this->jadwalModel->delete_data($id_ka);
        echo '<script>
            alert("Data berhasil dihapus");
            window.location="' . base_url('Jadwal') . '"
        </script>';
    }
    // public function __construct()
    // {
    //     helper(['form', 'url']);
    //     $this->jdwlModel = new JadwalModel();
    //     $this->stasiunModel = new StasiunModel();
    // }
    // public function index()
    // {
    //     $jdwl = $this->jdwlModel->getJdwlStasiun();
    //     $data = ['jdwl' => $jdwl];
    //     echo view('admin/jadwal/index', $data);
    // }

    // public function detail($id_ka)
    // {
    //     /* $jdwl = $this->jdwlModel->getJdwlStasiunDetail($id_ka);
    //     $data['jdwl'] = $jdwl[0]; */
    //     helper(['form', 'url']);
    //     $stasiun = $this->stasiunModel->getStasiun();
    //     $data = [
    //         'jdwl' => $this->jdwlModel->getJdwlStasiun($id_ka)[0],
    //         'asal' => $stasiun, 'tujuan' => $stasiun
    //     ];
    //     echo view('admin/jadwal/detailJadwal', $data);
    // }

    // public function add()
    // {
    //     $data = array(
    //         'id_ka'          => '',
    //         'nama_ka'        => $this->request->getPost('nama_ka'),
    //         'asal'           => $this->request->getPost('asal'),
    //         'tujuan'         => $this->request->getPost('tujuan'),
    //         'tgl_berangkat'  => $this->request->getPost('tgl_berangkat'),
    //         'tgl_sampai'       => $this->request->getPost('tgl_sampai'),
    //         'jam_berangkat'  => $this->request->getPost('jam_berangkat'),
    //         'jam_tiba'       => $this->request->getPost('jam_tiba'),
    //         'kelas'          => $this->request->getPost('kelas'),
    //         'harga'          => $this->request->getPost('harga'),
    //         'stok'           => $this->request->getPost('stok')
    //     );
    //     $this->jdwlModel->saveJdwl($data);
    //     echo '<script>
    //         alert("Data berhasil ditambahkan");
    //         window.location="' . base_url('Jadwal') . '"
    //     </script>';
    // }

    // public function delete($id_ka)
    // {
    //     $this->jdwlModel->deleteJadwal($id_ka);
    //     return redirect()->to('/jadwal');
    // }

    // public function edit($id_ka) //Untuk Menampilkan
    // {
    //     helper(['form', 'url']);
    //     $stasiun = $this->stasiunModel->getStasiun();
    //     $jdwl = $this->jdwlModel->getJdwlStasiun($id_ka)[0];
    //     $data = [
    //         'jdwl' => $jdwl,
    //         'asal' => $stasiun, 'tujuan' => $stasiun
    //     ];
    //     // $data = ['data' => $jdwlModel->find($id_ka)];
    //     return view('admin/jadwal/editJadwal', $data);
    // }
    // public function update() //Untuk Melakukan Proses Updatenya
    // {
    //     $jdwlModel = new JadwalModel();
    //     $id_ka = $this->request->getVar('id_ka');
    //     $data = array(
    //         'nama_ka'        => $this->request->getVar('nama_ka'),
    //         'asal'           => $this->request->getVar('asal'),
    //         'tujuan'         => $this->request->getVar('tujuan'),
    //         'tgl_berangkat'  => $this->request->getVar('tgl_berangkat'),
    //         'tgl_sampai'       => $this->request->getVar('tgl_sampai'),
    //         'jam_berangkat'  => $this->request->getVar('jam_berangkat'),
    //         'jam_tiba'       => $this->request->getVar('jam_tiba'),
    //         'kelas'          => $this->request->getVar('kelas'),
    //         'harga'          => $this->request->getVar('harga'),
    //         'stok'           => $this->request->getVar('stok')
    //     );
    //     $jdwlModel->edit($data, $id_ka);
    //     echo '<script>
    //             alert("Data berhasil diubah");
    //             window.location="' . base_url('Jadwal') . '"
    //         </script>';
    // }
    // public function input()
    // {
    //     $periksa = $this->validate(
    //         [
    //             'nama_ka' => 'required',
    //             'asal' => 'required',
    //             'tujuan' => 'required',
    //             'tgl_berangkat' => 'required',
    //             'tgl_sampai' => 'required',
    //             'jam_berangkat' => 'required',
    //             'jam_tiba' => 'required',
    //             'kelas' => 'required',
    //             'harga' => 'required',
    //             'stok' => 'required',
    //         ],
    //         [
    //             'nama_ka' => [
    //                 'required' => 'Nama Kereta wajib diisi',
    //             ],
    //             'asal' => [
    //                 'required' => 'Stasiun asal wajib diisi',
    //             ]
    //         ]
    //     );

    //     $stasiun = $this->stasiunModel->getStasiun();


    //     if (!$periksa) {
    //         /* echo view('mahasiswa/Signup', [
    //             'validation' => $this->validator, 'kota'=>$kota
    //         ]); */

    //         echo view('admin/jadwal/tambahJadwal', [
    //             'validation' => $this->validator, 'asal' => $stasiun, 'tujuan' => $stasiun
    //         ]);
    //     } else {
    //         $this->add(); //tambahkan method add
    //     }
    // }
}
