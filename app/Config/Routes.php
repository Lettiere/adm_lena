<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rota para a tela inicial
$routes->get('/', 'Home::index');


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
    $routes->get('edit/(:num)', 'Produto::edit/$1', ['as' => 'edit_produto']); // Rota para editar o produto
});
$routes->post('produto/salvar', 'Produto::salvar');
$routes->post('produto/update/(:num)', 'Produto::update/$1', ['as' => 'update_produto']);


/* Rotas para a tela de estoque */
$routes->get('estoque', 'Estoque::index', ['as' => 'estoque']);
$routes->get('estoque_entradas', 'Estoque::entradas', ['as' => 'estoque_entradas']);
$routes->get('estoque_saidas', 'Estoque::saidas', ['as' => 'estoque_saidas']);
$routes->get('criar_estoque', 'Estoque::create', ['as' => 'criar_estoque']);
$routes->get('mostrar_estoque/(:num)', 'Estoque::show/$1', ['as' => 'mostrar_estoque']);
$routes->get('editar_estoque/(:num)', 'Estoque::edit/$1', ['as' => 'editar_estoque']);



// Rotas para a tela de categorias
$routes->get('categoria', 'Categoria::index', ['as' => 'categoria']);  // Rota para a lista de categorias
$routes->get('categoria/create', 'Categoria::create', ['as' => 'criar_categoria']);  // Rota para criar nova categoria
$routes->get('categoria/show/(:num)', 'Categoria::show/$1', ['as' => 'mostrar_categoria']);  // Rota para mostrar categoria
$routes->get('categoria/edit/(:num)', 'Categoria::edit/$1', ['as' => 'editar_categoria']);  // Rota para editar categoria
$routes->post('categoria/salvar', 'Categoria::salvar');


// Rotas para a tela de subcategorias
$routes->group('subcategoria', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Subcategoria::index', ['as' => 'subcategoria']); // Lista de subcategorias
    $routes->get('create', 'Subcategoria::create', ['as' => 'create']); // Tela de criação de subcategoria
    $routes->post('salvar', 'Subcategoria::salvar', ['as' => 'save_subcategoria']); // Processa o formulário de criação
});
