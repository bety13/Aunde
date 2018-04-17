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
	<h2> <b> "DATOS GENERALES TEJIDO" <br> </b> <br> Control y Administracion de Datos </h2>
</div>
	<center><div class="lin" style="width: 300px;"></div></center>


<div id="menu" style="float: left">
	<ul>
		<a class="aa" href="{{ url('/dgtejidos') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Tejido</li></a>
		<a class="aa" href="{{ url('/dglavados') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Lavado</li></a>
		<a class="aa" href="{{ url('/dgtumblers') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Tumbler</li></a>
		<a class="aa" href="{{ url('/dgrepelentes') }}"><li><img src="option.png" style="width: 17px">&nbsp;&nbsp;DG Repelente</li></a>
	</ul>
						
</div>

<div class="datoss" style="background-color: #e6e6e6; float:left; width: 63% ">
			<center>
			<h4>Listado de todos los Datos Generales Tejido y registro de nuevas datos al sistema.</h4><br>
			
			<a href=" {{ route('dgtejidos.create') }}" type="submit" class="btn btn-default" 
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
	   	<a class="aa" href="{{ url('/dgbackings') }}"><li>DG Backing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgtermofijados') }}"><li>DG Termofijado&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgpunzonados') }}"><li>DG Punzonado&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
		<a class="aa" href="{{ url('/dgbondeos') }}"><li>DG Bondeo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="option.png" style="width: 17px"></li></a>
	</ul>
						
</div>

<h2>Listado de Datos Generales Tejido</h2>

		@include('clientes.fragment.info')
		<div class="datoss" style="overflow: scroll; visibility: visible;">

		<div class="lin"></div>
		<div class="lin2"></div><br>
		<table class="table table-hover table-striped">
			<thead>
				<thead>
					<tr>
						<th >Diseño Tejido</th>
					    <th >Fecha y Hora de Entrada</th>
					    <!--<th >Hora de Entrada</th>-->
					    <th >Numero de pieza</th>
					    <th >Color</th>
					    <th >Lote de Produccion</th>	
					    <th >Equipo</th>	
					    <th >Batch</th>
						<th >Lote de Urdido</th>
					    <th >Folio Bondeo</th>
					    <th >Codigo de producto terinado </th>
					    <th >Nombre de Operador</th>	
					    <th >Comentarios</th>
					    <th rowspan="2" >&nbsp;&nbsp;</th>
					</tr>
				</thead>
			</thead>
			<tbody>
				 @foreach($dgtejidos as $tej)
				 <tr>
				 	<td> {{ $tej->Diseño_Tej }} </td>
				 	<td style="font-size: 12px;"> {{ $tej->updated_at }} </td>
				 	<!--<td> {{ $tej->horaE_DG }} </td>-->
				 	<td> {{ $tej->Npieza_DG }} </td>
				 	<td> {{ $tej->color_DG }} </td>
				 	<td> {{ $tej->loteProd_DG }} </td>
				 	<td> {{ $tej->equipo_DG }} </td>
				 	<td> {{ $tej->batch_DG }} </td>
				 	<td> {{ $tej->loteUrdido_DG }} </td>
				 	<td> {{ $tej->folioBond_DG }} </td>
				 	<td> {{ $tej->codProdTermin_DG }} </td>
				 	<td> {{ $tej->nombreOpera_DG }} </td>
				 	<td> {{ $tej->comentarios_DG }} </td>
				 	
				 	
				 	
				 	<td>
				 		<a type="submit" class="btn btn-succes" href=" {{ route('dgtejidos.edit', $tej->id_DG) }} " style="background: #009900; 
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
				 		<form action=" {{ route('dgtejidos.destroy', $tej->id_DG) }} " method="POST" >
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