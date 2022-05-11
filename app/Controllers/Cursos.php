<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CursosModel;

class Cursos extends BaseController
{

    private $cursosModel; 
    
    public function __construct()
    {
        $this->cursosModel = new CursosModel();
    }


    public function index()
    {
        $session = session();
        echo "Logado como: ". $session->get('usuario');
        return view('cursosIndex',[
            'cursos' => $this->cursosModel->paginate(10),
            'pager' => $this->cursosModel->pager
        ]);

    }

    public function delete($id){
        if($this->cursosModel->delete($id)){
            return view('messages', ['messages'=>'Curso Deletado !'] );
        }else {
            echo "Erro !";
        }

    }

    public function create(){
        return view('formCursos');
    }


    public function store(){
        if($this->cursosModel->save($this->request->getPost())){
             return view ('messages', ['messages'=> 'Curso Cadastrado !']);
        }else{
            echo 'Erro !';
        }
    }

    public function edit($id){
      
        return view('formCursos',[
            'cursos' => $this->cursosModel->find($id)
        ]);

    }
}

