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
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ],
                'no_register' => [
                    'type' => 'INT',
                    'unique' => TRUE
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
                'gender' => [
                    'type' => 'ENUM',
                    'constraint' => ['Laki-laki', 'Perempuan'],
                    'default' => 'Laki-laki'
                ],
                'agama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'kewarganergaraan' => [
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
                'nama_ayah' => [
                    'type' => 'VARCHAR',
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
                'alamat_ayah' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nama_ibu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'pekerjaan_ibu' => [
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
                'nama_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'pekerjaan_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'no_hp_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20'
                ],
                'alamat_wali' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
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
        $this->forge->createTable('santri_reg');
    }

    public function down()
    {
        $this->forge->dropTable('santri_reg');
    }
}
