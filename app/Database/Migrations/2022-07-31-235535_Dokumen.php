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
                'nomor_surat' => [
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
