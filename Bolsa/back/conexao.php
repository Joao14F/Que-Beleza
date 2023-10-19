<?php

//faz a conexão com o banco de dados

$conn = mysqli_connect('localhost', 'root', '', 'bolsa');
if(mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados";
    exit();
}

?> 

