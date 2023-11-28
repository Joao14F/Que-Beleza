<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profissional</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e5e5e5;
        }

        .container {
            height: 100dvh;
            display: flexbox;
        }


        p {
            background-color: #B3CBB9;
            border-radius: 16px;
            color: black;
        }

        p:hover {
            background-color: #6a66a38e;
        }

        a {
            text-decoration: none;
        }

        .botoes {
            align-self: center;

        }
    </style>
</head>

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
</body>

</html>