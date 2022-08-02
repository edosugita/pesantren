<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IndukSantri extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'nis' => [
                    'type' => 'CHAR',
                    'constraint' => '50',
                    'unique' => TRUE
                ],
                'id_data' => [
                    'type' => 'INT',
                ],
                'tahun_induk' => [
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
        $this->forge->addForeignKey('id_data', 'data_santri', 'id');
        $this->forge->createTable('induk_santri');
    }

    public function down()
    {
        $this->forge->dropTable('induk_santri');
    }
}
