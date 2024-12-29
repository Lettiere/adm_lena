<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model
{
    protected $table = 'prod_estoque_tb';
    protected $primaryKey = 'prod_estoque_id';

    protected $useSoftDeletes = true;
    protected $deletedField = 'deleted_at';

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
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

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

    /**
     * Método para salvar o lançamento de estoque e os itens relacionados.
     *
     * @param array $dadosEstoque - Dados gerais do estoque.
     * @param array $itensEstoque - Lista de itens do estoque.
     * @return bool
     */
    public function salvarLancamentoComItens($dadosEstoque, $itensEstoque)
    {
        // Valida os dados gerais do estoque
        if (!$this->validate($dadosEstoque)) {
            return false;
        }

        // Inicia a transação para garantir que os dados sejam salvos de forma atômica
        $this->db->transStart();

        try {
            // Salva os dados principais do estoque
            $this->insert($dadosEstoque);
            $estoqueId = $this->insertID(); // Obtém o ID do estoque inserido

            // Agora, insere cada item de estoque
            $estoqueItemModel = new EstoqueItemModel();
            foreach ($itensEstoque as $item) {
                // Relaciona o item ao estoque principal, definindo o estoque_id
                $item['base_estoque_lancamento_id'] = $estoqueId;
                $estoqueItemModel->insert($item);
            }

            // Finaliza a transação
            $this->db->transComplete();

            // Retorna se a transação foi bem-sucedida
            return $this->db->transStatus();
        } catch (\Exception $e) {
            // Reverte a transação caso haja algum erro
            $this->db->transRollback();
            log_message('error', 'Erro ao salvar estoque: ' . $e->getMessage());
            return false;
        }
    }
}
