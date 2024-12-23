<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<!-- DataTables CSS -->
<style>
    .bs-stepper {
        width: 100%;
    }

    .bs-stepper .d-flex {
        flex-wrap: wrap;
    }

    .bs-stepper .col-12 {
        margin-bottom: 1rem;
    }

    .bs-stepper .col-12.col-md-6 {
        width: 100%;
    }

    @media (min-width: 768px) {
        .bs-stepper .col-12.col-md-6 {
            width: 48%;
        }
    }

    @media (min-width: 992px) {
        .bs-stepper .col-12.col-md-6 {
            width: 49%;
        }
    }

    @media (min-width: 1200px) {
        .bs-stepper .col-12.col-md-6 {
            width: 50%;
        }
    }
</style>
<?= $this->endSection('css') ?>

<?= $this->section('content') ?>

<!-- Exibe mensagens de erro ou sucesso -->
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div class="container-xxl flex-grow-1 container-p-y ">
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
    <form action="<?= site_url('fornecedor/salvar') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="col-12">
            <div class="row">
                <div class="col-xl-9 col-md-9 col-12">
                    <div class="card mb-6">

                        <div class="card-body">
                            <div class="row">
                                <div class="row mt-3">

                                    <!-- Campo Razão Social -->
                                    <div class="col-12 col-md-7 mb-3 mt-3">
                                        <label for="razao_social" class="form-label">Razão Social</label>
                                        <input type="text" class="form-control" id="razao_social" name="razao_social"
                                            required>
                                    </div>
                                    <!-- Campo Nome Fantasia -->
                                    <div class="col-12 col-md-5 mb-3 mt-3">
                                        <label for="nome_fantasia" class="form-label">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia">
                                    </div>

                                    <!-- Campo Tipo de Fornecedor -->
                                    <div class="col-12 col-md-4 mb-3 mt-3">
                                        <label for="tipo_fornecedor" class="form-label">Tipo de Fornecedor</label>
                                        <select class="form-select" id="tipo_fornecedor" name="tipo_fornecedor" required
                                            onchange="atualizarMascaraCpfCnpj()">
                                            <option value="">Selecione o tipo de fornecedor</option>
                                            <option value="pj">Pessoa Jurídica (PJ)</option>
                                            <option value="pf">Pessoa Física (PF)</option>
                                        </select>
                                    </div>

                                    <!-- Campo CPF/CNPJ -->
                                    <div class="col-12 col-md-4 mb-3 mt-3">
                                        <label for="cpf_cnpj" class="form-label">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" required>
                                    </div>
                                    <!-- Campo Inscrição Estadual -->
                                    <div class="col-12 col-md-4 mb-3 mt-3">
                                        <label for="inscricao_estadual" class="form-label">Inscrição Estadual</label>
                                        <input type="text" class="form-control" id="inscricao_estadual"
                                            name="inscricao_estadual">
                                    </div>


                                    <!-- Campo Inscrição Municipal -->
                                    <div class="col-12 col-md-4 mb-3 mt-3">
                                        <label for="inscricao_municipal" class="form-label">Inscrição Municipal</label>
                                        <input type="text" class="form-control" id="inscricao_municipal"
                                            name="inscricao_municipal">
                                    </div>
                                    <!-- Campo Endereço -->
                                    <div class="col-12 col-md-6 mb-3 mt-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                                    </div>
                                    <!-- Campo Número -->
                                    <div class="col-12 col-md-2 mb-3 mt-3">
                                        <label for="numero" class="form-label">Número</label>
                                        <input type="number" class="form-control" id="numero" name="numero" required>
                                    </div>
                                    <!-- Campo Complemento -->
                                    <div class="col-12 col-md-6 mb-3 mt-3">
                                        <label for="complemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" id="complemento" name="complemento">
                                    </div>
                                    <!-- Campo Bairro -->
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="bairro" class="form-label">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" required>
                                    </div>
                                    <!-- Campo Cidade -->
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="cidade_id" class="form-label">Cidade</label>
                                        <select class="form-select" id="cidade_id" name="cidade_id" required>
                                            <option value="">Selecione a cidade</option>
                                            <option value="">Belo Campo</option>
                                        </select>
                                    </div>
                                    <!-- Campo Estado -->
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="estado_id" class="form-label">Estado</label>
                                        <select class="form-select" id="estado_id" name="estado_id" required>
                                            <option value="">Selecione o estado</option>
                                            <option value="">Bahia</option>
                                        </select>
                                    </div>
                                    <!-- Campo CEP -->
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep" required>
                                    </div>
                                    <!-- Campo Telefone -->
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            oninput="formatarTelefone(this)">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3 mt-3">
                                        <label for="telefone" class="form-label">Celular</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            pattern="\(\d{2}\) \d{5}-\d{4}" title="Formato esperado: (99) 99999-9999"
                                            oninput="formatarTelefone(this)">
                                    </div>

                                    <!-- Campo E-mail -->
                                    <div class="col-12 col-md-6 mb-3 mt-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                            title="Por favor, insira um endereço de e-mail válido">
                                    </div>
                                    <!-- Campo Responsável -->
                                    <div class="col-12 col-md-6 mb-3 mt-3">
                                        <label for="responsavel" class="form-label">Responsável</label>
                                        <input type="text" class="form-control" id="responsavel" name="responsavel"
                                            required>
                                    </div>
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











<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js">
</script>
<script>
    // Inicializa Cleave.js com a máscara padrão (CPF)
    let cleaveCpfCnpj = new Cleave('#cpf_cnpj', {
        delimiters: ['.', '.', '-'],
        blocks: [3, 3, 3, 2],
        numericOnly: true
    });

    // Função para atualizar a máscara com base no tipo de fornecedor
    function atualizarMascaraCpfCnpj() {
        const tipoFornecedor = document.getElementById('tipo_fornecedor').value;

        if (tipoFornecedor === 'pj') {
            // Configura máscara para CNPJ
            cleaveCpfCnpj.destroy(); // Remove a máscara atual
            cleaveCpfCnpj = new Cleave('#cpf_cnpj', {
                delimiters: ['.', '.', '/', '-'],
                blocks: [2, 3, 3, 4, 2],
                numericOnly: true
            });
        } else if (tipoFornecedor === 'pf') {
            // Configura máscara para CPF
            cleaveCpfCnpj.destroy(); // Remove a máscara atual
            cleaveCpfCnpj = new Cleave('#cpf_cnpj', {
                delimiters: ['.', '.', '-'],
                blocks: [3, 3, 3, 2],
                numericOnly: true
            });
        }
    }
</script>
<script>
    function formatarTelefone(input) {
        var value = input.value.replace(/\D/g, '');
        if (value.length > 10) {
            value = value.replace(/^(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else {
            value = value.replace(/^(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        }
        input.value = value;
    }
</script>
<?= $this->endSection() ?>