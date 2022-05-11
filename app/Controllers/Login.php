<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
      
  
        echo view('index');
    }
    public function validar()
    {
      

        $session = session();
        $model = new LoginModel();
        $usuario = $this->request->getVar('usuario');
        $senha = $this->request->getVar('senha');
        $dados = $model->where('usuario', $usuario)->first();
     
        // var_dump($senha);
        // exit;

        if($senha  == $dados['senha']){
                $sessao = [
                     'usuario' => $dados['usuario'],
                    'logado' => true

                ];
                $session->set($sessao);
                return redirect()->to('/painelADM');

            }else{
                return redirect()->to('');
            }

        }
    }


