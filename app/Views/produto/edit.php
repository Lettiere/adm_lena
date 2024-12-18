<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<!-- Incluindo o CSS do Bootstrap -->
<div class="">
    <h4>Editar Produto</h4>
    <form action="<?= site_url('produto/update/' . $produto['prod_produto_id']) ?>" method="POST"
        enctype="multipart/form-data">

        <div class="">
            <div class="row">
                <div class="col-xl-9 col-md-9 col-12">
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Dados do Produto</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="prod_categoria_id">Categoria:</label>
                                    <select id="prod_categoria_id" name="prod_categoria_id" class="form-control"
                                        required>
                                        <option value="">Selecione...</option>
                                        <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?= $categoria['prod_categoria_id']; ?>"
                                            <?= $produto['prod_categoria_id'] == $categoria['prod_categoria_id'] ? 'selected' : ''; ?>>
                                            <?= $categoria['nome_categoria']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="prod_subcategoria_id">Subcategoria:</label>
                                    <select id="prod_subcategoria_id" name="prod_subcategoria_id" class="form-control"
                                        required>
                                        <option value="">Selecione...</option>
                                        <?php foreach ($subcategorias as $subcategoria): ?>
                                        <option value="<?= $subcategoria['prod_subcategoria_id']; ?>"
                                            <?= $produto['prod_subcategoria_id'] == $subcategoria['prod_subcategoria_id'] ? 'selected' : ''; ?>>
                                            <?= $subcategoria['nome_subcategoria']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="codigo_barras">Código de Barras:</label>
                                    <input type="text" id="codigo_barras" name="codigo_barras" class="form-control"
                                        maxlength="13" required value="<?= $produto['codigo_barras'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="nome_produto">Nome do Produto:</label>
                                    <input type="text" id="nome_produto" name="nome_produto" class="form-control"
                                        required value="<?= $produto['nome_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="descricao_produto">Descrição do Produto:</label>
                                    <textarea id="descricao_produto" name="descricao_produto" class="form-control"
                                        rows="4" required><?= $produto['descricao_produto'] ?></textarea>
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="dimensoes_produto">Dimensões:</label>
                                    <input type="text" id="dimensoes_produto" name="dimensoes_produto"
                                        class="form-control" value="<?= $produto['dimensoes_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="peso_produto">Peso (g):</label>
                                    <input type="number" id="peso_produto" name="peso_produto" class="form-control"
                                        min="0" value="<?= $produto['peso_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-3 col-12">
                                    <label for="cor_produto">Cor:</label>
                                    <input type="text" id="cor_produto" name="cor_produto" class="form-control"
                                        value="<?= $produto['cor_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-3 col-12">
                                    <label for="material_embalagem">Embalagem:</label>
                                    <input type="text" id="material_embalagem" name="material_embalagem"
                                        class="form-control" value="<?= $produto['material_embalagem'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="temperatura_armazenamento">Temperatura:</label>
                                    <input type="text" id="temperatura_armazenamento" name="temperatura_armazenamento"
                                        class="form-control" value="<?= $produto['temperatura_armazenamento'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="tabela_nutricional">Tabela Nutricional:</label>
                                    <textarea id="tabela_nutricional" name="tabela_nutricional" class="form-control"
                                        rows="4"><?= $produto['tabela_nutricional'] ?></textarea>
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="alergenos">Alergenos:</label>
                                    <textarea id="alergenos" name="alergenos" class="form-control"
                                        rows="4"><?= $produto['alergenos'] ?></textarea>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="preco_custo">$ de Custo:</label>
                                    <input type="number" id="preco_custo" name="preco_custo" class="form-control"
                                        step="0.01" min="0" value="<?= $produto['preco_custo'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="preco_venda">$ de Venda:</label>
                                    <input type="number" id="preco_venda" name="preco_venda" class="form-control"
                                        step="0.01" min="0" value="<?= $produto['preco_venda'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="impostos">Impostos:</label>
                                    <input type="text" id="impostos" name="impostos" class="form-control"
                                        value="<?= $produto['impostos'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="fornecedor">Fornecedor:</label>
                                    <input type="text" id="fornecedor" name="fornecedor" class="form-control"
                                        value="<?= $produto['fornecedor'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="validade_produto">Validade do Produto:</label>
                                    <input type="date" id="validade_produto" name="validade_produto"
                                        class="form-control" value="<?= $produto['validade_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="localizacao_produto">Localização do Produto:</label>
                                    <input type="text" id="localizacao_produto" name="localizacao_produto"
                                        class="form-control" value="<?= $produto['localizacao_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="lote_produto">Lote do Produto:</label>
                                    <input type="text" id="lote_produto" name="lote_produto" class="form-control"
                                        value="<?= $produto['lote_produto'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="data_fabricacao">Data de Fabricação:</label>
                                    <input type="date" id="data_fabricacao" name="data_fabricacao" class="form-control"
                                        value="<?= $produto['data_fabricacao'] ?>">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="data_validade">Data de Validade:</label>
                                    <input type="date" id="data_validade" name="data_validade" class="form-control"
                                        value="<?= $produto['data_validade'] ?>">
                                </div>
                                <div class="form-group mt-3 col-12">
                                    <label for="imagem_produto">Imagem do Produto:</label>
                                    <input type="file" id="imagem_produto" name="imagem_produto"
                                        class="form-control-file" accept="image/*">
                                    <?php if (!empty($produto['imagem_produto'])): ?>
                                    <img src="<?= base_url('uploads/produtos/' . $produto['imagem_produto']) ?>"
                                        alt="Imagem do Produto" width="100">
                                    <?php endif; ?>
                                </div>

                                <div class="dropzone needsclick" id="dropzone-multi">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files
                                            are
                                            <span class="fw-medium">not</span> actually uploaded.)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" />
                                    </div>
                                </div>




                                <div class="form-group mt-3 col-12">
                                    <label for="ingredientes_produto">Ingredientes:</label>
                                    <textarea id="ingredientes_produto" name="ingredientes_produto" class="form-control"
                                        rows="4"><?= $produto['ingredientes_produto'] ?></textarea>
                                </div>

                                <div class="form-group mt-3 col-12">
                                    <label for="beneficios_produto">Benefícios:</label>
                                    <textarea id="beneficios_produto" name="beneficios_produto" class="form-control"
                                        rows="4"><?= $produto['beneficios_produto'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary btn-block">Atualizar Produto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endsection() ?>

<?= $this->section('js') ?>
<!-- Incluindo os Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<?= $this->endsection() ?>