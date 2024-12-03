<?php include_once('views/partials/header.php'); ?>
<style>
    .editor {
        width: 100%;
        height: 200px;
        border: 1px solid #ccc;
        padding: 10px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        outline: none;
        resize: none;
    }

    .hidden {
        display: none;
    }
</style>
<div class="container ">
    <div class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-header">
            <div class="step" data-target="#aluno-part">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-user-graduate"></i></span>
                    <span class="bs-stepper-label">Aluno</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#dados-part">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-info-circle"></i></span>
                    <span class="bs-stepper-label">Dados</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#pre-matricula-part">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-file-alt"></i></span>
                    <span class="bs-stepper-label">Pré-Matrícula</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#instituicoes-part">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-school"></i></span>
                    <span class="bs-stepper-label">Instituições</span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <!-- Formulário Aluno -->
            <div id="aluno-part" class="content">
                <div class="col-12 mt-3 mb-3">
                    <h5>Dados do Aluno</h5>
                    <!-- Bloco para selecionar o tipo de matrícula -->
                    <div class="row">
                        <div class="form-group col-4">
                            <label for="tipoMatricula">Tipo de Matrícula</label>
                            <select class="form-control" id="#">
                                <option value="">Período</option>
                                <option value="matricula">2024</option>
                                <option value="pre-matricula">2025</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label for="tipoMatricula">Tipo de Matrícula</label>
                            <select id="tipoMatricula" class="form-select" onchange="handleMatriculaChange()">
                                <option value="">Selecione</option>
                                <option value="matricula">Matrícula</option>
                                <option value="pre-matricula">Pré-Matrícula</option>
                            </select>
                        </div>
                        <!-- matricula -->
                        <div id="matriculaOptions" class="hidden col-4">
                            <label for="novoCidadao">É novo cidadão?</label>
                            <select id="novoCidadao" class="form-select" onchange="handleNovoCidadaoChange()">
                                <option value="">Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <!-- botao adiconar -->
                        <button id="cadastrarCidadaoBtn" class="btn btn-primary hidden mt-5" data-toggle="modal" data-target="#cadastrarModal">Cadastrar Cidadão</button>
                    </div>
                    <!-- Bloco de campos que aparecem apenas se "Pré-Matrícula" for selecionada -->
                    <div id="camposPreMatricula" style="display:none;" class="mt-3">
                        <h5>Dados do Aluno</h5>
                        <div class="form-group col-12 mb-3">
                            <label for="nomeAluno">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeAluno" placeholder="João da Silva">
                        </div>
                        <div class="row">
                            <div class="form-group col-3 mb-3">
                                <label for="cpfAluno">CPF</label>
                                <input type="text" class="form-control" id="cpfAluno" placeholder="123.456.789-00">
                            </div>
                            <div class="form-group col-3 mb-3">
                                <label for="dataNascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dataNascimento">
                            </div>
                            <div class="form-group col-3 mb-3">
                                <label for="idadeAluno">Idade</label>
                                <input type="number" class="form-control" id="idadeAluno" placeholder="18">
                            </div>
                            <div class="form-group col-3 mb-3">
                                <label for="sexoBiologico">Sexo Biológico</label>
                                <input type="text" class="form-control" id="sexoBiologico" placeholder="Masculino/Feminino">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6 mb-3">
                                <label for="filial1">Filiação 1</label>
                                <input type="text" class="form-control" id="filial1" placeholder="Nome do responsável 1">
                            </div>
                            <div class="form-group col-6 mb-3">
                                <label for="filial2">Filiação 2</label>
                                <input type="text" class="form-control" id="filial2" placeholder="Nome do responsável 2">
                            </div>
                        </div>
                        <!-- Separador e identificação da instituição -->
                        <hr>
                        <div class="pb-3 pb-0">
                            <div class="content-header">
                                <h6 class="mb-3 text-warning">Identificação da Instituição</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar me-2">
                                        <img src="/assets/img/illustrations/instituicao-avatar.png" alt="Avatar" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-truncate" title="Nome da Instituição">Colégio Municipal de Belo Campo</h6>
                                        <small class="text-truncate text-body" title="Secretaria Responsável">Secretaria Municipal de Educacao de Belo Campo</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bloco para dados do responsável -->
                        <div class="row">
                            <div class="form-group col-4 mb-3">
                                <label for="responsavel">Responsável</label>
                                <input type="text" class="form-control" id="responsavel" placeholder="Nome do responsável">
                            </div>
                            <div class="form-group col-4 mb-3">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" placeholder="12.345.678/0001-90">
                            </div>
                            <div class="form-group col-4 mb-3">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" placeholder="(99) 99999-9999">
                            </div>
                        </div>
                        <!-- Separador e pergunta sobre transporte público -->
                        <div class="row">
                            <p>Transporte</p>
                            <div class="form-group col-4 ">
                                <label for="cidades">Escolha a cidade</label>
                                <select class="form-control" id="usaTransporte">
                                    <option value="">Selecione</option>
                                    <option value="sim">Sim</option>
                                    <option value="não">Não</option>
                                </select>
                            </div>
                            <!-- Bloco que aparece se a resposta for "sim" -->
                            <div id="selectCidades" style="display:none;" class="col-8">
                                <div class="form-group ">
                                    <label for="cidades">Escolha a cidade</label>
                                    <select class="form-control" id="cidades">
                                        <option value="cidade1">Cidade 1</option>
                                        <option value="cidade2">Cidade 2</option>
                                        <option value="cidade3">Cidade 3</option>
                                        <option value="cidade4">Cidade 4</option>
                                        <option value="cidade5">Cidade 5</option>
                                        <option value="cidade6">Cidade 6</option>
                                        <option value="cidade7">Cidade 7</option>
                                        <option value="cidade8">Cidade 8</option>
                                        <option value="cidade9">Cidade 9</option>
                                        <option value="cidade10">Cidade 10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-next mt-5">Próximo</button>
                    </div>
                </div>
            </div>
            <!-- Formulário Dados -->
            <div id="dados-part" class="content">
                <div class="col-12">
                    <div class="content-header">
                        <h6 class="mb-0 text-warning">Documentação</h6>
                        <small>Documentos do aluno</small>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped border-top table-hover table-docs">
                            <thead>
                                <tr>
                                    <th width="100">Arquivo</th>
                                    <th>Descrição</th>
                                    <th width="120" class="text-nowrap">Cadastrado em</th>
                                    <th width="100">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="/administrativo/aluno/view-doc/ADoc1-66e494a27f7a11.56515601.pdf" data-popthumb="png" target="_blank" class="text-danger" aria-label="ver documento" data-bs-original-title="ver documento"><i class="bx bx-md bxs-file-pdf"></i></a></td>
                                    <td>teste </td>
                                    <td>13/09/2024</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-12" id="aluno_documentos">
                        <span class="badge bg-label-primary mb-2">Adicionar documentos</span>
                        <div class="cardMaster border border-primary p-3 rounded mb-3">
                            <div id="form-repeater-documentos">
                                <div data-repeater-list="documentos">
                                    <div data-repeater-item="">
                                        <div class="row">
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="documentos_descricao">Descrição</label>
                                                <input type="text" id="documentos_descricao" name="documentos[0][documentos_descricao]" class="form-control">
                                            </div>
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="documentos_arquivo">Arquivo PDF</label>
                                                <input type="file" class="form-control" name="documentos[0][documentos_arquivo]" accept=".pdf">
                                            </div>
                                            <div class="mb-3 col-2 mb-0 text-end">
                                                <label class="form-label" for="btn-remover">Ações</label><br>
                                                <button type="button" id="btn-remover" class="btn btn-label-danger" data-repeater-delete="">
                                                    <span class="align-middle">Remover</span>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div data-repeater-item="">
                                        <div class="row">
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="documentos-2-1">Descrição</label>
                                                <input type="text" id="documentos-2-1" name="documentos[1][documentos_descricao]" class="form-control">
                                            </div>
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="documentos-2-2">Arquivo PDF</label>
                                                <input type="file" class="form-control" name="documentos[1][documentos_arquivo]" accept=".pdf" id="documentos-2-2">
                                            </div>
                                            <div class="mb-3 col-2 mb-0 text-end">
                                                <label class="form-label" for="btn-remover">Ações</label><br>
                                                <button type="button" id="btn-remover" class="btn btn-label-danger" data-repeater-delete="">
                                                    <span class="align-middle">Remover</span>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="mb-0 text-center">
                                    <button type="button" class="btn btn-primary" data-repeater-create="">
                                        <i class="bx bx-plus me-1"></i>
                                        <span class="align-middle">Novo Documento</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary btn-prev">Anterior</button>
                <button class="btn btn-primary btn-next">Próximo</button>
            </div>
            <!-- Formulário Instituições -->
            <div id="instituicoes-part" class="content">
                <div class="col-xl-12">
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="transferencia" class="form-label">É transferência?</label>
                            <select id="transferencia" name="transferencia" class="form-select" onchange="toggleEscolas()">
                                <option value="" selected>Selecione</option>
                                <option value="sim">Sim</option>
                                <option value="nao">Não</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div id="selectEscolas" class="hidden mb-3">
                                <label for="escolas" class="form-label">Escolha uma escola:</label>
                                <select id="escolas" name="escolas" class="form-select" onchange="showAdditionalSelect()">
                                    <option value="" selected>Selecione uma escola</option>
                                    <option value="escola1">Escola 1</option>
                                    <option value="escola2">Escola 2</option>
                                    <option value="escola3">Escola 3</option>
                                    <option value="escola4">Escola 4</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div id="additionalSelectContainer" class="hidden mb-3">
                                <label for="additionalSelect" class="form-label">Escolha uma opção adicional:</label>
                                <select id="additionalSelect" name="additionalSelect" class="form-select">
                                    <option value="" selected>Selecione uma opção</option>
                                    <option value="opcao1">Opção 1</option>
                                    <option value="opcao2">Opção 2</option>
                                    <option value="opcao3">Opção 3</option>
                                    <option value="opcao4">Opção 4</option>
                                    <option value="opcao5">Opção 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulário Pré-Matrícula -->
            <div id="pre-matricula-part" class="content">
                <div class="col-12">
                    <div class="content-header mb-3">
                        <h6 class="mb-0 text-warning">Comorbidades</h6>
                        <small>Quadro de saúde do aluno</small>
                    </div>
                    <div class="col-12">
                        <span class="badge bg-label-warning mb-2">Alergias</span>
                        <div class="table-responsive">
                            <table class="table table-striped border-top table-hover last-col-center">
                                <thead>
                                    <tr>
                                        <th>Alergia</th>
                                        <th>Descrição</th>
                                        <th width="10">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Alergia a Ácaros</td>
                                        <td>Provocada por pequenos aracnídeos encontrados em poeira doméstica, causando sintomas semelhantes aos da alergia ao pólen.</td>
                                        <td><a class="btn btn-sm text-danger btn-icon" role="button" data-role="delete" href="/administrativo/669/student/19/allergy" title="Desativar Alergia a Ácaros"><i class="bx bx-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 mb-1">
                            <label for="allergies" class="form-label">Possui Alergia?</label>
                            <select id="allergies" name="allergies[]" class="select2 form-select" multiple>
                                <option value="1">Alergia ao Pólen</option>
                                <option value="2">Alergia a Ácaros</option>
                                <option value="3">Alergia a Animais</option>
                                <option value="4">Alergias Alimentares</option>
                                <option value="5">Alergias Dermatite de Contato</option>
                                <option value="6">Alergias Urticárias</option>
                                <option value="7">Alergias Medicamentosas</option>
                                <option value="8">Alergias a Insetos</option>
                                <option value="9">Alergias a Produtos Químicos</option>
                                <option value="10">Alergias ao Látex</option>
                                <option value="11">Alergias a Fungos</option>
                                <option value="12">Alergia ao Frio</option>
                                <option value="13">Alergias Oculares</option>
                                <option value="14">Alergias ao Sol</option>
                                <option value="15">Alergia ao Metal</option>
                            </select>
                        </div>
                        <div class="col-xl-6 mb-1">
                            <label for="precisa_acompanhamento" class="form-label">Precisa de Acompanhante?</label>
                            <select name="precisa_acompanhamento" title="Acompanhante Necessário?" id="precisa_acompanhamento" class="form-control">
                                <option value="0">Não</option>
                                <option value="1" selected>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="badge bg-label-danger mb-2">Comorbidades</span>
                        <div class="table-responsive">
                            <table class="table table-striped border-top table-hover ">
                                <thead>
                                    <tr>
                                        <th width="100">Código</th>
                                        <th>Descrição</th>
                                        <th width="10">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>F220</td>
                                        <td>Transtorno delirante</td>
                                        <td><a class="btn btn-sm text-danger btn-icon" role="button" data-role="delete" href="/administrativo/669/student/22/comorbidity" title="Desativar F220"><i class="bx bx-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>F200</td>
                                        <td>Esquizofrenia paranóide</td>
                                        <td><a class="btn btn-sm text-danger btn-icon" role="button" data-role="delete" href="/administrativo/669/student/23/comorbidity" title="Desativar F200"><i class="bx bx-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>F410</td>
                                        <td>Transtorno de pânico ansiedade paroxística episódica </td>
                                        <td><a class="btn btn-sm text-danger btn-icon" role="button" data-role="delete" href="/administrativo/669/student/24/comorbidity" title="Desativar F410"><i class="bx bx-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-12 mb-1">
                        <label for="comorbidities" class="form-label">Possui Comorbidades?</label>
                        <select id="comorbidities" name="comorbidities[]" class="select2Comorbidade form-select" multiple>
                        </select>
                    </div>

                    <div class="col-12 mt-1">
                        <label for="Ocorrência"></label>
                        <textarea class="form-control" rows="5" placeholder="Digite seu texto aqui..."></textarea>
                    </div>
                    <div class="content-header">
                        <h6 class="mb-0 text-warning">Laudos</h6>
                        <small>Laudos do aluno</small>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped border-top table-hover  table-docs">
                            <thead>
                                <tr>
                                    <th width="100">Arquivo</th>
                                    <th>Descrição</th>
                                    <th width="120" class="text-nowrap">Cadastrado em</th>
                                    <th width="130">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="/administrativo/aluno/view-doc/ALau1-66e494a27f5839.77425883.pdf" target="_blank" class="text-danger" data-popthumb="png" aria-label="ver laudo" data-bs-original-title="ver laudo"><i class="bx bx-md bxs-file-pdf"></i></a></td>
                                    <td>doidim</td>
                                    <td>13/09/2024</td>
                                    <td><a title="excluir laudo" class="delete btn btn-sm btn-outline-danger" data-toggle="offcanvas" href="/administrativo/aluno/offcanvas/medical-report/6/1" role="button"><i class="bx bx-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xl-12">
                        <span class="badge bg-label-primary mb-2">Laudo Médico</span>
                        <div class="cardMaster border border-primary p-3 rounded mb-3">
                            <div id="form-repeater-laudos">
                                <div data-repeater-list="laudos">
                                    <div data-repeater-item="">
                                        <div class="row">
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="laudos_descricao">Descrição</label>
                                                <input type="text" id="laudos_descricao" name="laudos[0][laudos_descricao]" class="form-control">
                                            </div>
                                            <div class="mb-3 col-5 mb-0">
                                                <label class="form-label" for="laudos_arquivo">Arquivo PDF</label>
                                                <input type="file" class="form-control" name="laudos[0][laudos_arquivo]" accept=".pdf">
                                            </div>
                                            <div class="mb-3 col-2 mb-0 text-end">
                                                <label class="form-label" for="btn-remover">Ações</label><br>
                                                <button type="button" id="btn-remover" class="btn btn-label-danger" data-repeater-delete="">
                                                    <span class="align-middle">Remover</span>
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="mb-0 text-center">
                                    <button type="button" class="btn btn-primary" data-repeater-create="">
                                        <i class="bx bx-plus me-1"></i>
                                        <span class="align-middle">Novo Laudo</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary btn-prev">Anterior</button>
                <button class="btn btn-primary btn-next">Próximo</button>
            </div>
        </div>
        <!-- Formulário Instituições -->
        <div id="instituicoes-part" class="content">
            <div class="col-xl-12">
                <div class="row mb-3">
                    <div class="col-4">
                        <label for="transferencia" class="form-label">É transferência?</label>
                        <select id="transferencia" name="transferencia" class="form-select" onchange="toggleEscolas()">
                            <option value="">Selecione</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <div id="selectEscolas" class="hidden mb-3">
                            <label for="escolas" class="form-label">Escolha uma escola:</label>
                            <select id="escolas" name="escolas" class="form-select" onchange="showAdditionalSelect()">
                                <option value="">Selecione uma escola</option>
                                <option value="escola1">Escola 1</option>
                                <option value="escola2">Escola 2</option>
                                <option value="escola3">Escola 3</option>
                                <option value="escola4">Escola 4</option>
                                <option value="escola5">Escola 5</option>
                                <option value="escola6">Escola 6</option>
                                <option value="escola7">Escola 7</option>
                                <option value="escola8">Escola 8</option>
                                <option value="escola9">Escola 9</option>
                                <option value="escola10">Escola 10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="selectEscolas" class="hidden mb-3">
                            <label for="escolas" class="form-label">Escolha uma escola:</label>
                            <select id="escolas" name="escolas" class="form-select" onchange="showAdditionalSelect()">
                                <option value="" selected>Selecione uma escola</option>
                                <option value="escola1">Escola 1</option>
                                <option value="escola2">Escola 2</option>
                                <option value="escola3">Escola 3</option>
                                <option value="escola4">Escola 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div id="additionalSelectContainer" class="hidden mb-3">
                            <label for="additionalSelect" class="form-label">Qual Serie Prevista:</label>
                            <select id="additionalSelect" name="additionalSelect" class="form-select">
                                <option value="" selected>Selecione uma opção</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>



