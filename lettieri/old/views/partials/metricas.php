<div class="col-md-12 col-xxl-12 mb-4 order-0 order-xxl-4">
  <div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title mb-0">
        <h5 class="m-0 me-2">Secretária Municipal de Educação</h5>
        <small class="text-muted">Dados relacionados a Totalidade da Pasta</small>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="nav-align-top">
        <ul class="nav nav-tabs nav-fill tabs-line" role="tablist">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
              data-bs-target="#navs-justified-alunos" aria-controls="navs-justified-alunos"
              aria-selected="false" tabindex="-1">Aunos</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
              data-bs-target="#navs-justified-link-Colaborador"
              aria-controls="navs-justified-link-Colaborador" aria-selected="false"
              tabindex="-1">Colaborador</button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
              data-bs-target="#navs-justified-link-ativos" aria-controls="navs-justified-link-ativos"
              aria-selected="true">Ativos</button>
          </li>
        </ul>
        <div class="tab-content shadow-none border-0 border-top pb-0">
          <?php include_once('views/sections/metricas_alunos.php'); ?>
          <?php include_once('views/sections/metricas_colaborador.php'); ?>
          <?php include_once('views/sections/metricas_ativos.php'); ?>
        </div>
      </div>
    </div>
  </div>
</div>