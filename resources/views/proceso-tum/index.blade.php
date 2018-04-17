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

<div class="section-heading">
	<h2> <b> "PROCESOS DE ÁREA TUMBLER" <br> </b> <br> Control y Administracion de Datos </h2>
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

<div class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Procesos Tumbler y registro de nuevos Procesos al sistema.</h4><br>
			
			<a href=" #registrar" type="submit" class="btn btn-default" 
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

<h2>Listado de Procesos Area Tumbler</h2> 

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>

					    <th >ID Proceso </th>
					    <th >Peso Orilla</th>
					    <th >Peso Centro</th>
					    <th >Peso Orilla</th>
					    <th >Peso Promedio</th>
					    <th >Ancho Util</th>	
					    <th>Elongacion W</th>
					    <th>Elongacion F</th>
					    <th >Apariencia</th>
					    <th>Tono</th>
						<th >Disposicion</th>
					    <th >Fecha de Entrega</th>
					    <th >Hora de Entrega</th>
					    <th >Nombre del Analista</th>	
					    <th >Comentarios</th>	
					    <th colspan="2">&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($procesotumb as $protu)
				 <tr>

				 	<td> {{ $protu->id_Ramas }} </td>
				 	<td> {{ $protu->pOrilla_PTum }} </td>
				 	<td> {{ $protu->pCentro_PTum }} </td>
				 	<td> {{ $protu->ppOrilla_PTum }} </td>
				 	<td> {{ $protu->pPromedio_PTum }} </td>
				 	<td> {{ $protu->anchoU_PTum }} </td>
				 	<td> {{ $protu->eloncacionW_PTum }} </td>
				 	<td> {{ $protu->eloncacionF_PTum }} </td>
				 	<td> {{ $protu->apariencia_PTum }} </td>
				 	<td> {{ $protu->tono_PTum }} </td>
				 	<td> {{ $protu->disposicion_Ptum }} </td>
				 	<td> {{ $protu->fechaE_PTum }} </td>
				 	<td> {{ $protu->horaE_PTum }} </td>
				 	<td> {{ $protu->analista_PTum }} </td>
				 	<td> {{ $protu->comentario_PTum }} </td>
				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('procesotumblers.edit', $protu->id_PTum) }} " style="background: #009900; 
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
				 	<td>
				 		<form action=" {{ route('procesotumblers.destroy', $protu->id_PTum) }} " method="POST" >
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
		{!! $procesotumb->render() !!}
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
							<th colspan="9">CARACTERISTICAS DEL MATERIAL</th>
						</tr>
						<tr>
							<th rowspan="2">Prueba :</th>
							<th colspan="4" >PESO</th>
							<th rowspan="2">Ancho Util</th>
							<th colspan="2">ELONGACION</th>
							<th rowspan="2">Aparencia</th>
						</tr>
						<tr>
							
						    <th rowspan="">Peso orilla</th>
						    <th rowspan="">Peso centro</th>
						    <th rowspan="">Peso orilla</th>
						    <th colspan="">Peso promedio</th>
						    <th>Warp</th>	
						    <th>Fill</th>
						</tr>
						<tr>    
						    <th>Standard:</th>
						    <td colspan="4"></td>
						    <td></td>
						    <td colspan="2"></td>
						    <td></td>
						</tr>
						<tr>    
						    <th>Unidad de medida:</th>
						    <td colspan="4"></td>
						    <td></td>
						    <td colspan="2"></td>
						    <td></td>
						</tr>
						<tr>    
						    <th>LSE:</th>
						    <td colspan="4"></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						</tr>
						<tr>    
						    <th>LIE:</th>
						    <td colspan="4"></td>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td></td>
						</tr>
					</thead>
				</thead>
			</table>
			</center>
		</div>

		<!-- E  N  D      D  A  T  E  S     -->

{!! Form::open(['route' => 'procesotumblers.store']) !!}

<div style="background-color: ; width: 80%; margin-right:auto; margin-left: auto">
<div style="width: 35%; background-color: ; float: left;">

<label style="font-size: 16px; color: black; ">ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('id_Ramas', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black">Peso Orilla :</label>&nbsp;&nbsp; 
<input type="text" name="pOrilla_PTum" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso Centro :</label>
<input type="text" name="pCentro_PTum" class="cantidad" placeholder="0"><br><br>

<label style="font-size: 16px; color: black">Peso Orilla :</label>&nbsp;&nbsp;
<input type="text" name="ppOrilla_PTum" class="cantidad" placeholder="0"><br>
<br/>

<label style="font-size: 16px; color: black">Peso Promedio :</label>&nbsp;&nbsp;&nbsp;&nbsp;
<label name="pPromedio_PTum" id="total_monto_fiscal" style="font-size: 16px; color: black"></label><br>

<label style="font-size: 16px; color: black; ">Confirmar Peso Promedio :</label>&nbsp;&nbsp;
<input type="text" name="pPromedio_PTum" style="width: 83px;"><br><br>

<label style="font-size: 16px; color: black; ">Ancho Util :</label>&nbsp;&nbsp;&nbsp;
{!! Form::text('anchoU_PTum', null, ['class' => 'form-control'] ) !!}<br><br>
	
<label style="font-size: 16px; color: black; ">Elongacion W :</label>
<input type="text" name="eloncacionW_PTum" style="width: 184px" ><br>
	
</div>
<div style="width: 40%; background-color: ; float: right;">

<label style="font-size: 16px; color: black; ">Elongacion F :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('eloncacionF_PTum', null, ['class' => 'form-control'] ) !!}<br><br>
	
<label style="font-size: 16px; color: black; ">Apariencia :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('apariencia_PTum', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Tono :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('tono_PTum', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Disposición :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!--{!! Form::text('disposicion_Ptum', null, ['class' => 'form-control'] ) !!}-->
{!! Form::select('disposicion_Ptum', ['' => 'Seleccionar', 'Liberado' => 'Liberado', 'Rechazado' => 'Rechazado', 'Segunda calidad' => 'Segunda Calidad'] , ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 15px; color: black; ">Fecha de Entrega :</label>
{!! Form::text('fechaE_PTum', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 15px; color: black; ">Hora de Entrega :</label>&nbsp;&nbsp;
	{!! Form::text('horaE_PTum', null, ['class' => 'form-control'] ) !!}<br><br>

<label style="font-size: 16px; color: black; ">Analista :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('analista_PTum', null, ['class' => 'form-control'] ) !!}<br><br>


<label style="font-size: 16px; color: black; ">Comentarios :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::text('comentario_PTum', null, ['class' => 'form-control'] ) !!}<br><br>

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

{!! Form::close() !!}


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

<!--  E  N  D           S  C  R  I  P  T            J Q  U  E  R  Y   -->
	

@endsection