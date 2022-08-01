<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokumen extends Migration
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
                'no' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nomor_surat' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nis' => [
                    'type' => 'CHAR',
                    'constraint' => '50'
                ],
                'nama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'instansi_tujuan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'alamat_tujuan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'keperluan' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'tanggal' => [
                    'type' => 'DATE',
                ],
                'jenis_surat' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'tanggal_mulai' => [
                    'type' => 'DATE',
                ],
                'tanggal_akhir' => [
                    'type' => 'DATE',
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
        $this->forge->createTable('dokumen_instansi');
    }

    public function down()
    {
        $this->forge->dropTable('dokumen_instansi');
    }
}
