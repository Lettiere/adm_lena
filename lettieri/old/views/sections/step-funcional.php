<?php include_once('views/partials/header.php'); ?>




<div class="container mt-5">
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

                <div class="pb-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar me-2">
                                <img src="https://ui-avatars.com/api/?name=AM&amp;size=128&amp;background=232333&amp;bold=true&amp;rounded=true&amp;color=ffffff" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="mb-0 text-truncate" title="Nome Completo">Ana Maria Viana Lima</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h5>Dados do Aluno</h5>
                    <div class="form-group">
                        <label for="nomeAluno">Nome Completo / CPF</label>
                        <input type="text" class="form-control" id="nomeAluno" placeholder="João da Silva">
                    </div>
                    <div class="form-group">
                        <label for="idadeAluno">Idade</label>
                        <input type="number" class="form-control" id="idadeAluno" placeholder="18">
                    </div>
                </div>
                <button class="btn btn-primary btn-next mt-5">Próximo</button>
            </div>

            <!-- Formulário Dados -->
            <div id="dados-part" class="content">
                <div class="col-12">
                    <h5>Dados Pessoais</h5>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="Rua Exemplo, 123">
                    </div>
                    <button class="btn btn-secondary btn-prev">Anterior</button>
                    <button class="btn btn-primary btn-next">Próximo</button>
                </div>
            </div>

            <!-- Formulário Pré-Matrícula -->
            <div id="pre-matricula-part" class="content">
                <div class="col-12">
                    <h5>Pré-Matrícula</h5>
                    <div class="form-group">
                        <label for="curso">Curso de Interesse</label>
                        <select class="form-control" id="curso">
                            <option>Engenharia</option>
                            <option>Direito</option>
                            <option>Medicina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="turno">Turno</label>
                        <select class="form-control" id="turno">
                            <option>Manhã</option>
                            <option>Tarde</option>
                            <option>Noite</option>
                        </select>
                    </div>
                    <button class="btn btn-secondary btn-prev">Anterior</button>
                    <button class="btn btn-primary btn-next">Próximo</button>
                </div>
            </div>

            <!-- Formulário Instituições -->
            <div id="instituicoes-part" class="content">
                <div class="col-12">
                    <h5>Instituições</h5>
                    <div class="form-group">
                        <label for="instituicao">Instituição de Ensino</label>
                        <select class="form-control" id="instituicao">
                            <option>Universidade Federal</option>
                            <option>Universidade Estadual</option>
                            <option>Centro Universitário</option>
                        </select>
                    </div>
                    <button class="btn btn-secondary btn-prev">Anterior</button>
                    <button class="btn btn-success btn-submit">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>


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
</div>
</div>
</div>
</div>
</div>
</div>



<?php include_once('views/partials/header.php'); ?>