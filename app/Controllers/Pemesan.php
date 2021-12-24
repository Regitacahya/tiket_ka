<?php

namespace App\Controllers;

use App\Models\PemesanModel;

class Pemesan extends BaseController
{

    protected $pemesanModel;
    public function __construct()
    {
        $this->pemesanModel = new PemesanModel();
    }

    public function index()
    {
        $pemesan = $this->pemesanModel->findAll();
        $data = [
            'title' => 'Data Pemesan',
            'pemesan' => $pemesan
        ];
        echo view('admin/pemesan/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Pemesan',
        ];
        echo view('admin/pemesan/tambahPemesan', $data);
    }
    public function simpan()
    {
        $this->pemesanModel->save([
            'nama_pemesan'          => $this->request->getVar('nama_pemesan'),
            'email'          => $this->request->getVar('email'),
            'no_telp'          => $this->request->getVar('no_telp'),
            'alamat'          => $this->request->getVar('alamat'),
        ]);
        echo '<script>
                    alert("Data Pemesan Berhasil Ditambahkan");
                    window.location="' . base_url('Pemesan') . '";
                </script>
            ';
    }

    public function edit($id_pemesan)
    {
        $pemesan = $this->pemesanModel->data_pemesan($id_pemesan);
        $data = [
            'title'    => 'Ubah Data Pemesan',
            'pemesan' => $pemesan
        ];
        echo view('admin/pemesan/editPemesan', $data);
    }
    public function update()
    {
        $id_pemesan = $this->request->getVar('id_pemesan');
        $data = [
            'nama_pemesan'  => $this->request->getVar('nama_pemesan'),
            'email'  => $this->request->getVar('email'),
            'no_telp'  => $this->request->getVar('no_telp'),
            'alamat'  => $this->request->getVar('alamat'),
        ];

        $this->pemesanModel->update_data($data, $id_pemesan);
        echo '<script>
                    alert("Data Pemesan Berhasil Diubah");
                    window.location="' . base_url('Pemesan') . '";
                </script>
            ';
    }

    public function delete($id_pemesan)
    {
        $this->pemesanModel->delete_data($id_pemesan);
        echo '<script>
                    alert("Data Pemesan Berhasil Dihapus");
                    window.location="' . base_url('Pemesan') . '";
                </script>
            ';
    }
}