<!-- MODAL -->

<!-- Modal -->
<div class="modal fade" id="cadastrarModal" tabindex="-1" role="dialog" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cadastrarModalLabel">Cadastrar Cidadão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="cadastrarForm">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" form="cadastrarForm">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
</div>



<?php include('views/partials/footer.php'); ?>

<script>
    const editor = document.querySelector('.editor');

    editor.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
</script>


<!-- adicionar scripts adicionais  -->

<!-- jQuery, Popper.js, Bootstrap JS e bs-stepper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

<script>
    // Inicializando o bs-stepper
    document.addEventListener('DOMContentLoaded', function() {
        var stepperElement = document.querySelector('.bs-stepper');
        var stepper = new Stepper(stepperElement, {
            linear: false,
            animation: true
        });

        // Avançar para o próximo passo
        var nextButtons = document.querySelectorAll('.btn-next');
        nextButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                stepper.next();
            });
        });

        // Voltar para o passo anterior
        var prevButtons = document.querySelectorAll('.btn-prev');
        prevButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                stepper.previous();
            });
        });

        // Enviar o formulário (último passo)
        var submitButton = document.querySelector('.btn-submit');
        if (submitButton) {
            submitButton.addEventListener('click', function() {
                alert('Formulário enviado com sucesso!');
            });
        }
    });
