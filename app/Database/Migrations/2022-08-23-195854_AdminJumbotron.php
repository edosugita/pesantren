<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminJumbotron extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'display' => [
                    'type' => 'varchar',
                    'constraint' => '255',
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
        $this->forge->createTable('display');
    }

    public function down()
    {
        $this->forge->dropTable('display');
    }
}
