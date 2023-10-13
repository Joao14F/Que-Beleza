<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e5e5e5;
        }

        .buttonunhas {
            background-color: #6a66a3;
            color: #fff;
            border: none;
            padding: 5px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 20px;
            margin: 5px;
        }

        .serv {
            filter: grayscale(100%);
            filter: blur(5px);
            filter: opacity(30%);
            border-radius: 20px;
        }

        .input {
            border-radius: 12px;
            border: 1.5px solid lightgrey;
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
        }

        .input:hover {
            border: 2px solid lightgrey;
            box-shadow: 0px 0px 20px -17px;
        }

        .input:active {
            transform: scale(0.95);
        }

        .input:focus {
            border: 2px solid grey;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row salao">
            <img src="imagens/unhas.jpeg" alt="imagnes ficticea" class="col-12 col-sm-12 col-md-12 gx-0">
        </div>
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <button class="buttonunhas">
                    <a href="servicos.php">
                        <img class="serv" src="unhas.jpeg" alt="Imagem" width="200" height="100">
                        <p>Unhas</p>
                    </a>
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <button class="buttonunhas">
                    <a href="servicos.php">
                        <img class="serv" src="unhas.jpeg" alt="Imagem" width="200" height="100">
                        <p>Cabelo</p>
                    </a>
                </button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <button class="buttonunhas">
                    <a href="servicos.php">
                        <img class="serv" src="unhas.jpeg" alt="Imagem" width="200" height="100">
                        <p>Maquiagem</p>
                    </a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>