<?php
include_once('conexao.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'lib/vendor/autoload.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['telefone']) && !empty($_POST['endereco'])) {
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        $token = bin2hex(random_bytes(16));
        $sql = "INSERT INTO user (nome, sobrenome, email, telefone, senha, endereco, token, verifica) VALUES (?, ?, ?, ?, ?, ?, ?, 0)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssss', $nome, $sobrenome, $email, $telefone, $senha, $endereco, $token);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
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
                $mail->addAddress($email, $nome);

                $mail->isHTML(true);
                $mail->Subject = 'Verificação de E-mail';
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
                            background-color: #6a66a3; 
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
                            background-color: #b3cbb9; 
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
                            <h1 style='color: #fff;'>Verificação de E-mail</h1>
                        </div>
                        <div class='content'>
                            <p style='color: #6a66a3;'>Prezado(a) $nome,</p>
                            <p>Agradecemos a sua solicitação de cadastramento em nosso site!</p>
                            <p>Para que possamos liberar o seu cadastro em nosso sistema, solicitamos a confirmação do e-mail clicando no link abaixo:</p>
                            <a class='button' href='http://localhost:8080/Que-Beleza/Bolsa/back/verificar.php?token=$token'>Clique aqui</a>
                            <p>Esta mensagem foi enviada a você pela equipe do projeto QueBeleza.</p>
                            <p>Você está recebendo porque está cadastrado no banco de dados do projeto QueBeleza.</p>
                        </div>
                    </div>
                </body>
                </html>
                ";

                $mail->send();

                echo '<script type="text/javascript">'; 
                echo 'alert("Cadastro concluído com sucesso! Um e-mail de verificação foi enviado para você.");'; 
                echo 'window.location.href = "../front/loginUsu.php";';
                echo '</script>';
            } catch (Exception $e) {
                echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
            }
        } else {
            echo "Erro ao cadastrar o usuário. Por favor, tente novamente.";
        }
    } else {
        echo '<script type="text/javascript">';       
        echo 'alert("Esse e-mail já foi cadastrado!");'; 
        echo 'window.location.href = "../front/cadastroUsu.php";';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Informe todos os campos!");'; 
    echo 'window.location.href = "../front/cadastroUsu.php";';
    echo '</script>';
}
?>
