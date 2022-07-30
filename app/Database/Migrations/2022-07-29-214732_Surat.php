<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Surat extends Migration
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
                'nis' => [
                    'type' => 'char',
                    'constraint' => '50'
                ],
                'nomor_surat' => [
                    'type' => 'CHAR',
                    'constraint' => '50'
                ],
                'jenis_surat' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'tujuan' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'perihal' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'tgl' => [
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
        $this->forge->addForeignKey('nis', 'induk_santri', 'nis');
        $this->forge->createTable('surat');
    }

    public function down()
    {
        $this->forge->dropTable('surat');
    }
}
