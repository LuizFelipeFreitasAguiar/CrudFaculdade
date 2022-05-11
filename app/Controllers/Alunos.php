<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunosModel;


class Alunos extends BaseController
{
    private $AlunosModel; 
    
    public function __construct()
    {
        $this->AlunosModel = new AlunosModel();
    }


    public function index()
    {
        $session = session();
        echo "Logado como: ". $session->get('usuario');
        return view('alunosIndex',[
            'alunos' => $this->AlunosModel->paginate(10),
            'pager' => $this->AlunosModel->pager
        ]);

    }

    public function delete($id){
        if($this->AlunosModel->delete($id)){
            return view('messages', ['messages'=>'Aluno Deletado !'] );
        }else {
            echo "Erro !";
        }

    }

    public function create(){
        return view('formAlunos');
    }


    public function store(){
        if($this->AlunosModel->save($this->request->getPost())){
             return view ('messages', ['messages'=> 'Aluno Cadastrado !']);
        }else{
            echo 'Erro !';
        }
    }

    public function edit($id){
      
        return view('formAlunos',[
            'alunos' => $this->AlunosModel->find($id)
        ]);

    }
}

