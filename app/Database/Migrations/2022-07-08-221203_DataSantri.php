<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSantri extends Migration
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
                    'constraint' => '50',
                    'unique' => TRUE
                ],
                'no_register' => [
                    'type' => 'INT',
                ],
                'kelas' => [
                    'type' => 'int',
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
        $this->forge->addForeignKey('no_register', 'santri_reg', 'no_register');
        $this->forge->createTable('data_santri');
    }

    public function down()
    {
        $this->forge->dropTable('data_santri');
    }
}
