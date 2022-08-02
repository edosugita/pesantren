<?php

namespace App\Models;

use CodeIgniter\Model;

class IndukSantriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'induk_santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nis', 'id_data', 'tahun_induk'];

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
        return $this->db->table('induk_santri')->join('data_santri', 'induk_santri.id_data = data_santri.id')->orderBy('data_santri.id', 'DESC')->get()->getResultArray();
    }

    public function findCount()
    {
        return $this->selectCount('id')->get()->getResultArray();
    }

    public function findJoinAllById($id)
    {
        return $this->db->table('induk_santri')->join('data_santri', 'induk_santri.id_data = data_santri.id')->where(['id_data' => $id])->get()->getResultArray();
    }

    public function findMax()
    {
        return $this->db->table('induk_santri')->selectMax('nis')->get()->getResultArray();
    }

    public function getNisSantri($id)
    {
        return $this->db->table('induk_santri')->join('data_santri', 'induk_santri.id_data = data_santri.id')->where(['nama_santri' => $id])->get()->getResultArray();
    }

    public function getChart()
    {
        return $this->select('tahun_induk')->selectCount('id')->selectMax('tahun_induk')->groupBy('tahun_induk')->orderBy('tahun_induk', 'ASC')->get()->getResultArray();
    }
}
