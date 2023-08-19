<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços cadastro</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="../back/cadastroServico_back.php" method="POST">
            <div class="row">
                <input type="text" name="nome" placeholder="nome">
            </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit">
            </div>
        </form>

        <table class="table ">
        <thead>
          <tr>
            <th scope="col-sm-1">Serviços cadastrados</th>
          </tr>
        </thead>

        <tbody>

          <?php
            include('../back/conexao.php');
            
            /**/$sql = "SELECT * FROM servico";
            $res = mysqli_query($conn, $sql);
            while ($dado = mysqli_fetch_array($res)){
          ?>

          <tr>          
            <td>-<?php echo $dado['nome'] ?></td>
          </tr>

          <?php }; ?>

        </tbody>
      </table>

        <footer>
            <div class=" row">
                <div class="col-1 col-sm-1"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"><a href="areaTrab.php">Voltar</a></button>
                <div class="col-1 col-sm-1"></div>
            </div>
        </footer>
    </div>

</body>

</html>