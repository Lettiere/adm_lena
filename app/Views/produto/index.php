<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adiciona o CSS para o DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.css') ?>">

<!-- CSS para tornar a descrição escondida e o botão de ativação/desativação -->
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
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="col-12">

    <div class="bs-stepper py-3">
        <h3 class="py-3">Seus Produtos</h3>
        <div class="d-flex justify-content-between align-items-center py-3">
            <h3 class="py-3">Seus Produtos</h3>
            <a href="<?= site_url('produto/create') ?>" class="btn btn-success">Novo Produto</a> <!-- Corrigido -->
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="tabela-produtos" class="table table-bordered table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ref.</th>
                        <th>Imagem</th> <!-- Nova coluna de Imagem -->
                        <th>Produto</th> <!-- Coluna Mesclada de Produto e Descrição -->
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de produtos - isso seria gerado dinamicamente -->
                    <tr>
                        <td>1</td>
                        <td>REF12345</td> <!-- Código de referência -->
                        <td><img src="caminho/para/imagem.jpg" alt="Imagem do Produto A" width="50" height="50"></td>
                        <td class="sinopse">
                            <span><strong>Produto A</strong></span><br>
                            <span class="sinopse-completa">Descrição completa do Produto A que contém mais detalhes e
                                informações.</span>
                        </td>
                        <td>R$ 10,00</td>
                        <td>
                            <a href="<?= site_url('produto/edit/1') ?>" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modalAtivarDesativar" data-produto-id="1">Ativo</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>REF67890</td> <!-- Código de referência -->
                        <td><img src="caminho/para/imagem2.jpg" alt="Imagem do Produto B" width="50" height="50"></td>
                        <td class="sinopse">
                            <span><strong>Produto B</strong></span><br>
                            <span class="sinopse-completa">Descrição completa do Produto B, com mais informações sobre o
                                que ele faz e como funciona.</span>
                        </td>
                        <td>R$ 20,00</td>
                        <td>
                            <a href="<?= site_url('produto/edit/2') ?>" class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modalAtivarDesativar" data-produto-id="2">Ativo</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal de Exclusão -->
<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExcluirLabel">Excluir Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja excluir este produto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Excluir</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ativar/Desativar -->
<div class="modal fade" id="modalAtivarDesativar" tabindex="-1" aria-labelledby="modalAtivarDesativarLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAtivarDesativarLabel">Ativar/Desativar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <label for="statusProduto" class="form-label">Status do Produto</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="statusProduto" data-produto-id="1">
                        <label class="form-check-label" for="statusProduto">Ativo</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') ?>"></script>

<!-- Carrega o plugin de Redimensionamento de Colunas -->
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.11.3/features/column-sizing/dataTables.columnSizing.min.js"></script>

<script>
$(document).ready(function() {
    // Inicializa o DataTable com a opção de redimensionamento de colunas
    $('#tabela-produtos').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/Portuguese-Brasil.json" // Carrega o idioma português
        },
        "responsive": true, // Permite que a tabela seja ajustada para diferentes tamanhos de tela
        "columnDefs": [{
                "targets": [0, 1, 2, 3],
                "className": "dt-center"
            } // Centraliza algumas colunas
        ]
    });

    // Lógica para exibir/desocultar a descrição completa
    $('.sinopse').hover(function() {
        $(this).find('.sinopse-completa').show();
    }, function() {
        $(this).find('.sinopse-completa').hide();
    });
});
</script>
<?= $this->endSection() ?>