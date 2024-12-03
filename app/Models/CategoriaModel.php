<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table            = 'prod_categoria_tb'; // Nome correto da tabela
    protected $primaryKey       = 'prod_categoria_id'; // Chave primária
    protected $useAutoIncrement = true;
    protected $returnType       = 'array'; // Retorna os resultados como um array
    protected $useSoftDeletes   = false; // Não utiliza soft deletes
    protected $protectFields    = true;
    protected $allowedFields    = ['nome_categoria']; // Permite a inserção/atualização do campo nome_categoria

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false; // Não vai usar timestamps automáticos
    protected $dateFormat    = 'datetime'; // Formato de data
    protected $createdField  = 'created_at'; // Campo de data de criação (se necessário)
    protected $updatedField  = 'updated_at'; // Campo de data de atualização (se necessário)
    protected $deletedField  = 'deleted_at'; // Campo de data de exclusão (se necessário)

    // Validation
    protected $validationRules      = [
        'nome_categoria' => 'required|max_length[255]',
    ]; // Regras de validação, exemplo para o campo nome_categoria
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