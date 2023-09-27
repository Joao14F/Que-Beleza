<?php

include('conexao.php');

$id = $_GET['id'];

if (isset($_POST['submit'])){

    //$imagem = $_POST['imagem'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valorMax = $_POST['valorMax'];
    $valorMin = $_POST['valorMin'];
    $duracaoMax = $_POST['duracaoMax'];
    $duracaoMin = $_POST['duracaoMin'];

    $imagem = "bnf678d77bfn6d.jpg";

    $valor = $valorMin . "-" . $valorMax;
    $duracao = $duracaoMin . "-" . $duracaoMax;

    $sqlUpdate = "UPDATE servicoProf SET nome='$nome', descricao='$descricao' , valor='$valor' , duracao='$duracao' , imagem='$imagem' WHERE id=$id";
    mysqli_query($conn, $sqlUpdate);
    if (mysqli_affected_rows($conn) > 0) {
         echo '<script type="text/javascript">'; 
 echo 'alert("Servico alterado com sucesso!!");'; 
 echo 'window.location.href = "../front/cadServicos.php";';
 echo '</script>';
    }else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Nada foi Alterado");'; 
        echo 'window.location.href = "../front/cadServicos.php";';
        echo '</script>';
    }

}
?>