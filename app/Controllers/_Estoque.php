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

    public function edit($id)
    {
        // Verifica se o produto existe
        $produto = $this->produtoModel->find($id);

        if (!$produto) {
            // Se não encontrar o produto, redireciona ou exibe uma mensagem de erro
            return redirect()->to('/estoque')->with('error', 'Produto não encontrado.');
        }

        // Carregar a lista de produtos para o select (se necessário)
        $produtos = $this->produtoModel->findAll();

        // Carregar dados necessários para o formulário de edição
        $data = [
            'produto' => $produto,
            'produtos' => $produtos,  // Certifique-se de passar a lista de produtos
        ];

        // Renderizar a view de edição
        return view('estoque/edit', $data);
    }
}
