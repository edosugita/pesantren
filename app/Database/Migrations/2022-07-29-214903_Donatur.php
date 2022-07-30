<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Donatur extends Migration
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
                'no_hp' => [
                    'type' => 'CHAR',
                    'constraint' => '20'
                ],
                'Alamat' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
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
        $this->forge->createTable('donatur');
    }

    public function down()
    {
        $this->forge->dropTable('donatur');
    }
}
