<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use App\Models\SubcategoriaModel;
use App\Models\EstoqueModel;
use CodeIgniter\Controller;

class Produto extends Controller
{
    protected $produtoModel;
    protected $categoriaModel;
    protected $subcategoriaModel;
    protected $estoqueModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
        $this->categoriaModel = new CategoriaModel();
        $this->subcategoriaModel = new SubcategoriaModel();
        $this->estoqueModel = new EstoqueModel();
    }

    // Exibe a lista de produtos
    public function index()
    {
        $produtos = $this->produtoModel->getWithRelations(); // Busca produtos com categorias e subcategorias

        $data = [
            'title'    => 'Lista de Produtos',
            'produtos' => $produtos
        ];
        return view('produto/index', $data);
    }

    // Exibe o formulário de edição de produto
    public function edit($prod_produto_id)
    {
        helper('form');

        $categorias = $this->categoriaModel->findAll();
        $subcategorias = $this->subcategoriaModel->findAll();
        $produto = $this->produtoModel->getWithRelations($prod_produto_id);

        $data = [
            'title'         => 'Editar Produto',
            'categorias'    => $categorias,
            'subcategorias' => $subcategorias,
            'produto'       => $produto
        ];

        return view('produto/edit', $data);
    }

    // Exibe o formulário de criação de produto
    public function create()
    {
        helper('form');

        $categorias = $this->categoriaModel->findAll();
        $subcategorias = $this->subcategoriaModel->findAll();
        $validation = \Config\Services::validation();

        $data = [
            'title'         => 'Criar Produto',
            'categorias'    => $categorias,
            'subcategorias' => $subcategorias,
            'validation'    => $validation
        ];

        return view('produto/create', $data);
    }

    // Método alterado: Exibe detalhes de um produto com informações de categoria e subcategoria
    public function show($id)
    {
        $produto = $this->produtoModel->getWithRelations($id);

        if (!$produto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Produto com ID $id não encontrado.");
        }

        $data = [
            'title'   => "Detalhes do Produto",
            'produto' => $produto
        ];

        return view('produto/show', $data);
    }

    public function salvar()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nome_produto'   => 'required|min_length[3]',
            'codigo_barras'  => 'required|max_length[13]',
            'descricao_produto' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $produtoData = $this->request->getPost();

        if ($this->produtoModel->save($produtoData)) {
            return redirect()->to('/produto')->with('success', 'Produto salvo com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->produtoModel->errors());
        }
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nome_produto'   => 'required|min_length[3]',
            'codigo_barras'  => 'required|max_length[13]',
            'descricao_produto' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $produtoData = $this->request->getPost();
        $produtoData['id'] = $id;

        if ($this->produtoModel->save($produtoData)) {
            return redirect()->to('/produto')->with('success', 'Produto atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->produtoModel->errors());
        }
    }

    public function delete($id)
    {
        if ($this->produtoModel->delete($id)) {
            return redirect()->to('/produto')->with('success', 'Produto deletado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao deletar o produto.');
        }
    }
}