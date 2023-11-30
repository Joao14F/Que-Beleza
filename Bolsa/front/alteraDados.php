<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Horários</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadProf.css">
</head>

<body class="d-flex align-items-center">
    <div class="container">
        <form class="form" action="../back/cadastroProf_back.php" method="post">
            <span class="title">Novos Horários</span>
            <div class="row">
                <div class="form-group text-center">
                    <label class="areas" for="InputEmail1">Início expediente</label>
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