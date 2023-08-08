<?php
include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['telefone'])&& !empty($_POST['endereço'])){
    
    //cadastrar
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereço'];


    $sql = "SELECT * FROM usuário WHERE email_user = '$email'";


    $result = $conn->query($sql);
    if(mysqli_num_rows($result) < 1)
    {

        $sql = "INSERT INTO usuário (nome_user, sobrenome_user, email_user, telefone_user, senha_user, endereço_user) 
                             VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$endereco')";
        

        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0) {

            echo '<script type="text/javascript">'; 
            echo 'alert("Cadastro concluido com sucesso!");'; 
            echo 'window.location.href = "../front/login.php";';
            echo '</script>';
        
        }
        mysqli_close($conn);         
    }
    else
    {
        mysqli_close($conn);
        
               
        echo '<script type="text/javascript">';       
        echo 'alert("Esse email já foi cadastrado!");'; 
        echo 'window.location.href = "../front/cadastroUsu.php";';
        echo '</script>';
    }
 }
 else   
 {
     //não cadastra
     mysqli_close($conn);    
          
     echo '<script type="text/javascript">'; 
     echo 'alert("Informe todos os campos!");'; 
     echo 'window.location.href = "../front/cadastroUsu.php";';
     echo '</script>';
 }

?>