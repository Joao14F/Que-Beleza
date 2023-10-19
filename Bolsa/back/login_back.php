<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        echo '<script type="text/javascript">'; 
        echo 'alert("Usuário ou senha incorretos");'; 
        echo 'window.location.href = "../front/loginUsu.php";';
        echo '</script>';
    } else {
        $row = $result->fetch_assoc();
        $userId = $row['id'];
        $status = $row['verifica'];

        if ($status == 0) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Seu e-mail não foi verificado. Verifique seu e-mail antes de fazer login.");'; 
            echo 'window.location.href = "../front/loginUsu.php";';
            echo '</script>';
        } else {
            $_SESSION['id'] = $userId;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location: ../front/conta.php'); 
        }
    }
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Informe todos os campos!");'; 
    echo 'window.location.href = "../front/loginUsu.php";';
    echo '</script>';
}
?>