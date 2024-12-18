<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?= $this->endsection() ?>

<?= $this->section('content') ?>







<!-- Incluindo o CSS do Bootstrap -->
<div class="container mt-5">
    <h1>Editar Produto</h1>
    <form action="<?= site_url('produto/salvar') ?>" method="POST" enctype="multipart/form-data">
        <!-- Campo Categoria -->
        <div class="form-group">
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
        <div class="form-group">
            <label for="prod_subcategoria_id">Subcategoria:</label>
            <select id="prod_subcategoria_id" name="prod_subcategoria_id" class="form-control">
                <option value="">Selecione...</option>
                <?php foreach ($subcategorias as $subcategoria): ?>
                <option value="<?= $subcategoria['prod_subcategoria_id']; ?>"
                    <?= set_select('prod_subcategoria_id', $subcategoria['prod_subcategoria_id'], (old('prod_subcategoria_id') == $subcategoria['prod_subcategoria_id'] || $produto['prod_subcategoria_id'] == $subcategoria['prod_subcategoria_id']) ? true : false); ?>>
                    <?= $subcategoria['nome_subcategoria']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?= \Config\Services::validation()->getError('prod_subcategoria_id'); ?>
        </div>

        <!-- Nome do Produto -->
        <div class="form-group">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" class="form-control" required
                value="<?= isset($produto['nome_produto']) ? $produto['nome_produto'] : ''; ?>">
        </div>

        <!-- Código de Barras -->
        <div class="form-group">
            <label for="codigo_barras">Código de Barras:</label>
            <input type="text" id="codigo_barras" name="codigo_barras" class="form-control" maxlength="13" required
                value="<?= isset($produto['codigo_barras']) ? $produto['codigo_barras'] : ''; ?>">
        </div>

        <!-- Descrição do Produto -->
        <div class="form-group">
            <label for="descricao_produto">Descrição do Produto:</label>
            <textarea id="descricao_produto" name="descricao_produto" class="form-control" rows="4"
                required><?= isset($produto['descricao_produto']) ? $produto['descricao_produto'] : ''; ?></textarea>
        </div>

        <!-- Subcategoria do Produto -->
        <div class="form-group">
            <label for="subcategoria_produto">Subcategoria do Produto:</label>
            <input type="text" id="subcategoria_produto" name="subcategoria_produto" class="form-control"
                value="<?= isset($produto['subcategoria_produto']) ? $produto['subcategoria_produto'] : ''; ?>">
        </div>

        <!-- Dimensões do Produto -->
        <div class="form-group">
            <label for="dimensoes_produto">Dimensões do Produto:</label>
            <input type="text" id="dimensoes_produto" name="dimensoes_produto" class="form-control"
                value="<?= isset($produto['dimensoes_produto']) ? $produto['dimensoes_produto'] : ''; ?>">
        </div>

        <!-- Peso do Produto -->
        <div class="form-group">
            <label for="peso_produto">Peso do Produto (g):</label>
            <input type="number" id="peso_produto" name="peso_produto" class="form-control" min="0"
                value="<?= isset($produto['peso_produto']) ? $produto['peso_produto'] : ''; ?>">
        </div>

        <!-- Cor do Produto -->
        <div class="form-group">
            <label for="cor_produto">Cor do Produto:</label>
            <input type="text" id="cor_produto" name="cor_produto" class="form-control"
                value="<?= isset($produto['cor_produto']) ? $produto['cor_produto'] : ''; ?>">
        </div>

        <!-- Material da Embalagem -->
        <div class="form-group">
            <label for="material_embalagem">Material da Embalagem:</label>
            <input type="text" id="material_embalagem" name="material_embalagem" class="form-control"
                value="<?= isset($produto['material_embalagem']) ? $produto['material_embalagem'] : ''; ?>">
        </div>

        <!-- Temperatura de Armazenamento -->
        <div class="form-group">
            <label for="temperatura_armazenamento">Temperatura de Armazenamento:</label>
            <input type="text" id="temperatura_armazenamento" name="temperatura_armazenamento" class="form-control"
                value="<?= isset($produto['temperatura_armazenamento']) ? $produto['temperatura_armazenamento'] : ''; ?>">
        </div>

        <!-- Preço de Custo -->
        <div class="form-group">
            <label for="preco_custo">Preço de Custo:</label>
            <input type="number" id="preco_custo" name="preco_custo" class="form-control" step="0.01" min="0"
                value="<?= isset($produto['preco_custo']) ? $produto['preco_custo'] : ''; ?>">
        </div>

        <!-- Preço de Venda -->
        <div class="form-group">
            <label for="preco_venda">Preço de Venda:</label>
            <input type="number" id="preco_venda" name="preco_venda" class="form-control" step="0.01" min="0"
                value="<?= isset($produto['preco_venda']) ? $produto['preco_venda'] : ''; ?>">
        </div>

        <!-- Fornecedor -->
        <div class="form-group">
            <label for="fornecedor">Fornecedor:</label>
            <input type="text" id="fornecedor" name="fornecedor" class="form-control"
                value="<?= isset($produto['fornecedor']) ? $produto['fornecedor'] : ''; ?>">
        </div>

        <!-- Validade do Produto -->
        <div class="form-group">
            <label for="validade_produto">Validade do Produto:</label>
            <input type="date" id="validade_produto" name="validade_produto" class="form-control"
                value="<?= isset($produto['validade_produto']) ? $produto['validade_produto'] : ''; ?>">
        </div>

        <!-- Botão de Envio -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar Produto</button>
        </div>
    </form>
</div>

<!-- Incluindo os Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endsection() ?>