<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>

        #glass-navbar {
            
             position: fixed;
    top: 20px;
    left: 0;
    right: 0;
    width: 80%;
    margin: 0 auto;
    border-radius: 80px; /* Full round on desktop */
    padding: 0.5rem 1rem;
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.141) !important;
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    z-index: 9999;
    transition: border-radius 0.3s ease, padding 0.3s ease;
        }

        .navbar-brand {
    font-size: 1rem;
}

.nav-link {
    
    font-weight: 500;
    transition: color 0.3s ease;
    margin-right: 16px;
}

.nav-link:hover {
    color: #d4edda !important;
}


/* Default: white text/icons (for hero section) */
.navbar .nav-link,
.navbar .navbar-brand,
.navbar .navbar-brand i {
    color: white !important;
    transition: color 0.3s ease;
}


/* When scrolled past hero: switch to green */
.navbar.scrolled .nav-link,
.navbar.scrolled .navbar-brand,
.navbar.scrolled .navbar-brand i {
    color: #198754 !important; /* Bootstrap green or your preferred green */
}

/* Default for hero section: white text, green on hover */
.navbar .nav-link,
.navbar .navbar-brand,
.navbar .navbar-brand i {
    color: white !important;
    transition: color 0.3s ease;
}

.navbar .nav-link:hover {
    color: #004d29 !important; /* green on hover in hero */
}

/* Scrolled state: green text, white on hover */
/* .navbar.scrolled .nav-link,
.navbar.scrolled .navbar-brand,
.navbar.scrolled .navbar-brand i {
    color: #815714  !important;
} */

.navbar.scrolled .nav-link:hover {
    color: rgb(184, 182, 182) !important; /* white on hover in other sections */
}
 
/* Default: white toggler icon (for hero section) */
.navbar .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Scrolled: green toggler icon (for other sections) */
.navbar.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23198754' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Logo image styles */
.logo-img {
    margin-right: 10px;
    width: 38px;
    height: 38px;
    object-fit: contain; /* Keeps aspect ratio, prevents distortion */
    transition: width 0.3s ease, height 0.3s ease;
}


/* Brand text styling */
.brand-text {
    left: 50px;
    font-weight: 500;
    font-size: 1rem;
    color: white; /* default color in hero */
    transition: color 0.3s ease;
}

/* Color change after scroll */
.navbar.scrolled .brand-text {
    color: #815714; /* green */
    
}


.navbar .navbar-brand {
    display: flex;
    align-items: center;
    padding: 0; /* Remove default padding if needed */
}

        /* Hide brand text on small screens */
@media (max-width: 576px) {
    .brand-text {
        display: none;
    }
}
/* Hide brand text on tablet and mobile (≤992px) */
@media (max-width: 992px) {
    .brand-text {
        display: none;
    }
}
        
        @media (max-width: 576px) {
            #glass-navbar {
                border-radius: 20px;
                padding: 0.5rem;
            }
        }

        
        @media (max-width: 992px) {
            #glass-navbar {
                border-radius: 20px;
                padding: 0.5rem 0.75rem;
            }
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='black' stroke-width='2' stroke-linecap='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        #glass-btn {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.141) !important;
        box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        
    </style>
</head>
<body>
    <div id="app">

        <nav id="glass-navbar" class="navbar navbar-expand-lg sticky scrolled">
            <div class="container justify-content-between">

                <a class="navbar-brand fw-bold " href="{{ url('/') }}">
                    <img src="/asset/main/logo.png" alt="" class="logo-img">
                    <span class="brand-text">{{ config('app.name', 'EcoKyats') }}</span>
                </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
            
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link  text-center fw-bolder" href="{{'/'}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center fw-bolder" href="{{ url('/ebin')}}" >E-bin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center fw-bolder" href="{{ url('/articles') }}" >Our Community</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link text-center text-black fw-bolder" href="{{ route('login') }}">Login</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link text-center text-black fw-bolder" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle text-success fw-bolder" href="#" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end " id="glass-btn">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="my-5">
            @yield('content')
        </main>
    </div>
    

</body>
</html>
