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

    // Regras de validação
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

    /**
     * Retorna o estoque de um produto com base no ID.
     *
     * @param int $productId - ID do produto.
     * @return array
     */
    public function getStockWithProduct($productId)
    {
        return $this->where('prod_produto_id', $productId)
            ->where('deleted_at', null)
            ->findAll();
    }

    /**
     * Retorna produtos com estoque baixo.
     *
     * @return array
     */
    public function alertLowStock()
    {
        return $this->where('quantidade_disponivel <= quantidade_minima')
            ->where('deleted_at', null)
            ->findAll();
    }

    /**
     * Salva um lançamento de estoque com seus itens.
     *
     * @param array $dadosEstoque - Dados gerais do estoque.
     * @param array $itensEstoque - Lista de itens do estoque.
     * @return bool
     */
    public function salvarLancamentoComItens($dadosEstoque, $itensEstoque)
    {
        // Valida os dados principais do estoque
        if (!$this->validate($dadosEstoque)) {
            return false; // Se os dados principais falharem na validação
        }

        // Valida os itens de estoque
        foreach ($itensEstoque as $item) {
            if (!$this->validate($item)) {
                return false; // Se algum item falhar na validação
            }
        }

        $this->db->transStart(); // Inicia a transação

        try {
            // Salva os dados principais do estoque
            $this->insert($dadosEstoque);
            $estoqueId = $this->insertID();

            // Salva os itens relacionados ao estoque
            $estoqueItemModel = new EstoqueItemModel();
            foreach ($itensEstoque as $item) {
                $item['prod_estoque_id'] = $estoqueId; // Relaciona com o estoque principal
                $estoqueItemModel->insert($item);
            }

            $this->db->transComplete(); // Finaliza a transação

            return $this->db->transStatus(); // Retorna se a transação foi bem-sucedida
        } catch (\Exception $e) {
            $this->db->transRollback(); // Reverte a transação em caso de erro
            log_message('error', 'Erro ao salvar estoque: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Atualiza a quantidade de estoque após a entrada de um produto.
     *
     * @param int $estoqueId - ID do estoque.
     * @param int $quantidade - Quantidade a ser atualizada.
     * @return bool
     */
    public function atualizarQuantidadeEstoque($estoqueId, $quantidade)
    {
        $estoque = $this->find($estoqueId);

        if ($estoque) {
            $estoque['quantidade_disponivel'] += $quantidade;
            return $this->save($estoque);
        }

        return false;
    }

    /**
     * Retorna o estoque com base no ID de lote.
     *
     * @param string $numeroLote - Número do lote.
     * @return array
     */
    public function getStockByLote($numeroLote)
    {
        return $this->where('numero_lote', $numeroLote)
            ->where('deleted_at', null)
            ->findAll();
    }
}