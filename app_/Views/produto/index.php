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
        <div class="d-flex justify-content-between align-items-center py-3">
            <h3 class="py-3">Seus Produtos</h3>
            <a href="<?= site_url('produto/create') ?>" class="btn btn-success">Novo Produto</a> <!-- Corrigido -->
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="tabela-produtos" class="table table-bordered table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagem</th> <!-- Nova coluna de Imagem -->
                        <th>Produto</th> <!-- Coluna Mesclada de Produto e Descrição -->
                        <th>Ref.</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['prod_produto_id'] ?></td>
                        <td><img src="<?= base_url('uploads/' . $produto['imagem_produto']) ?>"
                                alt="Imagem do Produto <?= $produto['nome_produto'] ?>" width="50" height="50"></td>
                        <td class="sinopse">
                            <a href="<?= site_url('produto/show/' . $produto['prod_produto_id']) ?>"
                                style="text-decoration: none; color: inherit;">
                                <span><strong><?= $produto['nome_produto'] ?></strong></span>
                                <br>
                                <span class="sinopse-completa"><?= $produto['descricao_produto'] ?></span>
                            </a>
                        </td>
                        <td><?= $produto['codigo_barras'] ?></td> <!-- Código de referência -->
                        <td><?= number_format($produto['preco_venda'], 2, ',', '.') ?></td>
                        <td>
                            <a href="<?= site_url('produto/edit/' . $produto['prod_produto_id']) ?>"
                                class="btn btn-sm btn-primary">Editar</a>
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#modalAtivarDesativar"
                                data-produto-id="<?= $produto['prod_produto_id'] ?>">Ativo</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
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