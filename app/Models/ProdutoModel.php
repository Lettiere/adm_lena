<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table            = 'prod_produto_tb'; // Nome correto da tabela
    protected $primaryKey       = 'prod_produto_id'; // Chave primária
    protected $useAutoIncrement = true;
    protected $returnType       = 'array'; // Retorna os resultados como um array
    protected $useSoftDeletes   = false; // Não utiliza soft deletes
    protected $protectFields    = true;
    protected $allowedFields    = [
        'prod_categoria_id',
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

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'prod_categoria_id' => 'required|is_natural_no_zero',
        'nome_produto'      => 'required|max_length[255]',
        'codigo_barras'     => 'required|max_length[13]',
        'descricao_produto' => 'required',
        // Defina outras validações conforme necessário
    ];

    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}