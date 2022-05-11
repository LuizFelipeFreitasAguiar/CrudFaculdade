<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblAlunos extends Migration
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
           'nome' => [
               'type' => 'varchar',
               'constraint' => 200,
               'null' => false
           ],
           'email' => [
               'type' => 'varchar',
               'constraint' => 200,
               'null' => false
           ],

           'dt_nasc' => [
               'type' => 'date',
               'null' => false
           ]
           
       ]);

       // Define a primary Key
      $this->forge->addPrimaryKey('id');



      // Criar tabela
      $this->forge->createTable('tbl_alunos', true, ['engine' => 'innodb']);
   }

   // down = exclusão dentro da tabela
   public function down()
   {
       //excluir a tabela
           $this->forge->dropTable('tbl_alunos');

   }
}