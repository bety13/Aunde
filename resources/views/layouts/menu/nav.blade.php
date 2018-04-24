<!-- HEADER -->
	<header class="he" style="z-index: 1">
		<nav class="navv">
			<ul class="ulu">
				<a class="aa" href="{{ url('/clientes') }}"><li class="ili">Clientes</li></a>
				<a class="aa" href="{{ url('/telastejidos') }}"><li class="ili">Administrar Telas</li></a>
				<a class="aa" href="{{ url('/dgtejidos') }}"><li class="ili">Datos Generales</li></a>
			</ul>
				
				<a href="{{ url('/') }}"><img id='logo' src='img/Logo2.png' title="Inicio"></a>

			<ul class="ulu">
					<!--<ul class="nav">-->
				<li class="ili" ><a class="aa" href="{{ url('/procesotejidos') }}">Procesos</a></li>
				<li class="ili" ><a class="aa" href="{{ url('/reprocesotejidos') }}">Re-Procesos</a></li>
				<a class="aa" href=""><li class="ili">Certificado</li></a>
				<a class="aa" href="{{ url('etiqueta.blade.php') }}"><li class="ili">Etiqueta</li></a>
						


			</ul>
			@guest
                            
                        @else
                       
                                <a style="font-size: 13px" class="aa" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>

                                <div style="background-color: " class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a style="font-size: 13px" class="aa" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        
                        @endguest
		</nav>
	</header>
<!-- END HEADER -->