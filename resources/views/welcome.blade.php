<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
        <!--<div class="flex-center position-ref full-height">-->
            <!--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif-->

            <!--_______H E R E E E _____________-->
   
                <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <h1><a href="{{ url('/') }}">Aunde</a></h1>
                    </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                             @if (Route::has('login'))
                                <ul class="nav navbar-nav">
                                    @auth
                                    <li class="active"><a href="{{ url('/clientes') }}"><i class="fa fa-home"></i> <span> Home</span></a></li>
                                    @else
                                    <li><a href="{{ route('login') }}"><i class="fa fa-phone-square"></i> Login</a></li>
                                    <li><a href="{{ route('register') }}"><i class="fa fa-pencil-square"></i> Register</a></li>
                                    @endauth

                                </ul>
                            @endif
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>   <!-- site-header -->
                
                <div class="middle text-center clearfix">
                    <div class="container">
                    
                        <h1 class="pro-name" style="margin-top: -100px;">Sistema de Control</h1>
                        <p class="tagline">Inicia sesión para tener acceso al sistema.</p>
                        
                        
                        <div class="skills">
                        </div> <!-- skills -->
                        <div class="content-block text-center" id="portfolio" style="height: 200px;">
                        </div> 
                        <div class="content-block text-center" id="portfolio">
                        </div><br><br><br><br><br><br><br>

                        

                        <h1 class="" style="margin-top: -100px; font-family: Oswald; color: white">L A B O R A T O R I O </h1>
                        <!--<a href="#contact" target="_blank" class="btn btn-lg btn-hire wow animated zoomIn">Login</a>-->
                    </div>  <!-- container -->
                </div>  <!-- middle -->
                
             
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->



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






        


        <!-- js -->
        <script>
            new WOW().init();
        </script>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
       
        <script src="js/main.js"></script>

        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                            0:{
                                items:1,
                            },
                            600:{
                                items:1,
                            },
                            1000:{
                                items:1,
                            }
                    }
                })
            });
        </script>
           

<!--________E N D      H E R E______________-->

            
        <!--</div>-->
    </body>
</html>
