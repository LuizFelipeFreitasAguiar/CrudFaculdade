<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunosModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_alunos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'email',
        'cursos',
        'dt_nasc'
        
    ];


}
