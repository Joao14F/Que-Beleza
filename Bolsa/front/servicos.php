<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
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

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins';
            background-color: #e5e5e5;
            padding-bottom: 8rem;
        }

        p {
            font-family: 'Poppins';
            font-size: 0.8rem;
        }

        figcaption {
            font-family: 'Poppins';
            font-size: 0.8rem;
        }

        .figure-caption {
            font-weight: bold;
            font-size: 1rem;
            padding: 5px;
            color: #6a66a3;
        }

        .figure-caption-preço {
            color: #6a66a3;
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

        .image-container {
            overflow-x: auto;
            white-space: nowrap;
        }

        .image-caption {
            display: inline-block;
            margin-right: 10px;
            text-align: center;
        }

        .image-caption img {
            margin-right: 1rem;
            border-radius: 0.8rem;
        }

        .text-limit {
            max-width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            margin: 0px;
        }

        a img {
            border-radius: 8px;
        }

        select {
            font-family: 'Poppins';
            font-size: 0.8rem;
            margin-top: 1.6rem;
        }

        .footer {
            background-color: #b3cbb9;
            align-items: center;
            align-content: center;
            align-self: center;
            box-shadow: var(--box-shadow);
        }

        .footer .icons {
            border-radius: .5rem;
            color: var(--black);
            font-size: 1.4rem;
            text-align: center;
            align-items: center;
            align-self: center;
            align-content: center;
        }

        .footer .icons:hover {
            background-color: var(--orange);
            color: #e5e5e5;
        }

        .header {
            background-color: #b3cbb9;
            box-shadow: var(--box-shadow);

        }
        a {
            color: var(--orange);
            
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        require('cabecalho.php');
        ?>
        <div class="row salao">
            <img src="imagens/unhas.jpeg" alt="imagens ficticias" class="col-12 col-sm-12 col-md-12 gx-0">
        </div>

        <div class="row justify-content-center">
            <col-8>
                <select name="" id="" class="form-select">
                    <option value="">
                        <p class="text-responsive">Melhor avaliaçao</p>
                    </option>
                    <option value="">
                        <p class="text-responsive">Menorpreço</p>
                    </option>
                    <option value="">
                        <p class="text-responsive">Maior preço</p>
                    </option>
                </select>
            </col-8>

        </div>
        <div class="mt-3 bg-white rounded-2 p-2 m-1">
            <div class="row justify-content-end">
                <div class="col-5">
                    <p style="margin-bottom: 3px; font-size: 16px">Nome serviço</p>
                    <p style="margin-bottom: 3px;">VALOR</p>
                </div>
                <div class="col-7 d-flex align-items-center">
                    <a href="Servico.php">
                        <img src="imagens/unhas.jpeg" alt="Image 3" class="img-fluid">
                    </a>
                </div>
                <div class="col-7">
                    <p style="margin-bottom: 3px;" class="text-center">⭐⭐⭐⭐⭐</p>
                </div>
            </div>
        </div>
        <?php
        require('rodape2.php');
        ?>
    </div>


</body>

</html>