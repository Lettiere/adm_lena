<?= $this->extend('_layout/default') ?>

<?= $this->section('css') ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Vendors CSS -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/typeahead-js/typeahead.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/quill/typography.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/quill/katex.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/quill/editor.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/select2/select2.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/dropzone/dropzone.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/flatpickr/flatpickr.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/libs/tagify/tagify.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/vendor/css/rtl/core-dark.css') ?>" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="<?= base_url('assets/vendor/js/template-customizer.js') ?>"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="<?= base_url('assets/js/config.js') ?>"></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>

<!-- Incluindo o CSS do Bootstrap -->
<div class="container-xxl flex-grow-1 container-p-y">


    <div class="app-ecommerce" data-select2-id="18">

        <!-- Add Product -->
        <div
            class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">

            <div class="d-flex flex-column justify-content-center">
                <h4 class="mb-1">Add a new Product</h4>
                <p class="mb-0">Orders placed across your store</p>
            </div>
            <div class="d-flex align-content-center flex-wrap gap-4">
                <div class="d-flex gap-4"><button class="btn btn-label-secondary">Discard</button>
                    <button class="btn btn-label-primary">Save draft</button>
                </div>
                <button type="submit" class="btn btn-primary">Publish product</button>
            </div>

        </div>

        <div class="row" data-select2-id="17">
            <div class="col-12 col-lg-8">
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Product information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-6">
                            <label class="form-label" for="ecommerce-product-name">NOme do Produto</label>
                            <input type="text" class="form-control" id="ecommerce-product-name"
                                placeholder="Product title" name="productTitle" aria-label="Product title">
                        </div>
                        <div class="row mb-6">
                            <div class="col"><label class="form-label" for="ecommerce-product-sku">SKU</label>
                                <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU"
                                    name="productSku" aria-label="Product SKU">
                            </div>
                            <div class="col"><label class="form-label" for="ecommerce-product-barcode">Barcode</label>
                                <input type="text" class="form-control" id="ecommerce-product-barcode"
                                    placeholder="0123-4567" name="productBarcode" aria-label="Product barcode">
                            </div>
                        </div>
                        <!-- <div>
                            <label class="mb-1">Description (Optional)</label>
                            <div class="form-control p-0">
                                <div class="comment-toolbar border-0 border-bottom ql-toolbar ql-snow">
                                    <div class="d-flex justify-content-start">
                                        <span class="ql-formats me-0">
                                            <button class="ql-bold" type="button"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z">
                                                    </path>
                                                    <path class="ql-stroke"
                                                        d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-italic" type="button"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                                    <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                                </svg></button>
                                            <button class="ql-underline" type="button"><svg viewBox="0 0 18 18">
                                                    <path class="ql-stroke"
                                                        d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3">
                                                    </path>
                                                    <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3"
                                                        y="15"></rect>
                                                </svg></button>
                                            <button class="ql-list" value="ordered" type="button"><svg
                                                    viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                                    <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5">
                                                    </line>
                                                    <path class="ql-fill"
                                                        d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z">
                                                    </path>
                                                    <path class="ql-stroke ql-thin"
                                                        d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156">
                                                    </path>
                                                    <path class="ql-stroke ql-thin"
                                                        d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-list" value="bullet" type="button"><svg
                                                    viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                                    <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                                </svg></button>
                                            <button class="ql-link" type="button"><svg viewBox="0 0 18 18">
                                                    <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                                    <path class="ql-even ql-stroke"
                                                        d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z">
                                                    </path>
                                                    <path class="ql-even ql-stroke"
                                                        d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z">
                                                    </path>
                                                </svg></button>
                                            <button class="ql-image" type="button"><svg viewBox="0 0 18 18">
                                                    <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                                    <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                                    <polyline class="ql-even ql-fill"
                                                        points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>
                                <div class="comment-editor border-0 pb-6 ql-container ql-snow"
                                    id="ecommerce-category-description">
                                    <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"
                                        data-placeholder="Product Description">
                                        <p><br></p>
                                    </div>
                                    <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer"
                                            target="_blank" href="about:blank"></a><input type="text"
                                            data-formula="e=mc^2" data-link="https://quilljs.com"
                                            data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4" data-select2-id="16">
                <!-- Pricing Card -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pricing</h5>
                    </div>
                    <div class="card-body">
                        <!-- Base Price -->
                        <div class="mb-6">
                            <label class="form-label" for="ecommerce-product-price">Base Price</label>
                            <input type="number" class="form-control" id="ecommerce-product-price" placeholder="Price"
                                name="productPrice" aria-label="Product price">
                        </div>
                        <!-- Discounted Price -->
                        <div class="mb-6">
                            <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                            <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                placeholder="Discounted Price" name="productDiscountedPrice"
                                aria-label="Product discounted price">
                        </div>
                        <!-- Charge tax check box -->
                        <div class="form-check ms-2 mt-7 mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="price-charge-tax" checked="">
                            <label class="switch-label" for="price-charge-tax">
                                Charge tax on this product
                            </label>
                        </div>
                        <!-- Instock switch -->
                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                            <span class="mb-0">In stock</span>
                            <div class="w-25 d-flex justify-content-end">
                                <div class="form-check form-switch me-n3">
                                    <input type="checkbox" class="form-check-input" checked="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Pricing Card -->
                <!-- Organize Card -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Organize</h5>
                    </div>
                    <div class="card-body">
                        <!-- Vendor -->
                        <div class="mb-6 col ecommerce-select2-dropdown" data-select2-id="15">
                            <label class="form-label mb-1" for="vendor">
                                Vendor
                            </label>
                            <div class="position-relative" data-select2-id="14"><select id="vendor"
                                    class="select2 form-select select2-hidden-accessible"
                                    data-placeholder="Select Vendor" data-select2-id="vendor" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" data-select2-id="6">Select Vendor</option>
                                    <option value="men-clothing" data-select2-id="19">Men's Clothing</option>
                                    <option value="women-clothing" data-select2-id="20">Women's-clothing</option>
                                    <option value="kid-clothing" data-select2-id="21">Kid's-clothing</option>
                                </select><span
                                    class="select2 select2-container select2-container--default select2-container--below"
                                    dir="ltr" data-select2-id="5" style="width: 280.333px;"><span
                                        class="selection"><span class="select2-selection select2-selection--single"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-vendor-container"><span
                                                class="select2-selection__rendered" id="select2-vendor-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Select
                                                    Vendor</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Category -->
                        <div class="d-flex justify-content-between align-items-center" data-select2-id="25">
                            <div class="mb-6 col ecommerce-select2-dropdown" data-select2-id="24">
                                <label class="form-label mb-1" for="category-org">
                                    <span>Category</span>
                                </label>
                                <div class="position-relative" data-select2-id="23"><select id="category-org"
                                        class="select2 form-select select2-hidden-accessible"
                                        data-placeholder="Select Category" data-select2-id="category-org" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="" data-select2-id="8">Select Category</option>
                                        <option value="Household" data-select2-id="26">Household</option>
                                        <option value="Management" data-select2-id="27">Management</option>
                                        <option value="Electronics" data-select2-id="28">Electronics</option>
                                        <option value="Office" data-select2-id="29">Office</option>
                                        <option value="Automotive" data-select2-id="30">Automotive</option>
                                    </select><span
                                        class="select2 select2-container select2-container--default select2-container--above"
                                        dir="ltr" data-select2-id="7" style="width: 226.333px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false"
                                                aria-labelledby="select2-category-org-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-category-org-container" role="textbox"
                                                    aria-readonly="true"><span
                                                        class="select2-selection__placeholder">Select
                                                        Category</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            </div>
                            <a href="javascript:void(0);" class="fw-medium btn btn-icon btn-label-primary ms-4"><i
                                    class="bx bx-plus bx-md"></i></a>
                        </div>
                        <!-- Collection -->
                        <div class="mb-6 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1" for="collection">Collection
                            </label>
                            <div class="position-relative"><select id="collection"
                                    class="select2 form-select select2-hidden-accessible" data-placeholder="Collection"
                                    data-select2-id="collection" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="10">Collection</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">Women's-clothing</option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="9" style="width: 280.333px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-collection-container"><span
                                                class="select2-selection__rendered" id="select2-collection-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Collection</span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Status -->
                        <div class="mb-6 col ecommerce-select2-dropdown">
                            <label class="form-label mb-1" for="status-org">Status
                            </label>
                            <div class="position-relative"><select id="status-org"
                                    class="select2 form-select select2-hidden-accessible" data-placeholder="Published"
                                    data-select2-id="status-org" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="12">Published</option>
                                    <option value="Published">Published</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Inactive">Inactive</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="11" style="width: 280.333px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-status-org-container"><span
                                                class="select2-selection__rendered" id="select2-status-org-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Published</span></span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <!-- Tags -->
                        <div>
                            <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                            <tags class="tagify  form-control" tabindex="-1">
                                <tag title="Normal" contenteditable="false" spellcheck="false" tabindex="-1"
                                    class="tagify__tag tagify--noAnim" value="Normal">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag">
                                    </x>
                                    <div><span class="tagify__tag-text">Normal</span></div>
                                </tag>
                                <tag title="Standard" contenteditable="false" spellcheck="false" tabindex="-1"
                                    class="tagify__tag tagify--noAnim" value="Standard">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag">
                                    </x>
                                    <div><span class="tagify__tag-text">Standard</span></div>
                                </tag>
                                <tag title="Premium" contenteditable="false" spellcheck="false" tabindex="-1"
                                    class="tagify__tag tagify--noAnim" value="Premium">
                                    <x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag">
                                    </x>
                                    <div><span class="tagify__tag-text">Premium</span></div>
                                </tag><span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder=""
                                    class="tagify__input" role="textbox" aria-autocomplete="both"
                                    aria-multiline="false"></span>
                                ​
                            </tags><input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                value="Normal,Standard,Premium" aria-label="Product Tags" tabindex="-1">
                        </div>
                    </div>
                </div>
                <!-- /Organize Card -->
            </div>
            <!-- /Second column -->
        </div>
    </div>
</div>

<!-- Incluindo os Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
<script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/hammer/hammer.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/i18n/i18n.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/typeahead-js/typeahead.js') ?>"></script>
<script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="<?= base_url('assets/vendor/libs/quill/katex.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/quill/quill.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/select2/select2.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/dropzone/dropzone.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/jquery-repeater/jquery-repeater.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/flatpickr/flatpickr.js') ?>"></script>
<script src="<?= base_url('assets/vendor/libs/tagify/tagify.js') ?>"></script>
<?= $this->endsection() ?>