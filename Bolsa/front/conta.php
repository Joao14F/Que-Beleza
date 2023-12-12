<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/conta.css">
    <style>


    </style>
</head>

<body>
    <div class="container">
        <?php
        require('cabecalho.php');
        ?>
        <div class="corpo">
            <div class="row">
                <div class="Dados col-12">
                    <h1 class="Nome">Nome</h1>
                    <p>Descrição</p>
                    <p>Acesso</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <button class="btn btn-danger w-100">SAIR</button>
                </div>
            </div>
        </div>
        <?php
        require('rodape2.php');
        ?>
    </div>

</body>

</html>