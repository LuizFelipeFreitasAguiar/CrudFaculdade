<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class TblMatricula extends Migration
{
    // up = Criação dentro da tabela
    public function up()
    {
        //Configurações da tabela
        

        $this->forge->addField([
         
            'id_matricula' => [
                'type' => 'int',
                'auto_increment' => true
            ],
            'alunos_id' => [
                'type' => 'int'
            ],
            'cursos_id' => [
                'type' => 'int'
            ]
        ]);

        // Define a primary Key
       $this->forge->addPrimaryKey('id_matricula');




       

       // Criar tabela
       $this->forge->createTable('tbl_matriculas', true, ['engine' => 'innodb']);
    }

    // down = exclusão dentro da tabela
    public function down()
    {
        //excluir a tabela
            $this->forge->dropTable('tbl_matriculas');

    }
}