</script>

<script>
    $(document).ready(function() {
        // Exibe os campos de pré-matrícula quando a opção "Pré-Matrícula" é selecionada
        $('#tipoMatricula').change(function() {
            if ($(this).val() === 'pre-matricula') {
                $('#camposPreMatricula').show();
            } else {
                $('#camposPreMatricula').hide();
            }
        });

        // Exibe o select de cidades se a resposta para transporte público for "sim"
        $('#usaTransporte').change(function() {
            if ($(this).val() === 'sim') {
                $('#selectCidades').show();
            } else {
                $('#selectCidades').hide();
            }
        });
    });
</script>


<!-- Transfenrias -->
<script>
    function toggleEscolas() {
        const transferenciaSelect = document.getElementById('transferencia');
        const selectEscolas = document.getElementById('selectEscolas');

        if (transferenciaSelect.value === 'sim') {
            selectEscolas.classList.remove('hidden');
        } else {
            selectEscolas.classList.add('hidden');
            document.getElementById('additionalSelectContainer').classList.add('hidden');
        }
    }

    function showAdditionalSelect() {
        const selectEscolas = document.getElementById('escolas');
        const additionalSelectContainer = document.getElementById('additionalSelectContainer');

        if (selectEscolas.value) {
            additionalSelectContainer.classList.remove('hidden');
        } else {
            additionalSelectContainer.classList.add('hidden');
        }
    }
