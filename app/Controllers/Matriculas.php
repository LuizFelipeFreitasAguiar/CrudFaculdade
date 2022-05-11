<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatriculasModel;



class Matriculas extends BaseController
{


    public function __construct()
    {


        $this->matriculasModel = new MatriculasModel();
    }


    public function index()
    {
        $session = session();
        echo "Logado como: " . $session->get('usuario');
        return view('matriculasIndex', [
            'matriculas' => $this->matriculasModel->paginate(10),
            'pager' => $this->matriculasModel->pager
        ]);
    }

    public function delete($id)
    {
        if ($this->matriculasModel->delete($id)) {
            return view('messages', ['messages' => 'Matrícula Deletado !']);
        } else {
            echo "Erro !";
        }
    }

    public function create()
    {
        return view('formMatriculas');
    }


    public function store()
    {

// var_dump($_POST);
// exit;

        if ($this->matriculasModel->save($this->request->getPost())) {
            return view('messages', ['messages' => 'Matrícula Cadastrado !']);
        } else {
            echo 'Erro !';
        }
    }

    public function edit($id)
    {
        return view('formMatriculas', [
            'matriculas' => $this->matriculasModel->find($id)

        ]);
    }
}
