<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table      = 'jadwal_tiket';
    protected $primaryKey = 'id_ka';
    protected $allowedFields = [
        'nama_ka', 'asal', 'tujuan', 'tgl_berangkat', 'tgl_sampai',
        'jam_berangkat', 'jam_tiba', 'kelas', 'harga', 'stok'
    ];

    public function getJdwlStasiun()
    {
        return
            $this->db->table('jadwal_tiket')
            ->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
            ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')
            ->get()->getResultArray();
    }
    public function getJdwlDetail($id_ka)
    {
        return
            $this->db->table('jadwal_tiket')
            ->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
            ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')
            ->where("jadwal_tiket.id_ka='" . $id_ka . "'")
            ->get()->getResultArray();
    }
    public function data_jadwal()
    {
        return $this->db->table($this->table)->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
            ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')->get()->getResultArray();
    }

    public function update_data($data, $id_ka)
    {
        $query = $this->db->table('jadwal_tiket')->update($data, array('id_ka' => $id_ka));
        return $query;
    }
    public function delete_data($id_ka)
    {
        $query = $this->db->table($this->table)->delete(array('id_ka' => $id_ka));
        return $query;
    }
    // public function getJdwlStasiun()
    // {
    //     return
    //         $this->db->table('jadwal_tiket')
    //         ->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
    //         ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')
    //         ->get()->getResultArray();
    // }
    // public function getJdwlStasiunDetail($id_ka)
    // {
    //     return $this->db->table('jadwal_tiket')
    //         ->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
    //         ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')
    //         ->where("jadwal_tiket.id_ka='" . $id_ka . "'")
    //         ->get()->getResultArray();
    // }
    // public function getJdwl($id_ka = "")
    // {
    //     if ($id_ka == "") {
    //         return $this->findAll();
    //     } else {
    //         return $this->where(['id_ka' => $id_ka])->first();
    //     }
    // }

    // public function saveJdwl($data)
    // {
    //     return $this->db->table('jadwal_tiket')->insert($data);
    // }

    // public function deleteJadwal($id_ka)
    // {
    //     return $this->db->table('jadwal_tiket')->delete(['id_ka' => $id_ka]);
    // }

    // public function updateJadwal($id_ka, $data)
    // {
    //     return $this->db->table('jadwal_tiket')->where(['id_ka' => $id_ka])->update($data);
    // }
    // public function edit($data, $id_ka)
    // {
    //     $builder = $this->db->table($this->table);
    //     $builder->where('id_ka', $id_ka);
    //     return $builder->update($data, array('id_ka' => $id_ka));
    // }
    // public function getJadwal($id_ka = true)
    // {
    //     if ($id_ka == true) {
    //         return $this->db->table('jadwal_tiket')
    //             ->join('stasiun AS Asal', 'jadwal_tiket.asal=Asal.id_stasiun')
    //             ->join('stasiun AS Tujuan', 'jadwal_tiket.tujuan=Tujuan.id_stasiun')
    //             ->get()->getResultArray();
    //     } else {
    //         return $this->where(['id_ka' => $id_ka])->first();
    //     }
    // }
} //end class