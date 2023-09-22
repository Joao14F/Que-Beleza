<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que Beleza</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <div class="container">
        <div class="bola">
        </div>


        <div class="bola2">

            <div class="card">
                <br>
                <h1> Bem vindo (a)! </h1>
                <br>
                <br>
                <div class="checkbox-wrapper-35" style="margin-left: 85px; padding-bottom: 40px">
                    <input value="private" name="switch" id="switch" type="checkbox" class="switch">
                    <label for="switch">
                        <span class="switch-x-text"> Sou </span>
                        <span class="switch-x-toggletext">
                            <span class="switch-x-unchecked"><span class="switch-x-hiddenlabel">Unchecked: </span>Cliente</span>
                            <span class="switch-x-checked"><span class="switch-x-hiddenlabel">Checked: </span>Profissional</span>
                        </span>
                    </label>
                </div>

                <button class="cta" id="login">
                    <span class="hover-underline-animation"> <a id="cadU" href="loginUsu.php" target="_self"
                    style="text-decoration: none; color: #00135C;;">Login</a>  </span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                    </svg>
                </button>
                <br>
                <button class="cta" id="cadastro">
                    <span class="hover-underline-animation">  <a id="cadU" href="cadastroUsu.php" target="_self"
                    style="text-decoration: none; color: #00135C;;">Cadastro</a>  </span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                    </svg>
                </button>
            </div>
        </div>
        <script>
            function setDefaultLoginCadastro() {
                document.getElementById('login').innerHTML = '<a href="login.php">Login</a>';
                document.getElementById('cadastro').innerHTML = '<a href="CadastroUsu.php">Cadastro</a>';
            }

            document.getElementById('prof').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('login').innerHTML = '<a href="loginProf.php">Login</a>';
                document.getElementById('cadastro').innerHTML = '<a href="CadastroProf.php">Cadastro</a>';
            });

            document.getElementById('user').addEventListener('click', function(event) {
                event.preventDefault();
                setDefaultLoginCadastro();
            });
            setDefaultLoginCadastro();
        </script>
</body>

</html>