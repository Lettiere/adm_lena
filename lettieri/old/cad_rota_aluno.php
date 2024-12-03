<!DOCTYPE html>

<html lang="pt-br" class="dark-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Akashi | Educação</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="canonical" href="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/brand/favicon.png" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <!-- Datatables -->
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="./assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="./assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/sweetalert2/sweetalert2.css" />
    <!-- Datas -->
    <link rel="stylesheet" href="./assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Outros -->
    <link rel="stylesheet" href="./assets/vendor/libs/toastr/toastr.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="./assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
    <!-- Mapas -->
    <link rel="stylesheet" href="./assets/vendor/libs/leaflet/leaflet.css" />
    <!-- Gráficos -->
    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Customizações -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <script src="./assets/vendor/js/template-customizer.js"></script>
    <script src="./assets/js/config.js"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand akashi">
                    <a href="#!" class="app-brand-link">
                        <span class="app-brand-logo akashi">
                            <img class="img-fluid" height="40" alt="" src="./assets/img/brand/logo-menu.png" />
                        </span>
                        <img class="img-fluid app-brand-text akashi menu-tex" height="40" alt=""
                            src="./assets/img/brand/logo-akashi-dark.png"
                            data-app-light-img="brand/logo-akashi-light.png"
                            data-app-dark-img="brand/logo-akashi-dark.png" />
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="#!" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div class="text-truncate" data-i18n="Tela inicial">
                                Tela inicial
                            </div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Secretária de Educação">Secretária de Educação</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Cadastros">Cadastros</div>
                        </a>
                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="asso_rota_aluno.html" class="menu-link">
                                    <div class="text-truncate" data-i18n="Rotas">
                                        <a href="asso_rota_aluno.html">Rotas</a>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Gerenciar">Instituições</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Cadastros">Cadastros</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Rotas">
                                        Rotas
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Gerenciar Arquivos">Gerenciar Arquivos</span>
                    </li>
                    <li class="menu-item">
                        <a href="#!" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cabinet"></i>
                            <div class="text-truncate" data-i18n="UP-File">UP-File</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Auditoria">Auditoria</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-buildings"></i>
                            <div class="text-truncate" data-i18n="Auditoria">Auditoria</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Ativos">Ativos</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Passivo">Passivo</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Imóveis">Imóveis</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Povoados">
                                        Povoados
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Ruas">Ruas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#!" class="menu-link">
                                    <div class="text-truncate" data-i18n="Relatórios">
                                        Relatórios
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="AKASHI">AKASHI</span>
                    </li>
                    <li class="menu-item">
                        <a href="#!" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-pin"></i>
                            <div class="text-truncate" data-i18n="Usuários">Usuários</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#!" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div class="text-truncate" data-i18n="Suporte">Suporte</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#!" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div class="text-truncate" data-i18n="Minha Licença">
                                Minha Licença
                            </div>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Procurar (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-grid-alt bx-sm"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto"><i class='bx bx-buildings'></i>
                                                Secretarias</h5>
                                            <a href="#!" class="dropdown-shortcuts-add text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Ação Aqui"><i
                                                    class="bx bx-sm bx-plus-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-calendar fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Administração</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-primary">ATIVO</span></small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-donate-blood fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Ação Social</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-danger">MANUTENÇÃO</span></small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-book-reader fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Educação</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-primary">ATIVO</span></small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-first-aid fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Saúde</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-primary">ATIVO</span></small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bxs-tree-alt fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Secame</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-secondary">DESABILITADO</span></small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-hard-hat fs-4"></i>
                                                </span>
                                                <a href="#!" class="stretched-link">Obras/Transporte</a>
                                                <small class="text-muted mb-0"><span
                                                        class="badge bg-label-secondary">DESABILITADO</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i class="bx bx-sun me-2"></i>Claro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i class="bx bx-moon me-2"></i>Escuro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i class="bx bx-desktop me-2"></i>Sistema</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-bell bx-sm"></i>
                                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notificações</h5>
                                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="./assets/img/avatars/1.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                        <p class="mb-0">
                                                            Won the monthly best seller gold badge
                                                        </p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Charles Franklin</h6>
                                                        <p class="mb-0">Accepted your connection</p>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="./assets/img/avatars/2.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New Message ✉️</h6>
                                                        <p class="mb-0">
                                                            You have new message from Natalie
                                                        </p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="bx bx-cart"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                                                        <p class="mb-0">
                                                            ACME Inc. made new order $1,154
                                                        </p>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="./assets/img/avatars/9.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">
                                                            Application has been approved 🚀
                                                        </h6>
                                                        <p class="mb-0">
                                                            Your ABC project application has been approved.
                                                        </p>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="bx bx-pie-chart-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Monthly report is generated</h6>
                                                        <p class="mb-0">
                                                            July monthly financial report is generated
                                                        </p>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="./assets/img/avatars/5.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Send connection request</h6>
                                                        <p class="mb-0">
                                                            Peter sent you connection request
                                                        </p>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="./assets/img/avatars/6.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New message from Jane</h6>
                                                        <p class="mb-0">
                                                            Your have new message from Jane
                                                        </p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-warning"><i
                                                                    class="bx bx-error"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">CPU is running high</h6>
                                                        <p class="mb-0">
                                                            CPU Utilization Percent is currently at 88.63%,
                                                        </p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top p-3">
                                        <button class="btn btn-primary text-uppercase w-100">
                                            ver todas notificações
                                        </button>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="./assets/img/illustrations/cidadao-avatar.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="./assets/img/illustrations/cidadao-avatar.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">Usuário</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Meus Dados</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configurações</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="bx bx-help-circle me-2"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Sair</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Procurar..." aria-label="Procurar..." />
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>
                <div class="container mt-5">
                    <div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <small class="text-muted text-uppercase">Associar alunos a rotas</small><br><br>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="pesquisar">Pesquisar:</label>
                                        <select id="pesquisar" class="form-select select2">
                                            <option value="" selected disabled>Selecione uma opção</option>
                                            <option value="aluno1">José da Silva</option>
                                            <option value="aluno2">Maria Souza</option>
                                            <option value="aluno3">Carlos Pereira</option>
                                        </select>
                                    </div>
                                    <div class="col-4 ">
                                        <label for="biomas">Rota:</label>
                                        <select id="biomas" class="form-select select2">
                                            <option value="" selected disabled>Selecione um bioma</option>
                                            <option value="amazonia">Rota 1</option>
                                            <option value="caatinga">Rota 1</option>
                                            <option value="cerrado">Rota 1</option>
                                            <option value="pantanal">Rota 1</option>
                                            <option value="mata-atlantica">Rota 1</option>
                                            <option value="pampa">Rota 1</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mt-3 text-end">
                                        <a href="cad_rota_aluno.html" class="btn btn-warning text-nowrap">
                                            <i class="bx bx-user-plus me-1"></i> Selecionar Alunos
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive mb-3">
                                    <table class="table datatables-instituicao" id="datatables-instituicao">
                                        <thead class="border-top">
                                            <tr>
                                                <th data-priority="6">#</th>
                                                <th data-priority="1">Nome</th>
                                                <th data-priority="4" class="text-center">Rota</th>
                                                <th data-priority="5" class="text-center">Instituição</th>
                                                <th data-priority="2" class="text-center">Região</th>
                                                <th data-priority="3" class="text-center">Ações</th>
                                            </tr>
                                        </thead>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-end">
                                    <a href="cad_rota_aluno.php" class="btn btn-warning text-nowrap">
                                        <i class="bx bx-user-plus me-1"></i> Cadastrar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    <!-- Core JS -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./assets/vendor/libs/hammer/hammer.js"></script>
    <script src="./assets/vendor/libs/i18n/i18n.js"></script>
    <script src="./assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="./assets/vendor/js/menu.js"></script>
    <!-- Sweetalert -->
    <script src="./assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>
    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <!-- Datas -->
    <script src="./assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="./assets/vendor/libs/flatpickr/l10n/pt.js"></script>
    <!-- Mapas -->
    <script src="./assets/vendor/libs/leaflet/leaflet.js"></script>
    <!-- Arquivo temporário para gerar os gráficos da dashboard -->
    <script src="./assets/js/dashboards-analytics.js"></script>
    <script src="./assets/vendor/libs/toastr/toastr.js"></script>
    <!-- Máscaras para INPUT -->
    <script src="./assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="./assets/vendor/libs/cleavejs/cleave-phone.br.js"></script>
    <script src="./assets/vendor/libs/select2/select2.js"></script>
    <script src="./assets/vendor/libs/select2/i18n/pt-BR.js"></script>
    <script src="./assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
    <script src="./assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
    <script src="./assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="./assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script>
    $(document).ready(function() {
            // Inicializa Select2
            $('.select2').select2();
            // Dados simulados para a tabela
            var data = [{
                    id: 1,
                    nome: 'José da Silva',
                    rota: 'Rota 1',
                    instituicao: 'Escola A',
                    regiao: 'Norte'
                },
                {
                    id: 2,
                    nome: 'Maria Souza',
                    rota: 'Rota 2',
                    instituicao: 'Escola B',
                    regiao: 'Sul'
                },
                {
                    id: 3,
                    nome: 'Carlos Pereira',
                    rota: 'Rota 3',
                    instituicao: 'Escola C',
                    regiao: 'Leste'
                },
                {
                    id: 4,
                    nome: 'Ana Santos',
                    rota: 'Rota 4',
                    instituicao: 'Escola D',
                    regiao: 'Oeste'
                },
                {
                    id: 5,
                    nome: 'João Costa',
                    rota: 'Rota 5',
                    instituicao: 'Escola E',
                    regiao: 'Norte'
                },
                {
                    id: 6,
                    nome: 'Bruna Oliveira',
                    rota: 'Rota 6',
                    instituicao: 'Escola F',
                    regiao: 'Sul'
                },
                {
                    id: 7,
                    nome: 'Rafael Lima',
                    rota: 'Rota 7',
                    instituicao: 'Escola G',
                    regiao: 'Leste'
                },
                {
                    id: 8,
                    nome: 'Fernanda Barbosa',
                    rota: 'Rota 8',
                    instituicao: 'Escola H',
                    regiao: 'Oeste'
                },
                {
                    id: 9,
                    nome: 'Lucas Martins',
                    rota: 'Rota 9',
                    instituicao: 'Escola I',
                    regiao: 'Norte'
                },
                {
                    id: 10,
                    nome: 'Juliana Almeida',
                    rota: 'Rota 10',
                    instituicao: 'Escola J',
                    regiao: 'Sul'
                },
                {
                    id: 11,
                    nome: 'Vinicius Rocha',
                    rota: 'Rota 11',
                    instituicao: 'Escola K',
                    regiao: 'Leste'
                },
                {
                    id: 12,
                    nome: 'Larissa Souza',
                    rota: 'Rota 12',
                    instituicao: 'Escola L',
                    regiao: 'Oeste'
                },
                {
                    id: 13,
                    nome: 'Gabriel Ribeiro',
                    rota: 'Rota 13',
                    instituicao: 'Escola M',
                    regiao: 'Norte'
                },
                {
                    id: 14,
                    nome: 'Sofia Mendes',
                    rota: 'Rota 14',
                    instituicao: 'Escola N',
                    regiao: 'Sul'
                },
                {
                    id: 15,
                    nome: 'Felipe Neves',
                    rota: 'Rota 15',
                    instituicao: 'Escola O',
                    regiao: 'Leste'
                }
            ];

            // Popula a tabela com os dados simulados
            data.forEach(function(aluno) {
                $('#datatables-instituicao tbody').append(`
              <tr>
                <td>${aluno.id}</td>
                <td>${aluno.nome}</td>
                <td class="text-center">${aluno.rota}</td>
                <td class="text-center">${aluno.instituicao}</td>
                <td class="text-center">${aluno.regiao}</td>
                <td class="text-center">
                  <button class="btn btn-sm text-danger btn-icon" title="Apagar"><i class="bx bx-trash"></i></button>
                </td>
              </tr>
            `);
            });

            // Inicializa o DataTable com funcionalidade de pesquisa e ordenação
            $('#datatables-instituicao').DataTable({
                language: {
                    url: "./assets/vendor/libs/datatables/i18n/pt-BR.json"
                },
                lengthMenu: [5, 10, 15, 20]
            });
        });
    </script>





</body>

</html>