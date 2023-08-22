<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #d8bfac;
        }

        form{
            background-color: aliceblue;
            border-radius: 10px;
            padding: 0px 10px;
        }

        input[type="submit"] {
           border-radius: 25px;
           border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="../back/login_back.php" method="POST">
        <div class="row">
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                  <input type="name" class="form-control" id="Nome" placeholder="E-mail" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu senha</label>
                  <input type="name" class="form-control" id="Nome" placeholder="senha" name="Título">
               </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit" class="btn">
            </div>
    </div>
        </form>
    </div>
</body>
</html>