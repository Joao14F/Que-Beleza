<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Servico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <?php
require('cabecalho.php');
?>
        <div class="row salao">
            <img src="../front/fotos/maq.jpg" alt="imagens ficticias" class="col-12 col-sm-12 col-md-6 gx-0">
        </div>
        <h3 class="aaa">Maquiagem </h3>
    </div>
    <div class="row mt-3 justify-content-center ">
        <div id="alta" class=" col-3 quest align-items-center">
            <input type="radio"  id="altA" checked>
            <button for="altA"> Express </button>
        </div>
        <div id="altb" class="col-3 quest align-items-center">
            <input type="radio" id="altB">
            <button for="altB"> Social </button>
        </div>
        <div id="altc" class=" col-3 quest align-items-center">
            <input type="radio"  id="altC">
            <button for="altC"> Blindada </button>
        </div>
    </div>
    <div>
        <h1 class="ooo"> Descrição </h1>
        <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptatibus natus repellendus, molestias alias architecto ipsam veniam eveniet praesentium minus fugiat impedit distinctio non error ab eligendi vitae optio possimus.</h2>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="enviar text-center">
            <input type="radio" value="A" name="alternativa" id="altA" checked>
            <button for="enviar">Marcar horário</button>
        </div>
        <?php
    require('rodape2.php');
    ?>
    </div>

   

    <script>
        function selectRadio(divId) {
            document.getElementById(divId).querySelector('input[type="radio"]').checked = true;
        }
        const questDivs = document.querySelectorAll('.quest');
        questDivs.forEach(div => {
            div.addEventListener('click', () => {
                questDivs.forEach(div => div.classList.remove('selected'));
                div.classList.add('selected');
                selectRadio(div.id);
            });
        });
    </script>


</body>

</html>