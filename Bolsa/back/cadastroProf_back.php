<?php
include_once('conexao.php');

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) 
&& !empty($_POST['sobrenome']) && !empty($_POST['telefone']) && !empty($_POST['endereço']) && !empty($_POST['salão'])
&& !empty($_POST['especialização']) && !empty($_POST['experiência']))
{
    
    //cadastrar
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereço'];
    $salao = $_POST['salão'];
    $especializacao = $_POST['especialização'];
    $experiencia = $_POST['experiência'];


    $sql = "SELECT * FROM profissional WHERE email = '$email'";
    $result = $conn->query($sql);
   

    if(mysqli_num_rows($result) < 1){

        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){

        

        $sql = "INSERT INTO profissional (nome, sobrenome, email, telefone, senha, endereco, salao, especializacao, experiencia) 
                             VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$endereco', '$salao', '$especializacao', '$experiencia')";
        

        mysqli_query($conn, $sql);
        echo "12 "; 
        if(mysqli_affected_rows($conn) > 0) {

            echo '<script type="text/javascript">'; 
            echo 'alert("Cadastro concluido com sucesso!");'; 
            echo 'window.location.href = "../front/loginProf.php";';
            echo '</script>';
        
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
     echo 'alert("Esse email já foi cadastrado!");'; 
     echo 'window.location.href = "../front/CadastroProf.php";';
     echo '</script>';
     echo "12345678 "; 
 }
 
?>