
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->

</div>
<!-- / Layout page -->

</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

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


<!-- Pre-Matricula -->
<!-- Include jQuery and Select2 CSS/JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
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
              <button class="btn btn-sm text-primary btn-icon" title="Detalhes"><i class="bx bx-edit"></i></button>
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
      lengthMenu: [10, 20, 30, 50]
    });
  });
</script>




<!-- pre_matricula -->
 <!-- Parte 3: Script JavaScript -->
<script>
  $(document).ready(function() {
    // Inicializa o Select2
    $('.select2').select2({
      placeholder: 'Selecione um nome',
      ajax: {
        url: 'nomes.php', // URL do arquivo PHP que processa a busca
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term // Termo de busca enviado para o servidor
          };
        },
        processResults: function (data) {
          return {
            results: data // Retorna os resultados formatados
          };
        },
        cache: true
      }
    });

    // Evento acionado quando um nome é selecionado
    $('#nomeSelect').on('select2:select', function (e) {
      var data = e.params.data; // Dados do item selecionado
      var container = $(this).closest('.content'); // Encontra o contêiner mais próximo
      container.append('<div class="additional-inputs"></div>'); // Adiciona um contêiner para os inputs adicionais
      
      // Loop para adicionar 10 novos inputs
      for (var i = 1; i <= 10; i++) {
        container.find('.additional-inputs').append(`
          <div class="form-group">
            <label for="input-${i}">Input ${i}</label>
            <input type="text" class="form-control" id="input-${i}">
          </div>
        `);
      }
    });
  });
</script>



</body>

</html>