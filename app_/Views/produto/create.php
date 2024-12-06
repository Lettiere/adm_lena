<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-beta.0/dist/quill.snow.css" rel="stylesheet" />
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<!-- Incluindo o CSS do Bootstrap -->
<div class="container mt-5">
    <h1>Cadastrar Produto</h1>
    <form action="<?= site_url('produto/salvar') ?>" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="row">
                <!-- Imagem do Produto -->
                <div class="form-group col-md-4  mb-3">
                    <label for="imagem_produto">Imagem do Produto:</label>
                    <input type="file" id="imagem_produto" name="imagem_produto" class="form-control-file"
                        accept="image/*">
                </div>

                <!-- Campo Categoria -->
                <div class="form-group col-md-4  mb-3">
                    <label for="prod_categoria_id">Categoria:</label>
                    <select id="prod_categoria_id" name="prod_categoria_id" class="form-control" required>
                        <option value="">Selecione...</option>
                        <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['prod_categoria_id']; ?>"
                            <?= isset($produto['prod_categoria_id']) && $produto['prod_categoria_id'] == $categoria['prod_categoria_id'] ? 'selected' : ''; ?>>
                            <?= $categoria['nome_categoria']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Campo Subcategoria -->
                <div class="form-group col-md-4  mb-3">
                    <label for=" prod_subcategoria_id">Subcategoria:</label>
                    <select id="prod_subcategoria_id" name="prod_subcategoria_id" class="form-control">
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
                <!-- Nome do Produto -->
                <div class="form-group col-md-8  mb-3">
                    <label for=" nome_produto">Nome do Produto:</label>
                    <input type="text" id="nome_produto" name="nome_produto" class="form-control" required>
                </div>
                <!-- Código de Barras -->
                <div class="form-group col-md-4  mb-3">
                    <label for="codigo_barras">Código de Barras:</label>
                    <input type="text" id="codigo_barras" name="codigo_barras" class="form-control" maxlength="13"
                        required>
                </div>
                <!-- Descrição do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="descricao_produto">Descrição do Produto:</label>
                    <textarea id="descricao_produto" name="descricao_produto" class="form-control" rows="4"
                        required></textarea>
                </div>
                <!-- Subcategoria do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="subcategoria_produto">Subcategoria do Produto:</label>
                    <input type="text" id="subcategoria_produto" name="subcategoria_produto" class="form-control">
                </div>
                <!-- Dimensões do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="dimensoes_produto">Dimensões do Produto:</label>
                    <input type="text" id="dimensoes_produto" name="dimensoes_produto" class="form-control">
                </div>

                <!-- Peso do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="peso_produto">Peso do Produto (g):</label>
                    <input type="number" id="peso_produto" name="peso_produto" class="form-control" min="0">
                </div>

                <!-- Cor do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="cor_produto">Cor do Produto:</label>
                    <input type="text" id="cor_produto" name="cor_produto" class="form-control">
                </div>

                <!-- Material da Embalagem -->
                <div class="form-group col-md-12  mb-3">
                    <label for="material_embalagem">Material da Embalagem:</label>
                    <input type="text" id="material_embalagem" name="material_embalagem" class="form-control">
                </div>

                <!-- Temperatura de Armazenamento -->
                <div class="form-group col-md-12  mb-3">
                    <label for="temperatura_armazenamento">Temperatura de Armazenamento:</label>
                    <input type="text" id="temperatura_armazenamento" name="temperatura_armazenamento"
                        class="form-control">
                </div>

                <!-- Tabela Nutricional -->
                <div class="form-group col-md-12  mb-3">
                    <label for="tabela_nutricional">Tabela Nutricional:</label>
                    <textarea id="tabela_nutricional" name="tabela_nutricional" class="form-control"
                        rows="4"></textarea>
                </div>

                <!-- Alergenos -->
                <div class="form-group col-md-12  mb-3">
                    <label for="alergenos">Alergenos:</label>
                    <textarea id="alergenos" name="alergenos" class="form-control" rows="4"></textarea>
                </div>

                <!-- Preço de Custo -->
                <div class="form-group col-md-12  mb-3">
                    <label for="preco_custo">Preço de Custo:</label>
                    <input type="number" id="preco_custo" name="preco_custo" class="form-control" step="0.01" min="0">
                </div>

                <!-- Preço de Venda -->
                <div class="form-group col-md-12  mb-3">
                    <label for="preco_venda">Preço de Venda:</label>
                    <input type="number" id="preco_venda" name="preco_venda" class="form-control" step="0.01" min="0">
                </div>

                <!-- Impostos -->
                <div class="form-group col-md-12  mb-3">
                    <label for="impostos">Impostos:</label>
                    <input type="text" id="impostos" name="impostos" class="form-control">
                </div>

                <!-- Fornecedor -->
                <div class="form-group col-md-12  mb-3">
                    <label for="fornecedor">Fornecedor:</label>
                    <input type="text" id="fornecedor" name="fornecedor" class="form-control">
                </div>

                <!-- Validade do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="validade_produto">Validade do Produto:</label>
                    <input type="date" id="validade_produto" name="validade_produto" class="form-control">
                </div>

                <!-- Localização do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="localizacao_produto">Localização do Produto:</label>
                    <input type="text" id="localizacao_produto" name="localizacao_produto" class="form-control">
                </div>

                <!-- Lote do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="lote_produto">Lote do Produto:</label>
                    <input type="text" id="lote_produto" name="lote_produto" class="form-control">
                </div>

                <!-- Data de Fabricação -->
                <div class="form-group col-md-12  mb-3">
                    <label for="data_fabricacao">Data de Fabricação:</label>
                    <input type="date" id="data_fabricacao" name="data_fabricacao" class="form-control">
                </div>

                <!-- Data de Validade -->
                <div class="form-group col-md-12  mb-3">
                    <label for="data_validade">Data de Validade:</label>
                    <input type="date" id="data_validade" name="data_validade" class="form-control">
                </div>




                <!-- Ingredientes do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="ingredientes_produto">Ingredientes do Produto:</label>
                    <textarea id="ingredientes_produto" name="ingredientes_produto" class="form-control"
                        rows="4"></textarea>
                </div>

                <!-- Benefícios do Produto -->
                <div class="form-group col-md-12  mb-3">
                    <label for="beneficios_produto">Benefícios do Produto:</label>
                    <textarea id="beneficios_produto" name="beneficios_produto" class="form-control"
                        rows="4"></textarea>
                </div>

                <!-- Sugestão de Uso -->
                <div class="form-group col-md-12  mb-3">
                    <label for="sugestao_uso_produto">Sugestão de Uso:</label>
                    <textarea id="sugestao_uso_produto" name="sugestao_uso_produto" class="form-control"
                        rows="4"></textarea>
                </div>

                <!-- Botão de Envio -->
                <div class="form-group col-md-12  mb-3">
                    <button type="submit" class="btn btn-primary">Salvar Produto</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Incluindo os Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endsection() ?>

<?= $this->section('js') ?>
<?= $this->endsection() ?>