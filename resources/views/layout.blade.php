<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Little and Little</title>

        <link rel="shortcut icon" href="{{ asset('images/logo.svg') }}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="{{asset('css/style1.css')}}">
    </head>
    <style>
        .flatpickr-weekday {
            color: #FF8A00 !important;
        }
        .flatpickr-day.selected{
            background: #FF8A00 !important;
        }
    </style>
<body class="all-body">
    <header class="header-1" style="background-image: url('{{asset('images/nav-bg.svg')}}'); width: 103%; right: 20px; top: 7px;">
        <nav class="navbar-1 ">
            <a href="{{ url('/') }}" class="logo ">
                <img src="{{asset('images/little--little-logo-ngang-1@2x.png ')}}" style="width: 30%; " alt="Logo ">
            </a>
            <ul class="nav-menu-1 ">
                <li class="{{Request::is('/') ? 'current-page ':''}}"><a href="{{url('/')}}">Trang chủ</a></li>
                <li class="{{Request::is('su-kien') ? 'current-page ':''}}"><a href="{{route('sukien')}}">Sự kiện</a></li>
                <li class="{{Request::is('lien-he') ? 'current-page ':''}}"><a href="{{route('lienhe')}}">Liên hệ</a></li>
            </ul>
            <div class="header-phone ">
                <span class="phone-icon ">
                    <img src="{{asset('images/phone-icon.svg')}} " style="width: 115px; ">
                </span>

                {{-- @if (Route::has('login'))
                    <div class="login-register ">
                        @auth
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn-logout">{{ Auth::user()->username }}</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn-login">Đăng nhập</a>
                            <a>|</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-register">Đăng ký</a>
                            @endif
                        @endauth
                    </div>
                @endif --}}

            </div>

        </nav>
    </header>
    {{-- container --}}
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script>
        var totalPages = {{$totalPages}};
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
            
        });

        owl.on('changed.owl.carousel', function(event) {
            var currentPageElement = document.getElementById("currentPage");
            var currentSlideIndex = event.item.index;
            var currentSlideNumber = currentSlideIndex + 1;

            var currentPage = currentSlideNumber > totalPages ? totalPages : currentSlideNumber;
            currentPageElement.innerHTML = currentPage;
        });
        
        
    </script>

    <script src="{{ asset('js/carousel.js') }}" defer></script>
    <script>
        var toastTrigger = document.getElementById('liveToastBtn')
        var toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
        toastTrigger.addEventListener('click', function () {
            var toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
        })
        }
    </script>
    <script>
        flatpickr("#myID", {
            dateFormat: "Y-m-d",
        });
    </script>
    {{-- <script>
        function selectTicket(ticket) {
            const selectedTicketInput = document.getElementById('selectedTicket');
            selectedTicketInput.value = ticket;
        }
    </script> --}}
    <script>
        var input = document.getElementById('DatePicked');
        var button = document.getElementById('myButton');

        
        var flatpickr = flatpickr("#myButton", {
            onChange: function(selectedDates, dateStr, instance) {
                input.value = dateStr;
            }
        });
    </script>
</body>
</html>
