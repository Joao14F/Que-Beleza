<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loginProf.css">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title" style="padding: 10px">Login</h1>
                <h2 class="subtitle"> Bem-vindo Profissional! </h2>
            </div>
        </div>
        <form class="form" action="../back/loginProf_back.php" method="POST" style="padding: 20px">
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                    <input type="email" class="form-control" id="Nome" placeholder="E-mail" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o titulo o seu senha</label>
                    <input type="password" class="form-control" id="Nome" placeholder="Senha" name="senha" required>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="enviar text-center">
                    <button for="enviar">Enviar </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>