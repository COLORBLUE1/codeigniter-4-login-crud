<?php

namespace App\controllers;
use App\Models\usuario;


class Login extends BaseController{

    protected $usuario;

    public function index()
    {
       
         return view('Login/index');
    
    }
    public function validarIngreso()
    {
        $emailusuario = $this->request->getPost("emailusuario");
        if(filter_var($emailusuario, FILTER_VALIDATE_EMAIL))
        {
            $email =filter_var($emailusuario, FILTER_SANITIZE_EMAIL);
            $this->usuario = new usuario();
            $resultadousuario = $this->usuario->buscarusuarioporemail($email);
        }else{
            $usuario = preg_replace("/[^a-zA-Z0-9.-]", "", $emailusuario);
            $this->usuario = new usuario();
            $resultadousuario = $this->usuario->buscarusuarioporusuario($usuario);
        }
       
    }
    
}