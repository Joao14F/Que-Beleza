<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços de Cadastro</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/ServicosGen.css">
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
          $sql = "SELECT * FROM servico"; 
          $res = mysqli_query($conn, $sql); 
          while ($dado = mysqli_fetch_array($res)) { ?>
        
          <div class="col-10 col-sm-12 col-md-10">
            <dt><?php echo $dado['nome']; ?></dt>
          </div>
          <form action="ServicosGen.php" method="POST">
          <input type="hidden" id='id' name="id" value="<?php echo $dado['id']; ?>"> <!-- não tira o hidden -->
            <input type="submit" value="Excluir" id="button" name="excluir" class="col-1 col-sm-1 col-md-1 btn btn-primary">
          </form>
          <?php 
            };
            if(isset($_POST['excluir'])){

              $idex = $_POST['id'];

              $sqlExcluir = " DELETE FROM servico WHERE id = $idex";
              mysqli_query($conn, $sqlExcluir);

              header('location: ServicosGen.php');
            }
          ?>
        </dl>
      </div>
      <form action="ServicosGen.php" method="POST">
        <h3>Cadastrar novo serviço</h3>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
              <input type="text" name="nome" placeholder="Nome do serviço" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12">
            <div class="form-group">
              <input type="submit" value="cadastra" id="button" name="cadastra" class="col-12 col-sm-12 col-md-12 btn btn-primary">
            </div>
          </div>
        </div>
      </form>
    </div>
</body>
</html>

<?php 
  if(isset($_POST['cadastra'])) {

    $nome = $_POST['nome'];

    $sql = "SELECT * FROM servico WHERE nome = '$nome'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        $sql = "INSERT INTO servico (nome) VALUES ('$nome')";

        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0) {

            header('location: ServicosGen.php');
        }
    }
    else
    {
        echo '<script type="text/javascript">';       
        echo 'alert("Esse serviço já foi cadastrado!");'; 
        echo 'window.location.href = "ServicosGen.php";';
        echo '</script>';
    }
 }
?>