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
            <h1>Cadastro Salao</h2>
                <h2>Informações Pessoai</h2>
                <div class="row">
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Nome do salão</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="nome" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">CNPJ</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="cnpj" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Rua</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="rua" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Cidade</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="cidade" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">CEP</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="cep" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Bairro</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="bairro" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Número</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="numero" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Link Maps</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="maps" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Email do salão</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="email" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="areas" for="InputEmail1">Numero para contato</label>
                        <input type="name" class="form-control" id="Nome" placeholder="" name="contato" required>
                    </div>


                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira uma senha para o salão</label>
                        <input type="password" class="form-control" id="Nome" placeholder="" name="senha" required>
                    </div>
                    <div class="enviar text-center">
                        <button for="enviar">Enviar </button>
                    </div>
                </div>
        </form>
        <?php
        require('rodape.php');
        ?>
    </div>
</body>

</html>