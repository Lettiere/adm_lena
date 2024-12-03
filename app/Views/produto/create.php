<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- Adiciona o CSS para o formulário -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/bootstrap/bootstrap.min.css') ?>">

<style>
.form-section {
    margin-bottom: 20px;
}

.form-header {
    font-weight: bold;
    margin-bottom: 15px;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="col-12">
    <div class="bs-stepper py-3 px-3">
        <h3 class="py-3">Cadastro de Produto Alimentar</h3>
        <form action="<?= site_url('produto/salvar') ?>" method="POST" enctype="multipart/form-data">

            <!-- Identificação do Produto -->
            <div class="form-section">
                <div class="form-header">Identificação do Produto</div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="nome_produto" class="form-label">Nome do Produto</label>
                        <input type="text" id="nome_produto" name="nome_produto" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="codigo_barras" class="form-label">Código de Barras (EAN-13)</label>
                        <input type="text" id="codigo_barras" name="codigo_barras" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="descricao_produto" class="form-label">Descrição Detalhada</label>
                        <textarea id="descricao_produto" name="descricao_produto" class="form-control" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="categoria_produto" class="form-label">Categoria</label>
                        <select id="categoria_produto" name="categoria_produto" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="alimentos">Alimentos</option>
                            <option value="biscoitos">Biscoitos</option>
                            <!-- Adicione outras opções conforme necessário -->
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="subcategoria_produto" class="form-label">Subcategoria</label>
                        <select id="subcategoria_produto" name="subcategoria_produto" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="biscoitos_integrais">Biscoitos Integrais</option>
                            <!-- Adicione outras opções conforme necessário -->
                        </select>
                    </div>
                </div>
            </div>

            <!-- Informações Técnicas -->
            <div class="form-section">
                <div class="form-header">Informações Técnicas</div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <label for="dimensoes_produto" class="form-label">Dimensões (cm)</label>
                        <input type="text" id="dimensoes_produto" name="dimensoes_produto" class="form-control"
                            required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="peso_produto" class="form-label">Peso (g)</label>
                        <input type="number" id="peso_produto" name="peso_produto" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="cor_produto" class="form-label">Cor</label>
                        <input type="text" id="cor_produto" name="cor_produto" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="material_embalagem" class="form-label">Material da Embalagem</label>
                        <input type="text" id="material_embalagem" name="material_embalagem" class="form-control"
                            required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="temperatura_armazenamento" class="form-label">Temperatura de Armazenamento</label>
                        <input type="text" id="temperatura_armazenamento" name="temperatura_armazenamento"
                            class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Informações Nutricionais -->
            <div class="form-section">
                <div class="form-header">Informações Nutricionais</div>
                <div class="row">
                    <div class="col-12">
                        <label for="tabela_nutricional" class="form-label">Tabela Nutricional</label>
                        <textarea id="tabela_nutricional" name="tabela_nutricional" class="form-control" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="alergenos" class="form-label">Alérgenos</label>
                        <textarea id="alergenos" name="alergenos" class="form-control" rows="4" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Informações Comerciais -->
            <div class="form-section">
                <div class="form-header">Informações Comerciais</div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="preco_custo" class="form-label">Preço de Custo</label>
                        <input type="number" id="preco_custo" name="preco_custo" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="preco_venda" class="form-label">Preço de Venda</label>
                        <input type="number" id="preco_venda" name="preco_venda" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="impostos" class="form-label">Impostos</label>
                        <input type="text" id="impostos" name="impostos" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="fornecedor" class="form-label">Fornecedor</label>
                        <input type="text" id="fornecedor" name="fornecedor" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="validade_produto" class="form-label">Validade</label>
                        <input type="date" id="validade_produto" name="validade_produto" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Informações de Estoque -->
            <div class="form-section">
                <div class="form-header">Informações de Estoque</div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="localizacao_produto" class="form-label">Localização no Estoque</label>
                        <input type="text" id="localizacao_produto" name="localizacao_produto" class="form-control"
                            required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lote_produto" class="form-label">Lote</label>
                        <input type="text" id="lote_produto" name="lote_produto" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="data_fabricacao" class="form-label">Data de Fabricação</label>
                        <input type="date" id="data_fabricacao" name="data_fabricacao" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="data_validade" class="form-label">Data de Validade</label>
                        <input type="date" id="data_validade" name="data_validade" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Informações de Marketing -->
            <div class="form-section">
                <div class="form-header">Informações de Marketing</div>
                <div class="row">
                    <div class="col-12">
                        <label for="imagem_produto" class="form-label">Imagem do Produto</label>
                        <input type="file" id="imagem_produto" name="imagem_produto" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="ingredientes_produto" class="form-label">Ingredientes</label>
                        <textarea id="ingredientes_produto" name="ingredientes_produto" class="form-control" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="beneficios_produto" class="form-label">Benefícios</label>
                        <textarea id="beneficios_produto" name="beneficios_produto" class="form-control" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="sugestao_uso_produto" class="form-label">Sugestão de Uso</label>
                        <textarea id="sugestao_uso_produto" name="sugestao_uso_produto" class="form-control" rows="4"
                            required></textarea>
                    </div>
                </div>
            </div>

            <!-- Submeter Formulário -->
            <div class="form-section">
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </div>

        </form>
    </div>
</div>

<?= $this->endSection() ?>