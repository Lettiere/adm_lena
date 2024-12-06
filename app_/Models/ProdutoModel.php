<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'prod_produto_tb'; // Nome correto da tabela
    protected $primaryKey = 'prod_produto_id'; // Chave primária
    protected $useAutoIncrement = true;
    protected $returnType = 'array'; // Retorna os resultados como array
    protected $useSoftDeletes = false; // Não utiliza soft deletes
    protected $protectFields = true;

    protected $allowedFields = [
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
        'imagem_produto', // Campo para a imagem do produto
        'ingredientes_produto',
        'beneficios_produto',
        'sugestao_uso_produto'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false; // Caso timestamps não sejam gerenciados automaticamente
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at'; // Se necessário, ajuste ou remova
    protected $updatedField = 'updated_at'; // Se necessário, ajuste ou remova
    protected $deletedField = 'deleted_at'; // Se necessário, ajuste ou remova

    // Regras de validação
    protected $validationRules = [
        'prod_categoria_id' => 'required|is_natural_no_zero',
        'prod_subcategoria_id' => 'permit_empty|is_natural_no_zero',
        'nome_produto' => 'required|max_length[255]',
        'codigo_barras' => 'required|max_length[13]',
        'descricao_produto' => 'required',
        'subcategoria_produto' => 'permit_empty|max_length[255]',
        'dimensoes_produto' => 'permit_empty|max_length[50]',
        'peso_produto' => 'permit_empty|integer',
        'cor_produto' => 'permit_empty|max_length[50]',
        'material_embalagem' => 'permit_empty|max_length[50]',
        'temperatura_armazenamento' => 'permit_empty|max_length[50]',
        'tabela_nutricional' => 'permit_empty',
        'alergenos' => 'permit_empty',
        'preco_custo' => 'permit_empty|decimal',
        'preco_venda' => 'permit_empty|decimal',
        'impostos' => 'permit_empty|max_length[255]',
        // Validação específica para a imagem do produto
        'imagem_produto' => [
            // Adiciona regras de validação para a imagem
            "uploaded[imagem_produto]",
            "is_image[imagem_produto]",
            "ext_in[imagem_produto,jpg,jpeg,png,gif,webp]"
        ],
    ];

    protected $validationMessages = [
        // Mensagens de validação personalizadas
        "prod_categoria_id" => [
            "required" => "A categoria é obrigatória.",
            "is_natural_no_zero" => "Selecione uma categoria válida."
        ],
        "nome_produto" => [
            "required" => "O nome do produto é obrigatório.",
            "max_length" => "O nome do produto não pode exceder 255 caracteres."
        ],
        "codigo_barras" => [
            "required" => "O código de barras é obrigatório.",
            "max_length" => "O código de barras não pode exceder 13 caracteres."
        ],
        "descricao_produto" => [
            "required" => "A descrição do produto é obrigatória."
        ],
        "imagem_produto" => [
            "uploaded" => "A imagem do produto é obrigatória.",
            "is_image" => "O arquivo deve ser uma imagem válida.",
            "ext_in" => "As extensões permitidas são: jpg, jpeg, png, gif e webp."
        ]
    ];

    protected $skipValidation = false; // Validação ativa

    // Método para buscar produtos com categorias e subcategorias
    public function getWithRelations($id = null)
    {
        $builder = $this->db->table($this->table)
            ->select('prod_produto_tb.*, prod_categoria_tb.nome_categoria, prod_subcategoria_tb.nome_subcategoria')
            ->join(
                'prod_categoria_tb',
                '$this->table.prod_categoria_id = prod_categoria_tb.prod_categoria_id',
                'left'
            )
            ->join(
                'prod_subcategoria_tb',
                '$this->table.prod_subcategoria_id = prod_subcategoria_tb.prod_subcategoria_id',
                'left'
            );

        if ($id !== null) {
            $builder->where('prod_produto_tb.prod_produto_id', $id);
            return $builder->get()->getRowArray(); // Retorna uma única linha
        }

        return $builder->get()->getResultArray(); // Retorna múltiplos resultados
    }
}