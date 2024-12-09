<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model
{
    protected $table = 'prod_estoque_tb'; // Nome da tabela
    protected $primaryKey = 'prod_estoque_id'; // Chave primária

    // Ativando uso de soft deletes
    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';

    // Campos que podem ser preenchidos
    protected $allowedFields = [
        'prod_produto_id',
        'quantidade_disponivel',
        'quantidade_reservada',
        'quantidade_minima',
        'quantidade_maxima',
        'numero_lote',
        'data_validade',
        'preco_unitario',
        'data_ultima_entrada',
        'data_ultima_saida',
        'localizacao_estoque',
        'status_estoque',
        'alerta_reposicao',
        'created_at',
        'updated_at',
    ];

    // Ativando timestamps automáticos
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Tipos de dados para validação
    protected $validationRules = [
        'prod_produto_id' => 'required|integer',
        'quantidade_disponivel' => 'required|integer',
        'quantidade_reservada' => 'integer',
        'quantidade_minima' => 'integer',
        'quantidade_maxima' => 'integer',
        'numero_lote' => 'max_length[50]',
        'data_validade' => 'valid_date',
        'preco_unitario' => 'numeric',
        'status_estoque' => 'in_list[ativo,inativo]',
        'alerta_reposicao' => 'in_list[0,1]',
    ];

    protected $validationMessages = [
        'prod_produto_id' => [
            'required' => 'O campo Produto ID é obrigatório.',
            'integer' => 'O campo Produto ID deve ser um número inteiro.',
        ],
        'quantidade_disponivel' => [
            'required' => 'O campo Quantidade Disponível é obrigatório.',
            'integer' => 'O campo Quantidade Disponível deve ser um número inteiro.',
        ],
    ];

    // Métodos personalizados
    public function getStockWithProduct($productId)
    {
        return $this->where('prod_produto_id', $productId)
            ->where('deleted_at', null)
            ->findAll();
    }

    public function alertLowStock()
    {
        return $this->where('quantidade_disponivel <= quantidade_minima')
            ->where('deleted_at', null)
            ->findAll();
    }
}
