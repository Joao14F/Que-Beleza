<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadProf.css">
</head>

<body>
    <div class="container">
        <form  class="form" action="../back/cadastroUsu_back.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira seu nome</label>
                    <input type="name" name="nome" class="form-control" id="Nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira seu Sobrenome</label>
                    <input type="name" name="sobrenome" class="form-control" id="Nome" placeholder="Sobrenome" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira seu E-mail</label>
                    <input type="email" name="email" class="form-control" id="Nome" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira seu telefone</label>
                    <input type="name" name="telefone" class="form-control" id="Nome" placeholder="Telefone" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira sua senha</label>
                    <input type="password" name="senha" class="form-control" id="Nome" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Insira o seu endereço</label>
                    <input type="name" name="endereco" class="form-control" id="Nome" placeholder="cidade e bairro" required>
                </div>
                <div class="enviar text-center">
                <button for="enviar">Enviar </button>
            </div>
        </form>

    </div>

</body>

</html>