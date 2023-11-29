<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loginUsu.css">
</head>
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Logue-se</h3>
            </div>
        </div>
        <form action="../back/login_back.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                    <input type="email" class="form-control" id="Nome" placeholder="E-mail" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o titulo o seu senha</label>
                    <input type="password" class="form-control" id="Nome" placeholder="senha" name="senha" required>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit" class="btn">
            </div>
        </form>
    </div>
</body>

</html>