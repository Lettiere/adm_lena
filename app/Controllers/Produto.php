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


    // Exibe o formulário de criação de produto
    public function create()
    {
        // Carregar o helper de formulários
        helper('form');

        $categoriaModel = new CategoriaModel();
        $subcategoriaModel = new SubcategoriaModel();
        $categorias = $categoriaModel->findAll(); // Buscando todas as categorias
        $subcategorias = $subcategoriaModel->findAll(); // Buscando todas as subcategorias

        $data = [
            'title'       => 'Criar Produto',
            'categorias'  => $categorias,
            'subcategorias' => $subcategorias,
            'produto'     => [] // Passando um array vazio para o formulário
        ];

        return view('produto/create', $data);
    }

    // Salva o produto no banco de dados
    public function salvar()
    {
        // Validação dos dados
        $validation = \Config\Services::validation();

        // Definindo as regras de validação
        $validation->setRules([
            'prod_categoria_id'     => 'required|integer',
            'prod_subcategoria_id'   => 'permit_empty|integer',
            'nome_produto'           => 'required|string|min_length[3]',
            'codigo_barras'          => 'required|alpha_numeric|max_length[13]',
            'descricao_produto'      => 'required|string',
            'peso_produto'           => 'permit_empty|is_natural_no_zero',
            'preco_custo'            => 'required|decimal|min_length[1]',
            'preco_venda'            => 'required|decimal|min_length[1]',
            'validade_produto'       => 'permit_empty|valid_date',
            'localizacao_produto'    => 'permit_empty|string',
            'imagem_produto'         => 'permit_empty|uploaded[imagem_produto]|max_size[imagem_produto,1024]|is_image[imagem_produto]',
        ]);

        // Verificando se a validação falhou
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Processando a imagem (caso haja)
        $imagemProduto = $this->request->getFile('imagem_produto');
        $imagemNome = null;

        if ($imagemProduto && $imagemProduto->isValid() && !$imagemProduto->hasMoved()) {
            // Gerando um nome aleatório para a imagem
            $imagemNome = $imagemProduto->getRandomName();
            // Movendo a imagem para o diretório de uploads
            $imagemProduto->move(WRITEPATH . 'uploads', $imagemNome);
        }

        // Criando o produto
        $produtoModel = new ProdutoModel();

        $produtoData = [
            'prod_categoria_id'     => $this->request->getPost('prod_categoria_id'),
            'prod_subcategoria_id'   => $this->request->getPost('prod_subcategoria_id'),
            'nome_produto'           => $this->request->getPost('nome_produto'),
            'codigo_barras'          => $this->request->getPost('codigo_barras'),
            'descricao_produto'      => $this->request->getPost('descricao_produto'),
            'subcategoria_produto'   => $this->request->getPost('subcategoria_produto'),
            'dimensoes_produto'      => $this->request->getPost('dimensoes_produto'),
            'peso_produto'           => $this->request->getPost('peso_produto'),
            'cor_produto'            => $this->request->getPost('cor_produto'),
            'material_embalagem'     => $this->request->getPost('material_embalagem'),
            'temperatura_armazenamento' => $this->request->getPost('temperatura_armazenamento'),
            'tabela_nutricional'     => $this->request->getPost('tabela_nutricional'),
            'alergenos'              => $this->request->getPost('alergenos'),
            'preco_custo'            => $this->request->getPost('preco_custo'),
            'preco_venda'            => $this->request->getPost('preco_venda'),
            'impostos'               => $this->request->getPost('impostos'),
            'fornecedor'             => $this->request->getPost('fornecedor'),
            'validade_produto'       => $this->request->getPost('validade_produto'),
            'localizacao_produto'    => $this->request->getPost('localizacao_produto'),
            'lote_produto'           => $this->request->getPost('lote_produto'),
            'data_fabricacao'        => $this->request->getPost('data_fabricacao'),
            'data_validade'          => $this->request->getPost('data_validade'),
            'imagem_produto'         => $imagemNome,
            'ingredientes_produto'   => $this->request->getPost('ingredientes_produto'),
            'beneficios_produto'     => $this->request->getPost('beneficios_produto'),
            'sugestao_uso_produto'   => $this->request->getPost('sugestao_uso_produto'),
        ];

        // Inserindo o produto no banco de dados
        if ($produtoModel->save($produtoData)) {
            // Sucesso - redireciona para a lista de produtos
            return redirect()->to('/produto')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            // Falha - redireciona de volta ao formulário com erros
            return redirect()->back()->withInput()->with('errors', $produtoModel->errors());
        }
    }
}
