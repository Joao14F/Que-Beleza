<?php
include_once('conexao.php');

if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT * FROM user WHERE token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $sql = "UPDATE user SET verifica = 1 WHERE token = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $token);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "E-mail verificado com sucesso. Agora você pode fazer login.";
        } else {
            echo "Erro ao verificar o e-mail. Por favor, entre em contato com o suporte.";
        }
    } else {
        echo "Token inválido ou expirado. Por favor, entre em contato com o suporte.";
    }
} else {
    echo "Token não encontrado. Por favor, entre em contato com o suporte.";
}
?>
