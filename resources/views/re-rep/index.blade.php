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
	<h2> <b> "RE - PROCESOS DE ÁREA REPELENTE" <br> </b> <br> Control y Administracion de Datos </h2>
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
			<h4>Listado de todos los Re - Procesos Repelente y registro de nuevos Procesos al sistema.</h4><br>
			
			<a href=" {{ route('reprocesorepelentes.create') }}" type="submit" class="btn btn-default" 
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
						
</div>&nbsp;&nbsp;&nbsp;

<h2>Listado de Re - Procesos Area Repelente</h2> 

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
					    <th>Repelente</th>
					    <th>Velcro</th>
					    <th>Croking Seco</th>
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
				 @foreach($repel as $rep)
				 <tr>
				 	<td> {{ $rep->pOrilla_ReRep }} </td>
				 	<td> {{ $rep->pCentro_ReRep }} </td>
				 	<td> {{ $rep->ppOrilla_ReRep }} </td>
				 	<td> {{ $rep->pPromedio_ReRep }} </td>
				 	<td> {{ $rep->anchoU_ReRep }} </td>
				 	<td> {{ $rep->elongacionW_ReRep }} </td>
				 	<td> {{ $rep->elongacionF_ReRep }} </td>
				 	<td> {{ $rep->repelente_ReRep }} </td>
				 	<td> {{ $rep->velcro_ReRep }} </td>
				 	<td> {{ $rep->croking_ReRep }} </td>
				 	<td> {{ $rep->distanciaW_ReRep }} </td>
				 	<td> {{ $rep->tiempoW_ReRep }} </td>
				 	<td> {{ $rep->velocidadW_ReRep }} </td>
				 	<td> {{ $rep->distanciaF_ReRep }} </td>
				 	<td> {{ $rep->tiempoF_ReRep }} </td>
				 	<td> {{ $rep->velocidadF_ReRep }} </td>
				 	<td> {{ $rep->apariencia_ReRep }} </td>
				 	<td> {{ $rep->tono_ReRep }} </td>
				 	<td> {{ $rep->disposicion_ReRep }} </td>
				 	<td> {{ $rep->fechaE_ReRep }} </td>
				 	<td> {{ $rep->horaE_ReRep }} </td>
				 	<td> {{ $rep->analista_ReRep }} </td>
				 	<td> {{ $rep->comentario_ReRep }} </td>
				 	<td> {{ $rep->id_PRep }} </td>
				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('reprocesorepelentes.edit', $rep->id_ReRep) }} " style="background: #009900; 
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
				 		<form action=" {{ route('reprocesorepelentes.destroy', $rep->id_ReRep) }} " method="POST" >
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
		{!! $repel->render() !!}
	</div>
	

@endsection