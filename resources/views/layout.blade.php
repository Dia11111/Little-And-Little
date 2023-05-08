<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Little and Little</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style1.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="all-body">
    <header class="header-1" style="background-image: url('images/nav-bg.svg'); width: 103%; right: 20px; top: 7px;">
        <nav class="navbar-1 ">
            <a href="# " class="logo ">
                <img src="images/little--little-logo-ngang-1@2x.png " style="width: 30%; " alt="Logo ">
            </a>
            <ul class="nav-menu-1 ">
                <li class="{{Request::is('/') ? 'current-page ':''}}"><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="{{Request::is('su-kien') ? 'current-page ':''}}"><a href="{{route('sukien')}}">Sự kiện</a></li>
                <li class="{{Request::is('lien-he') ? 'current-page ':''}}"><a href="{{route('lienhe')}}">Liên hệ</a></li>
            </ul>
            <div class="header-phone ">
                <span class="phone-icon ">
                    <img src="images/phone-icon.svg " style="width: 115px; ">
                </span>
                {{-- <div class="login-register ">
                    <a href="# " class="btn-login ">Đăng nhập</a>
                    <a>|</a>
                    <a href="# " class="btn-register ">Đăng ký</a>
                </div> --}}
                @if (Route::has('login'))
                <div class="login-register ">
                    @auth
                        <a href="{{ url('/home') }}" class="btn-login">{{ Auth::user()->username }}</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">Đăng nhập</a>
                        <a>|</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-register">Đăng ký</a>
                        @endif
                    @endauth
                </div>
                @endif

            </div>

        </nav>
    </header>
    {{-- container --}}
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
            
    </body>
</html>
