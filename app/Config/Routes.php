<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sair', 'Home::sair');
$routes->get('/login', 'Login::index');
$routes->post('/login/entrando', 'Login::logado');
$routes->get('/gerenciar', 'Funcionario::index');
$routes->get('/gerenciar/contratar', 'Funcionario::contratar');
$routes->post('gerenciar/contratar/contratando', 'Funcionario::contratando');

$routes->get('/gerenciar/perfil/id/(:num)', 'Funcionario::perfil/$1');
$routes->get('/gerenciar/perfil/id/(:num)/excluir', 'Funcionario::excluir/$1');
$routes->post('/gerenciar/perfil/id/(:num)/editar', 'Funcionario::editar/$1');

$routes->get('/news', 'Home::news');
$routes->get('/news/marcar-como-lida/(:num)', 'Home::marcar/$1');
$routes->get('/news/marcar-como-lida', 'Home::marcarTudo');


$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/vendas', 'Venda::estoque');
$routes->post('/estoque/cadastro', 'Venda::estoqueCadastro');
$routes->get('/estoque/deletar/(:num)', 'Venda::estoqueDeletar/$1');
$routes->post('/estoque/atualizar/(:num)', 'Venda::estoqueAtualizar/$1');

$routes->get('/historico', 'Venda::historico');