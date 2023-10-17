<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/principal2.css">
    <title> Tela de início </title>

</head>

<body>
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-spa"></i> Quê Beleza</a>
        <nav class="navbar">
            <a href="#servicos"> serviços </a>
            <a href="#review"> review </a>
            <a href="#servicos"> serviços </a>
            <a href="#review"> review </a>
            
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"> </div>
            <div class="fas fa-bars" id="menu-btn"> </div>

        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="pesquise aqui...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        </div>
    </header>
    <section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid illo magni consequuntur aperiam impedit, in autem quas ipsum deleniti labore odio atque voluptatem corrupti nihil exercitationem maxime animi ducimus porro.</p>
        <a href="#" class="btn"> shop now</a>
    </div>

    </section>
    <section class="features" id="features">
        <h1 class="heading"> our <span>features</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="" alt="">
            </div>
        </div>
    </section>
    <?php
    require('rodape.php');
    ?>
    <script src="scripts.js"></script>

</body>

</html>