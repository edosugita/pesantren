<?php

namespace App\Models;

use CodeIgniter\Model;

class JurnalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jurnal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_kategori', 'judul', 'slug', 'penulis', 'gambar', 'articel', 'tgl_jurnal'];

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
        return $this->db->table('jurnal')->select('jurnal.*, kategori.id as id_kat, kategori.nama as nama_kategori')->join('kategori', 'jurnal.id_kategori = kategori.id')->orderBy('jurnal.id', 'DESC')->get()->getResultArray();
    }

    public function getSlug($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function findMax()
    {
        return $this->select('*')->selectMax('jurnal.id')->join('kategori', 'jurnal.id_kategori = kategori.id')->first();
    }

    public function findMaxById($id)
    {
        return $this->select('*')->join('kategori', 'jurnal.id_kategori = kategori.id')->where(['jurnal.id' => $id])->first();
    }
}
