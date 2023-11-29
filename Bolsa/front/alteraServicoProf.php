<?php
/*
include('../back/conexao.php');

    $imagem = $_POST['imagem'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $duracao = $_POST['duracao'];
    $id = $_POST['id'];

    $valorMin = $valor[0] . $valor[1];
    $valorMax = $valor[3] . $valor[4];

    $duracaoMin = $duracao[0] . $duracao[1];
    $duracaoMax = $duracao[3] . $duracao[4];
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Serviço</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadProf.css">
    <style>
        body {
            background-image: url('css/tela.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100dvh;
        }
    </style>
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <form class="form" action="./cadastraServicoProf.php?id=<?php echo $idServ; ?>" method="post" style="padding: 20px">
            <h1 class="title"> Cadastrar serviço em <?php echo $nomeServ; ?> </h1>
            <div class="row">
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Nome:</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome" required>
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Descrição:</label>
                    <input type="text" class="form-control" id="Nome" placeholder="Descrição" name="descricao">
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Variaçoes:</label>
                    <input type="text" class="form-control" id="Nome" placeholder="Rápido, social, blindada" name="varia">
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Imagem referente ao serviço:</label>
                    <input type="file" class="form-control">
                </div>
                <label class="areas text-center" for="InputEmail1" style="font-weight: bold; padding: 20px;">Duração media em minutos: </label>
                <div class="form-group text-center">
                    <label class="areas text-center" for="InputEmail1">Mínima: </label>
                    <input type="number" class="form-control" placeholder="45 min" id="Nome" name="duracaoMin">

                    <label class="areas text-center" for="InputEmail1">Máxima: </label>
                    <input type="number" class="form-control" placeholder="120 min" id="Nome" name="duracaoMax">
                </div>
                <label class="areas text-center" for="InputEmail1" style="font-weight: bold; padding: 20px;">Valor medio: </label>
                <div class="form-group text-center">
                    <label class="areas text-center" for="InputEmail1">Mínimo: </label>
                    <input type="number" class="form-control" placeholder="R$150,00" id="Nome" name="valorMin">

                    <label class="areas text-center" for="InputEmail1">Máximo: </label>
                    <input type="number" class="form-control" placeholder="R$390,00" id="Nome" name="valorMax">
                </div>
                <div class="enviar text-center">
                    <button for="enviar">Enviar </button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>