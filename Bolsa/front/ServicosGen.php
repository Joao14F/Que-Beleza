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
          <div class="col-10 col-sm-12 col-md-10">
            <dt>Nome do serviço 1</dt>
            <dd>Descrição do serviço 1</dd>
          </div>
          <button class="btn btn-primary service-button">Editar</button>
          <button class="btn btn-primary service-button">Excluir</button>
        </dl>
        <dl>
          <div class="col-10 col-sm-12 col-md-10">
            <dt>Nome do serviço 2</dt>
            <dd>Descrição do serviço 3</dd>
          </div>
          <button class="btn btn-primary service-button">Editar</button>
          <button class="btn btn-primary service-button">Excluir</button>
        </dl>

      </div>
      <form action="../back/cadastroServico_back.php" method="POST">
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
    </div>
</body>

</html>