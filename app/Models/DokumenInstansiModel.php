<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenInstansiModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dokumen_instansi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['no', 'nomor_surat', 'instansi_tujuan', 'alamat_tujuan', 'keperluan', 'tanggal', 'jenis_surat', 'nis', 'nama', 'tanggal_mulai', 'tanggal_akhir'];

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

    public function findMax($id, $year)
    {
        return $this->select('*')->selectMax('no')->where(['jenis_surat' => $id, 'YEAR(tanggal)' => $year])->get()->getResultArray();
    }

    public function findMaxYear()
    {
        return $this->select('*')->selectMax('tanggal')->get()->getResultArray();
    }

    public function findDesc()
    {
        return $this->select('*')->orderBy('id', 'DESC')->get()->getResultArray();
    }

    public function findCount()
    {
        return $this->selectCount('id')->get()->getResultArray();
    }
}
