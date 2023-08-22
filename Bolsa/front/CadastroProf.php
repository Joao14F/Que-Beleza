<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #d8bfac;
        }

        form{
            background-color: aliceblue;
            border-radius: 10px;
            padding: 0px 10px;
        }

        input[type="submit"] {
           border-radius: 25px;
           border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="../back/cadastroProf_back.php" method="post">            
            <div class="row">
            <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu nome</label>
                  <input type="name" class="form-control" id="Nome" placeholder="Nome" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu Sobrenome</label>
                  <input type="name" class="form-control" id="Nome" placeholder="Sobrenome" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                  <input type="name" class="form-control" id="Nome" placeholder="E-mail" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu telefone</label>
                  <input type="name" class="form-control" id="Nome" placeholder="telefone" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu senha</label>
                  <input type="name" class="form-control" id="Nome" placeholder="senha" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu endereço</label>
                  <input type="name" class="form-control" id="Nome" placeholder="endereço" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o nome do salão</label>
                  <input type="name" class="form-control" id="Nome" placeholder="nome do salão" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu especialização</label>
                  <input type="name" class="form-control" id="Nome" placeholder="especialização" name="Título">
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo sua experiencia</label>
                  <input type="name" class="form-control" id="Nome" placeholder="experiencia" name="Título">
               </div>                
                </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit" class="btn">
            </div>
        </form>
    </div>

</body>

</html>