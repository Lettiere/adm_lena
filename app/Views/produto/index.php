<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adiciona o CSS para o DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container bs-stepper my-5">
    <div class="col-12 my-3">
        <table class="invoice-list-table table border-top dataTable no-footer dtr-column collapsed"
            id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Referência</th>
                    <th>Status</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Data de Cadastro</th>
                    <th>Balanço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto['prod_produto_id'] ?></td>
                    <td><?= $produto['codigo_barras'] ?></td>
                    <td>
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
                    <td><?= number_format($produto['preco_venda'], 2, ',', '.') ?></td>
                    <td><?= date('d/m/Y', strtotime($produto['created_at'] ?? 'now')) ?></td>
                    <td><span class="badge bg-label-success">Ativo</span></td>
                    <td>
                        <div class="d-flex">
                            <a href="<?= site_url('produto/edit/' . $produto['prod_produto_id']) ?>"
                                class="btn btn-icon" title="Editar">
                                <i class="bx bx-edit"></i>
                            </a>
                            <a href="<?= site_url('produto/delete/' . $produto['prod_produto_id']) ?>"
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