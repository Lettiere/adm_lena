<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use App\Models\SubcategoriaModel;
use CodeIgniter\Controller;

class Produto extends Controller
{
    // Exibe a lista de produtos
    public function index()
    {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->getWithRelations(); // Busca produtos com categorias e subcategorias associadas

        $data = [
            'title'    => 'Lista de Produtos',
            'produtos' => $produtos
        ];
        return view('produto/index', $data);
    }

    // Exibe o formulário de edição de produto
    public function edit($prod_produto_id)
    {
        // Carregar o helper de formulários
        helper('form');

        // Carregar categorias e subcategorias
        $categoriaModel = new CategoriaModel();
        $subcategoriaModel = new SubcategoriaModel();
        $produtoModel = new ProdutoModel();

        $categorias = $categoriaModel->findAll();
        $subcategorias = $subcategoriaModel->findAll();
        $produto = $produtoModel->getWithRelations($prod_produto_id);

        // Passar os dados para a view
        $data = [
            'title'        => 'Editar Produto',
            'categorias'   => $categorias,
            'subcategorias' => $subcategorias,
            'produto'      => $produto
        ];

        return view(
            'produto/edit',
            $data
        );
    }

    // Exibe o formulário de criação de produto
    public function create()
    {
        // Carregar o helper de formulários
        helper('form');

        // Carregar categorias e subcategorias
        $categoriaModel = new CategoriaModel();
        $subcategoriaModel = new SubcategoriaModel();

        $categorias = $categoriaModel->findAll();
        $subcategorias = $subcategoriaModel->findAll();

        // Passar os dados para a view
        $data = [
            'title'        => 'Criar Produto',
            'categorias'   => $categorias,
            'subcategorias' => $subcategorias,
            'produto'      => [] // Array vazio para novos produtos
        ];

        return view(
            'produto/create',
            $data
        );
    }

    // Salva o produto no banco de dados
    public function salvar()
    {
        $validation = \Config\Services::validation();

        // Definindo as regras de validação
        $validation->setRules([
            'prod_categoria_id'     => 'required|integer',
            'prod_subcategoria_id'  => 'permit_empty|integer',
            'nome_produto'          => 'required|string|min_length[3]',
            'codigo_barras'         => 'required|alpha_numeric|max_length[13]',
            'descricao_produto'     => 'required|string',
            'peso_produto'          => 'permit_empty|is_natural_no_zero',
            'preco_custo'           => 'required|decimal|min_length[1]',
            'preco_venda'           => 'required|decimal|min_length[1]',
            'validade_produto'      => 'permit_empty|valid_date',
            'localizacao_produto'   => 'permit_empty|string',
            'imagem_produto'        => 'permit_empty|uploaded[imagem_produto]|max_size[imagem_produto,1024]|is_image[imagem_produto]',
        ]);

        // Verificando se a validação falhou
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Caminho de upload das imagens
        $uploadPath = ROOTPATH . 'public/assets/img/product/';
        $uploadedImages = [];

        // Manipulação de uploads de imagens
        if ($file = $this->request->getFile('imagem_produto')) {
            if ($file->isValid() && !$file->hasMoved()) {
                // Gerar nome criptografado para a imagem
                $newName = md5(uniqid(rand(), true)) . '.' . $file->getExtension();
                // Mover o arquivo antes de qualquer outra operação
                $file->move($uploadPath, $newName);
                // Armazenar caminho da imagem se foi enviada
                $uploadedImages['imagem_produto'] = 'assets/img/product/' . $newName;
            }
        }

        // Preparando os dados para salvar no banco
        $produtoModel = new ProdutoModel();

        $produtoData = [
            'prod_categoria_id'     => $this->request->getPost('prod_categoria_id'),
            'prod_subcategoria_id'  => $this->request->getPost('prod_subcategoria_id'),
            'nome_produto'          => $this->request->getPost('nome_produto'),
            'codigo_barras'         => $this->request->getPost('codigo_barras'),
            'descricao_produto'     => $this->request->getPost('descricao_produto'),
            'peso_produto'          => $this->request->getPost('peso_produto'),
            'preco_custo'           => $this->request->getPost('preco_custo'),
            'preco_venda'           => $this->request->getPost('preco_venda'),
            'validade_produto'      => $this->request->getPost('validade_produto'),
            'localizacao_produto'   => $this->request->getPost('localizacao_produto'),
            'imagem_produto'        => $uploadedImages['imagem_produto'] ?? null,
        ];

        // Inserindo o produto no banco de dados
        if ($produtoModel->save($produtoData)) {
            return redirect()->to('/produto')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $produtoModel->errors());
        }
    }

    public function show($id)
    {
        $produtoModel = new ProdutoModel();
        $produto = $produtoModel->find($id);

        if (!$produto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Produto com ID $id não encontrado.");
        }

        return view('produto/show', ['produto' => $produto]); // Passa o produto para a view
    }
    public function update($id)
    {
        $produtoModel = new ProdutoModel();
        $validation = \Config\Services::validation();

        // Definindo as regras de validação
        $validation->setRules([
            'prod_categoria_id'     => 'required|integer',
            'prod_subcategoria_id'  => 'permit_empty|integer',
            'nome_produto'          => 'required|string|min_length[3]',
            'codigo_barras'         => 'required|alpha_numeric|max_length[13]',
            'descricao_produto'     => 'required|string',
            'peso_produto'          => 'permit_empty|is_natural_no_zero',
            'preco_custo'           => 'required|decimal|min_length[1]',
            'preco_venda'           => 'required|decimal|min_length[1]',
            'validade_produto'      => 'permit_empty|valid_date',
            'localizacao_produto'   => 'permit_empty|string',
            'imagem_produto'        => 'permit_empty|uploaded[imagem_produto]|max_size[imagem_produto,1024]|is_image[imagem_produto]',
        ]);

        // Verificando se a validação falhou
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Caminho de upload das imagens
        $uploadPath = ROOTPATH . 'public/assets/img/product/';
        $uploadedImages = [];

        // Manipulação de uploads de imagens
        if ($file = $this->request->getFile('imagem_produto')) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = md5(uniqid(rand(), true)) . '.' . $file->getExtension();
                $file->move($uploadPath, $newName);
                $uploadedImages['imagem_produto'] = 'assets/img/product/' . $newName;
            }
        }

        // Preparando os dados para atualizar no banco
        $produtoData = [
            'prod_categoria_id'     => $this->request->getPost('prod_categoria_id'),
            'prod_subcategoria_id'  => $this->request->getPost('prod_subcategoria_id'),
            'nome_produto'          => $this->request->getPost('nome_produto'),
            'codigo_barras'         => $this->request->getPost('codigo_barras'),
            'descricao_produto'     => $this->request->getPost('descricao_produto'),
            'peso_produto'          => $this->request->getPost('peso_produto'),
            'preco_custo'           => $this->request->getPost('preco_custo'),
            'preco_venda'           => $this->request->getPost('preco_venda'),
            'validade_produto'      => $this->request->getPost('validade_produto'),
            'localizacao_produto'   => $this->request->getPost('localizacao_produto'),
            'imagem_produto'        => $uploadedImages['imagem_produto'] ?? $produtoModel->find($id)['imagem_produto'],
        ];

        // Atualizando o produto no banco de dados
        if ($produtoModel->update($id, $produtoData)) {
            return redirect()->to('/produto')->with('success', 'Produto atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $produtoModel->errors());
        }
    }
}
