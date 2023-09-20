<?php

//faz a conexão com o banco de dados

$conn = mysqli_connect('containers-us-west-65.railway.app:6526', 'root', 'CI9jaTITUzbNBp6usYfF', 'railway');
if(mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados";
    exit();
}

?> 

