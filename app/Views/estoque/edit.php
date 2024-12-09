<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adicione estilos adicionais, se necessário -->
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5><?= isset($estoque) ? 'Editar Estoque' : 'Adicionar Estoque' ?></h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('estoque/salvar') ?>" method="post">
                    <?= csrf_field() ?>

                    <input type="hidden" name="prod_estoque_id"
                        value="<?= isset($estoque) ? $estoque['prod_estoque_id'] : '' ?>">

                    <div class="row g-4">
                        <!-- Produto -->
                        <div class="col-md-6">
                            <label for="prod_produto_id" class="form-label">Produto</label>
                            <select id="prod_produto_id" name="prod_produto_id" class="form-select">
                                <option value="">Selecione um produto</option>
                                <?php foreach ($produtos as $produto): ?>
                                <option value="<?= $produto['prod_produto_id'] ?>"
                                    <?= isset($estoque) && $estoque['prod_produto_id'] == $produto['prod_produto_id'] ? 'selected' : '' ?>>
                                    <?= $produto['nome_produto'] ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Quantidades -->
                        <div class="col-md-6">
                            <label for="quantidade_disponivel" class="form-label">Quantidade Disponível</label>
                            <input type="number" id="quantidade_disponivel" name="quantidade_disponivel"
                                class="form-control"
                                value="<?= isset($estoque) ? $estoque['quantidade_disponivel'] : 0 ?>" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="quantidade_reservada" class="form-label">Quantidade Reservada</label>
                            <input type="number" id="quantidade_reservada" name="quantidade_reservada"
                                class="form-control"
                                value="<?= isset($estoque) ? $estoque['quantidade_reservada'] : 0 ?>" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="quantidade_minima" class="form-label">Quantidade Mínima</label>
                            <input type="number" id="quantidade_minima" name="quantidade_minima" class="form-control"
                                value="<?= isset($estoque) ? $estoque['quantidade_minima'] : '' ?>" min="0">
                        </div>
                        <div class="col-md-6">
                            <label for="quantidade_maxima" class="form-label">Quantidade Máxima</label>
                            <input type="number" id="quantidade_maxima" name="quantidade_maxima" class="form-control"
                                value="<?= isset($estoque) ? $estoque['quantidade_maxima'] : '' ?>" min="0">
                        </div>

                        <!-- Detalhes do Lote -->
                        <div class="col-md-6">
                            <label for="numero_lote" class="form-label">Número do Lote</label>
                            <input type="text" id="numero_lote" name="numero_lote" class="form-control"
                                value="<?= isset($estoque) ? $estoque['numero_lote'] : '' ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="data_validade" class="form-label">Data de Validade</label>
                            <input type="date" id="data_validade" name="data_validade" class="form-control"
                                value="<?= isset($estoque) ? $estoque['data_validade'] : '' ?>">
                        </div>

                        <!-- Preço e Valores -->
                        <div class="col-md-6">
                            <label for="preco_unitario" class="form-label">Preço Unitário</label>
                            <input type="text" id="preco_unitario" name="preco_unitario" class="form-control"
                                value="<?= isset($estoque) ? $estoque['preco_unitario'] : '' ?>" placeholder="0.00">
                        </div>

                        <!-- Localização e Status -->
                        <div class="col-md-6">
                            <label for="localizacao_estoque" class="form-label">Localização no Estoque</label>
                            <input type="text" id="localizacao_estoque" name="localizacao_estoque" class="form-control"
                                value="<?= isset($estoque) ? $estoque['localizacao_estoque'] : '' ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="status_estoque" class="form-label">Status do Estoque</label>
                            <select id="status_estoque" name="status_estoque" class="form-select">
                                <option value="ativo"
                                    <?= isset($estoque) && $estoque['status_estoque'] == 'ativo' ? 'selected' : '' ?>>
                                    Ativo</option>
                                <option value="inativo"
                                    <?= isset($estoque) && $estoque['status_estoque'] == 'inativo' ? 'selected' : '' ?>>
                                    Inativo</option>
                            </select>
                        </div>

                        <!-- Alerta de Reposição -->
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="alerta_reposicao"
                                    name="alerta_reposicao" value="1"
                                    <?= isset($estoque) && $estoque['alerta_reposicao'] == 1 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="alerta_reposicao">Ativar Alerta de
                                    Reposição</label>
                            </div>
                        </div>
                    </div>

                    <!-- Botões -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="<?= base_url('estoque') ?>" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- Adicionar scripts personalizados, se necessário -->
<?= $this->endSection() ?>