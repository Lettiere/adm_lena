<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use CodeIgniter\Controller;

class Categoria extends Controller
{
    public function index()
    {
        // Instancia o modelo
        $categoriaModel = new CategoriaModel();

        // Consulta os dados da tabela de categorias
        $categorias = $categoriaModel->findAll();  // Isso traz todas as categorias

        // Passa as categorias para a view
        return view('categoria/index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('categoria/create');
    }

    public function salvar()
    {
        // Instancia o modelo
        $categoriaModel = new CategoriaModel();

        // Definir regras de validação
        if (!$this->validate([
            'nome_categoria' => 'required|max_length[255]'
        ])) {
            // Caso falhe a validação, envia o erro de volta para a view
            return redirect()->back()->withInput()->with('error', 'O nome da categoria é obrigatório.');
        }

        // Dados a serem salvos
        $data = [
            'nome_categoria' => $this->request->getPost('nome_categoria')
        ];

        // Tenta inserir a nova categoria
        if ($categoriaModel->insert($data)) {
            return redirect()->to('/categoria')->with('success', 'Categoria cadastrada com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao cadastrar categoria.');
        }
    }
}
