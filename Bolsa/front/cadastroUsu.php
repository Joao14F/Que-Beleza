<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="../back/cadastroUsu_back.php" method="POST">
            <div class="row">
                <input type="text" name="nome" placeholder="nome">
                <input type="text" name="sobrenome" placeholder="sobrenome">
                <input type="text" name="email" placeholder="email">
                <input type="number" name="telefone" placeholder="telefone">
                <input type="password" name="senha" placeholder="senha">
                <input type="text" name="endereço" placeholder="Cidade, Bairro">
            </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit">
            </div>
        </form>
    </div>

</body>

</html>