<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.css') ?>">
<style>
.sinopse {
    max-width: 150px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.sinopse-completa {
    display: none;
}

.sinopse:hover .sinopse-completa {
    display: block;
}

.hidden {
    display: none;
}
</style>
<?= $this->endSection('css') ?>
<?= $this->section('content') ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div class="col-12 mt-3">
    <div class="bs-stepper py-3 px-3">
        <form id="estoqueForm" action="<?= base_url('estoque/Adicionar') ?>" method="post">
            <div class="row py-2">
                <!-- Número do Pedido / NF -->
                <div class="col-3">
                    <label for="numeroPedido" class="form-label">Número da NF/Pedido</label>
                    <input type="text" class="form-control" id="numeroPedido" name="numero_nf" required>
                </div>

                <!-- Data de Emissão -->
                <div class="col-3">
                    <label for="dataEmissao" class="form-label">Data de Emissão</label>
                    <input type="date" class="form-control" id="dataEmissao" name="data_emissao_nf" required>
                </div>

                <!-- Fornecedor -->
                <div class="col-6">
                    <label for="fornecedor" class="form-label">Fornecedor</label>
                    <select class="form-select select2" id="fornecedor" name="fornecedor_id" style="width: 100%"
                        required>
                        <option value="">Selecione um fornecedor</option>
                        <?php foreach ($fornecedores as $fornecedor): ?>
                        <option value="<?= $fornecedor['base_fornecedor_id'] ?>"> <?= $fornecedor['nome_fantasia'] ?> -
                            <?= $fornecedor['razao_social'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- Produto -->
            <div class="row py-2">
                <div class="col-6">
                    <label for="produto" class="form-label">Produto</label>
                    <select class="form-select select2" id="produto" name="produto_id" style="width: 100%" required>
                        <option value="">Selecione um produto</option>
                        <?php foreach ($produtos as $produto): ?>
                        <option value="<?= $produto['prod_produto_id'] ?>"> <?= $produto['nome_produto'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Preço Unitário -->
                <div class="col-3">
                    <label for="precoUnitario" class="form-label">Preço Unitário</label>
                    <input type="number" class="form-control" id="precoUnitario" name="preco_unitario" min="0.01"
                        step="0.01" required>
                </div>

                <!-- Quantidade -->
                <div class="col-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" required>
                </div>
            </div>

            <!-- Botão de Adicionar Produto -->
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-primary mb-3" id="adicionarProduto">Adicionar Produto</button>
            </div>

            <!-- Tabela Dinâmica para Exibir os Produtos Selecionados -->
            <table id="tabelaProdutos" class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th style="width: 40%;">Produto</th>
                        <th style="width: 20%;">Quantidade</th>
                        <th style="width: 20%;">Preço Unitário</th>
                        <th style="width: 20%;">Valor Total</th>
                        <th class="hidden" style="width: 0;">Número da NF/Pedido</th>
                        <th class="hidden" style="width: 0;">Data de Emissão</th>
                        <th class="hidden" style="width: 0;">Fornecedor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="linhaResumo">
                        <td><strong>Total</strong></td>
                        <td id="totalItens">0</td>
                        <td></td>
                        <td id="valorTotalGeral">0.00</td>
                        <td colspan="4"></td>
                    </tr>
                </tbody>
                <tbody id="estoqueTableBody">
                    <!-- Produtos serão adicionados dinamicamente -->
                </tbody>
            </table>

            <style>
            .hidden {
                display: none;
                /* Oculta as colunas */
            }
            </style>


            <!-- Botão de Envio -->
            <button type="submit" class="btn btn-success">Enviar Estoque</button>
        </form>

        <!-- Modal de Confirmação -->
        <div class="modal fade" id="confirmacaoModal" tabindex="-1" aria-labelledby="confirmacaoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmacaoModalLabel">Confirmar Envio</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <div class='modal-body'> Tem certeza de que deseja enviar este estoque? </div>

                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                        <button type='button' class='btn btn-primary' id='confirmarEnvioModal'>Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('') ?>
<?= $this->Section('js') ?>
<script>
// Atribuindo valores de PHP para variáveis JS
let numeroNF = "<?= isset($_POST['numero_nf']) ? $_POST['numero_nf'] : ''; ?>";
let dataEmissao = "<?= isset($_POST['data_emissao_nf']) ? $_POST['data_emissao_nf'] : ''; ?>";
let fornecedorId = "<?= isset($_POST['fornecedor_id']) ? $_POST['fornecedor_id'] : ''; ?>";

let produtosAdicionados = []; // Armazena IDs de produtos adicionados

// Função para calcular totais
function calcularTotais() {
    let totalItens = 0;
    let valorTotalGeral = 0;

    document.querySelectorAll('#estoqueTableBody tr').forEach(row => {
        const quantidade = parseInt(row.querySelector('.quantidade').value) || 0;
        const precoUnitario = parseFloat(row.querySelector('.preco-unitario').value) || 0;
        const valorTotal = quantidade * precoUnitario;

        totalItens += quantidade;
        valorTotalGeral += valorTotal;
    });

    document.getElementById('totalItens').innerText = totalItens;
    document.getElementById('valorTotalGeral').innerText = valorTotalGeral.toFixed(2);
}

// Atualizar totais após adicionar produto
document.getElementById('adicionarProduto').addEventListener('click', function() {
    const produtoSelect = document.getElementById('produto');
    const produtoId = produtoSelect.value;
    const produtoText = produtoSelect.options[produtoSelect.selectedIndex]?.text || '';
    const quantidadeInput = document.getElementById('quantidade');
    const precoUnitarioInput = document.getElementById('precoUnitario');
    const quantidade = parseInt(quantidadeInput.value) || 0;
    const precoUnitario = parseFloat(precoUnitarioInput.value) || 0;
    const valorTotal = quantidade * precoUnitario;

    if (!produtoId || quantidade <= 0 || precoUnitario <= 0) {
        alert("Preencha corretamente o Produto, Quantidade e Preço Unitário.");
        return;
    }

    if (produtosAdicionados.includes(produtoId)) {
        alert("Este produto já foi adicionado. Por favor, escolha um produto diferente.");
        return;
    }

    const tableBody = document.getElementById('estoqueTableBody');
    const newRow = `
        <tr>
            <td>
                <input type='hidden' name='estoque[${produtoId}][produto_id]' value='${produtoId}'>
                ${produtoText}
            </td>
            <td>
                <input type='number' class='form-control quantidade' name='estoque[${produtoId}][quantidade_item]' value='${quantidade}' min='1'>
            </td>
            <td>
                <input type='number' class='form-control preco-unitario' name='estoque[${produtoId}][preco_unitario_item]' value='${precoUnitario}' min='0.01' step='0.01'>
            </td>
            <td>
                <span class='valor-total'>${valorTotal.toFixed(2)}</span>
            </td>
            <td class="hidden">
                <input type='hidden' name='estoque[${produtoId}][numero_nf]' value='${numeroNF}'>
            </td>
            <td class="hidden">
                <input type='hidden' name='estoque[${produtoId}][data_emissao_nf]' value='${dataEmissao}'>
            </td>
            <td class="hidden">
                <input type='hidden' name='estoque[${produtoId}][fornecedor_id]' value='${fornecedorId}'>
            </td>
            <td>
                <button type='button' class='btn btn-danger btn-sm remove-product'>Remover</button>
            </td>
        </tr>
    `;

    tableBody.insertAdjacentHTML('afterbegin', newRow);
    produtosAdicionados.push(produtoId);

    limparCamposProduto();
    calcularTotais();

    // Eventos de atualização de valores
    const firstRow = tableBody.querySelector('tr');
    firstRow.querySelector('.remove-product').addEventListener('click', function() {
        firstRow.remove();
        produtosAdicionados.splice(produtosAdicionados.indexOf(produtoId), 1);
        calcularTotais();
    });

    firstRow.querySelectorAll('.quantidade, .preco-unitario').forEach(cell => {
        cell.addEventListener('input', function() {
            const newQuantidade = parseInt(firstRow.querySelector('.quantidade').value) || 0;
            const newPreco = parseFloat(firstRow.querySelector('.preco-unitario').value) || 0;
            const newTotal = newQuantidade * newPreco;
            firstRow.querySelector('.valor-total').innerText = newTotal.toFixed(2);
            calcularTotais();
        });
    });
});



function limparCamposProduto() {
    document.getElementById('produto').value = '';
    $('#produto').trigger('change'); // Reset Select2
    document.getElementById('quantidade').value = '';
    document.getElementById('precoUnitario').value = '';
}

function limparFormularioCompleto() {
    document.getElementById('numeroPedido').value = '';
    document.getElementById('dataEmissao').value = '';
    document.getElementById('fornecedor').value = '';
    $('#fornecedor').trigger('change'); // Reset Select2
    limparCamposProduto();

    const tableBody = document.getElementById('estoqueTableBody');
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }

    produtosAdicionados = [];
}
document.querySelector('button[type="submit"].btn-success').addEventListener('click', function(event) {
    event.preventDefault(); // Impede a submissão do formulário
    if (produtosAdicionados.length === 0) {
        alert('Adicione ao menos um produto antes de enviar!');
        return;
    }
    $('#confirmacaoModal').modal('show');
});

document.getElementById('confirmarEnvioModal').addEventListener('click', function() {
    document.getElementById('estoqueForm').submit();
    $('#confirmacaoModal').modal('hide');
});
document.getElementById('estoqueForm').addEventListener('submit', function(event) {
    if (produtosAdicionados.length === 0) {
        alert('Adicione ao menos um produto antes de enviar!');
        event.preventDefault();
        return;
    }
    let valid = true;

    document.querySelectorAll('#estoqueTableBody tr').forEach(row => {
        const quantidade = parseInt(row.querySelector('.quantidade').value) || 0;
        const precoUnitario = parseFloat(row.querySelector('.preco-unitario').value) || 0;

        if (quantidade <= 0 || precoUnitario <= 0) {
            valid = false;
            alert(`Corrija os valores do Produto: ${row.children[0].innerText}`);
        }
        if (!valid) {
            event.preventDefault();
        }
    });
});
document.getElementById('limparFormulario').addEventListener('click', limparFormularioCompleto);
</script>
<?= $this->endSection('') ?>