<?php

namespace App\Models;

use CodeIgniter\Model;

class ViewProdutoModel extends Model
{
    // Nome da view
    protected $table = 'view_produto_tb';
    protected $primaryKey = 'prod_produto_id';
    protected $returnType = 'array'; // Retorna os dados como array
    protected $useAutoIncrement = false; // Views não utilizam auto incremento
    protected $protectFields = false; // Desativado, pois a view é somente leitura

    /**
     * Obtém produtos com base em um ID ou todos os registros da view.
     *
     * @param int|null $id
     * @return array|null
     */
    public function getProdutos($id = null)
    {
        if ($id !== null) {
            $produto = $this->where('prod_produto_id', $id)->first(); // Busca um único produto pelo ID
            return $produto ? $produto : null; // Retorna null caso o produto não seja encontrado
        }
        return $this->findAll(); // Busca todos os produtos
    }

    /**
     * Busca produtos filtrados por categoria.
     *
     * @param int $categoriaId
     * @return array|null
     */
    public function getByCategoria($categoriaId)
    {
        $produtos = $this->where('prod_categoria_id', $categoriaId)->findAll();
        return $produtos ?: null; // Retorna null caso não haja produtos na categoria
    }

    /**
     * Busca produtos com estoque abaixo do mínimo.
     *
     * @return array|null
     */
    public function getEstoqueBaixo()
    {
        $produtos = $this->where('quantidade_disponivel < quantidade_minima')->findAll();
        return $produtos ?: null; // Retorna null caso não haja produtos com estoque baixo
    }
}
