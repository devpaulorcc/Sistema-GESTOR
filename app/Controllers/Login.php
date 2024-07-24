<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function logado()
    {
        $modelUsuario = new Usuario();
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('password');
        
        $usuario = $modelUsuario->verifica($email, $senha);
        session()->set('id', $usuario->id);
        if($usuario->cargo == "Admin" || $usuario->cargo == "admin" || $usuario->cargo == "ADMIN"){
            session()->set('adm', $usuario->cargo);  
        }
        return redirect()->to('/');
    }
}
