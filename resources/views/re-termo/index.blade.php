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
	<h2> <b> "RE - PROCESOS DE ÁREA TERMOFIJADO" <br> </b> <br> Control y Administracion de Datos </h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/reprocesotejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;RE-Tejido</li></a>
		<a class="aa" href="{{ url('/reprocesolavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;RE-Lavado</li></a>
		<a class="aa" href="{{ url('/reprocesotumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;RE-Tumbler</li></a>
		<a class="aa" href="{{ url('/reprocesorepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;RE-Repelente</li></a>
	</ul>
						
</div>

<div class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Re - Procesos Termofijado y registro de nuevos Procesos al sistema.</h4><br>
			
			<a href=" {{ route('reprocesotermofijados.create') }}" type="submit" class="btn btn-default" 
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
	   	<a class="aa" href="{{ url('/reprocesobackings') }}"><li>RE-Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/reprocesotermofijados') }}"><li>RE-Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/reprocesopunzonados') }}"><li>RE-Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/reprocesobondeos ') }}"><li>RE-Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>
&nbsp;&nbsp;&nbsp;
<h2>Listado de Re - Procesos Area Termofijado</h2> 

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>
					    <th >Peso Orilla</th>
					    <th >Peso Centro</th>
					    <th >Peso Orilla</th>
					    <th >Peso Promedio</th>
					    <th >Ancho Util</th>	
					    <th>Elongacion W</th>
					    <th>Elongacion F</th>
					    <th>Espesor</th>
					    <th>Lecturas de color DL</th>
					    <th>Lecturas de color DA</th>
					    <th>Lecturas de color DB</th>
					    <th>Distancia W</th>
					    <th>Tiempo W</th>
					    <th>Velocidad W</th>
					    <th>Distancia F</th>
					    <th>Tiempo F</th>
					    <th>Velocidad F</th>
					    <th>Apariencia</th>
					    <th>Tono</th>
						<th >Disposicion</th>
					    <th >Fecha de Entrega</th>
					    <th >Hora de Entrega</th>
					    <th >Nombre del Analista</th>	
					    <th >Comentarios</th>	
					    <th >ID </th>
					    <th >&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($retermos as $reter)
				 <tr>
				 	<td> {{ $reter->pOrilla_ReTermo }} </td>
				 	<td> {{ $reter->pCentro_ReTermo }} </td>
				 	<td> {{ $reter->ppOrilla_ReTermo }} </td>
				 	<td> {{ $reter->pPromedio_ReTermo }} </td>
				 	<td> {{ $reter->anchoU_ReTermo }} </td>
				 	<td> {{ $reter->elongacionW_ReTermo }} </td>
				 	<td> {{ $reter->elongacionF_ReTermo }} </td>
				 	<td> {{ $reter->espesor_ReTermo }} </td>
				 	<td> {{ $reter->lecColorDL_ReTermo }} </td>
				 	<td> {{ $reter->lecColorDA_ReTermo }} </td>
				 	<td> {{ $reter->lecColorDB_ReTermo }} </td>
				 	<td> {{ $reter->distanciaW_ReTermo }} </td>
				 	<td> {{ $reter->tiempoW_ReTermo }} </td>
				 	<td> {{ $reter->velocidadW_ReTermo }} </td>
				 	<td> {{ $reter->distanciaF_ReTermo }} </td>
				 	<td> {{ $reter->tiempoF_ReTermo }} </td>
				 	<td> {{ $reter->velocidadF_ReTermo }} </td>
				 	<td> {{ $reter->apariencia_ReTermo }} </td>
				 	<td> {{ $reter->tono_ReTermo }} </td>
				 	<td> {{ $reter->disposicion_ReTermo }} </td>
				 	<td> {{ $reter->fechaE_ReTermo }} </td>
				 	<td> {{ $reter->horaE_ReTermo }} </td>
				 	<td> {{ $reter->analista_ReTermo }} </td>
				 	<td> {{ $reter->comentario_ReTermo }} </td>
				 	<td> {{ $reter->id_PTermo }} </td>
				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('reprocesotermofijados.edit', $reter->id_ReTermo) }} " style="background: #009900; 
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
				 		<form action=" {{ route('reprocesotermofijados.destroy', $reter->id_ReTermo) }} " method="POST" >
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
		{!! $retermos->render() !!}
	</div>
	

@endsection