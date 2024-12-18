<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="col-12 mt-3">
    <div class="row">
        <div class="col-12 col-md-9  py-3">
            <div class="card invoice-preview-card p-sm-12  px-3">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="swiper-container swiper-responsive">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= base_url('assets/img/illustrations/man-with-laptop-dark.png') ?>"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/img/illustrations/man-with-laptop-dark.png') ?>"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/img/illustrations/man-with-laptop-dark.png') ?>"
                                            class="d-block w-100 img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center">
                            <h3><?= $produto['nome_produto'] ?></h3>
                        </div>
                        <div class="text-center">
                            <?= $produto['codigo_barras'] ?><br>
                            <small class="text-muted">Cód. Barras: </small><br>
                        </div>
                        <span
                            class="badge rounded-pill badge-light-primary"><strong><?= $produto['nome_categoria'] ?></strong></span>
                        <br>
                        <span
                            class="badge rounded-pill badge-light-secondary"><strong><?= $produto['nome_subcategoria'] ?></strong></span>
                        <br>
                        <span class="badge rounded-pill badge-light-warning"><i>Preço Venda:
                            </i><strong><?= number_format($produto['preco_venda'], 2, ',', '.') ?></strong></span>
                        <br>
                        <span class="badge rounded-pill badge-light-info"><i>Cor:
                            </i><strong><?= $produto['cor_produto'] ?></strong></span>
                        <br>
                        <span class="badge rounded-pill badge-light-danger"><i>Validade:
                            </i><strong><?= date('d/m/Y', strtotime($produto['validade_produto'])) ?></strong></span>
                    </div>
                </div>



                <div class="row">
                    <div class="divider text-start m-5">
                        <div class="divider-text">Descrição do Produto</div>
                    </div>
                    <div class="col-12 mt-5">
                        <div>
                            <em><?= $produto['descricao_produto'] ?></em>
                        </div>
                    </div>
                    <div class="divider text-start m-5">
                        <div class="divider-text">Modo de Usar</div>
                    </div>
                    <div class="col-12 mt-5">
                        <div>
                            <em><?= $produto['sugestao_uso_produto'] ?></em>
                        </div>
                    </div>

                    <div class="divider text-start m-5">
                        <div class="divider-text">Dados do Produto</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Dimensões:</strong><br>
                            <em><?= $produto['dimensoes_produto'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Peso:</strong><br>
                            <em><?= $produto['peso_produto'] ?> </em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Embalagem:</strong><br>
                            <em><?= $produto['material_embalagem'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Temperatura:</strong><br>
                            <em><?= $produto['temperatura_armazenamento'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Preço de Custo:</strong><br>
                            <em>R$ <?= number_format($produto['preco_custo'], 2, ',', '.') ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">
                        <div class="text-center">
                            <strong>Impostos:</strong><br>
                            <em><?= $produto['impostos'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">

                        <div class="text-center">
                            <strong>Validade:</strong><br>
                            <em><?= date('d/m/Y', strtotime($produto['validade_produto'])) ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">

                        <div class="text-center">
                            <strong>Localização:</strong><br>
                            <em><?= $produto['localizacao_produto'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">

                        <div class="text-center">
                            <strong>Lote:</strong><br>
                            <em><?= $produto['lote_produto'] ?></em>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mt-5">

                        <div class="text-center">
                            <strong>Fabricação:</strong><br>
                            <em><?= date('d/m/Y', strtotime($produto['data_fabricacao'])) ?></em>
                        </div>
                    </div>
                </div>

                <div class="divider text-start m-5">
                    <div class="divider-text">Tabela Nutricional</div>
                </div>

                <div class="col-12 mt-5">
                    <div class="text-center">

                        <em><?= $produto['tabela_nutricional'] ?></em>
                    </div>
                </div>

                <div class="divider text-start m-5">
                    <div class="divider-text">Alergenos</div>
                </div>

                <div class="col-12 mt-5">
                    <div>
                        <em><?= $produto['alergenos'] ?></em>
                    </div>
                </div>
                <div class="divider text-start m-5">
                    <div class="divider-text">Ingredientes do Produto</div>
                </div>

                <div class="col-12 mt-5">
                    <div>
                        <em><?= $produto['ingredientes_produto'] ?></em>
                    </div>
                </div>
                <div class="divider text-start m-5">
                    <div class="divider-text">Beneficios do Produto</div>
                </div>

                <div class="col-12 mt-5">
                    <div>

                        <em><?= $produto['beneficios_produto'] ?></em>
                    </div>
                </div>
                <div class="divider text-start m-5">
                    <div class="divider-text">Sugestão de Uso</div>
                </div>
                <div class="col-12 mt-5">
                    <div>

                        <em><?= $produto['sugestao_uso_produto'] ?></em>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-12 col-md-3 mt-3 px-3">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary d-grid w-100 mb-4" data-bs-toggle="offcanvas"
                        data-bs-target="#sendInvoiceOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="bx bx-paper-plane bx-sm me-2"></i>Send Invoice</span>
                    </button>
                    <button class="btn btn-label-secondary d-grid w-100 mb-4">
                        Download
                    </button>
                    <div class="d-flex mb-4">
                        <a class="btn btn-label-secondary d-grid w-100 me-4" target="_blank"
                            href="./app-invoice-print.html">
                            Print
                        </a>
                        <a href="./app-invoice-edit.html" class="btn btn-label-secondary d-grid w-100">
                            Edit
                        </a>
                    </div>
                    <button class="btn btn-success d-grid w-100" data-bs-toggle="offcanvas"
                        data-bs-target="#addPaymentOffcanvas">
                        <span class="d-flex align-items-center justify-content-center text-nowrap"><i
                                class="bx bx-dollar bx-sm me-2"></i>Add Payment</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
    <div class="offcanvas-header mb-6 border-bottom">
        <h5 class="offcanvas-title">Send Invoice</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0 flex-grow-1">
        <form>
            <div class="mb-6">
                <label for="invoice-from" class="form-label">From</label>
                <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com"
                    placeholder="company@email.com">
            </div>
            <div class="mb-6">
                <label for="invoice-to" class="form-label">To</label>
                <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com"
                    placeholder="company@email.com">
            </div>
            <div class="mb-6">
                <label for="invoice-subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="invoice-subject"
                    value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
            </div>
            <div class="mb-6">
                <label for="invoice-message" class="form-label">Message</label>
                <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea>
            </div>
            <div class="mb-6">
                <span class="badge bg-label-primary">
                    <i class="bx bx-link bx-xs"></i>
                    <span class="align-middle">Invoice Attached</span>
                </span>
            </div>
            <div class="mb-6 d-flex flex-wrap">
                <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">Send</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </form>
    </div>
</div>
<div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title">Add Payment</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body flex-grow-1">
        <div class="d-flex justify-content-between bg-lighter p-2 mb-4">
            <p class="mb-0">Invoice Balance:</p>
            <p class="fw-medium mb-0">$5000.00</p>
        </div>
        <form>
            <div class="mb-6">
                <label class="form-label" for="invoiceAmount">Payment Amount</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="text" id="invoiceAmount" name="invoiceAmount" class="form-control invoice-amount"
                        placeholder="100">
                </div>
            </div>
            <div class="mb-6">
                <label class="form-label" for="payment-date">Payment Date</label>
                <input id="payment-date" class="form-control invoice-date flatpickr-input" type="text"
                    readonly="readonly">
            </div>
            <div class="mb-6">
                <label class="form-label" for="payment-method">Payment Method</label>
                <select class="form-select" id="payment-method">
                    <option value="" selected="" disabled="">Select payment method</option>
                    <option value="Cash">Cash</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Paypal">Paypal</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="form-label" for="payment-note">Internal Payment Note</label>
                <textarea class="form-control" id="payment-note" rows="2"></textarea>
            </div>
            <div class="mb-6 d-flex flex-wrap">
                <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">Send</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?= $this->endSection() ?>