<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/contaProf.css">

</head>

<body class="d-flex">
    <?php
    require('cabecalho.php');
    ?>
    <div class="container" style="padding-top: 7rem;">
        <div class="row salao">
            <img src="imagens/unhas.jpeg" alt="imagnes ficticea" class="col-12 col-sm-12 col-md-12 gx-0">
        </div>
        <div>
            <div class="stars row">
                <div class="col-1">
                    <i class="fas fa-star "></i>
                </div>
                <div class="col-1">
                    <i class="fas fa-star "></i>
                </div>
                <div class="col-1">
                    <i class="fas fa-star "></i>
                </div>
                <div class="col-1">
                    <i class="fas fa-star "></i>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="col-12 col-sm-12 col-md-12">Nome: <h1 class="aa">Develin</h1></p>
        </div>
        <div class="row">
            <p class="col-12 col-sm-12 col-md-12">Endereço: <h1 class="aa">Sombrio</h1></p>
        </div>
        <div class="row">
            <p class="col-12 col-sm-12 col-md-12">Horário de funcionamento: <h1 class="aa"> 08-16h </h1></p>
        </div>
        <div class="row">
            <p class="col-12 col-sm-12 col-md-12">Intervalo: <h1 class="aa"> 12-13h </h1></p>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-10">
                <a href=""><button class="w-100 rounded">Editar Informações</button></a>
            </div>
            <div class="col-10 gy-2" style="padding-bottom: 8rem;">
                <a href="cardapio.php"><button class="w-100 rounded">Adicionar serviços</button></a>
            </div>
        </div>
        <div class="row">
            <?php
            require('rodape2.php');
            ?>
        </div>
    </div>
</body>

</html>