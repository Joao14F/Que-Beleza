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
    </style>
</head>

<body>
    <div class="container">
        <div class="row salao">
            <img src="imagens/unhas.jpeg" alt="imagens ficticias" class="col-12 col-sm-12 col-md-12 gx-0">
        </div>
        <div class="row mt-3">
            <div class="col-8">
                <figcaption class="figure-caption">Promoçoes</figcaption>
            </div>
            <div class="image-container d-flex justify-content-start align-items-center">
                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 1" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 1 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 2" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 2 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 3" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 3 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>
                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 4" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 4 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 5" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 5 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 6" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 6 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 7" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 7 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 8" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 8 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 9" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 9 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 10" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 10 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 11" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 11 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 12" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 12 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 13" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 13 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 14" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 14 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>

                <div class="image-caption col-5">
                    <img src="imagens/unhas.jpeg" alt="Image 15" class="img-fluid">
                    <p class="text-limit">Legenda da Imagem 15 que é um texto de exemplo para testar o limite</p>
                    <figcaption class="figure-caption preço">Valor</figcaption>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <col-8>
                <select name="" id="" class="form-select">
                    <option value="">
                        <p class="text-responsive">Melhor avaliaçao</p>
                    </option>
                    <option value="">
                        <p class="text-responsive">Menor preço</p>
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
    </div>
    </div>
</body>

</html>