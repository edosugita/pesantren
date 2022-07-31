<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalTaklim extends Migration
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
                'pembicara' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50'
                ],
                'nama_kitab' => [
                    'type' => 'varchar',
                    'constraint' => '255'
                ],
                'id_kategori' => [
                    'type' => 'INT',
                ],
                'tgl_jadwal' => [
                    'type' => 'DATE',
                ],
                'materi' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'hari' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'waktu' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ],
                'tempat' => [
                    'type' => 'VARCHAR',
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
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id');
        $this->forge->createTable('jd_taklim');
    }

    public function down()
    {
        $this->forge->dropTable('jd_taklim');
    }
}
