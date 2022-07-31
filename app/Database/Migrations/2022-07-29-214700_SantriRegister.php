<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SantriRegister extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'nama_santri' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'nik_santri' => [
                    'type' => 'char',
                    'constraint' => '50'
                ],
                'tmp_lahir' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'tgl_lahir' => [
                    'type' => 'DATE',
                ],
                'semester' => [
                    'type' => 'INT'
                ],
                'gender' => [
                    'type' => 'ENUM',
                    'constraint' => ['Laki-laki', 'Perempuan'],
                    'default' => 'Laki-laki'
                ],
                'agama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'kewarganegaraan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'tmp_pendidikan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'hobi_santri' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'no_hp_santri' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'alamat_santri' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nama_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nik_ayah' => [
                    'type' => 'CHAR',
                    'constraint' => '50'
                ],
                'pekerjaan_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'no_hp_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20'
                ],
                'penghasilan_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'alamat_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nama_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nik_ibu' => [
                    'type' => 'CHAR',
                    'constraint' => '50'
                ],
                'pekerjaan_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'penghasilan_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'no_hp_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20'
                ],
                'alamat_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'hubungan_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'null' => true
                ],
                'nama_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'null' => true
                ],
                'nik_wali' => [
                    'type' => 'CHAR',
                    'constraint' => '50',
                    'null' => true
                ],
                'pekerjaan_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => true
                ],
                'penghasilan_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => true
                ],
                'no_hp_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                    'null' => true
                ],
                'alamat_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                    'null' => true
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => TRUE,
                ],
            ]
        );

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('data_santri');
    }

    public function down()
    {
        $this->forge->dropTable('data_santri');
    }
}
