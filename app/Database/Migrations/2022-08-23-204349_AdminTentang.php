<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminTentang extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'tentang' => [
                    'type' => 'TEXT',
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
        $this->forge->createTable('tentang');
    }

    public function down()
    {
        $this->forge->dropTable('tentang');
    }
}
