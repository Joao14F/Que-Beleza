<?php
include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) 
&& !empty($_POST['sobrenome']) && !empty($_POST['telefone']))
{
    
    //cadastrar
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $remoto = $_POST['remoto'];

    $sql = "SELECT * FROM profissional WHERE email = '$email'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) < 1){

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){ 

        $sql = "INSERT INTO profissional (nome, sobrenome, email, telefone, senha, remoto) 
                             VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$remoto')";
        
        mysqli_query($conn, $sql);
        echo "12 "; 
        if(mysqli_affected_rows($conn) > 0) {

            session_start();
            
            $_SESSION['email'] = $email;

            if($remoto == 1){
                echo '<script type="text/javascript">'; 
                echo 'alert("Cadastro concluido com sucesso!");'; 
                echo 'window.location.href = "../front/CadastroLoc.php?id=1";';
                echo '</script>';
            }else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Cadastro concluido com sucesso!");'; 
            echo 'window.location.href = "../front/CadastroLoc.php?id=2";';
            echo '</script>';
            }
        }
        mysqli_close($conn);  
        echo "123 ";  

    }else{
        echo "1234 "; 
        mysqli_close($conn);
 
        echo '<script type="text/javascript">';       
        echo 'alert("Esse email já foi cadastrado em usuário!");'; 
        echo 'window.location.href = "../front/CadastroProf.php";';
        echo '</script>';
        echo "12345 "; 
    }
    }else{
        echo "1234 "; 
        mysqli_close($conn);
 
        echo '<script type="text/javascript">';       
        echo 'alert("Esse email já foi cadastrado!");'; 
        echo 'window.location.href = "../front/CadastroProf.php";';
        echo '</script>';
        echo "12345 "; 
    }
 }else {
    echo "1234567 "; 
     //não cadastra
     mysqli_close($conn);    
     echo "12345678 "; 
     echo '<script type="text/javascript">'; 
     echo 'alert("Insira todos os campos!");'; 
     echo 'window.location.href = "../front/CadastroProf.php";';
     echo '</script>';
     echo "12345678 "; 
 }
 
?>