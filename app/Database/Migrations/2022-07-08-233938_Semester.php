<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Semester extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'tingkat' => [
                    'type' => 'varchar',
                    'constraint' => '50',
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
        $this->forge->createTable('semester');
    }

    public function down()
    {
        $this->forge->dropTable('semester');
    }
}
