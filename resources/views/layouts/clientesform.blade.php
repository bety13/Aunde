<html lang="es">
<head>
	<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>AUNDE</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="style/Pro_T_style.css">

<!--________________________________________________________________________________________________________-->
	<link href="portafolio/css/bootstrap.min.css" rel="stylesheet" />
	<link href="portafolio/css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="portafolio/css/style.css" rel="stylesheet" />
	<link href="css/index_style.css" rel="stylesheet" />
<!--________________________________________________________________________________________________________-->
	
	<script src='jst/bootstrap.minn.js'></script>



	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />


	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <meta name="description" content="Pimp your tables with CSS3" />
	<meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
    <link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/>

<style type="text/css">
			
			
			ul, ol {
				list-style:none;
			}
			
			
			
			.nav1 , .nav li a {
				text-decoration:none;
				display:block;
			}
			
			.nav1 , .nav li a:hover {
				background-color:#434343;
			}
			
			.nav1 , .nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav,.nav1 li ul li ul {
				right:-140px;
				top:0px;
			}
			.enviar{
			  background: #0c2341;
			  border: 0;
			  width: 250px;
			  padding: 10px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;
			}
			.enviar:hover {
			  background: #808080;
			  color: black;
			}
						
		</style>

</head>
<body  background="img/m_analist.jpg ">



    <div style="height: 7px; width: 100%; background-color: #808080; position: relative;float: left;"></div>



<div style="height: 20px; width: 100%; background-color: #102e56; position: relative;float: left;"></div>

<div style="height: 1px; width: 100%; background-color: black; position: relative;float: left;"></div>


<section style="background-color: #0c2341; height: 40px; width: 100%; position: relative; float: left;">

                    <div  style=" width: 42%; position: relative; float: left; margin: 5px; margin-left: 50px; color: white; background-color: ">
                        <button href="{{ url('/') }}">Aunde</button>
                        
                    </div>

                    

    
</section>

<!-- HEADER 
	<header class="he" style="z-index: 1">
		<nav class="navv">
			<ul class="ulu">
				<a class="aa" href="{{ url('/clientes') }}"><li class="ili">Clientes</li></a>
				<a class="aa" href="{{ url('/createtelastejido') }}"><li class="ili">Administrar Telas</li></a>
				<a class="aa" href="DatosGenerales.html"><li class="ili">Datos Generales</li></a>
			</ul>
				
				<a href="2Menu_Admin.html"><img id='logo' src='img/Logo2.png' title="Inicio"></a>

			<ul class="ulu">
				<li class="ili" ><a class="aa" href="">Procesos</a>
						
				</li>

				<a class="aa" href="Certificado.html"><li class="ili">Certificado</li></a>
				<a class="aa" href="Etiqueta.html"><li class="ili">Imp. Etiqueta</li></a>

			</ul>
		</nav>
	</header>
 END HEADER -->

<section class="allE">

	<div class="lin"></div>
	<div class="lin2"></div>


	<section style=" width: 100%; background-color: #e6e6e6; position: relative; float: left; ">
			<!-- Section: about -->
    <section id="about" class="home-section text-center bg-gray">
		

		<div class="py-4">
                    


					@yield('content')
				</div>




<!-- Click-->
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
<!-- Click-->



	</section>
	<!-- /Section: about -->
	</section>

	<div style="height: 40px; width: 100%; background-color: #e6e6e6; position: relative;float: left;"></div>

	<div style="height: 10px; width: 100%; background-color: #808080; position: relative;float: left;"></div>



<div style="height: 40px; width: 100%; background-color: #102e56; position: relative;float: left;"></div>

<div style="height: 1px; width: 100%; background-color: black; position: relative;float: left;"></div>


<section style="background-color: #0c2341; height: ; width: 100%; position: relative; float: left;">

					<div  style=" width: 42%; position: relative; float: left; margin: 30px; margin-left: 50px; color: white; background-color: ">
						AUNDE MEXICO S.A DE C.V  <br>
                        Lote 1, Manzana C. Parque Industrial, San Miguel. <br>
                        Huejotzingo Puebla, México. <br><br>
                        01 227 275 9900
					</div>

					

	
</section>

</section>


</body>
</html>