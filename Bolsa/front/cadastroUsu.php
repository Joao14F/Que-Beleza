<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadastroUsu.css">
</head>

<body>
    <div class="container">
        <form action="../back/cadastroUsu_back.php" method="POST">
        <div class="row">
            <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu nome</label>
                  <input type="name" name="nome" class="form-control" id="Nome" placeholder="Nome" required>
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu Sobrenome</label>
                  <input type="name" name="sobrenome" class="form-control" id="Nome" placeholder="Sobrenome" required>
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu E-mail</label>
                  <input type="email" name="email" class="form-control" id="Nome" placeholder="E-mail" required>
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o titulo o seu telefone</label>
                  <input type="name" name="telefone" class="form-control" id="Nome" placeholder="telefone" required>
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu senha</label>
                  <input type="password" name="senha" class="form-control" id="Nome" placeholder="senha" required>
               </div>
               <div class="form-group">
                  <label class="areas" for="InputEmail1">Insira o seu endereço</label>
                  <input type="name" name="endereco" class="form-control" id="Nome" placeholder="cidade" required>                
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Rua</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="rua" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Cidade</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="cidade" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">CEP</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="cep" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">Bairro</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="bairro" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="InputEmail1">número da casa</label>
                    <input type="name" class="form-control" id="Nome" placeholder="Nome" name="numero" required>
                </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit" class="btn">
            </div>
        </form>
            
    </div>

</body>

</html>