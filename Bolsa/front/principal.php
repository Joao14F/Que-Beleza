<?php  
include_once('../back/verificaProf.php'); 
include('../back/conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <script>
    window.addEventListener('DOMContentLoaded', () => {
        const scrollingList = document.querySelector('.scrolling-list');
        const listItems = document.querySelectorAll('.scrolling-list li');
        let totalWidth = 0;

        listItems.forEach((item) => {
            totalWidth += item.offsetWidth;
        });

        scrollingList.style.width = totalWidth + 'px';
    });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1"></div>
            <input type="search" class="col-10 col-sm-10 col-md-10" style="margin: 2px;">
            <div class="col-1 col-sm-1 col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 scrolling-list">
                <ul>
                    <?php
// Consulta SQL para listar os serviços ordenados por relevância e depois por nome
$sql = "SELECT * FROM servico ORDER BY relevancia DESC, nome ASC";

// Execute a consulta SQL usando sua conexão com o banco de dados
$res = mysqli_query($conn, $sql);

// Variável para armazenar o nome atual
$nomeAtual = "";

while ($dado = mysqli_fetch_array($res)) {
    // Verifica se o nome atual é diferente do nome atual na linha
    if ($dado['nome'] != $nomeAtual) {
        // Exibe um cabeçalho com o nome
        
        $nomeAtual = $dado['nome'];
    }
    // Exibe o serviço com base na relevância
    echo '<li><a href="" alt="serviço">' . $dado['nome'] . '</a></li>';
}
?>



                </ul>
            </div>
        </div>
        <div class="row">
            <ul>

                <?php
// Consulta SQL para listar os profissionais e suas informações de localização
$sql = "SELECT p.nome, p.sobrenome, p.email, p.senha, p.telefone, l.endereco, l.area 
        FROM profissional AS p
        JOIN localizacao AS l ON p.id = l.id_prof
        ORDER BY p.nome ASC";

// Execute a consulta SQL usando sua conexão com o banco de dados
$res = mysqli_query($conn, $sql);

while ($dado = mysqli_fetch_array($res)) {
    echo "<li class='col-12'><a href=''>" . $dado['nome'] . " " . $dado['sobrenome'] . "</a></li>";
    echo "<p>Email: " . $dado['email'] . "</p>";
    echo "<p>Senha: " . $dado['senha'] . "</p>";
    echo "<p>Telefone: " . $dado['telefone'] . "</p>";
    echo "<p>Endereço: " . $dado['endereco'] . "</p>";
    echo "<p>Área: " . $dado['area'] . "</p>";
    // Você pode adicionar mais informações ou personalizar a exibição conforme necessário
}
?>


            </ul>
        </div>
        <footer>
            <div class=" row">
                <div class="col-1 col-sm-1"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-1 col-sm-1"></div>
            </div>
        </footer>
    </div>
</body>

</html>