<?php

namespace App\Models;

use CodeIgniter\Model;

class MatriculasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_matriculas';
    protected $primaryKey       = 'id_matricula';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
       
        'alunos_id',
        'cursos_id'
    ];

    
}