</script>
<script>
    const optionsBySchool = {
        escola1: [{
                value: 'maternal_i',
                label: 'Maternal I'
            },
            {
                value: 'maternal_ii',
                label: 'Maternal II'
            },
            {
                value: 'maternal_iii',
                label: 'Maternal III'
            }
        ],
        escola2: [{
                value: 'pre_escola_i',
                label: 'Pré-Escola I'
            },
            {
                value: 'pre_escola_ii',
                label: 'Pré-Escola II'
            }
        ],
        escola3: [{
            value: '1_ao_5',
            label: '1º ao 5º Ano'
        }],
        escola4: [{
            value: '6_ao_9',
            label: '6º ao 9º Ano'
        }]
    };

    function toggleEscolas() {
        const transferenciaSelect = document.getElementById('transferencia');
        const selectEscolas = document.getElementById('selectEscolas');

        if (transferenciaSelect.value === 'sim') {
            selectEscolas.classList.remove('hidden');
        } else {
            selectEscolas.classList.add('hidden');
            document.getElementById('additionalSelectContainer').classList.add('hidden');
            resetAdditionalSelect();
        }
    }

    function showAdditionalSelect() {
        const selectEscolas = document.getElementById('escolas');
        const additionalSelectContainer = document.getElementById('additionalSelectContainer');

        if (selectEscolas.value) {
            additionalSelectContainer.classList.remove('hidden');
            populateAdditionalSelect(selectEscolas.value);
        } else {
            additionalSelectContainer.classList.add('hidden');
            resetAdditionalSelect();
        }
    }

    function populateAdditionalSelect(school) {
        const additionalSelect = document.getElementById('additionalSelect');
        additionalSelect.innerHTML = '<option value="" selected>Selecione uma opção</option>'; // Reset options

        const options = optionsBySchool[school] || [];
        options.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.value;
            newOption.textContent = option.label;
            additionalSelect.appendChild(newOption);
        });
    }

    function resetAdditionalSelect() {
        const additionalSelect = document.getElementById('additionalSelect');
        additionalSelect.innerHTML = '<option value="" selected>Selecione uma opção</option>'; // Reset options
    }
