<?php

namespace App\Models;

use CodeIgniter\Model;

class DataSantriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'data_santri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_santri', 'nik_santri', 'tmp_lahir', 'tgl_lahir', 'semester', 'gender', 'agama', 'kewarganegaraan', 'tmp_pendidikan', 'hobi_santri', 'no_hp_santri', 'alamat_santri', 'nama_ayah', 'nik_ayah', 'pekerjaan_ayah', 'no_hp_ayah', 'penghasilan_ayah', 'alamat_ayah', 'nama_ibu', 'nik_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'no_hp_ibu', 'alamat_ibu', 'hubungan_wali', 'nama_wali', 'nik_wali', 'pekerjaan_wali', 'penghasilan_wali', 'no_hp_wali', 'alamat_wali'];

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

    public function getId($nama)
    {
        return $this->db->table('data_santri')->where(['nama_santri' => $nama])->get()->getResultArray();
    }
}
