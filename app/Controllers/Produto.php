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

    public function update($id)
    {
        // Validação dos dados da requisição
        $validation = \Config\Services::validation();

        $validation->setRules([
            'prod_categoria_id'       => 'required|is_natural_no_zero',
            'prod_subcategoria_id'    => 'permit_empty|is_natural_no_zero',
            'nome_produto'            => 'required|min_length[3]|max_length[255]',
            'codigo_barras'           => 'required|max_length[13]',
            'descricao_produto'       => 'required',
            'dimensoes_produto'       => 'permit_empty|max_length[255]',
            'peso_produto'            => 'permit_empty|integer',
            'cor_produto'             => 'permit_empty|max_length[50]',
            'material_embalagem'      => 'permit_empty|max_length[255]',
            'temperatura_armazenamento' => 'permit_empty|max_length[255]',
            'tabela_nutricional'      => 'permit_empty',
            'alergenos'               => 'permit_empty',
            'preco_custo'             => 'permit_empty|decimal',
            'preco_venda'             => 'permit_empty|decimal',
            'impostos'                => 'permit_empty|decimal',
            'fornecedor'              => 'permit_empty|max_length[255]',
            'validade_produto'        => 'permit_empty|valid_date[Y-m-d]',
            'localizacao_produto'     => 'permit_empty|max_length[255]',
            'lote_produto'            => 'permit_empty|max_length[50]',
            'data_fabricacao'         => 'permit_empty|valid_date[Y-m-d]',
            'data_validade'           => 'permit_empty|valid_date[Y-m-d]',
            'imagem_produto'          => 'permit_empty|is_image[imagem_produto]',
            'ingredientes_produto'    => 'permit_empty',
            'beneficios_produto'      => 'permit_empty',
            'sugestao_uso_produto'    => 'permit_empty',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Retorna para o formulário com os erros de validação
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Coleta os dados do formulário
        $produtoData = $this->request->getPost();

        // Adiciona o ID ao array de dados
        $produtoData['prod_produto_id'] = $id;

        // Atualiza o registro no banco de dados
        if ($this->produtoModel->save($produtoData)) {
            // Redireciona com mensagem de sucesso
            return redirect()->to('/produto')->with('success', 'Produto atualizado com sucesso!');
        } else {
            // Retorna para o formulário com os erros do modelo
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
