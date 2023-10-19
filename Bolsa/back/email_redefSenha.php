<?php
include_once('conexao.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'lib/vendor/autoload.php';

if (isset($_POST['submit']) && !empty($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $token = bin2hex(random_bytes(16));
        $updateTokenSQL = "UPDATE user SET token = ? WHERE email = ?";
        $updateTokenStmt = $conn->prepare($updateTokenSQL);
        $updateTokenStmt->bind_param('ss', $token, $email);
        $updateTokenStmt->execute();

        if ($updateTokenStmt->affected_rows > 0) {
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->CharSet = "UTF-8";
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Port = 587;
                $mail->Username = 'flipifc.projeto@gmail.com';
                $mail->Password = 'acmd pvor lxsd depj';

                $mail->setFrom('flipifc.projeto@gmail.com', 'QueBeleza');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Redefinição de Senha';
                $mail->Body = "
                <!DOCTYPE html>
                <html>
                <head>
                <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f9f8f8;
                    text-align: center;
                }
                .container {
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    margin: 0 auto;
                    max-width: 600px;
                }
                .header {
                    background-color: #6a66a3; /* Lilás */
                    color: #fff;
                    padding: 10px;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
                .content {
                    padding: 20px;
                }
                .button {
                    display: inline-block;
                    background-color: #b3cbb9; /* Verde Pastel */
                    color: #fff;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                }
            </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h1>Redefinição de Senha</h1>
                        </div>
                        <div class='content'>
                            <p>Prezado(a),</p>
                            <p>Recebemos uma solicitação para redefinir sua senha em nosso site.</p>
                            <p>Para redefinir sua senha, clique no link abaixo:</p>
                            <a class='button' href='http://localhost:8080/Que-Beleza/Bolsa/front/redefinicao_senha.php?token=$token'>Clique aqui</a>
                            <p>Esta mensagem foi enviada a você pela equipe do projeto QueBeleza.</p>
                            <p>Você está recebendo porque está cadastrado no banco de dados do projeto QueBeleza.</p>
                        </div>
                    </div>
                </body>
                </html>
                ";
                $mail->send();

                echo '<script type="text/javascript">';
                echo 'alert("Um email com as instruções para redefinir sua senha foi enviado para você.");';
                echo 'window.location.href = "../front/loginUsu.php";';
                echo '</script>';
            } catch (Exception $e) {
                echo "Erro ao enviar o email: {$mail->ErrorInfo}";
            }
        } else {
            echo "Erro ao atualizar o token no banco de dados. Por favor, tente novamente.";
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Esse email não está cadastrado!");';
        echo 'window.location.href = "../front/redefinirSenha.php";';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Informe o email para redefinir a senha.");';
    echo 'window.location.href = "../front/redefinirSenha.php";';
    echo '</script>';
}
?>
