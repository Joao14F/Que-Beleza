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

<body>
    <div class="container">
        <form class="form" action="../back/cadastroProf_back.php" method="post">
            <span class="subtitle"> Informações sobre locais de atuaçao</span>
            <div class="row">
                <div class="form-group">
                    <!--   <label class="areas" for="InputEmail1">itulo o seu especialização</label> -->
                    <input type="esp" class="form-control" id="Especializacao" placeholder="Especialização" name="Título">
                </div>
                <div class="form-group">
                    <!--  <label class="areas" for="InputEmail1">itulo sua experiencia</label> -->
                    <input type="exp" class="form-control" id="Experiencia" placeholder="Experiência" name="Título">
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Cidades onde atua</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Sombrio</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Torres</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Balneário Gaivota</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Início funcionamento</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Início intervalo</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Fim intervalo</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Fim expediente</label>
                    <input type="time" id="horario" name="horario" class="form-control">
                </div>
            </div>
            <!--   <div class="row">
               <input type="submit" value="Enviar" name="submit" class="btn"> 
            </div> -->
            <button> Enviar </button>
        </form>

    </div>
</body>

</html>