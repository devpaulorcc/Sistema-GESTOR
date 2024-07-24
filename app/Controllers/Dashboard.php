<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Notificacoe;
use App\Models\Produto;
use App\Models\Usuario;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();

        $modelUsuario = new Usuario();
        $salarios = $modelUsuario->buscarSalarios();
        $total = 0;

        foreach ($salarios as $salario) {
            $total += intval($salario->salario);
        }

        $modelUsuario = new Usuario();
        $adms = $modelUsuario->buscarAdm("Admin");


        $modelProduto = new Produto();
        $produtos = $modelProduto->buscarTodos();

        
    return view('dashboard', ['alerta' => $alertas, 'salarios' => $total, 'produtos' => $produtos, "adms" => $adms]);
    }
}
