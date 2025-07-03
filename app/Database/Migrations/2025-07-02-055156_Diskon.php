<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Diskon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'tanggal'      => [
                'type'              => 'DATE',
                'null'              => FALSE,
            ],
            'nominal'      => [
                'type'              => 'DOUBLE',
                'null'              => FALSE,
            ],
            'created_at'   => [
                'type'              => 'DATETIME',
                'null'              => FALSE,
            ],
            'updated_at'   => [
                'type'              => 'DATETIME',
                'null'              => TRUE,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('diskon');
    }

    public function down()
    {
        $this->forge->createTable('diskon');
    }
}
