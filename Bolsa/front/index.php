<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title> Tela de início </title>
</head>

<body class="d-flex align-items-center">
    <div class="container">
    <?php
        require('cabecalho.php');
        ?>
        <div class="borda">
            <div class="row justify-content-center text-center">
                <div class="col-7">
                    <h1>Bem vindo (a)!</h1>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-7">
                    <h4>Escolha sua forma de acesso</h4>
                </div>
            </div>
            <div class="row justify-content-center text-center m-4">
                <div class="col-7">
                    <button class="btn btn-success w-100">
                        Login
                    </button>
                </div>
            </div>
            <div class="row justify-content-center text-center m-4">
                <div class="col-7">
                    <button class="btn btn-success w-100">
                        Cadastro
                    </button>
                </div>
            </div>
            <div class="row justify-content-center text-center m-2">
                <div class="col-7">
                    <input type="radio" name="radio" checked="" class="b1">
                    <span class="botao">Cliente</span>
                </div>
            </div>
            <div class="row justify-content-center text-center m-2">
                <div class="col-7">
                    <input type="radio" name="radio" checked="" class="b1">
                    <span class="botao">Profissional</span>
                </div>
            </div>

            <div class="row justify-content-center text-center m-3">
                <div class="col-7">
                    <a href="#">
                        <button class="btn btn-primary w-100">
                            Continuar
                        </button>
                    </a>
                </div>
            </div>
            </form>
            <?php
        require('rodape2.php');
        ?>
        </div>
    </div>
</body>

</html>