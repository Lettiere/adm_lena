<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SubcategoriaModel;
use App\Models\CategoriaModel;

class Subcategoria extends BaseController
{
    protected $subcategoriaModel;
    protected $categoriaModel;

    public function __construct()
    {
        $this->subcategoriaModel = new SubcategoriaModel();
        $this->categoriaModel = new CategoriaModel();
    }

    public function index()
    {
        // Busca todas as subcategorias e suas categorias relacionadas
        $subcategorias = $this->subcategoriaModel
            ->select('prod_subcategoria_tb.*, prod_categoria_tb.nome_categoria')
            ->join('prod_categoria_tb', 'prod_subcategoria_tb.prod_categoria_id = prod_categoria_tb.prod_categoria_id', 'left')
            ->findAll();

        return view('subcategoria/index', ['subcategorias' => $subcategorias]);
    }


    public function create()
    {
        $categorias = $this->categoriaModel->findAll();

        return view('subcategoria/create', ['categorias' => $categorias]);
    }

    public function salvar()
    {
        // Validação dos dados do formulário
        if (!$this->validate([
            'nome_subcategoria' => 'required|max_length[255]',
            'prod_categoria_id' => 'required|is_natural_no_zero',
        ])) {
            return redirect()->back()->withInput()->with('error', 'Preencha todos os campos obrigatórios.');
        }

        // Dados a serem salvos
        $data = [
            'nome_subcategoria' => $this->request->getPost('nome_subcategoria'),
            'prod_categoria_id' => $this->request->getPost('prod_categoria_id'),
        ];

        // Insere a subcategoria no banco de dados
        if ($this->subcategoriaModel->insert($data)) {
            return redirect()->to('/subcategoria')->with('success', 'Subcategoria cadastrada com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar subcategoria.');
        }
    }
}