<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    {{-- music --}}
    {{-- <link rel="stylesheet" href="{!! asset('css/music.css') !!}"> --}}

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsmediatags/3.9.5/jsmediatags.min.js"></script>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">


                <div class="text logo-text">
                    <span class="txt">TUNE</span>
                    <span class="txt">Welcome, Admin</span>

                </div>
            </div>


        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">


                    <li class="nav-link">
                        <a href="/admin/music">

                            <span class="text nav-text">MUSIC</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/admin/account">

                            <span class="text nav-text">ACCOUNT</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/admin/profile">
                            <span class="text nav-text">PROFILE</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    @yield('container')





</body>
</html>
