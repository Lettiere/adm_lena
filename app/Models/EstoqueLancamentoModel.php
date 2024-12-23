<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueLancamentoModel extends Model
{
    protected $table = 'base_estoque_lancamento_tb'; // Nome da tabela
    protected $primaryKey = 'base_estoque_lancamento_id'; // Chave primária

    // Ativando uso de soft deletes
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';

    // Campos que podem ser preenchidos
    protected $allowedFields = [
        'numero_nf',               // Número da nota fiscal ou pedido
        'fornecedor_id',           // ID do fornecedor
        'data_emissao_nf',         // Data de emissão da nota fiscal/pedido
        'quantidade',              // Quantidade de produtos no lançamento
        'preco_unitario',          // Preço unitário do produto
        'valor_total',             // Valor total do lançamento (quantidade * preco_unitario)
        'status_lancamento',       // Status do lançamento (pendente, concluído)
        'data_lancamento',         // Data do lançamento
    ];

    // Ativando timestamps automáticos
    protected $useTimestamps = true;
    protected $createdField = 'data_lancamento';
    protected $updatedField = 'updated_at';

    // Tipos de dados para validação
    protected $validationRules = [
        'numero_nf' => 'required|max_length[50]',
        'fornecedor_id' => 'required|integer',
        'data_emissao_nf' => 'required|valid_date',
        'quantidade' => 'required|integer',
        'preco_unitario' => 'required|decimal',
        'status_lancamento' => 'required|in_list[pendente,concluído]',
    ];

    protected $validationMessages = [
        'numero_nf' => [
            'required' => 'O campo Número da NF/Pedido é obrigatório.',
            'max_length' => 'O campo Número da NF/Pedido deve ter no máximo 50 caracteres.',
        ],
        'fornecedor_id' => [
            'required' => 'O campo Fornecedor é obrigatório.',
            'integer' => 'O campo Fornecedor deve ser um número inteiro.',
        ],
        'quantidade' => [
            'required' => 'O campo Quantidade é obrigatório.',
            'integer' => 'O campo Quantidade deve ser um número inteiro.',
        ],
        'preco_unitario' => [
            'required' => 'O campo Preço Unitário é obrigatório.',
            'decimal' => 'O campo Preço Unitário deve ser um valor decimal.',
        ],
        'status_lancamento' => [
            'required' => 'O campo Status do Lançamento é obrigatório.',
            'in_list' => 'O campo Status do Lançamento deve ser "pendente" ou "concluído".',
        ],
    ];

    // Métodos personalizados

    // Obter lançamentos de estoque por fornecedor
    public function getLancamentosByFornecedor($fornecedorId)
    {
        return $this->where('fornecedor_id', $fornecedorId)
            ->where('deleted_at', null)
            ->findAll();
    }

    // Obter lançamentos pendentes
    public function getLancamentosPendentes()
    {
        return $this->where('status_lancamento', 'pendente')
            ->where('deleted_at', null)
            ->findAll();
    }

    // Função para calcular o valor total do lançamento (quantidade * preço unitário)
    public function calculateValorTotal($quantidade, $precoUnitario)
    {
        return number_format($quantidade * $precoUnitario, 2, '.', '');
    }
}