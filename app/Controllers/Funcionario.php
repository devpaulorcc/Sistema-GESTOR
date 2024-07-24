<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Notificacoe;
use App\Models\Usuario;
use CodeIgniter\HTTP\ResponseInterface;

class Funcionario extends BaseController
{
    public function index()
    {
        if (!session()->has('adm')) {
            return redirect()->to('/');
        }
        $modelUsuario = new Usuario();
        $dados = $modelUsuario->buscarTodos();
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();




        
        return view('gerenciar', ['dados' => $dados, 'alerta' => $alertas]);
    }
    public function contratar()
    {  
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        return view('contrato', ['alerta' => $alertas]);
    }
    public function contratando()
    {
        $nome = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $cargo = $this->request->getPost('cargo');
        $salario = $this->request->getPost('salario');
        $foto = $this->request->getFile('photo-upload');
        $foto->move(ROOTPATH . 'public/perfil', $foto->getName());
        $fileName = $foto->getName();

        $numero = rand(1000, 9999);
        $letrasAleatorias = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
        $senha = $numero . $letrasAleatorias;

        $modelUsuario = new Usuario();
        $modelUsuario->cadastro($nome, $email, $senha,$cargo, $salario, $fileName);

        $modelNotificacao = new Notificacoe();
        $legenda = "Olá! " . $nome . " e que sua jornada aqui seja cheia de conquistas como " . $cargo . "!!!";
        $modelNotificacao->alerta("Novo contrato", $legenda);
        return redirect()->to('/gerenciar');
    }
    public function perfil($id)
    {
        $modelUsuario = new Usuario();
        $dados = $modelUsuario->buscarID($id);

        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();

        $usuario = [
            'id' => $dados->id,
            'nome' => $dados->nome,
            'email' => $dados->email,
            'senha' => $dados->senha,
            'cargo' => $dados->cargo,
            'salario' => $dados->salario,
            'fileName' => $dados->foto,
            'alerta' => $alertas,
        ];

        return view('perfil', $usuario);
    }
    public function editar($id)
    {
        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $cargo = $this->request->getPost('cargo');
        $salario = $this->request->getPost('salario');
        $modelUsuario = new Usuario();
        $modelUsuario->editar($id,$nome, $email, $senha,$cargo, $salario);

        $modelNotificacao = new Notificacoe();
        $legenda = "Os dados de ". $nome . " foram atualizados.";
        $modelNotificacao->alerta("Atualização de contratado", $legenda);

        return redirect()->to('/gerenciar');
    }
    public function excluir($id)
    {
        $modelUsuario = new Usuario();
        $dados = $modelUsuario->buscarID($id);
        $modelUsuario->excluir($id);
        
        $modelNotificacao = new Notificacoe();
        $legenda = $dados->nome . " deixou nossa equipe abrindo vaga para " . $dados->cargo;
        $modelNotificacao->alerta("Houve uma demissão", $legenda);
        return redirect()->to('/gerenciar');
    }
}
