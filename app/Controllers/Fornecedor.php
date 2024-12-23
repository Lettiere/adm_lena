<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FornecedorModel;


class Fornecedor extends BaseController
{

    protected $fornecedorModel;
    protected $validation;

    public function index()
    {
        return view('fornecedor/index');
    }

    public function create()
    {
        return view('fornecedor/create');
    }


    public function salvar()
    {
        $razao_social = $this->request->getPost('razao_social');
        $nome_fantasia = $this->request->getPost('nome_fantasia');
        $tipo_fornecedor = $this->request->getPost('tipo_fornecedor');
        $cpf_cnpj = $this->request->getPost('cpf_cnpj');
        $inscricao_estadual = $this->request->getPost('inscricao_estadual');
        $inscricao_municipal = $this->request->getPost('inscricao_municipal');
        $endereco = $this->request->getPost('endereco');
        $numero = $this->request->getPost('numero');
        $complemento = $this->request->getPost('complemento');
        $bairro = $this->request->getPost('bairro');
        $cidade_id = $this->request->getPost('cidade_id');
        $estado_id = $this->request->getPost('estado_id');
        $cep = $this->request->getPost('cep');
        $telefone = $this->request->getPost('telefone');
        $email = $this->request->getPost('email');
        $responsavel = $this->request->getPost('responsavel');

        $fornecedor = new \App\Models\FornecedorModel();
        $fornecedor->set('razao_social', $razao_social);
        $fornecedor->set('nome_fantasia', $nome_fantasia);
        $fornecedor->set('tipo_fornecedor', $tipo_fornecedor);
        $fornecedor->set('cpf_cnpj', $cpf_cnpj);
        $fornecedor->set('inscricao_estadual', $inscricao_estadual);
        $fornecedor->set('inscricao_municipal', $inscricao_municipal);
        $fornecedor->set('endereco', $endereco);
        $fornecedor->set('numero', $numero);
        $fornecedor->set('complemento', $complemento);
        $fornecedor->set('bairro', $bairro);
        $fornecedor->set('cidade_id', $cidade_id);
        $fornecedor->set('estado_id', $estado_id);
        $fornecedor->set('cep', $cep);
        $fornecedor->set('telefone', $telefone);
        $fornecedor->set('email', $email);
        $fornecedor->set('responsavel', $responsavel);

        $fornecedor_existente = $fornecedor->where('cpf_cnpj', $cpf_cnpj)->first();

        if ($fornecedor_existente) {
            return redirect()->back()->with('error', 'CNPJ/CPF já  cadastrado!');
        } else {
            if ($fornecedor->insert()) {
                echo '<script>
                        if (confirm("Fornecedor cadastrado com sucesso! Deseja ir para a p gina de cria o ou lista de fornecedores?")) {
                            if (confirm("Clique OK para ir para a p gina de cria o ou Cancelar para ir para lista de fornecedores.")) {
                                window.location.href = "' . site_url('fornecedor/create') . '";
                            } else {
                                window.location.href = "' . site_url('fornecedor') . '";
                            }
                        }
                      </script>';
            } else {
                return redirect()->back()->with('error', 'Erro ao cadastrar o fornecedor!');
            }
        }
    }
}