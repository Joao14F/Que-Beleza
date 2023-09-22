<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Usuário</title>
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/cadastroUsu.css">
</head>

<body>
   <div class="container" style="padding: 20px">
      <form class="form" action="../back/cadastroProf_back.php" method="post" style="padding: 20px">
         <span class="title"> Login de Usuário </span>
         <span class="subtitle"> Bem vindo (a) ! </span>
         <div class="row">
            <div class="form-group" style="margin-left: 10px;">
               <!--  <label class="areas" for="InputEmail1"></label> -->
               <input type="email" class="form-control" id="Email" placeholder="E-mail" name="Título">
            </div>
            <div class="form-group" style="margin-left: 10px;">
               <!--  <label class="areas" for="InputEmail1"></label>-->
               <input type="senha" class="form-control" id="Senha" placeholder="Senha" name="Título">
            </div>
         </div>
               <button> Enviar </button>
            </form>

         </div>

</body>
