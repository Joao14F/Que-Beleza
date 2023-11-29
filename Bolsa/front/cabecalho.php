<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Que Beleza</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

        :root {
            --orange: #6A66A3;
            --black: #130f40;
            --light-color: #666;
            --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, 0.23);
            --border: .2rem solid rgb(0, 0, 0.1);
            --outline: .1rem solid rgb(0, 0, 0.1);
            --outline-hover: .2rem solid var(--black);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #B3CBB9;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
            color: #ffffff;
            /* Cor do texto no cabeçalho */
        }

        .group {
            display: flex;
            line-height: 28px;
            align-items: center;
            position: relative;
            max-width: 190px;
        }

        .input {
            width: 90%;
            height: 35px;
            line-height: 28px;
            padding: 0 1rem;
            padding-left: 2.5rem;
            border: 2px solid transparent;
            border-radius: 8px;
            outline: none;
            background-color: #f3f3f4;
            color: #0d0c22;
            transition: .3s ease;
        }

        .input::placeholder {
            color: #9e9ea7;
        }

        .input:focus,
        input:hover {
            outline: none;
            border-color: rgba(234, 76, 137, 0.4);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
        }

        .icon {
            position: absolute;
            left: 1rem;
            fill: #9e9ea7;
            width: 1rem;
            height: 1rem;
        }

        .header .logo i {
            color: var(--orange);
        }

        a {
            font-size: 10px;
            color: var(--black);
            font-family: 'Poppins';
            text-decoration: none;
        }

        .heading span {
            background: var(--orange);
            color: #fff;
            display: inline-block;
            padding: .5rem 3rem;
            clip-path: polygon();

        }

        .header {
            background: #b3cbb9;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 9%;
            box-shadow: var(--box-shadow);
            /* margin-bottom: 4rem; Removido para evitar espaço extra */
        }
        .header .logo {
            font-size: 1.3rem;
            font-weight: bolder;
            color: var(--black);
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-spa"></i> Quê Beleza</a>

        <div class="group">
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
            <input placeholder="Pesquisar" type="search" class="input">
        </div>
    </header>

    <!-- O restante do conteúdo da sua página vai aqui -->

</body>

</html>