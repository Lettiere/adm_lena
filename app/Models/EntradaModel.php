<?php

namespace App\Models;

use CodeIgniter\Model;

class EntradaModel extends Model
{
    protected $table = 'prod_entrada_tb';
    protected $primaryKey = 'prod_entrada_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'numero_nf',
        'data_emissao',
        'fornecedor_id',
        'produto_id',
        'quantidade',
        'preco_unitario'
        // Removido 'valor_total' do allowedFields
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'numero_nf' => 'required|string|max_length[50]',
        'data_emissao' => 'required|valid_date',
        'fornecedor_id' => 'required|integer',
        'produto_id' => 'required|integer',
        'quantidade' => 'required|integer|greater_than[0]',
        'preco_unitario' => 'required|decimal'
        // Removido 'valor_total' da validação
    ];

    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['calcularValorTotal']; // Callback para calcular o valor total
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    /**
     * Adiciona múltiplas entradas de produtos no banco de dados.
     *
     * @param array $dadosValidos
     * @return bool
     */
    public function adicionarEntradasEmLote(array $dadosValidos)
    {
        if (empty($dadosValidos)) {
            return false;
        }

        try {
            // Calcula o valor total para cada entrada antes de inserir
            foreach ($dadosValidos as &$entrada) {
                // Verifica se 'quantidade' e 'preco_unitario' estão presentes
                if (isset($entrada['quantidade']) && isset($entrada['preco_unitario'])) {
                    $entrada['valor_total'] = $entrada['quantidade'] * $entrada['preco_unitario'];
                } else {
                    $entrada['valor_total'] = 0; // Define valor padrão se os campos estiverem ausentes
                }
            }
            return $this->insertBatch($dadosValidos);
        } catch (\Exception $e) {
            log_message('error', 'Erro ao adicionar entradas em lote: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Calcula o valor total de uma entrada antes de inserir no banco.
     *
     * @param array $data
     * @return array
     */
    protected function calcularValorTotal(array $data)
    {
        // Verifica se 'quantidade' e 'preco_unitario' estão presentes no array
        if (isset($data['quantidade']) && isset($data['preco_unitario'])) {
            $data['valor_total'] = $data['quantidade'] * $data['preco_unitario'];
        } else {
            $data['valor_total'] = 0; // Define valor padrão se os campos estiverem ausentes
        }
        return $data;
    }
}
