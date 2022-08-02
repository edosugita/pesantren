<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jd_taklim';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pembicara', 'nama_kitab', 'id_kategori', 'tgl_jadwal', 'materi', 'hari', 'waktu', 'tempat'];

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
        return $this->db->table('jd_taklim')->select('jd_taklim.*, kategori.id as id_kat, kategori.nama as nama_kategori')->join('kategori', 'jd_taklim.id_kategori = kategori.id')->orderBy('jd_taklim.id', 'DESC')->get()->getResultArray();
    }
}
