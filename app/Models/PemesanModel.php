<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesanModel extends Model
{
    protected $table      = 'pemesan';
    protected $primaryKey = 'id_pemesan';
    protected $allowedFields = ['nama_pemesan', 'email', 'no_telp', 'alamat'];

    public function getPemesan($id_pemesan = "")
    {
        if ($id_pemesan == "") {
            return $this->findAll();
        } else {
            return $this->where(['id_pemesan' => $id_pemesan])->first();
        }
    }

    public function data_pemesan($id_pemesan)
    {
        return $this->find($id_pemesan);
    }

    public function update_data($data, $id_pemesan)
    {
        $query = $this->db->table($this->table)->update($data, array('id_pemesan' => $id_pemesan));
        return $query;
    }
    public function delete_data($id_pemesan)
    {
        $query = $this->db->table($this->table)->delete(array('id_pemesan' => $id_pemesan));
        return $query;
    }
} //end class