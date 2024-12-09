<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota para a tela inicial
$routes->get('/', 'Home::index');


// Rotas para a tela de produtos
/* $routes->get('produtos', 'Produto::index', ['as' => 'produtos']);
$routes->get('produto/create', 'Produto::create', ['as' => 'criar_produto']);  
$routes->get('produto/show/(:num)', 'Produto::show/$1', ['as' => 'mostrar_produto']);
$routes->get('produto/edit/(:num)', 'Produto::edit/$1', ['as' => 'editar_produto']);  
 */

/* Produto */
$routes->group('produto', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get(
        '/',
        'Produto::index',
        ['as' => 'produtos']
    );
    $routes->get('create', 'Produto::create', ['as' => 'create_produto']);
    $routes->post('salvar', 'Produto::salvar', ['as' => 'save_produto']);
    $routes->get('show/(:num)', 'Produto::show/$1', ['as' => 'show_produto']); // Rota para exibir o produto
});

// Rotas para a tela de estoque
$routes->group('estoque', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Estoque::index', ['as' => 'estoque']);
    $routes->get('create', 'Estoque::create', ['as' => 'create_estoque']);
    $routes->post('salvar', 'Estoque::salvar', ['as' => 'save_estoque']);
    $routes->get('edit/(:num)', 'Estoque::edit/$1', ['as' => 'edit_estoque']); // Nova rota para edição
    $routes->get('delete/(:num)', 'Estoque::delete/$1', ['as' => 'delete_estoque']);
});



$routes->get('categoria', 'Categoria::index', ['as' => 'categoria']);  // Rota para a lista de categorias

// Rotas para a tela de categorias
$routes->get('categoria', 'Categoria::index', ['as' => 'categoria']);  // Rota para a lista de categorias
$routes->get('categoria/create', 'Categoria::create', ['as' => 'criar_categoria']);  // Rota para criar nova categoria
$routes->get('categoria/show/(:num)', 'Categoria::show/$1', ['as' => 'mostrar_categoria']);  // Rota para mostrar categoria
$routes->get('categoria/edit/(:num)', 'Categoria::edit/$1', ['as' => 'editar_categoria']);  // Rota para editar categoria

$routes->group('subcategoria', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Subcategoria::index', ['as' => 'subcategoria']); // Lista de subcategorias
    $routes->get('create', 'Subcategoria::create', ['as' => 'create']); // Tela de criação de subcategoria
    $routes->post('salvar', 'Subcategoria::salvar', ['as' => 'save_subcategoria']); // Processa o formulário de criação
});


/* POST */
$routes->post('categoria/salvar', 'Categoria::salvar');
$routes->post('produto/salvar', 'Produto::salvar');