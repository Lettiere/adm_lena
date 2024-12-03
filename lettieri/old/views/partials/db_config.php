<?php
// Configurações de conexão ao banco de dados
$servername = "193.203.175.85";  
$username = "u690128405_test_ak_1";
$password = "P%O24@Tb&!g$*G4EhpnE8h66#%#61K";
$dbname = "u690128405_test_ak_1";  

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificando se a variável de busca foi enviada via AJAX
if (isset($_POST['search'])) {
    $search = $conn->real_escape_string($_POST['search']);
    
    // Consulta SQL para buscar alunos com base no nome ou CPF, limitando a 10 resultados
    $sql = "SELECT DISTINCT a.nome_completo, c.cpf_numero  
            FROM base_cidadao a
            INNER JOIN educacao_aluno_tb AS b ON a.id = b.cidadao_id
            INNER JOIN base_cidadao_documento AS c ON c.cidadao_id = a.id
            WHERE a.nome_completo LIKE '%$search%' OR c.cpf_numero LIKE '%$search%'
            LIMIT 10";  // Limita a 10 resultados
    
    $result = $conn->query($sql);
    
    // Gerando as opções do select
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['cpf_numero']) . '">' . htmlspecialchars($row['nome_completo']) . ' - ' . htmlspecialchars($row['cpf_numero']) . '</option>';
        }
    } else {
        echo '<option value="" disabled>Nenhum aluno encontrado</option>';
    }
    
    // Fechando a conexão
    $conn->close();
    exit; // Interrompe a execução do script após enviar a resposta AJAX
}
