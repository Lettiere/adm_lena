<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table            = 'prod_produto_tb';
    protected $primaryKey       = 'prod_produto_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'prod_categoria_id',
        'prod_subcategoria_id',
        'nome_produto',
        'codigo_barras',
        'descricao_produto',
        'subcategoria_produto',
        'dimensoes_produto',
        'peso_produto',
        'cor_produto',
        'material_embalagem',
        'temperatura_armazenamento',
        'tabela_nutricional',
        'alergenos',
        'preco_custo',
        'preco_venda',
        'impostos',
        'fornecedor',
        'validade_produto',
        'localizacao_produto',
        'lote_produto',
        'data_fabricacao',
        'data_validade',
        'imagem_produto',
        'ingredientes_produto',
        'beneficios_produto',
        'sugestao_uso_produto'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
