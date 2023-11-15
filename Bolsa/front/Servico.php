<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Servico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row salao">
            <img src="../front/fotos/maq.jpg" alt="imagens ficticias" class="col-12 col-sm-12 col-md-12 gx-0">
        </div>
        <div class="stars">
            <i class="fas fa-star"> 4,5</i>
            <h3>Maquiagem </h3>
        </div>
        <div id="alta" class="quest">
                        <input type="radio" value="A" name="alternativa" id="altA" checked>
                        <button for="altA"> Express </button>
                    </div>
                    <div id="altb" class="quest">
                        <input type="radio" value="B" name="alternativa" id="altB">
                        <button for="altB"> Social </button>
                    </div>
                    <div id="altc" class="quest">
                        <input type="radio" value="C" name="alternativa" id="altC">
                        <button for="altC"> Blindada </button>
                    </div>
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