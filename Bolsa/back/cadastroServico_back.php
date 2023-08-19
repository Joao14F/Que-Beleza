<?php
include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['nome'])){
    
    //cadastrar
    $nome = $_POST['nome'];

    $sql = "SELECT * FROM servico WHERE nome = '$nome'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result) < 1)
    {

        $sql = "INSERT INTO servico (nome) VALUES ('$nome')";

        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0) {

            header('location: ../front/ServicosGen.php');
        }
        mysqli_close($conn);         
    }
    else
    {
        mysqli_close($conn);
        
               
        echo '<script type="text/javascript">';       
        echo 'alert("Esse serviço já foi cadastrado!");'; 
        echo 'window.location.href = "../front/ServicosGen.php";';
        echo '</script>';
    }
 }
 else   
 {
     //não cadastra
     mysqli_close($conn);    
          
     echo '<script type="text/javascript">'; 
     echo 'alert("Informe todos os campos!");'; 
     echo 'window.location.href = "../front/ServicosGen.php";';
     echo '</script>';
 }

?>