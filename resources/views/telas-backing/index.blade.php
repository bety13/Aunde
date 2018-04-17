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
	<h2>"Control y Administracion de Telas BACKING"</h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/telastejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Tejido</li></a>
		<a class="aa" href="{{ url('/telaslavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Lavado</li></a>
		<a class="aa" href="{{ url('/telastumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Tumbler</li></a>
		<a class="aa" href="{{ url('/telasrepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;Repelente</li></a>
	</ul>
						
</div>

<div class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todas las Telas de área Backing y registro de nuevas telas al sistema.</h4><br>
			
			<a href=" {{ route('telasbackings.create') }}" type="submit" class="btn btn-default" 
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
	   	<a class="aa" href="{{ url('/telasbackings') }}"><li>Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telastermofijados') }}"><li>Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telaspunzonados') }}"><li>Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/telasbondeos') }}"><li>Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>

<h2>Listado de Telas Backing</h2>
		
		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>
						<th rowspan="2">Cliente</th>
					    <th rowspan="2">Diseño</th>
					    <th rowspan="2">Color</th>
					    <th rowspan="2">OEM</th>
					    <th colspan="9">Metodo de prueba</th>
					    <th colspan="14">Unidad de Medida</th>	
					    <th colspan="15">Limite Superior</th>	
					    <th colspan="15">Limite Inferior</th>
					    <th colspan="2"
					    	rowspan="2">&nbsp;</th>
					</tr>
					<tr>
						    
					    <th>Peso</th>
					    <th>Ancho Util</th>
					    <th>Elongacion W / F</th>
					    <th>Repelencia</th>
					    <th>Velcro</th>
					    <th>Croking Seco</th>
					    <th>Flamabilidad W / F</th>
					    <th>Apariencia</th>
					    <th>Tono</th>

					    <th>Peso</th>
					    <th>Ancho Util</th>
					    <th>Elongacion W / F</th>
					    <th>Repelencia</th>
					    <th>Velcro</th>
					    <th>Croking Seco</th>
					    <th>Distancia Warp</th>
					    <th>Tiempo Warp</th>
					    <th>Velocidad Warp</th>
					    <th>Distancia Fill</th>
					    <th>Tiempo Fill</th>
					    <th>Velocidad Fill</th>
					    <th>Apariencia</th>
					    <th>Tono</th>

					    <th>Peso</th>
					    <th>Ancho Util</th>
					    <th>Elongacion  W</th>
   					    <th>Elongacion F</th>
					    <th>Repelencia</th>
					    <th>Velcro</th>
					    <th>Croking seco</th>
					    <th>Distancia Warp</th>
					    <th>Tiempo Warp</th>
					    <th>Velocidad Warp</th>
					    <th>Distancia Fill</th>
					    <th>Tiempo Fill</th>
					    <th>Velocidad Fill</th>
					    <th>Apariencia W</th>
   					    <th>Tono</th>

   					    <th>Peso</th>
					    <th>Ancho Util</th>
					    <th>Elongacion  W</th>
   					    <th>Elongacion F</th>
					    <th>Repelencia</th>
					    <th>Velcro</th>
					    <th>Croking seco</th>
					    <th>Distancia Warp</th>
					    <th>Tiempo Warp</th>
					    <th>Velocidad Warp</th>
					    <th>Distancia Fill</th>
					    <th>Tiempo Fill</th>
					    <th>Velocidad Fill</th>
					    <th>Apariencia W</th>
   					    <th>Tono</th>


					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($backings as $back) 
				 <tr>
				 	<td> {{ $back->nombreCliente }} </td>
				 	<td> {{ $back->Diseño_Back }} </td>
				 	<td> {{ $back->color_Back }} </td>
				 	<td> {{ $back->OEM_Back }} </td>

				 	<td> {{ $back->MP_peso_Back }} </td>
				 	<td> {{ $back->MP_anchoU_Back }} </td>
				 	<td> {{ $back->MP_elongacionFW_Back }} </td>
				 	<td> {{ $back->MP_rep_Back }} </td>
				 	<td> {{ $back->MP_velcro_Back }} </td>
				 	<td> {{ $back->MP_croking_Back }} </td>
				 	<td> {{ $back->MP_flamabilidadWF_Back }} </td>
				 	<td> {{ $back->MP_apari_Back }} </td>
				 	<td> {{ $back->MP_tono_Back }} </td>

				 	<td> {{ $back->UM_peso_Back }} </td>
				 	<td> {{ $back->UM_anchoU_Back }} </td>
				 	<td> {{ $back->UM_elongacionFW_Back }} </td>
				 	<td> {{ $back->UM_rep_Back }} </td>
				 	<td> {{ $back->UM_velcro_Back }} </td>
				 	<td> {{ $back->UM_croking_Back }} </td>
				 	<td> {{ $back->UM_distanciaW_Back }} </td>
				 	<td> {{ $back->UM_tiempoW_Back }} </td>
				 	<td> {{ $back->UM_velocidadW_Back }} </td>
				 	<td> {{ $back->UM_distanciaF_Back }} </td>
				 	<td> {{ $back->UM_tiempoF_Back }} </td>
				 	<td> {{ $back->UM_velocidadF_Back }} </td>
				 	<td> {{ $back->UM_apari_Back }} </td>
				 	<td> {{ $back->UM_tono_Back }} </td>

				 	<td> {{ $back->LSE_peso_Back }} </td>
				 	<td> {{ $back->LSE_anchoU_Back }} </td>
				 	<td> {{ $back->LSE_elongacionW_Back }} </td>
				 	<td> {{ $back->LSE_elongacionF_Back }} </td>
				 	<td> {{ $back->LSE_rep_Back }} </td>
				 	<td> {{ $back->LSE_velcro_Back }} </td>
				 	<td> {{ $back->LSE_croking_Back }} </td>
				 	<td> {{ $back->LSE_distanciaW_Back }} </td>
				 	<td> {{ $back->LSE_tiempoW_Back }} </td>
				 	<td> {{ $back->LSE_velocidadW_Back }} </td>
				 	<td> {{ $back->LSE_distanciaF_Back }} </td>
				 	<td> {{ $back->LSE_tiempoF_Back }} </td>
				 	<td> {{ $back->LSE_velocidadF_Back }} </td>
				 	<td> {{ $back->LSE_apari_Back }} </td>
				 	<td> {{ $back->LSE_tono_Back }} </td>

				 	<td> {{ $back->LIE_peso_Back }} </td>
				 	<td> {{ $back->LIE_anchoU_Back }} </td>
				 	<td> {{ $back->LIE_elongacionW_Back }} </td>
				 	<td> {{ $back->LIE_elongacionF_Back }} </td>
				 	<td> {{ $back->LIE_rep_Back }} </td>
				 	<td> {{ $back->LIE_velcro_Back }} </td>
				 	<td> {{ $back->LIE_croking_Back }} </td>
				 	<td> {{ $back->LIE_distanciaW_Back }} </td>
				 	<td> {{ $back->LIE_tiempoW_Back }} </td>
				 	<td> {{ $back->LIE_velocidadW_Back }} </td>
				 	<td> {{ $back->LIE_distanciaF_Back }} </td>
				 	<td> {{ $back->LIE_tiempoF_Back }} </td>
				 	<td> {{ $back->LIE_velocidadF_Back }} </td>
				 	<td> {{ $back->LIE_apari_Back }} </td>
				 	<td> {{ $back->LIE_tono_Back }} </td>

				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('telasbackings.edit', $back->id_Back) }} " style="background: #009900; 
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
				 		<form action=" {{ route('telasbackings.destroy', $back->id_Back) }} " method="POST" >
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
	</div>
	

@endsection