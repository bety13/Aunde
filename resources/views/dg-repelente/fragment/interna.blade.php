<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AUNDE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style/Pro_T_style.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e6e6e6;" >
   
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #0c2341; color: white" >
            <div class="container" style=" color: white" >
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white; font-size: 25px" >
                    Aunde
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style=" " >
                                 

                                <li class="nav-item dropdown" style="color: white" >
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   OPCIONES <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="" >
                                    <a style="color: #0c2341"  class="dropdown-item" href="{{ url('/dgrepelentes') }}" >
                                    Cancelar 
                                    </a>
                                    <a style="color: #0c2341"  class="dropdown-item" href="{{ url('/dgrepelentes') }}" >
                                    Regresar a DG Repelente 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        <!-- Authentication Links -->
                        @guest
                            
                        @else
                            <li class="nav-item dropdown" style="color: white" >
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="" >
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
                        @endguest



                    </ul>
                </div>
            </div>
        </nav>

        <div style="background-color: white; height: 5px; width: 100%" ></div>
        <div style="background-color: #0c2341; height: 3px; width: 100%" ></div>
        <div style="background-color: #808080; height: 3px; width: 100%" ></div>


        <div style="background-color: width: 100%;height: 100%;background-color: #e6e6e6;position: relative;">
        <div style="background-color:#cccccc  ;position: relative;width: 97%;padding: 15px;margin: 20px;float: left;" >

            
            @yield('content')
        </div>
        </div>
   
</body>
</html>
