<?php

namespace App\Models;

use App\Database\Migrations\InfaqSantri;
use CodeIgniter\Model;

class InfaqModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'infaq_santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nis', 'id_semester', 'nominal', 'tgl', 'status'];

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

    public function findSum()
    {
        return $this->db->table('infaq_santri')->select('*')->selectSum('infaq_santri.nominal', 'total_infaq')->join('induk_santri', 'infaq_santri.nis = induk_santri.nis')->join('data_santri', 'induk_santri.id_data = data_santri.id')->groupBy('infaq_santri.nis')->orderBy('infaq_santri.id', 'DESC')->get()->getResultArray();
    }

    public function findJoinAll($id)
    {
        return $this->db->table('infaq_santri')->select('*, infaq_santri.id')->join('induk_santri', 'infaq_santri.nis = induk_santri.nis')->join('data_santri', 'induk_santri.id_data = data_santri.id')->where(['infaq_santri.nis' => $id])->get()->getResultArray();
    }

    public function findOneJoinAll($id)
    {
        return $this->db->table('infaq_santri')->select('*, infaq_santri.id')->join('induk_santri', 'infaq_santri.nis = induk_santri.nis')->join('data_santri', 'induk_santri.id_data = data_santri.id')->where(['infaq_santri.id' => $id])->get()->getResultArray();
    }
}
