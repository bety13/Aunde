@extends('layouts.main')
@section('content')

<style type="text/css">
	th {
		color:#fff; background-color:#263359; font-size: 14px; padding:7px;
	}
	td {
		background-color:#a5b1d9;
		 border: 2px solid #E7EFE0;
	}
	div#menu {
		width: 200px;
		margin-top: 50px;
	}
	div#menu ul {
		list-style: none;

	}
	div#menu ul li {
		margin-top: 6px;
		font-family: tahoma;
		font-size: 13px;
		background-color: #0c2341;
		width: 160px;
		padding-top: 6px;
		padding-bottom: 8px;
		border-radius: 0px 20px 20px 0px;
		padding-left: 15px;
		box-shadow: 5px 0px 10px #939393;
		-webkit-transition:padding-left 0.6s;
		color: white;
	}
	div#menu ul li {
		padding-left: 40px;
	}

	/*____________________________________*/
	div#menuu {
		width: 200px;
		margin-top: 50px;
	}
	div#menuu ul {
		list-style: none;

	}
	div#menuu ul li {
		margin-top: 6px;
		font-family: tahoma;
		font-size: 13px;
		background-color: #0c2341;
		width: 160px;
		padding-top: 6px;
		padding-bottom: 8px;
		border-radius: 20px 0px 0px 20px;
		padding-left: 15px;
		box-shadow: 5px 0px 10px #939393;
		-webkit-transition:padding-left 0.6s;
		color: white;
	}
	div#menuu ul li {
		padding-left: 40px;
	}


</style>

<div id="no" class="section-heading">
	<h2> <b> "PROCESOS DE ÁREA PUNZONADO" <br> </b> <br> Control y Administracion de Datos </h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/procesotejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Tejido</li></a>
		<a class="aa" href="{{ url('/procesolavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Lavado</li></a>
		<a class="aa" href="{{ url('/procesotumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Tumbler</li></a>
		<a class="aa" href="{{ url('/procesorepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Pro Repelente</li></a>
	</ul>
						
</div>

<div id="no" class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Procesos Punzonado y registro de nuevos Procesos al sistema.</h4><br>
			
			<a href=" {{ route('procesopunzonados.create') }}" type="submit" class="btn btn-default" 
			style="background: #0c2341;
			  border: 0;
			  width: 200px;
			  padding: 5px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;" 
			  class="enviar">
			  <img src="add.png" style="width: 30px">
			  &nbsp;&nbsp;&nbsp;&nbsp;Nuevo</a></center>
</div>

<div id="menuu" style="float: left">
	<ul>	
	   	<a class="aa" href="{{ url('/procesobackings') }}"><li>Pro Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesotermofijados') }}"><li>Pro Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesopunzonados') }}"><li>Pro Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/procesobondeos') }}"><li>Pro Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>

<h2 id="no">Listado de Procesos Area Punzonado</h2> 

<!-- B  U  S  C  A  D  O  R              C  L  I  E  N  T  E  S      -->

<div id="no" class="datoss" style="background-color: #e6e6e6">
			<center>
			<h4>Ingresa algun dato de la evaluacion del proceso, posteriormente se realizará la busqueda adecuada.</h4><br>
			<input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar...">
			<img src="buscar.png" style="width: 27px">
			</center>
</div>

<!-- E   N    D         B   U   S   C   A   D   O   R       -->

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table id="mytable" class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>

					    <th >ID Proceso</th>
					    <th >Peso Orilla</th>
					    <th >Peso Centro</th>
					    <th >Peso Orilla</th>
					    <th >Peso Promedio</th>
					    <th >Ancho Util</th>	
					    <th >Apariencia</th>
						<th >Disposicion</th>
					    <th >Fecha de Entrega</th>
					    <th >Hora de Entrega</th>
					    <th >Nombre del Analista</th>	
					    <th >Comentarios</th>	
					    <th id="no">&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($procesopunzo as $propun)
				 <tr>

				 	<td> {{ $propun->id_Ramas }} </td>
				 	<td> {{ $propun->pOrilla_PPunzo }} </td>
				 	<td> {{ $propun->pCentro_PPunzo }} </td>
				 	<td> {{ $propun->ppOrilla_PPunzo }} </td>
				 	<td> {{ $propun->pPromedio_PPunzo }} </td>
				 	<td> {{ $propun->anchoU_PPunzo }} </td>
				 	<td> {{ $propun->apariencia_PPunzo }} </td>
				 	<td> {{ $propun->disposicion_PPunzo }} </td>
				 	<td> {{ $propun->fechaE_PPunzo }} </td>
				 	<td> {{ $propun->horaE_PPunzo }} </td>
				 	<td> {{ $propun->analista_PPunzo }} </td>
				 	<td> {{ $propun->comentario_PPunzo }} </td>
				 	
				 	
				 	<td id="no">
				 		<a type="submit" class="btn btn-succes"  href=" {{ route('procesopunzonados.edit', $propun->id_PPunzo) }} " style="background: #009900; 
											  border: 0;
											  width: 100px;
											  padding: 10px;
											  height: 40px;
											  border-radius: 3px;
											  color: white;
											  cursor: pointer;
											  transition: background 0.3s ease-in-out;">
												<img src="pencil.png" style="width: 17px">
												Editar 
											</a>
				 	</td>
				 	<td id="no">
				 		<form action=" {{ route('procesopunzonados.destroy', $propun->id_PPunzo) }} " method="POST" >
				 			{{ csrf_field() }}
				 			<input type="hidden" name="_method" value="DELETE">
				 			<button onclick="return confirm('¿Seguro que deseas Eliminar?')" type="submit" class="btn btn-danger" style="background: #990000; 
										 border: 0;
											width: 100px;
										padding: 10px;
											height: 40px;
										 border-radius: 3px;
											color: white;
										cursor: pointer;
											transition: background 0.3s ease-in-out;">
										<img src="eliminar.png" style="width: 17px">Borrar</button>
				 		</form>
				 	</td>
				 </tr>
				 @endforeach
			</tbody>
		</table>
		{!! $procesopunzo->render() !!}
	</div>


