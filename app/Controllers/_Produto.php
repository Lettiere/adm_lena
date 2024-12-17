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
        helper('form');  // Carregar helper de formulários

        // Carregar categorias e subcategorias
        $categoriaModel = new CategoriaModel();
        $subcategoriaModel = new SubcategoriaModel();

        $categorias = $categoriaModel->findAll();
        $subcategorias = $subcategoriaModel->findAll();

        // Definindo as regras de validação
        $validation = \Config\Services::validation();

        if ($this->request->getMethod() == 'post') {
            // Validar os dados do formulário
            if ($this->validate($this->produtoValidationRules())) {
                // Pegar dados do formulário
                $produtoData = [
                    'prod_categoria_id'        => $this->request->getPost('prod_categoria_id'),
                    'prod_subcategoria_id'     => $this->request->getPost('prod_subcategoria_id'),
                    'nome_produto'             => $this->request->getPost('nome_produto'),
                    'codigo_barras'            => $this->request->getPost('codigo_barras'),
                    'descricao_produto'        => $this->request->getPost('descricao_produto'),
                    'subcategoria_produto'     => $this->request->getPost('subcategoria_produto'),
                    'dimensoes_produto'        => $this->request->getPost('dimensoes_produto'),
                    'peso_produto'             => $this->request->getPost('peso_produto'),
                    'cor_produto'              => $this->request->getPost('cor_produto'),
                    'material_embalagem'       => $this->request->getPost('material_embalagem'),
                    'temperatura_armazenamento' => $this->request->getPost('temperatura_armazenamento'),
                    'tabela_nutricional'       => $this->request->getPost('tabela_nutricional'),
                    'alergenos'                => $this->request->getPost('alergenos'),
                    'preco_custo'              => $this->request->getPost('preco_custo'),
                    'preco_venda'              => $this->request->getPost('preco_venda'),
                    'impostos'                 => $this->request->getPost('impostos'),
                    'fornecedor'               => $this->request->getPost('fornecedor'),
                    'validade_produto'         => $this->request->getPost('validade_produto'),
                    'localizacao_produto'      => $this->request->getPost('localizacao_produto'),
                    'lote_produto'             => $this->request->getPost('lote_produto'),
                    'data_fabricacao'          => $this->request->getPost('data_fabricacao'),
                    'data_validade'            => $this->request->getPost('data_validade'),
                    'imagem_produto'           => $this->request->getFile('imagem_produto')->isValid() ? $this->request->getFile('imagem_produto')->getName() : null,
                    'ingredientes_produto'     => $this->request->getPost('ingredientes_produto'),
                    'beneficios_produto'       => $this->request->getPost('beneficios_produto'),
                    'sugestao_uso_produto'     => $this->request->getPost('sugestao_uso_produto')
                ];

                // Inserir produto no banco
                $produtoModel = new ProdutoModel();
                if ($produtoModel->save($produtoData)) {
                    // Sucesso, redireciona para a página de sucesso ou lista de produtos
                    return redirect()->to('/produtos')->with('success', 'Produto cadastrado com sucesso!');
                }
            }
        }

        // Passar os dados para a view
        $data = [
            'title'        => 'Criar Produto',
            'categorias'   => $categorias,
            'subcategorias' => $subcategorias,
            'validation'    => $validation // Passar objeto de validação para exibir erros
        ];

        return view('produto/create', $data);
    }

    private function produtoValidationRules()
    {
        return [
            'prod_categoria_id'    => 'required|is_natural_no_zero',
            'prod_subcategoria_id' => 'permit_empty|is_natural_no_zero',
            'nome_produto'         => 'required|max_length[255]',
            'codigo_barras'        => 'required|max_length[13]',
            'descricao_produto'    => 'required',
            'peso_produto'         => 'permit_empty|integer',
            'preco_custo'          => 'permit_empty|decimal',
            'preco_venda'          => 'permit_empty|decimal',
            'validade_produto'     => 'permit_empty|valid_date[Y-m-d]',
            'data_fabricacao'      => 'permit_empty|valid_date[Y-m-d]',
            'data_validade'        => 'permit_empty|valid_date[Y-m-d]',
            'imagem_produto'       => 'permit_empty|is_image[imagem_produto]',
        ];
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
            'subcategoria_produto'  => 'permit_empty|string',
            'dimensoes_produto'     => 'permit_empty|string',
            'cor_produto'           => 'permit_empty|string',
            'material_embalagem'    => 'permit_empty|string',
            'temperatura_armazenamento' => 'permit_empty|string',
            'tabela_nutricional'    => 'permit_empty|string',
            'alergenos'             => 'permit_empty|string',
            'impostos'              => 'permit_empty|string',
            'fornecedor'            => 'permit_empty|string',
            'lote_produto'          => 'permit_empty|string',
            'data_fabricacao'       => 'permit_empty|valid_date',
            'data_validade'         => 'permit_empty|valid_date',
            'ingredientes_produto'  => 'permit_empty|string',
            'beneficios_produto'    => 'permit_empty|string',
            'sugestao_uso_produto'  => 'permit_empty|string',
        ]);

        // Verificando se a validação falhou
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Caminho de upload das imagens
        $uploadPath = ROOTPATH . 'public/assets/img/product/';
        $uploadedImages = [];

        // Manipulação de uploads de imagens
        $file = $this->request->getFile('imagem_produto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Gerar nome criptografado para a imagem
            $newName = md5(uniqid(rand(), true)) . '.' . $file->getExtension();
            // Mover o arquivo antes de qualquer outra operação
            $file->move($uploadPath, $newName);
            // Armazenar caminho da imagem se foi enviada
            $uploadedImages['imagem_produto'] = 'assets/img/product/' . $newName;
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
            'subcategoria_produto'  => $this->request->getPost('subcategoria_produto'),
            'dimensoes_produto'     => $this->request->getPost('dimensoes_produto'),
            'cor_produto'           => $this->request->getPost('cor_produto'),
            'material_embalagem'    => $this->request->getPost('material_embalagem'),
            'temperatura_armazenamento' => $this->request->getPost('temperatura_armazenamento'),
            'tabela_nutricional'    => $this->request->getPost('tabela_nutricional'),
            'alergenos'             => $this->request->getPost('alergenos'),
            'impostos'              => $this->request->getPost('impostos'),
            'fornecedor'            => $this->request->getPost('fornecedor'),
            'lote_produto'          => $this->request->getPost('lote_produto'),
            'data_fabricacao'       => $this->request->getPost('data_fabricacao'),
            'data_validade'         => $this->request->getPost('data_validade'),
            'ingredientes_produto'  => $this->request->getPost('ingredientes_produto'),
            'beneficios_produto'    => $this->request->getPost('beneficios_produto'),
            'sugestao_uso_produto'  => $this->request->getPost('sugestao_uso_produto'),
        ];

        // Inserindo o produto no banco de dados
        if ($produtoModel->save($produtoData)) {
            return redirect()->to('/produto')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $produtoModel->errors());
        }
    }

    public function salvar_prod()
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
            // Adicionando as validações dos novos campos
            'subcategoria_produto'  => 'permit_empty|string',
            'dimensoes_produto'     => 'permit_empty|string',
            'cor_produto'           => 'permit_empty|string',
            'material_embalagem'    => 'permit_empty|string',
            'temperatura_armazenamento' => 'permit_empty|string',
            'tabela_nutricional'    => 'permit_empty|string',
            'alergenos'             => 'permit_empty|string',
            'impostos'              => 'permit_empty|string',
            'fornecedor'            => 'permit_empty|string',
            'lote_produto'          => 'permit_empty|string',
            'data_fabricacao'       => 'permit_empty|valid_date',
            'data_validade'         => 'permit_empty|valid_date',
            'ingredientes_produto'  => 'permit_empty|string',
            'beneficios_produto'    => 'permit_empty|string',
            'sugestao_uso_produto'  => 'permit_empty|string',
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
            'subcategoria_produto'  => $this->request->getPost('subcategoria_produto'),
            'dimensoes_produto'     => $this->request->getPost('dimensoes_produto'),
            'cor_produto'           => $this->request->getPost('cor_produto'),
            'material_embalagem'    => $this->request->getPost('material_embalagem'),
            'temperatura_armazenamento' => $this->request->getPost('temperatura_armazenamento'),
            'tabela_nutricional'    => $this->request->getPost('tabela_nutricional'),
            'alergenos'             => $this->request->getPost('alergenos'),
            'impostos'              => $this->request->getPost('impostos'),
            'fornecedor'            => $this->request->getPost('fornecedor'),
            'lote_produto'          => $this->request->getPost('lote_produto'),
            'data_fabricacao'       => $this->request->getPost('data_fabricacao'),
            'data_validade'         => $this->request->getPost('data_validade'),
            'ingredientes_produto'  => $this->request->getPost('ingredientes_produto'),
            'beneficios_produto'    => $this->request->getPost('beneficios_produto'),
            'sugestao_uso_produto'  => $this->request->getPost('sugestao_uso_produto'),
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
