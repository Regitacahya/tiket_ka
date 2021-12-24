<?php

namespace App\Models;

use CodeIgniter\Model;

class StasiunModel extends Model
{
    protected $table      = 'stasiun';
    protected $primaryKey = 'id_stasiun';
    protected $allowedFields = ['kode_stasiun', 'nama_stasiun'];

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