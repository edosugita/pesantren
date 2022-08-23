<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminLead extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'lead' => [
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
        $this->forge->createTable('lead');
    }

    public function down()
    {
        $this->forge->dropTable('lead');
    }
}
