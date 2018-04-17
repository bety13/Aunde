
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Aunde Laboratorio</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--   M I N E   -->
                <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css2/bootstrap.min.css">
        <link rel="stylesheet" href="css2/font-awesome.min.css">
        <link rel="stylesheet" href="css2/owl.carousel.css">
        <link rel="stylesheet" href="css2/owl.theme.min.css">
        <link rel="stylesheet" href="css2/animate.css">
        <link rel="stylesheet" href="css2/main.css">

        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
<!--   E N D      M I N E   -->
</head>
<body>
    <div class="content-block" id="header">
    <div id="overlay-1">
        <header id="site-header" class="clearfix">
        
            <div class="container">

                <div class="pull-left">
                <h1><a href="{{ url('/') }}">Aunde</a></h1>
                </div>


                <div class="pull-right">
                <nav class="navbar site-nav" role="navigation">

                 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <i class="fa fa-bars fa-2x"></i>
                </button>
                </div>


                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())<!--@guest-->
                            <li style="right: 105px"><a href="{{ route('login') }}"><i class="fa fa-phone-square"></i> Login</a></li>
                            <li style="margin-top: -50px"><a href="{{ route('register') }}"><i class="fa fa-pencil-square"></i> Register</a></li>
                        @else


                        @if (Auth::user()->tipo == "administrador")
                       <li><a href="{{url('clientes')}}">Panel de Administrador</a></li>
                        @endif
                       
                        @if (Auth::user()->tipo != "administrador")
                       <li><a href="{{ url('/clientes') }}">Prototipos</a></li>
                        @endif



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif<!--@endguest-->
                    </ul>
                </div>
                </nav>
                </div>
                @yield('admin')
            </div>
        </header>   <!-- site-header -->

        
    
</div>
</div>


        <div class="content-block" id="contact">
            <div class="overlay-3">
                <header class="block-heading cleafix text-center">
                    <h1>Inicia sesión</h1>
                    <!-- <p>Feel Free to Contact</p> -->
                </header>

                <div class="block-content text-center" style="background-color: ">
                    <div class="container" style="background-color: ">
                        <div class="row" style="background-color: ">

                              <div class="col-md-6 wow animated fadeInRight" style="background-color: ">
                              <img src="img/user.png" style="width: 300px; height: 300px;">
                              
                               
                            </div>

                            <div class="col-md-6 wow animated fadeInLeft" style="height: 390px;">

                                <main class="py-4" >
                                    @yield('content')
                                </main>
                                

                                
                            </div>
                            
                    </div>
                </div>  <!-- block-content -->
            </div>  <!-- overlay-3 -->
        </div>  <!-- content-block -->
        <div style="background-color: rgba(38, 38, 38, 0.84); width: 100%; height: 100px;"></div>
        </div>


    

         <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">&copy; 2018 Aunde Mexico S.A de C.V</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By</div>
                    </div>
                </div>
            </div>
        </footer>   <!-- site-footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
