<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadProf.css">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <form class="form" action="../back/cadastroProf_back.php" method="post" style="padding: 20px">
            <h1 class="title"> Cadastro Profissional </h1>
                <h2 class="subtitle"> Informações Pessoais </h2>
                <div class="row">
                    <div class="form-group text-center">
                        <label class="areas text-center" for="InputEmail1">Insira seu nome:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas text-center" for="InputEmail1">Insira seu sobrenome:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Sobrenome" name="sobrenome">
                    </div>
                    <div class="form-group text-center">
                        <label class="areas text-center" for="InputEmail1">Insira seu E-mail:</label>
                        <input type="email" class="form-control" id="Nome" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group text-center">
                        <label class="areas text-center" for="InputEmail1">Insira seu telefone:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Telefone" name="telefone">
                    </div>
                    <div class="form-group text-center">
                        <label class="areas text-center" for="InputEmail1">Insira sua senha:</label>
                        <input type="password" class="form-control" id="Nome" placeholder="Senha" name="senha">
                    </div>
                        <label class="areas text-center" for="InputEmail1" style="font-weight: bold; padding: 20px;">Escolha seu modo de trabalho:</label>
                        <div class="select">
                            <select>
                                <option hidden value=""></option>
                                <option value="1">Trabalho em salão</option>
                                <option value="2">Trabalho em casa</option>
                            </select>
                        </div>

                    </div>
                    <div class="enviar text-center">
                        <button for="enviar">Enviar </button>
                    </div>
                </div>
        </form>
    
    </div>
</body>

</html>