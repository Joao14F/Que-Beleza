<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro Usuário</title>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/cadastroUsu.css">
</head>

<body>
   <div class="container" style="padding: 20px">
      <form class="form" action="../back/cadastroProf_back.php" method="post" style="padding: 20px">
         <span class="title"> Cadastro de Usuário </span>
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
               <button> Enviar </button>
            </form>

         </div>

</body>
