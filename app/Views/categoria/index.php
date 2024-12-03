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
            <h3 class="py-3">Seus Cadastros</h3>
            <a href="<?= site_url('categoria/create') ?>" class="btn btn-success">Novo Cadastro</a> <!-- Corrigido -->
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table border-top" id="datatables-basic">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Categoria</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?= $categoria['prod_categoria_id'] ?></td>
                        <td><?= $categoria['nome_categoria'] ?></td>
                        <td><a href="#">Editar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

<script>
$(document).ready(function() {
    $('#datatables-basic').DataTable({
        "responsive": true, // Permite que a tabela seja ajustada para diferentes tamanhos de tela
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/Portuguese-Brasil.json"
        }
    });
});
</script>
<?= $this->endSection() ?>