<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() //localhost:8080
    {
        return view('welcome_message');
    }
    public function coba() //localhost:8080/home/coba
    {
        echo "Hello World...coba";
    }
    public function cetakNama($nama, $umur) //localhost:8080/home/cetakNama/paijo/20
    {
        echo "Nama Saya : ".$nama."</br>";
        echo "Umur Saya : ".$umur."</br>";
    }

    public function cetakView()
    {
        echo view('cetak_view');
    }
    public function cetakNamaView($nama, $umur) //localhost:8080/home/cetakNama/paijo/20
    {
        $data['nama']=$nama;
        $data['umur']=$umur;
        $data['fakultas']="SV";
        $data['prodi']="D3TI";
        echo view('cetak_nama', $data);
    }
    public function cetakArray()
    {
        $data = [
                'title'     => 'My Real Title',
                'heading'   => 'My Real Heading',
                'todo_list' => ['Clean House', 'Call Mom', 'Run Errands'],
        ];

        echo view('cetak_array', $data);
    }
    public function cetakObj()
    {
        $data['title']='My Real Title';
        $data['heading']='My Real Heading';

        $this->nama="paijo";
        $this->umur="20";
        $this->fakultas="SV";
        $this->prodi="D3TI";

        $data['obj']=$this;
        return view('cetak_obj', $data);
    }
}
