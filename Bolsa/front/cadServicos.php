<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços de Cadastro</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cadServicos.css">
    <style>

    </style>
</head>

<body>
    <div class="container">

        <div class="row justify-content-center mx-1">
            <div class="visu col-12 col-sm-12 col-md-12 ">
                <h3>Serviços já cadastrados</h3>
                <dl>
                    <?php 
        include('../back/conexao.php');
        session_start();

          $id = $_SESSION['id'];

          $sql1 = "SELECT * FROM servico"; 
          $res1 = mysqli_query($conn, $sql1); 
          while ($serv = mysqli_fetch_array($res1)) { 
            $idServ = $serv['id'];
            $nomeServ = $serv['nome'];

            $sqlServ = "SELECT * FROM servicoProf WHERE id_Prof = '$id' AND id_servico = '$idServ'"; 
            $resultServ = mysqli_query($conn, $sqlServ);

            
        ?>
                    <h1> <?php echo $nomeServ ; ?></h1>
                    <?php

          $sql = "SELECT * FROM servicoProf WHERE id_Prof = '$id' AND id_servico = '$idServ'"; 
          $res = mysqli_query($conn, $sql); 
          while ($dado = mysqli_fetch_array($res)) { ?>

                    <div class="col-10 col-sm-12 col-md-10">
                        <dt><?php echo $dado['nome']; ?></dt>
                        <dt><?php echo $dado['descricao']; ?></dt>
                        <dt><?php echo $dado['valor']; ?></dt>
                        <dt><?php echo $dado['duracao']; ?></dt>
                        <dt><?php echo $dado['imagem']; ?></dt>
                    </div>
                    <form action="cadServicos.php" method="POST">
                        <input type="hidden" id='id' name="id" value="<?php echo $dado['id']; ?>">
                        <input type="submit" value="Excluir" id="button" name="excluir"
                            class="col-1 col-sm-1 col-md-1 btn btn-primary">
                    </form>
                    <form action="./alteraServicoProf.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="hidden" id='id' name="id" value="<?php echo $dado['id']; ?>">
                                    <input type="hidden" id='id' name="nome" value="<?php echo $dado['nome']; ?>">
                                    <input type="hidden" id='id' name="descricao" value="<?php echo $dado['descricao']; ?>">
                                    <input type="hidden" id='id' name="valor" value="<?php echo $dado['valor']; ?>">
                                    <input type="hidden" id='id' name="duracao" value="<?php echo $dado['duracao']; ?>">
                                    <input type="hidden" id='id' name="imagem" value="<?php echo $dado['imagem']; ?>">
                                    <input type="submit" value="Alterar Serviço" id="button" name="submit"
                                        class="col-12 col-sm-12 col-md-12 btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                <?php 
                } 
                ?>
                    <a href="cadastraServicoProf.php?id=<?php echo $idServ?>" class="btn btn-primary col-sm-12">Adicionar Serviço</a>
                <?php
                 };
                ?>
                <?php
    if(isset($_POST['excluir'])){

        $idex = $_POST['id'];
        $sqlExcluir = " DELETE FROM servicoProf WHERE id = $idex";
        mysqli_query($conn, $sqlExcluir);
        if(mysqli_affected_rows($conn) > 0){
        
        header('location: cadServicos.php');
              
    }}
    ?>

                </dl>
            </div>
        </div>
</body>

</html>