<!--    F   O  R  M         O  F          C  R  E  A  T  E      -->

<div id="registrar" class="datoss" style="background-color: #e6e6e6; float:left;"> 

		
<div style="background-color: white; width: 100%; height: 5px;"></div><br>
<h2>Registro de resultados de prueba de material de producción</h2>
<div class="lin"></div>
<div class="lin2"></div><br>

		<!--   T  A  B  L  E      O  F    D  A  T  E  S     T  E  L  A  S     -->

		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<center>
		<table class="table table-striped" border="1">
			<thead>
				<thead>
					<tr>
						<th colspan="7">CARACTERISTICAS DEL MATERIAL</th>
					</tr>
					<tr>
						<th rowspan="">Prueba:</th>
					    <th rowspan="">Peso orilla</th>
					    <th rowspan="">Peso centro</th>
					    <th rowspan="">Peso orilla</th>
					    <th colspan="">Peso promedio</th>
					    <th colspan="">Ancho util</th>	
					    <th colspan="">Apariencia</th>	
					</tr>
					<tr>    
					    <th>Standard:</th>
					    <td colspan="4"></td>
					    <td></td>
					    <td></td>
					</tr>
					<tr>    
					    <th>Unidad de medida:</th>
					    <td colspan="4"></td>
					    <td></td>
					    <td></td>
					</tr>
					<tr>    
					    <th>LSE:</th>
					    <td colspan="4"></td>
					    <td></td>
					    <td></td>
					</tr>
					<tr>    
					    <th>LIE:</th>
					    <td colspan="4"></td>
					    <td></td>
					    <td></td>
					</tr>
				</thead>
			</thead>
		</table>
		</center>
	</div>

		<!-- E  N  D      D  A  T  E  S     -->


<form action="{{ url ('procesolavados') }}" method="POST" style="background-color: ">
		{{ csrf_field() }}

<div style="background-color: ; width: 80%; margin-right:auto; margin-left: auto">
<div style="width: 35%; background-color: ; float: left;">

<label style="font-size: 16px; color: black">Peso Orilla :</label>&nbsp;&nbsp; 
<input type="text" name="pOrilla_PPunzo" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso Centro :</label>
<input type="text" name="pCentro_PPunzo" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso Orilla :</label>&nbsp;&nbsp;
<input type="text" name="ppOrilla_PPunzo" class="cantidad" placeholder="0"><br>
<br/>

<label style="font-size: 16px; color: black">Peso Promedio :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<label name="promedio_PTej" id="total_monto_fiscal" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 16px; color: black; ">Confirmar Peso Promedio :</label>&nbsp;&nbsp;
<input type="text" name="pPromedio_PPunzo" style="width: 83px;"><br><br>

<label style="font-size: 16px; color: black; ">Ancho Util :</label>&nbsp;&nbsp;&nbsp;
{!! Form::text('anchoU_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Apariencia :</label>&nbsp;&nbsp;&nbsp;
{!! Form::text('apariencia_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>
	
</div>
<div style="width: 40%; background-color: ; float: right;">

<label style="font-size: 16px; color: black; ">Disposición :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--{!! Form::text('disposicion_PTej', null, ['class' => 'form-control'] ) !!}-->
{!! Form::select('disposicion_PPunzo', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Fecha de Entrega :</label>&nbsp;&nbsp;&nbsp;
{!! Form::text('fechaE_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>
	

<label style="font-size: 16px; color: black; ">Hora de Entrega :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('horaE_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>
	

<label style="font-size: 16px; color: black; ">Analista :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('analista_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>
	
<label style="font-size: 16px; color: black; ">Comentario :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('comentario_PPunzo', null, ['class' => 'form-control'] ) !!}<br><br>
	

<label style="font-size: 16px; color: black; ">ID  :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}<br><br>

</div>

<!--     B    u     T      T      O      N    -->
		<div class="form-group">
			<button  
			type="submit" class="btn btn-default" 
			style="float: right; background: #0c2341; 
			  border: 0;
			  width: 250px;
			  padding: 10px;
			  height: 40px;
			  border-radius: 3px;
			  color: white;
			  cursor: pointer;
			  transition: background 0.3s ease-in-out;" 

			class="enviar">
				<i class="fa fa-plus"></i>Registrar resultados
				 <img src="register.png" style="width: 20px">
			</button>
		</div>

<!--    E  N  D         F  O  R  M      C  R  E  A  T  E      -->








<!--    S  C  R  I  P  T            J Q  U  E  R  Y   -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	 var total=0;
$(document).ready(function() {
    $('input.cantidad').blur(function() { calcular_total() });
    calcular_total();
});
function calcular_total() {
    total=0;
    $('input.cantidad').each(function() {
        var v=parseFloat($(this).val());
        if (isNaN(v)) {
            v=0;
            $(this).val(0);
        }
        total+=v/3;
    });
    $('label#total_monto_fiscal').html(total);
}
</script>

<style>
.Rotate-90
{
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
 
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
 
  
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>

<!--  E  N  D           S  C  R  I  P  T            J Q  U  E  R  Y   -->
	

@endsection