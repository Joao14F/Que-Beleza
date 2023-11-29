<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profissional</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

        :root {
            --orange: #6A66A3;
            --black: #130f40;
            --light-color: #666;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, 0.23);
            --border: .2rem solid rgb(0, 0, 0.1);
            --outline: .1rem solid rgb(0, 0, 0.1);
            --outline-hover: .2rem solid var(--black);
        }

        body {
            font-family: 'Poppins';
            background-color: #e5e5e5;
            height: 100dvh;

        }

        .container {
            display: flexbox;
        }


        p {
            background-color: #B3CBB9;
            border-radius: 16px;
            color: black;
            font-size: 0.8rem;
            width: 100px;
            box-shadow: var(--box-shadow);
            height: 30px;
            align-items: center;
            align-self: center;
            align-content: center;
            padding: 0.3rem;
        }

        p:hover {
            background-color: #6a66a38e;
        }

        a {
            text-decoration: none;
            margin-top: -10px;
            
        }

        .botoes {
            margin: 5px;
            align-self: center;
        }

        img {
            padding-top: 7rem;
        }
    </style>
</head>
<?php
require('cabecalho.php');
?>

<body class="d-flex">
    <div class="container">
        <div class="row salao">
            <img src="imagens/unhas.jpeg" alt="imagnes ficticea" class="col-12 col-sm-12 col-md-12 gx-0 w-100">
        </div>
        <div class="botoes d-flexbox align-self-center mt-4">
            <div class="row justify-content-center m-2">
                <div class="col-6 justify-content-center">
                    <a href="servicos.php">
                        <p class="text-center">Unhas</p>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center m-2">
                <div class="col-6 justify-content-center">
                    <a href="servicos.php">
                        <p class="text-center">Cabelo</p>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center m-2">
                <div class="col-6 justify-content-center">
                    <a href="servicos.php">
                        <p class="text-center">Maquiagem</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
require('rodape2.php');
?>
</body>

</html>