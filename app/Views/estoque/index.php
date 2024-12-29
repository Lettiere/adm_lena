<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adiciona o CSS para o DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<!-- Adiciona o CSS para a responsividade da tabela -->
<style>
/* Esconde colunas específicas em telas menores */
@media (max-width: 767px) {
    .hide-mobile {
        display: none !important;
    }
}

/* Exibe todas as colunas em telas maiores */
@media (min-width: 768px) {
    .hide-mobile {
        display: table-cell !important;
    }
}
</style>
<style>
.custom-padding {
    padding-left: 5px !important;
    padding-right: 5px !important;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="col-12 my-3 px-1">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <div class="col-auto me-2">
                    <a href="<?= site_url('produto/create') ?>" class="btn btn-primary">
                        <i class="bx bx-plus bx-sm me-1"></i>
                        Novo Cadastro
                    </a>
                </div>
                <div class="col-auto me-2">
                    <a href="<?= site_url('produto/relatorio') ?>" class="btn btn-info">
                        <i class="bx bx-file bx-sm me-1"></i>
                        Relatório
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?= site_url('estoque_entradas') ?>" class="btn btn-success">
                        <i class="bx bx-log-in bx-sm me-1"></i>
                        Entradas
                    </a>
                </div>
            </div>
            <hr class="my-3">
            <table class="invoice-list-table table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th class="hide-mobile">Valor</th>
                        <th class="hide-mobile">Data de Cadastro</th>
                        <th class="hide-mobile">Balanço</th>
                        <th class="hide-mobile">Status</th>
                        <th class="hide-mobile">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['prod_produto_id'] ?></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <span class="avatar-initial rounded-circle bg-label-primary">
                                            <?= substr($produto['nome_produto'], 0, 2) ?>
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <span class="fw-medium">
                                        <a href="<?= base_url('produto/show/' . $produto['prod_produto_id']) ?>"
                                            style="text-decoration: none; color: inherit;">
                                            <?= $produto['nome_produto'] ?>
                                        </a>
                                    </span>
                                    <small class="d-block">
                                        <?= (strlen($produto['descricao_produto']) > 80)
                                                    ? substr($produto['descricao_produto'], 0, 80) . '...'
                                                    : $produto['descricao_produto'] ?>
                                    </small>
                                </div>
                            </div>
                        </td>
                        <td class="hide-mobile"><?= number_format($produto['preco_venda'], 2, ',', '.') ?></td>
                        <td class="hide-mobile"></td>
                        <td class="hide-mobile">
                            <span class="badge rounded-pill p-1_5 bg-label-secondary">
                                <?= isset($quantidades_por_produto[$produto['prod_produto_id']])
                                            ? number_format($quantidades_por_produto[$produto['prod_produto_id']], 0, ',', '.')
                                            : '0' ?>
                            </span>
                        </td>
                        <td id="balanco" class="hide-mobile"><span class="badge bg-label-success">Ativo</span></td>
                        <td class="hide-mobile">
                            <div class="d-flex">
                                <a href="<?= site_url('editar_estoque/' . $produto['prod_produto_id']) ?>"
                                    class="btn btn-icon" title="Editar">
                                    <i class="bx bx-edit"></i>
                                </a>
                                <a href="<?= site_url('estoque/delete/' . $produto['prod_produto_id']) ?>"
                                    class="btn btn-icon text-danger" title="Deletar"
                                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Nenhum produto encontrado.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="bs-stepper ">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                teste
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#DataTables_Table_0').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true
    });
});
</script>
<?= $this->endSection() ?>