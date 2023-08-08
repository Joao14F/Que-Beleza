<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="../back/cadastroProf_back.php" method="post">
            <div class="row">
                <input type="text" name="nome" placeholder="nome">
                <input type="text" name="sobrenome" placeholder="sobrenome">
                <input type="text" name="email" placeholder="email">
                <input type="number" name="telefone" placeholder="telefone">
                <input type="password" name="senha" placeholder="senha">
                <input type="text" name="endereço" placeholder="endereço">
                <input type="text" name="salão" placeholder="nome do salão">
                <input type="text" name="especialização" placeholder="especialização">
                <input type="text" name="experiência" placeholder="experiencia">
            </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit">
            </div>
        </form>
    </div>

</body>

</html>