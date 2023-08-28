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
   <div class="container" style="padding: 20px">
      <form class="form" action="../back/cadastroProf_back.php" method="post" style="padding: 20px">
         <span class="title"> Cadastro Profissional </span>
         <span class="subtitle"> Informações Pessoais </span>
         <div class="row">
            <div class="form-group" style="margin-left: 10px;">
              <!--  <label class="areas" for="InputEmail1"></label> -->
               <input type="name" class="form-control" id="Nome" placeholder="Nome" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!-- <label class="areas" for="InputEmail1"></label> -->
               <input type="sobrenome" class="form-control" id="Sobrenome" placeholder="Sobrenome" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!--  <label class="areas" for="InputEmail1"></label> -->
               <input type="email" class="form-control" id="Email" placeholder="E-mail" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!--   <label class="areas" for="InputEmail1"></label> -->
               <input type="telefone" class="form-control" id="Telefone" placeholder="Telefone" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!--  <label class="areas" for="InputEmail1"></label>-->
               <input type="senha" class="form-control" id="Senha" placeholder="Senha" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!--  <label class="areas" for="InputEmail1"></label> -->
               <input type="end" class="form-control" id="Endereco" placeholder=" Endereço" name="Título">
            </div>
         </div>
         <div class="container">
            <form class="form" action="../back/cadastroProf_back.php" method="post">
               <span class="subtitle"> Informações sobre o Estabelecimento</span>
               <div class="row">
                  <div class="form-group" style="margin-top: 15px;">
                     <!--   <label class="areas" for="InputEmail1">Insira o titulo o nome do salão</label> -->
                     <input type="salao" class="form-control" id="NomeSalao" placeholder="Nome do salão" name="Título">
                  </div>
                  <div class="form-group">
                     <!--   <label class="areas" for="InputEmail1">itulo o seu especialização</label> -->
                     <input type="esp" class="form-control" id="Especializacao" placeholder="Especialização" name="Título">
                  </div>
                  <div class="form-group">
                     <!--  <label class="areas" for="InputEmail1">itulo sua experiencia</label> -->
                     <input type="exp" class="form-control" id="Experiencia" placeholder="Experiência" name="Título">
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