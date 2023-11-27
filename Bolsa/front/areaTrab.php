<?php //include_once('../back/verificaProf.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/areaTrab.css">

    <style>

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
    <div class="container align-items-center justify-content-center">
        <div class="botoes">
            <div class="row m-2">
                <div class="col-12">
                    <button class="rounded-2 w-100"><a href="cadServicos.php" class="btn">Gerenciar serviços</a></button>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-12">
                    <button class="rounded-2 w-100"><a href="avaliaçoes.php" class="btn">Ver avaliações</a></button>
                </div>
            </div>
        </div>
        <div class="row m-3 bg-success rounded-3">
            <div class="col-12 text-center">
                <p>14:45</p>

            </div>
            <div class="col-12 text-center">
                <p>Pintar unhas</p>

            </div>
            <div class="col-12 text-center">
                <p>Rua João José de Guimarães, 613, Centro, Sombrio</p>
            </div>
            <div class="col-12 text-center">
                <p>Raissa Felisberto ⭐⭐⭐⭐⭐</p>
            </div>
        </div>
        <div class="row m-3 bg-success rounded-3 justify-content-center">
            <div class="col-12 text-center">
                <p>14:45</p>
            </div>
            <div class="col-12 text-center">
                <p>Pintar unhas</p>
            </div>
            <div class="col-12 text-center">
                <p>Raissa Felisberto ⭐⭐⭐⭐⭐</p>
            </div>
        </div>
    </div>
</body>

</html>