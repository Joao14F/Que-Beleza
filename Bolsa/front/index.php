<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de conta</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #d8bfac;
        }

        form{
            background-color: aliceblue;
            border-radius: 30px;
        }

        button {
            border: none;
            margin: 5px;
            border-radius: 10px;
            color: #6c705e;
            background-color: #6c705e;
        }

        a {
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form>
            <br>
        <div class="row">
            <div class="col-3 col-sm-3 col-md-3"></div>
            <button class="col-3 col-sm-3 col-md-3" id="prof"><a href="">Profissional</a></button>
            <button class="col-3 col-sm-3 col-md-3" id="user"><a href="">Usuário</a></button>
            <div class="col-3 col-sm-3 col-md-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1"></div>
            <button class="col-10 col-sm-10 col-md-10" id="login"><a href="#">Login</a></button>
            <div class="col-1 col-sm-1 col-md-1"></div>
        </div>
        <div class="row">
        <div class="col-1 col-sm-1 col-md-1"></div>
            <button class="col-10 col-sm-10 col-md-10" id="cadastro"><a href="#">Cadastro</a></button>
            <div class="col-1 col-sm-1 col-md-1"></div>
        </div>
        <br>
        <br>
        </form>
    </div>
    <script>
        function setDefaultLoginCadastro() {
            document.getElementById('login').innerHTML = '<a href="login.php">Login</a>';
            document.getElementById('cadastro').innerHTML = '<a href="CadastroUsu.php">Cadastro</a>';
        }

        document.getElementById('prof').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('login').innerHTML = '<a href="loginProf.php">Login</a>';
            document.getElementById('cadastro').innerHTML = '<a href="CadastroProf.php">Cadastro</a>';
        });

        document.getElementById('user').addEventListener('click', function(event) {
            event.preventDefault();
            setDefaultLoginCadastro();
        });
        setDefaultLoginCadastro();
    </script>
</body>
</html>