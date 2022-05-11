<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblCursos extends Migration
{
    // up = Criação dentro da tabela
    public function up()
    {
        //Configurações da tabela
        

        $this->forge->addField([
         
            'id' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'titulo' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => false
            ],
            'descricao' => [
                'type' => 'varchar',
                'constraint' => 200
            ]
            
        ]);

        // Define a primary Key
       $this->forge->addPrimaryKey('id');

       // Criar tabela
       $this->forge->createTable('tbl_cursos', true, ['engine' => 'innodb']);
    }

    // down = exclusão dentro da tabela
    public function down()
    {
        //excluir a tabela
            $this->forge->dropTable('tbl_cursos');

    }
}
