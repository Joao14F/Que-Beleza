<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços de Cadastro</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/cardapio.css">
    <style>

    </style>
</head>
<?php
require('cabecalho.php');
?>

<body class="d-flex align-items-center">
    <div class="container" style="padding-top: 18rem;">
        <div class="bloco">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <h4>Mãos</h4>
                </div>
            </div>
            <dl>
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-10 ">
                        <dl>
                            <dt>Nome do serviço 1</dt>
                            <dd>Descrição do serviço 1</dd>
                        </dl>
                    </div>
                    <div class="col-1 gx-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </button>
                    </div>
            </dl>
            <div class="row justify-content-center">
                <button class="add">
                    <a href="cadastraServicoProf.php">Adicionar serviço</a>
                </button>
            </div>
        </div>

        <div class="bloco">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <h4>Pés</h4>
                </div>
            </div>
            <dl>
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-10">
                        <dt>Nome do serviço 1</dt>
                        <dd>Descrição do serviço 1</dd>
                    </div>
                    <div class="col-1 gx-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-10">
                        <dt>Nome do serviço 2</dt>
                        <dd>Descrição do serviço 2</dd>
                    </div>
                    <div class="col-1 gx-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </button>
                    </div>
            </dl>
            <div class="row justify-content-center">
                <button class="add">
                    <a href="CadastraServicoProf.php">Adicionar serviço</a>
                </button>
            </div>
        </div>
        <form class="form text-center" action="" method="post" style="padding-bottom: 8rem;">
            <div class="select col-8 col-sm-8 col-md-8 text-center" style="margin: 0 auto;">
                <select>
                    <option hidden value="1">Cadastrar serviços</option>
                    <option value="1">Mãos</option>
                    <option value="2">Pés</option>
                    <option value="3">Cabelo</option>
                </select>
            </div>

        </form>
    </div>
    <footer><?php
            require('rodape2.php');
            ?></footer>

</body>

</html>