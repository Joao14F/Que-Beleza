<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loginUsu.css">
</head>
<body>
    <div class="container">
        <form action="../back/email_redefSenha.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                    <input type="email" class="form-control" id="Email" placeholder="E-mail" name="email" required>
                </div>
                <div class="row">
                    <input type="submit" value="Enviar" name="submit" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
