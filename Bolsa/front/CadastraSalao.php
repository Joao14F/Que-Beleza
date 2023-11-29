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
        <form class="form" action="../back/cadastroSalao_back.php" method="post" style="padding: 20px">
            <h1 class="title">Cadastro Salão</h1>
                <h2 class="subtitle">Informações Pessoais</h2>
                <div class="row">
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Nome do salão:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">CNPJ:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="CNPJ" name="cnpj" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Rua:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Rua" name="rua" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Cidade:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Cidade" name="cidade" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">CEP:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="CEP" name="cep" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Bairro:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Bairro" name="bairro" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Número:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Número" name="numero" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Link Maps:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Link" name="maps" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">E-mail do salão:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Número para contato:</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Contato" name="contato" required>
                    </div>


                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira uma senha para o salão:</label>
                        <input type="password" class="form-control" id="Nome" placeholder="Senha" name="senha" required>
                    </div>
                    <div class="enviar text-center">
                        <button for="enviar">Enviar </button>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>