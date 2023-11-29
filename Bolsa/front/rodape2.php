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

        .footer .icons div:hover {
            color: var(--orange);
        }

        .footer .icons div {
            height:1rem;
            width: 1rem;
            line-height: 1rem;
            border-radius: .5rem;
            color: var(--black);
            font-size: 1.5rem;
            text-align: center;
            align-items: center;
            align-self: center;
            align-content: center;
            justify-content: center;
            padding: 0 2.3rem;
        }

        .footer {
            background: #b3cbb9;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            align-content: center;
            align-self: center;
            justify-content: space-between;
            padding: 2rem 9%;
            box-shadow: var(--box-shadow);
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="icons">
            <div class="fa-regular fa-calendar" id="calendar-btn"></div>
            <div class="fa-solid fa-house" id="home-btn"></div>
            <div class="fas fa-user" id="user-btn"> </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts.js"></script>

</body>

</html>