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

    /**
     * Método para editar um produto específico.
     * @param int $id ID do produto a ser editado.
     */
    public function edit($id)
    {
        // Buscar dados do estoque pelo ID
        $estoque = $this->estoqueModel->find($id);
        if (!$estoque) {
            return redirect()->route('estoque')->with('error', 'Estoque não encontrado.');
        }

        // Buscar todos os produtos para preencher o dropdown
        $produtos = $this->produtoModel->findAll();

        // Passar os dados para a view
        $data = [
            'estoque' => $estoque,
            'produtos' => $produtos,
        ];

        // Renderizar a view
        return view('estoque/update', $data);
    }
}