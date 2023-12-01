<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilp.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title> Tela de início </title>
</head>

<body>
    <div class="container">
        <?php 
        include_once "cabecalho.php" 
        ?>
        <form class="plan-chooser">
            <div class="form">
                <span class="title">Bem vindo (a)! </span>
                <p class="desc"> Escolha sua forma de acesso .</p>
            </div>
            <div class="plan-option">
                <input value="cliente" id="cliente" name="cliente" type="radio">
                <label for="cliente" class="ooo">
                    <div class="plan-info">
                        <span class="plan-cost">Login</span>
                        <span class="plan-name"></span>
                    </div>
                </label>
            </div>
            <div class="plan-option">
                <input value="prof" id="prof" name="prof" type="radio">
                <label for="prof" class="ooo">
                    <div class="plan-info">
                        <span class="plan-cost">Cadastro</span>
                        <span class="plan-name"></span>
                    </div>
                </label>
                <div class="container">
                    <form class="f2">
                        <label class="aaa">
                            <input type="radio" name="radio" checked="" class="b1">
                            <span class="botao">Cliente</span>
                        </label>
                        <label class="aaa">
                            <input type="radio" name="radio" class="b1">
                            <span class="botao">Profissional</span>
                        </label>
                    </form>
                </div>
                </label>
            </div>

            <a href="#" title="" class="choose-btn"> Continuar </a>

        </form>
    </div>
</body>

</html>