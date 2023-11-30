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
        <form action="../back/cadastroLoc_back.php" method="post" style="padding: 20px">
            <h1> Cadastro Profissional </h2>
                <h2> Informações Pessoais </h2>
                <div class="row">
                    <?php 
                        $idR = $_GET['id'];
                        if($idR == 1){
                    ?>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">escolha seu salão</label>
                        <select name="salao">
                            <?php include('../back/conexao.php');
                            $sql = "SELECT * FROM salao"; 
                            $res = mysqli_query($conn, $sql); 
                            while ($dado = mysqli_fetch_array($res)) { ?>
                            <option value="<?php echo $dado['id']?>"><?php echo $dado['nome']?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira a senha do salão</label>
                        <input type="password" class="form-control" id="Nome" name="senha" required>
                    </div>
                    <?php 
                        }else{
                    ?>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira o seu endereco</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Rua tal Avenida tal CEP tal" name="endereco" required>
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Insira a sua cidade de atuação</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Sombrio e Gaviota" name="area" required>
                    </div>
               <?php 
                   }
               ?>
                    <input type="submit" value="Enviar" name="submit" class="btn btn-primary">
                </div>
        </form>
    </div>
</body>

</html>