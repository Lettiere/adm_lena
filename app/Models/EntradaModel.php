<?php

namespace App\Models;

use CodeIgniter\Model;

class EntradaModel extends Model
{
    protected $table            = 'prod_entrada_tb';
    protected $primaryKey       = 'prod_entrada_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'numero_nf',
        'data_emissao',
        'fornecedor_id',
        'produto_id',
        'quantidade',
        'preco_unitario',
        'valor_total'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'numero_nf' => 'required|string|max_length[50]',
        'data_emissao' => 'required|valid_date',
        'fornecedor_id' => 'required|integer',
        'produto_id' => 'required|integer',
        'quantidade' => 'required|integer|greater_than[0]',
        'preco_unitario' => 'required|decimal',
        'valor_total' => 'required|decimal'
    ];

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


    // New method to add an entry
    public function adicionarEntrada(array $data)
    {
        // Validate data before insertion
        if ($this->validate($data)) {
            return $this->insert($data);
        } else {
            return false; // or handle validation errors as needed
        }
    }
}