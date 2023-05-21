<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ],
            'contrasenia' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'estado' => [
                'type'       => 'CHAR',
                'constraint' => '1',
            ],
            'fecha_creacion' => [
                'type'       => 'DATETIME',
                'default'    => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'fecha_modificacion DATETIME default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP',
        ]);

        $this->forge->addPrimaryKey('id_usuario');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('roles', true, $attributes);
    }

    public function down()
    {
        //
    }
}
