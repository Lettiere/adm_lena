<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produto extends Controller
{
    public function index()
    {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->findAll(); // Buscando todos os produtos cadastrados
        $data = [
            'title'   => 'Produtos',
            'produtos' => $produtos
        ];
        return view('produto/index', $data);
    }

    public function create()
    {
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->findAll(); // Buscando todas as categorias para o dropdown
        $data = [
            'title'    => 'Criar Produto',
            'categorias' => $categorias
        ];
        return view('produto/create', $data);
    }

    public function salvar()
    {
        $produtoModel = new ProdutoModel();

        // Recupera os dados do formulário
        $data = [
            'prod_categoria_id' => $this->request->getPost('prod_categoria_id'),
            'nome_produto'      => $this->request->getPost('nome_produto'),
            'codigo_barras'     => $this->request->getPost('codigo_barras'),
            'descricao_produto' => $this->request->getPost('descricao_produto'),
            'subcategoria_produto' => $this->request->getPost('subcategoria_produto'),
            // Adicione todos os outros campos necessários aqui
        ];

        // Valida os dados
        if ($produtoModel->insert($data)) {
            return redirect()->to('/produto')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar o produto.');
        }
    }

    public function show($id = null)
    {
        $produtoModel = new ProdutoModel();
        $produto = $produtoModel->find($id);

        if (!$produto) {
            return redirect()->to('/produto')->with('error', 'Produto não encontrado.');
        }

        $data = [
            'title'   => 'Editar Produto',
            'produto' => $produto
        ];
        return view('produto/show', $data);
    }

    public function edit($id = null)
    {
        $produtoModel = new ProdutoModel();
        $produto = $produtoModel->find($id);

        if (!$produto) {
            return redirect()->to('/produto')->with('error', 'Produto não encontrado.');
        }

        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->findAll();

        $data = [
            'title'    => 'Editar Produto',
            'produto'  => $produto,
            'categorias' => $categorias
        ];
        return view('produto/edit', $data);
    }
}