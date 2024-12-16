<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstoqueModel;
use App\Models\ProdutoModel;

class Estoque extends BaseController
{
    protected $estoqueModel;
    protected $produtoModel;

    public function __construct()
    {
        $this->estoqueModel = new EstoqueModel();
        $this->produtoModel = new ProdutoModel();
    }

    /**
     * Exibe a lista de produtos e seus estoques.
     */
    public function index()
    {
        // Carregar dados do estoque e produtos
        $estoques = $this->estoqueModel->findAll();
        $produtos = $this->produtoModel->findAll();

        // Garantir que os dados sejam passados para a view
        $data = [
            'estoques' => $estoques,
            'produtos' => $produtos,
        ];

        // Renderizar a view com os dados carregados
        return view('estoque/index', $data);
    }


    public function entradas()
    {
        // Carregar dados do estoque e produtos
        $estoques = $this->estoqueModel->findAll();
        $produtos = $this->produtoModel->findAll();

        // Garantir que os dados sejam passados para a view
        $data = [
            'estoques' => $estoques,
            'produtos' => $produtos,
        ];

        // Renderizar a view com os dados carregados
        return view('estoque/entradas', $data);
    }







    public function edit($id)
    {
        log_message('debug', 'Edit chamado com ID: ' . $id);

        // Busca os dados do estoque no banco, incluindo os dados do produto relacionado
        $estoque = $this->estoqueModel
            ->select('prod_estoque_tb.*, prod_produto_tb.nome_produto')
            ->join('prod_produto_tb', 'prod_estoque_tb.prod_produto_id = prod_produto_tb.prod_produto_id')
            ->where('prod_estoque_tb.prod_estoque_id', $id)
            ->first();

        if (!$estoque) {
            // Redireciona para a lista com mensagem de erro se não encontrar o estoque
            return redirect()->route('estoque')->with('error', 'Estoque não encontrado.');
        }

        // Passa os dados do estoque para a view
        $data = [
            'estoque' => $estoque,
        ];

        // Retorna a view de edição com os dados carregados
        return view('estoque/edit', $data);
    }
}