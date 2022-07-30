<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfaqSantri extends Migration
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
                    'type' => 'CHAR',
                    'constraint' => '50'
                ],
                'id_semester' => [
                    'type' => 'INT'
                ],
                'nominal' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'tgl' => [
                    'type' => 'DATE',
                ],
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['Lunas', 'Belum Lunas'],
                    'default' => 'Lunas'
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
        $this->forge->addForeignKey('id_semester', 'semester', 'id');
        $this->forge->addForeignKey('nis', 'induk_santri', 'nis');
        $this->forge->createTable('infaq_santri');
    }

    public function down()
    {
        $this->forge->dropTable('infaq_santri');
    }
}
