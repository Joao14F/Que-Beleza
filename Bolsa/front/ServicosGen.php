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
    <form action="../back/cadastroServico_back.php" method="POST">
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
            <input type="text" name="descrição" placeholder="Descrição do serviço" class="form-control">
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

    <div class="row">
      <p class="col-12 col-sm-12 col-md-12"></p>
    </div>

    <aside>
    <dl>
    <dt>Nome do serviço 1</dt>
    <dd>Descrição do serviço 1</dd>
    
    <dt>Nome do serviço 2</dt>
    <dd>Descrição do serviço 2</dd>
    
  </dl>
    </aside>

    <footer>
      <div class="row">
        <div class="col-1 col-sm-1"></div>
        <button class="col-2 col-sm-2"><a href="">....</a></button>
        <div class="col-2 col-sm-2"></div>
        <button class="col-2 col-sm-2"><a href="principal.php">Principal</a></button>
        <div class="col-2 col-sm-2"></div>
        <button class="col-2 col-sm-2"><a href="conta.php">Conta</a></button>
        <div class="col-1 col-sm-1"></div>
      </div>
    </footer>
  </div>
</body>

</html>
