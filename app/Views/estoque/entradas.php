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
            <h3 class="py-3">Lançamento de Estoque</h3>
        </div>
    </div>
</div>
<!-- Exibe mensagens de erro ou sucesso -->
<?php if (session()->getFlashdata('error')): ?>
<div class="alert alert-danger">
    <?= session()->getFlashdata('error') ?>
</div>
<?php endif; ?>

<div class="col-12 mt-3">
    <div class="bs-stepper py-3 px-3">
        <!-- Formulário de cadastro de produto -->
        <!-- Formulário de cadastro de categoria -->
        <form action="<?= site_url('#') ?>" method="POST">
            <div class="row gx-3 gy-2 align-items-center justify-content-center">
                <div class="col-auto">
                    <label for="nome_categoria" class="form-label">Produto</label>
                </div>
                <div class="col">
                    <select class="form-select select2" id="produto" name="produto" style="width: 100%"></select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Lançar</button>
                </div>
            </div>
        </form>

    </div>
</div>














<?= $this->endSection() ?>
<?= $this->section('js') ?>
<!-- Aqui você pode adicionar scripts adicionais caso necessário -->
<?= $this->endSection() ?>