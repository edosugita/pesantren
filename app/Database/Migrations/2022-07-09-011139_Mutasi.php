<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mutasi extends Migration
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
                'nama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nominal' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'tanggal' => [
                    'type' => 'DATE',
                ],
                'jenis' => [
                    'type' => 'ENUM',
                    'constraint' => ['Pemasukan', 'Pengeluaran'],
                    'default' => 'Pemasukan'
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
        $this->forge->createTable('mutasi');
    }

    public function down()
    {
        $this->forge->dropTable('mutasi');
    }
}
