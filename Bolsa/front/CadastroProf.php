<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadastroProf.css">
</head>

<body>
    <div class="container" style="padding: 20px">
        <form action="../back/cadastroProf_back.php" method="post" style="padding: 20px">
            <h1> Cadastro Profissional </h2>
                <h2> Informações Pessoais </h2>
                <div class="row">
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira o seu nome</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira o seu Sobrenome</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Sobrenome" name="sobrenome">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                        <input type="email" class="form-control" id="Nome" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira o seu telefone</label>
                        <input type="name" class="form-control" id="Nome" placeholder="telefone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira a sua senha</label>
                        <input type="password" class="form-control" id="Nome" placeholder="senha" name="senha">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">escolha seu modo de trabalho</label>
                        <select name="remoto">
                           <option value="1">Trabalho em um salão</option>
                           <option value="2">Trabalho em casa</option>
                        </select>
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn">
                </div>
        </form>

    </div>
</body>

</html>
