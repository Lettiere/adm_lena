<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueItemModel extends Model
{
    protected $table = 'base_estoque_item_tb'; // Nome da tabela
    protected $primaryKey = 'base_estoque_item_id'; // Chave primária

    // Campos que podem ser preenchidos
    protected $allowedFields = [
        'base_estoque_lancamento_id',
        'produto_id',
        'quantidade_item',
        'preco_unitario_item',
        'valor_total_item',
    ];

    // Ativando timestamps automáticos
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Tipos de dados para validação
    protected $validationRules = [
        'base_estoque_lancamento_id' => 'required|integer',
        'produto_id' => 'required|integer',
        'quantidade_item' => 'required|integer',
        'preco_unitario_item' => 'required|numeric',
        'valor_total_item' => 'required|numeric',
    ];

    protected $validationMessages = [
        'base_estoque_lancamento_id' => [
            'required' => 'O campo Lançamento ID é obrigatório.',
            'integer' => 'O campo Lançamento ID deve ser um número inteiro.',
        ],
        'produto_id' => [
            'required' => 'O campo Produto ID é obrigatório.',
            'integer' => 'O campo Produto ID deve ser um número inteiro.',
        ],
        'quantidade_item' => [
            'required' => 'O campo Quantidade do Item é obrigatório.',
            'integer' => 'O campo Quantidade do Item deve ser um número inteiro.',
        ],
        'preco_unitario_item' => [
            'required' => 'O campo Preço Unitário do Item é obrigatório.',
            'numeric' => 'O campo Preço Unitário deve ser um número.',
        ],
        'valor_total_item' => [
            'required' => 'O campo Valor Total do Item é obrigatório.',
            'numeric' => 'O campo Valor Total deve ser um número.',
        ],
    ];

    // Método para recuperar os itens de estoque por lançamento
    public function getItemsByLancamentoId($lancamentoId)
    {
        return $this->where('base_estoque_lancamento_id', $lancamentoId)
            ->findAll();
    }
}