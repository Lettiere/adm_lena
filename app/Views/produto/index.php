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

.custom-padding {
    padding-left: 5px !important;
    padding-right: 5px !important;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>



<div class="d-flex justify-content-between mb-3">
    <a href="<?= base_url('produto/create') ?>" class="btn btn-primary">
        <i class="bx bx-plus"></i> Novo Cadastro
    </a>
</div>

<div class="bs-stepper my-3 px-1">
    <div class="col-12">
        <table class="invoice-list-table table border-top dataTable no-footer dtr-column" id="estoqueTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Referência</th>
                    <th class="hide-mobile">Status</th>
                    <th>Produto</th>
                    <th class="hide-mobile">Valor</th>
                    <th class="hide-mobile">Data de Cadastro</th>
                    <th class="hide-mobile">Balanço</th>
                    <th class="hide-mobile">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['prod_produto_id'] ?></td>
                    <td><?= $produto['codigo_barras'] ?></td>
                    <td class="hide-mobile">
                        <span class="badge rounded-pill p-1_5 bg-label-secondary">
                            <?= $produto['status'] ?? 'Ativo' ?>
                        </span>
                    </td>
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
                                <small class="d-block"><?= $produto['descricao_produto'] ?></small>
                            </div>
                        </div>
                    </td>
                    <td class="hide-mobile"><?= number_format($produto['preco_venda'], 2, ',', '.') ?></td>
                    <td class="hide-mobile"><?= date('d/m/Y', strtotime($produto['created_at'] ?? 'now')) ?>
                    </td>
                    <td class="hide-mobile">
                        <span class="badge bg-label-success"><?= $produto['balanco'] ?? 'N/A' ?></span>
                    </td>
                    <td class="hide-mobile">
                        <div class="d-flex">
                            <a href="<?= base_url('produto/edit/' . $produto['prod_produto_id']) ?>"
                                class="btn btn-icon" title="Editar">
                                <i class="bx bx-edit"></i>
                            </a>
                            <a href="<?= route_to('delete_estoque', $produto['prod_produto_id']) ?>"
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
                    <!-- Certifique-se de que a quantidade de <td> corresponde ao número de <th> -->
                    <td colspan="8" class="text-center">Nenhum produto encontrado.</td>
                </tr>
                <?php endif; ?>
            </tbody>

        </table>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#estoqueTable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true
    });
});
</script>
<?= $this->endSection() ?>