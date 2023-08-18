<?php // include_once('../back/verificaProf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .scrolling-list {
            overflow-x: auto;
            white-space: nowrap;
        }

        .scrolling-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .scrolling-list li {
            display: inline-block;
            padding: 8px;
            background-color: #f0f0f0;
            margin: 5px;
        }
    </style>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const scrollingList = document.querySelector('.scrolling-list');
            const listItems = document.querySelectorAll('.scrolling-list li');
            let totalWidth = 0;

            listItems.forEach((item) => {
                totalWidth += item.offsetWidth;
            });

            scrollingList.style.width = totalWidth + 'px';
        });
    </script>
</head>

<body>
    <div class="container">
        <!-- Area de trabalho refere-se a tela de gerenciamento do profissional, a ideia é q apartir daqui ele vai conseguir 
    gerenciar os serviços, preços, tempo de duração, avaliação e graficos com seus resultados -->
    <div class="row">
            <button><a href="ServicosGen.php">Gerenciar serviços</a></button>
        </div>

        <footer>
            <div class=" row">
                <div class="col-1 col-sm-1"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"></button>
                <div class="col-2 col-sm-2"></div>
                <button class="col-2 col-sm-2"><a href="index.php">Voltar</a></button>
                <div class="col-1 col-sm-1"></div>
            </div>
        </footer>
    </div>
</body>

</html>