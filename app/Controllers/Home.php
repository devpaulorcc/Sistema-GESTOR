<?php

namespace App\Controllers;

use App\Models\Notificacoe;
use App\Models\Usuario;

class Home extends BaseController
{
    public function index()
    {
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        return view('home', ['alerta' => $alertas]);
    }
    public function news()
    {
        $modelNews = new Notificacoe();
        $dados = $modelNews->buscarTudo();
        $modelNews = new Notificacoe();
        $alertas = $modelNews->buscarTudo();
        
        return view('news', ['dados' => $dados, 'alerta' => $alertas]);
    }
    public function marcar($id)
    {
        $modelNews = new Notificacoe();
        $modelNews->deletar($id);
        return redirect()->to('/news');
    }
    public function marcarTudo()
    {
        $modelNews = new Notificacoe();
        $modelNews->apagarTodos();
        return redirect()->to('/news');
    }
    public function sair()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
