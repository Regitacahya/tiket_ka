<?php

namespace App\Controllers;

use App\Models\StasiunModel;

class Stasiun extends BaseController
{
    protected $stasiunModel;
    public function __construct()
    {
        $this->stasiunModel = new StasiunModel();
    }

    public function index()
    {
        $stasiun = $this->stasiunModel->findAll();
        $data = [
            'title' => 'Data Stasiun',
            'stasiun' => $stasiun
        ];
        echo view('admin/stasiun/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Stasiun',
        ];
        echo view('admin/stasiun/tambahStasiun', $data);
    }
    public function simpan()
    {
        $this->stasiunModel->save([
            'kode_stasiun'          => $this->request->getVar('kode_stasiun'),
            'nama_stasiun'          => $this->request->getVar('nama_stasiun'),
        ]);
        echo '<script>
                    alert("Data Stasiun Berhasil Ditambahkan");
                    window.location="' . base_url('Stasiun') . '";
                </script>
            ';
    }

    public function edit($id_stasiun)
    {
        $stasiun = $this->stasiunModel->data_stasiun($id_stasiun);
        $data = [
            'title'    => 'Ubah Data Stasiun',
            'stasiun' => $stasiun
        ];
        echo view('admin/stasiun/editStasiun', $data);
    }
    public function update()
    {
        $id_stasiun = $this->request->getVar('id_stasiun');
        $data = [
            'kode_stasiun'          => $this->request->getVar('kode_stasiun'),
            'nama_stasiun'          => $this->request->getVar('nama_stasiun'),
        ];

        $this->stasiunModel->update_data($data, $id_stasiun);
        echo '
                <script>
                    alert("Data Stasiun Berhasil Diubah");
                    window.location="' . base_url('Stasiun') . '";
                </script>
            ';
    }

    public function delete($id_stasiun)
    {
        $this->stasiunModel->delete_data($id_stasiun);
        echo '
                <script>
                    alert("Data Stasiun Berhasil Dihapus");
                    window.location="' . base_url('Stasiun') . '";
                </script>
            ';
    }
}
