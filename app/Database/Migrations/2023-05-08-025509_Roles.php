<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rol' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'rol' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'descripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
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

        $this->forge->addPrimaryKey('id_rol');
        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->createTable('roles', true, $attributes);
    }

    public function down()
    {
        //
    }
}
