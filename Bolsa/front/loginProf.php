<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <form action="../back/loginProf_back.php" method="POST">
            <div class="row">
                <label for="email"></label>
                <input type="text" name="email" placeholder="email">
            </div>
            <div class="row">
                <label for="senha"></label>
                <input type="password" name="senha" placeholder="senha">
            </div>
            <div class="row">
                <input type="submit" value="Enviar" name="submit">
            </div>
        </form>
    </div>
    
</body>
</html>