<?php
include_once('../back/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['novaSenha'], $_POST['confirmarSenha'], $_POST['token'])) {
        $novaSenha = $_POST['novaSenha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        $token = $_POST['token'];

        if ($novaSenha === $confirmarSenha) {
            $sql = "UPDATE user SET senha = ? WHERE token = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss', $novaSenha, $token);

            if ($stmt->execute()) {
                echo '<script type="text/javascript">';
                echo 'alert("Senha redefinida com sucesso. Você pode fazer login com a nova senha.");';
                echo 'window.location.href = "../front/loginUsu.php";';
                echo '</script>';
                exit;
            } else {
                echo "Erro ao atualizar a senha. Por favor, tente novamente.";
            }
        } else {
            echo "As senhas não coincidem. Por favor, verifique.";
        }
    } else {
        echo "Campos obrigatórios não preenchidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loginUsu.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="form-group">
                <form method="post" action="">
                    <label class="areas" for="novaSenha">Nova Senha</label>
                    <input type="password" class="form-control" id="novaSenha" name="novaSenha" required>
                </div>
                <div class="form-group">
                    <label class="areas" for="confirmarSenha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
                </div>
                <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
                <div class="row">
                    <input type="submit" value="Redefinir Senha" class="btn">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
