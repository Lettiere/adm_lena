<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EstoqueModel;
use App\Models\ProdutoModel;
use App\Models\EstoqueLancamentoModel;
use App\Models\FornecedorModel;
use App\Models\EstoqueItemModel;
use App\Models\EntradaModel;

class Estoque extends BaseController
{
    protected $estoqueModel;
    protected $produtoModel;
    protected $fornecedorModel;
    protected $entradaModel;

    public function __construct()
    {
        $this->estoqueModel = new EstoqueModel();
        $this->produtoModel = new ProdutoModel();
        $this->fornecedorModel = new FornecedorModel();
        $this->entradaModel = new EntradaModel();
    }

    public function index()
    {
        $estoques = $this->estoqueModel->findAll();
        $produtos = $this->produtoModel->findAll();

        // Calcular a soma das quantidades por produto usando a tabela de entradas
        $entradas = $this->entradaModel
            ->select('produto_id, SUM(quantidade) AS total_quantidade')
            ->groupBy('produto_id')
            ->findAll();

        // Mapear produto_id com total_quantidade
        $quantidadesPorProduto = [];
        foreach ($entradas as $entrada) {
            $quantidadesPorProduto[$entrada['produto_id']] = $entrada['total_quantidade'];
        }

        $data = [
            'estoques' => $estoques,
            'produtos' => $produtos,
            'quantidades_por_produto' => $quantidadesPorProduto,
        ];

        return view('estoque/index', $data);
    }

    public function entradas()
    {
        $produtos = $this->produtoModel
            ->select('prod_produto_id, nome_produto, preco_venda, codigo_barras')
            ->findAll();

        $fornecedores = $this->fornecedorModel
            ->select('base_fornecedor_id, razao_social, nome_fantasia')
            ->where('status', 'ativo')
            ->findAll();

        $data = [
            'produtos' => $produtos,
            'fornecedores' => $fornecedores,
        ];

        return view('estoque/entradas', $data);
    }

    public function adicionarValor()
    {
        $request = $this->request->getJSON(true);
        $produtoId = $request['produtoId'] ?? null;
        $valor = $request['valor'] ?? null;

        if (!$produtoId || $valor <= 0) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Dados inválidos.'
            ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Valor adicionado com sucesso.'
        ]);
    }

    public function edit()
    {
        return view('estoque/edit');
    }

    public function adicionar()
    {
        // Capturar dados do formulário
        $numero_nf = $this->request->getPost('numero_nf');
        $data_emissao = $this->request->getPost('data_emissao_nf');
        $fornecedor_id = $this->request->getPost('fornecedor_id');

        // Capturar os produtos da tabela dinâmica
        $estoqueData = $this->request->getPost('estoque'); // Dados da tabela dinâmica

        // Verificar se os dados de estoque têm a estrutura correta
        if (!$estoqueData || !is_array($estoqueData)) {
            return redirect()->back()->with('error', 'Dados de estoque inválidos.');
        }

        foreach ($estoqueData as $produtoId => $dadosProduto) {
            if (!isset($dadosProduto['quantidade_item']) || !isset($dadosProduto['preco_unitario_item'])) {
                log_message('error', 'Dados ausentes para o produto ' . $produtoId);
                return redirect()->back()->with('error', 'Dados ausentes para o produto ' . $produtoId);
            }
        }

        // Iniciar a transação para garantir a integridade dos dados
        $db = \Config\Database::connect();
        $db->transStart();

        // Inserir os dados na tabela de entradas para cada produto
        foreach ($estoqueData as $produtoId => $dadosProduto) {
            if (isset($dadosProduto['quantidade_item'], $dadosProduto['preco_unitario_item'])) {
                $quantidade = $dadosProduto['quantidade_item'];
                $preco_unitario = $dadosProduto['preco_unitario_item'];
                $valor_total = $quantidade * $preco_unitario;

                // Preparar os dados para inserção
                $entradaData = [
                    'numero_nf'      => $numero_nf,
                    'data_emissao'   => $data_emissao,
                    'fornecedor_id'  => $fornecedor_id,
                    'produto_id'     => $produtoId,
                    'quantidade'     => $quantidade,
                    'preco_unitario' => $preco_unitario,
                    'valor_total'    => $valor_total,
                ];

                // Inserir o produto na tabela de entradas
                $this->entradaModel->insert($entradaData);
            } else {
                log_message('error', 'Dados ausentes para o produto ' . $produtoId);
                return redirect()->back()->with('error', 'Dados ausentes para o produto ' . $produtoId);
            }
        }

        // Commit ou rollback da transação
        $db->transComplete();

        if ($db->transStatus() === FALSE) {
            return redirect()->back()->with('error', 'Erro ao adicionar entradas.');
        } else {
            return redirect()->to('/estoque')->with('success', 'Entradas adicionadas com sucesso!');
        }
    }

    public function adicionarEntradasEmLote(array $dadosValidos)
    {
        if (empty($dadosValidos)) {
            return false;
        }

        try {
            // Verificar e calcular o valor total para cada entrada
            foreach ($dadosValidos as &$entrada) {
                if (isset($entrada['quantidade']) && isset($entrada['preco_unitario'])) {
                    $entrada['valor_total'] = $entrada['quantidade'] * $entrada['preco_unitario'];
                } else {
                    log_message('error', 'Dados ausentes para o produto: ' . json_encode($entrada));
                    throw new \Exception('Dados ausentes para calcular o valor total');
                }
            }
            return $this->entradaModel->insertBatch($dadosValidos);
        } catch (\Exception $e) {
            log_message('error', 'Erro ao adicionar entradas em lote: ' . $e->getMessage());
            return false;
        }
    }

    protected function calcularValorTotal(array $data)
    {
        // Verificar se as chaves 'quantidade' e 'preco_unitario' existem no array
        if (isset($data['quantidade']) && isset($data['preco_unitario'])) {
            $data['valor_total'] = $data['quantidade'] * $data['preco_unitario'];
        } else {
            // Lançar uma exceção ou logar um erro caso as chaves não existam
            log_message('error', 'Erro: quantidade ou preço unitário ausente');
            throw new \Exception('Erro: quantidade ou preço unitário ausente');
        }

        return $data;
    }
}
