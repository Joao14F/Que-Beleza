<?php

//faz a conexão com o banco de dados

$conn = mysqli_connect('containers-us-west-63.railway.app:7621', 'root', '5bQ8dq1Znj20QcdpXq2h', 'railway');
if(mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados";
    exit();
}

?> 