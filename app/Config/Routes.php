<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota para a tela inicial
$routes->get('/', 'Home::index');


// Rotas para a tela de produtos
$routes->get('produtos', 'Produto::index', ['as' => 'produtos']);
$routes->get('produto/create', 'Produto::create', ['as' => 'criar_produto']);  // Corrigido 'produtos' para 'produto'
$routes->get('produto/show/(:num)', 'Produto::show/$1', ['as' => 'mostrar_produto']);  // Corrigido 'produtos' para 'produto'
$routes->get('produto/edit/(:num)', 'Produto::edit/$1', ['as' => 'editar_produto']);  // Corrigido 'produtos' para 'produto'


// Rotas para a tela de categorias
$routes->get('categoria', 'Categoria::index', ['as' => 'categoria']);  // Rota para a lista de categorias
$routes->get('categoria/create', 'Categoria::create', ['as' => 'criar_categoria']);  // Rota para criar nova categoria
$routes->get('categoria/show/(:num)', 'Categoria::show/$1', ['as' => 'mostrar_categoria']);  // Rota para mostrar categoria
$routes->get('categoria/edit/(:num)', 'Categoria::edit/$1', ['as' => 'editar_categoria']);  // Rota para editar categoria

/* POST */
$routes->post('categoria/salvar', 'Categoria::salvar');
$routes->post('produto/salvar', 'Produto::salvar');