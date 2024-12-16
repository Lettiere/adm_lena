<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y mt-5">
    <div
        class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
        <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1">Cadastro de Novo Produto </h4>
            <p class="mb-0"></p>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-4">
            <div class="d-flex gap-4"><button class="btn btn-label-secondary">-</button>
                <button class="btn btn-label-primary">-</button>
            </div>
            <button type="submit" class="btn btn-primary">-</button>
        </div>
    </div>
    <form action="<?= site_url('produto/salvar') ?>" method="POST" enctype="multipart/form-data">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-9 col-md-9 col-12">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Dados do Produto</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="prod_categoria_id">Categoria:</label>
                                        <select id="prod_categoria_id" name="prod_categoria_id" class="form-control"
                                            required>
                                            <option value="">Selecione...</option>
                                            <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?= $categoria['prod_categoria_id']; ?>"
                                                <?= isset($produto['prod_categoria_id']) && $produto['prod_categoria_id'] == $categoria['prod_categoria_id'] ? 'selected' : ''; ?>>
                                                <?= $categoria['nome_categoria']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="prod_subcategoria_id">Subcategoria:</label>
                                        <select id="prod_subcategoria_id" name="prod_subcategoria_id"
                                            class="form-control" required>
                                            <option value="">Selecione...</option>
                                            <?php foreach ($subcategorias as $subcategoria): ?>
                                            <option value="<?= $subcategoria['prod_subcategoria_id']; ?>"
                                                <?= set_select('prod_subcategoria_id', $subcategoria['prod_subcategoria_id'], (old('prod_subcategoria_id') == $subcategoria['prod_subcategoria_id']) ? true : false); ?>>
                                                <?= $subcategoria['nome_subcategoria']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= \Config\Services::validation()->getError('prod_subcategoria_id'); ?>
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="codigo_barras">Código de Barras:</label>
                                        <input type="text" id="codigo_barras" name="codigo_barras" class="form-control"
                                            maxlength="13" required value="<?= old('codigo_barras') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-12 col-12">
                                        <label for="nome_produto">Nome do Produto:</label>
                                        <input type="text" id="nome_produto" name="nome_produto" class="form-control"
                                            required value="<?= old('nome_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-12 col-12">
                                        <label for="descricao_produto">Descrição do Produto:</label>
                                        <textarea id="descricao_produto" name="descricao_produto" class="form-control"
                                            rows="4" required><?= old('descricao_produto') ?></textarea>
                                    </div>
                                    <!-- <div class="form-group">
                                <label for="subcategoria_produto">Subcategoria do Produto:</label>
                                <input type="text" id="subcategoria_produto" name="subcategoria_produto"
                                    class="form-control" value="<?= old('subcategoria_produto') ?>">
                            </div> -->
                                    <div class="form-group mt-3 col-md-2 col-12">
                                        <label for="dimensoes_produto">Dimensões:</label>
                                        <input type="text" id="dimensoes_produto" name="dimensoes_produto"
                                            class="form-control" value="<?= old('dimensoes_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-2 col-12">
                                        <label for="peso_produto">Peso (g):</label>
                                        <input type="number" id="peso_produto" name="peso_produto" class="form-control"
                                            min="0" value="<?= old('peso_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-3 col-12">
                                        <label for="cor_produto">Cor:</label>
                                        <input type="text" id="cor_produto" name="cor_produto" class="form-control"
                                            value="<?= old('cor_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-3 col-12">
                                        <label for="material_embalagem">Embalagem:</label>
                                        <input type="text" id="material_embalagem" name="material_embalagem"
                                            class="form-control" value="<?= old('material_embalagem') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-2 col-12">
                                        <label for="temperatura_armazenamento">Temperatura:</label>
                                        <input type="text" id="temperatura_armazenamento"
                                            name="temperatura_armazenamento" class="form-control"
                                            value="<?= old('temperatura_armazenamento') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-12 col-12">
                                        <label for="tabela_nutricional">Tabela Nutricional:</label>
                                        <textarea id="tabela_nutricional" name="tabela_nutricional" class="form-control"
                                            rows="4"><?= old('tabela_nutricional') ?></textarea>
                                    </div>
                                    <div class="form-group mt-3 col-md-12 col-12">
                                        <label for="alergenos">Alergenos:</label>
                                        <textarea id="alergenos" name="alergenos" class="form-control"
                                            rows="4"><?= old('alergenos') ?></textarea>
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="preco_custo">$ de Custo:</label>
                                        <input type="number" id="preco_custo" name="preco_custo" class="form-control"
                                            step="0.01" min="0" value="<?= old('preco_custo') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="preco_venda">$ de Venda:</label>
                                        <input type="number" id="preco_venda" name="preco_venda" class="form-control"
                                            step="0.01" min="0" value="<?= old('preco_venda') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="impostos">Impostos:</label>
                                        <input type="text" id="impostos" name="impostos" class="form-control"
                                            value="<?= old('impostos') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="fornecedor">Fornecedor:</label>
                                        <input type="text" id="fornecedor" name="fornecedor" class="form-control"
                                            value="<?= old('fornecedor') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="validade_produto">Validade do Produto:</label>
                                        <input type="date" id="validade_produto" name="validade_produto"
                                            class="form-control" value="<?= old('validade_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="localizacao_produto">Localização do Produto:</label>
                                        <input type="text" id="localizacao_produto" name="localizacao_produto"
                                            class="form-control" value="<?= old('localizacao_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="lote_produto">Lote do Produto:</label>
                                        <input type="text" id="lote_produto" name="lote_produto" class="form-control"
                                            value="<?= old('lote_produto') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="data_fabricacao">Data de Fabricação:</label>
                                        <input type="date" id="data_fabricacao" name="data_fabricacao"
                                            class="form-control" value="<?= old('data_fabricacao') ?>">
                                    </div>
                                    <div class="form-group mt-3 col-md-4 col-12">
                                        <label for="data_validade">Data de Validade:</label>
                                        <input type="date" id="data_validade" name="data_validade" class="form-control"
                                            value="<?= old('data_validade') ?>">
                                    </div>
                                    <div class="form-group mt-3  col-12">
                                        <label for="imagem_produto">Imagem do Produto:</label>
                                        <input type="file" id="imagem_produto" name="imagem_produto"
                                            class="form-control-file" accept="image/*">
                                    </div>
                                    <div class="form-group mt-3  col-12">
                                        <label for="ingredientes_produto">Ingredientes do Produto:</label>
                                        <textarea id="ingredientes_produto" name="ingredientes_produto"
                                            class="form-control" rows="4"><?= old('ingredientes_produto') ?></textarea>
                                    </div>
                                    <div class="form-group mt-3  col-12">
                                        <label for="beneficios_produto">Benefícios do Produto:</label>
                                        <textarea id="beneficios_produto" name="beneficios_produto" class="form-control"
                                            rows="4"><?= old('beneficios_produto') ?></textarea>
                                    </div>
                                    <div class="form-group mt-3  col-12">
                                        <label for="sugestao_uso_produto">Modo de Usar:</label>
                                        <textarea id="sugestao_uso_produto" name="sugestao_uso_produto"
                                            class="form-control" rows="4"
                                            placeholder="Exemplo: Consumir preferencialmente no café da manhã."><?= old('sugestao_uso_produto') ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary d-grid w-100 mb-4">Salvar</button>
                            </div>
                            <form action="<?= route_to('produtos') ?>" method="get">
                                <button onclick="return confirm('Deseja realmente cancelar a cria o do produto?')"
                                    class="btn btn-label-secondary d-grid w-100 mb-4" type="submit">
                                    Cancelar
                                </button>
                            </form>
                            <div class="d-flex mb-4">
                                <a class="btn btn-label-secondary d-grid w-100 me-4" target="_blank"
                                    href="./app-invoice-print.html">
                                    -
                                </a>
                                <a href="./app-invoice-edit.html" class="btn btn-label-secondary d-grid w-100">
                                    -
                                </a>
                            </div>
                            <button class="btn btn-success d-grid w-100" data-bs-toggle="offcanvas"
                                data-bs-target="#addPaymentOffcanvas">
                                <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                        class="bx bx-dollar bx-sm me-2"></i>-</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?= $this->endsection() ?>