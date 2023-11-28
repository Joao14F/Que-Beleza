<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadProf.css">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <form class="form" action="../back/cadastroProf_back.php" method="post">
            <span class="title"> Informações sobre locais de atuação</span>
            <div class="row">
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1" style="font-weight: bold; padding: 20px;">Cidades onde atua</label>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Sombrio</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Torres</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox2">Balneário Gaivota</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Início funcionamento</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Início intervalo</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Fim intervalo</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Fim expediente</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
            </div>
            <div class="enviar text-center">
                <button for="enviar">Enviar </button>
            </div>
        </form>

    </div>
</body>

</html>