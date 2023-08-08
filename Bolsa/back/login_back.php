<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa o banco
        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuário WHERE email_user = '$email' and senha_user = '$senha'";
        $result = $conn->query($sql);

       if(mysqli_num_rows($result) < 1)
       {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        echo '<script type="text/javascript">'; 
        echo 'alert("Usuário ou senha incorreto");'; 
        echo 'window.location.href = "../front/login.php";';
        echo '</script>';
            
       }
       else
       {

        $sql1="SELECT * FROM usuário WHERE email_user = '$email'";
        
        $sql2 = "SELECT id_user FROM usuário WHERE email_user = '$email'";
        $result2 = $conn->query($sql2);
        $row = $result2->fetch_assoc();

        $_SESSION['id'] = $row['id_user'];      
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
           
        header('location: ../front/principal.php');
                
            
       }
    }
    else
    {
        //não acessa   
        echo '<script type="text/javascript">'; 
        echo 'alert("Informe todos os campos!");'; 
        echo 'window.location.href = "../front/login.php";';
        echo '</script>'; 
    }

?>