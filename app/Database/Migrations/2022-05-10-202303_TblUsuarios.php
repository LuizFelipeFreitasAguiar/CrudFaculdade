<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUsuarios extends Migration
{
    // up = Criação dentro da tabela
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'usuario' => [
                'type' => 'varchar',
                'constraint' => 200,
                'null' => false
            ],
            'senha' => [
                'type' => 'varchar',
                'constraint' => 200,
                'null' => false
            ]
        ]);

        // Define a primary Key
        $this->forge->addPrimaryKey('id');

        // Criar tabela
        $this->forge->createTable('tbl_usuarios', true, ['engine' => 'innodb']);
    }

    // down = exclusão dentro da tabela
    public function down()
    {
        //excluir a tabela
        $this->forge->dropTable('tbl_usuarios');
    }
}
