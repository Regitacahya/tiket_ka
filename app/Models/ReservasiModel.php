<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table      = 'reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $allowedFields = ['kode_stasiun', 'nama_stasiun'];

    public function getReservasi()
    {
        $query =  $this->db->table('reservasi')
            ->join('pemesan', 'reservasi.id_pemesan = pemesan.id_pemesan')
            ->get();
        return $query;
    }
    public function getReservasi1()
    {
        $query =  $this->db->table('reservasi')
            ->join('pemesan', 'reservasi.id_pemesan = pemesan.id_pemesan')
            ->join('jadwal_tiket', 'reservasi.id_kereta = jadwal_tiket.id_ka')
            ->get();
        return $query;
    }

    public function getStasiun($id_stasiun = "")
    {
        if ($id_stasiun == "") {
            return $this->findAll();
        } else {
            return $this->where(['id_stasiun' => $id_stasiun])->first();
        }
    }

    public function data_stasiun($id_stasiun)
    {
        return $this->find($id_stasiun);
    }

    public function update_data($data, $id_stasiun)
    {
        $query = $this->db->table($this->table)->update($data, array('id_stasiun' => $id_stasiun));
        return $query;
    }
    public function delete_data($id_stasiun)
    {
        $query = $this->db->table($this->table)->delete(array('id_stasiun' => $id_stasiun));
        return $query;
    }
} //end class