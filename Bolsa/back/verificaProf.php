<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        header('location: ../front/loginProf.php');
    }
    
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];

    include_once('conexao.php');    

    $sql = "SELECT * FROM profissional WHERE email = '$email'";
    
    $res = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

    $reg = mysqli_fetch_array($res);

if(($reg['email'] !== $email) && ($reg['senha'] !== $senha)){
    header('location: ../front/loginProf.php');
}
elseif(("adm" == $email) && ("adm" == $senha)){
    header('location: ../front/ServicosGen.php');
}
?> 