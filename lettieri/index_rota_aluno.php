<?php include('views/partials/header.php');?>

        <!-- CONTENT -->

        <div class="container mt-2">
          <div class="col-xl-12">
            <!-- Sobre o Cidadão -->
            <div class="card mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-xl-6 col-12">
                    <small class="text-muted text-uppercase">Alunos associados a rotas</small><br><br>
                    <small class="text-warning">Dados:<br></small>
                    <span class="text-success me-2">● 450</span> Total de alunos
                    <p class="mb-0 mt-3">Sexo: 
                      <i class="bx bx-female" style="color:#ff328b"></i><span class="me-2">207</span>
                      <i class="bx bx-male text-warning"></i><span class="me-2">243</span>
                      <i class='bx bx-accessibility text-success'></i></i><span class="me-2">54</span></p>
                  </div>
                  <div class="col-12 col-xl-6 text-end">
                    <a href="cad_rota_aluno.php" class="btn btn-warning text-nowrap">
                      <i class="bx bx-user-plus me-1"></i> Adicionar Alunos
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
                    <tbody>
                      <!-- Aqui serão carregados os dados dinamicamente -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/ Sobre o Cidadão -->
          </div>
        </div>
      






        
  


<?php include('views/partials/footer.php');?>
<?php include('views/partials/footer_js.php');?>