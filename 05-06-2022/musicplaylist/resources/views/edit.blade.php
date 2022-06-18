<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">


                <div class="text logo-text">
                    <span class="txt">TUNE</span>

                </div>
            </div>


        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">


                    <li class="nav-link">
                        <a href="/dashboard.html">

                            <span class="text nav-text">HOME</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">POPULAR</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">MY MUSIC</span>
                        </a>
                    </li>

                    </br>

                    <al>
                        <span class="txt">DISCOVER</span>
                    </al>

                    </br>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">DISCOVER WEEKLY</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">POP TOP 10</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">DAILY MIX</span>
                        </a>
                    </li>

                    </br>

                    <al>
                        <span class="txt">ACCOUNT</span>
                    </al>

                    </br>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">PROFILE </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">OFFLINE MUSIC </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">

                            <span class="text nav-text">PREMIUM PLAN </span>
                        </a>
                    </li>

                </ul>
            </div>


        </div>

    </nav>

    <section class="home">
        <label for="name">Name  :</label>
        <input type="text" id="name" name="name" required
       minlength="4" maxlength="40" >

    </section>
