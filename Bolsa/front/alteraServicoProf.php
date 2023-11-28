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
    <style>
        body {
            background-image: url('css/tela.png');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100dvh;
        }
    </style>
</head>

<body>
    <div class="container" style="padding: 20px">
        <form action="../back/alteraServicoProf_back.php?id=<?php echo $id; ?>" method="POST">
            <div class="row text-center">
                <h1> Atualizar <?php echo $nome; ?> </h2>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Nome</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" value="<?php echo $nome; ?>" name="nome" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Descrição</label>
                    <input type="text" class="form-control" id="Nome" placeholder="Descrição" value="<?php echo $descricao; ?>" name="descricao">
                </div>
            </div>
            <div class="row text-center mt-3">
                <h5>
                    Duração média em minutos
                </h5>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Mínima </label>
                    <input type="number" class="form-control" id="Nome" value="<?php echo $duracaoMin; ?>" name="duracaoMin">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Máxima </label>
                    <input type="number" class="form-control" id="Nome" value="<?php echo $duracaoMax; ?>" name="duracaoMax">
                </div>
            </div>
            <div class="row text-center mt-3">
                <h5>
                    Valor médio
                </h5>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Mínimo </label>
                    <input type="number" class="form-control" id="Nome" value="<?php echo $valorMin; ?>" name="valorMin">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Máxima </label>
                    <input type="number" class="form-control" id="Nome" value="<?php echo $valorMax; ?>" name="valorMax">
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-9">
                    <input type="submit" value="Enviar" name="submit" class="btn btn-primary w-100">
                </div>
            </div>

        </form>

    </div>
</body>

</html>