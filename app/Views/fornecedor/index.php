<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adiciona o CSS para o DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<!-- Adiciona o CSS para a responsividade da tabela -->

<style>
    @media (max-width: 767px) {
        table .hide-mobile {
            display: none !important;
        }
    }

    @media (min-width: 768px) {
        table .hide-mobile {
            display: table-cell !important;
        }
    }
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">
    <a href="<?= base_url('fornecedor/create') ?>" class="btn btn-primary">
        <i class="bx bx-plus"></i> Novo Cadastro
    </a>
</div>



<div class="bs-stepper my-3 px-1">
    <div class="col-12">
        <div class="table-responsive">
            <table class="invoice-list-table table border-top dataTable no-footer dtr-column" id="estoqueTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th class="hide-mobile">Status</th>
                        <th>Referência</th>
                        <th class="hide-mobile">Valor</th>
                        <th class="hide-mobile">Data de Cadastro</th>
                        <th class="hide-mobile">Balanço</th>
                        <th class="hide-mobile">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <span class="avatar-initial rounded-circle bg-label-primary">
                                            PP
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    <span class="fw-medium">
                                        <a href="#" style="text-decoration: none; color: inherit;">
                                            Produto 1
                                        </a>
                                    </span>
                                    <small class="d-block">
                                        Descri o do produto 1
                                    </small>
                                </div>
                            </div>
                        </td>
                        <td class="hide-mobile">
                            <span class="badge rounded-pill p-1_5 bg-label-secondary">
                                Ativo
                            </span>
                        </td>
                        <td class="hide-mobile">REF123</td>
                        <td class="hide-mobile">R$ 100,00</td>
                        <td class="hide-mobile">20/10/2022</td>
                        <td class="hide-mobile">
                            <span class="badge bg-label-success">100</span>
                        </td>
                        <td class="hide-mobile">
                            <div class="d-flex">
                                <a href="#" class="btn btn-icon" title="Editar">
                                    <i class="bx bx-edit"></i>
                                </a>
                                <a href="#" class="btn btn-icon text-danger" title="Deletar"
                                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
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
        $('#estoqueTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true
        });
    });
</script>
<?= $this->endSection() ?>