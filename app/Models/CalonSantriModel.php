<?php

namespace App\Models;

use CodeIgniter\Model;

class CalonSantriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'calon_santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['no_register', 'id_data'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function findJoinAll()
    {
        return $this->db->table('calon_santri')->join('data_santri', 'calon_santri.id_data = data_santri.id')->orderBy('calon_santri.id', 'DESC')->get()->getResultArray();
    }

    public function findJoinAllById($id)
    {
        return $this->db->table('calon_santri')->join('data_santri', 'calon_santri.id_data = data_santri.id')->where(['id_data' => $id])->get()->getResultArray();
    }

    public function findCount()
    {
        return $this->selectCount('id')->get()->getResultArray();
    }
}
