<?php
include('../back/conexao.php');
session_start();

$id = $_SESSION['id'];
$idServ = $_GET['id'];
$imagem = "bnf678d77bfn6d.jpg";

$sql1 = "SELECT * FROM servico WHERE id = '$idServ'"; 
$res1 = mysqli_query($conn, $sql1); 
    $serv = mysqli_fetch_array($res1);
        $idServ = $serv['id'];
        $nomeServ = $serv['nome'];


if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $duracao1 = $_POST['duracaoMax'];
    $valor1 = $_POST['valorMax'];
    $duracao2 = $_POST['duracaoMin'];
    $valor2 = $_POST['valorMin'];	  	  

    $valor = $valor2 ."-". $valor1;
    $duracao = $duracao2 ."-". $duracao1;

    $sql = "SELECT * FROM servicoProf WHERE nome = '$nome' AND id_servico = '$idServ' AND id_prof = '$id'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result) < 1)
    {

        $sql = "INSERT INTO servicoProf (nome, descricao, valor, duracao, imagem, id_servico, id_prof) 
                VALUES ('$nome', '$descricao', '$valor', '$duracao', '$imagem', '$idServ', '$id')";
        
        mysqli_query($conn, $sql);

        header('location: cadServicos.php');
}
echo '<script type="text/javascript">'; 
echo 'alert("Nome ja cadastrado");'; 
echo 'window.location.href = "./cadServicos.php";';
echo '</script>'; 
}

?>

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
        <form action="./cadastraServicoProf.php?id=<?php echo $idServ; ?>" method="post" style="padding: 20px">
            <h1> Cadastrar serviço em <?php echo $nomeServ; ?> </h2>
                <div class="row">
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Nome</label>
                        <input type="name" class="form-control" id="Nome" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">Descrição</label>
                        <input type="text" class="form-control" id="Nome" placeholder="Descrição" name="descricao">
                    </div>
                    <label class="areas" for="InputEmail1">Duração media minutos </label>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">minima </label>
                        <input type="number" class="form-control" id="Nome" name="duracaoMin">

                        <label class="areas" for="InputEmail1">maxima </label>
                        <input type="number" class="form-control" id="Nome" name="duracaoMax">
                    </div>
                    <label class="areas" for="InputEmail1">Valor medio </label>
                    <div class="form-group">
                        <label class="areas" for="InputEmail1">minima </label>
                        <input type="number" class="form-control" id="Nome" name="valorMin">

                        <label class="areas" for="InputEmail1">maxima </label>
                        <input type="number" class="form-control" id="Nome" name="valorMax">
                    </div>
                    <input type="submit" value="Enviar" name="submit" class="btn">
                </div>
        </form>

    </div>
</body>
</html>



