<?php
include_once('conexao.php');

if(isset($_POST['submit']))
{
    
   if(isset($_POST['senha']) == true){
    $senha = $_POST['senha'];
    $salao = $_POST['salao'];
   }else{
    $endereco = $_POST['endereco'];
    $area = $_POST['area'];
   }

   session_start();
            
   $email = $_SESSION['email'];

    $sql = "SELECT * FROM profissional WHERE email = '$email'"; 
    $res = mysqli_query($conn, $sql); 
    while ($dado = mysqli_fetch_array($res)) { 
        $id = $dado['id'];
    }

    if(isset($_POST['senha']) == true){

        $sql = "SELECT * FROM salao WHERE id = '$salao'"; 
        $res = mysqli_query($conn, $sql); 
        while ($dado = mysqli_fetch_array($res)) { 
            $senhaBD = $dado['senha'];
        }
        if($senha === $senhaBD){
        $sql = "INSERT INTO localizacao (id_prof, id_salao) VALUES ('$id', '$salao')";
        mysqli_query($conn, $sql);

        $sql = "SELECT * FROM localizacao WHERE id_prof = '$id'"; 
        $res = mysqli_query($conn, $sql); 
        while ($dado = mysqli_fetch_array($res)) { 
            $idLoc = $dado['id'];

        $sqlUpdate = "UPDATE profissional SET loc='$idLoc' WHERE id=$id";
        mysqli_query($conn, $sqlUpdate);

        echo '<script type="text/javascript">'; 
        echo 'alert("concluido!");'; 
        echo 'window.location.href = "../front/areaTrab.php";';
        echo '</script>';
        }
        }else{
            echo '<script type="text/javascript">'; 
                echo 'alert("Senha de salão incorreta!");'; 
                echo 'window.location.href = "../front/CadastroLoc.php?id=1";';
                echo '</script>';
        }
    }else{
        $sql = "INSERT INTO localizacao (endereco, area, id_prof) VALUES ('$endereco', '$area', '$id')";
        mysqli_query($conn, $sql);

        $sql = "SELECT * FROM localizacao WHERE id_prof = '$id'"; 
        $res = mysqli_query($conn, $sql); 
        while ($dado = mysqli_fetch_array($res)) { 
            $idLoc = $dado['id'];

        $sqlUpdate = "UPDATE profissional SET loc='$idLoc' WHERE id=$id";
        mysqli_query($conn, $sqlUpdate);

        echo '<script type="text/javascript">'; 
        echo 'alert("concluido!");'; 
        echo 'window.location.href = "../front/areaTrab.php";';
        echo '</script>';
    }
        if(mysqli_affected_rows($conn) > 0) {

                echo '<script type="text/javascript">'; 
                echo 'alert("Cadastro concluido com sucesso!");'; 
                echo 'window.location.href = "../front/areaTrab.php";';
                echo '</script>';
        }
        mysqli_close($conn);   
 }
}
 

?>