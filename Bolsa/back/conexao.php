<?php

//faz a conexão com o banco de dados

$conn = mysqli_connect('monorail.proxy.rlwy.net:55855', 'root', 'BEHbe-536c1ghgh-DhG1e5C-1ECEE61G', 'railway');
if(mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados";
 exit();
}

?>