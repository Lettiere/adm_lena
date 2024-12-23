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
    protected $estoqueLancamentoModel; // Corrigido para camelCase
    protected $fornecedorModel;
    protected $entradaModel; // Corrigido para camelCase

    public function __construct()
    {
        $this->estoqueModel = new EstoqueModel();
        $this->produtoModel = new ProdutoModel();
        $this->estoqueLancamentoModel = new EstoqueLancamentoModel(); // Inicializado corretamente
        $this->fornecedorModel = new FornecedorModel(); // Inicializado corretamente
        $this->entradaModel = new EntradaModel(); // Corrigido para camelCase
    }


    /**
     * Exibe a lista de produtos e seus estoques.
     */
    public function index()
    {
        // Carregar dados do estoque e produtos
        $estoques = $this->estoqueModel->findAll();
        $produtos = $this->produtoModel->findAll();

        // Garantir que os dados sejam passados para a view
        $data = [
            'estoques' => $estoques,
            'produtos' => $produtos,
        ];

        // Renderizar a view com os dados carregados
        return view('estoque/index', $data);
    }

    public function entradas()
    {
        // Carregar dados do estoque e produtos
        $produtos = $this->produtoModel
            ->select('prod_produto_id, nome_produto, preco_venda, codigo_barras')
            ->findAll();

        // Carregar dados dos fornecedores
        $fornecedorModel = new \App\Models\FornecedorModel(); // Certifique-se de que o modelo existe
        $fornecedores = $fornecedorModel
            ->select('base_fornecedor_id, razao_social, nome_fantasia')
            ->where('status', 'ativo')
            ->findAll();

        $data = [
            'produtos' => $produtos,
            'fornecedores' => $fornecedores,
        ];

        // Renderizar a view
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

        // Simulação de atualização no servidor
        return $this->response->setJSON([
            'success' => true,
            'message' => 'Valor adicionado com sucesso.'
        ]);
    }

    public function edit($id)
    {
        log_message('debug', 'Edit chamado com ID: ' . $id);

        // Busca os dados do estoque no banco, incluindo os dados do produto relacionado
        $estoque = $this->estoqueModel
            ->select('prod_estoque_tb.*, prod_produto_tb.nome_produto')
            ->join('prod_produto_tb', 'prod_estoque_tb.prod_produto_id = prod_produto_tb.prod_produto_id')
            ->where('prod_estoque_tb.prod_estoque_id', $id)
            ->first();

        if (!$estoque) {
            // Redireciona para a lista com mensagem de erro se não encontrar o estoque
            return redirect()->route('estoque')->with('error', 'Estoque não encontrado.');
        }

        // Passa os dados do estoque para a view
        $data = [
            'estoque' => $estoque,
        ];

        // Retorna a view de edição com os dados carregados
        return view('estoque/edit', $data);
    }

    public function salvarEstoque()
    {
        log_message('debug', 'Dados recebidos: ' . print_r($this->request->getPost(), true));

        // Instancia os modelos necessários
        $estoqueLancamentoModel = new EstoqueLancamentoModel();
        $estoqueItemModel = new EstoqueItemModel();
        $produtoModel = new ProdutoModel();
        $fornecedorModel = new FornecedorModel();

        // Verifica se o método da requisição é POST
        if ($this->request->getMethod() === 'post') {
            try {
                // Coleta os dados do formulário
                $numero_nf = $this->request->getPost('numero_nf');
                $data_emissao_nf = $this->request->getPost('data_emissao_nf');
                $fornecedor_id = $this->request->getPost('fornecedor_id');
                $estoque = $this->request->getPost('estoque'); // Array com produtos

                // Log dos dados recebidos
                log_message('debug', 'Dados recebidos no salvarEstoque: ' . print_r($this->request->getPost(), true));

                // Validação básica
                if (!$numero_nf || !$data_emissao_nf || !$fornecedor_id || empty($estoque)) {
                    log_message('error', 'Erro: Dados incompletos no salvarEstoque.');
                    return redirect()->back()->with('error', 'Preencha todos os campos obrigatórios.');
                }

                // Dados para o lançamento do estoque
                $lancamentoData = [
                    'numero_nf' => $numero_nf,
                    'data_emissao_nf' => $data_emissao_nf,
                    'fornecedor_id' => $fornecedor_id,
                    'data_lancamento' => date('Y-m-d H:i:s'),
                ];

                // Insere o lançamento no banco
                if (!$estoqueLancamentoModel->insert($lancamentoData)) {
                    log_message('error', 'Erro ao inserir lançamento de estoque: ' . print_r($estoqueLancamentoModel->errors(), true));
                    return redirect()->back()->with('error', 'Erro ao salvar o lançamento do estoque.');
                }

                // Recupera o ID do lançamento
                $estoqueLancamentoId = $estoqueLancamentoModel->getInsertID();
                log_message('debug', "Lançamento de estoque criado com ID: $estoqueLancamentoId");

                // Insere cada item do estoque
                foreach ($estoque as $item) {
                    if (
                        empty($item['produto_id']) ||
                        empty($item['quantidade_item']) ||
                        empty($item['preco_unitario_item'])
                    ) {
                        log_message('error', 'Erro: Dados do item do estoque estão incompletos: ' . print_r($item, true));
                        continue;
                    }

                    // Dados para o item de estoque
                    $estoqueItemData = [
                        'base_estoque_lancamento_id' => $estoqueLancamentoId,
                        'produto_id' => $item['produto_id'],
                        'quantidade_item' => $item['quantidade_item'],
                        'preco_unitario_item' => $item['preco_unitario_item'],
                        'valor_total_item' => $item['quantidade_item'] * $item['preco_unitario_item'],
                    ];

                    if (!$estoqueItemModel->insert($estoqueItemData)) {
                        log_message('error', 'Erro ao inserir item de estoque: ' . print_r($estoqueItemModel->errors(), true));
                    }
                }

                // Redireciona com mensagem de sucesso
                return redirect()->to('/estoque/index')->with('success', 'Estoque salvo com sucesso!');
            } catch (\Exception $e) {
                log_message('critical', 'Exceção no método salvarEstoque: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Ocorreu um erro inesperado ao salvar o estoque.');
            }
        }

        // Se não for uma requisição POST, carrega o formulário novamente
        return redirect()->to('/estoque/entradas');
    }
    public function salvarEstoque_old()
    {
        $dados = $this->request->getPost();
        var_dump($dados);
        return false;
    }

    public function adicionar()
    {
        // Recebe os dados do formulário via POST
        $data = [
            'numero_nf' => $this->request->getPost('numero_nf'),
            'data_emissao' => $this->request->getPost('data_emissao_nf'),
            'fornecedor_id' => $this->request->getPost('fornecedor_id'),
            'produto_id' => $this->request->getPost('produto_id'),
            'quantidade' => (int)$this->request->getPost('quantidade'), // Garantir que seja um inteiro
            'preco_unitario' => (float)$this->request->getPost('preco_unitario'), // Garantir que seja um float
            'valor_total' => (int)$this->request->getPost('quantidade') * (float)$this->request->getPost('preco_unitario')
        ];

        // Validação dos dados antes de tentar inserir
        if (!$this->entradaModel->validate($data)) {
            // Captura os erros de validação
            $errors = $this->entradaModel->errors();

            // Redirecionar com os erros de validação
            return redirect()->route('estoque')->withInput()->with('errors', $errors);
        }

        // Tenta inserir os dados no modelo
        if ($this->entradaModel->insert($data)) {
            // Redirecionar ou mostrar mensagem de sucesso
            return redirect()->route('estoque')->with('success', 'Estoque salvo com sucesso!');
        } else {
            // Mostrar mensagem de erro genérica
            return redirect()->route('estoque')->with('error', 'Erro ao salvar o estoque. Tente novamente.');
        }
    }
}