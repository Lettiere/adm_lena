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
            <h3 class="py-3">Cadastro de Categoria</h3>
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
        <!-- Formulário de cadastro de categoria -->
        <form action="<?= site_url('categoria/salvar') ?>" method="POST">
            <!-- Campo Nome da Categoria -->
            <div class="mb-3">
                <label for="nome_categoria" class="form-label">Nome da Categoria</label>
                <input type="text" class="form-control <?= session()->getFlashdata('error') ? 'is-invalid' : '' ?>"
                    id="nome_categoria" name="nome_categoria" value="<?= old('nome_categoria') ?>" required>
                <?php if (session()->getFlashdata('error')): ?>
                <div class="invalid-feedback">
                    <?= session()->getFlashdata('error') ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-between">
                <a href="<?= site_url('categoria') ?>" class="btn btn-secondary">Voltar para Categorias</a>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- Aqui você pode adicionar scripts adicionais caso necessário -->
<?= $this->endSection() ?>