</script>
<script>
    function handleMatriculaChange() {
        const tipoMatricula = document.getElementById('tipoMatricula').value;
        const matriculaOptions = document.getElementById('matriculaOptions');
        const cadastrarCidadaoBtn = document.getElementById('cadastrarCidadaoBtn');

        if (tipoMatricula === 'matricula') {
            matriculaOptions.classList.remove('hidden');
        } else {
            matriculaOptions.classList.add('hidden');
            cadastrarCidadaoBtn.classList.add('hidden'); // Esconde o botão se não for matrícula
        }
    }

    function handleNovoCidadaoChange() {
        const novoCidadao = document.getElementById('novoCidadao').value;
        const cadastrarCidadaoBtn = document.getElementById('cadastrarCidadaoBtn');

        if (novoCidadao === 'sim') {
            cadastrarCidadaoBtn.classList.remove('hidden');
        } else {
            cadastrarCidadaoBtn.classList.add('hidden');
        }
    }
</script>

<!-- Alergia -->
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Selecione uma ou mais alergias",
            allowClear: true
        });
    });
</script>
<!-- Comorbidae -->
<script>
    $(document).ready(function() {
        $('.select2Comorbidade').select2({
            placeholder: "Informe uma comorbidade ou seu código",
            allowClear: true
        });
    });
</script>


<!-- encerrar scripts adicionais  -->
<?php include('views/partials/footer_js.php'); ?>