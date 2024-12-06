<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Criando uma instância do model ProdutoModel
        $produtoModel = new ProdutoModel();

        // Buscando o total de produtos cadastrados
        $quantidadeProdutos = $produtoModel->countAll();  // countAll() retorna o total de registros na tabela

        // Passando o dado para a view
        return view('home', ['quantidadeProdutos' => $quantidadeProdutos]);
    }
}
