<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Info extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'auto_increment' => TRUE
                ],
                'judul' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'gambar' => [
                    'type' => 'VARCHAR',
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
        $this->forge->createTable('infopesantren');
    }

    public function down()
    {
        $this->forge->dropTable('infopesantren');
    }
}
