<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JurnalTaklim extends Migration
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
                'id_kategori' => [
                    'type' => 'INT',
                ],
                'judul' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'penulis' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
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
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id');
        $this->forge->createTable('jurnal');
    }

    public function down()
    {
        $this->forge->dropTable('jurnal');
    }
}
