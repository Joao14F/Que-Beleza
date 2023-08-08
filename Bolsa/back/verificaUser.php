<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        header('location: ../front/login.php');
    }
    
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    include_once('conexao.php');    

    $sql = "SELECT * FROM usuário WHERE email_user = '$email'";
    
    $res = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

    $reg = mysqli_fetch_array($res);

if(($reg['email_user'] !== $email) && ($reg['senha_user'] !== $senha)){
    header('location: ../front/login.php');
}
?> 