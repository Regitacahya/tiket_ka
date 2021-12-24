<?php

namespace App\Controllers;

use App\Models\ReservasiModel;

class Reservasi extends BaseController
{
    protected $reservasiModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }
    public function index()
    {
        $data_reservasi =  $this->reservasiModel->getReservasi()->getResult();
        $data_join3 =  $this->reservasiModel->getReservasi1()->getResult(); //script join 3 tabel
        $data = array(
            'title' => 'Data Reservasi',
            'content' => $data_reservasi,
            'join3' => $data_join3    //script join 3 tabel         
        );
        echo view('reservasi', $data);
    }
}
