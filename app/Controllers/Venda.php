<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Notificacoe;
use App\Models\Produto;
use App\Models\Usuario;
use CodeIgniter\HTTP\ResponseInterface;

class Venda extends BaseController
{
    public function index()
    {
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        return view('venda', ['alerta' => $alertas]);
    }
    public function estoque (){
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        $modelProduto = new Produto();
        $dados = $modelProduto->buscarTodos();
        return view('estoque', ['alerta' => $alertas, 'dados' => $dados]);
    }
    public function estoqueCadastro()
    {
        $nome = $this->request->getPost('produto');
        $categoria = $this->request->getPost('categoria');
        $valor = $this->request->getPost('valor');
        $quantidade = $this->request->getPost('quantidade');
        $id = session()->get('id');
        $modelProduto = new Produto();
        $modelProduto->cadastro($nome, $categoria, $valor, $quantidade, $id);
        return redirect()->to('/vendas');
    }
    public function estoqueDeletar($id)
    {
        $modelProduto = new Produto();
        $modelProduto->deletar($id);
        return redirect()->to('/vendas');
    }
    public function estoqueAtualizar($id)
    {
        $quantidade = $this->request->getPost('quantidade');
        $modelProduto = new Produto();
        $modelProduto->atualizar($id, $quantidade);
        return redirect()->to('/vendas');
    }
    public function historico()
    {
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        
        $modelProduto = new Produto();
        $dados = $modelProduto->buscarTodos();
        
        $modelUsuario = new Usuario();
        foreach ($dados as $dado) {
            $usuarioId = $dado->id_usuario;
            $resultado = $modelUsuario->buscarID($usuarioId);
            if ($resultado) {
                // Adicione dinamicamente a propriedade 'id_responsavel' ao objeto $dado
                $dado->id_responsavel = $resultado->nome;
            } else {
                // Se o usuário não for encontrado, defina como 'N/A'
                $dado->id_responsavel = 'N/A';
            }
        }
    
        return view('historico', ['alerta' => $alertas, 'dados' => $dados]);
    }
    
    
    
    
}
