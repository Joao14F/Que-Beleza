<?php

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadastroProf.css">
</head>

<body>
    <div class="container" style="padding: 20px">
        <form action="../back/alteraServicoProf_back.php?id=<?php echo $id; ?>" method="POST" style="padding: 20px">
            <h1> Atualizar <?php echo $nome; ?> </h2>
                <div class="row">
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Nome</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" value="<?php echo $nome; ?>" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Descrição</label>
                        <input type="text" class="form-control" id="Nome" placeholder="Descrição" value="<?php echo $descricao; ?>" name="descricao">
                    </div>
                    <label class="areas" for="InputEmail1">Duração media minutos </label>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">minima </label>
                        <input type="number" class="form-control" id="Nome" value="<?php echo $duracaoMin; ?>" name="duracaoMin">

                        <label class="areas" for="InputEmail1">maxima </label>
                        <input type="number" class="form-control" id="Nome" value="<?php echo $duracaoMax; ?>" name="duracaoMax">
                    </div>
                    <label class="areas" for="InputEmail1">Valor medio </label>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">minima </label>
                        <input type="number" class="form-control" id="Nome" value="<?php echo $valorMin; ?>" name="valorMin">

                        <label class="areas" for="InputEmail1">maxima </label>
                        <input type="number" class="form-control" id="Nome" value="<?php echo $valorMax; ?>" name="valorMax">
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn">
                </div>
        </form>

    </div>
</body>
</html>
