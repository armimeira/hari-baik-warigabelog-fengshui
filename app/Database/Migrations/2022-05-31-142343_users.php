<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel users
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null' => true,
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel users
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus tabel users
        $this->forge->dropTable('users');
    }
}
