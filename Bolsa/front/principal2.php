<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tela de início </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e5e5e5;
        }

        header {
            background-color: #b3cbb9;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            background-color: #6a66a3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 50px;
        }

        .buttonunhas {
            background-color: #6a66a3;
            color: #fff;
            border: none;
            padding: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
            border-radius: 20px;
            margin: 5px;

        }

        .serv {
            filter: grayscale(100%);
            filter: blur(5px);
            filter: opacity(30%);
            border-radius: 20px;
            /* Altere o valor do ângulo para ajustar a cor */

        }

        .pagina {
            background-color: transparent;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 50px;
            transition: 0.5s;
        }

        .pagina:hover {
            background-color: #55785E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 50px;
        }


        .footer {
            background-color: #b3cbb9;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .input {
            width: 50%;
            max-width: 220px;
            height: 20px;
            padding: 12px;
            border-radius: 12px;
            border: 1.5px solid lightgrey;
            outline: none;
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            box-shadow: 0px 0px 20px -18px;
        }

        .input:hover {
            border: 2px solid lightgrey;
            box-shadow: 0px 0px 20px -17px;
        }

        .input:active {
            transform: scale(0.95);
        }

        .input:focus {
            border: 2px solid grey;
        }

        p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Quê beleza!</h1>
    </header>

    <nav>
        <input class="input" name="text" type="text" placeholder="Pesquise serviços..."> <br>
        <br>
        <button class="buttonunhas">
            <img class="serv" src="unhas.jpeg" alt="Imagem" width="200" height="100">
            <p> Unhas </p>
        </button>
        <button class="buttonunhas">
            <img class="serv" src="cabelo.jpeg" alt="Imagem" width="200" height="100">
            <p> Cabelo </p>
        </button>
        <button class="buttonunhas">
            <img class="serv" src="maquiagem.jpeg" alt="Imagem" width="200" height="100">
            <p> Maquiagem </p>
        </button>
    </nav>

    <div>
        <!-- Conteúdo principal do seu site vai aqui -->
    </div>

    <footer class="footer">
        <button class="pagina">Calendário</button>
        <button class="pagina">Home</button>
        <button class="pagina">Perfil</button>
    </footer>
</body>

</html>