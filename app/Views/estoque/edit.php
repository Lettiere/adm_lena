<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<!-- Incluindo o CSS do Bootstrap -->
<div class="">
    <h4>Editar Produto</h4>
    <form action="/produto/update/12345" method="POST" enctype="multipart/form-data">
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
                                        <option value="1">Categoria 1</option>
                                        <option value="2">Categoria 2</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="prod_subcategoria_id">Subcategoria:</label>
                                    <select id="prod_subcategoria_id" name="prod_subcategoria_id" class="form-control"
                                        required>
                                        <option value="">Selecione...</option>
                                        <option value="1">Subcategoria 1</option>
                                        <option value="2">Subcategoria 2</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="codigo_barras">Código de Barras:</label>
                                    <input type="text" id="codigo_barras" name="codigo_barras" class="form-control"
                                        maxlength="13" required value="1234567890123">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="nome_produto">Nome do Produto:</label>
                                    <input type="text" id="nome_produto" name="nome_produto" class="form-control"
                                        required value="Produto Exemplo">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="descricao_produto">Descrição do Produto:</label>
                                    <textarea id="descricao_produto" name="descricao_produto" class="form-control"
                                        rows="4" required>Descrição do produto exemplo.</textarea>
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="dimensoes_produto">Dimensões:</label>
                                    <input type="text" id="dimensoes_produto" name="dimensoes_produto"
                                        class="form-control" value="10x10x10 cm">
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="peso_produto">Peso (g):</label>
                                    <input type="number" id="peso_produto" name="peso_produto" class="form-control"
                                        min="0" value="500">
                                </div>
                                <div class="form-group mt-3 col-md-3 col-12">
                                    <label for="cor_produto">Cor:</label>
                                    <input type="text" id="cor_produto" name="cor_produto" class="form-control"
                                        value="Azul">
                                </div>
                                <div class="form-group mt-3 col-md-3 col-12">
                                    <label for="material_embalagem">Embalagem:</label>
                                    <input type="text" id="material_embalagem" name="material_embalagem"
                                        class="form-control" value="Plástico">
                                </div>
                                <div class="form-group mt-3 col-md-2 col-12">
                                    <label for="temperatura_armazenamento">Temperatura:</label>
                                    <input type="text" id="temperatura_armazenamento" name="temperatura_armazenamento"
                                        class="form-control" value="5°C a 25°C">
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="tabela_nutricional">Tabela Nutricional:</label>
                                    <textarea id="tabela_nutricional" name="tabela_nutricional" class="form-control"
                                        rows="4">Informações nutricionais.</textarea>
                                </div>
                                <div class="form-group mt-3 col-md-12 col-12">
                                    <label for="alergenos">Alergenos:</label>
                                    <textarea id="alergenos" name="alergenos" class="form-control"
                                        rows="4">Alergenos presentes.</textarea>
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="preco_custo">$ de Custo:</label>
                                    <input type="number" id="preco_custo" name="preco_custo" class="form-control"
                                        step="0.01" min="0" value="10.00">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="preco_venda">$ de Venda:</label>
                                    <input type="number" id="preco_venda" name="preco_venda" class="form-control"
                                        step="0.01" min="0" value="20.00">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="impostos">Impostos:</label>
                                    <input type="text" id="impostos" name="impostos" class="form-control" value="10%">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="fornecedor">Fornecedor:</label>
                                    <input type="text" id="fornecedor" name="fornecedor" class="form-control"
                                        value="Fornecedor Exemplo">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="validade_produto">Validade do Produto:</label>
                                    <input type="date" id="validade_produto" name="validade_produto"
                                        class="form-control" value="2024-12-31">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="localizacao_produto">Localização do Produto:</label>
                                    <input type="text" id="localizacao_produto" name="localizacao_produto"
                                        class="form-control" value="Armazém 1">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="lote_produto">Lote do Produto:</label>
                                    <input type="text" id="lote_produto" name="lote_produto" class="form-control"
                                        value="Lote 1234">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="data_fabricacao">Data de Fabricação:</label>
                                    <input type="date" id="data_fabricacao" name="data_fabricacao" class="form-control"
                                        value="2023-01-01">
                                </div>
                                <div class="form-group mt-3 col-md-4 col-12">
                                    <label for="data_validade">Data de Validade:</label>
                                    <input type="date" id="data_validade" name="data_validade" class="form-control"
                                        value="2025-01-01">
                                </div>

                                <div class="divider text-start">
                                    <div class="divider-text">Adicionar Imagem</div>
                                </div>
                                <div class="form-group mt-3 col-12">
                                    <label for="imagem_produto">Imagem do Produto:</label>
                                    <input type="file" id="imagem_produto" name="imagem_produto"
                                        class="form-control-file" accept="image/*">
                                    <img src="/uploads/produtos/exemplo.jpg" alt="Imagem do Produto" width="100">
                                </div>

                                <div class="form-group mt-5 col-12">
                                    <label for="ingredientes_produto">Ingredientes:</label>
                                    <textarea id="ingredientes_produto" name="ingredientes_produto" class="form-control"
                                        rows="4">Ingredientes do produto.</textarea>
                                </div>
                                <div class="form-group mt-3 col-12">
                                    <label for="beneficios_produto">Benefícios:</label>
                                    <textarea id="beneficios_produto" name="beneficios_produto" class="form-control"
                                        rows="4">Benefícios do produto.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary col-12 mb-5"
                                onclick="return confirm('Tem certeza que deseja atualizar este produto?')">
                                Atualizar Produto
                            </button>
                            <button type="button" class="btn btn-secondary col-12"
                                onclick="window.history.back()">Cancelar</button>
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