<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'username';

    public function getMhsKota()
    {
        return
        $this->db->table('mahasiswa')
        ->join('kota', 'mahasiswa.kota=kota.idkota')
        ->get()->getResultArray();
    }
    public function getMhsKotaDetail($username) {
        return $this->db->table('mahasiswa')
        ->join('kota', 'mahasiswa.kota=kota.idkota')
        ->where("mahasiswa.username='".$username."'")
        ->get()->getResultArray();
    }
    public function getMhs($username = "")
    {
        if($username == "") {
            return $this->findAll();
        } else {
            return $this->where(['username' => $username])->first();
        }
    }
    
    public function saveMhs($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
} //end class