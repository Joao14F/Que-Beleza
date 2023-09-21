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
    <form action="../back/cadastroServico_back.php" method="POST">
      <div class="row">
        <h3>Adicionar serviço</h3>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
          <div class="form-group">
            <input type="text" name="nome" placeholder="Nome do serviço" class="form-control">
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="text" name="descrição" placeholder="Descrição" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="text" name="valor" placeholder="Valor" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="text" name="duracao" placeholder="Duração" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="file" name="duracao" placeholder="Imagem referencia" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="form-group">
            <input type="submit" value="Cadastrar" id="button" name="submit" class="col-12 col-sm-12 col-md-12 btn btn-primary">
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>