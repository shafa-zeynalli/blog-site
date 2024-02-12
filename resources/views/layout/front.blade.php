<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleBlog - Julia Walker's Personal Blog</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset("front/assets/css/style.css")}}">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>

<body class="light-theme">

<!--
  - #HEADER
-->

<header>

    <div class="container">

        <nav class="navbar">

            <a href="#">
                <img src="{{asset("front/assets/images/logo-light.svg")}}" alt="SimpleBlog logo" width="150" class="logo-light">
                <img src="{{asset("front/assets/images/logo-dark.svg")}}" alt="SimpleBlog logo" width="150" class="logo-dark">
            </a>

            <div class="btn-group">

                <button class="theme-btn theme-btn-mobile light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>

                <button class="nav-menu-btn">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

            </div>

            <div class="flex-wrapper">

                <ul class="desktop-nav">

                    <li>
                        <a href="#" class="nav-link">Home</a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">About Me</a>
                    </li>

                    <li>
                        <a href="#" class="nav-link">Contact</a>
                    </li>

                </ul>

                <button class="theme-btn theme-btn-desktop light">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                </button>

            </div>

            <div class="mobile-nav">

                <button class="nav-close-btn">
                    <ion-icon name="close-outline"></ion-icon>
                </button>

                <div class="wrapper">

                    <p class="h3 nav-title">Main Menu</p>

                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">About Me</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>

                </div>

                <div>

                    <p class="h3 nav-title">Topics</p>

                    <ul>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Database</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Accessibility</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Web Performance</a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>

    </div>

</header>





<main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero">

        <div class="container">

            <div class="left">

                <h1 class="h1">
                    Hi, I'm <b>Julia&nbsp;Walker</b>.
                    <br>Web Developer
                </h1>

                <p class="h3">
                    Specialized in <abbr title="Accessibility">a11y</abbr>
                    and Core Web Vitals
                </p>

                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Contact Me</a>
                    <a href="#" class="btn btn-secondary">About Me</a>
                </div>

            </div>

            <div class="right">

                <div class="pattern-bg"></div>
                <div class="img-box">
                    <img src="{{asset("front/assets/images/hero.png")}}" alt="Julia Walker" class="hero-img">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                </div>

            </div>

        </div>

    </div>





@yield('content')

</main>





<!--
  - #FOOTER
-->

<footer>

    <div class="container">

        <div class="wrapper">

            <a href="#" class="footer-logo">
                <img src="./assets/images/logo-light.svg" alt="SimpleBlog Logo" width="150" class="logo-light">
                <img src="./assets/images/logo-dark.svg" alt="SimpleBlog Logo" width="150" class="logo-dark">
            </a>

            <p class="footer-text">
                Learn about Web accessibility, Web performance, and Database management.
            </p>

        </div>

        <div class="wrapper">

            <p class="footer-title">Quick Links</p>

            <ul>

                <li>
                    <a href="#" class="footer-link">Advertise with us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">About Us</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Contact Us</a>
                </li>

            </ul>

        </div>

        <div class="wrapper">

            <p class="footer-title">Legal Stuff</p>

            <ul>

                <li>
                    <a href="#" class="footer-link">Privacy Notice</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Cookie Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Terms Of Use</a>
                </li>

            </ul>

        </div>

    </div>

    <p class="copyright">
        &copy; Copyright 2024 <a href="#">SimpleBlog</a>
    </p>

</footer>





<!--
  - custom js link
-->
<script src="./assets/js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
