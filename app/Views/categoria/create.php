<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- DataTables CSS -->
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
            <h3 class="py-3">Cadastro de Produto</h3>
        </div>
    </div>
</div>

<!-- Exibe mensagens de erro ou sucesso -->
<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('error') ?>
</div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
<div class="alert alert-success">
    <?= session()->getFlashdata('success') ?>
</div>
<?php endif; ?>

<div class="col-12 mt-3">
    <div class="bs-stepper py-3 px-3">
        <!-- Formulário de cadastro de produto -->
        <form action="<?= site_url('produto/salvar') ?>" method="POST">
            <!-- Campo Categoria -->
            <div class="mb-3">
                <label for="prod_categoria_id" class="form-label">Categoria</label>
                <select name="prod_categoria_id" id="prod_categoria_id" class="form-control" required>
                    <option value="">Selecione a Categoria</option>
                    <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['prod_categoria_id'] ?>"><?= $categoria['nome_categoria'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo Nome do Produto -->
            <div class="mb-3">
                <label for="nome_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome_produto" name="nome_produto" required>
            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-between">
                <a href="<?= site_url('produto') ?>" class="btn btn-secondary">Voltar para Produtos</a>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- Aqui você pode adicionar scripts adicionais caso necessário -->
<?= $this->endSection() ?>