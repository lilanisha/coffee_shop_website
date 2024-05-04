<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItsCoffee</title>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
if (isset($_GET['registered']) && $_GET['registered'] == 'true'){
    echo "<script>alert('Registration successful!');</script>";
}
?>
    <!-- HEADER -->
    <header class="header">
        <div id = "left">
            <a href="index.php" class="logo"> ItsCoffee <i class="fas fa-mug-hot"></i></a>
        </div>

        <nav class = "navbar">
            <a href = "#home"> Home </a>
            <a href = "#about"> About us </a>
            <a href = "#menu"> Menu </a>
            <a href = "cart\index.html"> Buy now </a>
        </nav>

        <div id = "right">
            <a href = "login.html"> Login </a>
            <a href = "signup.html"> Register </a>
        </div>


    </header>

    <!-- HOME -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>A coffee for every mood!</h3>
            </div>

            <div class="image">
                <img src="image/home-img-1.png" class="main-home-image" alt="">
            </div>
        </div>

        <div class="image-slider">
            <img src="image/home-img-1.png" alt="">
            <img src="image/home-img-2.png" alt="">
            <img src="image/home-img-3.png" alt="">
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <h1 class="heading">about us </h1>

        <div class="row">
            <div class="image">
                <img src="image/about-img.png" alt="">
            </div>

            <div class="content">
                <h3 class="title"> Where every cup tells a story!</h3>
                <p>We're more than just a coffee shop — we are a gathering place, a cozy corner where conversations flow as smoothly as our expertly brewed coffee.
                    Our passion for exceptional coffee drives everything we do. From sourcing the finest beans to perfecting the art of brewing, our skilled baristas ensure each cup is a masterpiece of flavor and aroma. Whether you're craving a velvety latte or a bold espresso, we've got you covered.
                    But ItsCoffee is more than just great coffee; it's a place to connect. Whether you're catching up with friends, diving into work, or simply enjoying a moment of peace, our welcoming atmosphere invites you to stay awhile.
                    We're also committed to sustainability, using ethically sourced beans and eco-friendly practices to minimize our impact on the planet.
                    So come on in, grab a seat, and let us take you on a journey—one sip at a time.</p>

                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>quality coffee</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>cozy experience</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section class="menu" id="menu">
        <h1 class="heading">our menu</h1>

        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu-1.png" alt="Classic Espresso">
                <div class="content">
                    <h3>Classic Espresso</h3>
                    <p>Rich, intense, dark chocolate notes</p>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-2.png" alt="Vanilla Latte">
                <div class="content">
                    <h3>Vanilla Latte</h3>
                    <p>Smooth, creamy, hint of vanilla</p>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-3.png" alt="Caramel Macchiato">
                <div class="content">
                    <h3>Caramel Macchiato</h3>
                    <p>Espresso, milk, caramel sweetness</p>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-4.png" alt="Iced Americano">
                <div class="content">
                    <h3>Iced Americano</h3>
                    <p>Bold, smooth, over ice</p>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-5.png" alt="Decaf Mocha">
                <div class="content">
                    <h3>Decaf Mocha</h3>
                    <p>Decadent, chocolatey, caffeine-free indulgence</p>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-6.png" alt="Hazelnut coffee">
                <div class="content">
                    <h3>Hazelnut coffee</h3>
                    <p>Chocolate milk with hazelnut delicacies</p>
                </div>
            </a>
        </div>
        
        <div class = "try_now_btn">
            <button class ="try"> <a href="cart\index.html">Try one now! </a> <i class= "fas fa-arrow-right"></i></button>
        </div>
    </section>






    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box-left">
                <h3>Our branches</h3>
                <ul>
                    <li> Hadapsar </li>
                    <li> Kothrud </li>
                    <li> Baner </li>
                    <li> Viman nagar </li>
                </ul>
            </div>


            <div class="box-right">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i> coffee@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i> Pune, India</a>
            </div>

            <div class="box-right">
                <h3>Find us on: </h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>


    </section>













    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link  -->
    <script src="js/script.js"></script>

</body>

</html>