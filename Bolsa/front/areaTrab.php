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
    <div class="container align-items-center justfy-content-center">
        <div class="row m-2">
            <button class="rounded-2"><a href="cadServicos.php" class="btn">Gerenciar serviços</a></button>
        </div>
        <div class="row m-2">
            <button class="rounded-2"><a href="cadServicos.php" class="btn">Ver avaliações</a></button>
        </div>
        <div class="row border-top border-bottom">
            <div class="col-6">
                <p>14:45 até 15:15</p>

            </div>
            <div class="col-6">
                <p>Pintar unhas</p>

            </div>
            <div class="col-6">
                <p>Rua João José de Guimarães, 613, Centro, Sombrio</p>
            </div>
            <div class="col-6">
                <p>Raissa Felisberto ⭐⭐⭐⭐⭐</p>
            </div>
        </div>
        <div class="row border-top border-bottom justify-content-center">
            <div class="col-6">
                <p>14:45 até 15:15</p>
            </div>
            <div class="col-6">
                <p>Pintar unhas</p>
            </div>
            <div class="col-6 align-self-center">
                <p>Raissa Felisberto ⭐⭐⭐⭐⭐</p>
            </div>
        </div>
    </div>
</body>

</html>