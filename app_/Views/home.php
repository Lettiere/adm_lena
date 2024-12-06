<?= $this->extend('_layout/default') ?>

<?= $this->section('content') ?>
<div id="accordionIcon" class="accordion accordion-without-arrow mb-2 mt-2">
    <div class="accordion-item card">
        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#accordionIcon-1" aria-controls="accordionIcon-1">
                <h3 class="mb-1">Dona Lena - <span>01.253.263/0001-00</span> </h3>
            </button>
        </h2>
        <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-12 col-lg-12 mb-2">
                        <p class="mb-0">Rua: Av. Pres. Getúlio Vargas, 123 <br> Centro - Belo Campo - Bahia <br>
                            Telefone: (71) 99999-9999 - Celular: (71) 99999-9999 <br>
                            E-mail: 7q4b9@example.com - Site: www.donalena.com.br </p>

                    </div>
                    <div class="col-12 col-lg-12 mb-5 mt-3">
                        <div class="d-flex justify-content-between flex-wrap gap-3 me-5">
                            <div class="d-flex align-items-center gap-3 me-4 me-sm-0">
                                <span class=" bg-label-primary p-2 rounded">
                                    <i class="bx bx-laptop bx-sm"></i>
                                </span>
                                <div class="content-left">
                                    <p class="mb-0">Cliente </p>
                                    <h4 class="text-primary mb-0">3500</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="bg-label-info p-2 rounded">
                                    <i class="bx bx-bulb bx-sm"></i>
                                </span>
                                <div class="content-left">
                                    <p class="mb-0">Pedidos</p>
                                    <h4 class="text-info mb-0">39</h4>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-3">
                                <span class="bg-label-warning p-2 rounded">
                                    <i class="bx bx-check-circle bx-sm"></i>
                                </span>
                                <div class="content-left">
                                    <p class="mb-0">teste </p>
                                    <h4 class="text-warning mb-0">405</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <span class="bg-label-warning p-2 rounded">
                                    <i class="bx bx-check-circle bx-sm"></i>
                                </span>
                                <div class="content-left">
                                    <p class="mb-0">3</p>
                                    <h4 class="text-warning mb-0">14</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-3">
    <div class="bs-stepper py-3 px-3">
        <div class="row">
            <div class="col-md-4">
                <div class="row" id="sortable-4">
                    <div class="col">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-header cursor-move">Cadastros</div>
                            <div class="card-body">
                                <h4 class="card-title text-white"><?= $quantidadeProdutos ?></h4>
                                <p class="card-text">Produtos Cadastrados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Secondary card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Success card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row" id="sortable-4">
                    <div class="col">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Primary card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Secondary card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Success card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row" id="sortable-4">
                    <div class="col">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Primary card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Secondary card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-header cursor-move">Drag me!</div>
                            <div class="card-body">
                                <h4 class="card-title text-white">Success card title</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?= $this->endSection() ?>
<?= $this->section('footer_js') ?>
<?= $this->endSection() ?>