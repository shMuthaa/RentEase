<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rentease') }}</title>


    <!-- Google Fonts Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href={{ asset('assets/css/dash_style.css') }}>

</head>
<body>
    <div class="topbar">
        
    </div>
    <div class="container">
        
        <aside class="sidebar" id="sidebar">

            <!-- top sidebar -->
            <div class="sidebar__header">
                <div class="sidebar__logo">
                    <img class="sidebar__image" src="{{ asset('assets/images/logo.png') }}" alt="logo_admin">
                    <h2 class="sidebar__title">RENT<span class="text--danger">EASE</span></h2>
                </div>

                <div class="sidebar__close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            
            <!-- content sidebar -->
            <div class="sidebar__content">
                @if(auth()->check())
                    @if(auth()->user()->usertype == 'administrator')
                        {{-- Admin Menu --}}
                        <a class="{{ (request()->is('home')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/home">
                            <span class="material-icons-sharp sidebar__item-icon sidebar__item-icon--active">grid_view</span>
                            <h3 class="sidebar__item-text">Dashboard</h3>
                        </a>
                        
                        <a class="{{ (request()->is('tenants')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="{{ route('tenants.index') }}">
                            <span class="material-icons-sharp sidebar__item-icon">person_outline</span>
                            <h3 class="sidebar__item-text">Tenants</h3>
                        </a>

                        <a class="{{ (request()->is('payments')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/payments">
                            <span class="material-icons-sharp sidebar__item-icon">receipt_long</span>
                            <h3 class="sidebar__item-text">Payments</h3>
                        </a>
                        
                        <a class="{{ (request()->is('rooms')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/rooms">
                            <span class="material-icons-sharp sidebar__item-icon">inventory</span>
                            <h3 class="sidebar__item-text">Rooms</h3>
                        </a>

                        <a class="{{ (request()->is('users')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/users">
                            <span class="material-icons-sharp sidebar__item-icon">person</span>
                            <h3 class="sidebar__item-text">Users</h3>
                        </a>

                        <a class="sidebar__item"  href="{{ route('logout') }}"
                            onclick="event.preventDefault()  
                            document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <span class="material-icons-sharp sidebar__item-icon">logout</span>
                                <h3 class="sidebar__item-text">Logout</h3>
                        </a> 
                        
                    @elseif(auth()->user()->usertype == 'tenant')
                       
                     

                        <a class="{{ (request()->is('home')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/home">
                            <span class="material-icons-sharp sidebar__item-icon">money</span>
                            <h3 class="sidebar__item-text">Payment History</h3>
                        </a>

                        <a class="{{ (request()->is('make-payment')) ? 'sidebar__item sidebar__item--active':'sidebar__item' }}" href="/make-payment">
                            <span class="material-icons-sharp sidebar__item-icon">add</span>
                            <h3 class="sidebar__item-text">Pay with Paystack</h3>
                        </a>                     
                       
                        <a class="sidebar__item"  href="{{ route('logout') }}"
                            onclick="event.preventDefault()  
                            document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <span class="material-icons-sharp sidebar__item-icon">logout</span>
                                <h3 class="sidebar__item-text">Logout</h3>
                        </a> 





                    @endif

            @endif
                
                
                {{-- Tenant Menu --}}

            </div>



        </aside>

        @yield('content')
        
    </div>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>