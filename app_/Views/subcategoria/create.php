<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- DataTables CSS -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.css') ?>">
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<div class="col-12">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h3>Cadastro de Subcategoria</h3>
    </div>

    <!-- Mensagens de erro ou sucesso -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php elseif (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <!-- Formulário de cadastro -->
    <form action="<?= site_url('subcategoria/salvar') ?>" method="POST">
        <div class="mb-3">
            <label for="nome_subcategoria" class="form-label">Nome da Subcategoria</label>
            <input type="text" class="form-control" id="nome_subcategoria" name="nome_subcategoria"
                value="<?= old('nome_subcategoria') ?>" required>
        </div>
        <div class="mb-3">
            <label for="prod_categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="prod_categoria_id" name="prod_categoria_id" required>
                <option value="">Selecione uma Categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['prod_categoria_id'] ?>"
                        <?= old('prod_categoria_id') == $categoria['prod_categoria_id'] ? 'selected' : '' ?>>
                        <?= $categoria['nome_categoria'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <a href="<?= site_url('subcategoria') ?>" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<!-- Scripts adicionais, se necessário -->
<?= $this->endSection() ?>