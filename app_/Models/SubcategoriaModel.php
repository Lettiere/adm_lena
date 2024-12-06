<?php

namespace App\Models;

use CodeIgniter\Model;

class SubcategoriaModel extends Model
{
    protected $table            = 'prod_subcategoria_tb'; // Nome correto da tabela
    protected $primaryKey       = 'prod_subcategoria_id'; // Chave primária
    protected $useAutoIncrement = true; // Auto incremento
    protected $returnType       = 'array'; // Retorna os dados como array
    protected $useSoftDeletes   = false; // Não utiliza Soft Deletes
    protected $protectFields    = true; // Protege os campos
    protected $allowedFields    = ['nome_subcategoria', 'prod_categoria_id']; // Campos permitidos para inserção/atualização

    protected bool $allowEmptyInserts = false; // Não permite inserções vazias
    protected bool $updateOnlyChanged = true; // Atualiza apenas os campos alterados

    // Casting de campos (opcional, adicione se necessário)
    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false; // Não utiliza timestamps automáticos
    protected $dateFormat    = 'datetime'; // Formato de data
    protected $createdField  = 'created_at'; // Campo de criação (se necessário)
    protected $updatedField  = 'updated_at'; // Campo de atualização (se necessário)
    protected $deletedField  = 'deleted_at'; // Campo de exclusão (se necessário)

    // Validation
    protected $validationRules = [
        'nome_subcategoria' => 'required|max_length[255]', // Regras de validação para o nome
        'prod_categoria_id' => 'required|integer|is_not_unique[prod_categoria_tb.prod_categoria_id]' // Regras de validação para a chave estrangeira
    ];
    protected $validationMessages = [
        'nome_subcategoria' => [
            'required' => 'O campo Nome da Subcategoria é obrigatório.',
            'max_length' => 'O Nome da Subcategoria deve ter no máximo 255 caracteres.'
        ],
        'prod_categoria_id' => [
            'required' => 'O campo Categoria é obrigatório.',
            'integer' => 'O ID da Categoria deve ser um número inteiro.',
            'is_not_unique' => 'A Categoria selecionada não existe no banco de dados.'
        ]
    ];
    protected $skipValidation = false; // Habilita validação
    protected $cleanValidationRules = true; // Limpa as regras de validação antes de validar

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
