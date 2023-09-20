<?php
include_once('conexao.php');

if(isset($_POST['submit']))
{
    
    //cadastrar
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $maps = $_POST['maps'];
    $email = $_POST['email'];
    $contato = $_POST['contato'];

        $sql = "SELECT * FROM salao WHERE nome = '$nome'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){ 

        $sql = "INSERT INTO salao (nome, senha, cnpj, rua, cidade, cep, bairro, numero, maps, email, contato) 
                             VALUES ('$nome', '$senha', '$cnpj', '$rua', '$cidade', '$cep', '$bairro', '$numero', '$maps', '$email', '$contato')";
        
        mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0) {
             
        echo '<script type="text/javascript">';       
        echo 'alert("Cadastrado com sucesso!");'; 
        echo 'window.location.href = "../front/Index.php";';
        echo '</script>';
        }
        echo '<script type="text/javascript">';       
        echo 'alert("Erro!");'; 
        echo 'window.location.href = "../front/Index.php";';
        echo '</script>';
        mysqli_close($conn);   

    }else{
        mysqli_close($conn);
 
        echo '<script type="text/javascript">';       
        echo 'alert("Esse nome já foi cadastrado!");'; 
        echo 'window.location.href = "../front/CadastroSalao.php";';
        echo '</script>';
    }
    }else{ 
        mysqli_close($conn);
 
        echo '<script type="text/javascript">';       
        echo 'alert("Dados invalidaos");'; 
        echo 'window.location.href = "../front/CadastroSalao.php";';
        echo '</script>';
    }

?>