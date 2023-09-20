<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Profissional</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/CadastroProf.css">
</head>

<body>
    <div class="container" style="padding: 20px">
        <form action="../back/cadastroSalao_back.php" method="post" style="padding: 20px">
            <h1> Cadastro Profissional </h2>
                <h2> Informações Pessoais </h2>
                <div class="row">
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Nome do salão</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">CNPJ</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="cnpj">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Rua</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="rua">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Cidade</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="cidade">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">CEP</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="cep">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Bairro</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="bairro">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">número</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="numero">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Link Maps</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Email do salão</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Numero para contato</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome">
                    </div>


                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira a sua senha para o salão</label>
                        <input type="password" class="form-control" id="Nome" placeholder="senha" name="senha">
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn">
                </div>
        </form>
    </div>
</body>
</html>