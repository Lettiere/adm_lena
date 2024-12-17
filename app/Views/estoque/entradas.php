<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
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
</style>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<div class="col-12">
    <div class="bs-stepper py-3 px-3">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h3 class="py-3">Lançamento de Estoque</h3>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('error') ?>
</div>
<?php elseif (session()->getFlashdata('success')): ?>
<div class="alert alert-success">
    <?= session()->getFlashdata('success') ?>
</div>
<?php endif; ?>

<div class="col-12 mt-3">
    <div class="bs-stepper py-3 px-3">
        <form id="estoqueForm" action="<?= base_url('estoque/salvarEstoque') ?>" method="post">
            <div class="row py-5 align-items-center justify-content-center">
                <div class="row">
                    <div class="col-auto">
                        <label for="produto" class="form-label">Produto</label>
                    </div>
                    <div class="col">
                        <select class="form-select select2" id="produto" name="produto" style="width: 100%">
                            <option value="">Selecione um produto</option>
                            <?php foreach ($produtos as $produto): ?>
                            <option value="<?= $produto['prod_produto_id'] ?>">
                                <?= $produto['nome_produto'] ?> - (<?= $produto['codigo_barras'] ?>)
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" id="adicionarProduto">Lançar</button>
                    </div>
                </div>
            </div>

            <table id="tabela" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th> <!-- Não editável -->
                        <th>Produto</th> <!-- Não editável -->
                        <th>Valor</th> <!-- Não editável -->
                        <th>Status</th> <!-- Não editável -->
                        <th>Quantidade</th> <!-- Único campo editável -->
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="estoqueTableBody">
                    <!-- Produtos serão adicionados dinamicamente -->
                </tbody>
            </table>

            <button type="submit" class="btn btn-success">Enviar Estoque</button>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#produto').select2({
        placeholder: 'Selecione um produto',
        allowClear: true
    });

    // Adicionar produto à tabela
    $('#adicionarProduto').click(function() {
        const selectProduto = $('#produto');
        const produtoId = selectProduto.val();
        const produtoText = selectProduto.find('option:selected').text();

        if (produtoId) {
            const rowExists = $(`#row_${produtoId}`).length > 0;
            if (!rowExists) {
                $('#estoqueTableBody').append(`
                        <tr id="row_${produtoId}">
                            <td>
                                <input type="hidden" name="estoque[${produtoId}][id]" value="${produtoId}">
                                ${produtoId}
                            </td>
                            <td>${produtoText}</td>
                            <td>
                                <input type="hidden" name="estoque[${produtoId}][valor]" value="0"> <!-- Não editável -->
                                0.00 <!-- Exibição estática -->
                            </td>
                            <td>Ativo</td>
                            <td>
                                <input type="number" class="form-control" name="estoque[${produtoId}][quantidade]" value="1" min="1">
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="removerProduto(${produtoId})">Remover</button>
                            </td>
                        </tr>
                    `);
                selectProduto.val(null).trigger('change'); // Limpa o select
            } else {
                alert('Produto já adicionado!');
            }
        } else {
            alert('Selecione um produto!');
        }
    });
});

// Função para remover produto da tabela
function removerProduto(produtoId) {
    $(`#row_${produtoId}`).remove();
}
</script>
<?= $this->endSection() ?>